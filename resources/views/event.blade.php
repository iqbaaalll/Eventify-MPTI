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
    <link rel = "icon" href="./img/logo_title2.png"
    type = "image/x-icon">
    <title>{{ $title }} </title>

</head>

<body>
    @include('partials/navbar')

    <section id="hero">
        <div class="w-full h-full lg:h-screen p-2 pt-32 lg:pt-44 md:p-8 lg:p-32">

            <div class="w-screen h-screen">
                <img class="w-9/12 h-9/12" src="/img/events/{{ $event->imagePath }}" alt="">
            </div>

        </div>
    </section>

    <section id="pembelian_tiket">
        <div class="w-full h-full flex flex-col gap-8 lg:gap-24 pt-16 p-2  lg:p-32">
            <div class="relative w-fit p-2 pr-10">
                <span class="block absolute inset-1 -rotate-3 bg-yellow-500 shadow-md" aria-hidden="true"></span>
                <span class="relative text-4xl lg:text-6xl text-black font-extrabold">{{ $event->nama }}</span>
            </div>
            <div class="w-full h-full flex flex-col gap-8 px-4 lg:px-8">
                <div
                    class="w-full h-full py-4 lg:py-16 px-8 lg:px-28 bg-black flex flex-col lg:flex-row justify-between gap-8 lg:gap-0 text-white rounded-xl">
                    <div class="flex flex-col justify-between gap-8 lg:gap-24">
                        <div class="flex flex-col">
                            <h3 class="lg:text-5xl font-bold">
                                TANGGAL
                            </h3>
                            <p class="lg:text-2xl">{{ $event->tanggalMulai }}</p>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="lg:text-5xl font-bold">
                                WAKTU
                            </h3>
                            <p class="lg:text-2xl">{{ $event->jamMulai . ' - ' . $event->jamBerakhir . 'WIB' }}</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-8 lg:gap-24">
                        <div class="flex flex-col">
                            <h3 class="lg:text-5xl font-bold">
                                TEMPAT
                            </h3>
                            <div class="flex flex-row h-auto gap-3 items-baseline">
                                <p class="lg:text-2xl">{{ $event->lokasi }}</p>
                                <div class="flex flex-row gap-2 items-center">
                                    <p>></p>
                                    <p>></p>
                                    <p>></p>
                                </div>
                                <a href="">
                                    <button
                                        class="bg-white box-border text-black px-6 py-3 rounded-xl border-2 border-white hover:bg-transparent hover:text-white transition-all">
                                        Lihat
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="lg:text-5xl font-bold">
                                PENYELENGGARA
                            </h3>
                            <p class="lg:text-2xl">CK Star Entertainment</p>
                        </div>
                    </div>
                </div>
                <button onclick="handleClick()"
                    class="w-full h-full py-3 text-2xl font-bold bg-yellow-500 border-2 rounded-lg border-black text-black hover:bg-transparent transition-all">
                    BELI TIKET
                </button>
            </div>
        </div>
    </section>

    <section id="deskrpsi_tiket">
        <div class="w-full h-full p-2 pt-32 lg:pt-44 md:p-8 lg:p-32 flex flex-col gap-8">
            <div class="relative w-fit p-2 pr-10">
                <span class="block absolute inset-1 -rotate-3 bg-yellow-500 shadow-md" aria-hidden="true"></span>
                <span class="relative text-2xl lg:text-4xl text-black font-extrabold">DESKRIPSI</span>
            </div>
            <p class="leading-relaxed">Woke Up Fest is an original music festival by CK Star Entertainment
                The Woke Up Fest or simply WUF is meant to 'awake' our awareness of varieties or “the colourfulness” of
                things around us that have been there all along, through cross-genre musics and fun activities.
                <br>
                Woke Up Fest 2023's purpose is to “really wake” everyone up in the beginning of the year.
            </p>
        </div>
    </section>

    <section id="syarat">
        <div class="w-full h-full p-2 pt-32 lg:pt-44 md:p-8 lg:p-32 flex flex-col gap-8">
            <div class="relative w-fit p-2 pr-10">
                <span class="block absolute inset-1 -rotate-3 bg-yellow-500 shadow-md" aria-hidden="true"></span>
                <span class="relative text-2xl lg:text-4xl text-black font-extrabold">SYARAT & KETENTUAN</span>
            </div>
            <ol class="list-decimal">
                <li>Mohon siapkan data pembeli tiket (nama, email, no. telp, dan NIK)
                </li>
            </ol>

        </div>
    </section>

    @include('partials.footer')

    <script>
        function handleClick() {
            alert('Anda berhasil memesan tiket')
            window.location = "http://localhost:8000/";
        }
    </script>

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>
