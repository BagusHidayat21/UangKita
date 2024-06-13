<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Masuk | UangKita</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('asset/css/login.css') }}" />
    <link rel="icon" href="{{ asset('asset/logokecil.svg') }}">
</head>

<body>
    <div class="auth-container">
        <!-- Left Brand Panel -->
        <div class="auth-brand-panel">
            <div>
                <a href="/">
                    <img src="{{ asset('asset/Frame.svg') }}" alt="UangKita Logo" height="36" style="filter: brightness(0) invert(1);">
                </a>
                <div class="mt-4">
                    <span class="brand-badge">
                        <i class="fa-solid fa-shield-halved"></i> Aman &amp; Terpercaya
                    </span>
                </div>
            </div>

            <div class="brand-illustration">
                <img src="{{ asset('asset/gambarkiri.png') }}" alt="UangKita Illustration">
            </div>

            <div>
                <h2 class="brand-title">Serahkan Pengeluaran Anda Bersama <span>UangKita</span></h2>
                <p class="brand-desc">Platform manajemen keuangan cerdas untuk kemudahan pencatatan dan kebebasan finansial Anda.</p>
            </div>
        </div>

        <!-- Right Form Panel -->
        <div class="auth-form-panel">
            <a href="/" class="back-home-link">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
            </a>

            <div class="auth-header">
                <h1 class="auth-title">Masuk ke Akun</h1>
                <p class="auth-subtitle">Masukkan username dan password Anda untuk melanjutkan.</p>
            </div>

            @if(session('error'))
                <div class="alert-error">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">Username</label>
                    <div class="input-wrapper">
                        <i class="fa-solid fa-user input-icon"></i>
                        <input type="text" name="username" class="custom-input" placeholder="Masukkan username Anda" required autofocus autocomplete="username" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-wrapper">
                        <i class="fa-solid fa-lock input-icon"></i>
                        <input type="password" name="password" class="custom-input" placeholder="Masukkan password Anda" required autocomplete="current-password" />
                    </div>
                </div>

                <div class="form-extra">
                    <span class="text-muted"></span>
                    <a href="#" class="forgot-link">Lupa Password?</a>
                </div>

                <button type="submit" class="btn-submit">
                    <span>Masuk Akun</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>

                <div class="auth-footer-link">
                    Belum punya akun? <a href="/register">Daftar Sekarang</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
