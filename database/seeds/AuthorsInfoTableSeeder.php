<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\AuthorInfo;
use App\Author;

class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $authors = Author::all();

        foreach ($authors as $author) {

            $authorInfo = new AuthorInfo;

            $authorInfo->author_id = $author->id;
            $authorInfo->nationality = $faker->country;
            $authorInfo->biography = $faker->text(200);
            $authorInfo->image = $faker->imageUrl(200, 300);

            $authorInfo->save();
        }
    }
}
