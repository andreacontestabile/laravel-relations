<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 11; $i++) {

            $author = new Author;

            $author->name = $faker->firstName;
            $author->lastname = $faker->lastname;
            $author->date_of_birth = $faker->date;

            $author->save();
        }
    }
}
