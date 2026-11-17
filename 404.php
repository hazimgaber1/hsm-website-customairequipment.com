<?php
require_once __DIR__ . '/inc/bootstrap.php';
http_response_code(404);
page_head(['title' => 'Page not found', 'description' => 'Page not found.', 'path' => '404', 'noindex' => true]);
?>
<section class="section"><div class="wrap notfound"><?= kicker('404', 'not found') ?><h1>That page isn't here.</h1>
<p class="lede">It may have moved. Try the guides, or call <a href="<?= e(tel_href(setting('phone'))) ?>"><?= e(setting('phone')) ?></a>.</p>
<p><a class="btn btn-primary" href="<?= e(url('')) ?>">Home</a> <a class="btn btn-ghost" href="<?= e(url('guides')) ?>">Guides</a></p></div></section>
<?php page_foot(false); ?>
