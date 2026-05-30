<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('logos/disnaker.png') }}">
    <title>Dasboard Disnaker</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <script>
      document.addEventListener("DOMContentLoaded", function () {

        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');

        let current = 0;

        function showSlide(index) {
          slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
            dots[i].classList.toggle('bg-white', i === index);
          });
        }

        function nextSlide() {
          current = (current + 1) % slides.length;
          showSlide(current);
        }

        setInterval(nextSlide, 4000);

        dots.forEach((dot, i) => {
          dot.addEventListener('click', () => {
            current = i;
            showSlide(current);
          });
        });

        showSlide(0);

      });

    </script>

    <style>
      @keyframes slide-top {
        0% {
          transform: translateY(40px);
          opacity: 0;
        }
        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }

      .slide-top {
        animation: slide-top 0.6s ease forwards;
      }
      
      .material-symbols-outlined {
        font-variation-settings:
          "FILL" 0,
          "wght" 400,
          "GRAD" 0,
          "opsz" 24;
        vertical-align: middle;
      }

      body {
        font-family: "Inter", sans-serif;
      }

      h1,
      h2,
      h3,
      .font-headline {
        font-family: "Manrope", sans-serif;
      }

      .no-scrollbar::-webkit-scrollbar {
        display: none;
      }

      .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    </style>
</head>
<body class="bg-white">
    <main class="flex flex-col w-full min-w-0">

      {{-- header --}}
      <header class="sticky top-0 z-50 bg-blue-400 shadow-stone-500 shadow-md">
        <nav aria-label="Global" class="flex items-center justify-between p-5 lg:px-8">
          <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img src="{{ asset('logos/disnaker.png') }}" alt="" class="h-8 w-auto" />
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
              <span class="sr-only">Open main menu</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="hidden lg:flex lg:gap-x-12">
            <a href="/started" class="text-sm/6 font-semibold text-white hover:text-blue-800 hover:font-bold">Beranda</a>
            <a href="/sub-koor/dashboard" class="text-sm/6 font-semibold text-white hover:text-blue-800 hover:font-bold">Berita</a>
            <a href="/admin/dashboard" class="text-sm/6 font-semibold text-white hover:text-blue-800 hover:font-bold">Pelatihan</a>
            <a href="#" class="text-sm/6 font-semibold text-white hover:text-blue-800 hover:font-bold">Tentang Kami</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
              @auth
                  <a href="/{{ auth()->user()->role->value ?? 'login' }}" class="text-sm/6 font-semibold text-white">
                      <span class="material-symbols-outlined items-center">person</span>
                  </a>
              @else
                  <a href="/admin/login" class="text-sm/6 font-semibold text-white hover:text-blue-800">
                      <span class="material-symbols-outlined items-center">person</span>
                  </a>
              @endauth
          </div>
        </nav>
        <el-dialog>
          <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
            <div tabindex="0" class="fixed inset-0 focus:outline-none">
              <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-slate-300 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
                <div class="flex items-center justify-between">
                  <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Dinas Ketenagakerjaan Kabupaten Situbondo</span>
                    <img src="{{ asset('logos/disnaker.png') }}" alt="" class="h-10 sm:h-12 md:h-14 w-auto" />
                  </a>
                  <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-blue-900">
                    <span class="sr-only">Close menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                      <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </button>
                </div>
                <div class="mt-6 flow-root">
                  <div class="-my-6 divide-y divide-white/10">
                    <div class="space-y-2 py-6">
                      <a href="/started" class="{{ request()->is('/started') ? 'bg-blue-600 text-white' : 'text-blue-600 hover:bg-blue-800/5' }} -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold">Beranda</a>
                      <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'bg-blue-600 text-white' : 'text-blue-600 hover:bg-blue-800/5' }} -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold">Berita</a>
                      <a href="#" class="{{ request()->is('pelatihan') ? 'bg-blue-600 text-white' : 'text-blue-600 hover:bg-blue-800/5' }} -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold">Pelatihan</a>
                      <a href="#" class="{{ request()->is('tentang-kami') ? 'bg-blue-600 text-white' : 'text-blue-600 hover:bg-blue-800/5' }} -mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold">Tentang Kami</a>
                    </div>
                    <div class="py-6">
                      <a href="/login" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-blue-600 hover:bg-blue-800/5">Log in</a>
                    </div>
                  </div>
                </div>
              </el-dialog-panel>
            </div>
          </dialog>
        </el-dialog>
      </header>

      {{-- dashboard --}}
      <div class="w-full h-112.5 relative overflow-hidden">

        <!-- SLIDES -->
        <div id="slider" class="w-full h-full relative">

          <!-- Slide 1 -->
          <div class="slide absolute inset-0 opacity-100 transition-opacity duration-700">
            <img src="{{ asset('logos/foto1.png') }}" 
                class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-linear-to-r from-black/70 to-transparent"></div>

          </div>

          <!-- Slide 2 -->
          <div class="slide absolute inset-0 opacity-0 transition-opacity duration-700">
            <img src="{{ asset('logos/foto2.png') }}" 
                class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-linear-to-r from-black/70 to-transparent"></div>

          </div>

          <!-- Slide 3 -->
          <div class="slide absolute inset-0 opacity-0 transition-opacity duration-700">
            <img src="{{ asset('logos/foto3.png') }}" 
                class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-linear-to-r from-black/70 to-transparent"></div>

          </div>

        </div>

        <!-- DOT NAVIGATION -->
        <div class="absolute bottom-5 left-1/2 -translate-x-1/2 flex gap-2">
          <button class="dot w-3 h-3 bg-white/75 rounded-full"></button>
          <button class="dot w-3 h-3 bg-white/75 rounded-full"></button>
          <button class="dot w-3 h-3 bg-white/75 rounded-full"></button>
        </div>

      </div>

      {{-- Berita --}}
      <div class="w-full px-4 sm:px-6 lg:px-10 py-6 shadow-2xl bg-white">

        <!-- Header -->
        <div class="flex justify-between items-center mb-15">
          <h2 class="text-xl sm:text-2xl font-semibold">Berita Terbaru</h2>
          <a href="#" class="text-blue-500 text-sm font-semibold hover:underline">
            Lihat Semua →
          </a>
        </div>

        <!-- GRID 3 KOLOM -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

          <!-- CARD 1 -->
          <div class="bg-white rounded-2xl shadow-md overflow-hidden slide-top transition-transform duration-300 hover:scale-105" style="animation-delay:0.1s">
            <img src="{{ asset('logos/foto1.png') }}" 
                class="w-full h-48 object-cover">

            <div class="p-4 sm:p-6">
              <span class="text-xs text-blue-500 font-semibold">
                Berita
              </span>

              <h3 class="text-lg sm:text-xl font-bold mt-2 mb-2">
                Dinsos Situbondo Gelar Pelatihan Digital Marketing
              </h3>
            </div>
          </div>
          <!-- CARD 2 -->
          <div class="bg-white rounded-2xl shadow-md overflow-hidden slide-top transition-transform duration-300 hover:scale-105" style="animation-delay:0.2s">
            <img src="{{ asset('logos/foto2.png') }}" 
                class="w-full h-48 object-cover">

            <div class="p-4 sm:p-6">
              <span class="text-xs text-blue-500 font-semibold">
                Berita
              </span>

              <h3 class="text-lg sm:text-xl font-bold mt-2 mb-2">
                Dinsos Situbondo Gelar Pelatihan Digital Marketing
              </h3>
            </div>
          </div>
          <!-- CARD 3 -->
          <div class="bg-white rounded-2xl shadow-md overflow-hidden slide-top transition-transform duration-300 hover:scale-105" style="animation-delay:0.3s">
            <img src="{{ asset('logos/foto3.png') }}" 
                class="w-full h-48 object-cover">

            <div class="p-4 sm:p-6">
              <span class="text-xs text-blue-500 font-semibold">
                Berita
              </span>

              <h3 class="text-lg sm:text-xl font-bold mt-2 mb-2">
                Dinsos Situbondo Gelar Pelatihan Digital Marketing
              </h3>
            </div>
          </div>
        </div>
      </div>

      {{-- pelatihan --}}
      <div class="w-full px-4 sm:px-6 lg:px-10 py-6 shadow-2xl bg-white">

        <!-- Header -->
        <div class="flex justify-between items-center mb-15">
          <h2 class="text-xl sm:text-2xl font-semibold">Event, Training dan Pelatihan</h2>
          <a href="#" class="text-blue-500 text-sm font-semibold hover:underline">
            Lihat Semua →
          </a>
        </div>

        <!-- GRID 2 KOLOM -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

          <!-- CARD 1 -->
          <div class="bg-white rounded-2xl shadow-md overflow-hidden flex flex-col md:flex-row slide-top transition-transform duration-300 hover:scale-105" style="animation-delay:0.1s">
            <img src="{{ asset('logos/Logo Dinsos.jpg') }}" 
                class="w-full md:w-1/2 h-48 object-contain bg-gray-100">

            <div class="p-4 sm:p-6 flex flex-col justify-between md:w-1/2">
              <div>
                <span class="text-xs text-blue-500 font-semibold">
                  Pelatihan Unggulan
                </span>

                <h3 class="text-lg sm:text-xl font-bold mt-2 mb-2">
                  Pelatihan Digital Marketing
                </h3>

                <p class="text-gray-600 text-sm sm:text-base line-clamp-3">
                  Pelatihan ini membantu peserta memahami strategi pemasaran digital 
                  mulai dari media sosial hingga optimasi marketplace.
                </p>
              </div>

              <a href="#" class="mt-4 text-blue-500 font-semibold hover:underline">
                Lihat Detail →
              </a>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="bg-white rounded-2xl shadow-md overflow-hidden flex flex-col md:flex-row slide-top transition-transform duration-300 hover:scale-105" style="animation-delay:0.2s">
            <img src="{{ asset('logos/Logo Dinsos.jpg') }}" 
                class="w-full md:w-1/2 h-48 object-contain bg-gray-100">

            <div class="p-4 sm:p-6 flex flex-col justify-between md:w-1/2">
              <div>
                <span class="text-xs text-blue-500 font-semibold">
                  Pelatihan Unggulan
                </span>

                <h3 class="text-lg sm:text-xl font-bold mt-2 mb-2">
                  Pelatihan Desain Grafis
                </h3>

                <p class="text-gray-600 text-sm sm:text-base line-clamp-3">
                  Pelatihan ini membekali peserta dengan kemampuan desain menggunakan tools modern.
                </p>
              </div>

              <a href="#" class="mt-4 text-blue-500 font-semibold hover:underline">
                Lihat Detail →
              </a>
            </div>
          </div>

        </div>
      </div>
      
      {{-- Tentang Kami --}}
      <section class="w-full px-4 sm:px-6 lg:px-10 py-12 bg-gray-50">

        <div class="text-center mb-10">
          <h2 class="text-2xl sm:text-3xl font-bold">Tentang Kami</h2>
          <p class="text-gray-600 mt-2 max-w-2xl mx-auto">
            Dinas Ketenagakerjaan Kabupaten Situbondo berkomitmen meningkatkan kualitas tenaga kerja 
            melalui layanan yang profesional, inklusif, dan berkelanjutan.
          </p>
        </div>

        {{--  Profil Singkat  --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12">

          <img src="{{ asset('logos/foto2.png') }}" 
              class="w-full h-64 md:h-full object-cover rounded-2xl shadow-md slide-top transition-transform duration-300 hover:scale-105" style="animation-delay: 0.1s" >

          <div class="slide-top transition-transform duration-300" style="animation-delay: 0.2s">
            <h3 class="text-xl font-semibold mb-3">Profil Singkat</h3>
            <p class="text-gray-700 leading-relaxed mb-3">
              Dinas Ketenagakerjaan Kabupaten Situbondo merupakan lembaga pemerintah 
              yang bertanggung jawab dalam pengelolaan urusan ketenagakerjaan di wilayah Situbondo.
            </p>
            <p class="text-gray-700 leading-relaxed">
              Kami menghadirkan berbagai program pelatihan, penyuluhan, dan layanan informasi 
              guna menciptakan tenaga kerja yang kompeten dan berdaya saing.
            </p>
          </div>

        </div>

         {{-- Visi & Misi  --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

          <!-- VISI -->
          <div class="bg-white p-6 rounded-2xl shadow-md slide-top transition-transform duration-300 hover:scale-105" style="animation-delay: 0.1s">
            <h3 class="text-lg font-bold text-blue-500 mb-3">Visi</h3>
            <p class="text-gray-700 leading-relaxed">
              Mewujudkan tenaga kerja yang kompeten, produktif, dan berdaya saing 
              dalam mendukung pembangunan daerah yang berkelanjutan.
            </p>
          </div>

          {{-- MISI  --}}
          <div class="bg-white p-6 rounded-2xl shadow-md slide-top transition-transform duration-300 hover:scale-105" style="animation-delay: 0.2s">
            <h3 class="text-lg font-bold text-blue-500 mb-3">Misi</h3>
            <ul class="text-gray-700 space-y-2 list-disc list-inside">
              <li>Meningkatkan kualitas dan kompetensi tenaga kerja melalui pelatihan.</li>
              <li>Memperluas kesempatan kerja dan penempatan tenaga kerja.</li>
              <li>Meningkatkan perlindungan tenaga kerja.</li>
              <li>Mengembangkan sistem informasi ketenagakerjaan yang terpadu.</li>
            </ul>
          </div>
        </div>
      </section>

      {{-- footer --}}
      <footer class="bg-slate-800 text-white mt-10">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">

          <!-- Tentang Singkat -->
          <div>
            <h3 class="text-lg font-semibold mb-3">Disnaker Situbondo</h3>
            <p class="text-sm text-gray-300">
              Dinas Ketenagakerjaan Kabupaten Situbondo berkomitmen meningkatkan kualitas 
              tenaga kerja melalui pelatihan, penyuluhan, dan layanan informasi.
            </p>
          </div>

          <!-- Navigasi -->
          <div>
            <h3 class="text-lg font-semibold mb-3">Navigasi</h3>
            <ul class="space-y-2 text-sm text-gray-300">
              <li><a href="#" class="hover:text-white">Beranda</a></li>
              <li><a href="#" class="hover:text-white">Berita</a></li>
              <li><a href="#" class="hover:text-white">Pelatihan</a></li>
              <li><a href="#" class="hover:text-white">Tentang Kami</a></li>
            </ul>
          </div>

          <!-- Kontak -->
          <div>
            <h3 class="text-lg font-semibold mb-3">Kontak</h3>
            <ul class="text-sm text-gray-300 space-y-2">
              <li>📍<a href="https://maps.google.com/?q=Jl.+Pb.+Sudirman,+Karangasem,+Patokan,+Kec.+Situbondo,+Kabupaten+Situbondo,+Jawa+Timur+68312" target="_blank" class="hover:text-white"> Jl. Pb. Sudirman, Karangasem, Patokan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68312</a></li>
              <li>📞 (0338) 673204</li>
              <li>✉️ disnaker@situbondo.go.id</li>
            </ul>
          </div>

        </div>

        <!-- Bottom -->
        <div class="border-t border-gray-700 text-center text-sm text-gray-400 py-4">
          &copy; 2026 Dinas Ketenagakerjaan Kabupaten Situbondo. All rights reserved.
        </div>

      </footer>
    </main>
</body>

</html>