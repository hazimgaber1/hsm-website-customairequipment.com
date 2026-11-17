<?php
require dirname(__DIR__) . '/inc/pages.php';
product_page('industrial-fans',
    'Industrial and process fans',
    'Centrifugal, mixed-flow and vaneaxial fans for process air, fume exhaust and material handling, up to 250,000 CFM and 30 in. w.g., in materials matched to what you are moving.',
    [
        ['A wheel for every airstream', 'Airfoil and backward-inclined wheels for clean air efficiency, radial and radial-tip wheels for dust and material handling, and mixed-flow designs where space is tight.', ['Airfoil and backward-inclined', 'Radial blade and radial tip', 'Mixed-flow and vaneaxial', 'Balanced to ISO 21940 G2.5'], 'industrial-fan'],
        ['Materials for heat and corrosion', 'Carbon steel, stainless and coated construction, high-temperature bearings and shaft cooling wheels for airstreams up to 800 °F.', ['Stainless 304 and 316', 'Epoxy, phenolic and polyurethane coatings', 'Shaft seals and heat slingers', 'Spark-resistant AMCA Type A, B or C'], 'coil-shop'],
        ['Tested before it leaves', 'Every fan is run at the factory and checked for vibration before it ships, with witness testing available.', ['Vibration signature at running speed', 'Performance to AMCA 210', 'Sound to AMCA 300', 'Witness testing on request'], 'test-cell'],
    ],
    [
        ['Which wheel type should I use for dusty air?', 'Radial or radial-tip wheels shed material and resist abrasion. Airfoil wheels are more efficient but are meant for clean air.'],
        ['Can you build fans for high temperatures?', 'Yes, to 800 °F, with high-temperature bearings, shaft coolers and materials selected for the operating temperature.'],
    ]);
