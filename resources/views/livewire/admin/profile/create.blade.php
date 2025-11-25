<div>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 uppercase">Tambah Profile</h2>

        <div class="flex space-x-2">
            <a href="{{ route('admin.profile.index') }}"
                class="px-4 py-2 text-gray-600 font-bold hover:text-gray-800 transition">LIHAT</a>
            <a href="{{ route('admin.profile.create') }}"
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
                <label for="body" class="block text-sm font-bold mb-2">Body :</label>
                <textarea wire:model="body" id="body" rows="10"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                @error('body')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-sm font-bold mb-2">Image (Optional) :</label>
                <input wire:model="image" type="file" id="image"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" class="mt-2 w-32 h-32 object-cover rounded-lg">
                @endif
                @error('image')
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
