<?php
require __DIR__ . '/inc/pages.php';
text_page(['title' => 'Terms of sale', 'description' => 'Terms of sale for Custom Air Equipment products.', 'path' => 'terms', 'crumbs' => [['Terms of sale', 'terms']]],
  'terms', 'Terms of sale',
  '<p class="lede">Each quotation states the terms that apply to that order, including pricing, payment, shipping, warranty and limitations of liability. Those terms govern the sale.</p>
   <p>For a copy of our standard terms of sale, email <a href="mailto:' . e(setting('email')) . '">' . e(setting('email')) . '</a>.</p>
   <h2>Website content</h2><p>Information on this website, including the 3D designer, savings calculator and guides, is general and preliminary. It is not an engineered selection and should not be used for construction.</p>');
