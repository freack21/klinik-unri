<div>
    {{-- Hero Section --}}
    <section class="relative bg-white py-16">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 text-center md:text-left space-y-4" data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
                    Temukan Pengumuman Terbaru<br>
                    <span class="text-teal-600 italic">Klinik UNRI Sehati</span>
                </h2>
                <p class="text-gray-700 font-medium leading-relaxed">
                    Terima Kasih Kepada Pengunjung Setia <span class="text-teal-600 font-semibold italic">Klinik UNRI Sehati</span> Universitas Riau atas kepercayaan yang telah diberikan.
                </p>
            </div>

            <div class="md:w-1/2 flex justify-center mt-10 md:mt-0 relative" data-aos="fade-left" data-aos-delay="200">
                <div class="absolute bg-teal-100 rounded-[3rem] w-64 h-72 top-[50%] right-[50%] translate-x-[50%] translate-y-[-50%]"></div>
                <img src="{{ asset('img/dokter2.png') }}" alt="Dokter"
                     class="relative z-10 w-32 md:w-50 object-cover">
            </div>
        </div>

        {{-- Bottom Navigation Tabs --}}
        <div class="mt-12 bg-teal-600 text-white py-3">
            <div class="max-w-6xl mx-auto flex flex-wrap justify-center gap-x-8 text-sm font-semibold">
                <a href="#" class="hover:underline">Vaksinasi</a>
                <span>•</span>
                <a href="#" class="hover:underline">Donor Darah</a>
                <span>•</span>
                <a href="#" class="hover:underline">Jadwal Dokter Terbaru</a>
                <span>•</span>
                <a href="#" class="hover:underline">Kesehatan Umum</a>
            </div>
        </div>
    </section>

    {{-- Search Bar --}}
    <section class="bg-gray-50 py-10">
        <div class="max-w-4xl mx-auto" data-aos="fade-down">
            <div class="flex items-center bg-slate-800 rounded-full px-5 py-3 shadow-md">
                <x-heroicon-s-magnifying-glass class="w-5 h-5 text-white" />
                <input
                    type="text"
                    placeholder="Cari pengumuman layanan vaksin..."
                    class="flex-1 bg-transparent border-none focus:ring-0 text-white placeholder-gray-300 ml-3"
                >
            </div>
        </div>
    </section>

    {{-- Announcement Cards --}}
    <section class="py-12 bg-gray-50 w-full">
        <div class="max-w-6xl mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @php($pengumuman = App\Livewire\LandingPage\Pengumuman::$pengumumanList ?? null)
            @forelse ($pengumuman as $index => $p)
                <div class="bg-gray-100 rounded-xl shadow-sm p-6 relative hover:shadow-md transition" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="absolute top-0 left-0 w-full h-2 bg-green-500 rounded-t-xl"></div>
                    <div class="mt-3 flex items-center text-sm text-gray-600 font-medium">
                        <x-heroicon-s-calendar class="w-4 h-4 mr-2 text-gray-700" />
                        {{ $p['tanggal'] }}
                    </div>
                    <h3 class="mt-3 text-lg font-semibold text-gray-800">{{ $p['judul'] }}</h3>
                    {{-- <p class="mt-2 text-sm text-gray-600">Kini tersedia vaksin Influenza untuk umum</p> --}}
                    <a href="{{ route('landingpage.lihat-pengumuman', ['id' => $index]) }}"
                        class="mt-4 block w-fit cursor-pointer bg-teal-600 text-white px-4 py-2 rounded-md font-medium hover:bg-teal-700 transition">
                        Lihat Selengkapnya
                    </a>
                </div>
            @empty
                <p class="text-center w-full p-4 flex justify-center items-center gap-2"><x-heroicon-o-x-circle class="w-10 h-10" /> <span>Tidak ada pengumuman terbaru.</span></p>
            @endforelse
        </div>
    </section>
</div>
