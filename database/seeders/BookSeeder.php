<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Book::create([
            'name_book' => "TENTANG KAMU",
            'author_book' => 'Tere Liye',
            'description_book' => 'Tentang Kamu adalah sebuah novel perjalanan hidup karya Tere Liye, Diterbitkan pertama kali tahun 2016. Tentang kamu adalah sebuah novel yang menceritakan perjuangan Zaman, seorang pengacara muda dari Thompson & Co, untuk mengurus warisan Sri Ningsih',
            'category_id' => 1,
            'publish_year' => 2016
        ]);
        Book::create([
            'name_book' => "Bumi",
            'author_book' => 'Tere Liye',
            'description_book' => 'Bumi adalah sebuah novel karya Tere Liye. Novel ini merupakan buku pertama dari serial Bumi atau Dunia Paralel dan diterbitkan pertama kali oleh Gramedia Pustaka Utama tahun 2014.',
            'category_id' => 2,
            'publish_year' => 2014
        ]);
        Book::create([
            'name_book' => "HUJAN (unedited version)",
            'author_book' => 'Tere Liye',
            'description_book' => 'Kisah tentang melupakan. Tentang Hujan.**Novel ini adalah naskah awal (asli) dari penulis; tanpa sentuhan editing, layout serta cover dari penerbit, dengan demikian, naskah ini berbeda dengan versi cetak, pun memiliki kelebihan dan kelemahan masing-masing',
            'category_id' => 3,
            'publish_year' => 2016
        ]);
    }
}
