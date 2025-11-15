<div class="min-h-screen bg-white">

    {{-- HEADER JUDUL --}}
    <div class="py-12 text-center">
        <h1 class="text-4xl font-bold text-gray-800">{{ $doctor['specialization'] }}</h1>
    </div>

    {{-- BAGIAN ATAS: DOKTER UTAMA & PILIHAN --}}
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10">

        {{-- FOTO DOKTER UTAMA --}}
        <div class="relative flex justify-center">
            <div class="bg-gradient-to-b from-[#D7E7EF] to-white rounded-full w-[380px] h-[380px] flex items-center justify-center shadow-lg">
                <img src="{{ $doctor['image'] }}" class="h-[330px] object-contain">
            </div>

            <div class="absolute -bottom-8 bg-white px-6 py-3 shadow-lg rounded-xl border border-gray-200">
                <p class="font-semibold text-lg">{{ $doctor['name'] }}</p>
            </div>
        </div>

        {{-- PILIHAN DOKTER --}}
        <div>
            {{-- Dropdown --}}
            <div class="flex justify-end mb-6">
                <select wire:model.live="selectedDoctor"
                        class="px-4 py-2 border rounded-xl shadow-sm focus:ring-teal-500">
                    @foreach($doctors as $key => $d)
                        <option value="{{ $key }}">{{ $d['specialization'] }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Mini Cards --}}
            <div class="flex gap-6 flex-wrap justify-end">

                @foreach($doctors as $key => $d)
                    <div wire:click="$set('selectedDoctor', '{{ $key }}')"
                         class="cursor-pointer bg-[#E9F3FA] w-48 rounded-xl shadow p-3 border hover:scale-105 transition
                                {{ $selectedDoctor == $key ? 'ring-2 ring-teal-500' : '' }}">
                        <img src="{{ $d['image'] }}" class="w-24 h-28 object-contain mx-auto">
                        <p class="text-center text-sm font-medium mt-1">{{ $d['name'] }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    {{-- PROFIL & JADWAL --}}
    <div class="max-w-7xl mx-auto p-10 grid lg:grid-cols-2 gap-10 mt-24">
        {{-- PROFIL DOKTER --}}
        <div class="bg-white shadow-md rounded-2xl p-8">
            <h2 class="font-bold text-xl mb-4">Profil Dokter</h2>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="bg-[#D7E7EF] p-4 rounded-xl text-center">
                    <p class="text-sm text-gray-600">Pasien</p>
                    <p class="text-lg font-bold">{{ $doctor['patients'] }}</p>
                </div>

                <div class="bg-[#D7E7EF] p-4 rounded-xl text-center">
                    <p class="text-sm text-gray-600">Pengalaman</p>
                    <p class="text-lg font-bold">{{ $doctor['experience'] }}</p>
                </div>

                <div class="bg-[#D7E7EF] p-4 rounded-xl text-center">
                    <p class="text-sm text-gray-600">Pendidikan</p>
                    <p class="text-lg font-bold">{{ $doctor['education'] }}</p>
                </div>

                <div class="bg-[#D7E7EF] p-4 rounded-xl text-center">
                    <p class="text-sm text-gray-600">Bahasa</p>
                    <p class="text-lg font-bold">{{ $doctor['languages'] }}</p>
                </div>
            </div>

            <p class="font-semibold mb-3">Keahlian Khusus:</p>

            <div class="flex flex-wrap gap-3">
                @foreach($doctor['skills'] as $skill)
                    <span class="px-4 py-1 bg-[#E9F3FA] rounded-full text-sm font-medium">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </div>

        {{-- JADWAL PRAKTIK --}}
        <div class="bg-white shadow-md rounded-2xl p-8">

            <div class="flex justify-between items-center mb-6">
                <h2 class="font-bold text-xl">Jadwal Praktik</h2>

                <div class="bg-teal-600 text-white px-4 py-2 rounded-lg shadow text-sm">
                    <p>+62 812-3456-7890</p>
                    <p>Ruang Melati</p>
                </div>
            </div>

            @foreach($doctor['schedule'] as $s)
                <div class="flex justify-between items-center py-2 last:border-none">
                    <p class="font-medium">{{ $s['day'] }}</p>

                    <div class="flex items-center gap-3">
                        <x-heroicon-s-clock class="w-5 h-5 text-teal-600"/>

                        <p class="text-gray-700 text-sm">
                            {{ $s['time'] }}
                        </p>

                        @if($s['available'])
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Tersedia</span>
                        @else
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">Tidak Ada</span>
                        @endif
                    </div>
                </div>
            @endforeach

        </div>

    </div>

</div>
