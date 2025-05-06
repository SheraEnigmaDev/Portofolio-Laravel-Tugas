<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="{{ asset('css/coba.css') }}">

        <!-- =====BOX ICONS===== -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio website complete</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            @yield('header')
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">SHE<span class="text-amber-200">RA</span></a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="{{ url('/')}}" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="{{ url('about')}}" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="{{ url('skills')}}" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="{{ url('hobby')}}" class="nav__link">Hobby</a></li>
                        <!-- <li class="nav__item"><a href="{{ url('contact')}}" class="nav__link">Contact</a></li> -->
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>



        <!--===== FOOTER =====-->
        <footer class="footer">
            @yield('footer')
            <p class="footer__title">Shera</p>
            <div class="footer__social">
                <a href="{{ url('https://www.facebook.com/M45yanto?mibextid=ZbWKwL')}}" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="{{ url('https://www.instagram.com/sr.nrameey?igsh=d3huN28wY3RjaXEx')}}" class="footer__icon"><i class='bx bxl-instagram' ></i></a>

            </div>
            <p class="footer__copy">&#169; sherlyta.nurria14@smk.belajar.id</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>


    </body>
</html>
