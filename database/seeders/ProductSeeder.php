<?php

namespace Database\Seeders;

use App\Models\Product;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::factory(250)->create()->each(function(product $product){
            Image::factory(4)->create([
                'imageable_id' => $product->id,
                'imageable_type' => product::class
            ]);
        });
    }
}
