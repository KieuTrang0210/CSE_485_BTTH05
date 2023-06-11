<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 50; $i++){
            Article::create([
                'ma_bviet' => $i+1,
                'tieude' => $faker->sentence(10, true),
                'ten_bhat' => $faker->sentence($faker->numberBetween(2,10)),
                'ma_tloai' => $faker->numberBetween(1,10),
                'tomtat' => $faker->paragraph(1),
                'noidung' => $faker->optional()->paragraphs(3, true),
                'ma_tgia' => $faker->numberBetween(1,20),
                'ngayviet' => $faker->dateTimeBetween('2022-01-01', now()->format('Y-m-d'))->format('Y-m-d'),
                'hinhanh' => $faker->imageUrl(640,480)
            ]);
        }
    }
}
