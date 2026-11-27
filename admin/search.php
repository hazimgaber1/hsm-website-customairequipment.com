<?php
require __DIR__ . '/_admin.php';
require_once dirname(__DIR__) . '/inc/gsc.php';
$u = require_admin();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $msg = post('do') === 'sitemap' ? gsc_submit_sitemap() : gsc_sync(5);
        flash($msg);
    } catch (Throwable $e) {
        if (gsc_configured()) gsc_log(false, $e->getMessage());
        flash('Search Console: ' . $e->getMessage());
    }
    redirect(url('admin/search'));
}
admin_head('Search Console', $u);
$ok = gsc_configured();
$pdo = gsc_db();
$since = gmdate('Y-m-d', strtotime('-31 days'));
$tot = $pdo->query("SELECT SUM(clicks) c, SUM(impressions) i, SUM(position * impressions) / NULLIF(SUM(impressions), 0) p, MAX(date) last FROM gsc_rows WHERE date >= '$since'")->fetch();
$queries = $pdo->query("SELECT query, SUM(clicks) c, SUM(impressions) i, SUM(position * impressions) / NULLIF(SUM(impressions), 0) p FROM gsc_rows WHERE date >= '$since' GROUP BY query ORDER BY c DESC, i DESC LIMIT 25")->fetchAll();
$pages = $pdo->query("SELECT page, SUM(clicks) c, SUM(impressions) i, SUM(position * impressions) / NULLIF(SUM(impressions), 0) p FROM gsc_rows WHERE date >= '$since' GROUP BY page ORDER BY c DESC, i DESC LIMIT 25")->fetchAll();
$log = $pdo->query('SELECT * FROM gsc_log ORDER BY id DESC LIMIT 8')->fetchAll();
?>
<?php if (!$ok): ?>
<div class="form-panel" style="margin-bottom:20px">
  <h2>Connect Search Console</h2>
  <ol>
    <li>Add <b><?= e(parse_url(setting('site_url'), PHP_URL_HOST)) ?></b> as a property in Google Search Console. Verify it with a DNS record, or paste the HTML tag's code under <a href="<?= e(url('admin/settings')) ?>">Company details</a>.</li>
    <li>In Google Cloud, turn on the Search Console API and create a service account with a JSON key.</li>
    <li>In Search Console, add the service account's email as an Owner of the property.</li>
    <li>Give the site the key as the <code>GSC_CREDENTIALS</code> environment variable (and <code>GSC_SITE</code> if the property isn't <code><?= e(gsc_site()) ?></code>).</li>
  </ol>
  <p class="muted">Once connected, data syncs every day, goes to the HSM ERP, and shows here. The sitemap is resubmitted every Monday.</p>
</div>
<?php else: ?>
<form method="post" style="display:flex;gap:10px;margin-bottom:20px"><?= csrf_field() ?>
  <button class="btn btn-primary" name="do" value="sync">Sync now</button>
  <button class="btn btn-ghost" name="do" value="sitemap">Submit sitemap</button>
  <span class="muted" style="align-self:center">Property: <?= e(gsc_site()) ?></span>
</form>
<?php endif; ?>
<div class="a-stats">
  <div><b><?= number_format((int) ($tot['c'] ?? 0)) ?></b><span>Clicks, last 30 days</span></div>
  <div><b><?= number_format((int) ($tot['i'] ?? 0)) ?></b><span>Impressions</span></div>
  <div><b><?= $tot['i'] ? number_format(100 * $tot['c'] / $tot['i'], 1) . '%' : '—' ?></b><span>Click-through rate</span></div>
  <div><b><?= $tot['p'] ? number_format((float) $tot['p'], 1) : '—' ?></b><span>Average position<?= $tot['last'] ? ', data to ' . e($tot['last']) : '' ?></span></div>
</div>
<?php foreach (['Top searches' => [$queries, 'query'], 'Top pages' => [$pages, 'page']] as $h => [$rows, $col]): ?>
<h2><?= e($h) ?></h2>
<div class="a-table-wrap"><table class="a-table"><thead><tr><th><?= $col === 'query' ? 'Search' : 'Page' ?></th><th>Clicks</th><th>Impressions</th><th>Position</th></tr></thead><tbody>
<?php if (!$rows): ?><tr><td colspan="4" class="muted">No data yet.</td></tr><?php endif; ?>
<?php foreach ($rows as $r): ?><tr><td><?= e($col === 'page' ? (parse_url($r['page'], PHP_URL_PATH) ?: '/') : $r['query']) ?></td><td><?= (int) $r['c'] ?></td><td><?= (int) $r['i'] ?></td><td><?= number_format((float) $r['p'], 1) ?></td></tr><?php endforeach; ?>
</tbody></table></div>
<?php endforeach; ?>
<?php if ($log): ?>
<h2>Sync log</h2>
<div class="a-table-wrap"><table class="a-table"><thead><tr><th>When (UTC)</th><th>Result</th></tr></thead><tbody>
<?php foreach ($log as $l): ?><tr><td><?= e(substr($l['at'], 0, 16)) ?></td><td><?= $l['ok'] ? '' : '<b>Failed:</b> ' ?><?= e($l['message']) ?></td></tr><?php endforeach; ?>
</tbody></table></div>
<?php endif; ?>
<?php admin_foot(); ?>
