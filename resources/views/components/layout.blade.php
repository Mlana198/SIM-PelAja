<aside id="sidebar"
      class="fixed lg:sticky top-0 lg:top-0 w-64 h-screen bg-white shadow-2xl pt-20 lg:pt-6 p-6 space-y-6 
             transform -translate-x-full lg:translate-x-0 transition duration-300">
             

      <!-- Logo -->
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 bg-[#3755C3] text-white flex items-center justify-center rounded-xl">
          <span class="material-symbols-outlined">hub</span>
        </div>

        <div>
          <h1 class="font-bold text-[#3755C3]">Platform SIM</h1>
          <p class="text-xs text-gray-500">Pelatihan Kerja</p>
        </div>
      </div>

      <!-- Navigation -->
      <nav class="space-y-2 text-sm">

        <a href="/welcome" class=" {{ request()->is('welcome') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3 ">
          <span class="material-symbols-outlined">dashboard</span>
          <span>Overview</span>
        </a>

        <a href="/trainings" class="{{ request()->is('trainings') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
          <span class="material-symbols-outlined">school</span>
          <span>Trainings</span>
        </a>

        <a href="/peserta" class="{{ request()->is('peserta') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
          <span class="material-symbols-outlined">group</span>
          <span>Participants</span>
        </a>

        <a href="/started" class="{{ request()->is('started') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
          <span class="material-symbols-outlined">calendar_month</span>
          <span>Schedules</span>
        </a>

        <a href="#" class="{{ request()->is('#') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
          <span class="material-symbols-outlined">menu_book</span>
          <span>Curriculum</span>
        </a>

        <a href="/admin" class="{{ request()->is('admin') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
          <span class="material-symbols-outlined">person</span>
          <span>Admin</span>
        </a>

        <a href="/sub-koor" class="{{ request()->is('sub-koor') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
          <span class="material-symbols-outlined">person</span>
          <span>Sub Koor</span>
        </a>

        <a href="/kadis" class="{{ request()->is('kadis') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
          <span class="material-symbols-outlined">person</span>
          <span>Kadis</span>
        </a>

        <a href="/instruktur" class="{{ request()->is('instruktur') ? 'text-blue-600 font-semibold' : 'text-gray-500 hover:text-blue-600' }} flex items-center gap-3">
          <span class="material-symbols-outlined">person</span>
          <span>Instuktur</span>
        </a>

      </nav>

      <div class="space-y-2 text-sm">
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