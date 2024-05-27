@include('layout.navdash')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/homepage.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="judul" style="text-align: center;padding: 2rem;">
            <h1 style="font-weight: bold;">{{ $goal->name }}</h1>
        </div>

            <div class="progressbar">
                <h4>Saldo</h4>
                <p>{{ $goal->jumlah }}</p>
                @php
                    $progress = ($goal->jumlah / $goal->target) * 100;
                    $progressColor = $progress > 100 ? 'green' : '#9745FD';

                @endphp
                @if ($goal->jumlah == $goal->target)
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: {{ $progress }}%; background-color: #32CD32;"
                            aria-valuenow="{{ $progress }}" aria-valuemin="0"
                            aria-valuemax="100">
                            <li>{{ $goal->jumlah }}</li>
                        </div>
                    </div>
                @else
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: {{ $progress }}%; background-color: {{ $progressColor }};"
                            aria-valuenow="{{ $progress }}" aria-valuemin="0"
                            aria-valuemax="100">
                        </div>
                    </div>
                @endif
            <p style="margin-bottom: 2rem;">{{ $progress }}%
            </div>

        <div class="target">
            <div class="target">
                <p style="float: left; margin-right: 10px;">Target Anda </p>
                <p style="float: right;">Rp. <?php echo number_format($goal->target, 0, ',', '.'); ?></p></p>
                <div style="clear: both;"></div>
            </div>
            <div class="target">
                <p style="float: left; margin-right: 10px;">Frekuensi Menabung Per Bulan </p>
                <p style="float: right;">Rp. <?php echo number_format($goal->jumlah, 0, ',', '.'); ?></p></p>
                <div style="clear: both;"></div>
            </div>
            <div class="target">
                <p style="float: left; margin-right: 10px;">Catatan </p>
                <p style="float: right;">{{ $goal->catatan }}</p>
                <div style="clear: both;"></div>
            </div>
        </div>
        <div></div>

        <div class="modal fade" id="isiSaldoModal" tabindex="-1" aria-labelledby="isiSaldoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="isiSaldoModalLabel">Isi Saldo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('update', ['id' => $goal->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="additionalAmount">Jumlah Tambahan Saldo:</label>
                                <input type="number" class="form-control" id="additionalAmount" name="additional_amount" placeholder="Masukkan jumlah tambahan saldo" required>
                            </div>
                            <div style="text-align: center; margin-top: 1rem;">
                                <button type="submit" class="btn btn-primary">Isi Saldo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div style="text-align: center; margin-bottom: 3rem;">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#isiSaldoModal">Isi Saldo</button>
        </div>
    </div>
</body>

{{-- <body>
    <div class="container">
        <div class="card">
            <form action="{{ route('update', ['id' => $goal->id]) }}" method="POST" id="form-1">
                @csrf
                @method('PUT')
                <h4>Goal Name</h4> </br>
                <input class="input" name="name" type="text"
                    value="{{ $goal->name ? $goal->name : 'Tulis Tujuan Anda' }}">
                </br>
                <h4>Jumlah</h4> </br>
                <input type="number" name="jumlah"
                    value="{{ $goal->jumlah}}">
                </br>
                <h4>Target</h4> </br>
                <input type="number" name="target"
                    value="{{ $goal->target}}">
                </br>
                <h4>Kategori</h4> </br>
                <select name="kategori" id="" class="option">
                    <option value="casual" {{ old('kategori', $goal->kategori) == 'casual' ? 'selected' : '' }}>Casual
                    </option>
                    <option value="travel" {{ old('kategori', $goal->kategori) == 'travel' ? 'selected' : '' }}>Travel
                    </option>
                    <option value="fashion" {{ old('kategori', $goal->kategori) == 'fashion' ? 'selected' : '' }}>
                        Fashion</option>
                    <option value="electronics"
                        {{ old('kategori', $goal->kategori) == 'electronics' ? 'selected' : '' }}>Electronics
                    </option>
                    <option value="entertainment"
                        {{ old('kategori', $goal->kategori) == 'entertainment' ? 'selected' : '' }}>
                        Entertainment</option>
                </select>
                </br>
                <h4>Catatan</h4> </br>
                <input type="text" class="catatan" name="catatan" label="catatan"
                    value="{{ $goal->catatan }}"
                </br>
                </br>
                <button type="submit"> UPDATE</button>
            </form>
        </div>
    </div>
</body> --}}

<footer>
    @include('layout.footer')
</footer>

</html>
