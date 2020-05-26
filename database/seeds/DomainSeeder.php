<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class DomainSeeder extends Seeder
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
            
            DB::table('domains')->insert([
                'domain' => $faker->domainName,
                'customer_id' => rand(1,10),
                'seo_contract_id'=> rand(1,3),
                'social_contract_id' => rand(1,3),
            ]);
        }
    }
}
