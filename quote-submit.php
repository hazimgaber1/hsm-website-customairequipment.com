<?php
// Saves a quote request (with any 3D design) and emails it to the quote inbox set in the admin panel.
require __DIR__ . '/inc/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect(url('contact'));
}
$fields = ['name' => 120, 'company' => 160, 'email' => 160, 'phone' => 40, 'role' => 60, 'project_type' => 80,
           'location' => 120, 'cfm' => 10, 'timeline' => 60, 'details' => 6000, 'source_page' => 60];
$in = [];
foreach ($fields as $k => $max) {
    $in[$k] = post($k, $max);
}
$design = post('design_json', 20000);
if ($design !== '' && json_decode($design) === null) {
    $design = '';
}

// Honeypot: bots fill the hidden "website" field. Pretend success.
if (post('website') !== '') {
    redirect(url('thank-you'));
}
$error = '';
if (!csrf_ok()) {
    $error = 'Your session expired. Please send the form again.';
} elseif ($in['name'] === '') {
    $error = 'Please enter your name.';
} elseif (!filter_var($in['email'], FILTER_VALIDATE_EMAIL)) {
    $error = 'Please enter a valid email address.';
} elseif (($_SESSION['last_quote'] ?? 0) > time() - 20) {
    $error = 'Please wait a few seconds before sending another request.';
}
if ($error) {
    $_SESSION['quote_error'] = $error;
    $_SESSION['quote_old'] = $in;
    redirect(url('contact'));
}

$stmt = db()->prepare('INSERT INTO quotes (created_at, name, company, email, phone, role, project_type, location, cfm, timeline, details, design_json, source_page, ip)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->execute([date('c'), $in['name'], $in['company'], $in['email'], $in['phone'], $in['role'], $in['project_type'],
    $in['location'], (int) $in['cfm'] ?: null, $in['timeline'], $in['details'], $design ?: null, $in['source_page'], $_SERVER['REMOTE_ADDR'] ?? '']);
$id = (int) db()->lastInsertId();
$_SESSION['last_quote'] = time();

$lines = ["New quote request #$id", ''];
foreach ($in as $k => $val) {
    if ($val !== '' && $k !== 'source_page') {
        $lines[] = ucfirst(str_replace('_', ' ', $k)) . ': ' . $val;
    }
}
if ($design) {
    $d = json_decode($design, true);
    $lines[] = '';
    $lines[] = '3D design: ' . ($d['summary'] ?? '');
    foreach ($d['sections'] ?? [] as $i => $s) {
        $lines[] = '  ' . ($i + 1) . '. ' . $s;
    }
}
$lines[] = '';
$lines[] = 'Open in the admin panel: ' . abs_url('admin/quote?id=' . $id);
send_mail(setting('quote_email'), 'Quote request #' . $id . ' from ' . $in['name'], implode("\n", $lines), $in['email']);
send_mail($in['email'], 'We received your request', "Hi {$in['name']},\n\nThanks for contacting " . setting('company_name') . ". An application engineer will call you within one business day.\n\nYour reference number is #$id.\n\n" . setting('company_name') . "\n" . setting('phone'));

redirect(url('thank-you'));
