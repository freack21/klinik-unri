<div>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 uppercase">Edit Berita</h2>

        <div class="flex space-x-2">
            <a href="{{ route('admin.berita.index') }}"
                class="px-4 py-2 text-gray-600 font-bold hover:text-gray-800 transition">LIHAT</a>
            <a href="{{ route('admin.berita.create') }}"
                class="px-4 py-2 text-gray-600 font-bold hover:text-gray-800 transition">TAMBAH</a>
        </div>
    </div>

    <div class="bg-[#1e293b] rounded-lg p-8 shadow-lg text-white">
        <form wire:submit="update" class="space-y-6">
            <div>
                <label for="judul" class="block text-sm font-bold mb-2">Judul :</label>
                <input wire:model="judul" type="text" id="judul"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('judul')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="tanggal" class="block text-sm font-bold mb-2">Tanggal :</label>
                    <input wire:model="tanggal" type="date" id="tanggal"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('tanggal')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="sumber" class="block text-sm font-bold mb-2">Sumber :</label>
                    <input wire:model="sumber" type="text" id="sumber"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('sumber')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-bold mb-2">Deskripsi Singkat :</label>
                <textarea wire:model="deskripsi" id="deskripsi" rows="3"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                @error('deskripsi')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="konten" class="block text-sm font-bold mb-2">Konten Berita :</label>
                <textarea wire:model="konten" id="konten" rows="10"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                @error('konten')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="gambar" class="block text-sm font-bold mb-2">Gambar :</label>
                <input wire:model="gambar" type="file" id="gambar"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @if ($gambar)
                    <img src="{{ $gambar->temporaryUrl() }}" class="mt-2 w-32 h-32 object-cover rounded-lg">
                @elseif($oldGambar)
                    <img src="{{ Storage::url($oldGambar) }}" class="mt-2 w-32 h-32 object-cover rounded-lg">
                @endif
                @error('gambar')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end items-center pt-4">
                <button type="submit"
                    class="px-8 py-2 bg-blue-300 text-blue-900 font-bold rounded-full hover:bg-blue-400 transition">
                    SIMPAN
                </button>
            </div>
        </form>
    </div>
</div>
