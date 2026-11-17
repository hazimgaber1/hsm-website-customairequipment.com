<?php
require __DIR__ . '/inc/pages.php';
text_page(['title' => 'Careers', 'description' => 'Careers at Custom Air Equipment: application engineering, fabrication, field service and more.', 'path' => 'careers', 'crumbs' => [['Careers', 'careers']]],
  'careers', 'Build things that keep buildings breathing.',
  '<p class="lede">We hire application engineers, designers, sheet metal and coil fabricators, electricians, field technicians and project managers.</p>
   <h2>How to apply</h2><p>Send your resume and a note about the work you want to do to <a href="mailto:' . e(setting('email')) . '?subject=Careers">' . e(setting('email')) . '</a>. We read every application.</p>
   <h2>What we look for</h2><ul><li>People who like solving a different problem on every job</li><li>Care for quality you can measure</li><li>Respect for the people who install and run the equipment</li></ul>');
