<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'jona lopez',
            'email' => 'jonathan@proyecto.com',
            'password' => jona('1234'),
        ]);
    }
}
