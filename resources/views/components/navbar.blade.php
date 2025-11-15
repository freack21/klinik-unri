<nav class="bg-white shadow-sm sticky top-0 left-0 z-99999">
    <div class="max-w-7xl mx-auto px-4 py-1 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-1">
                <img src="{{ asset('img/logo-klinik.png') }}" alt="Logo" class="h-16 w-auto">
                <span class="font-extrabold tracking-wide text-xl text-gray-800">KLINIK UNRI</span>
            </div>

            <!-- Menu (Desktop) -->
            <div class="hidden md:flex space-x-8 text-sm font-light text-gray-700">
                <a href="{{ route('landingpage.profile') }}" class="hover:text-gray-600 border-b-2 border-transparent hover:border-gray-500 transition-all duration-500">Profil</a>
                <a href="{{ route('landingpage.pengumuman') }}" class="hover:text-gray-600 border-b-2 border-transparent hover:border-gray-500 transition-all duration-500">Pengumuman</a>
                <a href="{{ route('landingpage.berita') }}" class="hover:text-gray-600 border-b-2 border-transparent hover:border-gray-500 transition-all duration-500">Berita</a>
                <a href="{{ route('landingpage.jadwal-dokter') }}" class="hover:text-gray-600 border-b-2 border-transparent hover:border-gray-500 transition-all duration-500">Jadwal Dokter</a>
                <a href="{{ route('landingpage.layanan') }}" class="hover:text-gray-600 border-b-2 border-transparent hover:border-gray-500 transition-all duration-500">Layanan</a>
                <a href="{{ route('landingpage.kontak') }}" class="hover:text-gray-600 border-b-2 border-transparent hover:border-gray-500 transition-all duration-500">Kontak</a>
            </div>

            <!-- Hamburger (Mobile) -->
            <div class="md:hidden flex items-center">
                <button id="menu-toggle" class="text-gray-700 hover:text-gray-600 focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu (Mobile) -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
        <div class="flex flex-col py-2 space-y-1 text-gray-700 font-light   text-sm">
            <a href="{{ route('landingpage.profile') }}" class="px-4 py-2 hover:bg-gray-50">Profil</a>
            <a href="{{ route('landingpage.pengumuman') }}" class="px-4 py-2 hover:bg-gray-50">Pengumuman</a>
            <a href="{{ route('landingpage.berita') }}" class="px-4 py-2 hover:bg-gray-50">Berita</a>
            <a href="{{ route('landingpage.jadwal-dokter') }}" class="px-4 py-2 hover:bg-gray-50">Jadwal Dokter</a>
            <a href="{{ route('landingpage.layanan') }}" class="px-4 py-2 hover:bg-gray-50">Layanan</a>
            <a href="{{ route('landingpage.kontak') }}" class="px-4 py-2 hover:bg-gray-50">Kontak</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
