<?php
require __DIR__ . '/_admin.php';
$u = require_admin();
$labels = [
    'company_name' => 'Company name', 'parent_line' => 'Parent line', 'site_url' => 'Site URL', 'phone' => 'Phone',
    'email' => 'Public email', 'quote_email' => 'Send quote requests to', 'mail_from' => 'Send email from',
    'address' => 'Plant and office address', 'hours' => 'Office hours', 'tagline' => 'Footer tagline',
    'linkedin_url' => 'LinkedIn URL', 'youtube_url' => 'YouTube URL', 'announcement' => 'Announcement bar (blank to hide)',
    'google_site_verification' => 'Google Search Console verification code',
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vals = [];
    foreach ($labels as $k => $_) $vals[$k] = post($k, 300);
    foreach (['email', 'quote_email', 'mail_from'] as $k) {
        if ($vals[$k] !== '' && !filter_var($vals[$k], FILTER_VALIDATE_EMAIL)) { flash("“{$labels[$k]}” isn't a valid email address, so nothing was saved."); redirect(url('admin/settings')); }
    }
    save_settings($vals);
    flash('Company details saved. They show on every page right away.');
    redirect(url('admin/settings'));
}
admin_head('Company details', $u);
?>
<form class="form-panel form" method="post" style="max-width:820px">
  <?= csrf_field() ?>
  <div class="f-grid">
  <?php foreach ($labels as $k => $l): ?>
    <div class="field<?= in_array($k, ['address', 'tagline', 'announcement'], true) ? ' full' : '' ?>"><label for="s-<?= e($k) ?>"><?= e($l) ?></label><input id="s-<?= e($k) ?>" name="<?= e($k) ?>" value="<?= e(setting($k)) ?>"></div>
  <?php endforeach; ?>
  </div>
  <div><button class="btn btn-primary btn-lg">Save</button></div>
</form>
<?php admin_foot(); ?>
