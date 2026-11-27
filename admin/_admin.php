<?php
// Shared admin setup: authentication and page chrome.
require_once dirname(__DIR__) . '/inc/bootstrap.php';
header('X-Robots-Tag: noindex, nofollow');

const QUOTE_STATUSES = ['new' => 'New', 'contacted' => 'Contacted', 'quoted' => 'Quoted', 'won' => 'Won', 'lost' => 'Lost', 'spam' => 'Spam'];

function admin_user(): ?array
{
    if (empty($_SESSION['admin_id'])) return null;
    $s = db()->prepare('SELECT id, username FROM admins WHERE id = ?');
    $s->execute([$_SESSION['admin_id']]);
    return $s->fetch() ?: null;
}

function require_admin(): array
{
    $u = admin_user();
    if (!$u) redirect(url('admin/login'));
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !csrf_ok()) {
        http_response_code(400);
        exit('Your session expired. Go back and try again.');
    }
    return $u;
}

function admin_head(string $title, array $u): void
{
    $nav = ['admin' => 'Dashboard', 'admin/quotes' => 'Quote requests', 'admin/subscribers' => 'Subscribers', 'admin/search' => 'Search Console', 'admin/settings' => 'Company details', 'admin/account' => 'Account'];
    $here = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?? '', '/');
    ?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="robots" content="noindex">
<title><?= e($title) ?> · Admin · <?= e(setting('company_name')) ?></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,400..900&family=JetBrains+Mono:wght@400;600&display=swap">
<link rel="stylesheet" href="<?= e(asset('css/site.css')) ?>"><link rel="stylesheet" href="<?= e(asset('css/admin.css')) ?>"></head>
<body class="admin">
<header class="a-head"><div class="a-row">
  <a class="brand brand-light" href="<?= e(url('admin')) ?>"><?= brand_mark() ?><span class="brand-text"><span class="brand-name">Admin</span><span class="brand-sub"><?= e(setting('company_name')) ?></span></span></a>
  <nav class="a-nav"><?php foreach ($nav as $p => $l): ?><a href="<?= e(url($p)) ?>"<?= $here === $p ? ' aria-current="page"' : '' ?>><?= e($l) ?></a><?php endforeach; ?></nav>
  <div class="a-user"><a href="<?= e(url('')) ?>" target="_blank" rel="noopener">View site</a> · <?= e($u['username']) ?> · <form method="post" action="<?= e(url('admin/logout')) ?>" style="display:inline"><?= csrf_field() ?><button class="a-link">Sign out</button></form></div>
</div></header>
<main class="a-main"><h1><?= e($title) ?></h1>
<?php
    if (!empty($_SESSION['flash'])) {
        echo '<p class="alert" role="status">' . e($_SESSION['flash']) . '</p>';
        unset($_SESSION['flash']);
    }
}

function admin_foot(): void
{
    echo '</main></body></html>';
}

function flash(string $msg): void
{
    $_SESSION['flash'] = $msg;
}

function status_badge(string $s): string
{
    return '<span class="badge b-' . e($s) . '">' . e(QUOTE_STATUSES[$s] ?? $s) . '</span>';
}
