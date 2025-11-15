<div class="min-h-screen pt-8">

    {{-- Search Bar --}}
    <div class="max-w-3xl mx-auto px-6">
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

    {{-- HEAD NEWS --}}
    <div class="max-w-7xl mx-auto px-6 mt-12">
        <h2 class="text-4xl font-extrabold text-red-800 tracking-tight">
            HEAD NEWS
        </h2>

        <div class="relative mt-6">
            <img src="{{ asset($headNews['gambar']) }}" class="w-full h-[330px] object-cover rounded-3xl shadow-lg">

            <div class="absolute inset-0 bg-black/40 rounded-3xl"></div>

            <div class="absolute bottom-8 left-10 right-10 text-white">
                <h3 class="text-3xl font-extrabold mb-3">
                    {{ strtoupper($headNews['judul']) }}
                </h3>
                <p class="max-w-2xl text-gray-200">
                    {{ $headNews['deskripsi'] }}
                </p>

                <a href="{{ route('landingpage.lihat-berita', ['id' => $headNews['id']]) }}" class="inline-block mt-6 px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-full transition">
                    Baca Selengkapnya
                </a>
            </div>
        </div>
    </div>

    {{-- LATEST NEWS --}}
    <div class="max-w-7xl mx-auto px-6 my-16">
        <div class="flex justify-between items-end">
            <h2 class="text-3xl font-bold text-gray-900 tracking-tight">
                LATEST NEWS
            </h2>

            <a href="{{ route('landingpage.berita.semua') }}" class="text-blue-500 hover:underline font-semibold">
                see all
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mt-8">

            @foreach ($latestNews as $news)
                <a href="{{ route('landingpage.lihat-berita', ['id' => $news['id']]) }}" class="bg-white rounded-3xl shadow-md hover:shadow-lg transition duration-200 hover:scale-105 hover:shadow-gray-500">
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
    </div>
</div>
