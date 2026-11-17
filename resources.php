<?php
require __DIR__ . '/inc/bootstrap.php';
page_head([
    'title' => 'Literature and PDF downloads',
    'description' => 'Download data sheets, the product overview, a guide specification and a submittal checklist for custom air handlers, fan arrays and industrial fans.',
    'path' => 'resources',
    'crumbs' => [['Literature and PDFs', 'resources']],
]);
?>
<section class="page-hero"><div class="wrap"><?= kicker('pdf', 'literature') ?><h1>Data sheets and downloads.</h1>
<p class="lede">Everything here is free to download, with no form to fill in. For drawings, sound data or a full submittal on your project, <a href="<?= e(url('contact')) ?>">ask an application engineer</a>.</p></div></section>
<section class="section-tight"><div class="wrap">
  <ul class="docs">
    <?php foreach (PDF_LIBRARY as [$file, $title, $desc]): $path = ROOT . '/assets/pdf/' . $file; ?>
    <li class="doc">
      <div class="doc-main"><span class="doc-ic">PDF</span><div><b><?= e($title) ?></b><span class="muted"><?= e($desc) ?><?= is_file($path) ? ' · ' . max(1, round(filesize($path) / 1024)) . ' KB' : '' ?></span></div></div>
      <a class="btn btn-ghost btn-sm" href="<?= e(url('assets/pdf/' . $file)) ?>" download>Download</a>
    </li>
    <?php endforeach; ?>
  </ul>
  <p class="muted" style="margin-top:24px">Looking for engineering background rather than product data? The <a href="<?= e(url('guides')) ?>">guide library</a> covers selection, specification, installation and maintenance.</p>
</div></section>
<?php page_foot(); ?>
