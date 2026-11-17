"""Builds the PDF literature in assets/pdf from the product catalog.

    python3 tools/make-pdfs.py

Needs reportlab. Company name, phone and email come from the admin settings (or the defaults),
so re-run this after changing them.
"""
import json
import math
import subprocess
from pathlib import Path

from reportlab.lib.colors import HexColor, white
from reportlab.lib.pagesizes import letter
from reportlab.lib.units import inch
from reportlab.pdfgen import canvas
from reportlab.platypus import Paragraph
from reportlab.lib.styles import ParagraphStyle

ROOT = Path(__file__).resolve().parent.parent
OUT = ROOT / "assets" / "pdf"
DATA = json.loads(subprocess.check_output(["php", str(ROOT / "tools" / "catalog-json.php")]))
S = DATA["settings"]
FOREST, GREEN, SIGNAL, INK, INK3, LINE = (HexColor(c) for c in ("#0E2B1D", "#22A447", "#B7F04A", "#0C1A12", "#5B6E62", "#D5DCD6"))
W, H = letter
M = 0.7 * inch

body = ParagraphStyle("b", fontName="Helvetica", fontSize=10, leading=14, textColor=INK)
lede = ParagraphStyle("l", parent=body, fontSize=12.5, leading=17)


def mark(c, x, y, s):
    c.setFillColor(FOREST); c.roundRect(x, y, s, s, s * 0.15, fill=1, stroke=0)
    cx, cy, r = x + s / 2, y + s / 2, s * 0.31
    c.setStrokeColor(SIGNAL); c.setLineWidth(s * 0.05); c.circle(cx, cy, r, fill=0, stroke=1)
    c.setFillColor(GREEN)
    for k in range(5):
        a = math.radians(k * 72)
        p = c.beginPath(); p.moveTo(cx, cy)
        p.lineTo(cx + r * 0.95 * math.cos(a), cy + r * 0.95 * math.sin(a))
        p.lineTo(cx + r * 0.95 * math.cos(a + 0.6), cy + r * 0.95 * math.sin(a + 0.6))
        p.close(); c.drawPath(p, fill=1, stroke=0)
    c.setFillColor(SIGNAL); c.circle(cx, cy, s * 0.07, fill=1, stroke=0)


def header(c, kicker):
    c.setFillColor(FOREST); c.rect(0, H - 1.05 * inch, W, 1.05 * inch, fill=1, stroke=0)
    mark(c, M, H - 0.85 * inch, 0.62 * inch)
    c.setFillColor(white); c.setFont("Helvetica-Bold", 14); c.drawString(M + 0.8 * inch, H - 0.5 * inch, S["company_name"].upper())
    c.setFillColor(SIGNAL); c.setFont("Helvetica", 8.5); c.drawString(M + 0.8 * inch, H - 0.68 * inch, S["parent_line"].upper())
    c.setFillColor(white); c.setFont("Helvetica", 8.5); c.drawRightString(W - M, H - 0.5 * inch, kicker.upper())


def footer(c, page):
    c.setStrokeColor(LINE); c.setLineWidth(0.6); c.line(M, 0.75 * inch, W - M, 0.75 * inch)
    c.setFillColor(INK3); c.setFont("Helvetica", 8)
    c.drawString(M, 0.55 * inch, f"{S['phone']}  ·  {S['email']}  ·  {S['site_url'].replace('https://', '')}")
    c.drawRightString(W - M, 0.55 * inch, f"Page {page}  ·  Specifications subject to change without notice.")


def para(c, text, style, x, y, width):
    p = Paragraph(text, style); _, h = p.wrap(width, 1000); p.drawOn(c, x, y - h); return y - h


def specs_table(c, specs, x, y, width):
    c.setStrokeColor(INK); c.setLineWidth(1.4); c.line(x, y, x + width, y)
    for k, v in specs.items():
        label_w = c.stringWidth(k.upper(), "Helvetica", 8)
        value_w = c.stringWidth(v, "Helvetica-Bold", 10.5)
        two_lines = label_w + value_w + 12 > width
        y -= 0.5 * inch if two_lines else 0.34 * inch
        c.setFillColor(INK3); c.setFont("Helvetica", 8)
        c.drawString(x, y + (0.32 if two_lines else 0.11) * inch, k.upper())
        c.setFillColor(INK); c.setFont("Helvetica-Bold", 10.5); c.drawRightString(x + width, y + 0.11 * inch, v)
        c.setStrokeColor(LINE); c.setLineWidth(0.6); c.line(x, y, x + width, y)
    return y


def unit_drawing(c, x, y, w, h, fans=True):
    """Simple side elevation of an air handler, in the brand colours."""
    c.setStrokeColor(INK); c.setLineWidth(1.2); c.setFillColor(HexColor("#F1F4F0"))
    c.rect(x, y + 8, w, h - 8, fill=1, stroke=1)
    c.setFillColor(FOREST); c.rect(x, y, w, 8, fill=1, stroke=0)
    cuts = [0.12, 0.2, 0.33, 0.45, 0.68, 0.85]
    c.setDash(3, 3); c.setLineWidth(0.6)
    for f in cuts: c.line(x + w * f, y + 8, x + w * f, y + h)
    c.setDash()
    c.setStrokeColor(HexColor("#3D7FB3")); c.setLineWidth(1.4)
    for i in range(10): c.line(x + w * (0.35 + i * 0.008), y + 14, x + w * (0.35 + i * 0.008), y + h - 6)
    if fans:
        rows = 2
        for r in range(rows):
            cy = y + 8 + (h - 8) * (r + 0.5) / rows; cx = x + w * 0.56; rr = (h - 8) / rows * 0.33
            c.setStrokeColor(INK); c.setFillColor(white); c.circle(cx, cy, rr, fill=1, stroke=1)
            c.setStrokeColor(GREEN)
            for k in range(6):
                a = math.radians(k * 60)
                c.line(cx + rr * 0.25 * math.cos(a), cy + rr * 0.25 * math.sin(a), cx + rr * 0.9 * math.cos(a - 0.6), cy + rr * 0.9 * math.sin(a - 0.6))
    c.setFillColor(HexColor("#2A6C9F")); c.setFont("Helvetica-Bold", 8)
    c.drawString(x - 2, y + h + 6, "AIRFLOW  →")


def data_sheet(slug, p):
    path = OUT / p["pdf"]
    c = canvas.Canvas(str(path), pagesize=letter)
    c.setTitle(f"{S['company_name']} {p['code']} {p['name']} data sheet"); c.setAuthor(S["company_name"])
    header(c, f"{p['code']} data sheet")
    y = H - 1.5 * inch
    c.setFillColor(GREEN); c.setFont("Helvetica-Bold", 9); c.drawString(M, y, p["code"].upper()); y -= 0.42 * inch
    c.setFillColor(INK); c.setFont("Helvetica-Bold", 26); c.drawString(M, y, p["name"]); y -= 0.2 * inch
    y = para(c, p["lede"], lede, M, y, W - 2 * M) - 0.3 * inch
    unit_drawing(c, M, y - 1.9 * inch, W - 2 * M, 1.75 * inch, fans=slug != "industrial-fans")
    y -= 2.35 * inch
    c.setFillColor(INK); c.setFont("Helvetica-Bold", 13); c.drawString(M, y, "Typical specifications"); y -= 0.16 * inch
    y = specs_table(c, p["specs"], M, y, W - 2 * M) - 0.4 * inch
    c.setFillColor(INK); c.setFont("Helvetica-Bold", 13); c.drawString(M, y, "Every unit includes"); y -= 0.12 * inch
    items = ["Selection, performance and sound data for your project", "General-arrangement drawings for approval before fabrication",
             "Factory run test for airflow, vibration and casing leakage", "Witness testing on request", "Installation, operation and maintenance manual"]
    for it in items:
        y -= 0.27 * inch
        c.setFillColor(GREEN); c.circle(M + 4, y + 3.5, 3.2, fill=1, stroke=0)
        c.setFillColor(INK); c.setFont("Helvetica", 10.5); c.drawString(M + 16, y, it)
    y -= 0.45 * inch
    c.setFillColor(FOREST); c.roundRect(M, y - 0.95 * inch, W - 2 * M, 1.05 * inch, 8, fill=1, stroke=0)
    c.setFillColor(white); c.setFont("Helvetica-Bold", 13); c.drawString(M + 18, y - 0.25 * inch, "Get a selection for your project")
    c.setFillColor(SIGNAL); c.setFont("Helvetica", 10.5)
    c.drawString(M + 18, y - 0.5 * inch, f"Call {S['phone']} or email {S['email']}.")
    c.drawString(M + 18, y - 0.72 * inch, f"Or design your unit in 3D at {S['site_url'].replace('https://', '')}/design")
    footer(c, 1); c.showPage(); c.save()


def overview():
    c = canvas.Canvas(str(OUT / "custom-air-equipment-product-overview.pdf"), pagesize=letter)
    c.setTitle(f"{S['company_name']} product overview"); c.setAuthor(S["company_name"])
    header(c, "Product overview")
    y = H - 1.6 * inch
    c.setFillColor(INK); c.setFont("Helvetica-Bold", 28); c.drawString(M, y, "Air handlers built to your drawing.")
    y = para(c, "Custom air handling units, fan arrays, industrial fans and knockdown replacement units, engineered for one project at a time and run-tested before they ship.", lede, M, y - 0.15 * inch, W - 2 * M) - 0.3 * inch
    colw = (W - 2 * M - 0.3 * inch) / 2
    for i, (slug, p) in enumerate(DATA["products"].items()):
        x = M + (i % 2) * (colw + 0.3 * inch)
        top = y - (i // 2) * 3.4 * inch
        c.setStrokeColor(LINE); c.setFillColor(HexColor("#F6F8F5")); c.roundRect(x, top - 3.2 * inch, colw, 3.2 * inch, 8, fill=1, stroke=1)
        c.setFillColor(GREEN); c.setFont("Helvetica-Bold", 8.5); c.drawString(x + 14, top - 0.3 * inch, p["code"].upper())
        c.setFillColor(INK); c.setFont("Helvetica-Bold", 14); c.drawString(x + 14, top - 0.55 * inch, p["name"])
        yy = para(c, p["lede"], body, x + 14, top - 0.7 * inch, colw - 28) - 0.12 * inch
        specs_table(c, dict(list(p["specs"].items())[:3]), x + 14, yy, colw - 28)
    footer(c, 1); c.showPage()
    header(c, "Markets")
    y = H - 1.6 * inch
    c.setFillColor(INK); c.setFont("Helvetica-Bold", 22); c.drawString(M, y, "Where the requirements are strict."); y -= 0.35 * inch
    for name, _img, short, build in DATA["markets"].values():
        c.setFillColor(INK); c.setFont("Helvetica-Bold", 12); c.drawString(M, y, name); y -= 0.05 * inch
        y = para(c, short + " <font color='#5B6E62'>Typical build: " + "; ".join(build[:3]).lower() + ".</font>", body, M, y, W - 2 * M) - 0.22 * inch
    footer(c, 2); c.showPage(); c.save()


def text_doc(filename, title, kicker, blocks):
    c = canvas.Canvas(str(OUT / filename), pagesize=letter)
    c.setTitle(f"{S['company_name']} {title}"); c.setAuthor(S["company_name"])
    page = 1
    header(c, kicker)
    y = H - 1.6 * inch
    c.setFillColor(INK); c.setFont("Helvetica-Bold", 22); c.drawString(M, y, title); y -= 0.3 * inch
    for kind, text in blocks:
        style = ParagraphStyle("h", parent=body, fontName="Helvetica-Bold", fontSize=12, leading=16, spaceBefore=6) if kind == "h" else body
        p = Paragraph(text, style); _, h = p.wrap(W - 2 * M, 1000)
        if y - h < 1.0 * inch:
            footer(c, page); c.showPage(); page += 1; header(c, kicker); y = H - 1.4 * inch
        p.drawOn(c, M, y - h); y -= h + (0.14 * inch if kind == "h" else 0.1 * inch)
    footer(c, page); c.showPage(); c.save()


def guide_spec():
    parts = [
        ("p", "<i>Outline guide specification for custom air handling units. Edit to suit the project and coordinate with Divisions 01, 23, 25 and 26. Values in brackets are choices for the specifier.</i>"),
        ("h", "PART 1  GENERAL"),
        ("p", "1.1 Summary: Factory-assembled custom air handling units as scheduled, including casing, coils, fans, filters, dampers and accessories."),
        ("p", "1.2 References: AHRI 430, AHRI 1350, ANSI/AMCA 210, AMCA 300, ASHRAE 52.2, ASHRAE 62.1, ASHRAE 90.1, UL 1995 / CSA C22.2 No. 236, editions as adopted by the authority having jurisdiction."),
        ("p", "1.3 Submittals: performance data at scheduled conditions; fan curves; sound power by octave band; general-arrangement drawings with section lengths, weights and connection locations; wiring diagrams; casing leakage and deflection test procedure."),
        ("p", "1.4 Quality assurance: units shall be listed to UL 1995 / CSA C22.2 No. 236. Manufacturer shall run-test each unit at the factory and provide a test report."),
        ("p", "1.5 Warranty: as stated in the manufacturer's quotation, starting at [startup] [shipment]."),
        ("h", "PART 2  PRODUCTS"),
        ("p", "2.1 Casing: [2 in.] [4 in.] double-wall panels, galvanized steel exterior, [solid galvanized] [perforated] [stainless] liner, with a thermal break between inner and outer skins. Panel deflection not to exceed L/240 at [±8] in. w.g. Casing leakage not to exceed [1%] of design airflow at design static pressure."),
        ("p", "2.2 Base: welded structural steel base rail with lifting lugs, sized for rigging of each shipping section."),
        ("p", "2.3 Access doors: double-wall, same construction as the casing, with [two] latching handles operable from inside and outside, and viewports where scheduled."),
        ("p", "2.4 Fans: [direct-drive plenum fan array with EC or PM motors, sized for N+1 redundancy] [single plenum fan]. Fan wheels statically and dynamically balanced. Provide [backdraft dampers] [blank-off plates] for each fan in an array."),
        ("p", "2.5 Coils: AHRI 410 rated, [copper] [stainless] tubes, aluminum fins, face velocity not to exceed [500] fpm for cooling coils. Stainless steel IAQ drain pans sloped in two directions."),
        ("p", "2.6 Filters: [MERV 8 pre-filters] and [MERV 14 final filters] in side-access or front-load racks, with differential pressure gauges."),
        ("p", "2.7 Energy recovery: [enthalpy wheel with purge sector] [fixed-plate exchanger] [run-around loop] with frost control as scheduled."),
        ("p", "2.8 Dampers: low-leakage airfoil dampers with seals, [parallel] [opposed] blade, as scheduled."),
        ("h", "PART 3  EXECUTION"),
        ("p", "3.1 Installation: install level on a housekeeping pad or curb per the manufacturer's instructions. Trap condensate drains to suit fan pressure."),
        ("p", "3.2 Field assembly: reassemble split or knockdown units per the manufacturer's instructions and verify casing leakage after assembly."),
        ("p", "3.3 Startup: manufacturer's representative to perform startup, verify fan rotation, vibration and airflow, and train the owner's staff."),
    ]
    text_doc("custom-air-equipment-guide-specification.pdf", "Guide specification", "Section 23 73 13 outline", parts)


def submittal_checklist():
    parts = [
        ("p", "Send us what you have. The more of this list we get, the faster and more accurate the first selection will be."),
        ("h", "What we need to quote"),
        ("p", "• Airflow (CFM) for supply and, where applicable, return and exhaust<br/>• External static pressure<br/>• Outdoor air fraction and design outdoor conditions<br/>• Coil entering and leaving conditions, and the heating and cooling media<br/>• Filtration levels (MERV or HEPA)<br/>• Space limits: footprint, height, door and route sizes, existing curb drawings<br/>• Sound targets (NC or octave band limits) if any<br/>• Voltage and controls scope<br/>• Required on-site date"),
        ("h", "What you get back"),
        ("p", "• Performance summary at scheduled conditions<br/>• Fan selection and curve<br/>• Sound power by octave band<br/>• General-arrangement drawing with section lengths, weights and connection locations<br/>• Electrical data and wiring diagram<br/>• Ship date and section split for rigging"),
        ("h", "Before fabrication"),
        ("p", "• Approved drawings returned<br/>• Controls points list confirmed<br/>• Witness test requested, if wanted<br/>• Delivery address, access route and rigging plan confirmed"),
    ]
    text_doc("custom-air-equipment-submittal-checklist.pdf", "Submittal checklist", "Quoting and submittals", parts)


OUT.mkdir(parents=True, exist_ok=True)
for slug, p in DATA["products"].items():
    data_sheet(slug, p)
overview()
guide_spec()
submittal_checklist()
for f in sorted(OUT.glob("*.pdf")):
    print(f.name, f.stat().st_size)
