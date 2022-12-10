<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    @vite('resources/css/app.css')
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <title>Eventify</title>
    <link rel = "icon" href="./img/logo_title2.png"
        type = "image/x-icon">
</head>

<body>
    @include('partials.navbar')

    <section id="hero">
        <div class="w-full h-screen p-2 lg:p-32">

            <div id="default-carousel" class="w-full h-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-full w-full p-32 overflow-hidden rounded-lg">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./img/banner1.png"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./img/banner2.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./img/banner3.png"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-16 sm:h-16 bg-white/30 dark:bg-gray-800/50 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 " fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-16 sm:h-16 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
    </section>

    <section id="event-terdekat">
        <div class="w-full h-full px-4 py-24 lg:py-40 lg:px-32 flex flex-col gap-16 lg:gap-32">
            <div class="relative w-fit">
                <h1 class="text-3xl font-extrabold z-10 relative">EVENT TERDEKAT</h1>
                <span class="absolute top-3 -right-5"><img src="./img/vector_header.png" alt=""></span>
            </div>
            <div class="flex flex-col lg:flex-row justify-between w-150 h-150 gap-8">

                @for ($event = 1; $event < 3; $event++)
                    <div class=" bg-white border border-transparent hover:border-gray-300 transition-all rounded-lg  ">
                        <a href="/event/{{ $events[$event]->id }}">
                            <img class="rounded-t-lg w-full" src="./img/events/{{ $events[$event]->imagePath }}"
                                alt="" />
                        </a>
                        <div class="py-4">
                            <a href="/event/{{ $events[$event]->id }}">
                                <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900">
                                    {{ $events[$event]->nama }}
                                </h5>
                            </a>
                            <div class="flex flex-row w-full justify-between">

                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Now!</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-12 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>


                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </section>

    <section id="buat-event">
        <div class="w-full h-[75vh] bg-cover lg:bg-top bg-right flex flex-row md:justify-end bg-no-repeat py-24 px-4"
            style="background-image: url('./img/bg_buatevent.png')">
            <div class="flex flex-col w-full lg:basis-1/2 justify-between">
                <div class="flex flex-col gap-4">
                    <div class="relative w-fit p-2 pr-10">
                        <span class="block absolute inset-1 -rotate-3 bg-white shadow-md" aria-hidden="true"></span>
                        <span class="relative text-4xl lg:text-6xl text-black font-extrabold">BINGUNG</span>
                    </div>
                    <span class="relative text-4xl lg:text-6xl text-black font-extrabold">JUAL TIKET EVENT?</span>
                </div>
                <p class="text-lg lg:text-xl"><span class="font-bold">EVENTIFY</span> solusinya, menjual tiket dengan
                    sederhana dan rasakan
                    kemudahannya</p>
                <div>

                    <p class="font-bold text-lg lg:text-xl">BURUAN KLIK TOMBOLNYA</p>
                    <p class="text-lg lg:text-xl">*Syarat & ketentuan berlaku</p>
                </div>
                <a href="/jenisEvent">
                    <button
                        class="px-6 py-3 w-full lg:w-fit bg-black text-white rounded-lg border-2 border-black hover:bg-transparent transition-all hover:text-black">
                        BUAT EVENT
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section id="katogori-event">
        <div class="w-full h-full px-4 py-24 lg:py-40 lg:px-32 flex flex-col gap-16 lg:gap-32">
            <div class="relative w-fit">
                <h1 class="text-3xl font-extrabold z-10 relative">KATEGORI EVENT</h1>
                <span class="absolute top-3 -right-5"><img src="./img/vector_header.png" alt=""></span>
            </div>
            <div class="w-full h-full flex lg:flex-row flex-col justify-between gap-4">
                <div class=" bg-white border border-transparent hover:shadow-lg transition-all rounded-lg  ">
                    <a href="#">
                        <img class="rounded-t-lg w-full" src="./img/kategori1.png " alt="" />
                    </a>
                    <div class="py-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900">Lomba</h5>
                        </a>
                        <div class="flex flex-row w-full justify-between">

                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Now!</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-12 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>


                        </div>
                    </div>
                </div>
                <div class=" bg-white border border-transparent hover:shadow-lg transition-all rounded-lg  ">
                    <a href="#">
                        <img class="rounded-t-lg w-full" src="./img/kategori2.png " alt="" />
                    </a>
                    <div class="py-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900">Musik</h5>
                        </a>
                        <div class="flex flex-row w-full justify-between">

                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Now!</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-12 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>


                        </div>
                    </div>
                </div>
                <div class=" bg-white border border-transparent hover:shadow-lg transition-all rounded-lg  ">
                    <a href="#">
                        <img class="rounded-t-lg w-full" src="./img/kategori3.png " alt="" />
                    </a>
                    <div class="py-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900">Exhibition</h5>
                        </a>
                        <div class="flex flex-row w-full justify-between">

                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Now!</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-12 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="join">
        <div class="w-full h-full px-4 py-24 lg:py-40 lg:px-32 flex text-white flex-col gap-16 lg:gap-32"
            style="background-color: #E5C643">
            <div class="flex flex-col lg:px-32 justify-center gap-6 items-center text-center">
                <h2 class="text-2xl lg:text-5xl font-bold">JOIN EVENT ORGANIZER COMMUNITY TO GET MONTHLY PROMO</h2>
                <p class="text-lg">Type your email down below and be cretator event generation</p>

                <form class="w-1/2">
                    <div class="relative">
                        <input type="email" id="email"
                            class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Add your email here">
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 hover:text-black border-2 border-black bg-black hover:bg-transparent focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">SEND</button>
                    </div>
                </form>

            </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>
