# customairequipment.com

Website for Custom Air Equipment, an HSM Company: custom air handling units, fan arrays, industrial fans and knockdown retrofit units.

Plain PHP with no framework and no build step. Every page is its own `.php` file and is served at a clean URL (`/products/fan-arrays`, `/guides/fan-laws-calculation`).

## What's in it

- **Pages:** home, 4 product pages, 8 market pages, the built-to-order, factory testing, FAQ, resources, savings calculator, find a rep, about, careers, service, warranty and legal pages.
- **Engineering guides:** `guides/` holds about 500 guides in 20 categories. Each guide is one file that calls `guide_start()` and `guide_end()` from `inc/guide.php`. Titles, descriptions and keywords come from `data/guide-topics.json`. `php tools/check-guides.php` checks every guide for length, structure and repeated paragraphs.
- **3D designer:** `design.php` with `assets/js/designer.js` (three.js, vendored in `assets/vendor/three`). Visitors build a unit and send it straight into the quote form.
- **Quote form:** `contact.php` posts to `quote-submit.php`, which saves the request (with any 3D design) and emails it to the quote address set in the admin panel.
- **Admin panel:** `/admin`, for quotes (status, notes, CSV export), newsletter subscribers, site settings (phone, emails, address, announcement bar) and admin accounts.
- **PDFs:** `assets/pdf/` holds the product overview, four data sheets, a guide specification and a submittal checklist. Rebuild them with `python3 tools/make-pdfs.py` (needs `reportlab`) after changing `inc/catalog.php`.
- **SEO:** a title, description, canonical URL and Open Graph tags on every page; JSON-LD for the organization, breadcrumbs, products, articles and FAQs; `/sitemap.xml` built from the page files; `robots.txt`.

## Hosting

- Apache with `mod_rewrite` and `AllowOverride All` (the `.htaccess` file handles clean URLs, HTTPS, and blocks `data/`, `inc/` and `tools/`). On nginx, port those rules.
- PHP 8.1 or newer with `pdo_sqlite`.
- The `data/` folder must be writable by PHP. The SQLite database (`data/site.sqlite`) and settings (`data/settings.json`) are created there on first use and are not in git.
- PHP `mail()` must be able to send (a local sendmail or an SMTP relay), or quote emails won't go out. Quotes are still saved and visible in the admin panel either way.
- GitHub Pages can't run PHP, so it can't host this site.

To try it locally: `php -S 127.0.0.1:8080 tools/router.php`

## First admin login

1. Open `/admin/login` once. The site writes a one-time setup key to `data/setup-key.txt`.
2. Read that key on the server, enter it with a username and password (12+ characters) to create the first admin.
3. Delete `data/setup-key.txt`. Add more admins under **Account**.

## Photos

The photos were generated for this site and are currently loaded from the image generator's CDN. To serve them from the site instead, run `php tools/fetch-images.php` from a machine with internet access and commit `assets/img/*.png`. The site uses local files automatically when they exist.

## Static preview

`php tools/export-static.php OUT_DIR` renders every page to `.html` for a quick preview without PHP. Forms and the admin panel don't work in the export.

## Still to confirm

- Street address and office hours (set them in the admin panel under Settings).
- Warranty, terms and privacy wording, which are reasonable drafts but need legal review.
- Product ranges (airflow, pressure, temperature, casing leakage) in `inc/catalog.php` and the PDFs.
- Social links (LinkedIn, YouTube) in Settings.
