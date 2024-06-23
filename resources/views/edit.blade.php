@extends('layout.app')

@section('title', 'Detail Goal | UangKita')

@section('content')
<div class="container py-2">
    <!-- Back Button -->
    <div class="mb-4">
        <a href="/homepage" class="btn btn-outline-purple btn-sm px-3 py-2 fw-bold d-inline-flex align-items-center gap-2">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Dashboard
        </a>
    </div>

    <div class="row g-4">
        <!-- Goal Overview Card (Clean Light White Style) -->
        <div class="col-12 col-lg-7">
            <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white text-navy h-100 position-relative overflow-hidden" style="border: 1px solid #EBF0F5 !important;">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    @php
                        $isCompleted = $goal->jumlah >= $goal->target;
                        $progress = $goal->target > 0 ? min(100, round(($goal->jumlah / $goal->target) * 100)) : 0;
                    @endphp
                    <span class="category-badge">
                        <i class="fa-solid fa-tag me-1"></i> {{ ucfirst($goal->kategori ?? 'Casual') }}
                    </span>

                    @if($isCompleted)
                        <span class="badge bg-purple text-white fw-bold px-3 py-2 rounded-pill">
                            <i class="fa-solid fa-check me-1"></i> Target Selesai
                        </span>
                    @else
                        <span class="badge bg-light text-navy border fw-bold px-3 py-2 rounded-pill">
                            {{ $progress }}% Tercapai
                        </span>
                    @endif
                </div>

                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="icon-box-neat" style="width: 52px; height: 52px; font-size: 22px;">
                        <i class="fa-solid fa-wallet"></i>
                    </div>
                    <div>
                        <h2 class="fw-bold text-navy mb-1">{{ $goal->name }}</h2>
                        <small class="text-muted">Dibuat pada {{ $goal->created_at ? $goal->created_at->format('d M Y') : 'Hari ini' }}</small>
                    </div>
                </div>

                <!-- Progress Bar Section -->
                <div class="mb-4 p-4 rounded-4" style="background: #F8F9FA; border: 1px solid #EBF0F5;">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="text-muted small fw-bold">SALDO SAAT INI</span>
                        <span class="text-muted small fw-bold">TARGET AKHIR</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-baseline mb-3">
                        <h3 class="fw-extrabold text-purple mb-0">Rp {{ number_format($goal->jumlah, 0, ',', '.') }}</h3>
                        <h4 class="fw-bold text-navy mb-0">Rp {{ number_format($goal->target, 0, ',', '.') }}</h4>
                    </div>

                    <div class="progress goal-progress mb-2" style="height: 12px;">
                        <div class="progress-bar bg-purple" 
                             role="progressbar" 
                             data-width="{{ $progress }}%" 
                             aria-valuenow="{{ $progress }}" 
                             aria-valuemin="0" 
                             aria-valuemax="100">
                        </div>
                    </div>
                    
                    @php
                        $kekurangan = max(0, $goal->target - $goal->jumlah);
                    @endphp
                    <div class="d-flex justify-content-between small text-muted mt-2">
                        <span>Capaian: <strong>{{ $progress }}%</strong></span>
                        <span>Sisa Kekurangan: <strong class="text-purple">Rp {{ number_format($kekurangan, 0, ',', '.') }}</strong></span>
                    </div>
                </div>

                <!-- Notes Section -->
                <div class="mb-4">
                    <h6 class="fw-bold text-navy mb-2"><i class="fa-solid fa-note-sticky text-purple me-2"></i>Catatan Target</h6>
                    <div class="p-3 rounded-3 text-muted small lh-lg" style="background: #F8F9FA; border: 1px solid #EBF0F5;">
                        {{ $goal->catatan ?? 'Tidak ada catatan tambahan untuk target ini.' }}
                    </div>
                </div>

                <!-- Bottom Action -->
                <div class="mt-auto pt-3 border-top">
                    <button type="button" class="btn btn-purple w-100 py-3 rounded-3 fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#isiSaldoModal">
                        <i class="fa-solid fa-plus-circle fs-5"></i>
                        <span>Isi / Tambah Saldo Target</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Quick Top Up Form (White Card) -->
        <div class="col-12 col-lg-5">
            <div class="card border-0 rounded-4 shadow-sm p-4 p-md-5 bg-white h-100 d-flex flex-column justify-content-between" style="border: 1px solid #EBF0F5 !important;">
                <div>
                    <div class="icon-box-neat mb-3" style="width: 48px; height: 48px; font-size: 20px;">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <h4 class="fw-bold text-navy mb-2">Isi Saldo Langsung</h4>
                    <div class="custom-underline-purple mb-3"></div>
                    <p class="text-muted small mb-4">Tambahkan tabungan Anda secara bertahap untuk mendekati target yang diinginkan.</p>

                    <form action="{{ route('update', ['id' => $goal->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label class="form-label-custom">Jumlah Tambahan Saldo (Rp)</label>
                            <input type="text" class="form-control form-control-custom" id="additionalAmount" name="additional_amount" placeholder="Rp 0" required>
                            <small class="text-muted mt-1 d-block">Nominal akan ditambahkan ke saldo saat ini.</small>
                        </div>

                        <button type="submit" class="btn btn-purple w-100 py-3 rounded-3 fw-bold shadow-sm">
                            <i class="fa-solid fa-check me-2"></i> Konfirmasi Isi Saldo
                        </button>
                    </form>
                </div>

                <div class="mt-5 pt-3 border-top text-center">
                    <form action="{{ route('goals.destroy', ['id' => $goal->id]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus goal ini? Data yang dihapus tidak dapat dikembalikan.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link text-danger text-decoration-none small fw-bold">
                            <i class="fa-solid fa-trash-can me-1"></i> Hapus Goal Ini
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Isi Saldo -->
<div class="modal fade" id="isiSaldoModal" tabindex="-1" aria-labelledby="isiSaldoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold text-navy" id="isiSaldoModalLabel">
                    <i class="fa-solid fa-wallet text-purple me-2"></i> Isi Saldo {{ $goal->name }}
                </h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('update', ['id' => $goal->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="modalAdditionalAmount" class="form-label-custom">Jumlah Tambahan Saldo (Rp)</label>
                        <input type="text" class="form-control form-control-custom" id="modalAdditionalAmount" name="additional_amount" placeholder="Rp 0" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-purple py-3 rounded-3 fw-bold">
                            <i class="fa-solid fa-check me-2"></i> Tambah Saldo Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
