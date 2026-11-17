// 3D air handler designer. Builds the unit from sections along the airflow (x axis, in feet),
// sizes it with rules of thumb, and hands the design to the quote form.
import * as THREE from "three";
import { OrbitControls } from "three/addons/controls/OrbitControls.js";

const $ = (s) => document.querySelector(s);
const fmt = (n) => Math.round(n).toLocaleString("en-US");
const ftin = (inches) => { let f = Math.floor(inches / 12), r = Math.round(inches - f * 12); if (r === 12) { f++; r = 0; } return f + "′-" + r + "″"; };
const reduceMotion = window.matchMedia && matchMedia("(prefers-reduced-motion: reduce)").matches;

// Canonical upstream-to-downstream order. len = typical length (in), dp = pressure drop (in. w.g.)
const SECTIONS = [
  { id: "mix",    name: "Intake and mixing box",       len: 36, dp: 0.15 },
  { id: "pre",    name: "Pre-filter, MERV 8",          len: 12, dp: 0.45 },
  { id: "erw",    name: "Energy recovery wheel",       len: 42, dp: 0.80 },
  { id: "heat",   name: "Heating coil, hot water",     len: 18, dp: 0.20 },
  { id: "cool",   name: "Cooling coil, chilled water", len: 30, dp: 0.90 },
  { id: "uv",     name: "UV-C lamps",                  len: 12, dp: 0.05 },
  { id: "access", name: "Access section",              len: 24, dp: 0.00 },
  { id: "fan",    name: "Fan array",                   len: 0,  dp: 0.00 },
  { id: "atten",  name: "Sound attenuator",            len: 48, dp: 0.35 },
  { id: "hum",    name: "Steam humidifier",            len: 36, dp: 0.10 },
  { id: "final",  name: "Final filter, MERV 14",       len: 30, dp: 0.75 },
  { id: "hepa",   name: "HEPA filter",                 len: 24, dp: 1.20 },
  { id: "dis",    name: "Discharge plenum",            len: 36, dp: 0.10 },
];
const BY_ID = Object.fromEntries(SECTIONS.map((s) => [s.id, s]));
const PRESETS = {
  office:   { cfm: 24000, esp: 1.5,  s: ["mix", "pre", "heat", "cool", "fan", "final", "dis"] },
  hospital: { cfm: 30000, esp: 2.0,  s: ["mix", "pre", "erw", "heat", "cool", "uv", "fan", "atten", "hum", "final", "dis"] },
  lab:      { cfm: 40000, esp: 2.5,  s: ["mix", "pre", "heat", "cool", "access", "fan", "final", "dis"] },
  data:     { cfm: 60000, esp: 0.75, s: ["mix", "pre", "cool", "fan", "dis"] },
};
const fanLen = (cfm) => Math.round(34 + Math.sqrt(cfm) / 12);
const secLen = (id, cfm) => (id === "fan" ? fanLen(cfm) : BY_ID[id].len);

const state = { cfm: 30000, esp: 2, loc: "indoor", casing: 2, sel: new Set(PRESETS.hospital.s), cutaway: true };

function fanGrid(cfm, W, H) {
  const n = Math.max(2, Math.ceil(cfm / 6500));
  let best = null;
  for (let rows = 1; rows <= n; rows++) {
    const cols = Math.ceil(n / rows);
    const score = Math.abs(Math.log((W / cols) / (H / rows))) + (rows * cols - n) * 0.25;
    if (!best || score < best.score) best = { rows, cols, score };
  }
  return { rows: best.rows, cols: best.cols, n: best.rows * best.cols };
}

function calc() {
  const secs = SECTIONS.filter((s) => state.sel.has(s.id)).map((s) => ({ ...s, len: secLen(s.id, state.cfm) }));
  const L = secs.reduce((a, s) => a + s.len, 0);
  const area = state.cfm / 500;
  const hFt = Math.sqrt(area / 1.45), wFt = area / hFt;
  const wall = state.casing * 2;
  const H = Math.round(hFt * 12 + 10 + wall);
  const W = Math.round(wFt * 12 + 2 + wall);
  const isp = secs.reduce((a, s) => a + s.dp, 0);
  const tsp = isp + state.esp;
  return { secs, L, W, H, isp, tsp, grid: fanGrid(state.cfm, W, H), hasFan: state.sel.has("fan"), bhp: (state.cfm * tsp) / (6356 * 0.65) };
}

/* ---------- three.js scene ---------- */
const host = $("#dz-canvas");
let renderer, scene, camera, controls, unit, fans = [], lastCalc;
const M = {};

function initScene() {
  renderer = new THREE.WebGLRenderer({ antialias: true, preserveDrawingBuffer: true, alpha: true });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.shadowMap.enabled = true;
  renderer.shadowMap.type = THREE.PCFSoftShadowMap;
  renderer.outputColorSpace = THREE.SRGBColorSpace;
  renderer.toneMapping = THREE.ACESFilmicToneMapping;
  host.appendChild(renderer.domElement);

  scene = new THREE.Scene();
  camera = new THREE.PerspectiveCamera(35, 1, 0.1, 500);
  controls = new OrbitControls(camera, renderer.domElement);
  controls.enableDamping = true;
  controls.maxPolarAngle = Math.PI * 0.495;

  scene.add(new THREE.HemisphereLight(0xffffff, 0x8a9a8c, 1.4));
  const sun = new THREE.DirectionalLight(0xffffff, 2.2);
  sun.position.set(-20, 35, 25);
  sun.castShadow = true;
  sun.shadow.mapSize.set(2048, 2048);
  Object.assign(sun.shadow.camera, { left: -40, right: 40, top: 40, bottom: -40, far: 120 });
  scene.add(sun);

  const ground = new THREE.Mesh(new THREE.PlaneGeometry(400, 400), new THREE.ShadowMaterial({ opacity: 0.18 }));
  ground.rotation.x = -Math.PI / 2;
  ground.receiveShadow = true;
  scene.add(ground);
  const grid = new THREE.GridHelper(200, 100, 0x9fb3a4, 0xc9d4ca);
  grid.material.transparent = true; grid.material.opacity = 0.5;
  scene.add(grid);

  const std = (color, extra = {}) => new THREE.MeshStandardMaterial({ color, roughness: 0.55, metalness: 0.25, ...extra });
  M.panel = std(0xdfe3e1, { metalness: 0.35, roughness: 0.45 });
  M.panelIn = std(0xbfc6c2, { side: THREE.BackSide });
  M.frame = std(0x8c9590, { metalness: 0.6, roughness: 0.35 });
  M.rail = std(0x1d2b23, { metalness: 0.4 });
  M.copper = std(0xb8693a, { metalness: 0.8, roughness: 0.3 });
  M.alu = std(0xc9d7e0, { metalness: 0.8, roughness: 0.3 });
  M.chill = std(0x3d7fb3, { metalness: 0.5, roughness: 0.35 });
  M.filter = std(0xf2efe6, { metalness: 0, roughness: 0.9 });
  M.bag = std(0xe6e9ef, { metalness: 0, roughness: 0.95 });
  M.wheel = std(0x9aa6ad, { metalness: 0.7, roughness: 0.5 });
  M.fan = std(0x2f3a34, { metalness: 0.5 });
  M.blade = std(0x22a447, { metalness: 0.4, roughness: 0.35, side: THREE.DoubleSide });
  M.motor = std(0x48524c, { metalness: 0.6 });
  M.pod = std(0x9aa39e, { metalness: 0.3, roughness: 0.7 });
  M.uv = new THREE.MeshStandardMaterial({ color: 0xc9b6ff, emissive: 0x8a5cff, emissiveIntensity: 1.2 });
  M.steam = std(0xd9dde0, { metalness: 0.7 });
  M.dark = std(0x111a15, { metalness: 0.1, roughness: 0.9 });
  M.door = std(0xcfd5d2, { metalness: 0.35, roughness: 0.4 });
  M.handle = std(0x22a447, { metalness: 0.5 });
  M.roof = std(0xb9c2bd, { metalness: 0.4 });
  M.person = std(0x6a7a70, { metalness: 0, roughness: 0.9 });
  M.air = new THREE.MeshBasicMaterial({ color: 0x2a6c9f });
  M.airRet = new THREE.MeshBasicMaterial({ color: 0x8a5a2b });

  new ResizeObserver(resize).observe(host);
  resize();
  animate();
}

function resize() {
  const w = host.clientWidth, h = host.clientHeight;
  if (!w || !h) return;
  renderer.setSize(w, h, false);
  camera.aspect = w / h;
  camera.updateProjectionMatrix();
}

const box = (w, h, d, mat, x = 0, y = 0, z = 0) => {
  const m = new THREE.Mesh(new THREE.BoxGeometry(w, h, d), mat);
  m.position.set(x, y, z);
  m.castShadow = true; m.receiveShadow = true;
  return m;
};
const cyl = (r, len, mat, axis = "x", seg = 32) => {
  const m = new THREE.Mesh(new THREE.CylinderGeometry(r, r, len, seg), mat);
  if (axis === "x") m.rotation.z = Math.PI / 2;
  if (axis === "z") m.rotation.x = Math.PI / 2;
  m.castShadow = true;
  return m;
};

// Section contents. Each builder gets the section's start x, length, inner width and height (feet)
// and returns a Group positioned in unit space (y from the top of the base rail).
const BUILD = {
  mix(g, x, L, W, H) {
    // dampers on top (return air) and on the inlet face (outdoor air)
    const n = Math.max(3, Math.round(L * 1.4));
    for (let i = 0; i < n; i++) {
      const b = box(L * 0.8 / n, 0.04, W * 0.75, M.frame, x + L * 0.1 + (i + 0.5) * (L * 0.8 / n), H - 0.05, 0);
      b.rotation.z = 0.5; g.add(b);
    }
    const m = Math.max(3, Math.round(H * 1.2));
    for (let i = 0; i < m; i++) {
      const b = box(0.04, H * 0.75 / m, W * 0.8, M.frame, x + 0.05, H * 0.12 + (i + 0.5) * (H * 0.75 / m), 0);
      b.rotation.z = 0.5; g.add(b);
    }
  },
  pre(g, x, L, W, H) {
    const k = Math.max(6, Math.round(W * 2));
    for (let i = 0; i < k; i++) {
      const p = box(0.02, H * 0.9, (W * 0.92) / k * 1.15, M.filter, x + L / 2, H / 2, -W * 0.46 + (i + 0.5) * (W * 0.92 / k));
      p.rotation.y = i % 2 ? 0.55 : -0.55; g.add(p);
    }
  },
  erw(g, x, L, W, H) {
    const r = Math.min(W, H) * 0.47;
    const w = cyl(r, 0.8, M.wheel, "x", 64); w.position.set(x + L / 2, H / 2, 0); g.add(w);
    const hub = cyl(r * 0.12, 0.95, M.frame, "x"); hub.position.copy(w.position); g.add(hub);
    for (let a = 0; a < 6; a++) {
      const s = box(0.9, r * 2 * 0.98, 0.06, M.frame, x + L / 2, H / 2, 0); s.rotation.x = (a * Math.PI) / 6; g.add(s);
    }
    g.add(box(L * 0.9, 0.08, W * 0.98, M.frame, x + L / 2, H / 2, 0)); // supply/exhaust split plate
  },
  heat(g, x, L, W, H) { coil(g, x, L, W, H, M.copper, false); },
  cool(g, x, L, W, H) { coil(g, x, L, W, H, M.chill, true); },
  uv(g, x, L, W, H) {
    for (let i = 0; i < 4; i++) {
      const t = cyl(0.06, W * 0.85, M.uv, "z", 12); t.position.set(x + L / 2, H * (0.2 + i * 0.2), 0); g.add(t);
    }
  },
  access(g, x, L, W, H) {
    g.add(box(L * 0.95, 0.03, W * 0.9, M.dark, x + L / 2, 0.02, 0)); // floor grating look
  },
  fan(g, x, L, W, H, c) {
    const { rows, cols } = c.grid;
    const bulk = box(0.08, H, W, M.frame, x + L * 0.18, H / 2, 0); g.add(bulk);
    const cw = W / cols, ch = H / rows, r = Math.min(cw, ch) * 0.36;
    for (let i = 0; i < rows; i++) for (let j = 0; j < cols; j++) {
      const y = ch * (i + 0.5), z = -W / 2 + cw * (j + 0.5), fx = x + L * 0.18;
      const cone = new THREE.Mesh(new THREE.CylinderGeometry(r * 0.85, r * 1.05, 0.25, 32, 1, true), M.fan);
      cone.rotation.z = -Math.PI / 2; cone.position.set(fx + 0.15, y, z); g.add(cone);
      const wheel = new THREE.Group(); wheel.position.set(fx + 0.55, y, z);
      const back = cyl(r, 0.06, M.fan, "x"); back.position.x = 0.35; wheel.add(back);
      for (let b = 0; b < 9; b++) {
        const bl = box(0.36, r * 0.55, 0.03, M.blade, 0.17, 0, 0);
        const piv = new THREE.Group(); piv.rotation.x = (b / 9) * Math.PI * 2;
        bl.position.y = r * 0.65; bl.rotation.y = 0.5; piv.add(bl); wheel.add(piv);
      }
      g.add(wheel); fans.push(wheel);
      const mot = cyl(r * 0.32, r * 0.9, M.motor, "x"); mot.position.set(fx + 0.95 + r * 0.45, y, z); g.add(mot);
    }
  },
  atten(g, x, L, W, H) {
    const k = Math.max(3, Math.round(W / 1.6));
    for (let i = 0; i < k; i++) {
      const p = box(L * 0.9, H * 0.94, (W / k) * 0.42, M.pod, x + L / 2, H / 2, -W / 2 + (W / k) * (i + 0.5));
      g.add(p);
    }
  },
  hum(g, x, L, W, H) {
    const hdr = cyl(0.14, W * 0.9, M.steam, "z"); hdr.position.set(x + L * 0.3, 0.35, 0); g.add(hdr);
    const k = Math.max(4, Math.round(W * 1.5));
    for (let i = 0; i < k; i++) {
      const t = cyl(0.06, H * 0.8, M.steam, "y", 12); t.position.set(x + L * 0.3, H * 0.45, -W * 0.42 + (i * W * 0.84) / (k - 1)); g.add(t);
    }
  },
  final(g, x, L, W, H) {
    g.add(box(0.12, H, W, M.frame, x + 0.2, H / 2, 0));
    const cols = Math.max(3, Math.round(W / 1.2));
    for (let j = 0; j < cols; j++) {
      const bag = box(L * 0.72, H * 0.9, (W / cols) * 0.62, M.bag, x + 0.26 + L * 0.36, H / 2, -W / 2 + (W / cols) * (j + 0.5));
      g.add(bag);
    }
  },
  hepa(g, x, L, W, H) {
    g.add(box(L * 0.5, H * 0.94, W * 0.94, M.filter, x + L / 2, H / 2, 0));
    const k = Math.max(2, Math.round(W / 2));
    for (let i = 1; i < k; i++) g.add(box(L * 0.52, H * 0.94, 0.06, M.frame, x + L / 2, H / 2, -W * 0.47 + (i * W * 0.94) / k));
  },
  dis(g, x, L, W, H) {
    const o = box(L * 0.6, 0.5, W * 0.6, M.frame, x + L / 2, H + 0.25, 0); g.add(o);
    g.add(box(L * 0.52, 0.52, W * 0.52, M.dark, x + L / 2, H + 0.26, 0));
  },
};

function coil(g, x, L, W, H, mat, pan) {
  const t = Math.min(L * 0.45, 0.9);
  const slab = box(t, H * 0.86, W * 0.94, mat, x + L / 2, H * 0.48, 0); g.add(slab);
  const fins = Math.round(W * 4);
  for (let i = 0; i < fins; i++) g.add(box(t * 1.02, H * 0.86, 0.01, M.alu, x + L / 2, H * 0.48, -W * 0.47 + (i * W * 0.94) / fins));
  for (const yy of [H * 0.12, H * 0.84]) { const hdr = cyl(0.11, 0.6, M.copper, "z"); hdr.position.set(x + L / 2, yy, W / 2 + 0.25); g.add(hdr); }
  if (pan) g.add(box(L * 0.9, 0.12, W * 0.98, M.steam, x + L / 2, 0.06, 0));
}

const DOOR_ON = new Set(["mix", "pre", "erw", "access", "fan", "final", "hepa", "hum", "uv"]);

function build() {
  const c = (lastCalc = calc());
  if (unit) { scene.remove(unit); unit.traverse((o) => o.geometry && o.geometry.dispose()); }
  fans = [];
  unit = new THREE.Group();
  const ft = (inch) => inch / 12;
  const L = ft(c.L), W = ft(c.W), H = ft(c.H), wall = ft(state.casing), rail = 0.5;
  const Wi = W - wall * 2, Hi = H - wall * 2;
  const inner = new THREE.Group(); inner.position.set(-L / 2, rail + wall, 0);
  unit.add(inner);

  if (!c.secs.length) { scene.add(unit); frame(true); return; }

  // base rail
  unit.add(box(L, rail, W, M.rail, 0, rail / 2, 0));

  // casing: floor, far wall, roof, ends, near wall (removed in cutaway)
  const shell = new THREE.Group(); unit.add(shell);
  shell.add(box(L, wall, W, M.panel, 0, rail + wall / 2, 0));
  shell.add(box(L, H, wall, M.panel, 0, rail + H / 2, -W / 2 + wall / 2));
  const roof = box(L, wall, W, M.panel, 0, rail + H - wall / 2, 0); roof.userData.cut = true; shell.add(roof);
  shell.add(box(wall, H, W, M.panel, -L / 2 + wall / 2, rail + H / 2, 0));
  shell.add(box(wall, H, W, M.panel, L / 2 - wall / 2, rail + H / 2, 0));
  const near = new THREE.Group(); near.userData.cut = true; shell.add(near);
  near.add(box(L, H, wall, M.panel, 0, rail + H / 2, W / 2 - wall / 2));

  let x = 0;
  c.secs.forEach((s, i) => {
    const len = ft(s.len);
    BUILD[s.id](inner, x, len, Wi, Hi, c);
    if (i > 0) {
      // section joint: a frame ring on the outside
      unit.add(box(0.12, H + 0.04, 0.06, M.frame, -L / 2 + x, rail + H / 2, -W / 2 - 0.02));
      near.add(box(0.12, H + 0.04, 0.06, M.frame, -L / 2 + x, rail + H / 2, W / 2 + 0.02));
    }
    if (DOOR_ON.has(s.id) && len >= 1.4) {
      const dw = Math.min(len * 0.7, 2.2), dh = Math.min(Hi * 0.85, 6.5);
      near.add(box(dw, dh, 0.05, M.door, -L / 2 + x + len / 2, rail + wall + dh / 2 + 0.2, W / 2 + 0.03));
      near.add(box(0.08, 0.5, 0.08, M.handle, -L / 2 + x + len / 2 + dw * 0.35, rail + wall + dh / 2 + 0.2, W / 2 + 0.09));
    }
    x += len;
  });

  // outdoor: sloped roof cap and an intake hood
  if (state.loc === "outdoor") {
    const cap = box(L + 0.6, 0.25, W + 0.6, M.roof, 0, rail + H + 0.15, 0); cap.rotation.x = 0.02; cap.userData.cut = true; shell.add(cap);
    const hood = box(1.2, H * 0.6, W * 0.9, M.roof, -L / 2 - 0.6, rail + H * 0.55, 0); hood.rotation.z = -0.25; unit.add(hood);
  }

  // airflow arrows
  const arrow = (from, dir, mat, len = 3) => {
    const a = new THREE.Group();
    const shaft = cyl(0.12, len, mat, "y", 12); shaft.position.y = len / 2; a.add(shaft);
    const head = new THREE.Mesh(new THREE.ConeGeometry(0.35, 0.8, 16), mat); head.position.y = len + 0.4; a.add(head);
    a.position.copy(from);
    a.quaternion.setFromUnitVectors(new THREE.Vector3(0, 1, 0), dir.clone().normalize());
    unit.add(a);
  };
  const midY = rail + H / 2;
  const hasMix = state.sel.has("mix"), hasDis = state.sel.has("dis");
  arrow(new THREE.Vector3(-L / 2 - 4.5, midY, 0), new THREE.Vector3(1, 0, 0), M.air);
  if (hasMix) arrow(new THREE.Vector3(-L / 2 + ft(secLen("mix", state.cfm)) * 0.5, rail + H + 4.5, 0), new THREE.Vector3(0, -1, 0), M.airRet);
  if (hasDis) arrow(new THREE.Vector3(L / 2 - ft(secLen("dis", state.cfm)) * 0.5, rail + H + 1.0, 0), new THREE.Vector3(0, 1, 0), M.air);
  else arrow(new THREE.Vector3(L / 2 + 0.8, midY, 0), new THREE.Vector3(1, 0, 0), M.air);

  // person for scale, 5'10"
  const p = new THREE.Group();
  const body = new THREE.Mesh(new THREE.CapsuleGeometry(0.55, 3.3, 6, 16), M.person); body.position.y = 2.2; p.add(body);
  const head = new THREE.Mesh(new THREE.SphereGeometry(0.42, 24, 16), M.person); head.position.y = 5.4; p.add(head);
  p.traverse((o) => (o.castShadow = true));
  p.position.set(L / 2 + 3, 0, W / 2 + 1.5);
  unit.add(p);

  unit.traverse((o) => { if (o.isMesh) { o.castShadow = true; o.receiveShadow = true; } });
  scene.add(unit);
  applyCutaway();
  frame(false);
}

function applyCutaway() {
  if (!unit) return;
  unit.traverse((o) => { if (o.userData.cut) o.visible = !state.cutaway; });
}

let view = "iso", framedFor = "";
function frame(force) {
  const c = lastCalc;
  const L = c.L / 12 || 10, W = c.W / 12 || 6, H = c.H / 12 || 6;
  const key = view + "|" + Math.round(L) + "|" + Math.round(W);
  if (!force && key === framedFor) return;
  framedFor = key;
  const R = Math.max(L, W * 1.6, H * 1.6) * 1.15 + 8;
  const t = new THREE.Vector3(0, H / 2, 0);
  const pos = {
    iso: new THREE.Vector3(R * 0.55, R * 0.45, R * 0.9),
    side: new THREE.Vector3(0, H / 2 + 1, R * 1.05),
    end: new THREE.Vector3(-R * 0.9, H / 2 + 1, 0.01),
    top: new THREE.Vector3(0.01, R * 1.25, 0.01),
  }[view];
  camera.position.copy(pos);
  controls.target.copy(t);
  controls.update();
}

let t0 = performance.now();
function animate() {
  requestAnimationFrame(animate);
  const now = performance.now(), dt = (now - t0) / 1000; t0 = now;
  if (!reduceMotion) {
    const speed = 6 + state.cfm / 15000;
    for (const f of fans) f.rotation.x += dt * speed;
  }
  controls.update();
  renderer.render(scene, camera);
}

/* ---------- UI ---------- */
function buildChips() {
  $("#dz-secs").innerHTML = SECTIONS.map((s) =>
    `<li><button type="button" class="dz-sec" data-id="${s.id}" aria-pressed="false"><span class="tag" aria-hidden="true">+</span><span>${s.name}</span><span class="meta"></span></button></li>`).join("");
  $("#dz-secs").addEventListener("click", (e) => {
    const b = e.target.closest(".dz-sec"); if (!b) return;
    const id = b.dataset.id;
    state.sel.has(id) ? state.sel.delete(id) : state.sel.add(id);
    update();
  });
}

function update() {
  const c = calc();
  const order = c.secs.map((s) => s.id);
  document.querySelectorAll(".dz-sec").forEach((b) => {
    const id = b.dataset.id, on = state.sel.has(id);
    b.setAttribute("aria-pressed", on);
    b.querySelector(".tag").textContent = on ? order.indexOf(id) + 1 : "+";
    b.querySelector(".meta").textContent = secLen(id, state.cfm) + "″ · " + BY_ID[id].dp.toFixed(2) + "″";
  });
  document.querySelectorAll("[data-preset]").forEach((b) => {
    const p = PRESETS[b.dataset.preset];
    const match = p.cfm === state.cfm && p.esp === state.esp && p.s.length === state.sel.size && p.s.every((x) => state.sel.has(x));
    b.setAttribute("aria-pressed", match);
  });
  $("#dz-cfm-o").textContent = fmt(state.cfm) + " CFM";
  $("#dz-esp-o").textContent = state.esp.toFixed(2) + " in. w.g.";
  $("#r-len").innerHTML = c.secs.length ? ftin(c.L) + `<small>${(c.L * 0.0254).toFixed(2)} m</small>` : "—";
  $("#r-wh").innerHTML = ftin(c.W) + " × " + ftin(c.H) + `<small>${(c.W * 0.0254).toFixed(2)} × ${(c.H * 0.0254).toFixed(2)} m</small>`;
  $("#r-fans").innerHTML = c.hasFan ? `${c.grid.n} fans<small>${c.grid.rows} × ${c.grid.cols}, about ${fmt(Math.round(state.cfm / c.grid.n / 100) * 100)} CFM each</small>` : "None<small>add a fan array</small>";
  $("#r-tsp").innerHTML = c.tsp.toFixed(2) + " in. w.g." + `<small>${c.isp.toFixed(2)} internal</small>`;
  $("#r-bhp").innerHTML = c.hasFan ? c.bhp.toFixed(1) + " bhp" + `<small>${(c.bhp * 0.7457).toFixed(1)} kW</small>` : "—";
  if (renderer) build();
}

function summary(c) {
  return `${fmt(state.cfm)} CFM at ${state.esp.toFixed(2)} in. w.g. external, ${state.loc}, ${state.casing} in. casing. ` +
    `About ${ftin(c.L)} L × ${ftin(c.W)} W × ${ftin(c.H)} H, ${c.tsp.toFixed(2)} in. w.g. total static` +
    (c.hasFan ? `, ${c.grid.n}-fan array at about ${c.bhp.toFixed(1)} bhp.` : ", no fan section.");
}

function wire() {
  buildChips();
  document.querySelectorAll("[data-preset]").forEach((b) => b.addEventListener("click", () => {
    const p = PRESETS[b.dataset.preset];
    state.cfm = p.cfm; state.esp = p.esp; state.sel = new Set(p.s);
    $("#dz-cfm").value = p.cfm; $("#dz-esp").value = p.esp;
    update();
  }));
  $("#dz-cfm").addEventListener("input", (e) => { state.cfm = +e.target.value; update(); });
  $("#dz-esp").addEventListener("input", (e) => { state.esp = +e.target.value; update(); });
  $("#dz-loc").addEventListener("change", (e) => { state.loc = e.target.value; update(); });
  $("#dz-casing").addEventListener("change", (e) => { state.casing = +e.target.value; update(); });
  $("#dz-cutaway").addEventListener("change", (e) => { state.cutaway = e.target.checked; applyCutaway(); });
  document.querySelectorAll("[data-view]").forEach((b) => b.addEventListener("click", () => {
    view = b.dataset.view;
    document.querySelectorAll("[data-view]").forEach((x) => x.setAttribute("aria-pressed", x === b));
    if (renderer) frame(true);
  }));
  $("#dz-send").addEventListener("click", () => {
    const c = calc();
    const design = {
      cfm: state.cfm, external_static: state.esp, location: state.loc, casing_in: state.casing,
      sections: c.secs.map((s) => s.name),
      length_in: c.L, width_in: c.W, height_in: c.H, total_static: +c.tsp.toFixed(2),
      fans: c.hasFan ? c.grid.n : 0, bhp: c.hasFan ? +c.bhp.toFixed(1) : 0,
      summary: summary(c),
    };
    try { sessionStorage.setItem("cae-design", JSON.stringify(design)); } catch (e) {}
    location.href = window.CAE_CONTACT_URL || "/contact";
  });
  $("#dz-png").addEventListener("click", () => {
    if (!renderer) return;
    renderer.render(scene, camera);
    const a = document.createElement("a");
    a.download = "custom-air-equipment-unit.png";
    a.href = renderer.domElement.toDataURL("image/png");
    a.click();
  });
}

wire();
try {
  initScene();
} catch (err) {
  $("#dz-fallback").hidden = false;
  renderer = null;
}
lastCalc = calc();
update();
