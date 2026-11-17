<?php
// Category landing page for the guide library. Each guides/<category>.php calls guide_category().
require_once __DIR__ . '/bootstrap.php';

function guide_category(string $slug): void
{
    $cat = guide_data()['categories'][$slug] ?? null;
    if (!$cat) {
        http_response_code(404);
        exit('Not found');
    }
    $list = guides_in($slug);
    page_head([
        'title' => $cat['name'] . ' guides',
        'description' => $cat['intro'],
        'path' => 'guides/' . $slug,
        'crumbs' => [['Guides', 'guides'], [$cat['name'], 'guides/' . $slug]],
        'schema' => [[
            '@context' => 'https://schema.org', '@type' => 'CollectionPage', 'name' => $cat['name'] . ' guides',
            'hasPart' => array_values(array_map(fn($g) => ['@type' => 'TechArticle', 'headline' => $g['title'], 'url' => abs_url('guides/' . $g['slug'])], $list)),
        ]],
    ]);
    $types = [];
    foreach ($list as $g) { $types[$g['type']][] = $g; }
    ?>
<section class="page-hero"><div class="wrap"><?= kicker(count($list) . ' guides', 'engineering guides') ?><h1><?= e($cat['name']) ?></h1><p class="lede"><?= e($cat['intro']) ?></p></div></section>
<section class="section-tight"><div class="wrap">
  <?php foreach ($types as $type => $items): ?>
  <h2 style="font-size:1.4rem;margin:28px 0 14px;text-transform:capitalize"><?= e(str_replace('-', ' ', $type)) ?>s</h2>
  <ul class="card-list">
    <?php foreach ($items as $g): ?><li><a class="card-link" href="<?= e(url('guides/' . $g['slug'])) ?>"><b><?= e($g['title']) ?></b><span class="muted" style="font-size:.92rem"><?= e($g['angle']) ?></span></a></li><?php endforeach; ?>
  </ul>
  <?php endforeach; ?>
  <p style="margin-top:32px"><a class="arrow-link" href="<?= e(url('guides')) ?>">All guide categories</a></p>
</div></section>
<?php
    page_foot();
}
