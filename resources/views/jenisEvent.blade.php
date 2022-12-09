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
    <title>JENIS EVENT</title>
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
                    <a href="">
                        <button
                            class="bg-black w-full px-6 py-3 text-3xl border-yellow-500 border-2 text-white rounded-xl hover:bg-transparent hover:text-black hover:border-black transition-all">
                            Private
                        </button>
                    </a>
                    <a href="/eventPrivate">
                        <button
                            class="bg-black w-full px-6 py-3 text-3xl border-yellow-500 border-2 text-white rounded-xl hover:bg-transparent hover:text-black hover:border-black transition-all">
                            Public
                        </button>
                    </a>
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
