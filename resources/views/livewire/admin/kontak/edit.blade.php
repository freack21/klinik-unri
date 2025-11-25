<div>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 uppercase">Edit Kontak</h2>

        <div class="flex space-x-2">
            <a href="{{ route('admin.kontak.index') }}"
                class="px-4 py-2 text-gray-600 font-bold hover:text-gray-800 transition">LIHAT</a>
        </div>
    </div>

    <div class="bg-[#1e293b] rounded-lg p-8 shadow-lg text-white">
        <form wire:submit="update" class="space-y-6">
            <div>
                <label for="description" class="block text-sm font-bold mb-2">Description :</label>
                <textarea wire:model="description" id="description" rows="3"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                @error('description')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="service_hours" class="block text-sm font-bold mb-2">Waktu Pelayanan :</label>
                    <input wire:model="service_hours" type="text" id="service_hours"
                        placeholder="e.g., Senin – Jumat 08:00 - 16:00"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('service_hours')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="phone" class="block text-sm font-bold mb-2">Telepon :</label>
                    <input wire:model="phone" type="text" id="phone"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('phone')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="whatsapp" class="block text-sm font-bold mb-2">WhatsApp :</label>
                    <input wire:model="whatsapp" type="text" id="whatsapp"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('whatsapp')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-bold mb-2">Email :</label>
                    <input wire:model="email" type="email" id="email"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('email')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="map_embed_url" class="block text-sm font-bold mb-2">Google Maps Embed URL (src only)
                    :</label>
                <input wire:model="map_embed_url" type="text" id="map_embed_url"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <p class="text-gray-400 text-xs mt-1">Paste only the 'src' attribute value from the Google Maps embed
                    code.</p>
                @error('map_embed_url')
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
