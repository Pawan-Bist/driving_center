<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DurationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=20;$i++){
            DB::table('duration_types')->insert([
                'name'=>str_random(10),
                'code'=>str_random(1),
                
            ]);
        }
        
    }
}
