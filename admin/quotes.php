<?php
require __DIR__ . '/_admin.php';
$u = require_admin();
$status = $_GET['status'] ?? '';
$q = trim((string) ($_GET['q'] ?? ''));
$where = []; $args = [];
if (isset(QUOTE_STATUSES[$status])) { $where[] = 'status = ?'; $args[] = $status; }
if ($q !== '') { $where[] = '(name LIKE ? OR company LIKE ? OR email LIKE ? OR details LIKE ?)'; array_push($args, "%$q%", "%$q%", "%$q%", "%$q%"); }
$sql = 'SELECT id, created_at, name, company, project_type, status, design_json IS NOT NULL AS has_design FROM quotes' . ($where ? ' WHERE ' . implode(' AND ', $where) : '') . ' ORDER BY id DESC LIMIT 500';
$s = db()->prepare($sql); $s->execute($args); $latest = $s->fetchAll();

if (($_GET['export'] ?? '') === 'csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="quote-requests.csv"');
    $out = fopen('php://output', 'w');
    $all = db()->query('SELECT id, created_at, status, name, company, email, phone, role, project_type, location, cfm, timeline, details FROM quotes ORDER BY id DESC');
    fputcsv($out, ['id', 'created_at', 'status', 'name', 'company', 'email', 'phone', 'role', 'project_type', 'location', 'cfm', 'timeline', 'details']);
    foreach ($all as $row) fputcsv($out, $row);
    exit;
}
admin_head('Quote requests', $u);
?>
<form class="a-filter" method="get">
  <input type="search" name="q" value="<?= e($q) ?>" placeholder="Search name, company, email or details">
  <select name="status"><option value="">All statuses</option><?php foreach (QUOTE_STATUSES as $k => $l): ?><option value="<?= e($k) ?>"<?= $status === $k ? ' selected' : '' ?>><?= e($l) ?></option><?php endforeach; ?></select>
  <button class="btn btn-primary btn-sm">Filter</button>
  <a class="btn btn-ghost btn-sm" href="<?= e(url('admin/quotes?export=csv')) ?>">Export CSV</a>
</form>
<?php include __DIR__ . '/_quote-table.php'; ?>
<?php admin_foot(); ?>
