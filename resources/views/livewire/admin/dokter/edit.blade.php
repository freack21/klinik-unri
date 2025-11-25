<div>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 uppercase">Edit Dokter</h2>

        <div class="flex space-x-2">
            <a href="{{ route('admin.dokter.index') }}"
                class="px-4 py-2 text-gray-600 font-bold hover:text-gray-800 transition">LIHAT</a>
            <a href="{{ route('admin.dokter.create') }}"
                class="px-4 py-2 text-gray-600 font-bold hover:text-gray-800 transition">TAMBAH</a>
        </div>
    </div>

    <div class="bg-[#1e293b] rounded-lg p-8 shadow-lg text-white">
        <form wire:submit="update" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-bold mb-2">Nama :</label>
                    <input wire:model="name" type="text" id="name"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('name')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="specialization" class="block text-sm font-bold mb-2">Spesialisasi :</label>
                    <input wire:model="specialization" type="text" id="specialization"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('specialization')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="patients" class="block text-sm font-bold mb-2">Jumlah Pasien :</label>
                    <input wire:model="patients" type="text" id="patients" placeholder="e.g., 2,000+"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('patients')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="experience" class="block text-sm font-bold mb-2">Pengalaman :</label>
                    <input wire:model="experience" type="text" id="experience" placeholder="e.g., 10 Tahun"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('experience')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="education" class="block text-sm font-bold mb-2">Pendidikan :</label>
                    <input wire:model="education" type="text" id="education"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('education')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="languages" class="block text-sm font-bold mb-2">Bahasa :</label>
                    <input wire:model="languages" type="text" id="languages" placeholder="e.g., Indonesia, English"
                        class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('languages')
                        <span class="text-red-400 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="image" class="block text-sm font-bold mb-2">Foto Dokter :</label>
                <input wire:model="image" type="file" id="image"
                    class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" class="mt-2 h-32 w-32 object-cover rounded-lg">
                @elseif($existingImage)
                    <img src="{{ asset($existingImage) }}" class="mt-2 h-32 w-32 object-cover rounded-lg">
                @endif
                @error('image')
                    <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-bold mb-2">Keahlian (Skills) :</label>
                @foreach ($skills as $index => $skill)
                    <div class="flex gap-2 mb-2">
                        <input wire:model="skills.{{ $index }}" type="text"
                            class="w-full px-4 py-2 rounded-lg bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="button" wire:click="removeSkill({{ $index }})"
                            class="px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                @endforeach
                <button type="button" wire:click="addSkill"
                    class="mt-2 px-4 py-2 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600 transition text-sm">
                    + Tambah Keahlian
                </button>
                @error('skills')
                    <span class="text-red-400 text-sm block mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-bold mb-2">Jadwal Praktik :</label>
                <div class="space-y-2">
                    @foreach ($schedule as $index => $daySchedule)
                        <div class="flex items-center gap-4 bg-gray-700 p-3 rounded-lg">
                            <div class="w-24 font-bold">{{ $daySchedule['day'] }}</div>
                            <div class="flex-1">
                                <input wire:model="schedule.{{ $index }}.time" type="text"
                                    placeholder="Waktu (e.g., 08.00 – 12.00 WIB)"
                                    class="w-full px-3 py-1 rounded bg-white text-gray-800 focus:outline-none">
                            </div>
                            <div class="flex items-center gap-2">
                                <input wire:model="schedule.{{ $index }}.available" type="checkbox"
                                    class="w-5 h-5 rounded text-blue-600 focus:ring-blue-500">
                                <span class="text-sm">Tersedia</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                @error('schedule')
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
