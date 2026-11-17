<?php
require __DIR__ . '/_admin.php';
$u = require_admin();
$counts = db()->query('SELECT status, COUNT(*) n FROM quotes GROUP BY status')->fetchAll(PDO::FETCH_KEY_PAIR);
$week = (int) db()->query("SELECT COUNT(*) FROM quotes WHERE created_at >= '" . date('c', strtotime('-7 days')) . "'")->fetchColumn();
$designs = (int) db()->query('SELECT COUNT(*) FROM quotes WHERE design_json IS NOT NULL')->fetchColumn();
$subs = (int) db()->query('SELECT COUNT(*) FROM subscribers')->fetchColumn();
$latest = db()->query('SELECT id, created_at, name, company, project_type, status, design_json IS NOT NULL AS has_design FROM quotes ORDER BY id DESC LIMIT 8')->fetchAll();
admin_head('Dashboard', $u);
?>
<div class="a-stats">
  <div><b><?= (int) ($counts['new'] ?? 0) ?></b><span>New requests</span></div>
  <div><b><?= $week ?></b><span>Requests this week</span></div>
  <div><b><?= $designs ?></b><span>With a 3D design</span></div>
  <div><b><?= $subs ?></b><span>Newsletter subscribers</span></div>
</div>
<h2>Latest requests</h2>
<?php include __DIR__ . '/_quote-table.php'; ?>
<p><a class="arrow-link" href="<?= e(url('admin/quotes')) ?>">All quote requests</a></p>
<?php admin_foot(); ?>
