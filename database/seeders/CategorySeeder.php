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
        Category::create([
        	'name' => 'HERRAMIENTAS',
        	'image' => '6375754d783af_.jpg'
        ]);
        Category::create([
        	'name' => 'ACCESORIOS',
        	'image' => '6375752e9465f_.jpg'
        ]);
        Category::create([
        	'name' => 'CELULARES',
        	'image' => '637575437139d_.jpg'
        ]);
        Category::create([
        	'name' => 'COMPUTADORAS',
        	'image' => '6375753a0acfe_.jpg'
        ]);
    }
}
