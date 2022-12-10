<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Eventify</title>
    <link rel = "icon" href="./img/logo_title2.png"
        type = "image/x-icon">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <div class="w-screen h-screen bg-cover bg-center" style="background-image: url('./img/bg.jpg')">

        <div class="flex flex-col lg:flex-row w-full h-full">
            <div class="py-4 px-8 w-full h-full basis-2/12 lg:basis-5/12">
                <img src="./img/logo.png" alt="">
                <div class="hidden lg:flex flex-col w-full mt-24 items-center justify-center">
                    <img src="./img/MainImage.png" alt="">
                </div>
            </div>
            <div
                class="flex flex-col justify-between items-center p-4 lg:p-44 lg:basis-7/12 rounded-t-3xl lg:rounded-l-3xl bg-white w-full h-full">
                <h1 class="font-bold text-2xl lg:text-3xl">Create your Free Account</h1>
                <div class="w-full h-auto flex flex-col gap-4">

                    <form class="w-full h-fit flex flex-col items-center gap-4" action="/register" method="POST">
                        @csrf
                        <div class="flex flex-col w-full">
                            <label class="text-black/50 font-bold" for="name">Full Name</label>
                            <input
                                class="bg-black/25 rounded-xl px-5 py-4 placeholder:text-black/40 focus:bg-black/5 transition-all"
                                placeholder="Enter your full name here" type="name" name="name" id="name">
                        </div>
                        <div class="flex flex-col w-full">
                            <label class="text-black/50 font-bold" for="email">Email</label>
                            <input
                                class="bg-black/25 rounded-xl px-5 py-4 placeholder:text-black/40 focus:bg-black/5 transition-all"
                                placeholder="Enter your email here" type="email" name="email" id="email">
                        </div>
                        <div class="flex flex-col w-full">
                            <label class="text-black/50 font-bold" for="password">Password</label>
                            <input
                                class="bg-black/25 rounded-xl px-5 py-4 placeholder:text-black/40 focus:bg-black/5 transition-all"
                                placeholder="Enter your password here" type="password" name="password" id="password">
                        </div>
                        <button
                            class="w-1/2 lg:w-1/3 py-4 rounded-xl font-bold bg-yellow-300 border-yellow-300 border-2 hover:bg-transparent transition-all"
                            type="submit">Create Account</button>

                    </form>
                    <p>Already have a account?<a href="/login" class="underline text-yellow-300"> Log in</a>
                    </p>
                </div>
                <div class="flex flex-col text-center w-full">
                    <p class="text-xl font-bold text-black/40">- OR -</p>
                    <div class="flex flex-col lg:flex-row gap-2 justify-around items-center">
                        <a href="">
                            <div
                                class="flex flex-row items-center justify-between p-2 rounded-xl border-2 border-black/25">
                                <img src="./img/Google.png" alt="">
                                <p class="text-black/40">Sign up with Google</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="flex flex-row items-center p-2 rounded-xl border-2 border-black/25">
                                <img class="w-[50px] h-[50px]" src="./img/facebook.png" alt="">
                                <p class="text-black/40">Sign up with Facebook</p>
                            </div>
                        </a>
                    </div>
                </div>
                <p>By signing up, you are agree with our <a href="" class="underline"> Terms & Conditions</a></p>
            </div>
        </div>
    </div>
</body>

</html>
