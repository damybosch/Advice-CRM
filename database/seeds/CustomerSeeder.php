<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $index) {
            DB::table('customers')->insert([
                'customer_name' => $faker->company,
                'contact_person' => $faker->name,
                'phone_number' => $faker->phoneNumber,
                'mobile_number' => $faker->phoneNumber,
                'mailadres' => $faker->email,
                'website' => $faker->domainName,
                'description' => $faker->paragraph(),
            ]);
        }
        
    }
}
