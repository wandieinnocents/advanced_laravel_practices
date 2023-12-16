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

        foreach (range(1, 200) as $index) {
            Post::create([


                'title' => $faker->randomElement(['Post one', 'Post two', 'Post three', 'Post three', 'Post four', 'Post five', 'Post six', 'Post seven']),
                'category' => $faker->randomElement(['News', 'Business', 'Entertainment', 'Sports']),
                'date' => $faker->randomElement(['2023-11-20','2023-11-21','2023-11-029','2023-12-01','2023-12-02','2023-12-03','2023-12-04','2023-12-05','2023-12-06']),
                'tag' => $faker->randomElement(['News', 'Business', 'Entertainment', 'Sports']),
                'slug' => $faker->randomElement(['post_one', 'Post_two', 'Post_hree']),
                'content' => $faker->randomElement(['Hello this is po', 'Hello this io', 'Hello this is po', 'Hello this is po', ' this is another one is po', 'Hello isabella is po', 'Another information this is po', 'More description this is po', 'Hello information is po']),

            ]);
        }
    }
}
