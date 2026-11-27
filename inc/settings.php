<?php
// Company details. Defaults live here; the admin panel saves overrides to data/settings.json.

const SETTINGS_DEFAULTS = [
    'company_name'   => 'Custom Air Equipment',
    'google_site_verification' => '',
    'parent_line'    => 'An HSM Company',
    'site_url'       => 'https://customairequipment.com',
    'phone'          => '1-800-716-8955',
    'email'          => 'info@customairequipment.com',
    'quote_email'    => 'info@customairequipment.com',
    'mail_from'      => 'website@customairequipment.com',
    'address'        => '',
    'hours'          => 'Monday to Friday, 7:00 to 17:00',
    'tagline'        => 'Custom air handlers and fans, built to your drawing.',
    'linkedin_url'   => '',
    'youtube_url'    => '',
    'announcement'   => '',
];

function settings(): array
{
    static $s = null;
    if ($s === null) {
        $s = SETTINGS_DEFAULTS;
        $file = DATA_DIR . '/settings.json';
        if (is_file($file)) {
            $saved = json_decode((string) file_get_contents($file), true);
            if (is_array($saved)) {
                $s = array_merge($s, array_intersect_key($saved, SETTINGS_DEFAULTS));
            }
        }
    }
    return $s;
}

function setting(string $key): string
{
    return (string) (settings()[$key] ?? '');
}

function save_settings(array $values): void
{
    $clean = [];
    foreach (SETTINGS_DEFAULTS as $k => $_) {
        $clean[$k] = trim((string) ($values[$k] ?? ''));
    }
    file_put_contents(DATA_DIR . '/settings.json', json_encode($clean, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES), LOCK_EX);
}
