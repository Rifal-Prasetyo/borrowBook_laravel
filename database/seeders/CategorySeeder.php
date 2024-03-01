<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name_category' => "Agama"
        ]);
        Category::create([
            'name_category' => "Petualangan"
        ]);
        Category::create([
            'name_category' => "Cinta"
        ]);
    }
}
