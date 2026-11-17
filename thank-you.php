<?php
require __DIR__ . '/inc/bootstrap.php';
page_head(['title' => 'Request received', 'description' => 'Thanks for your request.', 'path' => 'thank-you', 'noindex' => true]);
?>
<section class="section"><div class="wrap notfound">
  <?= kicker('ok', 'request received') ?>
  <h1>Thanks. We're on it.</h1>
  <p class="lede">An application engineer will call you within one business day. If it's urgent, call <a href="<?= e(tel_href(setting('phone'))) ?>"><?= e(setting('phone')) ?></a>.</p>
  <p><a class="btn btn-primary" href="<?= e(url('guides')) ?>">Browse the engineering guides</a></p>
</div></section>
<script>try { sessionStorage.removeItem("cae-design"); } catch (e) {}</script>
<?php page_foot(false); ?>
