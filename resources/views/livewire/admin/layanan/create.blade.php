<div>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 uppercase">Tambah Layanan</h2>

        <div class="flex space-x-2">
            <a href="{{ route('admin.layanan.index') }}"
                class="px-4 py-2 text-gray-600 font-bold hover:text-gray-800 transition">LIHAT</a>
            <a href="{{ route('admin.layanan.create') }}"
                class="px-4 py-2 bg-blue-200 text-blue-800 font-bold rounded-full hover:bg-blue-300 transition">TAMBAH</a>
        </div>
    </div>

    <div class="bg-[#1e293b] rounded-lg p-8 shadow-lg text-white">
        <form wire:submit="save" class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-bold mb-2">Title :</label>
                <input wire:model="title" type="text" id="title"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('title')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="icon" class="block text-sm font-bold mb-2">Icon (Heroicons/IconPark name) :</label>
                <input wire:model="icon" type="text" id="icon" placeholder="e.g., heroicon-o-user-group"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('icon')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-bold mb-2">Description :</label>
                <textarea wire:model="description" id="description" rows="5"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                @error('description')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-bold mb-2">Fasilitas :</label>
                @foreach ($fasilitas as $index => $fasilitasItem)
                    <div class="flex gap-2 mb-2">
                        <input wire:model="fasilitas.{{ $index }}" type="text"
                            class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="button" wire:click="removeFasilitas({{ $index }})"
                            class="px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                @endforeach
                <button type="button" wire:click="addFasilitas"
                    class="mt-2 px-4 py-2 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600 transition text-sm">
                    + Tambah Fasilitas
                </button>
                @error('fasilitas')
                    <span class="text-red-400 text-sm block mt-1">{{ $message }}</span>
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
