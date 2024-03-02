<x-layout.header :site="$site" />

<x-components.navbar />

<div class="w-screen h-screen flex justify-center items-center">


    <div class="w-[90%] md:w-[40%] lg:w-[30%] bg-slate-50 px-8 py-8 rounded-2xl">
        <h1 class="font-bold text-lg md:text-2xl mb-4 w-full  text-slate-600">Login Ke akunmu sekarang</h1>
        @if (Session::has('message'))
            <x-components.alert :color="Session::get('message')['color']" :message="Session::get('message')['message']" />
        @endif
        <form action="{{ route('loginAction') }}" method="post" class="w-full ">
            @csrf
            <label for="email" class="font-light text-xs md:text-sm">Email</label>
            <input type="email" name="email" id="email" class="w-full px-4 py-2 rounded mb-2 border border-black"
                placeholder="Masukkan Email">
            <label for="password" class="font-light text-xs md:text-sm">Kata Sandi</label>
            <input type="password" name="password" id="password"
                class="w-full px-4 py-2 rounded mb-2 border border-black" placeholder="Masukkan Password">
            <button type="submit" class="px-4 py-2 bg-primary text-teks rounded hover:opacity-80 mb-2">Login</button>
            <p class="text-xs md:text-lg font-light text-primary">Belum Memiliki akun? <a
                    class="font-bold text-red-500 underline" href="/register">Daftar</a></p>

        </form>
    </div>


</div>


<div class="bottom-0 w-full fixed">

    <x-layout.footer />
</div>
