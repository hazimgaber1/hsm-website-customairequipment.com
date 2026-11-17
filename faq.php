<?php
require __DIR__ . '/inc/bootstrap.php';
$faq = [
  ['What makes an air handler "custom"?', 'It is designed for one project: its dimensions, arrangement, components and performance come from your requirements rather than a fixed catalog size.'],
  ['What airflow range do you build?', 'Custom air handlers from about 2,000 to 150,000 CFM per unit, and industrial fans to 250,000 CFM.'],
  ['How do I start a quote?', 'Send an equipment schedule, drawings or photos through the quote form, or design a unit in 3D and submit it. An application engineer calls back within one business day.'],
  ['Can you replace a unit in a room with a small door?', 'Yes. Knockdown units ship as panels and modules sized to your route and are rebuilt and leak-tested in place.'],
  ['Do you replace fans inside existing air handlers?', 'Yes. Fan array conversions replace a single belt-driven fan with several direct-drive fans inside the existing casing.'],
  ['Can I witness the factory test?', 'Yes. Ask when you place the order and we will schedule it with you.'],
  ['What standards do your units meet?', 'Units are built to UL 1995 / CSA C22.2 No. 236 and tested to the AHRI and AMCA standards listed on each submittal.'],
  ['Do you supply controls?', 'We can provide factory-mounted and wired controls, or provisions for your controls contractor.'],
  ['Do you sell in Canada and the US?', 'Yes. Tell us the project location on the quote form.'],
  ['Where can I download data sheets?', 'On the literature page. No form is required.'],
];
page_head(['title' => 'Frequently asked questions', 'description' => 'Answers to common questions about custom air handlers, fan arrays, knockdown units, testing and quoting.', 'path' => 'faq', 'crumbs' => [['FAQ', 'faq']],
  'schema' => [['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faq)]]]);
?>
<section class="page-hero"><div class="wrap"><?= kicker('faq', 'questions') ?><h1>Frequently asked questions.</h1></div></section>
<section class="section-tight"><div class="wrap faq" style="max-width:900px">
<?php foreach ($faq as [$q, $a]): ?><details><summary><?= e($q) ?></summary><p><?= e($a) ?></p></details><?php endforeach; ?>
</div></section>
<?php page_foot(); ?>
