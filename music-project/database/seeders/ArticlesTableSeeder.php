<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 30; $i++){
            Article::create([
                'tieude' => $faker->sentence(6),
                'ten_bhat' => $faker->sentence($faker->numberBetween(2,5)),
                'ma_tloai' => $faker->numberBetween(1,10),
                'tomtat' => $faker->paragraph,
                'noidung' => $faker->optional()->paragraphs(3, true),
                'ma_tgia' => $faker->numberBetween(1,20),
                'ngayviet' => $faker->dateTimeBetween('2022-01-01', now()->format('Y-m-d'))->format('Y-m-d'),
                'hinhanh' => $faker->imageUrl(200,200)
            ]);
        }
    }
}
