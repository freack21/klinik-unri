<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Klinik UNRI Admin' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100 flex">

    <!-- Sidebar -->
    <div class="w-64 bg-[#1e293b] text-white min-h-screen flex flex-col fixed left-0 top-0 bottom-0">
        <div class="p-6 flex items-center gap-3">
            <img src="{{ asset('img/logo-klinik.png') }}" alt="Logo" class="h-10 w-10">
            <div>
                <h1 class="font-bold text-lg leading-none">KLINIK</h1>
                <h2 class="font-bold text-lg leading-none">UNRI</h2>
            </div>
        </div>

        <div class="px-6 mb-6">
            <h3 class="text-gray-400 font-semibold text-sm uppercase tracking-wider">Kelola Informasi</h3>
        </div>

        <nav class="flex-1 px-4 space-y-2">
            <a href="#"
                class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition {{ request()->routeIs('admin.profile') ? 'bg-gray-700' : '' }}">
                Profile
            </a>
            <a href="{{ route('admin.pengumuman.index') }}"
                class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition {{ request()->routeIs('admin.pengumuman*') ? 'bg-gray-700 underline decoration-white decoration-2 underline-offset-4' : '' }}">
                Pengumuman
            </a>
            <a href="{{ route('admin.berita.index') }}"
                class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition {{ request()->routeIs('admin.berita*') ? 'bg-gray-700 underline decoration-white decoration-2 underline-offset-4' : '' }}">
                Berita
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                Jadwal Dokter
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                Layanan
            </a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                Kontak
            </a>
        </nav>

        <div class="p-4 border-t border-gray-700">
            <livewire:auth.logout />
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 ml-64 p-8">
        {{ $slot }}
    </div>

</body>

</html>
