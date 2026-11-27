<?php
// Page chrome: <head>, header, navigation, footer. Every public page calls page_head() and page_foot().

/**
 * @param array $m title, description, path (canonical, site-relative), image (photo key),
 *                 schema (extra JSON-LD array), crumbs ([[label, path], ...]), body_class
 */
function page_head(array $m): void
{
    $company = setting('company_name');
    $title = isset($m['title']) && $m['title'] !== '' ? $m['title'] . ' | ' . $company : $company . ' | ' . setting('parent_line');
    $desc = $m['description'] ?? setting('tagline');
    $path = $m['path'] ?? '';
    $canonical = abs_url($path);
    $image = isset($m['image']) && isset(PHOTOS[$m['image']]) ? photo_src($m['image']) : photo_src('factory-ahu');
    if (str_starts_with($image, '/')) {
        $image = abs_url($image);
    }
    $GLOBALS['PAGE_PATH'] = $path;

    $schema = [[
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $company,
        'url' => setting('site_url'),
        'telephone' => setting('phone'),
        'email' => setting('email'),
        'parentOrganization' => ['@type' => 'Organization', 'name' => 'HSM'],
    ]];
    if (!empty($m['crumbs'])) {
        $items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => abs_url('')]];
        foreach ($m['crumbs'] as $i => [$label, $p]) {
            $items[] = ['@type' => 'ListItem', 'position' => $i + 2, 'name' => $label, 'item' => abs_url($p)];
        }
        $schema[] = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $items];
    }
    foreach ($m['schema'] ?? [] as $s) {
        $schema[] = $s;
    }
    ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JM96FQ7BFH"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-JM96FQ7BFH');</script>
<title><?= e($title) ?></title>
<meta name="description" content="<?= e($desc) ?>">
<?php if (setting('google_site_verification') !== ''): ?><meta name="google-site-verification" content="<?= e(preg_replace('~^.*content="([^"]+)".*$~', '$1', setting('google_site_verification'))) ?>">
<?php endif; ?>
<?php if (!empty($m['noindex'])): ?><meta name="robots" content="noindex">
<?php endif; ?>
<link rel="canonical" href="<?= e($canonical) ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= e($company) ?>">
<meta property="og:title" content="<?= e($title) ?>">
<meta property="og:description" content="<?= e($desc) ?>">
<meta property="og:url" content="<?= e($canonical) ?>">
<meta property="og:image" content="<?= e($image) ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="theme-color" content="#0E2B1D">
<link rel="icon" href="<?= e(url('assets/img/favicon.svg')) ?>" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,400..900&family=JetBrains+Mono:wght@400;600&display=swap">
<link rel="stylesheet" href="<?= e(asset('css/site.css')) ?>">
<?php foreach ($schema as $s): ?>
<script type="application/ld+json"><?= json_encode($s, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php endforeach; ?>
<script src="<?= e(ERP_BASE) ?>/track.js" data-site="<?= e(ERP_SITE_KEY) ?>" async></script>
</head>
<body class="<?= e($m['body_class'] ?? '') ?>">
<a class="skip" href="#main">Skip to content</a>
<?php if (setting('announcement') !== ''): ?>
<div class="announce"><?= e(setting('announcement')) ?></div>
<?php endif; ?>
<header class="site-head">
  <div class="wrap head-row">
    <a class="brand" href="<?= e(url('')) ?>" aria-label="<?= e($company) ?>, home">
      <?= brand_mark() ?>
      <span class="brand-text"><span class="brand-name"><?= e($company) ?></span><span class="brand-sub"><?= e(setting('parent_line')) ?></span></span>
    </a>
    <button class="menu-btn" type="button" aria-expanded="false" aria-controls="nav"><span class="menu-bars" aria-hidden="true"></span><span class="menu-label">Menu</span></button>
    <nav class="nav" id="nav" aria-label="Main">
      <ul class="nav-list">
        <li class="has-sub"><button type="button" class="nav-top" aria-expanded="false">Products</button>
          <div class="sub"><ul>
            <?php foreach (PRODUCTS as $slug => $p): ?>
            <li><a href="<?= e(url('products/' . $slug)) ?>"><b><?= e($p['short']) ?></b><span><?= e($p['code']) ?></span></a></li>
            <?php endforeach; ?>
            <li><a href="<?= e(url('products/quick-ship')) ?>"><b>Quick-ship models</b><span>Ships fast</span></a></li>
            <li><a href="<?= e(url('design')) ?>"><b>Design your unit in 3D</b><span>Configurator</span></a></li>
            <li><a href="<?= e(url('built-to-order')) ?>"><b>Built to order</b><span>How we build</span></a></li>
          </ul></div>
        </li>
        <li class="has-sub"><button type="button" class="nav-top" aria-expanded="false">Markets</button>
          <div class="sub"><ul>
            <?php foreach (MARKETS as $slug => $mk): ?>
            <li><a href="<?= e(url('markets/' . $slug)) ?>"><b><?= e($mk[0]) ?></b></a></li>
            <?php endforeach; ?>
          </ul></div>
        </li>
        <li class="has-sub"><button type="button" class="nav-top" aria-expanded="false">Resources</button>
          <div class="sub"><ul>
            <li><a href="<?= e(url('guides')) ?>"><b>Engineering guides</b><span>Library</span></a></li>
            <li><a href="<?= e(url('resources')) ?>"><b>Literature and PDFs</b><span>Downloads</span></a></li>
            <li><a href="<?= e(url('savings-calculator')) ?>"><b>Fan array savings calculator</b><span>Tool</span></a></li>
            <li><a href="<?= e(url('factory-testing')) ?>"><b>Factory and testing</b></a></li>
            <li><a href="<?= e(url('gallery')) ?>"><b>Photo gallery</b></a></li>
            <li><a href="<?= e(url('faq')) ?>"><b>FAQ</b></a></li>
          </ul></div>
        </li>
        <li class="has-sub"><button type="button" class="nav-top" aria-expanded="false">Company</button>
          <div class="sub"><ul>
            <li><a href="<?= e(url('about')) ?>"><b>About us</b></a></li>
            <li><a href="<?= e(url('service-parts')) ?>"><b>Service and parts</b></a></li>
            <li><a href="<?= e(url('find-a-rep')) ?>"><b>Find a rep</b></a></li>
            <li><a href="<?= e(url('warranty')) ?>"><b>Warranty</b></a></li>
            <li><a href="<?= e(url('careers')) ?>"><b>Careers</b></a></li>
            <li><a href="<?= e(url('contact')) ?>"><b>Contact</b></a></li>
          </ul></div>
        </li>
      </ul>
      <div class="nav-cta">
        <a class="nav-phone" href="<?= e(tel_href(setting('phone'))) ?>"><?= e(setting('phone')) ?></a>
        <a class="btn btn-ghost" href="<?= e(url('design')) ?>">Design in 3D</a>
        <a class="btn btn-primary" href="<?= e(url('contact')) ?>">Get a quote</a>
      </div>
    </nav>
  </div>
</header>
<main id="main">
<?php
    if (!empty($m['crumbs'])) {
        echo '<nav class="crumbs wrap" aria-label="Breadcrumb"><ol><li><a href="' . e(url('')) . '">Home</a></li>';
        $last = count($m['crumbs']) - 1;
        foreach ($m['crumbs'] as $i => [$label, $p]) {
            echo $i === $last ? '<li aria-current="page">' . e($label) . '</li>' : '<li><a href="' . e(url($p)) . '">' . e($label) . '</a></li>';
        }
        echo '</ol></nav>';
    }
}

function brand_mark(): string
{
    return '<svg class="brand-mark" viewBox="0 0 40 40" aria-hidden="true"><rect width="40" height="40" rx="6" class="bm-tile"/>'
        . '<circle cx="20" cy="20" r="12.5" class="bm-ring"/>'
        . '<g class="bm-blades">'
        . implode('', array_map(fn($a) => '<path d="M20 20 C23 15 27 14 30 15 C27 18 24 20 20 20Z" transform="rotate(' . $a . ' 20 20)"/>', [0, 72, 144, 216, 288]))
        . '</g><circle cx="20" cy="20" r="3" class="bm-hub"/></svg>';
}

function cta_band(string $heading = 'Ready to build the unit your project actually needs?', string $text = 'Send a schedule, a drawing or a photo of the unit you are replacing. An application engineer calls back within one business day.'): void
{
    ?>
<section class="cta-band">
  <div class="wrap cta-inner">
    <div>
      <h2><?= e($heading) ?></h2>
      <p><?= e($text) ?></p>
    </div>
    <div class="cta-actions">
      <a class="btn btn-primary btn-lg" href="<?= e(url('contact')) ?>">Get a quote</a>
      <a class="btn btn-light btn-lg" href="<?= e(url('design')) ?>">Design in 3D</a>
    </div>
  </div>
</section>
<?php
}

function page_foot(bool $cta = true): void
{
    if ($cta) {
        cta_band();
    }
    $company = setting('company_name');
    ?>
</main>
<footer class="site-foot">
  <div class="wrap foot-grid">
    <div class="foot-brand">
      <a class="brand brand-light" href="<?= e(url('')) ?>"><?= brand_mark() ?><span class="brand-text"><span class="brand-name"><?= e($company) ?></span><span class="brand-sub"><?= e(setting('parent_line')) ?></span></span></a>
      <p class="foot-tag"><?= e(setting('tagline')) ?></p>
      <form class="newsletter" method="post" action="<?= e(url('newsletter-submit')) ?>">
        <label for="nl-email">Engineering notes, once a month</label>
        <div class="nl-row">
          <input id="nl-email" name="email" type="email" required autocomplete="email" placeholder="you@company.com">
          <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
          <?= csrf_field() ?>
          <button class="btn btn-primary" type="submit">Subscribe</button>
        </div>
      </form>
    </div>
    <div class="foot-col">
      <h3>Products</h3>
      <ul>
        <?php foreach (PRODUCTS as $slug => $p): ?><li><a href="<?= e(url('products/' . $slug)) ?>"><?= e($p['short']) ?></a></li><?php endforeach; ?><li><a href="<?= e(url('products/quick-ship')) ?>">Quick-ship models</a></li>
        <li><a href="<?= e(url('design')) ?>">3D unit designer</a></li>
      </ul>
    </div>
    <div class="foot-col">
      <h3>Markets</h3>
      <ul>
        <?php foreach (MARKETS as $slug => $mk): ?><li><a href="<?= e(url('markets/' . $slug)) ?>"><?= e($mk[0]) ?></a></li><?php endforeach; ?>
      </ul>
    </div>
    <div class="foot-col">
      <h3>Resources</h3>
      <ul>
        <li><a href="<?= e(url('guides')) ?>">Engineering guides</a></li>
        <li><a href="<?= e(url('resources')) ?>">Literature and PDFs</a></li>
        <li><a href="<?= e(url('savings-calculator')) ?>">Savings calculator</a></li>
        <li><a href="<?= e(url('factory-testing')) ?>">Factory and testing</a></li>
        <li><a href="<?= e(url('gallery')) ?>">Photo gallery</a></li>
        <li><a href="<?= e(url('faq')) ?>">FAQ</a></li>
      </ul>
    </div>
    <div class="foot-col">
      <h3>Company</h3>
      <ul>
        <li><a href="<?= e(url('about')) ?>">About us</a></li>
        <li><a href="<?= e(url('service-parts')) ?>">Service and parts</a></li>
        <li><a href="<?= e(url('find-a-rep')) ?>">Find a rep</a></li>
        <li><a href="<?= e(url('warranty')) ?>">Warranty</a></li>
        <li><a href="<?= e(url('careers')) ?>">Careers</a></li>
        <li><a href="<?= e(url('contact')) ?>">Contact</a></li>
      </ul>
      <p class="foot-contact"><a href="<?= e(tel_href(setting('phone'))) ?>"><?= e(setting('phone')) ?></a><br><a href="mailto:<?= e(setting('email')) ?>"><?= e(setting('email')) ?></a></p>
    </div>
  </div>
  <div class="wrap foot-legal">
    <p>© <?= date('Y') ?> <?= e($company) ?>, <?= e(lcfirst(setting('parent_line'))) ?>. Specifications are subject to change without notice.</p>
    <ul>
      <li><a href="<?= e(url('privacy')) ?>">Privacy</a></li>
      <li><a href="<?= e(url('terms')) ?>">Terms of sale</a></li>
      <li><a href="<?= e(url('accessibility')) ?>">Accessibility</a></li>
      <li><a href="<?= e(url('sitemap.xml')) ?>">Sitemap</a></li>
    </ul>
  </div>
</footer>
<script src="<?= e(asset('js/site.js')) ?>" defer></script>
</body>
</html>
<?php
}

/** Numbered section kicker in the style "001 / the problem ↴". */
function kicker(string $num, string $text): string
{
    return '<p class="kicker"><span class="k-num">' . e($num) . '</span><span class="k-txt">' . e($text) . ' <span aria-hidden="true">↴</span></span></p>';
}
