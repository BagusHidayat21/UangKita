<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Press+Start+2P&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="icon" href="{{ asset('asset/logokecil.svg') }}">
    <title>Uangkita : Serahkan Pengeluaran Anda Bersama UangKita</title>
</head>


<body>

    <nav class="navbar navbar-expand-lg sticky-top bg-light">
        <div class="container">
            <a class="navbar-brand"><img src="{{ asset('asset/Frame.svg') }}" alt=""></a>
            <button id="button_respon" class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <a href="/" class="btn btn-danger"  style="margin-left: 10px" >Keluar</a>
                </ul>
            </div>
        </div>
    </nav>



    <section id="abc" style="background-color: yellow">
        <nav class="navbar  navbar-expand-lg">
            <div class="container">
                <div class="jalan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 320 512">
                        <path
                            d="M16 144a144 144 0 1 1 288 0A144 144 0 1 1 16 144zM160 80c8.8 0 16-7.2 16-16s-7.2-16-16-16c-53 0-96 43-96 96c0 8.8 7.2 16 16 16s16-7.2 16-16c0-35.3 28.7-64 64-64zM128 480V317.1c10.4 1.9 21.1 2.9 32 2.9s21.6-1 32-2.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32z" />
                    </svg>
                    <a>Jl. Ambarawa No.5, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145 </a>
                </div>
                <ul class="navbar-nav d-flex ">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">
                            <i class="fa-solid fa-phone"></i>+6219891824</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-regular fa-envelope"></i>
                            uangkita@gmail.com
                        </a>
                    </li>
                    <li class="icon facebook">
                        <span class="tooltip">Facebook</span>
                        <span><i class="fab fa-facebook-f"></i></span>
                    </li>
                    <li class="icon twitter">
                        <span class="tooltip">Twitter</span>
                        <span><i class="fab fa-twitter"></i></span>
                    </li>
                    <li class="icon instagram">
                        <span class="tooltip">Instagram</span>
                        <span><i class="fab fa-instagram"></i></span>
                    </li>
                    <li class="icon youtube">
                        <span class="tooltip">Youtube</span>
                        <span><i class="fab fa-youtube"></i></span>
                    </li>
                </ul>
            </div>
    </section>

</body>

</html>
