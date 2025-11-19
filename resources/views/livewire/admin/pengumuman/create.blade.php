<div>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 uppercase">Tambah Pengumuman</h2>
        
        <div class="flex space-x-2">
            <a href="{{ route('admin.pengumuman.index') }}" class="px-4 py-2 text-gray-600 font-bold hover:text-gray-800 transition">LIHAT</a>
            <a href="{{ route('admin.pengumuman.create') }}" class="px-4 py-2 bg-blue-200 text-blue-800 font-bold rounded-full hover:bg-blue-300 transition">TAMBAH</a>
        </div>
    </div>

    <div class="bg-[#1e293b] rounded-lg p-8 shadow-lg text-white">
        <form wire:submit="save" class="space-y-6">
            <div>
                <label for="judul" class="block text-sm font-bold mb-2">Title :</label>
                <input wire:model="judul" type="text" id="judul" class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('judul') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="tanggal" class="block text-sm font-bold mb-2">Tanggal :</label>
                    <input wire:model="tanggal" type="date" id="tanggal" class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('tanggal') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="waktu" class="block text-sm font-bold mb-2">Waktu :</label>
                    <input wire:model="waktu" type="text" id="waktu" placeholder="09:00-12:00" class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('waktu') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

            <div>
                <label for="isi" class="block text-sm font-bold mb-2">Body :</label>
                <textarea wire:model="isi" id="isi" rows="10" class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                @error('isi') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="flex justify-between items-center pt-4">
                <button type="button" class="px-6 py-2 bg-blue-200 text-blue-800 font-bold rounded-full hover:bg-blue-300 transition flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                    </svg>
                    Tambahkan file
                </button>

                <button type="submit" class="px-8 py-2 bg-blue-300 text-blue-900 font-bold rounded-full hover:bg-blue-400 transition">
                    SIMPAN
                </button>
            </div>
        </form>
    </div>
</div>
