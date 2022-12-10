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

    <section id="katogori-event">
        <div class="w-full h-full px-4 py-24 lg:py-40 lg:px-32 flex flex-col gap-16 lg:gap-32">

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

    @include('partials.footer')

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>
