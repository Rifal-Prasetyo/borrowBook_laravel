<x-layout.header :site="$site" />

<x-components.navbar />
{{-- JUMBOTRON START  --}}
@if (Session::has('message'))
    <x-components.alert :color="Session::get('message')['color']" :message="Session::get('message')['message']" />
@endif
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
        <div class="grid grid-cols-3 gap-4">
            <a href="/books"
                class="flex flex-col justify-center hover:opacity-75 transition-all ease-in-out duration-100">
                <img src="/img/book.jpg" alt="" srcset="" class="w-full md:w-[50%] mb-2">
                <span class="font-light text-sm md:text-lg text-primary">Daftar Buku</span>
            </a>
            <a href="/books"
                class="flex flex-col justify-center hover:opacity-75 transition-all ease-in-out duration-100">
                <img src="/img/book.jpg" alt="" srcset="" class="w-full md:w-[50%] mb-2">
                <span class="font-light text-sm md:text-lg text-primary">User</span>
            </a>
            <a href="/books"
                class="flex flex-col justify-center hover:opacity-75 transition-all ease-in-out duration-100">
                <img src="/img/book.jpg" alt="" srcset="" class="w-full md:w-[50%] mb-2">
                <span class="font-light text-sm md:text-lg text-primary">About</span>
            </a>
        </div>
    </div>
</div>
{{-- FEATURE END  --}}
{{-- FOOTER START  --}}
<x-layout.footer />
