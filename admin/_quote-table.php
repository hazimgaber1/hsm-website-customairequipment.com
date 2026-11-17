<?php /** @var array $latest */ if (!$latest): ?>
<p class="muted">No requests yet. They appear here as soon as someone sends the quote form or submits a 3D design.</p>
<?php else: ?>
<div class="a-table-wrap"><table class="a-table">
<thead><tr><th>#</th><th>Received</th><th>Name</th><th>Company</th><th>Type</th><th>Status</th></tr></thead>
<tbody>
<?php foreach ($latest as $q): ?>
<tr><td><a href="<?= e(url('admin/quote?id=' . $q['id'])) ?>"><?= (int) $q['id'] ?></a></td>
<td><?= e(date('M j, Y g:i a', strtotime($q['created_at']))) ?></td>
<td><a href="<?= e(url('admin/quote?id=' . $q['id'])) ?>"><?= e($q['name']) ?></a><?= $q['has_design'] ? ' <span class="badge b-3d">3D</span>' : '' ?></td>
<td><?= e($q['company']) ?></td><td><?= e($q['project_type']) ?></td><td><?= status_badge($q['status']) ?></td></tr>
<?php endforeach; ?>
</tbody></table></div>
<?php endif; ?>
