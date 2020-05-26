<?php

use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_contracts')->insert([
            'contract_name' => 'Geen',
        ]);

        DB::table('social_contracts')->insert([
            'contract_name' => 'Basis',
        ]);

        DB::table('social_contracts')->insert([
            'contract_name' => 'Plus',
        ]);

        DB::table('social_contracts')->insert([
            'contract_name' => 'Compleet',
        ]);
    }
}
