<?php
require dirname(__DIR__) . '/inc/pages.php';
market_page('healthcare', 'Air handlers for hospitals that never close',
    'Patient rooms, operating suites and isolation rooms depend on air that is filtered, pressurized and moving every hour of every day. We build units that can be serviced without shutting them down.',
    [['Pressure relationships', 'Operating rooms positive, isolation rooms negative, and the air handler has to hold those relationships as filters load.'], ['High outdoor air', 'Large outdoor air fractions mean big coil loads, freeze protection and a strong case for energy recovery.'], ['No downtime', 'A fan or motor failure cannot take a surgical suite offline. Redundancy has to be built in.']],
    ['custom-air-handlers', 'fan-arrays'], ['healthcare']);
