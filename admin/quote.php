<?php
require __DIR__ . '/_admin.php';
$u = require_admin();
$id = (int) ($_GET['id'] ?? 0);
$s = db()->prepare('SELECT * FROM quotes WHERE id = ?'); $s->execute([$id]); $q = $s->fetch();
if (!$q) { http_response_code(404); exit('Not found'); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete'])) {
        db()->prepare('DELETE FROM quotes WHERE id = ?')->execute([$id]);
        flash("Request #$id deleted.");
        redirect(url('admin/quotes'));
    }
    $st = isset(QUOTE_STATUSES[$_POST['status'] ?? '']) ? $_POST['status'] : $q['status'];
    db()->prepare('UPDATE quotes SET status = ?, notes = ? WHERE id = ?')->execute([$st, post('notes', 10000), $id]);
    flash('Saved.');
    redirect(url('admin/quote?id=' . $id));
}
$d = $q['design_json'] ? json_decode($q['design_json'], true) : null;
admin_head('Request #' . $id, $u);
$rows = ['Received' => date('M j, Y g:i a', strtotime($q['created_at'])), 'Name' => $q['name'], 'Company' => $q['company'], 'Email' => $q['email'], 'Phone' => $q['phone'],
    'Role' => $q['role'], 'Project type' => $q['project_type'], 'Location' => $q['location'], 'Airflow' => $q['cfm'] ? number_format((int) $q['cfm']) . ' CFM' : '', 'Timeline' => $q['timeline'], 'Sent from' => $q['source_page']];
?>
<div class="a-grid">
  <section class="form-panel">
    <dl class="specs"><?php foreach ($rows as $k => $v): if ($v === '' || $v === null) continue; ?><div><dt><?= e($k) ?></dt><dd><?php
      if ($k === 'Email') echo '<a href="mailto:' . e($v) . '">' . e($v) . '</a>';
      elseif ($k === 'Phone') echo '<a href="' . e(tel_href($v)) . '">' . e($v) . '</a>';
      else echo e($v); ?></dd></div><?php endforeach; ?></dl>
    <?php if ($q['details']): ?><h2>Project details</h2><p class="a-pre"><?= e($q['details']) ?></p><?php endif; ?>
    <?php if ($d): ?>
    <h2>3D design</h2>
    <p><?= e($d['summary'] ?? '') ?></p>
    <ol><?php foreach ($d['sections'] ?? [] as $sec): ?><li><?= e($sec) ?></li><?php endforeach; ?></ol>
    <details><summary>Raw design data</summary><pre class="a-pre"><?= e(json_encode($d, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) ?></pre></details>
    <?php endif; ?>
  </section>
  <form class="form-panel form" method="post">
    <?= csrf_field() ?>
    <div class="field"><label for="st">Status</label><select id="st" name="status"><?php foreach (QUOTE_STATUSES as $k => $l): ?><option value="<?= e($k) ?>"<?= $q['status'] === $k ? ' selected' : '' ?>><?= e($l) ?></option><?php endforeach; ?></select></div>
    <div class="field"><label for="nt">Internal notes</label><textarea id="nt" name="notes" rows="8"><?= e($q['notes']) ?></textarea></div>
    <button class="btn btn-primary">Save</button>
    <a class="btn btn-ghost" href="mailto:<?= e($q['email']) ?>?subject=<?= rawurlencode('Your request #' . $id) ?>">Reply by email</a>
    <button class="btn btn-ghost a-danger" name="delete" value="1" onclick="return confirm('Delete this request permanently?')">Delete</button>
  </form>
</div>
<?php admin_foot(); ?>
