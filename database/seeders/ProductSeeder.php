<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'title' => 'iPhone 13 Pro Max',
            'price' => '123456',
            'short_desc' => 'iphone 13pro max',
            'desc' => 'iphone 13 max',
            'category_id' => 1,
            'thumbnail' => 'iPhone 13 Pro Maxthumb-image-1657374236260.png',
            'color' => 'green'
        ]);

        Product::create([
            'title' => 'iPhone 13',
            'price' => '123456',
            'short_desc' => 'iphone 13',
            'desc' => 'iphone 13',
            'category_id' => 1,
            'thumbnail' => 'iPhone 13thumb-image-1657374272512.jpg',
            'color' => 'blue'
        ]);

        Product::create([
            'title' => 'iPhone 11',
            'price' => '123456',
            'short_desc' => 'iphone 11',
            'desc' => 'iphone 11',
            'category_id' => 1,
            'thumbnail' => 'iPhone 11thumb-image-1657374313803.png',
            'color' => 'green'
        ]);

        Product::create([
            'title' => 'iPhone 12',
            'price' => '123456',
            'short_desc' => 'iphone 12',
            'desc' => 'iphone 12',
            'category_id' => 1,
            'thumbnail' => 'iPhone 12thumb-image-1657374293635.png',
            'color' => 'blue'
        ]);
    }
}
