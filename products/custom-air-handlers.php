<?php
require dirname(__DIR__) . '/inc/pages.php';
product_page('custom-air-handlers',
    'Custom air handling units',
    'Indoor and outdoor AHUs from 2,000 to 150,000 CFM, built around your airflow, your space and your building, with any mix of coils, filters, fans and energy recovery.',
    [
        ['Any arrangement, any footprint', 'Draw-through or blow-through, stacked or side by side, single or double deck. We build to the dimensions you have, including units split into sections sized for your rigging plan.', ['Stacked and side-by-side arrangements', 'Split for rigging, with factory-sealed joints', 'Penthouse and walk-in outdoor housings', 'Matched to existing curbs and duct connections'], 'factory-ahu'],
        ['Casings that stay tight for decades', 'Double-wall panels with a thermal break keep condensation off the outer skin, and a casing leakage target of 1% or less of design airflow is verified in our test cell before the unit ships.', ['2 in. or 4 in. double-wall panels', 'Thermally broken frames and doors', 'Solid, perforated or stainless liners', 'Pressure tested to the design static'], 'test-cell'],
        ['Coils built in our own shop', 'Chilled water, hot water, steam and DX coils selected for the face velocity and leaving conditions your project needs, with stainless drain pans sloped to drain.', ['Copper or stainless tubes, aluminium or copper fins', 'Steam distributing and integral face and bypass coils', 'Coated coils for coastal and corrosive air', 'Removable through side access panels'], 'coil-shop'],
        ['Energy recovery inside the casing', 'Wheels, plates, heat pipes or run-around loops, chosen against your outdoor air fraction and how much cross-leakage the space can tolerate.', ['Enthalpy and sensible wheels with purge sectors', 'Fixed-plate exchangers with bypass dampers', 'Run-around coil loops for separated airstreams', 'Frost control sequences'], 'erv-wheel'],
    ],
    [
        ['How long does a custom air handler take to build?', 'It depends on size and complexity. We confirm a ship date with the submittal, and we can phase delivery when the building needs it.'],
        ['Can you match the footprint of the unit we are replacing?', 'Yes. We survey the existing unit and its connections and build the replacement to land on the same curb or pad.'],
        ['What certification do your units carry?', 'Units are built to UL 1995 / CSA C22.2 No. 236 and tested to the AHRI and AMCA standards listed on the submittal.'],
        ['Do you supply controls?', 'We can ship units with factory-mounted and wired controls, or with provisions for the building automation contractor.'],
    ]);
