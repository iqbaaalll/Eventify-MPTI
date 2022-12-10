<nav class="bg-white w-full z-50 h-fit fixed border-gray-200 px-2 sm:px-32 py-4 rounded ">
    <div class=" flex flex-wrap items-center justify-between md:justify-center lg:justify-between mx-auto">
        <a href="/" class="flex items-center">
            <img src="{{ URL::asset('/img/logo.png') }}" class="h-8 mr-3 sm:h-12" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="flex flex-col p-4 items-center mt-4 border text-black border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white  ">
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 hover:bg-black hover:text-white transition-all rounded "
                        aria-current="page">TELUSURI</a>
                </li>
                <li>
                    <a href="/kategori"
                        class="block py-2 pl-3 pr-4 hover:bg-black hover:text-white transition-all rounded ">KATEGORI</a>
                </li>
                <li>
                    <a href="/favorit"
                        class="block py-2 pl-3 pr-4 hover:bg-black hover:text-white transition-all rounded ">FAVORIT</a>
                </li>
                <li>
                    <a href="/jenisEvent"
                        class="{{ auth()->user() ? 'block' : 'hidden' }} block py-2 pl-3 pr-4 hover:bg-black hover:text-white transition-all rounded ">BUAT
                        EVENT</a>
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button
                            class="{{ auth()->user() ? 'block' : 'hidden' }} py-2 pl-3 pr-4 text-white bg-red-500 border-2 hover:text-red-500 border-red-500 rounded  hover:bg-transparent transition-all   "
                            type="submit">KELUAR</button>
                    </form>
                <li>
                    <a href="/login"
                        class="{{ auth()->user() ? 'hidden' : 'block' }} py-2 pl-3 pr-4 text-white bg-black border-2 hover:text-black border-black rounded  hover:bg-transparent transition-all   ">MASUK</a>
                </li>
                <li>
                    <a href="/register"
                        class="{{ auth()->user() ? 'hidden' : 'block' }} py-2 pl-3 pr-4 text-white bg-black border-2 hover:text-black border-black rounded  hover:bg-transparent transition-all   ">DAFTAR</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
