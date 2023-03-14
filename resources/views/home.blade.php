<!doctype html>
<html class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <script type="text/javascript">
    window.$crisp=[];window.CRISP_WEBSITE_ID="010c823a-9c5d-4acc-83ec-3d13eb623ef2";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
  </script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,600;1,800&display=swap"
    rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>


  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.33.0/dist/full.css" rel="stylesheet" type="text/css" />
  {{--
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" /> --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  {{-- Fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  {{-- swiper --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

  {{-- boxicon --}}
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <title>Teamup</title>
</head>

<body class="">

  <div class="relative ">
    {{-- navbar --}}
    <nav class="bg-gray-50 font-poppins px-3 sm:px-4  py-2.5  fixed w-full z-20 top-0 left-0 border-gray-200 ">
      <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="https://flowbite.com/" class="flex items-center">
          {{-- <img src="{{asset('img/logo.png')}}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"> --}}
          <p class="text-4xl font-bold text-blue-700">TeamUp</p>
        </a>
        <div class="flex md:order-2">
          <a href="/login"><button type="button"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</button></a>

          <button data-collapse-toggle="navbar-sticky" type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
            aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul
            class="flex flex-col p-4 mt-4  rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0  ">
            <li>
              <a href="#home"
                class="block  py-2 pr-4 pl-3 lg:text-base text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
                aria-current="page">Home</a>
            </li>
            <li>
              <a href="#kategori"
                class="block py-2 pr-4 pl-3 lg:text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Categori</a>
            </li>
            <li>
              <a href="#create-profile"
                class="block py-2 pr-4 pl-3 lg:text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Fitur</a>
            </li>
            <li>
              <a href="#testimoni"
                class="block py-2 pr-4 pl-3 lg:text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Testimoni</a>
            </li>
            <li>
              <a href="/tim-list"
                class="block py-2 pr-4 pl-3 lg:text-base text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Team
                List</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    {{-- Home --}}
    <section id="home" class="">
      <section class="bg-gray-50">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
          <div class="mx-auto max-w-xl text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
              Membuat Tim Freelance
              <strong class="font-extrabold  sm:block">
                Mudah dan Efektif untuk Semua!
              </strong>
            </h1>

            <p class="mt-4 sm:text-xl sm:leading-relaxed">
              TeamUp membentuk tim freelance, cari dan rekrut untuk mahasiswa atau teamleader, sedia list job freelance.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
              <a class="block w-full rounded  bg-blue-700 hover:bg-blue-800 px-12 py-3 text-sm font-medium text-white shadow  focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
                href="/login">
                Get Started
              </a>

              <a class="block w-full rounded px-12 py-3 text-sm font-medium text-blue-700 shadow hover:text-blue-800 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                href="#create-profile">
                Learn More
              </a>
            </div>
          </div>
        </div>
      </section>



    </section>


    {{-- Isometric --}}
  </div>

  <div id="lottie-home" class="hidden xl:block absolute top-48 left-80 w-32"></div>
  <div id="lottie-home-laptop" class="absolute right-10 bottom-10 w-72 mt-10 xl:mt-0"></div>

  {{-- <section id="infografis" class="w-4/6 mx-auto shadow-2xl rounded-lg h-[600px]">
    <img src="{{asset('/assets/landing page/infografis.png')}}" class="scale-90" alt="">
  </section> --}}
  {{--
  <div id="tes" class="min-h-[600px] relative -top-64   bg-center bg-cover  scale-100">

  </div> --}}


  {{-- carousel companies --}}
  <div class="">
    {{-- carousel companies --}}
    <section id="" class="z-0 ">
      <div class="pt-10  ">
        <h5 class=" px-20  text-center font-light font-poppins lg:text-xl text-bold">Bergabunglah dengan Perusahaan
          Paling Terkenal di Seluruh Dunia</h5>
      </div>
      <div id="animation-carousel" class="relative" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-20  mb-10  overflow-hidden rounded-lg ">
          <!-- Item 1 -->
          <div class="hidden duration-200 sm:mt-5  ease-linear absolute inset-0 transition-all transform"
            data-carousel-item="">
            <div class="sm:flex sm:mx-auto">
              <div class=" ">
                <img src="{{asset('img/slack.png')}}"
                  class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:hidden" alt="...">
              </div>
              <div class=" sm:mx-auto">
                <img src="{{asset('img/slack.png')}}" class="hidden sm:block   " alt="...">
              </div>
              <div class="mx-auto">
                <img src="{{asset('img/microsoft.png')}}" class="hidden sm:block" alt="...">
              </div>
              <div class="mx-auto sm:mx-0 md:mx-auto">
                <img src="{{asset('img/airbnb.png')}}" class=" hidden sm:hidden md:block" alt="...">
              </div>
            </div>



          </div>
          <!-- Item 2 -->
          <div class="hidden duration-200 sm:mt-5  ease-linear absolute inset-0 transition-all transform"
            data-carousel-item="">
            <div class="sm:flex sm:mx-auto">
              <div class=" ">
                <img src="{{asset('img/slack.png')}}"
                  class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:hidden" alt="...">
              </div>
              <div class=" sm:mx-auto">
                <img src="{{asset('img/slack.png')}}" class="hidden sm:block   " alt="...">
              </div>
              <div class="mx-auto">
                <img src="{{asset('img/microsoft.png')}}" class="hidden sm:block" alt="...">
              </div>
              <div class="mx-auto sm:mx-0 md:mx-auto">
                <img src="{{asset('img/google.png')}}" class=" hidden sm:hidden md:block" alt="...">
              </div>
            </div>



          </div>
          <!-- Item 3 -->
          <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="{{asset('img/google.png')}}"
              class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 4 -->
          <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="{{asset('img/airbnb.png')}}"
              class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 5 -->
          <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="{{asset('img/logo.png')}}"
              class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 6 -->

        </div>
        <!-- Slider controls -->
        <button type="button"
          class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-prev="">
          <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">

            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-next="">
          <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 " fill="none" stroke="currentColor"
              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>
    </section>


    {{-- categori --}}
    <section id="kategori">
      <div class="pb-9 ">
        <h5 class="text-center font-poppins pt-10 ">Choose Categories</h5>
        <h3 class="text-center font-bold font-poppins pb-4 text-3xl text-blue-700">Choose Categories</h3>

        {{-- swiper mobile --}}
        <div class="swiper mySwiper md:hidden lg:hidden">
          <div class="swiper-wrapper sm:mb-5">
            <div class="swiper-slide sm:flex  sm:justify-center ">
              <div
                class=" text-[#828282]   transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110  duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5 ">
                  <div id="project1" class="w-20 ml-2">

                  </div>
                  <div>
                    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Project
                      Management
                    </h3>
                    <p class="pl-4 text-[#828282] ">87 tim tersedia</p>
                  </div>
                </div>
              </div>
              <div
                class=" text-[#F2994A] hidden sm:block md:hidden  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-10 sm:pt-6 ">
                  <div>
                    <img src="{{asset('img/ui.png')}}" width="" class="pl-12 sm:pl-4 " alt="">
                  </div>
                  <div>
                    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">UI / UX <br>
                      Design
                    </h3>
                    <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
                  </div>
                </div>
              </div>

            </div>

            <div class="swiper-slide sm:flex  sm:justify-items-center ">
              <div
                class=" text-[#F2994A] sm:mt-3  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[328px] sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-12 sm:pt-8">
                  <img src="{{asset('img/marketing.png')}}" class="pl-8 sm:pl-4 " alt="">
                  <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-5    ">Marketing &
                    Communication
                  </h3>

                </div>
              </div>
              <div
                class=" text-[#F2994A] hidden sm:block md:hidden  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-10 sm:pt-6 ">
                  <div>
                    <img src="{{asset('img/ui.png')}}" width="" class="pl-12 sm:pl-4 " alt="">
                  </div>
                  <div>
                    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">UI / UX <br>
                      Design
                    </h3>
                    <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
                  </div>
                </div>
              </div>

            </div>

            <div class="swiper-slide sm:flex  sm:justify-items-center sm:mx-[15%]">
              <div
                class=" text-[#F2994A] sm:mt-3  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[328px] sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-12 sm:pt-8">
                  <img src="{{asset('img/marketing.png')}}" class="pl-8 sm:pl-4 " alt="">
                  <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-5    ">Marketing &
                    Communication
                  </h3>

                </div>
              </div>
              <div
                class=" text-[#F2994A] hidden sm:block md:hidden  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-10 sm:pt-6 ">
                  <div>
                    <img src="{{asset('img/ui.png')}}" width="" class="pl-12 sm:pl-4 " alt="">
                  </div>
                  <div>
                    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">UI / UX <br>
                      Design
                    </h3>
                    <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
                  </div>
                </div>
              </div>

            </div>

            <div class="swiper-slide">
              <div
                class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-10 sm:pt-8 ">
                  <div>
                    <img src="{{asset('img/ui.png')}}" width="" class="pl-12 sm:pl-4 " alt="">
                  </div>
                  <div>
                    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">UI / UX <br>
                      Design
                    </h3>
                    <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
                  </div>
                </div>
              </div>

            </div>
            <div class="swiper-slide">
              <div
                class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-10 sm:pt-8 ">
                  <div>
                    <img src="{{asset('img/finance.png')}}" width="120px" class="pl-4 sm:pl-4 " alt="">
                  </div>
                  <div>
                    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-2    ">Finance
                      Management
                    </h3>
                    <p class="pl-2 text-[#828282] hover:text-[#F2F2F2]">230 Jobs Available</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-10 sm:pt-8 ">
                  <div>
                    <img src="{{asset('img/web.png')}}" width="90px" class="pl-4 sm:pl-4 " alt="">
                  </div>
                  <div>
                    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Web <br>
                      Development
                    </h3>
                    <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">100 Jobs Available</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-10 sm:pt-8 ">
                  <div>
                    <img src="{{asset('img/pm.png')}}" width="85px" class="pl-6 sm:pl-4 " alt="">
                  </div>
                  <div>
                    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Project
                      Management
                    </h3>
                    <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">87 Jobs Available</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-10 sm:pt-8 ">
                  <div>
                    <img src="{{asset('img/bisnis.png')}}" width="100px" class="pl-4 sm:pl-4 " alt="">
                  </div>
                  <div>
                    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Business &
                      Consulting
                    </h3>
                    <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">23 Jobs Available</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center pt-10 sm:pt-8 ">
                  <div>
                    <img src="{{asset('img/grapik.png')}}" width="90px" class="pl-6 sm:pl-4 " alt="">
                  </div>
                  <div>
                    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-2    ">Graphic <br>
                      Designer
                    </h3>
                    <p class="pl-2 text-[#828282] hover:text-[#F2F2F2]">65 Jobs Available</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class=" text-[#F2994A]  hover:text-white transition ease-in-out delay-150 bg-gray-50 hover:-translate-y-1 hover:scale-110 hover:bg-[#F2994A] duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
                <div class="flex justify-items-center  pt-10 sm:pt-8 ">
                  <div>
                    <img src="{{asset('img/video.png')}}" width="90px" class="pl-4 sm:pl-4 " alt="">
                  </div>
                  <div>
                    <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Video <br>
                      Editor
                    </h3>
                    <p class="pl-4 text-[#828282] hover:text-[#F2F2F2]">120 Jobs Available</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination "></div>
        </div>


        {{-- versi SM-MD-LG --}}
        <div class="hidden sm:hidden md:flex sm:flex-wrap sm:justify-center sm:mx-3  ">
          <div
            class=" text-slate-700   transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110  duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5 ">
              <div id="project" class="w-20 ml-2">

              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Project
                  Management
                </h3>
                <p class="pl-4 text-[#828282] ">87 tim tersedia</p>
              </div>
            </div>
          </div>

          <div
            class=" text-slate-700    transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center  pt-10 sm:pt-8 md:pt-6  xl:pt-5">
              <div id="editor" class="w-20 ml-2">

              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Video <br>
                  Editor
                </h3>
                <p class="pl-4 text-[#828282] ">120 tim tersedia</p>
              </div>
            </div>
          </div>


          <div
            class="text-slate-700    transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-10 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5 ">
              <div id="finance" class="w-32 -mt-5 ">

              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-2">Finance
                  Management
                </h3>
                <p class="pl-2 text-[#828282] ">230 tim tersedia</p>
              </div>
            </div>
          </div>
          <div
            class=" text-slate-700    transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110  duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5">
              <div id="web" class="w-20 ml-2">

              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Web <br>
                  Development
                </h3>
                <p class="pl-4 text-[#828282] ">100 tim tersedia</p>
              </div>
            </div>
          </div>
          <div
            class=" text-slate-700    transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110  duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5">
              <div id="graphic" class="w-20 ml-2">

              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-2    ">Graphic <br>
                  Designer
                </h3>
                <p class="pl-2 text-[#828282] ">65 tim tersedia</p>
              </div>
            </div>
          </div>
          <div
            class=" text-slate-700    transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110  duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5">
              <div id="analytics" class="w-20 ml-2">

              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">Business &
                  Consulting
                </h3>
                <p class="pl-4 text-[#828282] ">23 tim tersedia</p>
              </div>
            </div>
          </div>
          <div
            class=" text-slate-700    transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110  duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5 ">
              <div id="ui" class="w-24">

              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-4    ">UI / UX <br>
                  Design
                </h3>
                <p class="pl-4 text-[#828282] ">120 tim tersedia</p>
              </div>
            </div>
          </div>
          <div
            class=" text-slate-700   transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110  duration-300  rounded-3xl shadow-xl w-[300px] mt-3 sm:w-[250px]  h-[160px] sm:h-[120px]  mx-auto  sm:mx-4 mb-9 ">
            <div class="flex justify-items-center pt-10 sm:pt-8 md:pt-6 xl:pt-5 ">
              <div id="com" class="w-24">

              </div>
              <div>
                <h3 class="text-[21px] sm:text-[18px] font-bold font-poppins pl-2    ">Marketing &
                  Communication
                </h3>
                <p class="pl-4 text-[#828282] ">120 tim tersedia</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>



  {{-- fiture 2 --}}
  <section id="create-profile" class="md:mx-20 overflow-hidden  md:grid md:grid-cols-2 mt-10">
    <div id="member-lg" class="md:w-[700px] md:-ml-24 "></div>
    <div class="  p-8 md:p-12 lg:px-16 lg:py-24">
      <div class="md:mx-auto max-w-xl text-center sm:text-left">
        <h2 class="text-left text-xl font-bold text-gray-900 md:text-4xl">
          Join Your Dream Team
        </h2>

        <p class="text-left md:text-xl text-lg   md:mt-4 md:block">
          buat akun Anda sebagai anggota dan pilih tim favorit Anda, dapatkan proyek dengan tim Anda, dan tumbuh bersama
          tim
        </p>
        <div class="mt-2 md:mt-0 md:text-xl text-lg text-left">
          <p class="  md:mt-4 md:block">
            <i class='bx bxs-badge-check'></i> Cari team sesuai keinginan
          </p>
          <p class="  mt-1 md:block">
            <i class='bx bxs-badge-check'></i> Daftarkan diri sebagai member
          </p>
          <p class=" mt-1  md:block">
            <i class='bx bxs-badge-check'></i> Kerjakan project dengan tim
          </p>
          <p class=" mt-1  md:block">
            <i class='bx bxs-badge-check'></i> Task dan deadline
          </p>
          <p class=" mt-1  md:block">
            <i class='bx bxs-badge-check'></i> Chat dengan tim dan project manager
          </p>
        </div>

        {{-- <button type="button"
          class="text-white lg:ml-20 xl:ml-32 mx-[30%] sm:mx-4 sm:ml-14 mt-2  bg-[#F2994A] hover:bg-orange-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-6 ">Create
          Account</button> --}}

        <div class="mt-4 md:mt-8">
          <a href="#"
            class="inline-block rounded bg-blue-500 px-12 py-3 text-sm font-medium text-white transition hover:bg-emerald-700 focus:outline-none focus:ring focus:ring-yellow-400">
            Create Account
          </a>
        </div>
      </div>
    </div>


  </section>





  {{-- fiture 1 --}}

  <section class="md:first-letter:mx-20 overflow-hidden  md:grid md:grid-cols-2 mt-10">
    <div class="  p-8 md:p-12 lg:px-16 lg:py-24">
      <div class="mx-auto max-w-xl text-center sm:text-left">
        <h2 class="text-left text-xl font-bold text-gray-900 md:text-4xl">
          Create Your Dream Team
        </h2>

        <p class="text-left md:text-xl text-lg   md:mt-4 md:block">
          create your account as a member and choose your favorite team, get a project with your team, and grow with the
          team
        </p>
        <div class="mt-2 md:mt-0 md:text-xl text-lg text-left">
          <p class="  md:mt-4 md:block">
            <i class='bx bxs-badge-check'></i> Buat Tim sesuai keinginan
          </p>
          <p class=" mt-1  md:block">
            <i class='bx bxs-badge-check'></i> Rekrut member
          </p>
          <p class="mt-1   md:block">
            <i class='bx bxs-badge-check'></i> Buat project bersama tim
          </p>
          <p class="mt-1   md:block">
            <i class='bx bxs-badge-check'></i> Task dan deadline
          </p>
          <p class="  mt-1 md:block">
            <i class='bx bxs-badge-check'></i> Chat dengan tim dan member lain
          </p>

        </div>

        {{-- <button type="button"
          class="text-white lg:ml-20 xl:ml-32 mx-[30%] sm:mx-4 sm:ml-14 mt-2  bg-[#F2994A] hover:bg-orange-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-6 ">Create
          Account</button> --}}

        <div class=" md:mt-8">
          <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat
            Akun </button>
        </div>
      </div>
    </div>

    <div id="leader" class="xl:w-[800px] w-[500px] mx-auto xl:-ml-24"></div>
  </section>








  <section id="testimoni" class="bg-gray-100">
    <div class="mx-auto max-w-[1340px] px-4 py-16 sm:px-6 sm:py-24 lg:mr-0 lg:pl-8 lg:pr-0">
      <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:items-center lg:gap-x-16">
        <div class="max-w-xl text-center sm:text-left">
          <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
            Testimoni dari para member dan leader
            <br class="hidden sm:block lg:hidden" />

          </h2>

          <p class="mt-4 text-gray-500">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas
            veritatis illo placeat harum porro optio fugit a culpa sunt id!
          </p>

          <div class="hidden lg:mt-8 lg:flex lg:gap-4">
            <button
              class="prev-button rounded-full border border-pink-600 p-3 text-pink-600 hover:bg-pink-600 hover:text-white">
              <span class="sr-only">Previous Slide</span>
              <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
              </svg>
            </button>

            <button
              class="next-button rounded-full border border-pink-600 p-3 text-pink-600 hover:bg-pink-600 hover:text-white">
              <span class="sr-only">Next Slide</span>
              <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
              </svg>
            </button>
          </div>
        </div>

        <div class="-mx-6 lg:col-span-2 lg:mx-0">
          <div class="swiper-container !overflow-hidden">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                  <div>
                    <div class="flex gap-0.5 text-green-500">
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
                    </div>

                    <div class="mt-4">
                      <p class="text-2xl font-bold text-pink-600 sm:text-3xl">
                        Stayin' Alive
                      </p>

                      <p class="mt-4 leading-relaxed text-gray-500">
                        Website freelance ini sangat membantu saya dalam mencari proyek-proyek freelance baru. Selain
                        itu, saya juga mendapatkan banyak kesempatan untuk belajar dan berkembang bersama dengan tim
                        freelance yang saya ikuti
                      </p>
                    </div>
                  </div>

                  <footer class="mt-8 text-sm text-gray-500">
                    &mdash; Ifa Aprillianto
                  </footer>
                </blockquote>
              </div>

              <div class="swiper-slide">
                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                  <div>
                    <div class="flex gap-0.5 text-green-500">
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
                    </div>

                    <div class="mt-4">
                      <p class="text-2xl font-bold text-pink-600 sm:text-3xl">
                        Fitur Chat Grup
                      </p>

                      <p class="mt-4 leading-relaxed text-gray-500">
                        Saya sangat senang dengan fitur grup chat yang disediakan oleh website freelance ini. Dengan
                        adanya grup chat, saya dapat berkomunikasi dengan tim dan klien dengan mudah dan cepat, sehingga
                        proyek dapat berjalan dengan lancar
                      </p>
                    </div>
                  </div>

                  <footer class="mt-8 text-sm text-gray-500">
                    &mdash; Deva Apriana
                  </footer>
                </blockquote>
              </div>

              <div class="swiper-slide">
                <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                  <div>
                    <div class="flex gap-0.5 text-green-500">
                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>

                      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                      </svg>
                    </div>

                    <div class="mt-4">
                      <p class="text-2xl font-bold text-pink-600 sm:text-3xl">
                        Timleader
                      </p>

                      <p class="mt-4 leading-relaxed text-gray-500">
                        Sebagai timleader, saya sangat terbantu dengan adanya website freelance ini. Saya dapat dengan
                        mudah mencari anggota tim tambahan untuk proyek-proyek yang sedang kami kerjakan, dan
                        menemukan freelancer yang sesuai dengan proyek kami
                      </p>
                    </div>
                  </div>

                  <footer class="mt-8 text-sm text-gray-500">
                    &mdash; Budi, Timleader
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-8 flex justify-center gap-4 lg:hidden">
        <button aria-label="Previous slide"
          class="prev-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white">
          <svg class="h-5 w-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
          </svg>
        </button>

        <button aria-label="Next slide"
          class="next-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white">
          <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
          </svg>
        </button>
      </div>
    </div>
  </section>






  <div class="text-center mt-24  mb-12">
    <h1 class="  lg:text-3xl text-xs font-bold text-gray-700 dark:text-gray-200">Pertanyaan yang paling sering
      ditanyakan
    </h1>
    <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, quas.</p>

  </div>
  <div class="space-y-4 mx-10">
    <details class="group border-l-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden" open>
      <summary class="flex items-center justify-between cursor-pointer">
        <h2 class="text-lg font-medium text-gray-900">
          Apa itu Freelance?
        </h2>

        <span class="ml-1.5 flex-shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="flex-shrink-0 w-5 h-5 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </summary>

      <p class="mt-4 leading-relaxed text-gray-700">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
        molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
        voluptate dicta quo officiis explicabo consequuntur distinctio corporis
        earum similique!
      </p>
    </details>

    <details class="group border-l-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden">
      <summary class="flex items-center justify-between cursor-pointer">
        <h2 class="text-lg font-medium text-gray-900">
          Apakah saya bisa menjadi freelancer?
        </h2>

        <span class="ml-1.5 flex-shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="flex-shrink-0 w-5 h-5 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </summary>

      <p class="mt-4 leading-relaxed text-gray-700">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
        molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
        voluptate dicta quo officiis explicabo consequuntur distinctio corporis
        earum similique!
      </p>
    </details>

    <details class="group border-l-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden">
      <summary class="flex items-center justify-between cursor-pointer">
        <h2 class="text-lg font-medium text-gray-900">
          Apa saya bisa join lebih dari satu proyek?
        </h2>

        <span class="ml-1.5 flex-shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="flex-shrink-0 w-5 h-5 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </summary>

      <p class="mt-4 leading-relaxed text-gray-700">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
        molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
        voluptate dicta quo officiis explicabo consequuntur distinctio corporis
        earum similique!
      </p>
    </details>

    <details class="group border-l-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden">
      <summary class="flex items-center justify-between cursor-pointer">
        <h2 class="text-lg font-medium text-gray-900">
          Saya lulusan SMA, apakah saya bisa menjadi freelancer?
        </h2>

        <span class="ml-1.5 flex-shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="flex-shrink-0 w-5 h-5 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </summary>

      <p class="mt-4 leading-relaxed text-gray-700">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
        molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
        voluptate dicta quo officiis explicabo consequuntur distinctio corporis
        earum similique!
      </p>
    </details>

    <details class="group border-l-4 border-green-500 bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden">
      <summary class="flex items-center justify-between cursor-pointer">
        <h2 class="text-lg font-medium text-gray-900">
          Apakah peserta magang masih bisa mengikuti kegiatan perkuliahan di kampus selama pelaksanaan magang?
        </h2>

        <span class="ml-1.5 flex-shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="flex-shrink-0 w-5 h-5 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </summary>

      <p class="mt-4 leading-relaxed text-gray-700">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
        molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
        voluptate dicta quo officiis explicabo consequuntur distinctio corporis
        earum similique!
      </p>
    </details>
  </div>







  {{-- footer --}}

  <footer aria-label="Site Footer" class="bg-white mt-20">
    <div class="max-w-screen-xl px-4 py-16 mx-auto space-y-8 sm:px-6 lg:space-y-16 lg:px-8">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <div>
          <div class="text-teal-600">

            <path
              d="M37.83 19.2047C37.2352 19.237 36.6469 19.0679 36.16 18.7247C35.9566 18.5739 35.7929 18.3758 35.6831 18.1476C35.5733 17.9193 35.5208 17.6678 35.53 17.4147V8.1447C35.5252 8.1055 35.5293 8.0656 35.5422 8.0282C35.555 7.9908 35.5762 7.9569 35.6042 7.9289C35.6322 7.9009 35.6661 7.8797 35.7035 7.8669C35.7409 7.854 35.7808 7.8499 35.82 7.8547H37.5C37.69 7.8547 37.78 7.9547 37.78 8.1447V16.6947C37.78 17.0747 37.95 17.2647 38.3 17.2647C38.4484 17.2708 38.5968 17.254 38.74 17.2147C38.94 17.2147 39.05 17.2747 39.06 17.4547L39.21 18.7047C39.2172 18.7412 39.2165 18.7787 39.208 18.8149C39.1995 18.851 39.1833 18.885 39.1605 18.9143C39.1378 18.9437 39.109 18.9679 39.0762 18.9852C39.0433 19.0025 39.0071 19.0126 38.97 19.0147C38.602 19.1363 38.2175 19.2004 37.83 19.2047Z"
              fill="currentColor" />
            <path
              d="M47.28 18.1347C46.4359 18.8322 45.375 19.2137 44.28 19.2137C43.185 19.2137 42.1242 18.8322 41.28 18.1347C40.5381 17.3857 40.1218 16.374 40.1218 15.3197C40.1218 14.2654 40.5381 13.2537 41.28 12.5047C42.1258 11.8108 43.186 11.4316 44.28 11.4316C45.374 11.4316 46.4342 11.8108 47.28 12.5047C48.0049 13.2606 48.4096 14.2674 48.4096 15.3147C48.4096 16.362 48.0049 17.3688 47.28 18.1247V18.1347ZM42.86 16.8147C43.2518 17.1696 43.7614 17.3661 44.29 17.3661C44.8186 17.3661 45.3283 17.1696 45.72 16.8147C46.0746 16.4071 46.2698 15.885 46.2698 15.3447C46.2698 14.8045 46.0746 14.2824 45.72 13.8747C45.3283 13.5199 44.8186 13.3233 44.29 13.3233C43.7614 13.3233 43.2518 13.5199 42.86 13.8747C42.5055 14.2824 42.3102 14.8045 42.3102 15.3447C42.3102 15.885 42.5055 16.4071 42.86 16.8147Z"
              fill="currentColor" />
            <path
              d="M57.66 11.6847C57.85 11.6847 57.94 11.7847 57.94 11.9747V19.1447C57.9575 19.6287 57.8669 20.1104 57.6749 20.5549C57.4829 20.9995 57.1943 21.3957 56.83 21.7147C56.0214 22.4042 54.9816 22.7615 53.92 22.7147C52.9612 22.7484 52.0151 22.4866 51.21 21.9647C50.8662 21.739 50.5725 21.4449 50.3472 21.1009C50.1218 20.7568 49.9696 20.3701 49.9 19.9647C49.9 19.7647 49.9 19.6747 50.17 19.6747H51.85C51.9213 19.6771 51.9905 19.7002 52.049 19.741C52.1076 19.7818 52.1531 19.8386 52.18 19.9047C52.289 20.2084 52.5062 20.4613 52.79 20.6147C53.1359 20.7932 53.5209 20.8826 53.91 20.8747C54.1448 20.8876 54.3798 20.8535 54.6013 20.7745C54.8228 20.6956 55.0263 20.5732 55.2 20.4147C55.3587 20.2489 55.4821 20.0526 55.5629 19.8378C55.6437 19.623 55.6801 19.394 55.67 19.1647V18.5347C55.0685 18.9771 54.3364 19.2059 53.59 19.1847C53.0676 19.2037 52.5468 19.117 52.0587 18.9297C51.5707 18.7423 51.1256 18.4584 50.75 18.0947C50.0291 17.3489 49.6261 16.3521 49.6261 15.3147C49.6261 14.2774 50.0291 13.2806 50.75 12.5347C51.1274 12.1743 51.5731 11.8931 52.0608 11.7076C52.5486 11.5221 53.0685 11.4361 53.59 11.4547C54.358 11.4344 55.1098 11.678 55.72 12.1447V11.9847C55.7154 11.9464 55.7194 11.9075 55.7317 11.8709C55.744 11.8344 55.7643 11.801 55.7911 11.7732C55.8179 11.7454 55.8506 11.724 55.8867 11.7104C55.9229 11.6968 55.9616 11.6915 56 11.6947L57.66 11.6847ZM53.78 17.4047C54.0376 17.4127 54.2939 17.364 54.5306 17.262C54.7673 17.1601 54.9788 17.0074 55.15 16.8147C55.4825 16.3854 55.6629 15.8577 55.6629 15.3147C55.6629 14.7717 55.4825 14.2441 55.15 13.8147C54.9794 13.6247 54.7692 13.4742 54.5343 13.374C54.2993 13.2738 54.0453 13.2263 53.79 13.2347C53.5294 13.2265 53.2702 13.275 53.0302 13.3769C52.7902 13.4788 52.5752 13.6316 52.4 13.8247C52.0317 14.2354 51.838 14.7735 51.86 15.3247C51.842 15.8705 52.0314 16.4029 52.39 16.8147C52.5656 17.0073 52.7807 17.1598 53.0206 17.2616C53.2605 17.3634 53.5195 17.4122 53.78 17.4047Z"
              fill="currentColor" />
            <path
              d="M66.57 18.1347C65.7242 18.8286 64.664 19.2078 63.57 19.2078C62.476 19.2078 61.4158 18.8286 60.57 18.1347C59.8445 17.3771 59.4395 16.3687 59.4395 15.3197C59.4395 14.2708 59.8445 13.2623 60.57 12.5047C61.4166 11.8126 62.4765 11.4345 63.57 11.4345C64.6635 11.4345 65.7234 11.8126 66.57 12.5047C67.2949 13.2606 67.6996 14.2674 67.6996 15.3147C67.6996 16.362 67.2949 17.3688 66.57 18.1247V18.1347ZM62.14 16.8147C62.3317 16.9971 62.5577 17.1396 62.8049 17.234C63.0521 17.3284 63.3155 17.3729 63.58 17.3647C63.8428 17.3715 64.1044 17.3265 64.3498 17.2321C64.5952 17.1377 64.8195 16.9959 65.01 16.8147C65.3588 16.4043 65.5503 15.8833 65.5503 15.3447C65.5503 14.8061 65.3588 14.2851 65.01 13.8747C64.8195 13.6936 64.5952 13.5517 64.3498 13.4574C64.1044 13.363 63.8428 13.3179 63.58 13.3247C63.3155 13.3166 63.0521 13.361 62.8049 13.4554C62.5577 13.5498 62.3317 13.6924 62.14 13.8747C61.7913 14.2851 61.5998 14.8061 61.5998 15.3447C61.5998 15.8833 61.7913 16.4043 62.14 16.8147Z"
              fill="currentColor" />
            <path
              d="M71.31 9.9847C71.0457 10.2161 70.7063 10.3436 70.355 10.3436C70.0037 10.3436 69.6644 10.2161 69.4 9.9847C69.2802 9.8716 69.1847 9.7352 69.1194 9.5839C69.0542 9.4326 69.0205 9.2695 69.0205 9.1047C69.0205 8.9399 69.0542 8.7769 69.1194 8.6255C69.1847 8.4742 69.2802 8.3378 69.4 8.2247C69.6671 7.9991 70.0054 7.8754 70.355 7.8754C70.7046 7.8754 71.0429 7.9991 71.31 8.2247C71.4299 8.3378 71.5254 8.4742 71.5906 8.6255C71.6559 8.7769 71.6895 8.9399 71.6895 9.1047C71.6895 9.2695 71.6559 9.4326 71.5906 9.5839C71.5254 9.7352 71.4299 9.8716 71.31 9.9847ZM71.52 19.2047C70.9256 19.2339 70.3383 19.0651 69.85 18.7247C69.6497 18.5717 69.4888 18.3729 69.381 18.145C69.2731 17.9171 69.2213 17.6667 69.23 17.4147V11.9747C69.2252 11.9355 69.2293 11.8956 69.2422 11.8582C69.255 11.8208 69.2762 11.7869 69.3042 11.7589C69.3322 11.7309 69.3661 11.7097 69.4035 11.6969C69.4409 11.684 69.4808 11.6799 69.52 11.6847H71.2C71.39 11.6847 71.48 11.7847 71.48 11.9747V16.6947C71.48 17.0747 71.65 17.2647 71.99 17.2647C72.1417 17.2702 72.2933 17.2533 72.44 17.2147C72.64 17.2147 72.75 17.2747 72.76 17.4547L72.91 18.7047C72.9172 18.7412 72.9165 18.7787 72.908 18.8149C72.8995 18.851 72.8833 18.885 72.8605 18.9143C72.8378 18.9437 72.809 18.9679 72.7762 18.9852C72.7433 19.0025 72.7071 19.0126 72.67 19.0147C72.2988 19.137 71.9109 19.2011 71.52 19.2047Z"
              fill="currentColor" />
            <path
              d="M79.09 11.4447C79.6148 11.424 80.1383 11.5089 80.6296 11.6944C81.1209 11.88 81.57 12.1623 81.95 12.5247C82.6572 13.2837 83.0504 14.2824 83.0504 15.3197C83.0504 16.357 82.6572 17.3558 81.95 18.1147C81.5718 18.4804 81.1233 18.7655 80.6317 18.9528C80.1401 19.1402 79.6157 19.2259 79.09 19.2047C78.3412 19.2214 77.6073 18.9932 77 18.5547V22.1647C77 22.3547 76.9 22.4447 76.71 22.4447H75.03C74.9917 22.4519 74.9522 22.4496 74.9149 22.4381C74.8777 22.4265 74.8438 22.4061 74.8162 22.3785C74.7887 22.3509 74.7682 22.3171 74.7567 22.2798C74.7451 22.2426 74.7429 22.2031 74.75 22.1647V13.9647C74.7618 13.8845 74.7546 13.8027 74.7292 13.7257C74.7037 13.6488 74.6605 13.5788 74.6032 13.5215C74.5459 13.4642 74.476 13.4211 74.399 13.3956C74.3221 13.3701 74.2402 13.363 74.16 13.3747H73.83C73.61 13.3747 73.5 13.2947 73.5 13.1347V11.9547C73.4948 11.8817 73.5148 11.8091 73.5567 11.7491C73.5985 11.689 73.6597 11.6451 73.73 11.6247C74.0759 11.499 74.442 11.438 74.81 11.4447C75.177 11.4122 75.5453 11.4901 75.8678 11.6682C76.1902 11.8464 76.4522 12.1168 76.62 12.4447C76.9421 12.1189 77.3273 11.8622 77.752 11.6902C78.1767 11.5183 78.632 11.4347 79.09 11.4447ZM77.53 16.8147C77.7083 17.0011 77.9225 17.1494 78.1597 17.2507C78.3969 17.352 78.6521 17.4042 78.91 17.4042C79.1679 17.4042 79.4232 17.352 79.6603 17.2507C79.8975 17.1494 80.1117 17.0011 80.29 16.8147C80.6656 16.3958 80.8629 15.8469 80.84 15.2847C80.8662 14.7221 80.6684 14.1719 80.29 13.7547C80.1117 13.5684 79.8975 13.4201 79.6603 13.3188C79.4232 13.2174 79.1679 13.1652 78.91 13.1652C78.6521 13.1652 78.3969 13.2174 78.1597 13.3188C77.9225 13.4201 77.7083 13.5684 77.53 13.7547C77.1662 14.1793 76.9768 14.726 77 15.2847C76.9797 15.843 77.1688 16.3887 77.53 16.8147Z"
              fill="currentColor" />
            <path
              d="M87.77 19.2047C86.8723 19.2416 85.9822 19.0269 85.2 18.5847C84.8862 18.3957 84.619 18.1384 84.4181 17.832C84.2173 17.5256 84.0881 17.1779 84.04 16.8147C84.04 16.6147 84.11 16.5147 84.33 16.5147H85.8C85.8699 16.5175 85.9378 16.5394 85.996 16.5783C86.0542 16.6171 86.1006 16.6712 86.13 16.7347C86.34 17.2747 86.89 17.5447 87.77 17.5447C88.077 17.5588 88.3826 17.4969 88.66 17.3647C88.7558 17.3215 88.8379 17.2531 88.8978 17.1668C88.9577 17.0805 88.993 16.9795 89 16.8747C89 16.6147 88.84 16.4347 88.52 16.3147C88.1405 16.1884 87.7481 16.1045 87.35 16.0647C86.8785 16.0113 86.4109 15.9278 85.95 15.8147C85.5018 15.7133 85.0943 15.4799 84.78 15.1447C84.5949 14.9169 84.4587 14.6534 84.3797 14.3707C84.3008 14.088 84.2809 13.792 84.3212 13.5013C84.3616 13.2105 84.4613 12.9311 84.6142 12.6806C84.7671 12.43 84.9699 12.2136 85.21 12.0447C85.9308 11.5856 86.7765 11.3619 87.63 11.4047C88.4564 11.3768 89.274 11.5812 89.99 11.9947C90.2786 12.1582 90.527 12.3839 90.7173 12.6555C90.9076 12.9271 91.0349 13.2377 91.09 13.5647C91.09 13.7647 91 13.8647 90.82 13.8647H89.34C89.2777 13.8684 89.2157 13.8532 89.1622 13.8211C89.1087 13.789 89.0661 13.7414 89.04 13.6847C88.9411 13.4479 88.7549 13.2581 88.52 13.1547C88.255 13.0161 87.959 12.9472 87.66 12.9547C87.3669 12.9388 87.0745 12.9973 86.81 13.1247C86.7168 13.1607 86.6366 13.2237 86.5795 13.3057C86.5225 13.3877 86.4913 13.4849 86.49 13.5847C86.4964 13.7215 86.5465 13.8526 86.6329 13.9588C86.7193 14.065 86.8374 14.1406 86.97 14.1747C87.354 14.3195 87.7533 14.4201 88.16 14.4747C88.6277 14.5363 89.0917 14.6231 89.55 14.7347C89.9982 14.8362 90.4057 15.0695 90.72 15.4047C90.8882 15.5894 91.018 15.8055 91.1021 16.0407C91.1862 16.2758 91.2229 16.5253 91.21 16.7747C91.2186 17.1204 91.1375 17.4624 90.9745 17.7674C90.8115 18.0723 90.5722 18.3298 90.28 18.5147C89.5329 18.9944 88.6574 19.235 87.77 19.2047Z"
              fill="currentColor" />
            <path
              d="M101.78 18.7047C101.786 18.7402 101.784 18.7765 101.776 18.8114C101.767 18.8464 101.752 18.8792 101.73 18.9081C101.709 18.937 101.682 18.9613 101.651 18.9796C101.62 18.9979 101.586 19.0098 101.55 19.0147C101.185 19.1339 100.804 19.198 100.42 19.2047C100.04 19.2441 99.656 19.1847 99.306 19.0323C98.955 18.8799 98.65 18.6396 98.42 18.3347C97.714 18.942 96.8 19.2536 95.87 19.2047C95.438 19.2246 95.007 19.1539 94.604 18.9972C94.201 18.8405 93.835 18.6012 93.53 18.2947C93.227 17.9736 92.9922 17.5946 92.8392 17.1805C92.6863 16.7664 92.6186 16.3257 92.64 15.8847V11.9747C92.64 11.7847 92.73 11.6847 92.92 11.6847H94.6C94.79 11.6847 94.88 11.7847 94.88 11.9747V15.5847C94.862 16.0345 95.015 16.4743 95.31 16.8147C95.457 16.9707 95.636 17.0933 95.834 17.1744C96.032 17.2555 96.246 17.2931 96.46 17.2847C96.679 17.2943 96.898 17.2604 97.104 17.1848C97.31 17.1093 97.499 16.9937 97.66 16.8447C97.812 16.6877 97.931 16.5011 98.008 16.2964C98.086 16.0917 98.12 15.8733 98.11 15.6547V11.9747C98.11 11.7847 98.2 11.6847 98.39 11.6847H100.09C100.28 11.6847 100.37 11.7847 100.37 11.9747V16.6847C100.37 17.0747 100.54 17.2647 100.87 17.2647C101.025 17.2707 101.18 17.2539 101.33 17.2147C101.368 17.2041 101.408 17.2022 101.446 17.2092C101.485 17.2161 101.521 17.2317 101.553 17.2548C101.585 17.2779 101.611 17.3079 101.63 17.3425C101.648 17.3771 101.658 17.4155 101.66 17.4547L101.78 18.7047Z"
              fill="currentColor" />
            <path
              d="M117.67 18.7047C117.679 18.7405 117.68 18.7779 117.673 18.8141C117.665 18.8502 117.65 18.8844 117.628 18.914C117.606 18.9436 117.578 18.968 117.545 18.9854C117.513 19.0029 117.477 19.0129 117.44 19.0147C117.068 19.1356 116.681 19.1997 116.29 19.2047C115.695 19.2354 115.108 19.0665 114.62 18.7247C114.409 18.5783 114.238 18.3822 114.121 18.1537C114.004 17.9252 113.945 17.6713 113.95 17.4147V15.0647C113.971 14.6163 113.821 14.1766 113.53 13.8347C113.39 13.6784 113.216 13.5552 113.023 13.4739C112.829 13.3927 112.62 13.3554 112.41 13.3647C112.221 13.3576 112.033 13.3935 111.859 13.4697C111.686 13.5459 111.533 13.6605 111.41 13.8047C111.146 14.1398 111.011 14.5586 111.03 14.9847V18.6747C111.03 18.8647 110.94 18.9647 110.75 18.9647H109.06C109.021 18.9696 108.981 18.9654 108.944 18.9526C108.906 18.9397 108.872 18.9185 108.844 18.8905C108.816 18.8626 108.795 18.8286 108.782 18.7912C108.769 18.7538 108.765 18.714 108.77 18.6747V15.0647C108.792 14.6212 108.653 14.1846 108.38 13.8347C108.258 13.6877 108.105 13.5694 107.932 13.4882C107.76 13.407 107.571 13.3648 107.38 13.3647C107.176 13.3565 106.973 13.3914 106.783 13.4673C106.593 13.5431 106.422 13.6581 106.28 13.8047C105.994 14.1291 105.847 14.5529 105.87 14.9847V18.6747C105.875 18.714 105.871 18.7538 105.858 18.7912C105.845 18.8286 105.824 18.8626 105.796 18.8905C105.768 18.9185 105.734 18.9397 105.697 18.9526C105.659 18.9654 105.619 18.9696 105.58 18.9647H103.95C103.76 18.9647 103.67 18.8647 103.67 18.6747V13.9647C103.682 13.8845 103.675 13.8027 103.649 13.7257C103.624 13.6488 103.581 13.5788 103.523 13.5215C103.466 13.4642 103.396 13.4211 103.319 13.3956C103.242 13.3701 103.16 13.363 103.08 13.3747H102.75C102.53 13.3747 102.42 13.2947 102.42 13.1347V11.9547C102.415 11.8817 102.435 11.8091 102.477 11.7491C102.519 11.689 102.58 11.6451 102.65 11.6247C102.996 11.499 103.362 11.438 103.73 11.4447C104.083 11.4146 104.438 11.485 104.753 11.6478C105.068 11.8106 105.33 12.0591 105.51 12.3647C105.847 12.045 106.247 11.7982 106.684 11.6399C107.121 11.4816 107.586 11.4152 108.05 11.4447C108.501 11.4227 108.95 11.5072 109.362 11.6914C109.774 11.8756 110.136 12.1542 110.42 12.5047C110.751 12.145 111.158 11.8634 111.611 11.68C112.064 11.4967 112.552 11.4164 113.04 11.4447C113.476 11.4243 113.912 11.4946 114.32 11.6513C114.728 11.8079 115.099 12.0474 115.41 12.3547C115.714 12.6752 115.949 13.0541 116.102 13.4684C116.255 13.8826 116.323 14.3237 116.3 14.7647V16.6947C116.3 17.0747 116.47 17.2647 116.79 17.2647C116.945 17.2719 117.1 17.2551 117.25 17.2147C117.457 17.2147 117.567 17.2947 117.58 17.4547L117.67 18.7047Z"
              fill="currentColor" />
            <path
              d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
              fill="currentColor" />
            </svg>
          </div>

          <p class="max-w-xs mt-4 text-gray-500">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse non
            cupiditate quae nam molestias.
          </p>

          <ul class="flex gap-6 mt-8">
            <li>
              <a href="/" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                <span class="sr-only">Facebook</span>

                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>

            <li>
              <a href="/" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                <span class="sr-only">Instagram</span>

                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>

            <li>
              <a href="/" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                <span class="sr-only">Twitter</span>

                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
            </li>

            <li>
              <a href="/" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                <span class="sr-only">GitHub</span>

                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>

            <li>
              <a href="/" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:opacity-75">
                <span class="sr-only">Dribbble</span>

                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                    clip-rule="evenodd" />
                </svg>
              </a>
            </li>
          </ul>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4">
          <div>
            <p class="font-medium text-gray-900">Services</p>

            <nav aria-label="Footer Navigation - Services" class="mt-6">
              <ul class="space-y-4 text-sm">
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    1on1 Coaching
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Company Review
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Accounts Review
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    HR Consulting
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    SEO Optimisation
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          <div>
            <p class="font-medium text-gray-900">Company</p>

            <nav aria-label="Footer Navigation - Company" class="mt-6">
              <ul class="space-y-4 text-sm">
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    About
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Meet the Team
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Accounts Review
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          <div>
            <p class="font-medium text-gray-900">Helpful Links</p>

            <nav aria-label="Footer Navigation - Company" class="mt-6">
              <ul class="space-y-4 text-sm">
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Contact
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    FAQs
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Live Chat
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          <div>
            <p class="font-medium text-gray-900">Legal</p>

            <nav aria-label="Footer Navigation - Legal" class="mt-6">
              <ul class="space-y-4 text-sm">
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Accessibility
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Returns Policy
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Refund Policy
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Hiring Statistics
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <p class="text-xs text-gray-500">
        &copy; 2022. Company Name. All rights reserved.
      </p>
    </div>
  </footer>











  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  {{-- <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script> --}}
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>

  <script async src="https://unpkg.com/es-module-shims@1.3.6/dist/es-module-shims.js"></script>

  <script type="importmap">
    {
      "imports": {
        "three": "https://unpkg.com/three@0.149.0/build/three.module.js",
        "controls": "https://unpkg.com/three@0.149.0/examples/jsm/controls/OrbitControls.js",
        "loader": "https://unpkg.com/three@0.149.0/examples/jsm/loaders/GLTFLoader.js"
      }
    }
  </script>
  {{--
  <script type="module">
    import * as THREE from 'three';
    import {OrbitControls} from 'controls';
    import { GLTFLoader } from 'loader';
 
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
 
    const renderer = new THREE.WebGLRenderer({alpha: true});
    renderer.setSize( window.innerWidth, window.innerHeight );
    document.body.appendChild( renderer.domElement );
 
 
    const controls = new OrbitControls( camera, renderer.domElement );
 
 
 
    camera.position.z = 10;
 
    const ambientLight = new THREE.AmbientLight( 0xffffff, 1 ); // soft white light
    scene.add( ambientLight );
 
    // const PointLight = new THREE.PointLight( 0xffffff, 1, 10 );
    // PointLight.position.set( 50, 50, 50 );
    // scene.add( PointLight );
 
    scene.add( new THREE.AmbientLight(0x4000ff) )
 
    let light = new THREE.DirectionalLight(0xffffff, 2)
    light.position.set(10, 20, 15)
    scene.add(light)
 
    const loader = new GLTFLoader();
    let isometric;
    loader.load( "{{asset('/assets/isometric.glb')}}", function ( gltf ) {
      isometric = gltf.scene;
      // isometric.scale.set(30,30,30);
      scene.add( isometric );
 
    } );
 
    function animate() {
      requestAnimationFrame( animate );
      renderer.render( scene, camera );
    }
    animate();
  </script> --}}

  <script src="https://cdn.jsdelivr.net/npm/lottie-web@5.7.5/build/player/lottie.min.js"></script>
  <script>
    var animation = bodymovin.loadAnimation({
      container: document.getElementById('lottie'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: '{{asset('lottie/43392-marketing.json')}}'
    })
  </script>


  <script>
    var animation = bodymovin.loadAnimation({
    container: document.getElementById('graphic'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '{{asset('lottie/38373-icon-graphic-designer.json')}}'
  })
  </script>




  <script>
    var animation = bodymovin.loadAnimation({
    container: document.getElementById('web'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '{{asset('lottie/121574-web-development.json')}}'
  })
  </script>

  <script>
    var animation = bodymovin.loadAnimation({
    container: document.getElementById('lottie-home'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '{{asset('lottie/133894-arrow-arc.json')}}'
  })
  </script>


  <script>
    var animation = bodymovin.loadAnimation({
  container: document.getElementById('analytics'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '{{asset('lottie/68474-analytics.json')}}'
})
  </script>

  <script>
    var animation = bodymovin.loadAnimation({
  container: document.getElementById('leader'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '{{asset('lottie/leader.json')}}'
})
  </script>

  <script>
    var animation = bodymovin.loadAnimation({
  container: document.getElementById('member-lg'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '{{asset('lottie/member.json')}}'
})
  </script>



  <script>
    var animation = bodymovin.loadAnimation({
container: document.getElementById('com'),
renderer: 'svg',
loop: true,
autoplay: true,
path: '{{asset('lottie/106080-digital-marketing-or-promotion-in-app-animation.json')}}'
})
  </script>


  <script>
    var animation = bodymovin.loadAnimation({
container: document.getElementById('project'),
renderer: 'svg',
loop: true,
autoplay: true,
path: '{{asset('lottie/64417-project-management.json')}}'
})
  </script>



  <script>
    var animation = bodymovin.loadAnimation({
container: document.getElementById('project1'),
renderer: 'svg',
loop: true,
autoplay: true,
path: '{{asset('lottie/64417-project-management.json')}}'
})
  </script>

  <script>
    var animation = bodymovin.loadAnimation({
container: document.getElementById('finance'),
renderer: 'svg',
loop: true,
autoplay: true,
path: '{{asset('lottie/122848-graph.json')}}'
})
  </script>



  <script>
    var animation = bodymovin.loadAnimation({
    container: document.getElementById('lottie-home-laptop'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: '{{asset('lottie/63487-programming-computer.json')}}'
  })
  </script>


  <script>
    var animation = bodymovin.loadAnimation({
  container: document.getElementById('editor'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '{{asset('lottie/70482-produccion-audiovisual.json')}}'
})
  </script>

  <script>
    var animation = bodymovin.loadAnimation({
container: document.getElementById('ui'),
renderer: 'svg',
loop: true,
autoplay: true,
path: '{{asset('lottie/93152-ui-app-icon.json')}}'
})
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 32,
        autoplay: {
          delay: 8000,
        },
        breakpoints: {
          640: {
            centeredSlides: true,
            slidesPerView: 1.25,
          },
          1024: {
            centeredSlides: false,
            slidesPerView: 1.5,
          },
        },
        navigation: {
          nextEl: '.next-button',
          prevEl: '.prev-button',
        },
      })
    })
  </script>


  <script src="sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    Swal.fire({
  html:`<img src="{{asset('img/Petunjuk Penggunaan Website (2).png')}}" width="100%" class="pl-4 sm:pl-4 " alt="">`,
  width:`1000px`,
  showClass: {
    popup: 'animate_animated animate_fadeInDown'
  },
  hideClass: {
    popup: 'animate_animated animate_fadeOutUp'
  }
})
  </script>
</body>

</html>