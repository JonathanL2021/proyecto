<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* ropa y mas */
        [
            'category_id' => 1,
            'name' => 'ropa',
            'slug' => Str::slug('ropa'),
            'color' => true 
        ],
        [
            'category_id' => 1,
            'name' => 'camisas',
            'slug' => Str::slug('camisas'),
            
        ],
        [
            'category_id' => 1,
            'name' => 'short',
            'slug' => Str::slug('short'),
            
        ],
         
        /* camisa y pantalones */

        [
            'category_id' => 2,
            'name' => 'pantalones',
            'slug' => Str::slug('pantalones'),
            
        ],
        [
            'category_id' => 2,
            'name' => 'pantalon',
            'slug' => Str::slug('pantalon'),
            
        ],
        [
            'category_id' => 2,
            'name' => 'pantaleta',
            'slug' => Str::slug('pantaleta'),
            
        ],

        /* short y camisetas */
        [
            'category_id' => 3,
            'name' => 'camisas',
            'slug' => Str::slug('camisas'),
            
        ],
        [
            'category_id' => 3,
            'name' => 'camisetas',
            'slug' => Str::slug('camisetas'),
            
        ],
        [
            'category_id' => 3,
            'name' => 'centros',
            'slug' => Str::slug('centros'),
            
        ],
        [
            'category_id' => 3,
            'name' => 'blusas',
            'slug' => Str::slug('blusas'),
            
        ],
        /*hilos y mas */
        [
            'category_id' => 4,
            'name' => 'tanga',
            'slug' => Str::slug('tanga'),
            
        ],
        [
            'category_id' => 4,
            'name' => 'hilos',
            'slug' => Str::slug('hilos'),
            
        ],
        [
            'category_id' => 4,
            'name' => 'boxer',
            'slug' => Str::slug('boxer'),
            
        ],
        [
            'category_id' => 4,
            'name' => 'mas',
            'slug' => Str::slug('mas'),
            
        ],
        /*camisa y sueter */
        [
            'category_id' => 5,
            'name' => 'sueter',
            'slug' => Str::slug('sueter'),
            'color' => true,
            'size' => true
            
        ],
        [
            'category_id' => 5,
            'name' => 'sueteres',
            'slug' => Str::slug('sueteres'),
            'color' => true,
            'size' => true
            
        ],
        [
            'category_id' => 5,
            'name' => 'lentes',
            'slug' => Str::slug('lentes'),
            
        ],
        [
            'category_id' => 5,
            'name' => 'zapatos',
            'slug' => Str::slug('zapatos'),
            
        ],


        ];

        foreach ($subcategories as $subcategory) {

            subcategory::factory(1)->create($subcategory);

        }
    }
}
