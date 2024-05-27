@include('layout.navdash')

<head>

    <link rel="stylesheet" href="{{ asset('asset/css/homepage.css') }}">
</head>

<body>
    <section class="uangkami">
        <img src="{{ asset('asset/placeholder.svg') }}" alt="">

    </section>

    <section class="total">
        <div class="container" id="total_saldo">
            <h1>Total Saldo Sasaran</h1>
        </div>
        <div class="container">
            <div class="row" id="saldo">
                <div class="col-md-6">
                    <h2 id="password" class="masked">Rp. <?php echo number_format($totaljumlah, 0, ',', '.'); ?></h2>
                </div>
                <div class="col-md-6 d-flex justify-content-end">

                    <button id="togglePassword" class="toggle-password"><i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>
        <script>
            document.getElementById('togglePassword').addEventListener('click', function() {
                const passwordField = document.getElementById('password');
                const isMasked = passwordField.classList.toggle('masked');
                const icon = this.querySelector('i');

                if (isMasked) {
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                } else {
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                }
            });

            document.getElementById('password').classList.add('masked');
        </script>
    </section>


    <section class="goals">
        <div class="containergoals">
            <h1>Goal Detail</h1>
            <ul>
                @foreach ($goals as $goal)
                    <div class="card">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6" id="gambar-uang">
                                    <img src="{{ asset('asset/duit.svg') }}" alt="" width="50%">
                                </div>
                                <div class="col-md-6">
                                    <h4 class="goals_detail" onclick="window.location.href='/details';">{{ $goal->name }}</h4>
                                </div>
                                <div class="progress_bar">
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
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        Rp. <?php echo number_format($goal->jumlah, 0, ',', '.'); ?>
                                    </div>

                                    <div class="col-md-6" id="target_end">
                                        <p>{{ $progress }}% dari
                                            Rp. <?php echo number_format($goal->target, 0, ',', '.'); ?></p>
                                    </div>
                                </div>
                                {{-- <div class="row">

                                </div>
                                <h1 class="kategori">Kategori ({{ $goal->kategori }})</h1>
                                <p class="catatan">{{ $goal->catatan }}</p> --}}
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6" id="btn_updt">
                                        <a class="update" href="{{ route('update', ['id' => $goal->id]) }}">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="goals2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="yourgoals">
                        <h3>Tambahkan Goalsmu </h3>
                    </div>
                    <div class="line1">

                    </div>
                </div>
                {{-- <div class="col-lg-6" id="goals">
                    <div class="row" id="active">

                        <div class="col-lg">
                            <button class="btn active" data-form="form-1">Casual</button>
                        </div>
                        <div class="col-lg">
                            <button class="btn" data-form="form-2">Travel</button>
                        </div>
                        <div class="col-lg">
                            <button class="btn" data-form="form-3">Fasion</button>
                        </div>
                        <div class="col-lg">
                            <button class="btn" data-form="form-4">Electronics</button>
                        </div>
                        <div class="col-lg">
                            <button class="btn" data-form="form-5">Entertainment</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="container">
            <div class="card">
                <div class="container">
                    <div class="form">
                        <form action="/homepage" method="POST" id="form-1">
                            @csrf
                            <h4>Goal Name</h4> </br>
                            <input class="input" name="name" type="text" placeholder="Tulis Tujuan Anda"> </br>
                            <h4>Jumlah</h4> </br>
                            <input type="number" name="jumlah" placeholder="Rp. 0"> </br>
                            <h4>Target</h4> </br>
                            <input type="number" name="target" placeholder="Rp. 0"> </br>
                            <h4>Kategori</h4> </br>
                            <select name="kategori" id="" class="option">
                                <option value="casual">Casual</option>
                                <option value="travel">Travel</option>
                                <option value="fashion">Fashion</option>
                                <option value="electronics">Electronics</option>
                                <option value="entertainment">Entertainment</option>
                            </select>
                            </br>
                            <h4>Catatan</h4> </br>
                            <input type="text" class="catatan" name="catatan" label="catatan"
                                placeholder="Tulis Catatan Disini">
                            </br>
                            {{-- <input type="button" value="Create Goal" class="create"> --}}
                            {{-- <a href="/login" class="btn btn-primary create">Masuk</a> --}}
                            <button class="update" type="submit"> Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var btnContainer = document.getElementById("goals");
            var btns = btnContainer.getElementsByClassName("btn");
            var forms = document.querySelectorAll(".form form");

            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function() {
                    var activeElements = document.querySelectorAll("#goals .btn.active");
                    for (var j = 0; j < activeElements.length; j++) {
                        activeElements[j].classList.remove("active");
                    }

                    this.classList.add("active");

                    var formId = this.getAttribute("data-form");

                    for (var k = 0; k < forms.length; k++) {
                        if (forms[k].id === formId) {
                            forms[k].style.display = "block";
                        } else {
                            forms[k].style.display = "none";
                        }
                    }
                });
            }
        </script>
    </section>
</body>
<footer>
    @include('layout.footer')
</footer>
