<?php
require __DIR__ . '/_admin.php';
$u = require_admin();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove'])) {
    db()->prepare('DELETE FROM subscribers WHERE id = ?')->execute([(int) $_POST['remove']]);
    flash('Subscriber removed.');
    redirect(url('admin/subscribers'));
}
if (($_GET['export'] ?? '') === 'csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="subscribers.csv"');
    $out = fopen('php://output', 'w');
    fputcsv($out, ['email', 'subscribed']);
    foreach (db()->query('SELECT email, created_at FROM subscribers ORDER BY id') as $r) fputcsv($out, $r);
    exit;
}
$rows = db()->query('SELECT * FROM subscribers ORDER BY id DESC')->fetchAll();
admin_head('Subscribers', $u);
?>
<p><a class="btn btn-ghost btn-sm" href="<?= e(url('admin/subscribers?export=csv')) ?>">Export CSV</a></p>
<?php if (!$rows): ?><p class="muted">No subscribers yet.</p><?php else: ?>
<div class="a-table-wrap"><table class="a-table"><thead><tr><th>Email</th><th>Subscribed</th><th></th></tr></thead><tbody>
<?php foreach ($rows as $r): ?><tr><td><?= e($r['email']) ?></td><td><?= e(date('M j, Y', strtotime($r['created_at']))) ?></td>
<td><form method="post"><?= csrf_field() ?><button class="a-link" name="remove" value="<?= (int) $r['id'] ?>">Remove</button></form></td></tr><?php endforeach; ?>
</tbody></table></div>
<?php endif; ?>
<?php admin_foot(); ?>
