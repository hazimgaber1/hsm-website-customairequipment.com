#!/bin/sh
# Writes the mail relay settings from the container's environment, then starts Apache.
set -e
if [ -n "${SMTP_HOST:-}" ] && [ -n "${SMTP_USER:-}" ]; then
  cat > /etc/msmtprc <<CONF
defaults
auth on
tls on
tls_starttls on
tls_trust_file /etc/ssl/certs/ca-certificates.crt
syslog off
logfile /dev/stderr

account ses
host ${SMTP_HOST}
port ${SMTP_PORT:-587}
user ${SMTP_USER}
password ${SMTP_PASS}
from noreply@${SITE_DOMAIN:-localhost}
allow_from_override off
set_from_header auto

account default : ses
CONF
  chown root:www-data /etc/msmtprc
  chmod 640 /etc/msmtprc
fi
exec apache2-foreground
