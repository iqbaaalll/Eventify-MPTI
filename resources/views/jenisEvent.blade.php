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
    <div class="w-full h-screen px-4 lg:px-32 py-32">
        <div class="bg-gray-200 w-full h-full rounded-3xl flex flex-row p-8 lg:p-0 lg:pl-16 relative">
            <div class="lg:basis-1/2 w-full h-full flex flex-col justify-between py-16">
                <div>

                    <h1 class="text-6xl lg:text-8xl font-extrabold">Tentukan <br>
                        Jenis </h1>
                    <div class="relative w-fit p-2 pr-10">
                        <span class="block absolute inset-1 -rotate-3 bg-yellow-500 shadow-md"
                            aria-hidden="true"></span>
                        <span class="relative text-6xl lg:text-8xl text-black font-extrabold">Eventmu!</span>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 flex flex-col lg:flex-row justify-between lg:justify-evenly  gap-4">
                    <a href="/eventPrivate">
                        <button
                            class="bg-black w-full px-6 py-3 text-3xl border-yellow-500 border-2 text-white rounded-xl hover:bg-transparent hover:text-black hover:border-black transition-all">
                            Public
                        </button>
                    </a>
                        <button class="bg-black w-full px-6 py-3 text-3xl border-yellow-500 border-2 text-white rounded-xl hover:bg-transparent hover:text-black hover:border-black transition-all" type="button" data-modal-toggle="popup-modal">
                            Private
                        </button>
                        <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-md md:h-auto">
                                <div class="relative bg-black rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-6 text-center">
                                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Mohon maaf, saat ini fitur belum tersedia</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="hidden lg:block relative basis-1/2 w-full h-full">
                <img class="absolute bottom-0" src="./img/bg_jenisEvent.png" alt="">
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>
