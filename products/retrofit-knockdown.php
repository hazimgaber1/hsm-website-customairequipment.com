<?php
require dirname(__DIR__) . '/inc/pages.php';
product_page('retrofit-knockdown',
    'Retrofit and knockdown units',
    'Replacement air handlers built to your existing curb and connections, or shipped as panels and rebuilt in place when the only way in is a freight elevator or a 36-inch door.',
    [
        ['We survey before we design', 'Our team measures the existing unit, its connections, clearances and the route in, so the new unit fits the first time.', ['Field measurement and photos', 'Route survey from loading dock to mechanical room', 'Existing curb and duct connection drawings', 'Clearance and service access check'], 'hospital-penthouse'],
        ['Shipped in pieces, built in place', 'Knockdown units ship as panels, coils and fan modules sized for your doorway. Our crew rebuilds the casing in place and leak-tests it before startup.', ['Bolted panel construction with gasketed joints', 'Coil and fan modules sized to the route', 'Casing leak test on site', 'Startup and operator training'], 'knockdown'],
        ['Phased around the building', 'In occupied buildings we plan demolition, rebuild and startup around your schedule, including nights, weekends and summer breaks.', ['Temporary air planning', 'Night and weekend work', 'Phased fan array change-outs', 'One point of contact through startup'], 'rooftop-lift'],
    ],
    [
        ['Do I need a crane for a knockdown unit?', 'Usually not. Knockdown units are designed to travel through existing doors and elevators.'],
        ['Can you reuse the existing casing?', 'Sometimes. We can rebuild an existing casing with new coils and a fan array when the shell is sound.'],
    ]);
