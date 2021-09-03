<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Iluminate\Database\Eloquent\Builder;
use App\Models\Product;

class SizeSeader extends Seeder
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
                       ->where('size', true);
            })->get();

            $sizes = ['Talla S', 'Talla M', 'Talla L'];

            foreach ($products as $product) {
 

            foreach ($sizes as $size) { 
            $product->sizes()->create([
                'name' => $size

                ]);
            }
                    

        }
    
    }
}