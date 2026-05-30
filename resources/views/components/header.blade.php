<header class="sticky top-0 z-50 flex justify-between items-center bg-white px-4 sm:px-6 lg:px-8 py-3 h-16 shadow-md">

    <!-- Left -->
    <div class="flex items-center gap-4">

    <!-- Mobile Toggle -->
    <button onclick="toggleSidebar()" class="lg:hidden">
        <span class="material-symbols-outlined">menu</span>
    </button>
    <h1 class="font-bold text-[#3755C3]">
        {{ request()->route()->defaults['title'] ?? 'Default Title' }}
    </h1>
    </div>

    <!-- Right -->
    <div class="flex items-center gap-3">
        <span class="material-symbols-outlined sm:hidden">search</span>
    <input
        class="hidden sm:block bg-gray-100 rounded-full px-4 py-1 text-sm"
        placeholder="Search..."
    />
    <span class="material-symbols-outlined">notifications</span>
    <a href="/login" class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center"><span class="material-symbols-outlined">person</span></a>
    </div>

</header>