@extends('layout.app')

@section('title', 'Dashboard Goals | UangKita')

@section('content')
<div class="container py-2">
    <!-- Top Hero Banner (Clean Light Theme) -->
    <div class="dashboard-hero-light">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(151, 69, 253, 0.08); border: 1px solid rgba(151, 69, 253, 0.2);">
                    <i class="fa-solid fa-chart-line text-purple small"></i>
                    <span class="text-purple small fw-bold">Ringkasan Finansial Anda</span>
                </div>
                <h1 class="display-6 fw-bold text-navy mb-2">Selamat Datang, <span class="text-purple">{{ auth()->user()->username }}</span></h1>
                <p class="text-muted mb-0 col-lg-10">Pantau perkembangan target tabungan harian, alokasi anggaran, dan capaian sasaran finansial Anda secara real-time.</p>
            </div>
            <div class="col-12 col-lg-4 text-lg-end mt-4 mt-lg-0">
                <a href="#createGoalForm" class="btn btn-purple px-4 py-3 rounded-3 fw-bold d-inline-flex align-items-center gap-2 shadow-sm">
                    <i class="fa-solid fa-plus"></i> Tambah Goal Baru
                </a>
            </div>
        </div>
    </div>

    <!-- Flash Notifications -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm border-0 mb-4" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Top Summary Stat Cards Grid -->
    <div class="row g-3 mb-5">
        <!-- Stat Card 1: Total Target -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="stat-card shadow-sm h-100">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="text-muted small fw-bold text-uppercase">Total Target Sasaran</span>
                    <div class="icon-box-neat">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                </div>
                <h3 class="fw-extrabold text-navy mb-1" id="targetBalanceText">
                    Rp {{ number_format($totaljumlah, 0, ',', '.') }}
                </h3>
                <small class="text-muted">Dari {{ $goals->count() }} target terdaftar</small>
            </div>
        </div>

        <!-- Stat Card 2: Total Saldo Terkumpul -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="stat-card shadow-sm h-100">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="text-muted small fw-bold text-uppercase">Saldo Terkumpul</span>
                    <div class="d-flex align-items-center gap-2">
                        <button type="button" id="toggleBalanceBtn" class="btn-eye-circle" title="Tampilkan/Sembunyikan Saldo">
                            <i class="fa-solid fa-eye" id="eyeIcon"></i>
                        </button>
                        <div class="icon-box-neat">
                            <i class="fa-solid fa-wallet"></i>
                        </div>
                    </div>
                </div>
                @php
                    $totalTerkumpul = $goals->sum('jumlah');
                @endphp
                <h3 class="fw-extrabold text-navy mb-1 masked-balance" id="actualBalanceText" data-amount="Rp {{ number_format($totalTerkumpul, 0, ',', '.') }}">
                    Rp {{ number_format($totalTerkumpul, 0, ',', '.') }}
                </h3>
                <small class="text-muted">Tabungan yang terkumpul</small>
            </div>
        </div>

        <!-- Stat Card 3: Goals Selesai -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="stat-card shadow-sm h-100">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="text-muted small fw-bold text-uppercase">Goals Selesai</span>
                    <div class="icon-box-neat">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                </div>
                @php
                    $completedCount = $goals->filter(fn($g) => $g->jumlah >= $g->target)->count();
                @endphp
                <h3 class="fw-extrabold text-navy mb-1">
                    {{ $completedCount }} / {{ $goals->count() }}
                </h3>
                <small class="text-purple fw-semibold"><i class="fa-solid fa-circle-check me-1"></i> {{ $completedCount }} Target tercapai</small>
            </div>
        </div>

        <!-- Stat Card 4: Persentase Total -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="stat-card shadow-sm h-100">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="text-muted small fw-bold text-uppercase">Rata-rata Progress</span>
                    <div class="icon-box-neat">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                </div>
                @php
                    $totalOverallProgress = $totaljumlah > 0 ? min(100, round(($totalTerkumpul / $totaljumlah) * 100)) : 0;
                @endphp
                <h3 class="fw-extrabold text-purple mb-1">
                    {{ $totalOverallProgress }}%
                </h3>
                <div class="progress goal-progress mt-2">
                    <div class="progress-bar bg-purple" role="progressbar" data-width="{{ $totalOverallProgress }}%" aria-valuenow="{{ $totalOverallProgress }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Goals Section Header -->
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h3 class="fw-bold text-navy mb-1">Daftar Goals Anda</h3>
            <div class="custom-underline-purple mb-0"></div>
        </div>
    </div>

    @if($goals->isEmpty())
        <div class="card border-0 rounded-4 shadow-sm p-5 text-center my-4 bg-white">
            <div class="py-4">
                <div class="icon-box-neat mx-auto mb-3" style="width: 60px; height: 60px; font-size: 24px;">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <h4 class="fw-bold text-navy mb-2">Belum Ada Goal Terdaftar</h4>
                <p class="text-muted mb-4 col-md-6 mx-auto">Anda belum menambahkan target tabungan. Mulai buat goal pertama Anda sekarang untuk mencatat impian keuangan.</p>
                <a href="#createGoalForm" class="btn btn-purple px-4 py-2-5 rounded-3 fw-bold shadow-sm">
                    <i class="fa-solid fa-plus me-1"></i> Buat Goal Pertama
                </a>
            </div>
        </div>
    @else
        <!-- Clean Goal Cards Grid (All Light White Cards) -->
        <div class="row g-4 mb-5">
            @foreach ($goals as $goal)
                @php
                    $progress = $goal->target > 0 ? min(100, round(($goal->jumlah / $goal->target) * 100)) : 0;
                    $isCompleted = $goal->jumlah >= $goal->target;
                @endphp
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="goal-item-card h-100 d-flex flex-column justify-content-between">
                        <div>
                            <!-- Header Info -->
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="category-badge">
                                    <i class="fa-solid fa-tag me-1"></i> {{ ucfirst($goal->kategori ?? 'Casual') }}
                                </span>
                                @if($isCompleted)
                                    <span class="badge bg-purple text-white fw-bold px-3 py-1 rounded-pill small">
                                        <i class="fa-solid fa-check me-1"></i> Selesai
                                    </span>
                                @else
                                    <span class="badge bg-light text-navy border fw-bold px-3 py-1 rounded-pill small">
                                        {{ $progress }}%
                                    </span>
                                @endif
                            </div>

                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="icon-box-neat">
                                    <i class="fa-solid fa-wallet"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <h5 class="fw-bold text-navy mb-1 text-truncate">{{ $goal->name }}</h5>
                                    <small class="text-muted d-block text-truncate">{{ $goal->catatan ?? 'Tidak ada catatan' }}</small>
                                </div>
                            </div>

                            <!-- Balance & Progress -->
                            <div class="p-3 rounded-3 mb-3" style="background: #F8F9FA;">
                                <div class="d-flex justify-content-between align-items-baseline mb-2">
                                    <span class="text-muted small fw-bold">SALDO TERKUMPUL</span>
                                    <span class="text-muted small">Target: Rp {{ number_format($goal->target, 0, ',', '.') }}</span>
                                </div>
                                <h4 class="fw-bold text-purple mb-3">Rp {{ number_format($goal->jumlah, 0, ',', '.') }}</h4>

                                <div class="progress goal-progress">
                                    <div class="progress-bar bg-purple" 
                                         role="progressbar" 
                                         data-width="{{ $progress }}%" 
                                         aria-valuenow="{{ $progress }}" 
                                         aria-valuemin="0" 
                                         aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Footer Actions -->
                        <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                            <form action="{{ route('goals.destroy', ['id' => $goal->id]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus goal ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger text-decoration-none p-0 small fw-bold">
                                    <i class="fa-solid fa-trash-can me-1"></i> Hapus
                                </button>
                            </form>
                            <a href="{{ route('update', ['id' => $goal->id]) }}" class="btn btn-purple btn-sm px-3 py-2 rounded-2 fw-bold">
                                Detail / Isi Saldo &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <!-- Create Goal Form Card -->
    <div class="create-goal-card p-4 p-md-5 mb-5" id="createGoalForm">
        <div class="row align-items-center">
            <div class="col-12 col-lg-4 mb-4 mb-lg-0 pe-lg-4">
                <div class="icon-box-neat mb-3" style="width: 50px; height: 50px; font-size: 20px;">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <h3 class="fw-bold text-navy mb-2">Tambahkan Goal Baru</h3>
                <div class="custom-underline-purple mb-3"></div>
                <p class="text-muted small lh-lg">Rencanakan target tabungan baru Anda. Tentukan nama sasaran, nominal awal, target impian, serta kategori yang sesuai.</p>
            </div>
            <div class="col-12 col-lg-8">
                <form action="/homepage" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label-custom">Nama Goal</label>
                            <input class="form-control form-control-custom" name="name" type="text" placeholder="Contoh: Tabungan Laptop" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label-custom">Kategori</label>
                            <select name="kategori" class="form-select form-control-custom" required>
                                <option value="casual">Casual</option>
                                <option value="travel">Travel / Liburan</option>
                                <option value="fashion">Fashion / Pakaian</option>
                                <option value="electronics">Electronics / Gadget</option>
                                <option value="entertainment">Entertainment</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label-custom">Saldo Awal (Rp)</label>
                            <input type="text" name="jumlah" class="form-control form-control-custom" placeholder="Rp 0" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label-custom">Target Akhir (Rp)</label>
                            <input type="text" name="target" class="form-control form-control-custom" placeholder="Rp 1.000.000" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label-custom">Catatan Tambahan</label>
                            <textarea name="catatan" class="form-control form-control-custom" rows="3" placeholder="Tuliskan rencana menabung Anda..." required></textarea>
                        </div>
                        <div class="col-12 text-end mt-4">
                            <button type="submit" class="btn btn-purple px-5 py-3 rounded-3 fw-bold shadow-sm w-100 w-md-auto">
                                <i class="fa-solid fa-check me-2"></i> Simpan Goal Baru
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Balance Toggle Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('toggleBalanceBtn');
        const eyeIcon = document.getElementById('eyeIcon');
        const balanceText = document.getElementById('actualBalanceText');

        if (toggleBtn && balanceText) {
            let isHidden = false;
            const originalAmount = balanceText.getAttribute('data-amount');

            toggleBtn.addEventListener('click', function () {
                isHidden = !isHidden;
                if (isHidden) {
                    balanceText.textContent = 'Rp ••••••••';
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    balanceText.textContent = originalAmount;
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            });
        }
    });
</script>
@endsection
