<?php
require __DIR__ . '/inc/pages.php';
text_page(['title' => 'Warranty', 'description' => 'Warranty coverage for Custom Air Equipment products.', 'path' => 'warranty', 'crumbs' => [['Warranty', 'warranty']]],
  'warranty', 'Warranty',
  '<p class="lede">The warranty terms for each order are stated on its quotation and order acknowledgement, which take precedence over this summary.</p>
   <h2>How to make a claim</h2><ol><li>Note the unit serial number from the nameplate.</li><li>Call ' . e(setting('phone')) . ' or email <a href="mailto:' . e(setting('email')) . '">' . e(setting('email')) . '</a> with the serial number, a description and photos.</li><li>We confirm coverage and arrange parts or service.</li></ol>
   <h2>Keeping coverage</h2><ul><li>Install, start up and maintain the unit following its installation, operation and maintenance manual.</li><li>Keep startup and maintenance records.</li><li>Contact us before modifying the unit.</li></ul>');
