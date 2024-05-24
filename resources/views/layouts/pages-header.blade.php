<div class="bg-white">
    <header class="bg-[#FCF8F1] bg-opacity-30">
        <div class="px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <div class="flex items-center space-x-4">
                    <a href="/home" title="" class="flex items-center">
                        <img class="w-auto h-24"
                            src="{{ asset('images/logos/WhatsApp Image 2024-05-19 at 20.10.07_12bba774.jpg') }}"
                            alt="PPTQ AL KAUKAB" />
                        <span class="ml-4 text-xl font-semibold text-slate-800">PPTQ AL KAUKAB</span>
                    </a>
                </div>

                <button type="button"
                    class="inline-flex p-2 text-black transition-all duration-200 rounded-md lg:hidden focus:bg-gray-100 hover:bg-gray-100">
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16">
                        </path>
                    </svg>

                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <div class="hidden lg:flex lg:items-center lg:justify-center lg:space-x-10">
                    <a href="/" title=""
                        class="text-base text-black transition-all duration-200 hover:text-opacity-80"> Home </a>
                    <a href="{{ route('santri') }}" title=""
                        class="text-base text-black transition-all duration-200 hover:text-opacity-80"> Santri</a>

                    <a href="{{ route('kriteria') }}" title=""
                        class="text-base text-black transition-all duration-200 hover:text-opacity-80"> kriteria </a>
                    <a href="{{ route('penilian') }}" title=""
                        class="text-base text-black transition-all duration-200 hover:text-opacity-80"> Nilai Akhir</a>
                </div>

                <a href="/login" title=""
                    class="hidden lg:inline-flex items-center justify-center px-5 py-2.5 text-base transition-all duration-200 hover:bg-yellow-300 hover:text-black focus:text-black focus:bg-yellow-300 font-semibold text-white bg-black rounded-full"
                    role="button">Login </a>
            </div>
        </div>
    </header>
</div>
