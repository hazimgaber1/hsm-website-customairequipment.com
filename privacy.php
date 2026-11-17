<?php
require __DIR__ . '/inc/pages.php';
text_page(['title' => 'Privacy policy', 'description' => 'How Custom Air Equipment collects and uses information submitted through this website.', 'path' => 'privacy', 'crumbs' => [['Privacy', 'privacy']]],
  'privacy', 'Privacy policy',
  '<p>This policy explains what we collect through this website and how we use it.</p>
   <h2>What we collect</h2><ul><li>Details you send in a quote, rep or contact form, including any 3D design you attach.</li><li>Your email address if you subscribe to our newsletter.</li><li>Basic server logs, such as IP address and pages requested, used for security.</li></ul>
   <h2>How we use it</h2><p>We use your details to respond to your request, prepare quotations and send the newsletter you asked for. We do not sell your information.</p>
   <h2>Retention and access</h2><p>To see, correct or delete the information we hold about you, email <a href="mailto:' . e(setting('email')) . '">' . e(setting('email')) . '</a>.</p>
   <h2>Cookies</h2><p>The site uses one session cookie to protect forms. It does not use advertising cookies.</p>');
