<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Iluminate\Database\Eloquent\Builder;
use App\Models\Product;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::whereHas('subcategory', function(Builder $query){
            $query->where('color', true)
                   ->where('size', false);
        })->get();

        foreach ($products as $products){
            $products->colors()->attach([
                1 =>[
                     'quantity' => 10
                ], 
                2 =>[
                    'quantity' => 10
                ], 
                3 =>[
                    'quantity' => 10
                ],
                4 =>[
                    'quantity' => 10
                ]

            ]);
        }
    }
}