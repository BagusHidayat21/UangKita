---
name: laravel-vercel-supabase
description: Production deployment workflow for Laravel 10+ on Vercel Serverless Functions paired with Supabase PostgreSQL.
---

# Laravel 10+ Vercel Deployment & Supabase Integration Standard

This guide documents the battle-tested, production-ready standard for deploying Laravel applications to Vercel Serverless Functions with Supabase PostgreSQL database integration.

---

## 1. Vercel Serverless Setup & Entry Point

### `api/index.php`
Place this entry point in the root `api/` directory to forward serverless requests to Laravel's `public/index.php` while suppressing PHP deprecation notices from leaking into HTML output:

```php
<?php

// Suppress PHP deprecation notices on serverless runtime output
ini_set('display_errors', '0');
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

// Forward Vercel Serverless Function entry point to Laravel's public/index.php
require __DIR__ . '/../public/index.php';
```

### `vercel.json`
Configure `vercel.json` in the root directory to handle static build assets, serverless functions with `vercel-php@0.9.0`, and redirect read-only cache files to `/tmp`:

```json
{
  "version": 2,
  "outputDirectory": "public",
  "functions": {
    "api/index.php": {
      "runtime": "vercel-php@0.9.0",
      "regions": ["hnd1"]
    }
  },
  "routes": [
    {
      "src": "/build/(.*)",
      "dest": "/public/build/$1"
    },
    {
      "src": "/asset/(.*)",
      "dest": "/public/asset/$1"
    },
    {
      "src": "/favicon.ico",
      "dest": "/public/favicon.ico"
    },
    {
      "src": "/robots.txt",
      "dest": "/public/robots.txt"
    },
    {
      "src": "/(.*)",
      "dest": "/api/index.php"
    }
  ],
  "env": {
    "APP_ENV": "production",
    "APP_DEBUG": "false",
    "APP_CONFIG_CACHE": "/tmp/config.php",
    "APP_EVENTS_CACHE": "/tmp/events.php",
    "APP_PACKAGES_CACHE": "/tmp/packages.php",
    "APP_ROUTES_CACHE": "/tmp/routes.php",
    "APP_SERVICES_CACHE": "/tmp/services.php",
    "VIEW_COMPILED_PATH": "/tmp",
    "CACHE_DRIVER": "array",
    "LOG_CHANNEL": "stderr",
    "SESSION_DRIVER": "cookie"
  }
}
```

### `.vercelignore`
Create `.vercelignore` to exclude heavy local folders from Vercel uploads:

```text
/vendor
/node_modules
.env
.env.local
.git
.github
storage/logs/*
storage/framework/cache/*
storage/framework/sessions/*
storage/framework/views/*
```

---

## 2. Reverse Proxy & HTTPS Enforcement

To prevent mixed-content warnings (*"The information you're about to submit is not secure"*):

### `app/Http/Middleware/TrustProxies.php`
Set `$proxies = '*'` so Laravel trusts Vercel's `X-Forwarded-Proto` header:

```php
protected $proxies = '*';
```

### `app/Providers/AppServiceProvider.php`
Force HTTPS scheme in production environments:

```php
public function boot(): void
{
    if ($this->app->environment('production') || request()->server('HTTP_X_FORWARDED_PROTO') === 'https') {
        \Illuminate\Support\Facades\URL::forceScheme('https');
    }
}
```

---

## 3. Supabase PostgreSQL & Schema Support

### `config/database.php`
Configure `pgsql` connection to accept custom search schema and SSL mode:

```php
'pgsql' => [
    'driver' => 'pgsql',
    'url' => env('DATABASE_URL'),
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', '5432'),
    'database' => env('DB_DATABASE', 'postgres'),
    'username' => env('DB_USERNAME', 'postgres'),
    'password' => env('DB_PASSWORD', ''),
    'charset' => 'utf8',
    'prefix' => '',
    'prefix_indexes' => true,
    'search_path' => env('DB_SCHEMA', 'public'),
    'sslmode' => env('DB_SSLMODE', 'require'),
],
```

### Connection Pooler Note (IPv4 Compatibility)
When connecting local ISP / serverless functions to Supabase, use **Session Pooler (Port 5432)** host:
- `DB_HOST`: `aws-1-ap-northeast-1.pooler.supabase.com` (or region pooler)
- `DB_PORT`: `5432`
- `DB_USERNAME`: `postgres.[YOUR_PROJECT_REF]`

---

## 4. PHP 8.5 Compatibility

Fix `PDO::MYSQL_ATTR_SSL_CA` deprecation notice in `config/database.php`:

```php
'options' => extension_loaded('pdo_mysql') ? array_filter([
    (defined('Pdo\Mysql::MYSQL_ATTR_SSL_CA') ? \Pdo\Mysql::MYSQL_ATTR_SSL_CA : PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
]) : [],
```
