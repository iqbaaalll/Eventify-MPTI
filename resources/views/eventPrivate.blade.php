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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
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

    <div class="w-full h-screen px-4 lg:px-32 pt-32 pb-16">
        <div class=" w-full  h-full rounded-3xl flex flex-col p-8">
            <form class="flex flex-col gap-16" action="/event" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <h3 class="text-3xl font-extrabold">Nama Event</h3>
                    <div class="relative z-0 border-b-2 border-black mt-2">
                        <input type="text" id="floating_standard" name="nama"
                            class="block py-2.5 border-0   px-0 w-full text-sm text-gray-900 bg-transparent   appearance-none  focus:outline-none focus:ring-0   peer"
                            placeholder=" " />
                        <label for="floating_standard"
                            class="absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-500  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Tuliskan nama event</label>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row w-full gap-4 h-full">
                    <div class="lg:basis-1/2 flex flex-col gap-4">
                        <div class="flex flex-col gap-4">
                            <h3 class="text-3xl font-extrabold">Kategori</h3>
                                <select class="bg-transparent border-2 lg:w-1/2 justify-between border-black text-black  focus:ring-4 focus:outline-none focus:ring-yellow-500 font-medium rounded-lg text-sm px-4 py-2.5 text-left inline-flex items-center " name="kategori" id="dropdown" data-live-search="true">
                                    <option hidden>Pilih Kategori</option>
                                    @foreach($kategoris as $kategori)
                                        <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                                    @endforeach
                                </select>
                                {{-- <ul class="py-8 text-sm px-6 flex flex-col gap-4 text-gray-700 "
                                    aria-labelledby="dropdownDefault">
                                    @foreach ($kategoris as $kategori)
                                        <li class="">
                                            <input type="radio" id={{ $kategori->id }} name="kategori"
                                                value={{ $kategori->id }}>
                                            <label for={{ $kategori->id }}>{{ $kategori->nama }}</label><br>
                                        </li>
                                    @endforeach
                                </ul> --}}
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-3xl font-extrabold">Tanggal</h3>

                            <div d class="flex flex-col lg:w-1/2 gap-4">
                                <div class="relative">
                                    <label for="tanggalMulai">Tanggal Mulai</label>
                                    <input type="date" id="tanggalMulai" name="tanggalMulai"
                                        class="bg-transparent border-2 w-full placeholder:italic placeholder:text-slate-400 justify-between border-black   focus:outline-none focus:ring-yellow-500 font-medium  rounded-lg text-sm px-4 py-2.5 inline-flex items-center"
                                        placeholder="Pilih tanggal">
                                </div>
                                <div class="relative">
                                    <label for="tanggalBerakhir">Tanggal Berakhir</label>
                                    <input type="date" id="tanggalBerakhir" name="tanggalBerakhir"
                                        class="bg-transparent border-2 w-full placeholder:italic placeholder:text-slate-400 justify-between border-black   focus:outline-none focus:ring-yellow-500 font-medium  rounded-lg text-sm px-4 py-2.5 inline-flex items-center"
                                        placeholder="Pilih tanggal">
                                </div>
                            </div>

                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-3xl font-extrabold">Waktu</h3>
                            <div class="flex lg:w-1/2 flex-col">
                                <div class="relative mb-3  w-full" data-mdb-with-icon="false"
                                    id="input-toggle-timepicker">
                                    <label for="jamMulai">Jam Mulai</label>
                                    <input type="time" id="jamMulai" name="jamMulai"
                                        class="bg-transparent border-2 w-full placeholder:italic placeholder:text-slate-400 justify-between border-black   focus:outline-none focus:ring-yellow-500 font-medium  rounded-lg text-sm px-4 py-2.5 inline-flex items-center"
                                        placeholder="Pilih Waktu" data-mdb-toggle="input-toggle-timepicker">
                                </div>
                                <div class=" relative mb-3 w-full" data-mdb-with-icon="false"
                                    id="input-toggle-timepicker">
                                    <label for="jamBerakhir">Jam Berakhir</label>
                                    <input type="time" id="jamBerakhir" name="jamBerakhir"
                                        class="bg-transparent border-2 w-full placeholder:italic placeholder:text-slate-400 justify-between border-black   focus:outline-none focus:ring-yellow-500 font-medium  rounded-lg text-sm px-4 py-2.5 inline-flex items-center"
                                        placeholder="Pilih Waktu" data-mdb-toggle="input-toggle-timepicker">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:basis-1/2 flex flex-col justify-between gap-8">
                        <div class="flex flex-col gap-4">

                            <div class="flex flex-col gap-4">
                                <h3 class="text-3xl font-extrabold">Lokasi</h3>

                                <input
                                    class="bg-transparent border-2 w-full lg:w-1/2 justify-between border-black text-black  focus:ring-4 focus:outline-none focus:ring-yellow-500 font-medium rounded-lg text-sm px-4 py-2.5 inline-flex items-center "
                                    type="text" name="lokasi" id="lokasi" placeholder="Pilih lokasi">
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-3xl font-extrabold">Budget</h3>
                                <div class="h-full">
                                    <input type="number" id="budget" name="budget"
                                        class="bg-transparent border-2 w-full lg:w-1/2 justify-between border-black text-black  focus:ring-4 focus:outline-none focus:ring-yellow-500 font-medium rounded-lg text-sm px-4 py-2.5 inline-flex items-center "
                                        placeholder="Pilih range budget">
                                </div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-3xl font-extrabold">Kapasitas Peserta</h3>
                                <div class="h-full">
                                    <input type="number" id="peserta" name="kapasitas"
                                        class="bg-transparent border-2 w-full lg:w-1/2 justify-between border-black text-black  focus:ring-4 focus:outline-none focus:ring-yellow-500 font-medium rounded-lg text-sm px-4 py-2.5 inline-flex items-center "
                                        placeholder="Pilih kapasitas peserta">
                                </div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <h3 class="text-3xl font-extrabold">Poster</h3>
                                <div class="h-full">
                                    <input
                                        class="bg-transparent border-2 w-full lg:w-1/2 justify-between border-black text-black  focus:ring-4 focus:outline-none focus:ring-yellow-500 font-medium rounded-lg text-sm px-4 inline-flex items-center "
                                        id="poster" type="file" name="imagePath">
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <button type="submit"
                                class="px-16 py-8 w-full bg-black text-white border-2 border-black rounded-xl">BUAT
                                EVENT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <script>
        function handler(e) {
            alert(e.target.value);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

</body>

</html>
