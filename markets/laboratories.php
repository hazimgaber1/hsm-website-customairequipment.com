<?php
require dirname(__DIR__) . '/inc/pages.php';
market_page('laboratories', 'Makeup air and exhaust for laboratories',
    'Labs run once-through air at high air change rates, so the makeup air unit and the exhaust fans are the building. We size both together.',
    [['Once-through air', 'Every cubic foot exhausted has to be replaced with conditioned outdoor air, often at 100% outdoor air.'], ['Room pressure control', 'Supply has to track exhaust closely as fume hood sashes open and close.'], ['Exhaust re-entrainment', 'Exhaust has to leave fast and high so it doesn\'t come back in at the intake.']],
    ['custom-air-handlers', 'industrial-fans'], ['labs-cleanrooms-pharma']);
