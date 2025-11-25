<div>
    <!-- Hero Section -->
    <section class="bg-white py-10">
        <div class="max-w-6xl mx-auto px-4 text-center">
            @if ($profile && $profile->image)
                <img src="{{ Storage::url($profile->image) }}" alt="{{ $profile->title }}" class="w-full"
                    data-aos="fade-down">
            @else
                <img src="{{ asset('img/hero.png') }}" alt="Klinik UNRI" class="w-full" data-aos="fade-down">
            @endif

            <h1 class="text-3xl font-bold text-gray-800 mt-8" data-aos="fade-up">{{ $profile->title ?? 'Klinik UNRI' }}
            </h1>

            <p class="text-gray-700 text-justify mt-6 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                {{ $profile->body ?? 'Klinik ini didirikan pada tanggal 20 Februari 2019 dan mulai beroperasi secara resmi pada 1 Agustus 2019 di lokasi awal yang terletak di samping Rumah Sakit Universitas Riau. Pada tahap awal, klinik memberikan pelayanan kepada pasien umum melalui poli Umum dan poli Gigi. Pada Februari 2020, klinik menjalin kerja sama dengan BPJS Kesehatan untuk memperluas akses layanan kesehatan bagi masyarakat. Seiring dengan perkembangan dan peningkatan kebutuhan layanan, pada 1 Januari 2024, klinik pindah lokasi ke samping Bank BTN. Hingga saat ini, klinik tetap dipimpin oleh drg. Yuslinda, M.Si selaku kepala klinik.' }}
            </p>
        </div>
    </section>

    <!-- Mengapa Harus Kami -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-10" data-aos="fade-up">Mengapa Harus Kami?</h2>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-green-100 rounded-lg p-5 px-8 h-fit text-left" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2 flex items-center justify-center gap-2">
                        <x-heroicon-s-scale class="w-5 h-5" />
                        <span>Terakreditasi</span>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-justify">
                        Klinik UNRI telah resmi terakreditasi oleh lembaga kesehatan nasional, menjamin standar
                        pelayanan, keamanan, dan kenyamanan pasien selalu terjaga dengan baik.
                    </p>
                </div>
                <div class="bg-green-100 rounded-lg p-5 px-8 h-fit text-left mt-16" data-aos="fade-up"
                    data-aos-delay="200">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2 flex items-center justify-center gap-2">
                        <x-heroicon-s-finger-print class="w-5 h-5" />
                        <span>Bersertifikasi</span>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-justify">
                        Seluruh tenaga medis kami telah bersertifikat profesional dan terus mengikuti pelatihan terbaru
                        agar dapat memberikan layanan yang akurat, modern, dan terpercaya.
                    </p>
                </div>
                <div class="bg-green-100 rounded-lg p-5 px-8 h-fit text-left" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2 flex items-center justify-center gap-2">
                        <x-heroicon-c-identification class="w-5 h-5" />
                        <span>Profesional</span>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-justify">
                        Kami mengutamakan pelayanan ramah, cepat, dan profesional dengan pendekatan yang berfokus pada
                        kebutuhan serta kenyamanan pasien di setiap kunjungan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dokter -->
    <section class="py-16 bg-linear-to-b from-green-50 to-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-10" data-aos="fade-up">Dokter</h2>

            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
                @foreach ([['dr. Anita ,Sp.Ot', 'Spesialis Bedah Tulang', 'dokter.png', 'bg-green-100'], ['dr. Dewi ,Sp.JP', 'Spesialis Jantung', 'dokter.png', 'bg-blue-100'], ['dr. Dewi ,Sp.M', 'Spesialis Mata', 'dokter.png', 'bg-purple-100'], ['dr. Sarah Wijaya, Sp.KG', 'Spesialis Gigi', 'dokter.png', 'bg-pink-100']] as $index => $d)
                    <div class="flex flex-col items-center" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                        <div class="relative w-48 h-48 flex items-end justify-center">
                            <div
                                class="absolute top-[25%] left-0 right-0 bottom-0 {{ $d[3] }} rounded-2xl rounded-tl-[6rem]">
                            </div>
                            <img src="{{ asset('img/' . $d[2]) }}" alt="{{ $d[0] }}"
                                class="relative z-0 w-40 h-56 object-cover object-top">
                        </div>
                        <div class="bg-white -mt-6 px-4 py-3 rounded-b-2xl shadow-sm w-48 text-center z-2">
                            <h3 class="font-semibold text-gray-800">{{ $d[0] }}</h3>
                            <div class="border-b border-black w-3/4 mx-auto my-1"></div>
                            <p class="text-gray-600 text-sm">{{ $d[1] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <a href="{{ route('landingpage.jadwal-dokter') }}"
                class="mt-8 border border-gray-800 px-6 py-2 rounded-full hover:bg-gray-800 hover:text-white transition block w-fit mx-auto">
                Selengkapnya →
            </a>
        </div>
    </section>

    <!-- Poli Klinik -->
    <section class="py-16 bg-linear-to-b from-white to-green-100 text-center">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-800 mb-4" data-aos="fade-up">Poli Klinik</h2>
            <p class="text-gray-600 mb-10 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Poliklinik UNRI hadir untuk memberikan pelayanan kesehatan komprehensif bagi seluruh masyarakat, dosen,
                staf, dan mahasiswa. Dengan dukungan tenaga medis profesional dan fasilitas modern, kami berkomitmen
                memberikan layanan yang cepat, tepat, dan berorientasi pada keselamatan serta kenyamanan pasien.
            </p>

            <div class="flex flex-col md:flex-row justify-center gap-6">
                <div class="bg-white rounded-lg shadow-md p-6 flex-1" data-aos="flip-left" data-aos-delay="200">
                    <h3 class="text-lg font-semibold text-gray-800 flex items-center justify-center gap-4">
                        <x-healthicons-o-clinical-fe class="text-red-500 w-10 h-10" /> Poli Umum
                    </h3>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 flex-1" data-aos="flip-right" data-aos-delay="300">
                    <h3 class="text-lg font-semibold text-gray-800 flex items-center justify-center gap-4">
                        <x-iconpark-teeth class="text-red-500 w-10 h-10" /> Poli Gigi dan Mulut
                    </h3>
                </div>
            </div>

            <a href="{{ route('landingpage.layanan') }}"
                class="mt-8 border border-gray-800 px-6 py-2 rounded-full hover:bg-gray-800 hover:text-white transition block w-fit mx-auto">
                Selengkapnya →
            </a>
        </div>
    </section>

    <!-- Berita -->
    <section class="py-16 bg-linear-to-b from-green-50 to-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-10" data-aos="fade-up">Berita</h2>

            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
                @forelse ($berita as $index => $item)
                    <a href="{{ route('landingpage.lihat-berita', ['id' => $item->id]) }}"
                        class="bg-white rounded-lg shadow-md p-4 text-left block hover:shadow-lg transition"
                        data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}"
                            class="rounded-lg mb-3 w-full h-40 object-cover">
                        <span
                            class="text-gray-500 text-xs">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</span>
                        <h3 class="font-semibold text-gray-800 text-sm mt-1">{{ Str::limit($item->judul, 50) }}</h3>
                        <p class="text-gray-600 text-xs mt-2">{{ Str::limit($item->deskripsi, 100) }}</p>
                    </a>
                @empty
                    <div class="col-span-full text-center py-10 text-gray-500">
                        Belum ada berita terbaru.
                    </div>
                @endforelse
            </div>

            <a href="{{ route('landingpage.berita') }}"
                class="mt-8 border border-gray-800 px-6 py-2 rounded-full hover:bg-gray-800 hover:text-white transition block w-fit mx-auto">
                Selengkapnya →
            </a>
        </div>
    </section>
</div>
