<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        /* $table->id();
            $table->string('name',50);
            $table->text('description');
            $table->smallInteger('attack');
            $table->smallInteger('defense');
            $table->string('speed',50);
            $table->timestamps(); */

        for ($i=0; $i < 10; $i++) { 
            $character = new Character();
            $character->name = $faker->name();
            $character->description = $faker->text();
            $character->attack = $faker->numberBetween(1, 100);
            $character->defense = $faker->numberBetween(1, 100);
            $character->speed = $faker->numerify('##m');
            $character->save();
        }
    }
}
