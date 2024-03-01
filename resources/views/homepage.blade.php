<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Landing Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>

<body>
    <nav class="w-full bg-slate-100 px-4 md:px-8 lg:px-16 py-4 shadow-sm shadow-black fixed">
        <div class="container mx-auto">
            <div class="w-full flex justify-between">
                <div class="flex gap-4 items-center">
                    <img src="/img/logoB.png" alt="logo" srcset="" class="w-8">
                    <span class="font-bold text-2xl text-primary">Borrow Book</span>
                </div>
                <div class="flex gap-4 justify-end text-primary">
                    <ul class="flex gap-4">
                        <li>
                            Home
                        </li>
                        <li>
                            Feature
                        </li>
                        <li>
                            <a href="/login" class="px-4 py-2 rounded bg-primary text-teks hover:opacity-75">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{-- JUMBOTRON START  --}}
    <div class="w-screen h-screen bg-primary text-teks mb-4 ">
        <div class="container mx-auto">
            <div class="w-full h-screen flex flex-wrap justify-end md:justify-center items-center px-4 py-2">
                <div class="flex w-full items-center md:w-1/2">
                    <div class="">
                        <h1 class="font-bold text-2xl md:text-4xl lg:text-6xl leading-6 mb-4">Selamat Datang di Web
                            Peminjaman Buku
                        </h1>
                        <h2 class="font-light text-sm md:text-lg">Sistem Peminjaman Mudah dan Cepat</h2>
                    </div>
                </div>
                <div class="flex w-full justify-center items-center md:w-1/2">
                    <img src="/img/logoB.png" alt="" srcset="" class="">
                </div>
            </div>
        </div>
    </div>
    {{-- JUMBOTRON END  --}}
    {{-- FEATURE START  --}}
    <div class="container mx-auto">
        <div class="px-4 py-2 w-full">
            <div class="w-full text-primary">
                <h3 class="font-bold text-lg md:text-2xl  ">Cek Fitur Yang Kami Punya</h3>
                <h4 class="font-light text-sm md:text-lg ">Tekan Tombol dibawah untuk memulai</h4>
                <hr class="text-slate-200 my-4 w-1/3">
            </div>
            <div class="grid grid-cols-3 gap-4 ">
                <a href="/books" class="flex flex-col">
                    <img src="/img/book.jpg" alt="" srcset="" class="">
                </a>
                <a href="/books" class="flex flex-col">
                    <img src="/img/book.jpg" alt="" srcset="" class="">
                </a>
            </div>
        </div>
    </div>
    {{-- FEATURE END  --}}
</body>

</html>
