<?php
require dirname(__DIR__) . '/inc/pages.php';
product_page('fan-arrays',
    'Fan arrays that keep running',
    'Two to thirty-six direct-drive plenum fans working as one. Lose a fan and the rest pick up the load. No belts, no sheaves, and a shorter, quieter fan section.',
    [
        ['Redundancy you can size', 'An array is selected so the remaining fans still deliver design airflow with one fan out of service. For critical spaces we size for N+2.', ['N+1 standard, N+2 available', 'Backdraft dampers or blank-off plates for each fan', 'Fans swap out while the unit runs', 'Even velocity profile across the coil'], 'fan-array'],
        ['Direct drive with EC or PM motors', 'Each fan is driven directly by an EC motor or a PM motor on a VFD, so there are no belts to tension, replace or shed dust into the airstream.', ['High part-load efficiency', 'Speed control on every fan', 'Lower vibration and bearing wear', 'Simple spare parts list'], 'test-cell'],
        ['Built to fit through a door', 'Individual fan cubes are small enough to pass through a standard door, which makes fan arrays the usual answer for replacing an old single-fan unit in place.', ['Retrofit inside existing casings', 'Shorter fan section than a single large fan', 'Lower discharge sound in the low bands', 'Phased change-out in occupied buildings'], 'knockdown'],
    ],
    [
        ['How many fans should an array have?', 'Enough that losing one still meets design airflow at an acceptable speed, balanced against motor efficiency and cost. We show the trade-off on the selection.'],
        ['Can a fan array replace the fan in an existing air handler?', 'Usually, yes. Fan cubes are sized to pass through the existing access door and mount on a new bulkhead.'],
        ['Do fan arrays use more energy than one large fan?', 'Not necessarily. At part load, many small direct-drive fans often beat one belt-driven fan because belt losses disappear.'],
    ]);
