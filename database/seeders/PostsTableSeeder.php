<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;
// use Illuminate\Database\Eloquent\Factories\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // / how to run the seeder
        // php artisan db:seed --class=PostsTableSeeder

        $faker = Faker::create();

        foreach (range(1, 15) as $index) {
            Post::create([


                'title' => $faker->randomElement(['Post one', 'Post two', 'Post three']),
                'content' => $faker->randomElement(['Hello this is po', 'Hello this io', 'Hello this is po']),

            ]);
        }
    }
}
