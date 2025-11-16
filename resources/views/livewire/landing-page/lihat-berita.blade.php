<div class="max-w-6xl mx-auto px-4 py-12 grid md:grid-cols-3 gap-8">
    {{-- Sidebar --}}
    <aside class="md:col-span-1 bg-gray-100 rounded-xl p-6 shadow-sm" data-aos="fade-right">
        <img src="{{ asset('img/banner-berita.png') }}" alt="Banner" class="rounded-lg mb-6">
        <div class="mb-6">
            <h3 class="font-semibold text-gray-800 mb-2">Informasi & Pendaftaran</h3>
            <div class="flex items-center gap-2 text-gray-700 font-semibold text-lg">
                <x-heroicon-s-phone class="w-5 h-5" /> 0812-3457-7890
            </div>
            <div class="flex items-center gap-2 mt-2 text-gray-700">
                <x-heroicon-s-envelope class="w-5 h-5" />
                <a href="mailto:klinikunrisehat@unri.ac.id" class="font-semibold underline">
                    klinikunrisehat@unri.ac.id
                </a>
            </div>
        </div>

        <div>
            <h3 class="font-semibold text-gray-800 mb-2">Kategori</h3>
            <ul class="space-y-1 text-gray-700 text-sm">
                <li class="font-semibold flex items-center gap-1">
                    <x-heroicon-s-chevron-right class="w-4 h-4" /> Vaksinasi
                </li>
                <li class="flex items-center gap-1"><x-heroicon-s-chevron-right class="w-4 h-4" /> Donor Darah</li>
                <li class="flex items-center gap-1"><x-heroicon-s-chevron-right class="w-4 h-4" /> Jadwal Dokter</li>
                <li class="flex items-center gap-1"><x-heroicon-s-chevron-right class="w-4 h-4" /> Layanan Baru</li>
                <li class="flex items-center gap-1"><x-heroicon-s-chevron-right class="w-4 h-4" /> Kesehatan Umum</li>
                <li class="flex items-center gap-1"><x-heroicon-s-chevron-right class="w-4 h-4" /> Administrasi & Regulasi</li>
            </ul>
        </div>
    </aside>

    {{-- Main Content --}}
    <main class="md:col-span-2 bg-white rounded-xl shadow-sm p-8" data-aos="fade-left" data-aos-delay="200">
        @if ($berita)
            <h1 class="text-2xl font-bold text-gray-900 mb-2">{{ strtoupper($berita['judul']) }}</h1>
            <p class="text-gray-600 text-sm mb-6">{{ \Carbon\Carbon::parse($berita['tanggal'])->translatedFormat('d F Y') }}</p>

            <div class="prose max-w-none text-gray-800 text-justify leading-relaxed">
                {!! $berita['konten'] !!}
            </div>

            <div class="mt-8">
                <a href="{{ route('landingpage.berita') }}"
                   class="inline-block bg-teal-600 hover:bg-teal-700 text-white font-semibold px-5 py-2 rounded-full transition">
                    Kembali ke Menu Berita
                </a>
            </div>
        @else
            <p class="text-gray-700">Berita tidak ditemukan.</p>
        @endif
    </main>
</div>
