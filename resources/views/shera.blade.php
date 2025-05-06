@extends('template')
@section('header')
@section('footer')
    <body>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home"><!-- -->
                <div class="home__data">
                    <h1 class="home__title">Hallo! Ini adalah <br><span class="home__title-color">halaman tentang saya</span><br> Selamat Menjelajah!</h1>

                    <a href="{{ url('contact')}}" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="{{ url('https://www.facebook.com/M45yanto?mibextid=ZbWKwL')}}" class="home__social-icon"><i class='bx bxl-facebook'></i></a>
                    <a href="{{ url('https://www.instagram.com/sr.nrameey?igsh=d3huN28wY3RjaXEx')}}" class="home__social-icon"><i class='bx bxl-instagram'></i></a>
                </div>

                <div class="home__img mb-10">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                            <image class="home__blob-img"  x="50" y="60" href="{{url('images/profil.png')}}"/>
                    </svg>
                </div>
            </section>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>
    </body>
</html>
