<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden flex flex-col md:flex-row w-full max-w-4xl h-[600px]">
        <!-- Left Side - Green Background -->
        <div class="w-full md:w-1/2 bg-gradient-to-br from-green-500 to-green-600 p-8 flex flex-col justify-center items-center text-white relative overflow-hidden">
            <!-- Background Pattern (Optional/Simulated) -->
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>

            <div class="z-10 text-center flex flex-col justify-center items-center">
                <div class="bg-white h-36 w-36 rounded-full flex justify-center items-center mb-4 shadow-lg">
                     <!-- Replace with actual logo path if available, using placeholder for now -->
                    <img src="{{ asset('img/logo-klinik.png') }}" alt="UNRI Logo" class="h-32 w-32 object-contain">
                </div>
                <h1 class="text-4xl font-bold mb-2">UNRI</h1>
                <h2 class="text-3xl font-light mb-8">Klinik</h2>
                <p class="text-lg font-medium max-w-xs mx-auto">
                    Klinik UNRI: Layanan Kesehatan Terpadu untuk Keluarga Besar Universitas.
                </p>
            </div>
            
            <!-- Decorative Curves (Simulated with CSS) -->
            <div class="absolute bottom-0 left-0 right-0 h-24 bg-white/10 rounded-t-[100%] transform translate-y-12 scale-x-150"></div>
            <div class="absolute bottom-0 left-0 right-0 h-24 bg-white/10 rounded-t-[100%] transform translate-y-8 scale-x-125"></div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center bg-white">
            <div class="text-center mb-8">
                <div class="flex justify-center items-center gap-2 mb-4">
                     <img src="{{ asset('img/logo-klinik.png') }}" alt="UNRI Logo" class="h-10 w-10 object-contain">
                     <div class="text-left">
                         <h3 class="text-green-700 font-bold text-lg leading-none">UNRI</h3>
                         <p class="text-green-600 text-sm font-medium leading-none">Klinik</p>
                     </div>
                </div>
                <h2 class="text-3xl font-bold text-black">Selamat Datang</h2>
            </div>

            <!-- Tabs -->
            <div class="flex bg-gray-200 rounded-lg p-1 mb-6">
                <button class="flex-1 py-2 px-4 rounded-md text-sm font-medium text-gray-500 hover:text-gray-700">Pengguna Layanan</button>
                <button class="flex-1 py-2 px-4 rounded-md text-sm font-medium bg-green-600 text-white shadow-sm">Staf klinik</button>
            </div>

            <form wire:submit="login" class="space-y-4">
                <!-- NIM / NIK Input -->
                <div>
                    <label for="username" class="block text-sm font-medium text-green-600 mb-1">NIM / NIK</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input wire:model="username" type="text" id="username" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Masukkan NIM/NIK Anda">
                    </div>
                    @error('username') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <div class="relative">
                         <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input wire:model="password" type="password" id="password" class="block w-full pl-10 pr-10 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-green-500 focus:ring-green-500 sm:text-sm" placeholder="Password">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                     @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="flex items-center justify-center">
                    <a href="#" class="text-sm font-medium text-green-600 hover:text-green-500">Lupa Password?</a>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-full text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out uppercase tracking-wider">
                        Login
                    </button>
                </div>
            </form>

             <div class="mt-6 text-center text-xs text-green-600 flex justify-center space-x-2">
                <a href="#" class="hover:underline">Kebijakan Privasi</a>
                <span>|</span>
                <a href="#" class="hover:underline">Kontak Bantuan</a>
            </div>
        </div>
    </div>
</div>
