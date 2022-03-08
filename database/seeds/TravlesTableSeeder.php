<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $travel = new Travel();
            $travel-> airline = $faker -> word();
            $travel-> location = $faker -> word();
            $travel-> price = $faker->randomDigit();       
            $travel-> date = $faker -> date();
            $travel-> time = $faker -> time();
            $travel-> save();
        }
    }
}