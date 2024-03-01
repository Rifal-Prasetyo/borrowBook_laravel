<?php

namespace Database\Seeders;

use App\Models\Settigs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettigsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Settigs::create([
            'maximum_to_borrow' => 3,
            'fine_cost' => 1000
        ]);
    }
}
