<?php
require __DIR__ . '/_admin.php';

$hasAdmin = (int) db()->query('SELECT COUNT(*) FROM admins')->fetchColumn() > 0;
$keyFile = DATA_DIR . '/setup-key.txt';
if (!$hasAdmin && !is_file($keyFile)) {
    file_put_contents($keyFile, bin2hex(random_bytes(12)) . "\n");
}
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!csrf_ok()) {
        $error = 'Your session expired. Try again.';
    } elseif (!$hasAdmin) {
        // First run: create the first admin, guarded by the key written to data/setup-key.txt.
        $key = trim((string) @file_get_contents($keyFile));
        $user = post('username', 60);
        $pass = (string) ($_POST['password'] ?? '');
        if (!hash_equals($key, post('setup_key', 64))) {
            $error = 'That setup key does not match data/setup-key.txt.';
        } elseif (!preg_match('/^[A-Za-z0-9_.@-]{3,60}$/', $user)) {
            $error = 'Choose a username of 3 or more letters or numbers.';
        } elseif (strlen($pass) < 10) {
            $error = 'Use a password of at least 10 characters.';
        } else {
            db()->prepare('INSERT INTO admins (username, password_hash, created_at) VALUES (?, ?, ?)')->execute([$user, password_hash($pass, PASSWORD_DEFAULT), date('c')]);
            @unlink($keyFile);
            session_regenerate_id(true);
            $_SESSION['admin_id'] = (int) db()->lastInsertId();
            redirect(url('admin'));
        }
    } else {
        $fails = $_SESSION['login_fails'] ?? 0;
        if ($fails >= 5 && ($_SESSION['login_last'] ?? 0) > time() - 300) {
            $error = 'Too many attempts. Wait five minutes and try again.';
        } else {
            $s = db()->prepare('SELECT * FROM admins WHERE username = ?');
            $s->execute([post('username', 60)]);
            $a = $s->fetch();
            if ($a && password_verify((string) ($_POST['password'] ?? ''), $a['password_hash'])) {
                session_regenerate_id(true);
                $_SESSION['admin_id'] = (int) $a['id'];
                unset($_SESSION['login_fails']);
                redirect(url('admin'));
            }
            usleep(600000);
            $_SESSION['login_fails'] = $fails + 1;
            $_SESSION['login_last'] = time();
            $error = 'Wrong username or password.';
        }
    }
}
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="robots" content="noindex">
<title>Sign in · <?= e(setting('company_name')) ?></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,400..900&family=JetBrains+Mono:wght@400;600&display=swap">
<link rel="stylesheet" href="<?= e(asset('css/site.css')) ?>"><link rel="stylesheet" href="<?= e(asset('css/admin.css')) ?>"></head>
<body class="admin a-login">
<form class="form-panel form a-login-box" method="post">
  <a class="brand" href="<?= e(url('')) ?>"><?= brand_mark() ?><span class="brand-text"><span class="brand-name"><?= e(setting('company_name')) ?></span><span class="brand-sub">Admin</span></span></a>
  <h1><?= $hasAdmin ? 'Sign in' : 'Create the first admin' ?></h1>
  <?php if (!$hasAdmin): ?><p class="muted">Open <code>data/setup-key.txt</code> on the server (with your host's file manager or FTP) and paste the key below. The file is deleted once the account exists.</p><?php endif; ?>
  <?php if ($error): ?><p class="alert alert-error" role="alert"><?= e($error) ?></p><?php endif; ?>
  <?= csrf_field() ?>
  <?php if (!$hasAdmin): ?><div class="field"><label for="k">Setup key</label><input id="k" name="setup_key" required autocomplete="off"></div><?php endif; ?>
  <div class="field"><label for="u">Username</label><input id="u" name="username" required autocomplete="username"></div>
  <div class="field"><label for="p">Password</label><input id="p" name="password" type="password" required autocomplete="<?= $hasAdmin ? 'current-password' : 'new-password' ?>"></div>
  <button class="btn btn-primary btn-lg"><?= $hasAdmin ? 'Sign in' : 'Create account' ?></button>
</form>
</body></html>
