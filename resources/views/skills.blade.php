@extends('template')
@section('header')
@section('footer')
    <body>

            <!--===== SKILLS =====-->
            <!-- <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">
                    <div>
                        <h2 class="skills__subtitle"> My Skills</h2>
                        <p class="skills__text"> Beberapa keahlian yang dapat menunjang karir saya.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">Cooking</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">Publik Speaking</span>
                            </div>
                            <div class="skills__bar skills__css">

                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">Desain</span>
                            </div>
                            <div class="skills__bar skills__js">

                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">Writing</span>
                            </div>
                            <div class="skills__bar skills__ux">

                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <img src="assets/img/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>

                <div class="flex items-center justify-center -mx-4 lg:pl-8">
      <div class="flex flex-col items-end px-3">
        <img
          class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56"
          src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
          alt=""
        />
        <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40" src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
      </div>
      <div class="px-3">
        <img class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80" src="https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" alt="" />
      </div>
    </div>
            </section> -->
            <section class="skills section" id="skills">
  <h2 class="section-title">Skills</h2>

  <div class="skills__container bd-grid grid grid-cols-1 lg:grid-cols-2 gap-8">
    <div>
    <h2 class="skills__subtitle"> My Skills</h2>
                        <p class="skills__text">  Di halaman ini, Anda dapat melihat beberapa keahlian yang saya miliki.
                        Sebagai seorang pelajar, saya terus berusaha mengembangkan berbagai keahlian yang tidak hanya membantu dalam pendidikan, tetapi juga bermanfaat untuk masa depan karier saya. Mulai dari keterampilan kreatif hingga kemampuan komunikasi, semua ini saya pelajari dengan semangat ingin tahu dan tekad untuk terus berkembang.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                            <i class='bx bxs-pencil skills__icon'></i>
                                <span class="skills__name">Writing</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bx-microphone skills__icon'></i>
                                <span class="skills__name">Publik Speaking</span>
                            </div>
                            <div class="skills__bar skills__css">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon' ></i>
                                <span class="skills__name">Desain</span>
                            </div>
                            <div class="skills__bar skills__js">

                            </div>
                            <div>
                                <span class="skills__percentage">80%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-bowl-hot skills__icon'></i>
                                <span class="skills__name">Cooking</span>
                            </div>
                            <div class="skills__bar skills__ux">

                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
    </div>

    <!-- Image Section -->
    <div class="flex items-center justify-center lg:pl-8">
      <div class="flex flex-col items-end px-3">
        <img
          class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56"
          src="{{url('images/publik speaking.jpg')}}"
          alt=""
        />
        <img
          class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40"
          src="{{url('images/menulis.jpg')}}"
          alt=""
        />
      </div>
      <div class="px-3">
        <img
          class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80"
          src="{{url('images/cooking.jpg')}}"
          alt=""
        />
      </div>
    </div>
  </div>
</section>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>
    </body>
</html>
