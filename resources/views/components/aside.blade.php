<aside id="sidebar"
            class="fixed top-0 left-0 w-64 h-full flex flex-col bg-white shadow-2xl p-6 transform -translate-x-full lg:translate-x-0 transition duration-300">
                    
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('logos/disnaker.png') }}" alt="Logo" class="w-auto h-8">             

                <div>
                <h1 class="font-bold text-[#3755C3]">Platform SIM</h1>
                <p class="text-xs text-gray-500">Pelatihan Kerja</p>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="space-y-2 pt-4 text-sm grow">

                <a href="/admin/dashboard" class=" {{ request()->is('admin/dashboard') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3 ">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Overview</span>
                </a>

                <a href="/admin/berita" class="{{ request()->is('admin/berita') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
                <span class="material-symbols-outlined">news</span>
                <span>Manajemen Berita</span>
                </a>

                <a href="/admin/pelatihan" class="{{ request()->is('admin/pelatihan') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
                <span class="material-symbols-outlined">model_training</span>
                <span>Manajemen Pelatihan</span>
                </a>

                <a href="/admin/pendaftaran" class="{{ request()->is('admin/pendaftaran') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
                <span class="material-symbols-outlined">app_registration</span>
                <span>Manajemen Pendaftaran</span>
                </a>

                <a href="/admin/seleksi" class="{{ request()->is('admin/seleksi') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
                <span class="material-symbols-outlined">select_check_box</span>
                <span>Manajemen Seleksi</span>
                </a>

                <a href="/admin/evaluasi" class="{{ request()->is('admin/evaluasi') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
                <span class="material-symbols-outlined">avg_time</span>
                <span>Manajemen Evaluasi</span>
                </a>

                <a href="/admin/sertifikasi" class="{{ request()->is('admin/sertifikasi') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
                <span class="material-symbols-outlined">card_membership</span>
                <span>Manajemen Sertifikasi</span>
                </a>

                <a href="/peserta" class="{{ request()->is('peserta') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
                <span class="material-symbols-outlined">group</span>
                <span>Participants</span>
                </a>

                <a href="/" class="{{ request()->is('/') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
                <span class="material-symbols-outlined">calendar_month</span>
                <span>Schedules</span>
                </a>

            </nav>

            <div class="pt-6 border-t border-gray-100 space-y-2 text-sm">
            <a href="/settings" class="flex items-center gap-3 p-2 hover:bg-gray-100 rounded-lg cursor-pointer">
                <span class="material-symbols-outlined">settings</span>
                Settings
            </a>
            <a href="#" class="flex items-center gap-3 p-2 hover:bg-gray-100 rounded-lg cursor-pointer">
                <span class="material-symbols-outlined">support</span>
                Support
            </a>
            </div>
        </aside>