<?php
require dirname(__DIR__) . '/inc/pages.php';
market_page('data-centers', 'Cooling air for data halls',
    'Data halls carry large sensible loads around the clock. We build air handlers with redundant fan arrays and large coils that keep the IT load cool through any single failure.',
    [['High sensible load', 'Almost all of the heat is sensible, so coils are large and dehumidification is minimal.'], ['Continuous duty', 'The unit runs 8,760 hours a year, so efficiency at part load matters more than at peak.'], ['No single point of failure', 'Fans, controls and power have to be redundant to meet the facility\'s tier rating.']],
    ['fan-arrays', 'custom-air-handlers'], ['data-centers']);
