<div align="center">

# 💰 UangKita - Personal Financial Goal Management System

**Software Engineering Course Project (Rekayasa Perangkat Lunak)**

[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Supabase](https://img.shields.io/badge/Supabase-PostgreSQL-3ECF8E?style=for-the-badge&logo=supabase&logoColor=white)](https://supabase.com)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6%2B-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](LICENSE)

</div>

---

## 📌 Executive Summary

**UangKita** is a modern, full-stack web application developed for the **Software Engineering Course (Rekayasa Perangkat Lunak)**. It is designed to empower individuals to take full control of their personal finances, budget allocation, and long-term savings targets. Built on the **Laravel 10** framework following strict MVC architecture, solid security protocols, and modern visual design principles, UangKita delivers a production-grade experience for managing financial goals.

The application bridges the gap between complex budgeting tools and intuitive user interfaces, providing real-time progress indicators, automated Rupiah (`Rp`) currency formatting, privacy controls, and cross-device responsiveness.

---

## 🛠️ Technology Stack & Architecture

### Backend & Core Framework
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP_8.1+-777BB4?style=flat-square&logo=php&logoColor=white)
![Supabase](https://img.shields.io/badge/Supabase_PostgreSQL-3ECF8E?style=flat-square&logo=supabase&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL_Database-4479A1?style=flat-square&logo=mysql&logoColor=white)

- **Framework**: Laravel 10.x (PHP 8.1+)
- **Database Engine**: **Supabase Hosted PostgreSQL** (Dedicated Schema `uangkita`) with MySQL fallback.
- **Architecture**: Model-View-Controller (MVC), Blade Templating, Middleware Pipeline
- **Database ORM**: Eloquent ORM with strict Foreign Key constraints and automated model relations
- **Authentication**: Laravel Session Guard with Session Fixation & IDOR Security Safeguards

### Frontend & Styling System
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3_Design_System-1572B6?style=flat-square&logo=css3&logoColor=white)
![Bootstrap 5](https://img.shields.io/badge/Bootstrap_5.3-7952B3?style=flat-square&logo=bootstrap&logoColor=white)
![FontAwesome](https://img.shields.io/badge/FontAwesome_6-339AF0?style=flat-square&logo=fontawesome&logoColor=white)

- **UI Framework**: Bootstrap 5.3 (Grid System, Offcanvas Navigation & Modals)
- **Typography**: Google Fonts (DM Sans & Poppins)
- **Icons**: FontAwesome 6 Professional Icon Suite
- **Styling**: Consolidated Design System (`public/asset/css/app.css`) adhering to a strict color palette:
  - **Primary Purple**: `#9745FD` / `#7B2FD4`
  - **Neon Yellow Accent**: `#ECFF0E`
  - **Dark Navy**: `#0E1F2E`
  - **Clean Canvas**: `#F8F9FA` / `#FFFFFF`

---

## ✨ Key Features

### 🎯 Financial Goal Management
- **Target Tracking**: Define custom financial targets with target amounts, category classifications, and notes.
- **Incremental Top-Ups**: Add savings to existing goals via dedicated top-up forms and interactive modals.
- **Visual Progress Indicators**: Real-time progress bars calculating percentage completion dynamically.

### 💵 Real-Time Rupiah (`Rp`) Auto-Formatter
- **Interactive Formatting**: Custom JavaScript currency mask formats numerical inputs to standard Indonesian Rupiah format (`Rp 1.000.000`) on keypress.
- **Dual-Carrier Form Submission**: Formats display strings for UX while extracting unformatted integer values into hidden carriers for server validation.

### 🛡️ Enterprise Security & Data Isolation
- **IDOR Protection**: All controller operations (`show`, `edit`, `update`, `destroy`) enforce user-level data scoping (`auth()->user()->goals()`). Users cannot view or modify data belonging to other accounts.
- **Session Fixation Safeguards**: Automatic session ID regeneration (`$request->session()->regenerate()`) upon authentication.
- **Middleware Guard Pipeline**: Route separation into `middleware('guest')` (Login/Register) and `middleware('auth')` (Dashboard & Goals).

### 👁️ Privacy & UX Enhancements
- **Balance Visibility Toggle**: Instant show/hide toggle for total savings using a sleek circular eye button.
- **Unified Offcanvas Sidebar**: Mobile navigation experience with smooth side-drawer offcanvas sidebar across all pages.
- **Zero-Emoticon Standard**: Production-ready, clean UI copy written in professional academic Indonesian & English.

---

## 📁 Repository Structure

```text
UangKita/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AuthController.php       # Auth & session lifecycle handler
│   │   │   ├── ContactController.php    # Public contact form handler
│   │   │   └── FormController.php       # Goals CRUD with user scoping
│   │   └── Middleware/                  # Authenticate & Guest Guards
│   └── Models/
│       ├── Contact.php                  # Contact model
│       ├── Goal.php                     # Financial goal model
│       └── User.php                     # User model with Eloquent relations
├── database/
│   ├── migrations/                      # Users, Goals, & Contacts tables
│   └── seeders/                         # DatabaseSeeder with admin data
├── public/
│   └── asset/
│       ├── css/
│       │   └── app.css                  # Unified Design System CSS
│       └── Frame.svg                    # Brand vector assets
├── resources/
│   └── views/
│       ├── layout/
│       │   ├── app.blade.php            # Master Dashboard Layout
│       │   ├── layouts.blade.php        # Landing Page Layout
│       │   ├── navigation.blade.php     # Unified Header & Mobile Sidebar
│       │   └── footer.blade.php         # Reusable Footer
│       ├── user/                        # Login & Register views
│       ├── edit.blade.php               # Goal Detail & Top-up view
│       ├── homepage.blade.php           # Goals Dashboard view
│       └── uangkita.blade.php           # Main Landing Page view
└── routes/
    └── web.php                          # Grouped RESTful Web Routes
```

---

## ⚡ Quick Start & Installation

### Prerequisites
- **PHP** >= 8.1
- **Composer** >= 2.0
- **MySQL** >= 8.0
- **Node.js** & **npm**

### Step-by-Step Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/BagusHidayat21/UangKita.git
   cd UangKita
   ```

2. **Install PHP dependencies**:
   ```bash
   composer install
   ```

3. **Configure Environment File**:
   ```bash
   cp .env.example .env
   ```
   *Edit `.env` to configure database credentials:*
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=uangkita
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

5. **Run Database Migrations & Seeders**:
   ```bash
   php artisan migrate --seed
   ```

6. **Serve the Application**:
   ```bash
   php artisan serve
   ```
   Access the web app at `http://127.0.0.1:8000`.

---

## 🔑 Default Credentials (Testing)

For rapid testing and demo purposes, the database seeder initializes a pre-configured account:

| Credential | Value |
|---|---|
| **Username** | `admin` |
| **Email** | `admin@uangkita.com` |
| **Password** | `admin123` |

---

## 📜 Conventional Commits Standard

This project maintains a clean, granular, and chronological Git history spanning a realistic 2-month development cycle adhering to **Conventional Commits**:

- `feat:` New user-facing features (Dashboard grid, Rupiah currency formatter).
- `fix:` Bug fixes (CSS alignment, IDOR scoping, toggle eye button).
- `refactor:` Code architecture improvements without behavior changes (Middleware grouping, controller optimization).
- `style:` UI/UX design updates, CSS design system consolidation (`app.css`).
- `chore:` Project configuration, dependencies, database seeders.

---

## 📄 License & Course Disclaimer

This project is developed for the **Software Engineering Course (Rekayasa Perangkat Lunak)** under the **[MIT License](LICENSE)**.

---

<div align="center">
  <sub>Developed by <strong>Bagus Hidayat</strong> for Software Engineering Course (Rekayasa Perangkat Lunak).</sub>
</div>
