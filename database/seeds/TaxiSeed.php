<?php

use Illuminate\Database\Seeder;

class TaxiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('taxis')->insert([
        	[
            'name' => 'Taxi Utrecht',
            'city' => 'Utrecht',
	        ],
	        [
            'name' => 'Taxi Utrecht',
            'city' => 'Amsterdam',
	        ],
	        
	    ]);
    }
}
