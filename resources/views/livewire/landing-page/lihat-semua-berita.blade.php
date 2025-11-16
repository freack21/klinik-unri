<div class="min-h-screen pt-8">

    {{-- Search --}}
    <div class="max-w-3xl mx-auto px-6" data-aos="fade-down">
        <div class="relative">
            <input
                type="text"
                wire:model="search"
                placeholder="Search"
                class="w-full rounded-full bg-teal-200 px-6 py-4 placeholder-gray-600 text-gray-900 focus:ring-2 focus:ring-teal-500 outline-none"
            >
            <x-heroicon-s-magnifying-glass class="w-7 h-7 absolute right-6 top-1/2 -translate-y-1/2 text-gray-700" />
        </div>
    </div>

    {{-- Title --}}
    <div class="max-w-7xl mx-auto px-6 mt-12">
        <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight" data-aos="fade-right">
            LATEST NEWS
        </h2>
    </div>

    {{-- Grid 3 Kolom --}}
    <div class="max-w-7xl mx-auto px-6 mt-8 grid md:grid-cols-3 gap-6">

        @foreach (array_slice($berita, 0, 3) as $index => $news)
            <a href="{{ route('landingpage.lihat-berita', ['id' => $news['id']]) }}" class="bg-white rounded-3xl shadow-md hover:shadow-lg transition duration-200 hover:scale-105 hover:shadow-gray-600" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <img src="{{ asset($news['gambar']) }}"
                     class="w-full h-48 object-cover rounded-2xl">

                <div class="px-5 flex items-center text-xs text-[#7B0C0C] mt-3 gap-2 font-semibold">
                    <x-heroicon-s-newspaper class="w-4 h-4" />
                    {{ $news['sumber'] }} • {{ \Carbon\Carbon::parse($news['tanggal'])->diffForHumans() }}
                </div>

                <h3 class="px-5 font-bold text-lg mt-3">
                    {{ $news['judul'] }}
                </h3>

                <p class="p-5 pt-0 text-gray-600 text-sm mt-2">
                    {{ $news['deskripsi'] }}
                </p>
            </a>
        @endforeach

    </div>

    {{-- Dua Card Horizontal Besar --}}
    <div class="max-w-7xl mx-auto px-6 mt-12 space-y-6">

        @foreach ($berita as $index => $news)
            <a href="{{ route('landingpage.lihat-berita', ['id' => $news['id']]) }}" class="bg-white rounded-3xl shadow-md overflow-hidden flex flex-col md:flex-row hover:shadow-gray-600 hover:translate-x-1 transition duration-200" data-aos="fade-left" data-aos-delay="{{ ($index % 5) * 50 }}">
                <img src="{{ asset($news['gambar']) }}"
                     class="w-full md:w-1/3 h-64 object-cover">

                <div class="p-6 flex flex-col justify-center">
                    <h3 class="font-bold text-xl">
                        {{ $news['judul'] }}
                    </h3>

                    <p class="text-gray-600 mt-3 text-sm max-w-2xl">
                        {{ $news['deskripsi'] }}
                    </p>

                    <div class="flex items-center text-xs text-[#7B0C0C] mt-3 gap-2 font-semibold">
                        <x-heroicon-s-newspaper class="w-4 h-4" />
                        {{ $news['sumber'] }} • {{ \Carbon\Carbon::parse($news['tanggal'])->diffForHumans() }}
                    </div>
                </div>

            </a>
        @endforeach

    </div>
</div>
