<?php

use Illuminate\Database\Seeder;
use Learn\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Post $post, Faker $faker)
    {
        foreach (range(1, 100) as $i) {
            $post->create([
                'title' => $faker->sentence(10),
                'body'=> $faker->sentence(100)
            ]);
        }
    }
}
