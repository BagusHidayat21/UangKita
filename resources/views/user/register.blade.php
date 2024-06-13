<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Akun | UangKita</title>
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
                        <i class="fa-solid fa-sparkles"></i> Gabung Gratis
                    </span>
                </div>
            </div>

            <div class="brand-illustration">
                <img src="{{ asset('asset/gambarkiri.png') }}" alt="UangKita Illustration">
            </div>

            <div>
                <h2 class="brand-title">Mulai Kelola Keuangan Bersama <span>UangKita</span></h2>
                <p class="brand-desc">Buat akun dalam beberapa detik dan nikmati kemudahan pencatatan finansial terpadu.</p>
            </div>
        </div>

        <!-- Right Form Panel -->
        <div class="auth-form-panel">
            <a href="/" class="back-home-link">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
            </a>

            <div class="auth-header">
                <h1 class="auth-title">Daftar Akun Baru</h1>
                <p class="auth-subtitle">Isi data diri Anda di bawah ini untuk memulai.</p>
            </div>

            @if($errors->any())
                <div class="alert-error">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">Alamat Email</label>
                    <div class="input-wrapper">
                        <i class="fa-solid fa-envelope input-icon"></i>
                        <input type="email" name="email" class="custom-input" placeholder="contoh@email.com" required autocomplete="email" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Username</label>
                    <div class="input-wrapper">
                        <i class="fa-solid fa-user input-icon"></i>
                        <input type="text" name="username" class="custom-input" placeholder="Pilih username unik" required autocomplete="username" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-wrapper">
                        <i class="fa-solid fa-lock input-icon"></i>
                        <input type="password" name="password" class="custom-input" placeholder="Buat password Anda" required autocomplete="new-password" />
                    </div>
                </div>

                <button type="submit" class="btn-submit" style="margin-top: 10px;">
                    <span>Daftar Akun</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>

                <div class="auth-footer-link">
                    Sudah memiliki akun? <a href="/login">Masuk Sekarang</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
