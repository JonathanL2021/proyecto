<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Iluminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'ropa y mas',
                'slug' =>Str::slug('ropa y mas'),
                'icon' => '<i class="fab fa-reacteurope"></i>'
            ],
            [
                'name' => 'camisa y pantalones',
                'slug' =>Str::slug('camisa y pantalones'),
                'icon' => '<i class="fab fa-reacteurope"></i>'
            ],
            [
                'name' => 'short y camisetas',
                'slug' =>Str::slug('chort y camisetas'),
                'icon' => '<i class="fab fa-reacteurope"></i>'
            ],
            [
                'name' => 'camisa y sueter',
                'slug' =>Str::slug('camisa y sueter'),
                'icon' => '<i class="fab fa-reacteurope"></i>'
            ],
            [
                'name' => 'hilos y mas',
                'slug' =>Str::slug('hilos y mas'),
                'icon' => '<i class="fab fa-reacteurope"></i>'
            ],

            ];

            foreach ($categories as $category) {
                category::factory(1) ->create($category);
            }
    }
}
