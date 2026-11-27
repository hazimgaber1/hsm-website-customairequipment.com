<?php
// Product lines and markets. Used by navigation, landing pages, the footer and the PDF data sheets.

const PRODUCTS = [
    'custom-air-handlers' => [
        'name'  => 'Custom air handling units',
        'short' => 'Custom AHUs',
        'code'  => 'Series AH',
        'photo' => 'factory-ahu',
        'pdf'   => 'custom-air-equipment-series-ah-data-sheet.pdf',
        'lede'  => 'Indoor and outdoor air handlers in any arrangement: single or double deck, split for rigging, or built around a footprint you already have.',
        'specs' => [
            'Airflow' => '2,000 to 150,000 CFM',
            'Casing' => '2 in. or 4 in. double-wall, thermally broken',
            'Casing leakage' => '1% or less of design airflow',
            'Panel deflection' => 'L/240 at 8 in. w.g.',
            'Construction' => 'Indoor, outdoor, stacked, double-deck, split or knockdown',
        ],
    ],
    'fan-arrays' => [
        'name'  => 'Fan arrays',
        'short' => 'Fan arrays',
        'code'  => 'Series FA',
        'photo' => 'fan-array',
        'pdf'   => 'custom-air-equipment-series-fa-data-sheet.pdf',
        'lede'  => 'Several direct-drive plenum fans working as one. Lose a fan and the rest pick up the load, with no belts to replace.',
        'specs' => [
            'Fans per array' => '2 to 36',
            'Motors' => 'EC or PM, direct drive',
            'Redundancy' => 'N+1 standard, N+2 available',
            'Isolation' => 'Backdraft dampers or blank-off plates',
            'Retrofit' => 'Fits through a 36 in. door',
        ],
    ],
    'industrial-fans' => [
        'name'  => 'Industrial fans',
        'short' => 'Industrial fans',
        'code'  => 'Series IF',
        'photo' => 'industrial-fan',
        'pdf'   => 'custom-air-equipment-series-if-data-sheet.pdf',
        'lede'  => 'Centrifugal, mixed-flow and vaneaxial fans for process air, fume exhaust and material handling, in alloys matched to the airstream.',
        'specs' => [
            'Airflow' => 'to 250,000 CFM',
            'Pressure' => 'to 30 in. w.g.',
            'Air temperature' => 'to 800 °F',
            'Wheels' => 'Airfoil, backward-inclined, radial, radial-tip',
            'Spark resistance' => 'AMCA 99-0401 Type A, B or C',
        ],
    ],
    'retrofit-knockdown' => [
        'name'  => 'Retrofit and knockdown units',
        'short' => 'Retrofit and knockdown',
        'code'  => 'Series KD',
        'photo' => 'knockdown',
        'pdf'   => 'custom-air-equipment-series-kd-data-sheet.pdf',
        'lede'  => 'Replacements built to your existing curb and connections, or shipped as panels and rebuilt in place when the only way in is a freight elevator.',
        'specs' => [
            'Access' => 'Through a 36 in. door',
            'Footprint' => 'Matched to the existing unit',
            'Assembly' => 'Rebuilt and leak-tested on site',
            'Downtime' => 'Phased to suit occupied buildings',
            'Survey' => 'Field measurement and 3D scan',
        ],
    ],
];

const MARKETS = [
    'healthcare' => ['Healthcare', 'hospital-penthouse', '100% outdoor air, MERV 14 final filters and ASHRAE 170 pressure relationships, in buildings that never close.',
        ['ASHRAE 170 air change and pressure requirements', 'N+1 fan arrays so a fan can be serviced without shutting down', 'Energy recovery that keeps exhaust and supply apart', 'Steam humidification and UV-C on cooling coils']],
    'laboratories' => ['Laboratories', 'lab-rooftop', 'Once-through air, fume exhaust and tight room pressure control, with large outdoor air loads.',
        ['Makeup air units sized for 100% outdoor air', 'High-plume exhaust fans', 'Coated coils and stainless drain pans', 'Run-around or heat pipe recovery where cross-contamination is a concern']],
    'data-centers' => ['Data centers', 'data-center', 'High sensible loads, continuous duty and no single point of failure.',
        ['EC fan arrays with N+1 or N+2 redundancy', 'Large-face chilled water coils at low face velocity', 'Economizer and evaporative options', 'Redundant controls and power feeds']],
    'cleanrooms' => ['Cleanrooms', 'cleanroom-ahu', 'HEPA filtration, tight humidity control and very high air change rates.',
        ['Recirculating units with low-leakage casings', 'Fan arrays with flat static pressure curves', 'Humidity control to ±2% RH', 'Smooth, cleanable interiors']],
    'pharmaceutical' => ['Pharmaceutical', 'controls-panel', 'GMP documentation, cleanable interiors and validation support.',
        ['Stainless interiors and sloped drain pans', 'Full turnover packages for IQ/OQ', 'Witnessed factory testing', 'Bag-in/bag-out filter housings']],
    'education' => ['Education', 'school-roof', 'Occupied buildings, tight mechanical rooms and summer shutdown windows.',
        ['Knockdown delivery through existing doors', 'Quiet fan arrays for classrooms', 'Phased installation over breaks', 'Footprint-matched replacements']],
    'commercial-office' => ['Commercial and office', 'rooftop-lift', 'Rooftop and penthouse units for towers that need better efficiency without new structural steel.',
        ['Curb-matched rooftop replacements', 'Fan array conversions of old built-up units', 'Energy recovery for higher outdoor air rates', 'Variable air volume controls']],
    'industrial' => ['Industrial and process', 'industrial-exhaust', 'Hot, dusty or corrosive airstreams and process heat.',
        ['Radial-wheel process fans', 'High-temperature bearings and shaft seals', 'Alloy and coated construction', 'Makeup air for ovens and process lines']],
];

const PDF_LIBRARY = [
    ['custom-air-equipment-product-overview.pdf', 'Product overview', 'All four product lines on two pages.'],
    ['custom-air-equipment-series-ah-data-sheet.pdf', 'Series AH data sheet', 'Custom air handling units.'],
    ['custom-air-equipment-series-fa-data-sheet.pdf', 'Series FA data sheet', 'Fan arrays.'],
    ['custom-air-equipment-series-if-data-sheet.pdf', 'Series IF data sheet', 'Industrial fans.'],
    ['custom-air-equipment-series-kd-data-sheet.pdf', 'Series KD data sheet', 'Retrofit and knockdown units.'],
    ['custom-air-equipment-guide-specification.pdf', 'Guide specification', 'Section 23 73 13 outline for custom AHUs.'],
    ['custom-air-equipment-submittal-checklist.pdf', 'Submittal checklist', 'What we need to quote and what you get back.'],
];

// Standard quick-ship models. Fixed configurations built from standard sections, used by the
// quick-ship page and as starting points in the 3D designer.
const QUICK_SHIP = [
    'indoor' => [
        'name' => 'QS indoor air handler',
        'prefix' => 'QS-I',
        'desc' => 'Mixing box, MERV 8 pre-filter, hot water and chilled water coils, EC fan array with one spare fan, MERV 14 final filters.',
        'esp' => 1.5,
        'sizes' => [4000, 6000, 8000, 12000, 16000, 20000, 25000, 30000],
        'sections' => ['mix', 'pre', 'heat', 'cool', 'fan', 'final', 'dis'],
        'opts' => ['loc' => 'indoor', 'casing' => '2', 'fan' => 'ec', 'red' => 'n1', 'crows' => '6', 'ctrl' => 'bacnet', 'dis' => 'top'],
    ],
    'outdoor' => [
        'name' => 'QS outdoor DOAS',
        'prefix' => 'QS-O',
        'desc' => 'Weatherproof 100% outdoor air unit with an enthalpy wheel, MERV 8 and MERV 13 filters, chilled water and hot water coils, EC fan array.',
        'esp' => 1.25,
        'sizes' => [3000, 5000, 8000, 12000, 16000, 20000],
        'sections' => ['mix', 'pre', 'erw', 'heat', 'cool', 'fan', 'final', 'dis'],
        'opts' => ['loc' => 'outdoor', 'casing' => '2tb', 'fan' => 'ec', 'red' => 'n1', 'ertype' => 'ent', 'finm' => '13', 'ext' => 'gray', 'ctrl' => 'bacnet', 'dis' => 'bottom'],
    ],
    'double' => [
        'name' => 'QS double-deck ERV',
        'prefix' => 'QS-D',
        'desc' => 'Stacked supply and exhaust decks around an enthalpy wheel, for tight footprints. Supply and return EC fan arrays, MERV 8 and MERV 14 filters, hot water and chilled water coils.',
        'esp' => 1.25,
        'sizes' => [5000, 8000, 12000, 16000, 20000],
        'sections' => ['mix', 'pre', 'erw', 'heat', 'cool', 'fan', 'final', 'dis'],
        'opts' => ['deck' => 'double', 'loc' => 'outdoor', 'casing' => '2tb', 'fan' => 'ec', 'red' => 'n1', 'ertype' => 'ent', 'ext' => 'gray', 'ctrl' => 'bacnet', 'dis' => 'end'],
    ],
];

const QUICK_SHIP_FANWALLS = [
    ['QS-FW-22', '2 × 2', '4', 'up to 12,000 CFM', '57 in. × 57 in.'],
    ['QS-FW-32', '3 × 2', '6', 'up to 18,000 CFM', '84 in. × 57 in.'],
    ['QS-FW-33', '3 × 3', '9', 'up to 27,000 CFM', '84 in. × 84 in.'],
    ['QS-FW-43', '4 × 3', '12', 'up to 36,000 CFM', '111 in. × 84 in.'],
    ['QS-FW-44', '4 × 4', '16', 'up to 48,000 CFM', '111 in. × 111 in.'],
];

function quick_ship_code(string $line, int $cfm): string
{
    return QUICK_SHIP[$line]['prefix'] . '-' . str_pad((string) round($cfm / 1000), 2, '0', STR_PAD_LEFT);
}
