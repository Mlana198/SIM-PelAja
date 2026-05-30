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

                <a href="/sub-koor/dashboard" class=" {{ request()->is('sub-koor/dashboard') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3 ">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Overview</span>
                </a>

                <a href="/sub-koor/pendaftaran" class="{{ request()->is('sub-koor/pendaftaran') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
                <span class="material-symbols-outlined">app_registration</span>
                <span>Manajemen Pendaftaran</span>
                </a>

                <a href="/sub-koor/monitoring" class="{{ request()->is('sub-koor/monitoring') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
                <span class="material-symbols-outlined">monitoring</span>
                <span>Monitoring</span>
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