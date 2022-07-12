<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImages;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProductImages::create([
            'product_id' => '1',
            'image_path' => 'iPhone 13 Pro Max-image-1657374236917.png'
        ]);

        ProductImages::create([
            'product_id' => '1',
            'image_path' => 'iPhone 13 Pro Max-image-1657374236856.png'
        ]);

        ProductImages::create([
            'product_id' => '1',
            'image_path' => 'iPhone 13 Pro Max-image-1657374236162.png'
        ]);

        ProductImages::create([
            'product_id' => '1',
            'image_path' => 'iPhone 13 Pro Max-image-1657374236396.png'
        ]);

        ProductImages::create([
            'product_id' => '1',
            'image_path' => 'iPhone 13 Pro Max-image-165737423656.png'
        ]);

        ProductImages::create([
            'product_id' => '1',
            'image_path' => 'iPhone 13 Pro Max-image-1657374236307.png'
        ]);

        ProductImages::create([
            'product_id' => '2',
            'image_path' => 'iPhone 13-image-1657374272932.jpg'
        ]);

        ProductImages::create([
            'product_id' => '2',
            'image_path' => 'iPhone 13-image-1657374272201.jpg'
        ]);

        ProductImages::create([
            'product_id' => '2',
            'image_path' => 'iPhone 13-image-1657374272176.jpg'
        ]);

        ProductImages::create([
            'product_id' => '2',
            'image_path' => 'iPhone 13-image-1657374272962.jpg'
        ]);

        ProductImages::create([
            'product_id' => '2',
            'image_path' => 'iPhone 13-image-1657374272172.jpg'
        ]);        

        ProductImages::create([
            'product_id' => '3',
            'image_path' => 'iPhone 12-image-1657374293395.png'
        ]); 

        ProductImages::create([
            'product_id' => '3',
            'image_path' => 'iPhone 12-image-1657374293277.jpg'
        ]);

        ProductImages::create([
            'product_id' => '3',
            'image_path' => 'iPhone 12-image-1657374293873.jpg'
        ]);        

        ProductImages::create([
            'product_id' => '3',
            'image_path' => 'iPhone 12-image-1657374293285.jpg'
        ]); 

        ProductImages::create([
            'product_id' => '4',
            'image_path' => 'iPhone 11-image-1657374313962.png'
        ]);         

        ProductImages::create([
            'product_id' => '4',
            'image_path' => 'iPhone 11-image-1657374313859.jpg'
        ]); 

        ProductImages::create([
            'product_id' => '4',
            'image_path' => 'iPhone 11-image-1657374313307.jpg'
        ]);         

        ProductImages::create([
            'product_id' => '4',
            'image_path' => 'iPhone 11-image-1657374313391.jpg'
        ]);               
    }
}
