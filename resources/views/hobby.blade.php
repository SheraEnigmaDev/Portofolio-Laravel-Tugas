@extends('template')
@section('header')
@section('footer')
    <body>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <div>
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
        Menjelajah
      </p>
    </div>
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="27df4f81-c854-45de-942a-fe90f7a300f9" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#27df4f81-c854-45de-942a-fe90f7a300f9)" width="52" height="24"></rect>
        </svg>
        <span class="relative"> Koleksi Hobi Shera</span>
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
    Selamat datang di Koleksi Hobi Shera! Saya ingin berbagi hobi-hobi favorit saya, mulai dari desain hingga kegiatan luar ruangan. Temukan inspirasi dan mungkin minat baru yang sama menyenangkannya seperti yang saya rasakan. Ayo, eksplor dunia hobi bersama saya!
    </p>
  </div>
  <div class="grid max-w-screen-lg gap-8 row-gap-10 mx-auto lg:grid-cols-2">
    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
      <div class="mr-4">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M13.4 2.096a10.08 10.08 0 0 0-8.937 3.331A10.054 10.054 0 0 0 2.096 13.4c.53 3.894 3.458 7.207 7.285 8.246a9.982 9.982 0 0 0 2.618.354l.142-.001a3.001 3.001 0 0 0 2.516-1.426 2.989 2.989 0 0 0 .153-2.879l-.199-.416a1.919 1.919 0 0 1 .094-1.912 2.004 2.004 0 0 1 2.576-.755l.412.197c.412.198.85.299 1.301.299A3.022 3.022 0 0 0 22 12.14a9.935 9.935 0 0 0-.353-2.76c-1.04-3.826-4.353-6.754-8.247-7.284zm5.158 10.909-.412-.197c-1.828-.878-4.07-.198-5.135 1.494-.738 1.176-.813 2.576-.204 3.842l.199.416a.983.983 0 0 1-.051.961.992.992 0 0 1-.844.479h-.112a8.061 8.061 0 0 1-2.095-.283c-3.063-.831-5.403-3.479-5.826-6.586-.321-2.355.352-4.623 1.893-6.389a8.002 8.002 0 0 1 7.16-2.664c3.107.423 5.755 2.764 6.586 5.826.198.73.293 1.474.282 2.207-.012.807-.845 1.183-1.441.894z"></path><circle cx="7.5" cy="14.5" r="1.5"></circle><circle cx="7.5" cy="10.5" r="1.5"></circle><circle cx="10.5" cy="7.5" r="1.5"></circle><circle cx="14.5" cy="7.5" r="1.5"></circle></svg>
        </div>
      </div>
      <div>
        <h6 class="mb-3 text-xl font-bold leading-5">Desain</h6>
        <p class="mb-3 text-sm text-gray-900">
        Desain itu seperti bermain-main dengan imajinasi! Kamu bisa menciptakan sesuatu yang indah dan keren dari nol, entah itu logo, dekorasi rumah, atau bahkan karya seni digital. Semuanya tentang mengekspresikan gaya unikmu dan membuat dunia jadi lebih menarik.
        </p>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      </div>
    </div>
    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
      <div class="mr-4">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21 10H3a1 1 0 0 0-1 1 10 10 0 0 0 5 8.66V21a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1.34A10 10 0 0 0 22 11a1 1 0 0 0-1-1zm-5.45 8.16a1 1 0 0 0-.55.9V20H9v-.94a1 1 0 0 0-.55-.9A8 8 0 0 1 4.06 12h15.88a8 8 0 0 1-4.39 6.16zM9 9V7.93a4.53 4.53 0 0 0-1.28-3.15A2.49 2.49 0 0 1 7 3V2H5v1a4.53 4.53 0 0 0 1.28 3.17A2.49 2.49 0 0 1 7 7.93V9zm4 0V7.93a4.53 4.53 0 0 0-1.28-3.15A2.49 2.49 0 0 1 11 3V2H9v1a4.53 4.53 0 0 0 1.28 3.15A2.49 2.49 0 0 1 11 7.93V9zm4 0V7.93a4.53 4.53 0 0 0-1.28-3.15A2.49 2.49 0 0 1 15 3V2h-2v1a4.53 4.53 0 0 0 1.28 3.15A2.49 2.49 0 0 1 15 7.93V9z"></path></svg>
        </div>
      </div>
      <div>
        <h6 class="mb-3 text-xl font-bold leading-5">Cooking</h6>
        <p class="mb-3 text-sm text-gray-900">
        Memasak adalah petualangan rasa! Setiap masakan adalah eksperimen seru. Setiap masakan saya bikin orang nggak bisa berhenti makan, dari aroma hingga rasanya selalu bikin nagih. Setiap suapan penuh kejutan lezat! Plus, hasilnya nggak cuma bikin puas diri sendiri, tapi juga orang-orang terdekatmu yang jadi ikut menikmati.
        </p>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      </div>
    </div>
    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
      <div class="mr-4">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM9 11V5h6v6H9zm6 2v6H9v-6h6zM5 5h2v2H5V5zm0 4h2v2H5V9zm0 4h2v2H5v-2zm0 4h2v2H5v-2zm14.002 2H17v-2h2.002v2zm-.001-4H17v-2h2.001v2zm0-4H17V9h2.001v2zM17 7V5h2v2h-2z"></path></svg>
        </div>
      </div>
      <div>
        <h6 class="mb-3 text-xl font-bold leading-5"> Watching movies</h6>
        <p class="mb-3 text-sm text-gray-900">
          Film itu tiket instan buat menjelajah dunia lain! Mau petualangan, drama, atau komedi, semuanya bisa kamu temukan dalam satu layar. Seru banget buat bersantai sambil tenggelam dalam cerita dan menikmati momen-momen epik.
        </p>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      </div>
    </div>
    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
      <div class="mr-4">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M3.414 13.778 2 15.192l4.949 2.121 2.122 4.95 1.414-1.414-.707-3.536L13.091 14l3.61 7.704 1.339-1.339-1.19-10.123 2.828-2.829a2 2 0 1 0-2.828-2.828l-2.903 2.903L3.824 6.297 2.559 7.563l7.644 3.67-3.253 3.253-3.536-.708z"></path></svg>
          </svg>
        </div>
      </div>
      <div>
        <h6 class="mb-3 text-xl font-bold leading-5">Traveling</h6>
        <p class="mb-3 text-sm text-gray-900">
        Traveling itu kayak petualangan nyata! Setiap perjalanan membuka pintu untuk melihat tempat baru, makan makanan lokal, dan ketemu orang-orang seru. Selain seru, pulang-pulang bawa banyak cerita dan kenangan tak terlupakan!
        </p>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
      </div>
    </div>
  </div>
</div>
        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>
    </body>
</html>