# customairequipment.com: PHP + Apache on port 80, behind the hsm-sites AWS load balancer.
# Built and deployed by .github/workflows/deploy.yml on every push to main.
FROM php:8.3-apache

# msmtp delivers PHP mail() through Amazon SES (login comes from Secrets Manager).
RUN apt-get update \
 && apt-get install -y --no-install-recommends msmtp \
 && rm -rf /var/lib/apt/lists/* \
 && docker-php-ext-install -j"$(nproc)" opcache pdo_mysql mysqli \
 && a2enmod expires headers rewrite remoteip \
 && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY docker/php.ini /usr/local/etc/php/conf.d/zz-site.ini
COPY docker/apache.conf /etc/apache2/conf-enabled/zz-site.conf
COPY docker/start.sh /usr/local/bin/start-site
COPY --chown=www-data:www-data . /var/www/html/
RUN chmod +x /usr/local/bin/start-site \
 && mkdir -p /var/data/customairequipment \
 && chown www-data:www-data /var/data/customairequipment

# Quotes, admin accounts and settings (SQLite + settings.json) live here,
# outside the web root. On AWS this folder is an EFS volume, so it survives deploys.
ENV SITE_DATA_DIR=/var/data/customairequipment

EXPOSE 80
HEALTHCHECK --interval=30s --timeout=5s --retries=3 CMD curl -fsS -o /dev/null http://localhost/ || exit 1
CMD ["start-site"]
