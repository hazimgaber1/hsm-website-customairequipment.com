<?php
require dirname(__DIR__) . '/inc/pages.php';
market_page('pharmaceutical', 'Air handling for GMP manufacturing',
    'Pharmaceutical suites need air handlers that can be cleaned, documented and validated. We build stainless interiors and ship the paperwork with the unit.',
    [['Cleanability', 'Interiors must be smooth, drainable and resistant to cleaning agents.'], ['Documentation', 'Material certificates, test reports and drawings support IQ and OQ.'], ['Containment', 'Some suites need bag-in/bag-out filters and pressure cascades between rooms.']],
    ['custom-air-handlers'], ['labs-cleanrooms-pharma', 'humidity-control']);
