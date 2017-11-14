<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaywerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $lawyers = [];
        for ($i=0; $i<10; $i++){
            array_push($lawyers, [
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'mail' => $faker->email,
                'document' => mt_rand()
            ]);
        }

        DB::table('lawyers')->insert($lawyers);
    }
}
