<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); 
        for ($i = 0; $i < 20; $i++) { 
        Author::create([
            'ten_tgia' => $faker->name,
            'hinh_tgia' => $faker->optional()->imageUrl(100,100)
        ]);
}

    }
}
