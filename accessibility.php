<?php
require __DIR__ . '/inc/pages.php';
text_page(['title' => 'Accessibility', 'description' => 'Our commitment to an accessible website.', 'path' => 'accessibility', 'crumbs' => [['Accessibility', 'accessibility']]],
  'accessibility', 'Accessibility',
  '<p>We want this website to work for everyone, and we aim to meet WCAG 2.1 level AA.</p>
   <p>If something on the site is hard to use, call ' . e(setting('phone')) . ' or email <a href="mailto:' . e(setting('email')) . '">' . e(setting('email')) . '</a> and we will help and fix it.</p>');
