<?php
require dirname(__DIR__) . '/inc/pages.php';
market_page('industrial', 'Process fans and makeup air for industry',
    'Plants move hot, dusty or corrosive air and need makeup air for ovens and process lines. We build fans and units in the materials those airstreams demand.',
    [['Harsh airstreams', 'Heat, dust and corrosive vapours shorten the life of standard equipment.'], ['Process makeup air', 'Ovens, booths and process lines need conditioned makeup air in large volumes.'], ['Uptime', 'A failed exhaust fan can stop a production line.']],
    ['industrial-fans', 'custom-air-handlers'], ['industrial-process']);
