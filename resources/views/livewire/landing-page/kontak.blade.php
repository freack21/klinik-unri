<div class="min-h-screen bg-white">

    {{-- HEADER --}}
    <div class="bg-[#A5D7D2] py-16">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900">Contact Us</h1>
            <p class="text-gray-700 mt-4 text-lg">
                Kami siap melayani dan menjawab pertanyaan Anda. Silakan kunjungi lokasi kami <br>
                atau kirim pesan melalui formulir di bawah.
            </p>
        </div>
    </div>

    {{-- SECTION KOTAK INFO + MAP --}}
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid md:grid-cols-2 gap-12">

            {{-- KIRI – 4 KOTAK --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

                {{-- Waktu Pelayanan --}}
                <div class="bg-[#F1FAF9] shadow-md p-8 rounded-xl text-center">
                    <div class="flex justify-center mb-4">
                        <x-heroicon-s-clock class="w-10 h-10 text-teal-600"/>
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Waktu Pelayanan</h3>
                    <p class="text-gray-700">Senin – Jumat<br>08:00 - 16:00</p>
                </div>

                {{-- Telepon --}}
                <div class="bg-[#F1FAF9] shadow-md p-8 rounded-xl text-center">
                    <div class="flex justify-center mb-4">
                        <x-heroicon-s-phone class="w-10 h-10 text-teal-600"/>
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Telepon</h3>
                    <p class="text-gray-700">082214301418</p>
                </div>

                {{-- WhatsApp --}}
                <div class="bg-[#F1FAF9] shadow-md p-8 rounded-xl text-center">
                    <div class="flex justify-center mb-4">
                        <x-heroicon-s-chat-bubble-left-right class="w-10 h-10 text-teal-600"/>
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">WhatsApp</h3>
                    <p class="text-gray-700">087789760632</p>
                </div>

                {{-- Email --}}
                <div class="bg-[#F1FAF9] shadow-md p-8 rounded-xl text-center">
                    <div class="flex justify-center mb-4">
                        <x-heroicon-s-envelope class="w-10 h-10 text-teal-600"/>
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Email</h3>
                    <p class="text-gray-700">abcd@unri.ac.id</p>
                </div>

            </div>

            {{-- KANAN – MAP --}}
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6584847896!2d101.35824631475395!3d0.4637899997396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a8f3e1e1e1e1%3A0x1e1e1e1e1e1e1e1e!2sUniversitas%20Riau!5e0!3m2!1sid!2sid!4v1234567890123!5m2!1sid!2sid"
                    width="100%"
                    height="450"
                    class="rounded-xl shadow-lg"
                    style="border:0;"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
</div>
