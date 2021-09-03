<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $storage::makeDirectory('categories');
        $storage::makeDirectory('subcategories');
        $storage::makeDirectory('products');

        $storage::makeDirectory('categories');
        $storage::makeDirectory('subcategories');
        $storage::makeDirectory('products');

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(subcategoryseeder::class);

        $this->call(ProductSeeder::class);

        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);

        $this->call(SizeSeeder::class);
    }
}
