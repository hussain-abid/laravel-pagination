<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $faker= Faker::create();

        foreach (range(1,100) as $index){
            Article::create([
                'title'=>$faker->sentence(6),
                'description'=>$faker->paragraph(1),
            ]);
        }
        // \App\Models\User::factory(10)->create();
    }
}
