<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;
use App\Author;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 31; $i++) {
            $comic = new Comic;
            $author = Author::inRandomOrder()->first();
            $comic->title = $faker->text(50);
            if (rand(0, 1)) {
                $comic->original_title = $faker->text(50);
            }
            $comic->author_id = $author->id;
            $comic->year = $faker->year;
            $comic->issue = $faker->numberBetween(1, 100);
            $comic->price = $faker->randomFloat(2, 2, 120);
            $comic->color = $faker->boolean(60);
            if (rand(0, 1)) {
                $comic->reading = "eastern";
            }
            $comic->cover = "https://placeimg.com/300/420/any";

            $comic->save();
        }
    }
}
