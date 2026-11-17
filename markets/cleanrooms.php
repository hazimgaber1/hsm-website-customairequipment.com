<?php
require dirname(__DIR__) . '/inc/pages.php';
market_page('cleanrooms', 'Recirculating air handlers for cleanrooms',
    'Cleanrooms move a lot of air through high-efficiency filters and need stable temperature and humidity. We build tight, cleanable units with flat fan curves.',
    [['High air change rates', 'Recirculation rates far above comfort systems put the fan and filters at the centre of the design.'], ['Stable conditions', 'Temperature and humidity tolerances are tight and must hold as filters load.'], ['Particle control', 'Casing leakage and interior surfaces matter because the unit itself must not shed particles.']],
    ['custom-air-handlers', 'fan-arrays'], ['filtration-iaq']);
