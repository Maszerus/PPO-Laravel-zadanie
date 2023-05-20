<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 200; $i++) {
            DB::table('people')->insert([
                'FirstName' => $faker->firstName,
                'LastName' => $faker->lastName,
                'PhoneNumber' => $faker->phoneNumber,
                'e-mail' => $faker->email,
                'Street' => $faker->streetName,
                'Postcode' => $faker->postcode,
                'City' => $faker->city,
                'Country' => $faker->country,
            ]);
        }
    }
}
