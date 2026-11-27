// 3D air handler designer. Builds the unit from sections along the airflow (x axis, in feet),
// sizes it with rules of thumb, and hands the design to the quote form.
import * as THREE from "three";
import { OrbitControls } from "three/addons/controls/OrbitControls.js";

const $ = (s) => document.querySelector(s);
const fmt = (n) => Math.round(n).toLocaleString("en-US");
const ftin = (inches) => { let f = Math.floor(inches / 12), r = Math.round(inches - f * 12); if (r === 12) { f++; r = 0; } return f + "′-" + r + "″"; };
const reduceMotion = window.matchMedia && matchMedia("(prefers-reduced-motion: reduce)").matches;

/* ---------- options ---------- */
// Each option: id, label, choices [value, label], default. "sec" hides it unless that section is in the unit.
const OPTIONS = [
  { group: "Unit and layout", items: [
    { id: "loc", label: "Location", ch: [["indoor", "Indoor"], ["outdoor", "Outdoor, on curb or dunnage"], ["penthouse", "Outdoor with service vestibule"]], def: "indoor" },
    { id: "deck", label: "Decks", ch: [["single", "Single deck"], ["double", "Double deck (supply below, return and exhaust above)"]], def: "single" },
    { id: "arr", label: "Fan arrangement", ch: [["draw", "Draw-through (fan after coils)"], ["blow", "Blow-through (fan before coils)"]], def: "draw" },
    { id: "fv", label: "Max coil face velocity", ch: [["400", "400 fpm"], ["450", "450 fpm"], ["500", "500 fpm"], ["550", "550 fpm"]], def: "500" },
    { id: "maxh", label: "Height limit", ch: [["0", "No limit"], ["84", "7 ft (door or elevator)"], ["96", "8 ft"], ["120", "10 ft"], ["144", "12 ft"]], def: "0" },
    { id: "hand", label: "Service side (facing airflow)", ch: [["right", "Right hand"], ["left", "Left hand"]], def: "right" },
    { id: "inlet", label: "Outdoor air inlet", ch: [["end", "End"], ["top", "Top"], ["side", "Side"]], def: "end" },
    { id: "ret", label: "Return air inlet", ch: [["top", "Top"], ["side", "Side"], ["bottom", "Bottom"]], def: "top", sec: "mix" },
    { id: "dis", label: "Supply discharge", ch: [["end", "End"], ["top", "Top"], ["bottom", "Bottom"], ["side", "Side"]], def: "top" },
    { id: "split", label: "Max shipping section", ch: [["96", "8 ft"], ["144", "12 ft"], ["192", "16 ft"], ["240", "20 ft"], ["0", "One piece"]], def: "192" },
    { id: "kd", label: "Delivery", ch: [["assembled", "Assembled sections"], ["knockdown", "Knockdown panels, assembled on site"]], def: "assembled" },
  ]},
  { group: "Casing and construction", items: [
    { id: "casing", label: "Casing panels", ch: [["2", "2 in. double-wall"], ["2tb", "2 in. double-wall, thermal break"], ["4", "4 in. double-wall, thermal break"]], def: "2" },
    { id: "ins", label: "Insulation", ch: [["fg", "Fiberglass, 3 lb/ft³"], ["pu", "Injected polyurethane foam"], ["mw", "Mineral wool, fire rated"]], def: "fg" },
    { id: "ext", label: "Exterior skin and finish", ch: [["galv", "Galvanized steel"], ["white", "Painted, white"], ["gray", "Painted, light gray"], ["tan", "Painted, tan"], ["green", "Painted, green"], ["ss", "Stainless steel"], ["alu", "Aluminum"]], def: "galv" },
    { id: "liner", label: "Interior liner", ch: [["galv", "Solid galvanized"], ["perf", "Perforated galvanized (acoustic)"], ["ss304", "Solid stainless 304"], ["ss316", "Solid stainless 316"]], def: "galv" },
    { id: "floor", label: "Floor", ch: [["galv", "Galvanized"], ["ss", "Stainless steel"], ["welded", "Welded, drainable stainless"]], def: "galv" },
    { id: "base", label: "Base rail", ch: [["4", "4 in. formed channel"], ["6", "6 in. structural channel"], ["8", "8 in. structural channel"], ["12", "12 in. for trap height"]], def: "6" },
    { id: "leak", label: "Casing leakage class", ch: [["1", "1% at design pressure"], ["0.5", "0.5% at design pressure"], ["6", "AHRI 1350 CL6"]], def: "1" },
    { id: "doors", label: "Access doors", ch: [["hinged", "Hinged, latching handles"], ["view", "Hinged, with viewport"], ["viewlight", "Hinged, viewport and marine light"]], def: "view" },
    { id: "seis", label: "Seismic and wind", ch: [["none", "Not required"], ["ibc", "Seismic certified (IBC/ASCE 7)"], ["wind", "Seismic and wind rated"]], def: "none" },
  ]},
  { group: "Fans and motors", items: [
    { id: "fan", label: "Supply fan type", ch: [["ec", "Fan array, EC motors"], ["pm", "Fan array, PM motors with VFDs"], ["plenum", "Single plenum fan with VFD"], ["dwdi", "Housed centrifugal (DWDI), belt drive"]], def: "ec", sec: "fan" },
    { id: "red", label: "Redundancy", ch: [["n", "N (no spare)"], ["n1", "N+1"], ["n2", "N+2"]], def: "n1", sec: "fan" },
    { id: "bdd", label: "Isolation for failed fans", ch: [["bdd", "Backdraft dampers"], ["blank", "Blank-off plates"], ["none", "None"]], def: "bdd", sec: "fan" },
    { id: "volt", label: "Power supply", ch: [["208", "208 V / 3 ph / 60 Hz"], ["230", "230 V / 3 ph / 60 Hz"], ["460", "460 V / 3 ph / 60 Hz"], ["575", "575 V / 3 ph / 60 Hz"]], def: "460" },
    { id: "rfan", label: "Return or exhaust fan", ch: [["none", "None"], ["rf", "Return fan array"], ["ef", "Relief/exhaust fan array"]], def: "none" },
  ]},
  { group: "Coils", items: [
    { id: "ctype", label: "Cooling coil", ch: [["chw", "Chilled water"], ["glycol", "Glycol"], ["dx", "Direct expansion (DX), R-454B"]], def: "chw", sec: "cool" },
    { id: "crows", label: "Cooling coil rows", ch: [["4", "4 rows"], ["6", "6 rows"], ["8", "8 rows"], ["10", "10 rows"]], def: "6", sec: "cool" },
    { id: "htype", label: "Heating", ch: [["hw", "Hot water coil"], ["steam", "Steam coil"], ["elec", "Electric heater, SCR control"], ["gas", "Indirect gas-fired furnace"]], def: "hw", sec: "heat" },
    { id: "ptype", label: "Preheat", ch: [["glycol", "Glycol coil"], ["ifb", "Steam IFB coil (freeze resistant)"], ["elec", "Electric heater"]], def: "glycol", sec: "preh" },
    { id: "fins", label: "Fin material", ch: [["al", "Aluminum"], ["cu", "Copper"]], def: "al" },
    { id: "coat", label: "Coil coating", ch: [["none", "None"], ["ecoat", "E-coat"], ["epoxy", "Baked phenolic/epoxy"]], def: "none" },
    { id: "pan", label: "Drain pan", ch: [["ss", "Stainless, double sloped"], ["ssins", "Stainless, insulated"], ["inter", "Stainless with intermediate pans"]], def: "ss", sec: "cool" },
  ]},
  { group: "Filters and air cleaning", items: [
    { id: "prem", label: "Pre-filter", ch: [["8", "MERV 8, 2 in. pleated"], ["11", "MERV 11, 4 in. pleated"], ["13", "MERV 13, 4 in. pleated"]], def: "8", sec: "pre" },
    { id: "finm", label: "Final filter", ch: [["13", "MERV 13"], ["14", "MERV 14"], ["15", "MERV 15"], ["16", "MERV 16"]], def: "14", sec: "final" },
    { id: "fint", label: "Final filter style", ch: [["bag", "Bag filters"], ["box", "Rigid box (V-bank)"]], def: "bag", sec: "final" },
    { id: "hepa", label: "HEPA grade", ch: [["9997", "HEPA 99.97% at 0.3 µm"], ["9999", "HEPA 99.99%"], ["ulpa", "ULPA 99.999%"], ["bibo", "HEPA in bag-in/bag-out housing"]], def: "9997", sec: "hepa" },
    { id: "rack", label: "Filter loading", ch: [["side", "Side access"], ["front", "Front load, gasketed"]], def: "front" },
    { id: "gauge", label: "Filter monitoring", ch: [["mag", "Magnehelic gauges"], ["xmtr", "Pressure transmitters to BAS"], ["both", "Both"]], def: "mag" },
    { id: "uvt", label: "UV-C", ch: [["coil", "Coil irradiation"], ["air", "Airstream disinfection"]], def: "coil", sec: "uv" },
  ]},
  { group: "Energy recovery and humidity", items: [
    { id: "ertype", label: "Energy recovery", ch: [["ent", "Enthalpy wheel"], ["sen", "Sensible wheel"], ["plate", "Fixed plate exchanger"], ["pipe", "Heat pipe"], ["run", "Runaround coil loop"]], def: "ent", sec: "erw" },
    { id: "frost", label: "Frost control", ch: [["vfd", "Wheel VFD / modulation"], ["preheat", "Preheat"], ["bypass", "Face and bypass damper"]], def: "vfd", sec: "erw" },
    { id: "humt", label: "Humidifier", ch: [["inj", "Direct steam injection"], ["s2s", "Steam-to-steam generator"], ["elec", "Electric steam generator"], ["adia", "Adiabatic media"]], def: "inj", sec: "hum" },
  ]},
  { group: "Sound and dampers", items: [
    { id: "attl", label: "Sound attenuator", ch: [["36", "3 ft"], ["60", "5 ft"], ["84", "7 ft"]], def: "60", sec: "atten" },
    { id: "attt", label: "Attenuator media", ch: [["diss", "Dissipative (fill)"], ["film", "Film-lined fill"], ["pack", "Packless"]], def: "diss", sec: "atten" },
    { id: "damp", label: "Dampers", ch: [["std", "Low leak, AMCA class 1A"], ["ins", "Insulated, thermally broken"], ["bubble", "Bubble-tight"]], def: "std", sec: "mix" },
    { id: "econ", label: "Economizer", ch: [["none", "Minimum OA only"], ["drybulb", "Dry-bulb economizer"], ["enthalpy", "Enthalpy economizer"]], def: "drybulb", sec: "mix" },
  ]},
  { group: "Controls and electrical", items: [
    { id: "ctrl", label: "Controls", ch: [["none", "By others, field installed"], ["wired", "Factory wired, controller by others"], ["bacnet", "Factory DDC, BACnet"], ["modbus", "Factory DDC, Modbus"]], def: "bacnet" },
    { id: "power", label: "Power connection", ch: [["single", "Single-point power"], ["multi", "Separate circuits per section"]], def: "single" },
    { id: "lights", label: "Service lights", ch: [["led", "LED lights and GFCI outlet in each section"], ["none", "None"]], def: "led" },
    { id: "sccr", label: "Short-circuit rating", ch: [["5", "5 kA"], ["65", "65 kA"], ["100", "100 kA"]], def: "65" },
  ]},
  { group: "Testing and documentation", items: [
    { id: "test", label: "Factory testing", ch: [["run", "Run test (standard)"], ["leak", "Run test and casing leakage test"], ["witness", "Witnessed run and leakage test"], ["full", "Witnessed airflow, leakage and sound test"]], def: "leak" },
    { id: "docs", label: "Documentation", ch: [["std", "Submittals and O&M manual"], ["bim", "Submittals, O&M and BIM model"], ["gmp", "GMP package (IQ/OQ support)"]], def: "std" },
  ]},
];
const OPT = Object.fromEntries(OPTIONS.flatMap((g) => g.items.map((o) => [o.id, o])));

// Canonical upstream-to-downstream order. len = typical length (in), dp = pressure drop at 500 fpm (in. w.g.)
const SECTIONS = [
  { id: "rfan",   name: "Return / exhaust fan",       len: 48, dp: 0.00, hidden: true },
  { id: "mix",    name: "Intake and mixing box",       len: 36, dp: 0.15 },
  { id: "afms",   name: "Airflow measuring station",   len: 12, dp: 0.05 },
  { id: "pre",    name: "Pre-filter",                  len: 12, dp: 0.45 },
  { id: "carbon", name: "Gas-phase carbon filter",     len: 30, dp: 0.60 },
  { id: "erw",    name: "Energy recovery",             len: 42, dp: 0.80 },
  { id: "preh",   name: "Preheat",                     len: 18, dp: 0.15 },
  { id: "heat",   name: "Heating",                     len: 18, dp: 0.20 },
  { id: "cool",   name: "Cooling coil",                len: 30, dp: 0.90 },
  { id: "reheat", name: "Reheat coil",                 len: 18, dp: 0.20 },
  { id: "uv",     name: "UV-C lamps",                  len: 12, dp: 0.05 },
  { id: "access", name: "Access section",              len: 24, dp: 0.00 },
  { id: "fan",    name: "Supply fan",                  len: 0,  dp: 0.00 },
  { id: "atten",  name: "Sound attenuator",            len: 60, dp: 0.35 },
  { id: "hum",    name: "Humidifier",                  len: 36, dp: 0.10 },
  { id: "final",  name: "Final filter",                len: 30, dp: 0.75 },
  { id: "hepa",   name: "HEPA filter",                 len: 24, dp: 1.20 },
  { id: "dis",    name: "Discharge plenum",            len: 36, dp: 0.10 },
];
const BY_ID = Object.fromEntries(SECTIONS.map((s) => [s.id, s]));

const PRESETS = {
  office:    { label: "Office VAV", cfm: 24000, esp: 1.5,  s: ["mix", "pre", "heat", "cool", "fan", "final", "dis"], o: {} },
  hospital:  { label: "Hospital, 100% OA", cfm: 30000, esp: 2.0, s: ["mix", "pre", "erw", "heat", "cool", "uv", "fan", "atten", "hum", "final", "dis"], o: { red: "n1", liner: "ss304", floor: "welded", casing: "2tb", finm: "14" } },
  lab:       { label: "Lab makeup air", cfm: 40000, esp: 2.5,  s: ["mix", "pre", "erw", "preh", "cool", "reheat", "access", "fan", "final", "dis"], o: { ertype: "run", red: "n2", casing: "4" } },
  data:      { label: "Data hall", cfm: 60000, esp: 0.75, s: ["mix", "pre", "cool", "fan", "dis"], o: { red: "n2", arr: "draw", dis: "end", econ: "drybulb" } },
  school:    { label: "School DOAS", cfm: 12000, esp: 1.25, s: ["mix", "pre", "erw", "heat", "cool", "fan", "atten", "final", "dis"], o: { loc: "outdoor", ertype: "ent", attl: "36" } },
  clean:     { label: "Cleanroom", cfm: 50000, esp: 1.5,  s: ["mix", "pre", "cool", "reheat", "access", "fan", "atten", "hum", "final", "hepa", "dis"], o: { liner: "ss316", floor: "welded", hepa: "9999", casing: "4", leak: "0.5" } },
  pharma:    { label: "Pharma GMP", cfm: 20000, esp: 2.0, s: ["mix", "pre", "preh", "cool", "reheat", "fan", "hum", "final", "hepa", "dis"], o: { liner: "ss316", floor: "welded", docs: "gmp", test: "witness", hepa: "bibo" } },
  industrial:{ label: "Industrial makeup air", cfm: 80000, esp: 1.0, s: ["mix", "pre", "heat", "fan", "dis"], o: { loc: "outdoor", htype: "gas", fan: "dwdi", red: "n", ext: "gray" } },
};

const state = { cfm: 30000, esp: 2, sel: new Set(PRESETS.hospital.s), cutaway: true, o: {}, qs: null, qsSig: "", preset: "hospital" };
const optDefaults = () => Object.fromEntries(Object.values(OPT).map((o) => [o.id, o.def]));
state.o = { ...optDefaults(), ...PRESETS.hospital.o };
const o = (id) => state.o[id];

/* ---------- sizing ---------- */
function secInfo(id) {
  const fv = +o("fv"), k = Math.pow(fv / 500, 1.8);
  const s = BY_ID[id];
  let len = s.len, dp = s.dp, name = s.name;
  const lab = (oid) => OPT[oid].ch.find((c) => c[0] === o(oid))[1];
  switch (id) {
    case "rfan": name = o("rfan") === "ef" ? "Relief / exhaust fan array" : "Return fan array"; len = 48; break;
    case "pre": name = "Pre-filter, " + lab("prem"); dp = { 8: 0.35, 11: 0.45, 13: 0.55 }[o("prem")]; break;
    case "erw": {
      const t = o("ertype");
      name = lab("ertype");
      len = { ent: 42, sen: 42, plate: 72, pipe: 30, run: 24 }[t];
      dp = { ent: 0.8, sen: 0.75, plate: 0.9, pipe: 0.7, run: 0.45 }[t];
      break;
    }
    case "preh": name = "Preheat, " + lab("ptype").toLowerCase(); len = o("ptype") === "elec" ? 24 : 18; break;
    case "heat": {
      const t = o("htype"); name = lab("htype");
      len = { hw: 18, steam: 18, elec: 24, gas: 72 }[t]; dp = { hw: 0.2, steam: 0.2, elec: 0.1, gas: 0.35 }[t];
      break;
    }
    case "cool": {
      const r = +o("crows"); name = lab("ctype") + " coil, " + r + " rows";
      len = 22 + r * 1.5; dp = 0.16 * r; break;
    }
    case "final": name = "Final filter, MERV " + o("finm") + (o("fint") === "box" ? ", rigid box" : ", bags"); len = o("fint") === "box" ? 24 : 36; dp = 0.5 + (+o("finm") - 13) * 0.1; break;
    case "hepa": name = lab("hepa"); len = o("hepa") === "bibo" ? 48 : 24; dp = o("hepa") === "ulpa" ? 1.5 : 1.2; break;
    case "atten": len = +o("attl"); name = "Sound attenuator, " + Math.round(len / 12) + " ft " + lab("attt").toLowerCase(); dp = (o("attt") === "pack" ? 0.45 : 0.3) * (len / 60); break;
    case "hum": name = lab("humt"); len = o("humt") === "adia" ? 24 : 36; dp = o("humt") === "adia" ? 0.25 : 0.1; break;
    case "uv": name = "UV-C, " + lab("uvt").toLowerCase(); break;
    case "fan": name = lab("fan"); len = fanLen(); break;
  }
  return { id, name, len: Math.round(len), dp: dp * k };
}
function fanLen() {
  const t = o("fan"), cfm = state.cfm;
  if (t === "dwdi") return Math.round(60 + Math.sqrt(cfm) / 6);
  if (t === "plenum") return Math.round(48 + Math.sqrt(cfm) / 8);
  return Math.round(34 + Math.sqrt(cfm) / 12);
}
function order() {
  let ids = SECTIONS.map((s) => s.id).filter((id) => id === "rfan" ? o("rfan") !== "none" : state.sel.has(id));
  if (o("arr") === "blow" && ids.includes("fan")) {
    ids = ids.filter((x) => x !== "fan");
    const firstCoil = ids.findIndex((x) => ["preh", "heat", "cool"].includes(x));
    ids.splice(firstCoil < 0 ? ids.length : firstCoil, 0, "fan");
  }
  return ids;
}
function fanCount(W, H) {
  const t = o("fan"), cfm = state.cfm;
  if (t === "plenum" || t === "dwdi") { const n = cfm > 60000 ? 2 : 1; return { rows: 1, cols: n, n, base: n }; }
  const base = Math.max(2, Math.ceil(cfm / 6500));
  const n = base + { n: 0, n1: 1, n2: 2 }[o("red")];
  let best = null;
  for (let rows = 1; rows <= n; rows++) {
    const cols = Math.ceil(n / rows);
    const score = Math.abs(Math.log((W / cols) / (H / rows))) + (rows * cols - n) * 0.25;
    if (!best || score < best.score) best = { rows, cols, score };
  }
  return { rows: best.rows, cols: best.cols, n, base };
}
const casingIn = () => (o("casing") === "4" ? 4 : 2);

function calc() {
  const secs = order().map(secInfo);
  const L = secs.reduce((a, s) => a + s.len, 0);
  const fv = +o("fv");
  const area = state.cfm / fv; // ft² of coil face
  const wall = casingIn() * 2;
  let hFt = Math.sqrt(area / 1.45), wFt = area / hFt;
  const dbl = o("deck") === "double";
  const maxh = +o("maxh") / (dbl ? 1.75 : 1);
  if (maxh && hFt * 12 + 10 + wall > maxh) { hFt = Math.max(2, (maxh - 10 - wall) / 12); wFt = area / hFt; }
  const H = Math.round(hFt * 12 + 10 + wall);
  const W = Math.round(wFt * 12 + 2 + wall);
  const Hu = dbl ? Math.round(H * 0.75) : 0; // upper (return/exhaust) deck
  const Ht = H + Hu;
  const isp = secs.reduce((a, s) => a + s.dp, 0);
  const tsp = isp + state.esp;
  const hasFan = state.sel.has("fan");
  const eff = { ec: 0.62, pm: 0.66, plenum: 0.7, dwdi: 0.72 }[o("fan")];
  const bhp = (state.cfm * tsp) / (6356 * eff);
  const grid = fanCount(W, H);
  // shipping splits: pack sections into pieces no longer than the limit
  const lim = +o("split") || Infinity;
  const pieces = []; let cur = 0;
  secs.forEach((s, i) => { if (i && cur + s.len > lim) { pieces.push(cur); cur = 0; } cur += s.len; });
  if (secs.length) pieces.push(cur);
  // weight: casing panels plus a per-section allowance
  const psf = (casingIn() === 4 ? 7.5 : 5.5) + (/ss/.test(o("liner")) || o("ext") === "ss" ? 0.8 : 0);
  const skin = 2 * ((L * W) + (L * H) + (W * H)) / 144;
  const per = { cool: 9, heat: 4, preh: 4, reheat: 4, erw: 10, fan: 12, rfan: 9, atten: 5, hum: 3, final: 2, hepa: 3, pre: 1, carbon: 8, mix: 3, dis: 1, access: 1, uv: 1, afms: 1 };
  const weight = skin * psf * (dbl ? 1.6 : 1) + (dbl ? 12 * area : 0) + secs.reduce((a, s) => a + (per[s.id] || 1) * area * (s.id === "heat" && o("htype") === "gas" ? 2.5 : 1), 0);
  return { secs, L, W, H, Hu, Ht, dbl, isp, tsp, grid, hasFan, bhp, area, fv, pieces, weight };
}

/* ---------- three.js scene ---------- */
const host = $("#dz-canvas");
let renderer, scene, camera, controls, unit, fans = [], lastCalc;
const M = {};
const FINISH = { galv: 0xdfe3e1, white: 0xf4f5f2, gray: 0xc3c9c6, tan: 0xd8cbb0, green: 0x5f8a6b, ss: 0xe8ecee, alu: 0xd5dadd };

function initScene() {
  renderer = new THREE.WebGLRenderer({ antialias: true, preserveDrawingBuffer: true, alpha: true });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.shadowMap.enabled = true;
  renderer.shadowMap.type = THREE.PCFSoftShadowMap;
  renderer.outputColorSpace = THREE.SRGBColorSpace;
  renderer.toneMapping = THREE.ACESFilmicToneMapping;
  host.appendChild(renderer.domElement);

  scene = new THREE.Scene();
  camera = new THREE.PerspectiveCamera(35, 1, 0.1, 600);
  controls = new OrbitControls(camera, renderer.domElement);
  controls.enableDamping = true;
  controls.maxPolarAngle = Math.PI * 0.495;

  scene.add(new THREE.HemisphereLight(0xffffff, 0x8a9a8c, 1.4));
  const sun = new THREE.DirectionalLight(0xffffff, 2.2);
  sun.position.set(-20, 35, 25);
  sun.castShadow = true;
  sun.shadow.mapSize.set(2048, 2048);
  Object.assign(sun.shadow.camera, { left: -50, right: 50, top: 50, bottom: -50, far: 140 });
  scene.add(sun);

  const ground = new THREE.Mesh(new THREE.PlaneGeometry(400, 400), new THREE.ShadowMaterial({ opacity: 0.18 }));
  ground.rotation.x = -Math.PI / 2;
  ground.receiveShadow = true;
  scene.add(ground);
  const grid = new THREE.GridHelper(200, 100, 0x9fb3a4, 0xc9d4ca);
  grid.material.transparent = true; grid.material.opacity = 0.5;
  scene.add(grid);

  const std = (color, extra = {}) => new THREE.MeshStandardMaterial({ color, roughness: 0.55, metalness: 0.25, ...extra });
  M.panel = std(FINISH.galv, { metalness: 0.35, roughness: 0.45 });
  M.frame = std(0x8c9590, { metalness: 0.6, roughness: 0.35 });
  M.rail = std(0x1d2b23, { metalness: 0.4 });
  M.copper = std(0xb8693a, { metalness: 0.8, roughness: 0.3 });
  M.alu = std(0xc9d7e0, { metalness: 0.8, roughness: 0.3 });
  M.fin = std(0xc9d7e0, { metalness: 0.8, roughness: 0.3 });
  M.chill = std(0x3d7fb3, { metalness: 0.5, roughness: 0.35 });
  M.glycol = std(0x2f9a8f, { metalness: 0.5, roughness: 0.35 });
  M.dx = std(0x7d5a9e, { metalness: 0.5, roughness: 0.35 });
  M.filter = std(0xf2efe6, { metalness: 0, roughness: 0.9 });
  M.carbon = std(0x2b2e2c, { metalness: 0.1, roughness: 0.95 });
  M.bag = std(0xe6e9ef, { metalness: 0, roughness: 0.95 });
  M.wheel = std(0x9aa6ad, { metalness: 0.7, roughness: 0.5 });
  M.fan = std(0x2f3a34, { metalness: 0.5 });
  M.blade = std(0x22a447, { metalness: 0.4, roughness: 0.35, side: THREE.DoubleSide });
  M.motor = std(0x48524c, { metalness: 0.6 });
  M.pod = std(0x9aa39e, { metalness: 0.3, roughness: 0.7 });
  M.uv = new THREE.MeshStandardMaterial({ color: 0xc9b6ff, emissive: 0x8a5cff, emissiveIntensity: 1.2 });
  M.hot = new THREE.MeshStandardMaterial({ color: 0xff7a3d, emissive: 0xd8431b, emissiveIntensity: 0.9 });
  M.steam = std(0xd9dde0, { metalness: 0.7 });
  M.media = std(0xd8c79a, { metalness: 0, roughness: 0.95 });
  M.dark = std(0x111a15, { metalness: 0.1, roughness: 0.9 });
  M.door = std(0xcfd5d2, { metalness: 0.35, roughness: 0.4 });
  M.glass = std(0x203040, { metalness: 0.9, roughness: 0.1 });
  M.handle = std(0x22a447, { metalness: 0.5 });
  M.roof = std(0xb9c2bd, { metalness: 0.4 });
  M.split = std(0xb7f04a, { metalness: 0.2, roughness: 0.5 });
  M.person = std(0x6a7a70, { metalness: 0, roughness: 0.9 });
  M.air = new THREE.MeshBasicMaterial({ color: 0x2a6c9f });
  M.airRet = new THREE.MeshBasicMaterial({ color: 0x8a5a2b });
  M.airExh = new THREE.MeshBasicMaterial({ color: 0x8c8c8c });

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
  return m;
};
const at = (m, x, y, z) => { m.position.set(x, y, z); return m; };
const cyl = (r, len, mat, axis = "x", seg = 32) => {
  const m = new THREE.Mesh(new THREE.CylinderGeometry(r, r, len, seg), mat);
  if (axis === "x") m.rotation.z = Math.PI / 2;
  if (axis === "z") m.rotation.x = Math.PI / 2;
  return m;
};

function coil(g, x, L, W, H, mat, pan) {
  const t = Math.min(L * 0.5, 0.35 + (pan ? +o("crows") * 0.09 : 0.3));
  g.add(box(t, H * 0.86, W * 0.94, mat, x + L / 2, H * 0.48, 0));
  const fins = Math.round(W * 4);
  for (let i = 0; i < fins; i++) g.add(box(t * 1.02, H * 0.86, 0.01, M.fin, x + L / 2, H * 0.48, -W * 0.47 + (i * W * 0.94) / fins));
  for (const yy of [H * 0.12, H * 0.84]) { const hdr = cyl(0.11, 0.6, M.copper, "z"); hdr.position.set(x + L / 2, yy, W / 2 + 0.25); g.add(hdr); }
  if (pan) {
    g.add(box(L * 0.9, 0.12, W * 0.98, M.steam, x + L / 2, 0.06, 0));
    if (o("pan") === "inter" && H > 7) g.add(box(t * 1.6, 0.08, W * 0.96, M.steam, x + L / 2, H * 0.48, 0));
  }
}
function elecHeater(g, x, L, W, H) {
  g.add(box(0.1, H * 0.9, W * 0.94, M.frame, x + L * 0.4, H / 2, 0));
  const n = Math.max(4, Math.round(H * 1.5));
  for (let i = 0; i < n; i++) { const t = cyl(0.04, W * 0.9, M.hot, "z", 8); t.position.set(x + L * 0.45, H * (0.1 + 0.8 * i / (n - 1)), 0); g.add(t); }
  g.add(box(L * 0.6, H * 0.35, 0.3, M.motor, x + L / 2, H * 0.55, W / 2 + 0.3)); // control panel outside
}
function fanArray(g, x, L, W, H, grid, small) {
  const { rows, cols } = grid;
  g.add(box(0.08, H, W, M.frame, x + L * 0.18, H / 2, 0));
  const cw = W / cols, ch = H / rows, r = Math.min(cw, ch) * (small ? 0.3 : 0.36);
  const count = grid.n || rows * cols;
  for (let i = 0; i < rows; i++) for (let j = 0; j < cols; j++) {
    const y = ch * (i + 0.5), z = -W / 2 + cw * (j + 0.5), fx = x + L * 0.18;
    if (i * cols + j >= count) { g.add(box(0.05, ch * 0.9, cw * 0.9, M.frame, fx + 0.05, y, z)); continue; }
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
    g.add(at(cyl(r * 0.32, r * 0.9, M.motor, "x"), fx + 0.95 + r * 0.45, y, z));
    if (!small && o("bdd") === "bdd") for (let k = 0; k < 4; k++) {
      const v = box(0.03, r * 0.5, cw * 0.8, M.frame, fx + 1.3 + r * 0.9, y - r * 0.6 + k * r * 0.4, z); v.rotation.z = 0.3; g.add(v);
    }
  }
}

// Section contents. Each builder gets the section's start x, length, inner width and height (feet).
const BUILD = {
  rfan(g, x, L, W, H) { fanArray(g, x, L, W, H, { rows: 1, cols: Math.max(2, Math.ceil(state.cfm / 15000)) }, true); },
  mix(g, x, L, W, H) {
    const n = Math.max(3, Math.round(L * 1.4));
    for (let i = 0; i < n; i++) {
      const b = box(L * 0.8 / n, 0.04, W * 0.75, M.frame, x + L * 0.1 + (i + 0.5) * (L * 0.8 / n), o("ret") === "bottom" ? 0.05 : H - 0.05, 0);
      b.rotation.z = 0.5; g.add(b);
    }
    const m = Math.max(3, Math.round(H * 1.2));
    for (let i = 0; i < m; i++) {
      const b = box(0.04, H * 0.75 / m, W * 0.8, M.frame, x + 0.05, H * 0.12 + (i + 0.5) * (H * 0.75 / m), 0);
      b.rotation.z = 0.5; g.add(b);
    }
  },
  afms(g, x, L, W, H) {
    for (let i = 1; i < 5; i++) g.add(box(0.05, 0.05, W * 0.94, M.frame, x + L / 2, (H * i) / 5, 0));
    for (let i = 1; i < 5; i++) g.add(box(0.05, H * 0.94, 0.05, M.frame, x + L / 2, H / 2, -W / 2 + (W * i) / 5));
  },
  pre(g, x, L, W, H) {
    const k = Math.max(6, Math.round(W * 2));
    for (let i = 0; i < k; i++) {
      const p = box(0.02, H * 0.9, (W * 0.92) / k * 1.15, M.filter, x + L / 2, H / 2, -W * 0.46 + (i + 0.5) * (W * 0.92 / k));
      p.rotation.y = i % 2 ? 0.55 : -0.55; g.add(p);
    }
  },
  carbon(g, x, L, W, H) {
    const k = Math.max(4, Math.round(W * 1.2));
    for (let i = 0; i < k; i++) {
      const p = box(0.06, H * 0.9, (W * 0.92) / k * 1.4, M.carbon, x + L / 2, H / 2, -W * 0.46 + (i + 0.5) * (W * 0.92 / k));
      p.rotation.y = i % 2 ? 0.8 : -0.8; g.add(p);
    }
  },
  erw(g, x, L, W, H) {
    const t = o("ertype");
    if ((t === "ent" || t === "sen") && o("deck") === "double") return;
    if (t === "ent" || t === "sen") {
      const r = Math.min(W, H) * 0.47;
      const w = cyl(r, 0.8, t === "ent" ? M.wheel : M.alu, "x", 64); w.position.set(x + L / 2, H / 2, 0); g.add(w);
      const hub = cyl(r * 0.12, 0.95, M.frame, "x"); hub.position.copy(w.position); g.add(hub);
      for (let a = 0; a < 6; a++) { const s = box(0.9, r * 2 * 0.98, 0.06, M.frame, x + L / 2, H / 2, 0); s.rotation.x = (a * Math.PI) / 6; g.add(s); }
      g.add(box(L * 0.9, 0.08, W * 0.98, M.frame, x + L / 2, H / 2, 0));
    } else if (t === "plate") {
      const s = Math.min(L * 0.62, H * 0.62);
      const p = box(s, s, W * 0.9, M.alu, x + L / 2, H / 2, 0); p.rotation.z = Math.PI / 4; g.add(p);
      g.add(box(L * 0.95, 0.06, W * 0.98, M.frame, x + L / 2, H / 2, 0));
    } else if (t === "pipe") {
      coil(g, x, L, W, H, M.copper, false);
      g.add(box(L * 0.95, 0.06, W * 0.98, M.frame, x + L / 2, H / 2, 0));
    } else coil(g, x, L, W, H, M.glycol, false);
  },
  preh(g, x, L, W, H) { o("ptype") === "elec" ? elecHeater(g, x, L, W, H) : coil(g, x, L, W, H, o("ptype") === "ifb" ? M.steam : M.glycol, false); },
  heat(g, x, L, W, H) {
    const t = o("htype");
    if (t === "elec") return elecHeater(g, x, L, W, H);
    if (t === "gas") {
      g.add(box(L * 0.55, H * 0.8, W * 0.7, M.motor, x + L / 2, H * 0.45, 0)); // heat exchanger drum
      for (let i = 0; i < 6; i++) { const tb = cyl(0.12, L * 0.5, M.steam, "x", 12); tb.position.set(x + L / 2, H * (0.2 + i * 0.11), -W * 0.2); g.add(tb); }
      const flue = cyl(0.35, 4, M.steam, "y", 24); flue.position.set(x + L * 0.7, H + 2.2, -W * 0.25); g.add(flue);
      g.add(box(L * 0.4, H * 0.5, 0.5, M.motor, x + L * 0.3, H * 0.4, W / 2 + 0.45)); // burner cabinet
      return;
    }
    coil(g, x, L, W, H, t === "steam" ? M.steam : M.copper, false);
  },
  cool(g, x, L, W, H) { coil(g, x, L, W, H, { chw: M.chill, glycol: M.glycol, dx: M.dx }[o("ctype")], true); },
  reheat(g, x, L, W, H) { coil(g, x, L, W, H, M.copper, false); },
  uv(g, x, L, W, H) {
    for (let i = 0; i < 4; i++) { const t = cyl(0.06, W * 0.85, M.uv, "z", 12); t.position.set(x + L / 2, H * (0.2 + i * 0.2), 0); g.add(t); }
  },
  access(g, x, L, W, H) { g.add(box(L * 0.95, 0.03, W * 0.9, M.dark, x + L / 2, 0.02, 0)); },
  fan(g, x, L, W, H, c) {
    const t = o("fan");
    if (t === "ec" || t === "pm") return fanArray(g, x, L, W, H, c.grid);
    const n = c.grid.n;
    g.add(box(0.08, H, W, M.frame, x + L * 0.15, H / 2, 0));
    for (let j = 0; j < n; j++) {
      const z = -W / 2 + (W / n) * (j + 0.5), r = Math.min(H * 0.38, (W / n) * 0.38);
      if (t === "plenum") {
        const wheel = new THREE.Group(); wheel.position.set(x + L * 0.4, H / 2, z);
        wheel.add(cyl(r, 0.08, M.fan, "x"));
        for (let b = 0; b < 12; b++) { const piv = new THREE.Group(); piv.rotation.x = (b / 12) * Math.PI * 2; const bl = box(r * 0.5, r * 0.45, 0.04, M.blade, -r * 0.25, r * 0.7, 0); bl.rotation.y = 0.5; piv.add(bl); wheel.add(piv); }
        g.add(wheel); fans.push(wheel);
        g.add(at(cyl(r * 0.35, r * 0.9, M.motor, "x"), x + L * 0.4 + r * 0.8, H / 2, z));
      } else {
        // housed DWDI: scroll housing, shaft, belt guard and motor on a base
        const hs = cyl(r, r * 1.1, M.fan, "z", 40); hs.position.set(x + L * 0.45, H * 0.5, z); g.add(hs);
        g.add(box(r * 1.1, r * 0.9, r * 1.1, M.fan, x + L * 0.45 + r * 0.55, H * 0.5 + r * 0.55, z));
        g.add(box(L * 0.7, 0.25, W / n * 0.8, M.rail, x + L * 0.45, 0.13, z));
        g.add(at(cyl(r * 0.3, r * 0.8, M.motor, "z"), x + L * 0.75, r * 0.4, z));
        g.add(box(0.2, r * 0.9, 0.15, M.handle, x + L * 0.6, r * 0.6, z + r * 0.62));
        const w = new THREE.Group(); w.position.set(x + L * 0.45, H * 0.5, z + r * 0.56); w.rotation.x = Math.PI / 2;
        w.add(cyl(0.06, 0.2, M.frame, "y")); g.add(w);
      }
    }
  },
  atten(g, x, L, W, H) {
    const k = Math.max(3, Math.round(W / 1.6));
    for (let i = 0; i < k; i++) g.add(box(L * 0.9, H * 0.94, (W / k) * 0.42, o("attt") === "pack" ? M.alu : M.pod, x + L / 2, H / 2, -W / 2 + (W / k) * (i + 0.5)));
  },
  hum(g, x, L, W, H) {
    if (o("humt") === "adia") { g.add(box(L * 0.35, H * 0.85, W * 0.94, M.media, x + L / 2, H * 0.48, 0)); g.add(box(L * 0.9, 0.12, W * 0.98, M.steam, x + L / 2, 0.06, 0)); return; }
    const hdr = cyl(0.14, W * 0.9, M.steam, "z"); hdr.position.set(x + L * 0.3, 0.35, 0); g.add(hdr);
    const k = Math.max(4, Math.round(W * 1.5));
    for (let i = 0; i < k; i++) { const t = cyl(0.06, H * 0.8, M.steam, "y", 12); t.position.set(x + L * 0.3, H * 0.45, -W * 0.42 + (i * W * 0.84) / (k - 1)); g.add(t); }
    if (o("humt") !== "inj") g.add(box(L * 0.4, H * 0.45, 0.8, M.steam, x + L / 2, H * 0.3, W / 2 + 0.6)); // generator alongside
  },
  final(g, x, L, W, H) {
    g.add(box(0.12, H, W, M.frame, x + 0.2, H / 2, 0));
    const cols = Math.max(3, Math.round(W / 1.2));
    for (let j = 0; j < cols; j++) {
      if (o("fint") === "box") {
        const p = box(0.05, H * 0.9, (W / cols) * 1.05, M.filter, x + 0.26 + L * 0.3, H / 2, -W / 2 + (W / cols) * (j + 0.5)); p.rotation.y = j % 2 ? 0.5 : -0.5; g.add(p);
      } else g.add(box(L * 0.72, H * 0.9, (W / cols) * 0.62, M.bag, x + 0.26 + L * 0.36, H / 2, -W / 2 + (W / cols) * (j + 0.5)));
    }
  },
  hepa(g, x, L, W, H) {
    g.add(box(Math.min(L * 0.5, 1.2), H * 0.94, W * 0.94, M.filter, x + L / 2, H / 2, 0));
    const k = Math.max(2, Math.round(W / 2));
    for (let i = 1; i < k; i++) g.add(box(Math.min(L * 0.52, 1.25), H * 0.94, 0.06, M.frame, x + L / 2, H / 2, -W * 0.47 + (i * W * 0.94) / k));
  },
  dis(g, x, L, W, H) {},
};

const DOOR_ON = new Set(["rfan", "mix", "pre", "carbon", "erw", "access", "fan", "final", "hepa", "hum", "uv", "afms"]);

function build() {
  const c = (lastCalc = calc());
  if (unit) { scene.remove(unit); unit.traverse((m) => m.geometry && m.geometry.dispose()); }
  fans = [];
  unit = new THREE.Group();
  M.panel.color.setHex(FINISH[o("ext")]);
  M.fin.color.setHex(o("coat") === "ecoat" ? 0x3b3f3c : o("coat") === "epoxy" ? 0xb48a3a : o("fins") === "cu" ? 0xc27a45 : 0xc9d7e0);
  const ft = (inch) => inch / 12;
  const L = ft(c.L), W = ft(c.W), H = ft(c.H), wall = ft(casingIn()), rail = ft(+o("base"));
  const Wi = W - wall * 2, Hi = H - wall * 2;
  const inner = new THREE.Group(); inner.position.set(-L / 2, rail + wall, 0);
  unit.add(inner);

  if (!c.secs.length) { scene.add(unit); frame(true); return; }

  unit.add(box(L, rail, W, M.rail, 0, rail / 2, 0));

  const shell = new THREE.Group(); unit.add(shell);
  shell.add(box(L, wall, W, o("floor") === "galv" ? M.panel : M.steam, 0, rail + wall / 2, 0));
  shell.add(box(L, H, wall, M.panel, 0, rail + H / 2, -W / 2 + wall / 2));
  const roof = box(L, wall, W, M.panel, 0, rail + H - wall / 2, 0); roof.userData.cut = !c.dbl; shell.add(roof);
  shell.add(box(wall, H, W, M.panel, -L / 2 + wall / 2, rail + H / 2, 0));
  shell.add(box(wall, H, W, M.panel, L / 2 - wall / 2, rail + H / 2, 0));
  const near = new THREE.Group(); near.userData.cut = true; shell.add(near);
  near.add(box(L, H, wall, M.panel, 0, rail + H / 2, W / 2 - wall / 2));

  // shipping split positions (cumulative section lengths)
  const splitAt = new Set(); { let acc = 0; for (const p of c.pieces.slice(0, -1)) { acc += p; splitAt.add(Math.round(acc)); } }

  let x = 0, xin = 0, disX = null;
  c.secs.forEach((s, i) => {
    const len = ft(s.len);
    BUILD[s.id](inner, x, len, Wi, Hi, c);
    if (s.id === "dis") disX = x + len / 2;
    if (i > 0) {
      const isSplit = splitAt.has(Math.round(xin));
      const mat = isSplit ? M.split : M.frame, th = isSplit ? 0.22 : 0.12;
      unit.add(box(th, H + 0.06, 0.08, mat, -L / 2 + x, rail + H / 2, -W / 2 - 0.03));
      near.add(box(th, H + 0.06, 0.08, mat, -L / 2 + x, rail + H / 2, W / 2 + 0.03));
      if (isSplit) shell.add(Object.assign(box(th, 0.08, W + 0.06, mat, -L / 2 + x, rail + H + 0.03, 0), { userData: { cut: true } }));
    }
    if (DOOR_ON.has(s.id) && len >= 1.4) {
      const dw = Math.min(len * 0.7, 2.2), dh = Math.min(Hi * 0.85, 6.5), dx = -L / 2 + x + len / 2, dy = rail + wall + dh / 2 + 0.2;
      near.add(box(dw, dh, 0.05, M.door, dx, dy, W / 2 + 0.03));
      near.add(box(0.08, 0.5, 0.08, M.handle, dx + dw * 0.35, dy, W / 2 + 0.09));
      if (o("doors") !== "hinged") near.add(box(0.5, 0.5, 0.03, M.glass, dx, dy + dh * 0.22, W / 2 + 0.07));
    }
    x += len; xin += s.len;
  });

  // double deck: return/exhaust deck stacked on top, flowing the opposite way
  const Hu = ft(c.Hu), Hup = Hu - wall * 2, y2 = rail + H;
  if (c.dbl) {
    const up = new THREE.Group(); up.position.set(-L / 2, y2 + wall, 0); unit.add(up);
    shell.add(box(L, Hu, wall, M.panel, 0, y2 + Hu / 2, -W / 2 + wall / 2));
    const roof2 = box(L, wall, W, M.panel, 0, y2 + Hu - wall / 2, 0); roof2.userData.cut = true; shell.add(roof2);
    shell.add(box(wall, Hu, W, M.panel, -L / 2 + wall / 2, y2 + Hu / 2, 0));
    shell.add(box(wall, Hu, W, M.panel, L / 2 - wall / 2, y2 + Hu / 2, 0));
    near.add(box(L, Hu, wall, M.panel, 0, y2 + Hu / 2, W / 2 - wall / 2));
    // return filter near the return inlet (downstream end), exhaust fans near the exhaust end
    BUILD.pre(up, L - 2.2, 1, Wi, Hup);
    fanArray(up, 1.5, 4, Wi, Hup, { rows: 1, cols: Math.max(2, Math.ceil(state.cfm / 12000)) }, true);
    near.add(box(2, Math.min(Hup * 0.85, 5), 0.05, M.door, -L / 2 + 3.2, y2 + wall + Math.min(Hup * 0.85, 5) / 2 + 0.15, W / 2 + 0.03));
    near.add(box(2, Math.min(Hup * 0.85, 5), 0.05, M.door, L / 2 - 2.6, y2 + wall + Math.min(Hup * 0.85, 5) / 2 + 0.15, W / 2 + 0.03));
    // wheel spans both decks
    let ex = 0;
    for (const s of c.secs) { if (s.id === "erw" && /ent|sen/.test(o("ertype"))) { const r = Math.min(W, H + Hu) * 0.46; const w = cyl(r, 0.8, M.wheel, "x", 64); w.position.set(-L / 2 + ex + ft(s.len) / 2, rail + (H + Hu) / 2, 0); unit.add(w); } ex += ft(s.len); }
  }

  // outdoor: roof cap, intake hood, optional service vestibule
  const outdoor = o("loc") !== "indoor";
  if (outdoor) {
    const cap = box(L + 0.6, 0.25, W + 0.6, M.roof, 0, rail + H + Hu + 0.15, 0); cap.rotation.x = 0.02; cap.userData.cut = true; shell.add(cap);
    if (o("inlet") === "end") { const hood = box(1.2, H * 0.6, W * 0.9, M.roof, -L / 2 - 0.6, rail + H * 0.55, 0); hood.rotation.z = -0.25; unit.add(hood); }
    if (o("loc") === "penthouse") {
      const vl = 6;
      unit.add(box(vl, H, W, M.panel, L / 2 + vl / 2, rail + H / 2, 0));
      unit.add(box(vl, 0.25, W + 0.6, M.roof, L / 2 + vl / 2, rail + H + 0.15, 0));
      unit.add(box(2.4, Math.min(H * 0.85, 7), 0.05, M.door, L / 2 + vl / 2, rail + Math.min(H * 0.85, 7) / 2 + 0.2, W / 2 + 0.03));
    }
  }

  // openings and airflow arrows
  const arrow = (from, dir, mat, len = 3) => {
    const a = new THREE.Group();
    const shaft = cyl(0.12, len, mat, "y", 12); shaft.position.y = len / 2; a.add(shaft);
    const head = new THREE.Mesh(new THREE.ConeGeometry(0.35, 0.8, 16), mat); head.position.y = len + 0.4; a.add(head);
    a.position.copy(from);
    a.quaternion.setFromUnitVectors(new THREE.Vector3(0, 1, 0), dir.clone().normalize());
    unit.add(a);
  };
  const V = (a, b, cc) => new THREE.Vector3(a, b, cc);
  const midY = rail + H / 2, top = rail + H + Hu, x0 = -L / 2, x1 = L / 2;
  const mixIdx = c.secs.findIndex((s) => s.id === "mix");
  const mixMid = mixIdx >= 0 ? x0 + ft(c.secs.slice(0, mixIdx).reduce((a, s) => a + s.len, 0) + c.secs[mixIdx].len / 2) : x0 + 1.5;
  const inlet = c.dbl && o("inlet") === "top" ? "end" : o("inlet");
  // outdoor air
  if (inlet === "end") arrow(V(x0 - 4.5, midY, 0), V(1, 0, 0), M.air);
  else if (inlet === "top") arrow(V(mixMid - 0.8, top + 4.5, -W * 0.2), V(0, -1, 0), M.air);
  else arrow(V(mixMid, midY, W / 2 + 4.5), V(0, 0, -1), M.air);
  // return air
  if (c.dbl) {
    const uy = rail + H + Hu / 2;
    arrow(V(x1 + 4.5, uy, 0), V(-1, 0, 0), M.airRet);
    arrow(V(x0 - 0.8, uy, 0), V(-1, 0, 0), M.airExh);
  } else if (mixIdx >= 0) {
    if (o("ret") === "top") arrow(V(mixMid + 0.8, top + 4.5, W * 0.15), V(0, -1, 0), M.airRet);
    else if (o("ret") === "side") arrow(V(mixMid, midY, -W / 2 - 4.5), V(0, 0, 1), M.airRet);
    else arrow(V(mixMid, rail - 0.2, W / 2 + 3.5), V(0, 0.2, -1), M.airRet);
  }
  // relief / exhaust
  if (!c.dbl && o("rfan") !== "none") arrow(V(x0 + 2, top + 1, -W * 0.25), V(0, 1, 0), M.airExh);
  // supply
  const sx = disX !== null ? x0 + disX : x1 - 1.5;
  const op = c.dbl && o("dis") === "top" ? "end" : o("dis");
  if (op === "end") { unit.add(box(0.06, H * 0.6, W * 0.6, M.dark, x1 + 0.03, midY, 0)); arrow(V(x1 + 0.8, midY, 0), V(1, 0, 0), M.air); }
  else if (op === "top") { unit.add(Object.assign(box(Math.min(L * 0.15, 2.5), 0.5, W * 0.6, M.frame, sx, top + 0.25, 0), { userData: { cut: true } })); arrow(V(sx, top + 1.0, 0), V(0, 1, 0), M.air); }
  else if (op === "bottom") arrow(V(sx, rail + 0.2, W / 2 + 1), V(0, -0.3, 1), M.air, 2.5);
  else { near.add(box(Math.min(L * 0.15, 2.5), H * 0.5, 0.06, M.dark, sx, midY, W / 2 + 0.04)); arrow(V(sx, midY, W / 2 + 0.8), V(0, 0, 1), M.air); }

  // person for scale, 5'10"
  const p = new THREE.Group();
  const body = new THREE.Mesh(new THREE.CapsuleGeometry(0.55, 3.3, 6, 16), M.person); body.position.y = 2.2; p.add(body);
  const head = new THREE.Mesh(new THREE.SphereGeometry(0.42, 24, 16), M.person); head.position.y = 5.4; p.add(head);
  p.position.set(L / 2 + (o("loc") === "penthouse" ? 9 : 3), 0, W / 2 + 1.5);
  unit.add(p);

  if (o("hand") === "left") unit.scale.z = -1;
  unit.traverse((m) => { if (m.isMesh) { m.castShadow = true; m.receiveShadow = true; } });
  scene.add(unit);
  applyCutaway();
  frame(false);
}

function applyCutaway() {
  if (!unit) return;
  unit.traverse((m) => { if (m.userData.cut) m.visible = !state.cutaway; });
}

let view = "iso", framedFor = "";
function frame(force) {
  const c = lastCalc;
  const L = c.L / 12 + (o("loc") === "penthouse" ? 6 : 0) || 10, W = c.W / 12 || 6, H = c.Ht / 12 || 6;
  const key = view + "|" + Math.round(L / 3) + "|" + Math.round(W / 2);
  if (!force && key === framedFor) return;
  framedFor = key;
  const R = Math.max(L, W * 1.6, H * 1.6) * 1.15 + 8;
  const t = new THREE.Vector3(0, H / 2, 0);
  const side = o("hand") === "left" ? -1 : 1;
  const pos = {
    iso: new THREE.Vector3(R * 0.55, R * 0.45, R * 0.9 * side),
    side: new THREE.Vector3(0, H / 2 + 1, R * 1.05 * side),
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
const STEPS = [
  { t: "Start", d: "Pick a quick-ship standard model or a typical custom unit. You can change anything afterwards.", w: "start" },
  { t: "Airflow and size", d: "Set the design airflow, the pressure your ductwork needs, and any size limits.", w: "airflow", o: ["fv", "maxh"] },
  { t: "Layout", d: "Where the unit sits, how many decks it has, and where air comes in and goes out.", o: ["loc", "deck", "arr", "hand", "inlet", "ret", "dis"] },
  { t: "Sections", d: "Turn sections on or off. They stay in the usual airflow order, and the numbers show length and pressure drop.", w: "sections" },
  { t: "Casing", d: "Panels, finishes and construction details.", o: ["casing", "ins", "ext", "liner", "floor", "base", "leak", "doors", "seis"] },
  { t: "Fans and motors", d: "Fan type, redundancy and power supply.", o: ["fan", "red", "bdd", "volt", "rfan"] },
  { t: "Coils and heating", d: "Cooling, heating and preheat, with fin and coating choices.", o: ["ctype", "crows", "htype", "ptype", "fins", "coat", "pan"] },
  { t: "Filters and air quality", d: "Filter grades, loading and monitoring.", o: ["prem", "finm", "fint", "hepa", "rack", "gauge", "uvt"] },
  { t: "Recovery and humidity", d: "Energy recovery type, frost control and humidifier.", o: ["ertype", "frost", "humt"] },
  { t: "Sound and dampers", d: "Attenuation, dampers and economizer.", o: ["attl", "attt", "damp", "econ"] },
  { t: "Controls and electrical", d: "Factory controls, power and service lights.", o: ["ctrl", "power", "lights", "sccr"] },
  { t: "Shipping and testing", d: "How it ships and how we prove it before it leaves.", o: ["split", "kd", "test", "docs"] },
  { t: "Review and submit", d: "Check the unit, then send it to an application engineer.", w: "review" },
];
const QS = window.CAE_QS || {};
let mode = "guided", step = 0;

const sig = () => JSON.stringify([state.cfm, state.esp, [...state.sel].sort(), state.o]);
function qsCode(line, cfm) { return QS[line].prefix + "-" + String(Math.round(cfm / 1000)).padStart(2, "0"); }
function applyQS(line, cfm) {
  const q = QS[line];
  state.cfm = cfm; state.esp = q.esp; state.sel = new Set(q.sections);
  state.o = { ...optDefaults(), ...q.opts };
  $("#dz-cfm").value = cfm; $("#dz-esp").value = q.esp;
  state.qs = { line, cfm, code: qsCode(line, cfm), name: q.name };
  state.qsSig = sig();
  update();
}

function fieldHTML(id) {
  const it = OPT[id];
  return `<div class="field" data-opt="${id}"${it.sec ? ` data-sec="${it.sec}"` : ""}><label for="o-${id}">${it.label}</label><select id="o-${id}">` +
    it.ch.map(([v, l]) => `<option value="${v}">${l}</option>`).join("") + `</select></div>`;
}
function widgetHTML(w) {
  if (w === "start") return `
    <div class="dz-seg" role="group" aria-label="Starting point"><button type="button" data-start="qs" aria-pressed="true">Quick-ship models</button><button type="button" data-start="custom" aria-pressed="false">Custom starting points</button></div>
    <div class="dz-cards" data-startpane="qs">` + Object.entries(QS).map(([k, q]) => `
      <div class="dz-card"><span class="dz-badge">Quick ship</span><h4>${q.name}</h4><p>${q.desc}</p>
        <div class="dz-card-row"><label class="sr" for="qs-${k}">Size</label><select id="qs-${k}">${q.sizes.map((c) => `<option value="${c}">${qsCode(k, c)}, ${fmt(c)} CFM</option>`).join("")}</select>
        <button type="button" class="btn btn-primary btn-sm" data-qs="${k}">Use model</button></div></div>`).join("") + `</div>
    <div class="dz-cards" data-startpane="custom" hidden>` + Object.entries(PRESETS).map(([k, p]) => `
      <button type="button" class="dz-card dz-card-btn" data-preset="${k}"><h4>${p.label}</h4><p>${fmt(p.cfm)} CFM, ${p.s.length} sections</p></button>`).join("") + `</div>`;
  if (w === "airflow") return `<div class="dz-sliders">
      <div class="field"><label for="dz-cfm">Airflow <output id="dz-cfm-o"></output></label><input type="range" id="dz-cfm" min="2000" max="120000" step="1000" value="${state.cfm}"></div>
      <div class="field"><label for="dz-esp">External static <output id="dz-esp-o"></output></label><input type="range" id="dz-esp" min="0.25" max="4" step="0.25" value="${state.esp}"></div></div>`;
  if (w === "sections") return `<ul class="dz-secs" id="dz-secs">` + SECTIONS.filter((x) => !x.hidden).map((x) =>
    `<li><button type="button" class="dz-sec" data-id="${x.id}" aria-pressed="false"><span class="tag" aria-hidden="true">+</span><span class="nm">${x.name}</span><span class="meta"></span></button></li>`).join("") + `</ul>`;
  if (w === "review") return `<div id="dz-review"></div>
    <div class="dz-submit"><button type="button" class="btn btn-primary btn-lg" id="dz-send">Submit this design for a quote</button><button type="button" class="btn btn-ghost" id="dz-png">Save image</button></div>
    <p class="muted dz-note">Preliminary sizing from your face velocity limit, typical section lengths and typical fan efficiencies. Weight is a rough estimate. Not for construction. An application engineer sizes the real unit.</p>`;
  return "";
}

function buildPanel() {
  $("#dz-nav").innerHTML = STEPS.map((st, i) => `<li><button type="button" data-goto="${i}" title="${st.t}"><span>${i + 1}</span><b>${st.t}</b></button></li>`).join("");
  $("#dz-body").innerHTML = STEPS.map((st, i) => `<section class="dz-step" data-step="${i}" aria-labelledby="dz-st-${i}">
      <p class="dz-step-k">Step ${i + 1} of ${STEPS.length}</p><h3 id="dz-st-${i}">${st.t}</h3><p class="dz-step-d">${st.d}</p>
      ${st.w ? widgetHTML(st.w) : ""}
      ${st.o ? `<div class="dz-grid">${st.o.map(fieldHTML).join("")}</div><p class="dz-empty muted" hidden>These options belong to sections that aren't in your unit. Add them in step 4 to set them.</p>` : ""}
    </section>`).join("");
}

function showStep() {
  document.querySelectorAll(".dz-step").forEach((el) => { el.hidden = mode === "guided" && +el.dataset.step !== step; });
  document.querySelectorAll("#dz-nav button").forEach((b) => {
    const i = +b.dataset.goto;
    b.setAttribute("aria-current", mode === "guided" && i === step ? "step" : "false");
    b.classList.toggle("done", mode === "guided" && i < step);
  });
  $("#dz-mode-guided").setAttribute("aria-pressed", mode === "guided");
  $("#dz-mode-all").setAttribute("aria-pressed", mode === "all");
  $("#dz-back").hidden = mode !== "guided" || step === 0;
  $("#dz-stepno").textContent = mode === "guided" ? `Step ${step + 1} of ${STEPS.length}: ${STEPS[step].t}` : "All options";
  const last = mode === "all" || step === STEPS.length - 1;
  $("#dz-next").textContent = last ? "Submit for a quote" : "Next: " + STEPS[step + 1].t;
  $("#dz-progress").style.width = (mode === "guided" ? ((step + 1) / STEPS.length) * 100 : 100) + "%";
  document.querySelector(".designer").dataset.mode = mode;
}
function go(i) {
  step = Math.max(0, Math.min(STEPS.length - 1, i));
  if (mode === "all") { const el = document.querySelector(`.dz-step[data-step="${i}"]`); el && el.scrollIntoView({ behavior: reduceMotion ? "auto" : "smooth", block: "start" }); return; }
  showStep();
  $("#dz-body").scrollTop = 0;
}

function syncOptions() {
  document.querySelectorAll("[data-opt]").forEach((f) => {
    const id = f.dataset.opt, sec = f.dataset.sec;
    f.querySelector("select").value = state.o[id];
    f.hidden = sec ? !state.sel.has(sec) : false;
  });
  document.querySelectorAll(".dz-step").forEach((st) => {
    const e = st.querySelector(".dz-empty"); if (!e) return;
    e.hidden = st.querySelectorAll("[data-opt]:not([hidden])").length > 0;
  });
}

function changedOptions() {
  return Object.keys(OPT).filter((k) => state.o[k] !== OPT[k].def && (!OPT[k].sec || state.sel.has(OPT[k].sec)));
}

function update() {
  const c = calc();
  const ids = c.secs.map((x) => x.id);
  document.querySelectorAll(".dz-sec").forEach((b) => {
    const id = b.dataset.id, on = state.sel.has(id), info = secInfo(id);
    b.setAttribute("aria-pressed", on);
    b.querySelector(".tag").textContent = on ? ids.indexOf(id) + 1 : "+";
    b.querySelector(".nm").textContent = on ? info.name : BY_ID[id].name;
    b.querySelector(".meta").textContent = info.len + "″ · " + info.dp.toFixed(2) + "″";
  });
  document.querySelectorAll("[data-preset]").forEach((b) => b.setAttribute("aria-pressed", state.preset === b.dataset.preset && !state.qs));
  syncOptions();
  // quick-ship status
  const qsOn = state.qs && sig() === state.qsSig;
  const ban = $("#dz-banner");
  if (state.qs) {
    ban.hidden = false;
    ban.className = "dz-banner " + (qsOn ? "ok" : "warn");
    ban.innerHTML = qsOn ? `<b>${state.qs.code}</b> quick-ship model. Standard configuration, built from stocked sections.`
      : `<b>Based on ${state.qs.code}.</b> You've changed it, so it will be quoted as a custom unit. <button type="button" class="dz-link" id="dz-qs-back">Back to ${state.qs.code}</button>`;
  } else ban.hidden = true;
  $("#dz-badge").textContent = qsOn ? "Quick ship · " + state.qs.code : state.qs ? "Custom · based on " + state.qs.code : "Custom unit";
  $("#dz-badge").className = "dz-tag " + (qsOn ? "qs" : "");

  $("#dz-cfm-o").textContent = fmt(state.cfm) + " CFM";
  $("#dz-esp-o").textContent = state.esp.toFixed(2) + " in. w.g.";
  $("#r-len").innerHTML = c.secs.length ? ftin(c.L) + `<small>${(c.L * 0.0254).toFixed(2)} m</small>` : "—";
  $("#r-wh").innerHTML = ftin(c.W) + " × " + ftin(c.Ht) + `<small>${c.dbl ? "double deck, " : ""}${(c.W * 0.0254).toFixed(2)} × ${(c.Ht * 0.0254).toFixed(2)} m</small>`;
  const fanTxt = { ec: "EC", pm: "PM", plenum: "plenum", dwdi: "DWDI" }[o("fan")];
  $("#r-fans").innerHTML = c.hasFan ? `${c.grid.n} ${fanTxt} fan${c.grid.n > 1 ? "s" : ""}<small>${c.grid.n > c.grid.base ? c.grid.base + " running + " + (c.grid.n - c.grid.base) + " spare" : "about " + fmt(Math.round(state.cfm / c.grid.base / 100) * 100) + " CFM each"}</small>` : "None<small>add a supply fan</small>";
  $("#r-tsp").innerHTML = c.tsp.toFixed(2) + " in. w.g." + `<small>${c.isp.toFixed(2)} internal</small>`;
  $("#r-bhp").innerHTML = c.hasFan ? c.bhp.toFixed(1) + " bhp" + `<small>${(c.bhp * 0.7457).toFixed(1)} kW at ${o("volt")} V</small>` : "—";
  $("#r-fv").innerHTML = Math.round(state.cfm / c.area) + " fpm" + `<small>${c.area.toFixed(0)} ft² coil face</small>`;
  $("#r-ship").innerHTML = o("kd") === "knockdown" ? "Knockdown<small>panels, assembled on site</small>" : `${c.pieces.length} section${c.pieces.length === 1 ? "" : "s"}<small>longest ${ftin(Math.max(0, ...c.pieces))}</small>`;
  $("#r-wt").innerHTML = c.secs.length ? fmt(Math.round(c.weight / 100) * 100) + " lb" + `<small>about ${fmt(Math.round(c.weight * 0.4536 / 50) * 50)} kg, estimate</small>` : "—";

  const ch = changedOptions();
  $("#dz-review").innerHTML = `<p class="dz-sum">${summary(c)}</p>
    <h4>Sections <button type="button" class="dz-link" data-goto="3">Change</button></h4><ol class="dz-rlist">${c.secs.map((x) => `<li>${x.name}</li>`).join("")}</ol>
    <h4>Options changed from standard (${ch.length})</h4>` +
    (ch.length ? `<dl class="dz-rdl">${ch.map((k) => `<div><dt>${OPT[k].label}</dt><dd>${OPT[k].ch.find((x) => x[0] === state.o[k])[1]}</dd></div>`).join("")}</dl>` : `<p class="muted">None. Every option is at our standard.</p>`);
  if (renderer) build();
}

function optionList() {
  const out = {};
  if (state.qs) out["Model"] = sig() === state.qsSig ? state.qs.code + " (quick ship)" : "Custom, based on " + state.qs.code;
  for (const g of OPTIONS) for (const it of g.items) {
    if (it.sec && !state.sel.has(it.sec)) continue;
    out[it.label] = it.ch.find((x) => x[0] === state.o[it.id])[1];
  }
  return out;
}

function summary(c) {
  return `${fmt(state.cfm)} CFM at ${state.esp.toFixed(2)} in. w.g. external, ${OPT.loc.ch.find((x) => x[0] === o("loc"))[1].toLowerCase()}${c.dbl ? ", double deck" : ""}, ${OPT.casing.ch.find((x) => x[0] === o("casing"))[1]} casing. ` +
    `About ${ftin(c.L)} L × ${ftin(c.W)} W × ${ftin(c.Ht)} H, ${c.tsp.toFixed(2)} in. w.g. total static` +
    (c.hasFan ? `, ${c.grid.n}-fan ${OPT.fan.ch.find((x) => x[0] === o("fan"))[1].toLowerCase()} at about ${c.bhp.toFixed(1)} bhp.` : ", no fan section.");
}

function applyPreset(key) {
  const p = PRESETS[key];
  state.cfm = p.cfm; state.esp = p.esp; state.sel = new Set(p.s);
  state.o = { ...optDefaults(), ...p.o };
  state.qs = null; state.preset = key;
  $("#dz-cfm").value = p.cfm; $("#dz-esp").value = p.esp;
  update();
}

function submit() {
  const c = calc();
  const design = {
    cfm: state.cfm, external_static: state.esp,
    model: state.qs ? (sig() === state.qsSig ? state.qs.code : "custom (based on " + state.qs.code + ")") : "custom",
    sections: c.secs.map((x) => x.name),
    options: optionList(),
    length_in: c.L, width_in: c.W, height_in: c.Ht, total_static: +c.tsp.toFixed(2),
    fans: c.hasFan ? c.grid.n : 0, bhp: c.hasFan ? +c.bhp.toFixed(1) : 0,
    shipping_sections: c.pieces.length, weight_lb: Math.round(c.weight),
    summary: (state.qs && sig() === state.qsSig ? "Quick-ship model " + state.qs.code + ". " : "") + summary(c),
  };
  try { sessionStorage.setItem("cae-design", JSON.stringify(design)); } catch (e) {}
  location.href = window.CAE_CONTACT_URL || "/contact";
}

function wire() {
  buildPanel();
  const root = document.querySelector(".designer");
  root.addEventListener("change", (e) => {
    const sel = e.target.closest("select[id^='o-']"); if (!sel) return;
    state.o[sel.id.slice(2)] = sel.value; update();
  });
  root.addEventListener("click", (e) => {
    const t = e.target.closest("button"); if (!t) return;
    if (t.dataset.goto !== undefined) return go(+t.dataset.goto);
    if (t.dataset.preset) return applyPreset(t.dataset.preset);
    if (t.dataset.qs) return applyQS(t.dataset.qs, +$("#qs-" + t.dataset.qs).value);
    if (t.id === "dz-qs-back") return applyQS(state.qs.line, state.qs.cfm);
    if (t.dataset.start) {
      document.querySelectorAll("[data-start]").forEach((x) => x.setAttribute("aria-pressed", x === t));
      document.querySelectorAll("[data-startpane]").forEach((x) => (x.hidden = x.dataset.startpane !== t.dataset.start));
      return;
    }
    if (t.classList.contains("dz-sec")) { const id = t.dataset.id; state.sel.has(id) ? state.sel.delete(id) : state.sel.add(id); return update(); }
    if (t.dataset.mode) { mode = t.dataset.mode; showStep(); return; }
    if (t.dataset.view) {
      view = t.dataset.view;
      document.querySelectorAll("[data-view]").forEach((x) => x.setAttribute("aria-pressed", x === t));
      if (renderer) frame(true);
    }
  });
  $("#dz-cfm").addEventListener("input", (e) => { state.cfm = +e.target.value; update(); });
  $("#dz-esp").addEventListener("input", (e) => { state.esp = +e.target.value; update(); });
  $("#dz-cutaway").addEventListener("change", (e) => { state.cutaway = e.target.checked; applyCutaway(); });
  $("#dz-reset").addEventListener("click", () => { state.o = { ...optDefaults() }; update(); });
  $("#dz-back").addEventListener("click", () => go(step - 1));
  $("#dz-next").addEventListener("click", () => (mode === "all" || step === STEPS.length - 1 ? submit() : go(step + 1)));
  $("#dz-send").addEventListener("click", submit);
  const full = $("#dz-full");
  const setFull = (on) => {
    root.classList.toggle("dz-fullscreen", on);
    document.documentElement.classList.toggle("dz-lock", on);
    full.setAttribute("aria-pressed", on);
    full.textContent = on ? "Exit full screen" : "Full screen";
    setTimeout(() => { resize && renderer && resize(); frame(true); }, 50);
  };
  full.addEventListener("click", () => setFull(!root.classList.contains("dz-fullscreen")));
  document.addEventListener("keydown", (e) => { if (e.key === "Escape" && root.classList.contains("dz-fullscreen")) setFull(false); });
  $("#dz-png").addEventListener("click", () => {
    if (!renderer) return;
    renderer.render(scene, camera);
    const a = document.createElement("a");
    a.download = "custom-air-equipment-unit.png";
    a.href = renderer.domElement.toDataURL("image/png");
    a.click();
  });
  showStep();
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
{
  const m = new URLSearchParams(location.search).get("model");
  const hit = m && Object.entries(QS).flatMap(([k, q]) => q.sizes.map((c) => [k, c])).find(([k, c]) => qsCode(k, c) === m.toUpperCase());
  if (hit) { applyQS(hit[0], hit[1]); go(1); }
}
