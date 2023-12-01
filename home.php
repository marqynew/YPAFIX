<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no"
    />
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Menghitung Mimpi - YPA</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        darkMode: "class",
      };
      
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"
      defer
    ></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">

    <link rel="stylesheet" href="ypa28.css" />
    
  <title>Team Cards</title>
  <link rel="stylesheet" type="text/css" href="ourteam10.css">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500&family=IBM+Plex+Serif:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  

  <body>

  <div class="logo">
            <img src="YPAlogo-removebg-preview.png" alt="Logo">
        </div>

     

    <header class="bg-black">
      <nav
        class="mx-auto flex max-w-7xl items-center justify-end p-6 lg:px-8"
        aria-label="Global"
      >
        <div class="hidden lg:flex lg:gap-x-12">
          <div x-data="{ open: false }" class="relative" >
            <button
              @click="open = !open"
              type="button"
              class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-white"
              aria-expanded="false"
            >
              Financial tolls
              <svg
                class="h-5 w-5 flex-none text-white"
                viewBox="0 0 20 20"
                fill="currentColor"
                aria-hidden="true"
                style="margin-left: 10px;"
              >
              <path
                  fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"
                />
              </svg>
            </button>
            <div
              x-show="open"
              @click.away="open = false"
              class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5"
            >
              <div class="p-4">
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-black"
                  >
                    <svg
                      class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"
                      />
                    </svg>
                  </div>
                  <div class="flex-auto">
                    <a href="menikah.html" class="block font-semibold text-gray-900">
                      Menikah
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600" style="font-size:15px;">
                      Kapan kalian menikah
                    </p>
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-black"
                  >
                    <svg
                      class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"
                      />
                    </svg>
                  </div>
                  <div class="flex-auto">
                    <a href="kalkulatorinvestasi.html" class="block font-semibold text-gray-900">
                      Kalkulator Investasi
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600"style="font-size:15px;">
                      Atur strategi investasi terbaikmu
                    </p>
                    
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-black"
                  >
                    <svg
                      class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"
                      />
                    </svg>
                  </div>
                  <div class="flex-auto">
                    <a href="danapensiun.html" class="block font-semibold text-gray-900">
                      Dana Pensiun
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600"style="font-size:15px;">
                     Tua Foya Foya
                    </p>
                    
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-black"
                  >
                    <svg
                      class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"
                      />
                    </svg>
                  </div>
                  <div class="flex-auto">
                    <a href="DanaDarurat.html" class="block font-semibold text-gray-900">
                      Dana Darurat
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600"style="font-size:15px;">
                      Persiapan kondisi sulit
                    </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          <div x-data="{ open: false }" class="relative">
            <button
              @click="open = !open"
              type="button"
              class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-white"
              aria-expanded="false"
            >
              Artikel
              <svg
                class="h-5 w-5 flex-none text-white"
                viewBox="0 0 20 20"
                fill="currentColor"
                aria-hidden="true"
                style="margin-left: 20px;"
              >
              <path
                  fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"
                />
              </svg>
            </button>
            <div
              x-show="open"
              @click.away="open = false"
              class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5"
            >
              <div class="p-4">
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-black"
                  >
                    <svg
                      class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"
                      />
                    </svg>
                  </div>
                  <div class="flex-auto">
                    <a href="artikel.html" class="block font-semibold text-gray-900">
                      Artikel1
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600" style="font-size:15px;">
                      Mengelola Keuangan dengan Bijak
                    </p>
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-black"
                  >
                    <svg
                      class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"
                      />
                    </svg>
                  </div>
                  <div class="flex-auto">
                    <a href="artikel2.html" class="block font-semibold text-gray-900">
                      Artikel2
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600"style="font-size:15px;">
                      Perencanaan Keuangan dengan Baik
                    </p>
                    
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-black"
                  >
                    <svg
                      class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"
                      />
                    </svg>
                  </div>
                  <div class="flex-auto">
                    <a href="artikel3.html" class="block font-semibold text-gray-900">
                      Artikel3
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600"style="font-size:15px;">
                     Perencanaan Keuangan Yang Mengubah Hidup
                    </p>
                    
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-black"
                  >
                    <svg
                      class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"
                      />
                    </svg>
                  </div>
                  <div class="flex-auto">
                    <a href="artikel4.html" class="block font-semibold text-gray-900">
                      Artikel4
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600" style="font-size:15px;">
                      Mengelola Keuangan Pribadi untuk keuangan yang lebih Mantap
                    </p>
                  </div>
                </div>
                <div
                  class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50"
                >
                  <div
                    class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-black"
                  >
                    <svg
                      class="h-6 w-6 text-gray-600 group-hover:text-indigo-600"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"
                      />
                    </svg>
                  </div>
                  <div class="flex-auto">
                    <a href="artikel5.html" class="block font-semibold text-gray-900">
                      Artikel5
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600" style="font-size:15px;">
                      Melangkah lebih jauh
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <a href="index.php" class="text-sm font-semibold leading-6 text-white" 
            >Log in <span aria-hidden="true">&rarr;</span></a
          >   <svg
                class="h-5 w-5 flex-none text-white"
                viewBox="0 0 20 20"
                fill="currentColor"
                aria-hidden="true"
                style="margin-left: 10px;"
              >

              </svg>
          
        </div>
     </nav>
    </header>

    <div
      id="root"
      class="bg-slate-10 dark:bg-slate-900 font-body text-black dark:text-white"
    >
  
    <div class="bg-[#f8f1ff] w-[100%] mx-auto p-4 sm:p-6 dark:bg-slate-900 min-h-screen relative" >  
      <div
          class="grid grid-cols-12 border-b items-center border-slate-900 dark:border-slate-700 pb-6 pr-2"
        >
        
          <div class="col-span-10 text-left">
            
          <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white" style="font-size: 22px; margin-left: 30px;">Menghitung Mimpi</h1>
          <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white" style="font-size: 19px; margin-left: 29px;">Your goal of financial freedom <span class="text-blue-600 dark:text-blue-500">starts here! </span></h1>
          </div>
          
     <div class="col-span-2 text-right">
            <div
              id="darkMode"
              onclick="toggleDarkMode()"
              class="ml-auto flex float-right cursor-pointer text-center"
            >
              <img src="moon.png" class="w-6 h-6" />
            </div>
          </div>
        </div>

        <script>
          const toggleDarkMode = () => {
            const targ = $("html");
            targ.toggleClass("dark");
            if (targ.hasClass("dark")) {
              $("#darkMode").html('<img src="sun1.png" class="w-6 h-6" />');
              localStorage.setItem("mode", "dark");
            } else {
              $("#darkMode").html('<img src="moon.png" class="w-6 h-6" />');
              localStorage.setItem("mode", "light");
            }
          };
        </script>





<div class="bg-[#f8f1ff] w-[90%] mx-auto p-4 sm:p-6 dark:bg-slate-900 min-h-screen relative" >
    <div class="custom-bg-color" style="margin-top: 20px;  " >
     
      <div class="custom-bg-color rounded-md px-4 py-6 grid grid-cols-12 items-center my-4 sm:my-6 " >
        
        <div class="col-span-9" >
          <p class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white" style="font-size: 22px; margin-bottom: 8px;">
            Hii, Kami
          </p>
          <p class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white" style="font-size: 22px; margin-bottom: 8px;">
            Kelompok YPA
        </p>
          <p class="text-lg font-normal text-white-500 lg:text-xl  dark:text-white" style="font-size: 19px; margin-bottom: 8px;">
            Investment & Pengusaha di Industri Keuangan dan Investasi.
          </p>
          <p class="text-lg font-normal text-white-500 lg:text-xl  dark:text-white" style="font-size: 19px; margin-bottom: 8px;">
            Membantu mewujudkan tujuan keuangan Anda.
            <span class="fade-in" style="display: block; font-size: 12px; margin-top: 120px;">
              #PinjamDuluSeratus
            </span>
          </p>
        </div>
        <div class="col-span-3 text-center -mt-4">
          <img src="YPAA.jpg.png" class="mx-auto" alt="YPAA Logo" />
        </div>
      </div>
      
    </div>
  


        <div
          x-data="carousel()"
          x-init="init()"
          class="relative max-w-screen-lg mx-auto"
        >
        
        <script>
          function carousel() {
            return {
              images: [
                "https://via.placeholder.com/800x400?text=Image+1",
                "https://via.placeholder.com/800x400?text=Image+2",
                "https://via.placeholder.com/800x400?text=Image+3",
                // Add more image URLs as needed
              ],
              currentSlide: 0,

              init() {
                this.showSlide();
              },

              showSlide() {
                const container = this.$refs.container;

                container.style.transform = `translateX(-${
                  this.currentSlide * 100
                }%)`;
              },

              next() {
                this.currentSlide =
                  (this.currentSlide + 1) % this.images.length;
                this.showSlide();
              },

              prev() {
                this.currentSlide =
                  (this.currentSlide - 1 + this.images.length) %
                  this.images.length;
                this.showSlide();
              },
            };
          }
        </script>


<div class="blobbb">
        <div class="my-12 sm:my-16" >
          <h3 class="font-bold sm:text-lg mb-8" >Apa Mimpimu?</h3>
          <div class="grid grid-cols-3 gap-x-4 gap-y-12"  >

       

            <a href="menikah.html" class="text-center group "  style="margin-right:-450px;" >
              <div
                class="relative transition-colors bg-stone-300 dark:bg-stone-500 group-hover:bg-primary-600 dark:group-hover:bg-primary-400 inline-block rounded-md " 
              >
            <button class="blue2-button" >
                <img
                  src="wedding-rings.png"
                  class="p-3 rounded-md w-12 h-12 relative items-center justify-center mx-auto block"
                  alt=""
                />
              </div>
              </button>
              <div class="font-bold text-xs sm:text-sm mt-1.5"  >Menikah</div>
            </a>

            <a href="danadarurat.html" class="text-center group " style="margin-right:-200px;">
              <div
                class="relative transition-colors bg-stone-300 dark:bg-stone-500 group-hover:bg-primary-600 dark:group-hover:bg-primary-400 inline-block rounded-md after:animate-pulse after:content-[&quot;New&quot;] after:text-white after:absolute after:bg-red-500 after:-top-1 after:-left-4 after:-rotate-45 after:uppercase after:font-bold after:text-[0.5rem] sm:after:text-xxs after:px-1 after:py-0.5 after:rounded after:z-50"
              >
            <button class="blue2-button">
                <img
                  src="DanaDarurat.png"
                  class="p-3 rounded-md w-12 h-12 relative items-center justify-center mx-auto block"
                  alt=""
                />
              </div>
              </button>
              <div class="font-bold text-xs sm:text-sm mt-1.5" >Dana Darurat</div>
            </a> 
            
            <a href="danapensiun.html" class="text-center group">
              <div
                class="relative transition-colors bg-stone-300 dark:bg-stone-500 group-hover:bg-primary-600 dark:group-hover:bg-primary-400 inline-block rounded-md "
              >
            <button class="blue2-button">
                <img
                  src="pension.png"
                  class="p-3 rounded-md w-12 h-12 relative items-center justify-center mx-auto block"
                  alt=""
                />
            </button>
              </div>
              <div class="font-bold text-xs sm:text-sm mt-1.5" >
                Dana Pensiun
              </div>
            </a>
          
            <a href="kalkulatorinvestasi.html" class="text-center group" style="margin-top : -142px;">
            <button class="blue-button">
            <div class="font-bold text-xs sm:text-sm mt-1.5">
                <img
                  src="calculator.png"
                  class="p-3 rounded-md w-12 h-12 relative items-center justify-center mx-auto block " class="-image"
                  alt=""
                />
              </div>
              </button>
              <div class="font-bold text-xs sm:text-sm mt-1.5">
                Kalkulator Investasi
              </div>
              </a>
          </div>
        </div>
</div>
      
  
<div class="blobbb2" >
<h3 class="font-bold sm:text-lg mb-8" >Segera Hadir</h3>
        <div class="grid grid-cols-3 gap-x-4 gap-y-12">
          <a
              href="kendaraan.html" class="text-center group"
            >
              <div
                class="relative transition-colors bg-stone-300 dark:bg-stone-500 group-hover:bg-primary-600 dark:group-hover:bg-primary-400 inline-block rounded-md"
              >
              <button class="grey-button">
                <img
                  src="Kendaraan.png"
                  class="p-3 rounded-md w-12 h-12 relative items-center justify-center mx-auto block"
                  alt=""
                />
              </button>
              </div>
              <div class="font-bold text-xs sm:text-sm mt-1.5">Kendaraan</div>
            </a>
  
  
            <a
            href="YPA.html" class="text-center group"
          >
            <div
              class="relative transition-colors bg-stone-300 dark:bg-stone-500 group-hover:bg-primary-600 dark:group-hover:bg-primary-400 inline-block rounded-md"
            >
            <button class="grey-button">
              <img
                src="Pendidikan.jpg"
                class="p-3 rounded-md w-12 h-12 relative items-center justify-center mx-auto block"
                alt=""
              />
              </button>
            </div>
            <div class="font-bold text-xs sm:text-sm mt-1.5">Pendidikan</div>
          </a>
  
  
          <a
          href="DPProperti.html" class="text-center group">
          <div
            class="relative transition-colors bg-stone-300 dark:bg-stone-500 group-hover:bg-primary-600 dark:group-hover:bg-primary-400 inline-block rounded-md"
          >
          <button class="grey-button">
            <img
              src="Home.png"
              class="p-3 rounded-md w-12 h-12 relative items-center justify-center mx-auto block"
              alt=""
            />
            </button>
          </div>
          <div class="font-bold text-xs sm:text-sm mt-1.5">DP Properti</div>
        </a>
    </div>
</div>



<div class=" w-[100%] mx-auto p-4 sm:p-6 min-h-screen relative " style="margin-top:-160px; margin-bottom:-300px;" >
<div class="blobbb1" >
<div class="boxx">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white" style="font-size: 50px;">Wujudkan Mimpimu Bersama kami</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400"> YPA hadir membantu mewujudkan tujuan keuangan Anda. Solusi tepat bagi Anda baik individu maupun keluarga dengan tujuan keuangan jangka pendek, jangka menengah, dan jangka panjang.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                  Mulai Sekarang
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                    
                </a>
                
            </div>
        </div>
        <div>
        <div class="my-12 sm:my-16">
          <h3 class="font-bold sm:text-lg mb-8">#Our Recomendation</h3>
          <div class="w-full overflow-scroll overflow-y-hidden flex gap-4">
            <a
              href="https://www.youtube.com/watch?v=pquRazSMZRo"
              class="mr-6 swiper-slide"
            >
              <img
                src="7.jpg"
                class="rounded-md mb-2 relative"
              />
              <span class="font-bold sm:text-lg mb-8"
                >25 TAHUN PUNYA APA? </span
              >
            </a>

            <a
              href="https://www.youtube.com/watch?v=c9PrrJlntos"
              class="mr-6 swiper-slide"
            >
              <img src="1.jpg" 
              class="rounded-md mb-2 relative" />
              <span class="font-bold sm:text-lg mb-8 "
                >BELAJAR INVESTASI DARI NOL</span
              >
            </a>

            <a
              href="https://www.youtube.com/watch?v=sCUghGYNGC4"
              class="mr-6 swiper-slide"
            >
              <img src="4.jpg" class="rounded-md mb-2 relative" />
              <span class="font-bold sm:text-lg mb-8 "
                >CARA NGATUR DUIT</span
              >
            </a>

            <a
              href="https://www.youtube.com/watch?v=ciLJ5jYsccU"
              class="mr-6 swiper-slide"
            >
              <img src="3.jpg"  class="rounded-md mb-2 relative"/>
              <span class="font-bold sm:text-lg mb-8 "
                >KAPAN INVESTASI TERBAIK? </span
              >
            </a>

            <a
              href="https://www.youtube.com/watch?v=IKWBMRlpKA8"
              class="mr-6 swiper-slide"
            >
              <img src="6.jpg" class="rounded-md mb-2 relative" />
              <span class="font-bold sm:text-lg mb-8 "
                >CARA MEMILIH MANAGER INVESTASI REKSADANA
              </span>
            </a>

            <a
              href="https://www.youtube.com/watch?v=eq4skvJr2cM"
              class="mr-6 swiper-slide"
            >
              <img src="5.jpg" class="rounded-md mb-2 relative" />
              <span class="font-bold sm:text-lg mb-8 "
                >NIKAH MALAH BANYAK UTANG, SAMPAI 800JUTA?</span
              >
            </a>

            <a
              href="https://www.youtube.com/watch?v=Y717Iij2Nls"
              class="mr-6 swiper-slide"
            >
              <img src="8.jpg" class="rounded-md mb-2 relative" />
              <span class="font-bold sm:text-lg mb-8 "
                >DARI GAJI UMR JADI MILIARDER, INI CARANYA
              </span>
            </a>

            <a
              href="https://www.youtube.com/watch?v=7AxZj1DG-TM"
              class="mr-6 swiper-slide"
            >
              <img src="9.jpg" class="rounded-md mb-2 relative" />
              <span class="font-bold sm:text-lg mb-8 "
                >100% Mahir Perencanaan Keuangan | Jadi Self Financial Planner
              </span>
            </a>

            <a
              href="https://www.youtube.com/watch?v=7AxZj1DG-TM"
              class="mr-6 swiper-slide"
            >
              <img src="11.jpg" class="rounded-md mb-2 relative" />
              <span class="font-bold sm:text-lg mb-8 "
                >100% Mahir Perencanaan Keuangan | Jadi Self Financial Planner
              </span>
            </a>

            <a
              href="https://www.youtube.com/watch?v=7AxZj1DG-TM"
              class="mr-6 swiper-slide"
            >
              <img src="12.jpg" class="rounded-md mb-2 relative" />
              <span class="font-bold sm:text-lg mb-8 "
                >100% Mahir Perencanaan Keuangan | Jadi Self Financial Planner
              </span>
            </a>

             <a
              href="https://www.youtube.com/watch?v=7AxZj1DG-TM"
              class="mr-6 swiper-slide"
            >
              <img src="13.jpg" class="rounded-md mb-2 relative" />
              <span class="font-bold sm:text-lg mb-8 "
                >100% Mahir Perencanaan Keuangan | Jadi Self Financial Planner
              </span>
            </a>
          </div>
          </div>
    </div>
</section>
        </div>
 </div>
</div>
    </div>



<div class="teamWrapper" >
    <div class="container">
    <h1 style="font-weight: bold; font-size: 2em; text-align: left ; margin-top:300px;">Our Team</h1>
      <p align="center; text-align: left;">We’re a dynamic group of individuals who are passionate about what we do </p>
      <p align="center text-align: left;">and dedicated to delivering the best results for our clients.</p>
      <div class="teamGrid">
        <div class="colmun">
          <div class="teamcol">
            <div class="teamcolinner">
              <div class="avatar"><img src="bobon.jpg" alt="Member"></div>
              <div style="font-weight: bold;" class="member-name"> <h2 align="center">Muhammad Raza Adzani
              </h2> </div>
              <div class="member-info style="margin-bottom: 20px;""><p align="center">Pajak, Manajemen Utang</p></div>
              <div class="member-mail" style="margin-bottom: 70px; " > <p align="center"> <a href="Razadzani27@gmail.com">Razadzani27@gmail.com</a>  </p> </div>
              <div class="member-social"> 
                <ul class="social-listing">
                <li><a href="https://www.instagram.com/razaadzn/"><img src="ig.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                <li><a href="https://www.facebook.com/raza.adzan"><img src="fb.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                <li><a href="#"><img src="twitter.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                </ul> 
              </div>
            </div>
          </div>
        </div>
        <div class="colmun">
          <div class="teamcol">
            <div class="teamcolinner">
              <div class="avatar"><img src="kurkos.jpg.jpeg" alt="Member"></div>
              <div style="font-weight: bold;" class="member-name"> <h2 align="center">Ammar Kurtubi
              </h2> </div>
              <div class="member-info"><p align="center">Alokasi Aset, Properti</p></div>
              <div class="member-mail " style="margin-bottom: 70px;"> <p align="center"> <a href="mailto:@gmail.com">Kurkos@gmail.com</a> </p> </div>
              <div class="member-social"> 
                <ul class="social-listing">
                <li><a href="#"><img src="ig.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                <li><a href="#"><img src="fb.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                <li><a href="#"><img src="twitter.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                </ul> 
              </div>
            </div>
          </div>
        </div>
        <div class="colmun">
          <div class="teamcol">
            <div class="teamcolinner">
              <div class="avatar"><img src="nop.jpg" alt="Member"></div>
              <div style="font-weight: bold;" class="member-name"> <h2 align="center">Naufal Aqil
                </h2> </div>
              <div class="member-info"><p align="center">Asuransi Syariah </p></div>
              <div class="member-mail" style="margin-bottom: 92px;"> <p align="center"> <a href="mailto:@gmail.com">nauv@gmail.com</a> </p> </div>
              <div class="member-social"> 
                <ul class="social-listing">
                <li><a href="#"><img src="ig.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                <li><a href="#"><img src="fb.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                <li><a href="#"><img src="twitter.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                </ul> 
              </div>
            </div>
          </div>
        </div>
       
        
        <div class="colmun">
          <div class="teamcol">
            
            <div class="teamcolinner">
              
              <div class="avatar"><img src="opaganteng.jpeg" alt="Member"></div>
              
              <div style="font-weight: bold;" class="member-name"> <h2 align="center">Muhammad Aufa Zaikra
                </h2> </div>
              <div class="member-info"><p align="center" >Zeus, Dewapetir </p></div>
              
              <div class="member-mail" style="margin-bottom: 92px;"> <p align="center"> <a href="mailto:@gmail.com">Aufaganteng@gmail.com</a> </p> </div>
              
              <div class="member-social"> 
                <ul class="social-listing">
                <li><a href="https://www.instagram.com/fa.zaikra/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA%3D%3D"><img src="ig.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                <li><a href="#"><img src="fb.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                <li><a href="#"><img src="twitter.jpg" alt="Instagram Logo" style="border-radius: 50%;"></a></li>
                </ul> 
                
              </div>
            </div>
          </div>
          <div>
          <div class="petir"></div>
          <div class="garis"></div>
          <div class="blob"></div>
          <div class="panah"></div>
  
         
      </div>

    </div>  
</div>


<footer  style="margin-top: 100px; margin-left: 50px">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="https://flowbite.com/" class="flex items-center">
              <img src="kurkoss.jpeg" class="h-8 me-3" style="width: 300px; height: 150px; border-radius: 10px;" />

              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                      </li>
                      <li class="mb-4">
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                      <li class="mb-4">
                          <a href="https://getbootstrap.com/" class="hover:underline">Bootstrap</a>
                      </li>
                      <li class="mb-4">
                          <a href="https://alpinejs.dev/" class="hover:underline">alpinejs</a>
                      </li>
                      <li class="mb-4">
                          <a href="https://www.finansialku.com/konsultasi-perencanaan-keuangan/" class="hover:underline">finansialku</a>
                      </li>
                      <li >
                          <a href="https://jquery.com/" class="hover:underline">jquery</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/marqynew/YPA" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">kontak</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">YangPentingAda(YPA)</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                  <span class="sr-only">Discord community</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Dribbble account</span>
              </a>
          </div>
      </div>
    </div>
</footer>
      </div>
    </div>
  </body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>