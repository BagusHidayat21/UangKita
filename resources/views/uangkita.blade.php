@include('layout.layouts')

<head>
    <link rel="stylesheet" href="{{ asset('asset/css/uangkita.css') }}">
</head>

<body>
    <section class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" id="gambartokkiri">
                    <img src="{{ asset('asset/gambarkiri.png') }}" id="gambar" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="p-5 mb-4">
                        <div class="container py-5">
                            <h1 class="display-5 ">Serahkan Pengeluaran Anda Bersama <span
                                    id="uangbiru">UangKita</span></h1>
                            <p class="deskripsi col-md-8 ">Li Europan lingues es membres del sam familie. Lor
                                separat
                                existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam
                                vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun
                                vocabules.</p>

                                <button class="mulaisekarang" onclick="window.location.href='/login';">
                                    <span class="text">Mulai Sekarang</span>
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512">
                                            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                        </svg>
                                    </span>
                                </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trusted">
        <div class="container">
            <div class="teks">
                <h3>Our Trusted Partners</h3>
            </div>

            <div class="row">
                <div class="col-lg-3"><img src="{{ asset('asset/growtify.svg') }}" alt=""></div>
                <div class="col-lg-3"><img src="{{ asset('asset/goldfish.svg') }}" alt=""></div>
                <div class="col-lg-3"><img src="{{ asset('asset/growtify.svg') }}" alt=""></div>
                <div class="col-lg-3"><img src="{{ asset('asset/goldfish.svg') }}" alt=""></div>
            </div>
        </div>
    </section>
    </br>
    <section class="card-pakar">
        <div class="container">
            <h1 class="pakarfinansial">Kami Adalah Pakar Finansial</h1>
            <div class="row ">
                <div class="col-lg-4 justify-content-center ">
                    <div class="card ">
                        <img src="{{ asset('asset/client.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('asset/happyuser.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('asset/clientrating.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_us">
        <div class="container">
            <h2 class="about">About Us</h2>
            <div class="line1">

            </div>
            <div class="row">
                <div class="col-lg-4 bagiankiri">
                    <img src="{{ asset('asset/about.png') }}" id="gambar" alt="">
                </div>
                <div class="col-lg-8 tekskanan">
                    <h3 class="regular">“Regularly conduct security audits and vulnerability assessments to identify any
                        weaknesses in
                        your website's security.”</h3>
                    <p class="deskiri">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.
                        Por scientie,
                        musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li
                        grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un
                        nov lingua franca: On refusa continuar payar custosi traductores.

                        At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande
                        lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del
                        coalescent lingues.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="card-kebutuhan">
        <div class="container">
            <h2>Seribu Kebutuhan, Satu App.</h2>
            <div class="line5">

            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('asset/goals.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('asset/pengeluaran.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('asset/keuangan.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dukungan">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Dukungan Pelanggan 24/7</h3>
                    <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie,
                        musica, sport etc, litot Europa usa li sam vocabular.</p>
                </div>
                <div class="col-lg-6 ">
                    <div class="hubungikami">
                        <a class="hubungibtn " href="#" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                            </svg>
                            <span class="hubungi-text">
                                Hubungi Kami
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="card-why">
        <div class="container">
            <h2>Why Choosing Us?</h2>
            <div class="line2"></div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="{{ asset('asset/siap.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="{{ asset('asset/gratis.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="{{ asset('asset/ez.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="{{ asset('asset/keamanan.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="kontak">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Kontak Kami</h2>
                    <div class="line3"></div>
                    <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie,
                        musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li
                        grammatica.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam velit impedit praesentium
                                ratione officiis et nulla, perspiciatis rerum autem molestiae odio eaque quae similique
                                eos sunt amet. Exercitationem, deserunt voluptas!</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, harum beatae. Facilis
                                distinctio maxime quibusdam cupiditate consequuntur necessitatibus fugiat temporibus
                                vitae voluptatum saepe dolor nemo, in, vero at, tempore reiciendis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="container">
                        <div class="card shadow">
                            <div class="container">
                                <div class="form">
                                    <form action="/" method="POST" id="form-1">
                                        @csrf
                                        <h4>Nama</h4> </br>
                                        <input class="input" name="name" type="text"
                                            placeholder="Nama Lengkap Anda">
                                        </br>
                                        <h4>Email</h4> </br>
                                        <input type="email" name="email" placeholder="Alamat Email Anda"> </br>
                                        <h4>Pesan</h4> </br>
                                        <input type="text" name="pesan" class="catatan"
                                            placeholder="Pesan Anda">
                                        </br>
                                        <button type="submit" class="create"> Create Goal </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="testimonial">
        <div class="container">
            <h1 class="client">Client's Testimonial</h1>
            <div class="line4"></div>
            <div class="row">
                <div class="col-lg">
                    <div class="outerdiv">
                        <div class="innerdiv">
                            <!-- div1 -->
                            <div class="div1 eachdiv">
                                <div class="userdetails">
                                    <div class="imgbox">
                                        <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-daniel.jpg"
                                            alt="">
                                    </div>
                                    <div class="detbox">
                                        <p class="name">Daniel Clifford</p>
                                        <p class="designation">Verified Graduate</p>
                                    </div>
                                </div>
                                <div class="review">
                                    <h4>I received a job offer mid-course, and the subjects I learned were current, if
                                        not more so, in the company I joined. I honestly feel I got every penny’s worth.
                                    </h4>
                                    <p>“ I was an EMT for many years before I joined the bootcamp. I’ve been looking to
                                        make a transition and have heard some people who had an amazing experience here.
                                        I signed up for the free intro course and found it incredibly fun! I enrolled
                                        shortly thereafter. ”</p>
                                </div>
                            </div>
                            <!-- div2 -->
                            <div class="div2 eachdiv">
                                <div class="userdetails">
                                    <div class="imgbox">
                                        <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jonathan.jpg"
                                            alt="">
                                    </div>
                                    <div class="detbox">
                                        <p class="name">Jonathan Walters</p>
                                        <p class="designation">Verified Graduate</p>
                                    </div>
                                </div>
                                <div class="review">
                                    <h4>The team was very supportive and kept me motivated</h4>
                                    <p>“ I started as a total newbie with virtually no coding skills. I now work as a
                                        mobile engineer for a big company. This was one of the best investments I’ve
                                        made in myself. ”</p>
                                </div>
                            </div>
                            <!-- div3 -->
                            <div class="div3 eachdiv">
                                <div class="userdetails">
                                    <div class="imgbox">
                                        <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-kira.jpg"
                                            alt="">
                                    </div>
                                    <div class="detbox">
                                        <p class="name dark">Kira Whittle</p>
                                        <p class="designation dark">Verified Graduate</p>
                                    </div>
                                </div>
                                <div class="review dark">
                                    <h4>Such a life-changing experience. Highly recommended!</h4>
                                    <p>“ Before joining the bootcamp, I’ve never written a line of code. I needed some
                                        structure from professionals who can help me learn programming step by step. I
                                        was encouraged to enroll by a former student of theirs who can only say
                                        wonderful things about the program. The entire curriculum and staff did not
                                        disappoint. They were very hands-on and I never had to wait long for assistance.
                                        The agile team project, in particular, was outstanding. It took my learning to
                                        the next level in a way that no tutorial could ever have. In fact, I’ve often
                                        referred to it during interviews as an example of experience. ”</p>
                                </div>
                            </div>
                            <!-- div4 -->
                            <div class="div4 eachdiv">
                                <div class="userdetails">
                                    <div class="imgbox">
                                        <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jeanette.jpg"
                                            alt="">
                                    </div>
                                    <div class="detbox">
                                        <p class="name dark">Jeanette Harmon</p>
                                        <p class="designation dark">Verified Graduate</p>
                                    </div>
                                </div>
                                <div class="review dark">
                                    <h4>An overall wonderful and rewarding experience</h4>
                                    <p>“ Thank you for the wonderful experience! I now have a job I really enjoy, and
                                        make a good living while doing something I love. ”</p>
                                </div>
                            </div>
                            <!-- div5 -->
                            <div class="div5 eachdiv">
                                <div class="userdetails">
                                    <div class="imgbox">
                                        <img src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-patrick.jpg"
                                            alt="">
                                    </div>
                                    <div class="detbox">
                                        <p class="name">Patrick Abrams</p>
                                        <p class="designation">Verified Graduate</p>
                                    </div>
                                </div>
                                <div class="review">
                                    <h4>Awesome teaching support from TAs who did the bootcamp themselves. Getting
                                        guidance from them and learning from their experiences was easy.</h4>
                                    <p>“ The staff seem genuinely concerned about my progress which I find really
                                        refreshing. The program gave me the confidence necessary to be able to go out in
                                        the world and present myself as a capable junior developer. The standard is
                                        above the rest. You will get the personal attention you need from an incredible
                                        community of smart and amazing people. ”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layout.footer')
</body>
