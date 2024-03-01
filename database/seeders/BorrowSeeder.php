<?php

namespace Database\Seeders;

use App\Models\Borrow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Borrow::create([
            'user_id' => 1,
            'book_id' => 1,
            'borrow_date' => today(),
            'return_date' => now()->addDays(7),
        ]);
    }
}
