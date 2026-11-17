<?php
require __DIR__ . '/_admin.php';
$u = require_admin();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (($_POST['action'] ?? '') === 'password') {
        $s = db()->prepare('SELECT password_hash FROM admins WHERE id = ?'); $s->execute([$u['id']]);
        $new = (string) ($_POST['new'] ?? '');
        if (!password_verify((string) ($_POST['current'] ?? ''), (string) $s->fetchColumn())) flash('Your current password was wrong.');
        elseif (strlen($new) < 10) flash('Use a new password of at least 10 characters.');
        else { db()->prepare('UPDATE admins SET password_hash = ? WHERE id = ?')->execute([password_hash($new, PASSWORD_DEFAULT), $u['id']]); flash('Password changed.'); }
    } elseif (($_POST['action'] ?? '') === 'add') {
        $user = post('username', 60); $pass = (string) ($_POST['password'] ?? '');
        if (!preg_match('/^[A-Za-z0-9_.@-]{3,60}$/', $user) || strlen($pass) < 10) flash('Usernames need 3 or more letters or numbers, and passwords at least 10 characters.');
        else {
            try { db()->prepare('INSERT INTO admins (username, password_hash, created_at) VALUES (?, ?, ?)')->execute([$user, password_hash($pass, PASSWORD_DEFAULT), date('c')]); flash("Added $user."); }
            catch (PDOException $e) { flash('That username is taken.'); }
        }
    } elseif (($_POST['action'] ?? '') === 'remove' && (int) $_POST['id'] !== (int) $u['id']) {
        db()->prepare('DELETE FROM admins WHERE id = ?')->execute([(int) $_POST['id']]);
        flash('Admin removed.');
    }
    redirect(url('admin/account'));
}
$admins = db()->query('SELECT id, username, created_at FROM admins ORDER BY id')->fetchAll();
admin_head('Account', $u);
?>
<div class="a-grid">
  <form class="form-panel form" method="post"><?= csrf_field() ?><input type="hidden" name="action" value="password">
    <h2>Change your password</h2>
    <div class="field"><label for="c">Current password</label><input id="c" name="current" type="password" required autocomplete="current-password"></div>
    <div class="field"><label for="n">New password</label><input id="n" name="new" type="password" required autocomplete="new-password"></div>
    <button class="btn btn-primary">Change password</button>
  </form>
  <div class="form-panel form">
    <h2>Admins</h2>
    <ul class="a-list"><?php foreach ($admins as $a): ?><li><?= e($a['username']) ?><?php if ((int) $a['id'] !== (int) $u['id']): ?>
      <form method="post" style="display:inline"><?= csrf_field() ?><input type="hidden" name="action" value="remove"><button class="a-link" name="id" value="<?= (int) $a['id'] ?>" onclick="return confirm('Remove this admin?')">Remove</button></form><?php else: ?> <span class="muted">(you)</span><?php endif; ?></li><?php endforeach; ?></ul>
    <form class="form" method="post"><?= csrf_field() ?><input type="hidden" name="action" value="add">
      <div class="field"><label for="au">New admin username</label><input id="au" name="username" required></div>
      <div class="field"><label for="ap">Password</label><input id="ap" name="password" type="password" required autocomplete="new-password"></div>
      <button class="btn btn-ghost">Add admin</button>
    </form>
  </div>
</div>
<?php admin_foot(); ?>
