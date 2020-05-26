<?php

use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_contracts')->insert([
            'contract_name' => 'Geen',
        ]);

        DB::table('seo_contracts')->insert([
            'contract_name' => 'Basis',
        ]);

        DB::table('seo_contracts')->insert([
            'contract_name' => 'Plus',
        ]);

        DB::table('seo_contracts')->insert([
            'contract_name' => 'Compleet',
        ]);
    }
}
