<div class="pt-28 pb-32 px-6 md:px-20 lg:px-40">

    {{-- Judul + Icon --}}
    <div class="flex items-center gap-6 mb-6" data-aos="fade-down">
        <x-dynamic-component
            :component="$layanan['icon']"
            class="w-16 h-16 text-[#2364AA]"
        />
        <h1 class="text-4xl font-extrabold text-[#2354BB]">
            {{ $layanan['title'] }}
        </h1>
    </div>

    {{-- Deskripsi --}}
    <p class="text-gray-700 leading-relaxed text-lg text-justify" data-aos="fade-up" data-aos-delay="100">
        {{ $layanan['text'] }}
    </p>

    {{-- Fasilitas --}}
    <h2 class="mt-10 text-2xl font-bold text-[#2354BB]" data-aos="fade-right" data-aos-delay="200">Fasilitas Yang Tersedia</h2>

    <ul class="mt-4 list-disc pl-6 text-gray-700 space-y-2" data-aos="fade-up" data-aos-delay="300">
        @foreach ($layanan['fasilitas'] as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    {{-- Tombol --}}
    <div class="flex flex-col md:flex-row items-center gap-6 mt-16 justify-between" data-aos="fade-up" data-aos-delay="400">

        <a href="#"
           class="px-10 py-3 bg-[#47C2C6] text-white font-semibold rounded-full shadow hover:scale-[1.04] transition">
            Lihat Jadwal Dokter
        </a>

        <a href="{{ route('landingpage.layanan') }}"
           class="px-10 py-3 bg-[#2436C5] text-white font-semibold rounded-full shadow hover:scale-[1.04] transition">
            Kembali Ke Menu Layanan
        </a>

    </div>

</div>
