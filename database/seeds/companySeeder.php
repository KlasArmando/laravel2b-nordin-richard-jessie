<?php

use Illuminate\Database\Seeder;

class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companys')->insert([
            'name' => str_random(10),
        ]);
    }
}
