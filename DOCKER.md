# Docker environment (prod-like)

This setup starts a local WordPress stack with:

- Apache + `mod_php` (prefork MPM)
- PHP `8.3.20` (`php:8.3.20-apache-bookworm`)
- MariaDB `10.11`
- Adminer for DB access

## Start

1. Copy env file:

```powershell
Copy-Item .env.example .env
```

2. Build and run:

```powershell
docker compose up -d --build
```

3. Open:

- Site: `http://localhost:8080`
- Adminer: `http://localhost:8081`

## WordPress config

If `wp-config.php` is missing, create it from `wp-config-sample.php` and set:

- DB host: `db`
- DB name/user/password from `.env`

## Validation inside container

```powershell
docker compose exec web php -v
docker compose exec web php -m
docker compose exec web apache2ctl -M
docker compose exec web php -i | findstr /I "Configure Command"
```

## Notes about differences from prod

The provided prod configuration contains modules/options that are not available or were removed in modern PHP 8.3 builds (for example `wddx`, legacy `mssql`, core `xmlrpc`, some old GD/T1Lib options).

Also, `enchant` is not available as a bundled `docker-php-ext-install` target in the official PHP 8.3 image source tree, so it is intentionally not enabled in this Dockerfile. `sodium`, `sqlite3`, and `pdo_sqlite` are already present in the base image and therefore are not rebuilt.

Apache modules like `mod_passenger`, `mod_perl`, `mod_wsgi`, `mpm_itk`, `mod_log_rusage`, and `mod_maxminddb` are not included by default in this image. They can be added later if you really need exact parity for those features.
