@extends('template')
@section('header')
@section('footer')
    <body>
            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="{{url('images/profile 1.jpg')}}" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle"> Hallo! saya Sherlyta Nurria Meisasi.</h2>
                        <p class="about__text"> Saya seorang siswi SMK jurusan Rekayasa Perangkat Lunak dengan minat khusus di bidang desain dan memasak. Meskipun latar belakang saya adalah IT, saya juga memiliki passion dalam menciptakan karya seni visual dan mengolah makanan lezat, saya percaya potensi saya dibidang desain dan kuliner adalah kombinasi keahlian yang akan membuka banyak peluang menarik di masa depan.</p>
                    </div>
                </div>
            </section>

            <!-- about2 -->
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
    <div class="flex flex-col justify-center">
      <div class="max-w-xl mb-6">
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
        Profil Pribadi dan <br class="hidden md:block" />

          <span class="relative px-1">
            <div class="absolute inset-x-0 bottom-0 h-3 transform -skew-x-12 bg-teal-accent-400"></div>
            <span class="relative inline-block text-deep-purple-accent-400">Sejarah Pendidikan</span>
          </span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
        Sebagai seorang pelajar, saya memberikan dedikasi yang tinggi dalam proses belajar. Dengan semangat yang besar terhadap ilmu pengetahuan, saya selalu berusaha untuk mencapai hasil terbaik dalam setiap bidang yang saya pelajari. Saya memiliki ketertarikan khusus dalam mata pelajaran sejarah, yang mendorong untuk terus mengeksplorasi dan berkembang dalam bidang tersebut.
        </p>
      </div>
      <div class="grid gap-5 row-gap-8 sm:grid-cols-2">
        <div class="duration-300 transform bg-white border-l-4 shadow-sm border-amber-800 hover:-translate-y-2">
          <div class="h-full p-5 border border-l-0 rounded-r">
            <h6 class="mb-2 font-semibold leading-5">
              Riwayat Pendidikan
            </h6>
            <p class="text-sm text-gray-900">
             <br> TK PKK KIHAJAR DEWANTARA </br><br> SDN 1 LEBAKREJO</br><br>  SMPN 1 PUROWDADI</br><br>SMKN 1 PURWOSARI</br>
            </p>
          </div>
        </div>
        <div class="duration-300 transform bg-white border-l-4 shadow-sm border-amber-800 hover:-translate-y-2">
          <div class="h-full p-5 border border-l-0 rounded-r">
            <h6 class="mb-2 font-semibold leading-5">
            Profil Pribadi
            </h6>
            <p class="text-sm text-gray-900">
            <br>Nama:Sherlyta N.M. (Shera)</br> <br>Usia: 16 </br> <br>Sekolah: SMKN 1 PURWOSARI</br> <br>Jurusan: Rekayasa Perangkat Lunak</br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="{{url('images/profile 2.jpg')}}" alt="" />
        <div class="card__data mt-2">
                <h2 class="card__title">Sherlyta Nurria Meisasi</h2>
                <a href="#" class="card_button">@sr.nrameey</a>
        </div>
    </div>
  </div>
</div>
        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>
    </body>
</html>
