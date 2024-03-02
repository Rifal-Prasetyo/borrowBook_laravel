<x-layout.header :site="$site" />

<x-components.navbar />
<div class="block mb-6">
    <div class="container mx-auto px-4 py-2">
        <div class="flex flex-wrap mt-11 ">
            <div class="w-1/4  ">
                <img src="/img/book.jpg" alt="" srcset="" class=" w-72 rounded">
            </div>
            <div class="text-primary w-3/4 px-4 ">
                <h3 class="font-bold text-lg md:text-2xl lg:text-4xl">Kacang Hijau</h3>
                <p class=" text-xs md:text-lg w-full md:w-[50%]">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Aspernatur sequi nisi quos doloremque est excepturi et, accusamus fuga cupiditate iste?</p>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto text-primary px-4 py-2">
    <h4 class="font-bold text-sm md:text-lg lg:text-2xl mb-4 ">Foto lainnya</h4>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class=" rounded 5 hover:opacity-75">
            <img src="/img/book.jpg" alt="" srcset="" class=" w-36 rounded">
        </div>

    </div>
</div>
<div class="bottom-0 w-full fixed">

    <x-layout.footer />
</div>
