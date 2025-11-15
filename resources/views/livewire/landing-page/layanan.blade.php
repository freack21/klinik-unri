<div class="pt-24 pb-32 relative overflow-hidden">

    {{-- Title --}}
    <h2 class="text-center text-lg font-semibold bg-[#AEE5DF] w-max mx-auto px-10 py-2 rounded-full text-gray-700 relative z-10">
        Layanan Klinik
    </h2>

    {{-- Grid --}}
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 px-6 md:px-20 lg:px-40 relative z-10">

        @foreach ($services as $service)
            <a href="{{ route('landingpage.lihat-layanan', ['id' => $service['id']]) }}" class="bg-[#A7E2D8] rounded-xl shadow-md p-10 flex items-center gap-6 hover:scale-[1.02] transition cursor-pointer">
                <div class="bg-white rounded-full p-4 shadow-md">
                    <x-dynamic-component
                        :component="$service['icon']"
                        class="w-10 h-10 text-[#2364AA]"
                    />
                </div>

                <p class="font-bold text-white text-2xl leading-tight">
                    {!! nl2br(e($service['title'])) !!}
                </p>
            </a>
        @endforeach

    </div>

</div>
