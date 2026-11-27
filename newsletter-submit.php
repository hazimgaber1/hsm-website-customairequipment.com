<?php
require __DIR__ . '/inc/bootstrap.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && csrf_ok() && post('website') === '') {
    $email = post('email', 160);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $ins = db()->prepare('INSERT OR IGNORE INTO subscribers (created_at, email) VALUES (?, ?)');
        $ins->execute([date('c'), strtolower($email)]);
        if ($ins->rowCount() > 0) {
            erp_track(['type' => 'signup', 'label' => 'Newsletter', 'email' => strtolower($email)]);
        }
    }
}
page_head(['title' => 'Subscribed', 'description' => 'Newsletter subscription.', 'path' => 'newsletter-submit', 'noindex' => true]);
?>
<section class="section"><div class="wrap notfound">
  <?= kicker('ok', 'subscribed') ?>
  <h1>You're on the list.</h1>
  <p class="lede">One email a month with new guides and engineering notes. Unsubscribe any time by replying to it.</p>
  <p><a class="btn btn-primary" href="<?= e(url('')) ?>">Back to home</a></p>
</div></section>
<?php page_foot(false); ?>
