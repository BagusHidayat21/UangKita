<!-- ════════════════════════════════════════════════════════════
     UNIFIED NAVBAR HEADER & MOBILE OFFCANVAS SIDEBAR
     Used on ALL pages (Landing, Dashboard, Details) for 100% consistency
     ════════════════════════════════════════════════════════════ -->

<header class="sticky-top bg-white shadow-sm" style="border-bottom: 1px solid rgba(14, 31, 46, 0.08);">
    <!-- Top Yellow Info Bar (Desktop) -->
    <div class="yellow-info-bar py-2 d-none d-md-block" style="font-size: 13px;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center small fw-semibold">
                <div class="d-flex align-items-center gap-2">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Jl. Ambarawa No.5, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</span>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <span><i class="fa-solid fa-phone me-1"></i>+6219891824</span>
                    <span><i class="fa-regular fa-envelope me-1"></i>uangkita@gmail.com</span>
                    <div class="d-flex gap-2 social-circle-icons">
                        <a href="#" class="social-circle"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-circle"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main White Navbar -->
    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('asset/Frame.svg') }}" alt="UangKita Logo" height="36">
            </a>

            <!-- Mobile Offcanvas Toggle Button -->
            <button class="navbar-toggler border-0 shadow-none d-lg-none" 
                    type="button" 
                    data-bs-toggle="offcanvas" 
                    data-bs-target="#mobileSidebar" 
                    aria-controls="mobileSidebar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Desktop Links -->
            <div class="d-none d-lg-flex ms-auto align-items-center gap-3">
                <a href="/" class="nav-link fw-semibold px-3 py-2 rounded-3 text-dark">
                    <i class="fa-solid fa-house me-1 text-purple"></i> Home
                </a>
                
                @if(auth()->check())
                    <a href="/homepage" class="nav-link fw-bold px-3 py-2 rounded-3 text-purple" style="background: rgba(151, 69, 253, 0.08);">
                        <i class="fa-solid fa-chart-pie me-1"></i> Dashboard Goals
                    </a>

                    <!-- User Profile Pill -->
                    <div class="d-flex align-items-center gap-2 ms-2 ps-3" style="border-left: 1px solid rgba(14, 31, 46, 0.1);">
                        <div class="user-avatar-badge rounded-circle text-white fw-bold d-flex align-items-center justify-content-center">
                            {{ strtoupper(substr(auth()->user()->username ?? 'U', 0, 1)) }}
                        </div>
                        <div>
                            <span class="d-block fw-bold text-dark lh-1" style="font-size: 14px;">{{ auth()->user()->username }}</span>
                            <small class="text-muted" style="font-size: 11px;">Member</small>
                        </div>
                    </div>

                    <!-- Logout Button -->
                    <form action="{{ route('logout') }}" method="POST" class="d-inline ms-2">
                        @csrf
                        <button type="submit" class="btn btn-outline-purple btn-sm px-3 py-2 fw-bold d-inline-flex align-items-center gap-2">
                            <i class="fa-solid fa-right-from-bracket"></i> Keluar
                        </button>
                    </form>
                @else
                    <a href="#about" class="nav-link fw-semibold px-3 py-2 rounded-3 text-dark">About</a>
                    <a href="#pages" class="nav-link fw-semibold px-3 py-2 rounded-3 text-dark">Pages</a>
                    <a href="#contact" class="nav-link fw-semibold px-3 py-2 rounded-3 text-dark">Contact Us</a>
                    <a href="/login" class="btn btn-purple px-4 py-2 rounded-3 fw-bold ms-2">Masuk &rarr;</a>
                @endif
            </div>
        </div>
    </nav>
</header>

<!-- ════════════════════════════════════════════════════════════
     UNIFIED MOBILE OFFCANVAS SIDEBAR
     ════════════════════════════════════════════════════════════ -->
<div class="offcanvas offcanvas-end theme-sidebar" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
    <div class="offcanvas-header">
        <a href="/">
            <img src="{{ asset('asset/Frame.svg') }}" alt="UangKita Logo" height="32">
        </a>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body px-4 py-3 d-flex flex-column">
        <div class="flex-grow-1">
            <span class="sidebar-section-label">Navigasi Utama</span>
            <div class="d-flex flex-column gap-1">
                <a href="/" class="sidebar-nav-link {{ request()->is('/') ? 'active' : '' }}" data-bs-dismiss="offcanvas">
                    <span>Home</span><i class="fa-solid fa-chevron-right chev"></i>
                </a>

                @if(auth()->check())
                    <a href="/homepage" class="sidebar-nav-link {{ request()->is('homepage*') ? 'active' : '' }}" data-bs-dismiss="offcanvas">
                        <span>Dashboard Goals</span><i class="fa-solid fa-chevron-right chev"></i>
                    </a>
                @else
                    <a href="#about" class="sidebar-nav-link" data-bs-dismiss="offcanvas">
                        <span>About</span><i class="fa-solid fa-chevron-right chev"></i>
                    </a>
                    <a href="#pages" class="sidebar-nav-link" data-bs-dismiss="offcanvas">
                        <span>Pages</span><i class="fa-solid fa-chevron-right chev"></i>
                    </a>
                    <a href="#contact" class="sidebar-nav-link" data-bs-dismiss="offcanvas">
                        <span>Contact Us</span><i class="fa-solid fa-chevron-right chev"></i>
                    </a>
                @endif
            </div>
        </div>

        <!-- Sidebar Footer Action -->
        <div class="sidebar-footer mt-4">
            @if(auth()->check())
                <div class="d-flex align-items-center gap-3 p-3 rounded-3 mb-3" style="background: rgba(151, 69, 253, 0.08);">
                    <div class="user-avatar-badge rounded-circle text-white fw-bold d-flex align-items-center justify-content-center">
                        {{ strtoupper(substr(auth()->user()->username ?? 'U', 0, 1)) }}
                    </div>
                    <div>
                        <span class="d-block fw-bold text-dark lh-1" style="font-size: 14px;">{{ auth()->user()->username }}</span>
                        <small class="text-muted" style="font-size: 11px;">Member Terverifikasi</small>
                    </div>
                </div>

                <form action="{{ route('logout') }}" method="POST" class="d-grid mb-4">
                    @csrf
                    <button type="submit" class="btn btn-outline-purple py-2-5 rounded-3 fw-bold">
                        <i class="fa-solid fa-right-from-bracket me-2"></i> Keluar
                    </button>
                </form>
            @else
                <a href="/login" class="btn btn-purple w-100 py-3 rounded-3 fw-bold mb-4">
                    Masuk &rarr;
                </a>
            @endif

            <div class="sidebar-info-tag">
                <i class="fa-solid fa-location-dot"></i>
                <span>Jl. Ambarawa No.5, Malang</span>
            </div>
            <div class="sidebar-info-tag">
                <i class="fa-solid fa-phone"></i>
                <span>+6219891824</span>
            </div>
            <div class="sidebar-info-tag">
                <i class="fa-regular fa-envelope"></i>
                <span>uangkita@gmail.com</span>
            </div>
        </div>
    </div>
</div>
