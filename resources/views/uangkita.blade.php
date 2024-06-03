@include('layout.layouts')

<head>
    <!-- All styles consolidated into app.css via layouts.blade.php -->
</head>

<body>
    <!-- Section 1: Hero / Jumbotron -->
    <section class="jumbotron">
        <div class="container py-5">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-12 col-lg-5 text-center text-lg-start mb-5 mb-lg-0" id="gambartokkiri">
                    <img src="{{ asset('asset/gambarkiri.png') }}" class="img-fluid hero-img" id="gambar" alt="Hero Illustration">
                </div>
                <div class="col-12 col-lg-7 text-center text-lg-start">
                    <div class="ps-lg-4">
                        <h1 class="display-5 fw-bold text-white mb-4">Serahkan Pengeluaran Anda Bersama <span class="text-purple-accent">UangKita</span></h1>
                        <p class="deskripsi text-white-50 mb-4 col-lg-10 mx-auto mx-lg-0">
                            UangKita adalah platform manajemen keuangan pribadi terpadu yang membantu Anda mencatat arus kas, mengendalikan anggaran bulanan, serta mencapai target finansial impian secara sistematis.
                        </p>

                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-lg-start gap-4 mt-4">
                            <button class="mulaisekarang" onclick="window.location.href='/login';">
                                <span class="text">Mulai Sekarang</span>
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512">
                                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg>
                                </span>
                            </button>

                            <div class="d-flex align-items-center gap-2 user-avatar-group">
                                <div class="avatar-stack">
                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="User Avatar" class="avatar-img">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" alt="User Avatar" class="avatar-img">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80" alt="User Avatar" class="avatar-img">
                                </div>
                                <span class="text-white small fw-semibold">10k+ Pengguna</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Trusted Partners -->
    <section class="trusted py-5">
        <div class="container text-center">
            <div class="teks mb-4">
                <h4 class="fw-bold text-white mb-0">Our Trusted Partners</h4>
            </div>

            <div class="row text-center g-4 align-items-center justify-content-center">
                <div class="col-6 col-md-3"><img src="{{ asset('asset/growtify.svg') }}" class="img-fluid partner-logo" alt="Growtify"></div>
                <div class="col-6 col-md-3"><img src="{{ asset('asset/goldfish.svg') }}" class="img-fluid partner-logo" alt="Goldfish"></div>
                <div class="col-6 col-md-3"><img src="{{ asset('asset/growtify.svg') }}" class="img-fluid partner-logo" alt="Growtify"></div>
                <div class="col-6 col-md-3"><img src="{{ asset('asset/goldfish.svg') }}" class="img-fluid partner-logo" alt="Goldfish"></div>
            </div>
        </div>
    </section>
    
    <!-- Section 3: Kami adalah Pakar Finansial -->
    <section class="card-pakar py-5">
        <div class="container py-4 text-center">
            <h2 class="pakarfinansial mb-5 fw-bold text-dark">Kami adalah Pakar Finansial</h2>
            <div class="row g-4 justify-content-center mt-2">
                <!-- Card 1: Yellow Top -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="split-card shadow-sm border-0 rounded-4 overflow-hidden h-100">
                        <div class="split-header bg-yellow-neon p-4 text-dark text-start">
                            <h2 class="fw-extrabold display-5 mb-0">6k+</h2>
                            <p class="fw-bold mb-0">Pengguna Aktif</p>
                        </div>
                        <div class="split-body bg-navy p-4 text-white text-start">
                            <p class="card-text text-white-50 small mb-0">Lebih dari 6.000 pengguna aktif mengandalkan UangKita untuk mengontrol alokasi dana harian mereka setiap bulan.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2: White Top -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="split-card shadow-sm border-0 rounded-4 overflow-hidden h-100">
                        <div class="split-header bg-white p-4 text-dark text-start border-bottom">
                            <h2 class="fw-extrabold display-5 mb-0">8000+</h2>
                            <p class="fw-bold mb-0">Transaksi Terhubung</p>
                        </div>
                        <div class="split-body bg-navy p-4 text-white text-start">
                            <p class="card-text text-white-50 small mb-0">Ribuan transaksi harian telah berhasil dicatat dan dikategorikan secara otomatis tanpa kendala.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3: Purple Top -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="split-card shadow-sm border-0 rounded-4 overflow-hidden h-100">
                        <div class="split-header bg-purple-gradient p-4 text-white text-start">
                            <h2 class="fw-extrabold display-5 mb-0">9.8</h2>
                            <p class="fw-bold mb-0">Client Rating</p>
                        </div>
                        <div class="split-body bg-navy p-4 text-white text-start">
                            <p class="card-text text-white-50 small mb-0">Pengguna memberikan penilaian tertinggi untuk kemudahan antarmuka dan akurasi analisis keuangan kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Tentang Kami -->
    <section class="about_us py-5 bg-white" id="about">
        <div class="container py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="about fw-bold text-dark mb-2">Tentang Kami</h2>
                    <div class="custom-underline-purple"></div>
                </div>
                <a href="#" class="btn btn-purple px-4 py-2 rounded-pill text-white fw-bold d-none d-sm-inline-block">Read More &rarr;</a>
            </div>
            
            <div class="row align-items-center mt-5">
                <div class="col-12 col-lg-5 mb-4 mb-lg-0 text-center">
                    <div class="about-stacked-images position-relative">
                        <img src="{{ asset('asset/about.png') }}" class="img-fluid rounded-4 shadow" id="gambar" alt="About Graphic">
                    </div>
                </div>
                <div class="col-12 col-lg-7 ps-lg-5 text-center text-lg-start">
                    <h3 class="regular fw-bold mb-4 text-dark lh-base">“Solusi Finansial Cerdas untuk Membimbing Anda Menuju Kebebasan Keuangan dan Masa Depan Terencana.”</h3>
                    <p class="text-muted lh-lg">
                        UangKita hadir untuk menyelesaikan permasalahan mendasar dalam pengelolaan keuangan pribadi. Banyak orang mengalami kesulitan dalam melacak ke mana perginya pendapatan mereka setiap bulan. Dengan pendekatan visual yang intuitif, UangKita memberikan transparansi penuh atas setiap transaksi Anda.
                        <br><br>
                        Sistem kami dirancang untuk membantu Anda memprioritaskan kebutuhan utama, menekan pemborosan impulsif, serta membangun kebiasaan menabung yang konsisten demi mencapai impian finansial jangka panjang.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Seribu Kebutuhan, Satu App. -->
    <section class="card-kebutuhan py-5" id="pages">
        <div class="container py-4">
            <div class="mb-5 text-start">
                <h2 class="fw-bold text-dark mb-2">Seribu Kebutuhan, Satu App.</h2>
                <div class="custom-underline-purple"></div>
            </div>
            
            <div class="row g-4 mt-2">
                <!-- Wide Split Card 1 -->
                <div class="col-12 col-md-6">
                    <div class="split-card shadow-sm border-0 rounded-4 overflow-hidden h-100">
                        <div class="split-header bg-white p-4 text-start border-bottom d-flex align-items-center gap-3">
                            <div class="icon-box-purple rounded-3 p-3 text-purple">
                                <i class="fa-solid fa-wallet fs-3"></i>
                            </div>
                            <h4 class="fw-bold mb-0 text-dark">Target Keuangan (Goals)</h4>
                        </div>
                        <div class="split-body bg-navy p-4 text-white text-start">
                            <p class="card-text text-white-50 small mb-0">Rencanakan tabungan untuk pendidikan, liburan, atau dana darurat dengan indikator pencapaian target yang diperbarui secara real-time.</p>
                        </div>
                    </div>
                </div>
                <!-- Wide Split Card 2 -->
                <div class="col-12 col-md-6">
                    <div class="split-card shadow-sm border-0 rounded-4 overflow-hidden h-100">
                        <div class="split-header bg-white p-4 text-start border-bottom d-flex align-items-center gap-3">
                            <div class="icon-box-purple rounded-3 p-3 text-purple">
                                <i class="fa-solid fa-receipt fs-3"></i>
                            </div>
                            <h4 class="fw-bold mb-0 text-dark">Catatan Keuangan</h4>
                        </div>
                        <div class="split-body bg-navy p-4 text-white text-start">
                            <p class="card-text text-white-50 small mb-0">Catat setiap pemasukan dan pengeluaran dalam hitungan detik dengan visualisasi grafik yang interaktif dan mudah dipahami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Dukungan Pelanggan 24/7 -->
    <section class="dukungan py-5">
        <div class="container py-4">
            <div class="row align-items-center text-center text-lg-start">
                <div class="col-12 col-lg-8 mb-4 mb-lg-0">
                    <h2 class="mb-3 fw-bold"><span class="text-yellow-neon">Dukungan</span> <span class="text-white">Pelanggan 24/7</span></h2>
                    <p class="lh-lg text-white-50 mb-0">Tim layanan pelanggan dan konsultan bantuan UangKita siap mendampingi Anda 24 jam sehari untuk memastikan setiap kendala teknis dan pertanyaan fitur teratasi dengan cepat.</p>
                </div>
                <div class="col-12 col-lg-4 text-center text-lg-end">
                    <a class="btn btn-outline-light btn-lg rounded-pill px-4 py-2 fw-semibold" href="#contact" role="button">
                        Hubungi Kami &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: Kenapa Memilih Kami? -->
    <section class="card-why py-5 bg-white">
        <div class="container py-4 text-center">
            <div class="d-flex flex-column align-items-center mb-5">
                <h2 class="mb-2 fw-bold text-dark">Kenapa Memilih Kami?</h2>
                <div class="custom-underline-purple"></div>
            </div>
            
            <div class="row g-4 mt-2">
                <!-- Card 1 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="split-card shadow-sm border-0 rounded-4 overflow-hidden h-100">
                        <div class="split-header bg-white p-4 text-start border-bottom">
                            <h2 class="fw-bold text-purple mb-1">01.</h2>
                            <h5 class="fw-bold text-dark mb-0">Siap Pakai</h5>
                        </div>
                        <div class="split-body bg-navy p-4 text-white text-start">
                            <p class="card-text text-white-50 small mb-0">Dapat diakses kapan saja dan di mana saja melalui berbagai perangkat tanpa perlu instalasi rumit.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="split-card shadow-sm border-0 rounded-4 overflow-hidden h-100">
                        <div class="split-header bg-white p-4 text-start border-bottom">
                            <h2 class="fw-bold text-purple mb-1">02.</h2>
                            <h5 class="fw-bold text-dark mb-0">Gratis & Transparan</h5>
                        </div>
                        <div class="split-body bg-navy p-4 text-white text-start">
                            <p class="card-text text-white-50 small mb-0">Semua fitur utama pencatatan dapat digunakan sepenuhnya gratis tanpa biaya berlangganan tersembunyi.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="split-card shadow-sm border-0 rounded-4 overflow-hidden h-100">
                        <div class="split-header bg-white p-4 text-start border-bottom">
                            <h2 class="fw-bold text-purple mb-1">03.</h2>
                            <h5 class="fw-bold text-dark mb-0">Mudah Digunakan</h5>
                        </div>
                        <div class="split-body bg-navy p-4 text-white text-start">
                            <p class="card-text text-white-50 small mb-0">Antarmuka yang bersih dan ramah pengguna memastikan siapa pun dapat langsung mulai mencatat dalam sekali coba.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="split-card shadow-sm border-0 rounded-4 overflow-hidden h-100">
                        <div class="split-header bg-white p-4 text-start border-bottom">
                            <h2 class="fw-bold text-purple mb-1">04.</h2>
                            <h5 class="fw-bold text-dark mb-0">Keamanan Data</h5>
                        </div>
                        <div class="split-body bg-navy p-4 text-white text-start">
                            <p class="card-text text-white-50 small mb-0">Data riwayat transaksi Anda dilindungi dengan standar enkripsi tinggi demi menjaga kerahasiaan informasi privasi Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 8: Kontak Kami -->
    <section class="kontak py-5 bg-light-gray" id="contact">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-12 col-lg-6 text-start">
                    <h2 class="mb-2 fw-bold text-dark">Kontak Kami</h2>
                    <div class="custom-underline-purple mb-4"></div>
                    <p class="text-muted lh-lg mb-4">
                        Punya pertanyaan seputar pengoperasian aplikasi, atau ingin memberikan saran masukan? Tim kami selalu terbuka untuk mendengar dari Anda.
                    </p>
                    
                    <div class="row g-4 text-start mt-2">
                        <div class="col-6">
                            <h6 class="fw-bold text-dark mb-2">Email Kami</h6>
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-envelope text-purple fs-5"></i>
                                <span class="text-muted small">support@uangkita.com</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold text-dark mb-2">Lokasi</h6>
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-location-dot text-purple fs-5"></i>
                                <span class="text-muted small">Lowokwaru, Malang</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card shadow-sm border-0 rounded-4 p-4 bg-white">
                        <div class="card-body">
                            <form action="/" method="POST" id="form-1">
                                @csrf
                                <div class="mb-3 text-start">
                                    <label class="form-label fw-semibold text-dark small">Nama</label>
                                    <input class="form-control custom-input py-2 px-3 rounded-3" name="name" type="text" placeholder="Nama Lengkap Anda" required>
                                </div>
                                <div class="mb-3 text-start">
                                    <label class="form-label fw-semibold text-dark small">Email</label>
                                    <input class="form-control custom-input py-2 px-3 rounded-3" type="email" name="email" placeholder="Alamat Email Anda" required>
                                </div>
                                <div class="mb-4 text-start">
                                    <label class="form-label fw-semibold text-dark small">Pesan</label>
                                    <textarea name="pesan" class="form-control custom-input py-2 px-3 rounded-3" rows="4" placeholder="Pesan Anda" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-purple w-100 py-3 fw-bold rounded-3 text-white"> Kirim Pesan &rarr; </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Testimoni Klien -->
    <section class="testimonial py-5 bg-white">
        <div class="container py-4">
            <div class="mb-5 text-start">
                <h2 class="fw-bold text-dark mb-2">Testimoni Klien</h2>
                <div class="custom-underline-purple"></div>
            </div>
            
            <div class="row g-4 text-start">
                <!-- Testimonial 1 -->
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm border-0 h-100 p-4 rounded-4 bg-white border">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="User" class="rounded-circle me-3" style="width: 48px; height: 48px; object-fit: cover;">
                            <div>
                                <h6 class="mb-0 fw-bold text-dark">Bagus Hidayat</h6>
                                <small class="text-muted">Student</small>
                            </div>
                        </div>
                        <div class="star-rating text-warning mb-3 small">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-muted small mb-0">"UangKita sangat membantu saya mengontrol uang saku bulanan. Sekarang saya tidak pernah kehabisan anggaran sebelum akhir bulan lagi!"</p>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm border-0 h-100 p-4 rounded-4 bg-white border">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" alt="User" class="rounded-circle me-3" style="width: 48px; height: 48px; object-fit: cover;">
                            <div>
                                <h6 class="mb-0 fw-bold text-dark">Ahmad Pratama</h6>
                                <small class="text-muted">Entrepreneur</small>
                            </div>
                        </div>
                        <div class="star-rating text-warning mb-3 small">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-muted small mb-0">"Laporan grafiknya luar biasa jernih. Saya bisa memisahkan arus kas usaha kecil saya dengan pengeluaran pribadi secara praktis."</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm border-0 h-100 p-4 rounded-4 bg-white border">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80" alt="User" class="rounded-circle me-3" style="width: 48px; height: 48px; object-fit: cover;">
                            <div>
                                <h6 class="mb-0 fw-bold text-dark">Siti Nurhaliza</h6>
                                <small class="text-muted">Freelancer</small>
                            </div>
                        </div>
                        <div class="star-rating text-warning mb-3 small">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-muted small mb-0">"Sebagai freelancer dengan penghasilan yang tidak menentu, fitur budget limit di UangKita adalah penyelamat stabilitas finansial saya."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layout.footer')
</body>
