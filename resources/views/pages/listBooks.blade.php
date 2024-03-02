<x-layout.header :site="$site" />

<x-components.navbar />
<div class="bg-primary text-teks ">
    <div class="container mx-auto flex justify-center h-56 flex-col px-4 py-2">
        <h1 class="font-bold text-lg md:text-2xl ">Daftar Buku</h1>
        <h2 class="font-light text-sm md:text-lg">Daftar semua Buku yang ditampikan</h2>

    </div>
</div>
<div class=" border-t-4 border-accent h-screen flex">

    <aside class=" min-w-[150px] md:w-[300px] bg-primary text-teks px-4 py-2">
        <h3 class="font-bold text-sm md:text-lg">Kategori</h3>
        <hr class="text-slate-200 my-2 w-1/3">
        <div class="w-[60%]">
            <ul>
                <li class="flex justify-between py-2 hover:bg-accent rounded px-2">Agama</li>
                <li
                    class="flex justify-between py-2 hover:bg-accent rounded px-2 overflow-hidden hover:overflow-visible">
                    Pengetahuan</li>
                <li class="flex justify-between py-2 hover:bg-accent rounded px-2">Fiksi</li>
                <li class="flex justify-between py-2 hover:bg-accent rounded px-2">Cinta</li>
            </ul>
        </div>
    </aside>
    <main class="w-3/4 px-4 py-2">
        <form action="" method="get" class="w-full flex justify-between mb-4">
            <input type="text" name="search" id="search" class=" border border-black rounded w-[75%] px-4 py-2"
                placeholder="Pencarian" />
            <button type="submit"
                class="px-4 py-2 bg-primary text-teks rounded hover:opacity-75 w-[20%] ">Cari</button>
        </form>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 overflow-y-scroll">
            <a href=""
                class="border border-slate-400 shadow text-primary rounded hover:opacity-75 transition-all duration-100">
                <img src="/img/book.jpg" alt="" srcset="" class="aspect-video object-cover mb-2">
                <p class="font-light text-xs md:text-sm px-2">Kacang Hijau</p>
                <span class="font-bold font-mono text-sm md:text-lg lg:text-2xl px-2 mb-2 ">Rp. 90.000</span>
            </a>




        </div>
    </main>

</div>
<x-layout.footer />
