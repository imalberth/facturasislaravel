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
        Product::create([
        	'name' => 'PC Gamer',
        	'cost' => 200,
        	'price' => 350,
        	'barcode' => '75010065987',
        	'stock' => 1000,
        	'alerts' => 10,
        	'category_id' => 1,
        	'image' => '63755b84ae575_.webp'
        ]);
         Product::create([
        	'name' => 'Poco X3 Pro',
        	'cost' => 600,
        	'price' => 500,
        	'barcode' => '7609872014',
        	'stock' => 1000,
        	'alerts' => 10,
        	'category_id' => 2,
        	'image' => '63755bd23d1eb_.webp'
        ]);
          Product::create([
        	'name' => 'USB',
        	'cost' => 100,
        	'price' => 500,
        	'barcode' => '7709876541',
        	'stock' => 1000,
        	'alerts' => 10,
        	'category_id' => 3,
        	'image' => '63755c122b570_.jpg'
        ]);
           Product::create([
        	'name' => 'MARTILLO',
        	'cost' => 790,
        	'price' => 1350,
        	'barcode' => '790654812',
        	'stock' => 1000,
        	'alerts' => 10,
        	'category_id' => 4,
        	'image' => '63755c4b56485_.webp'
        ]);
    }
}
