<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create(['title' => 'iPhone']);
        Category::create(['title' => 'iPad']);
        Category::create(['title' => 'iMac']);
        Category::create(['title' => 'Apple Watch']);
        Category::create(['title' => 'Sounds']);
        Category::create(['title' => 'Accessories']);
    }
}
