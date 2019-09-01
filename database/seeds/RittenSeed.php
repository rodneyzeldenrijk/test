<?php

use Illuminate\Database\Seeder;

class RittenSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ritten')->insert([
        	[
            'inwoner_id' => 1,
            'taxi_id' => 1,
	        ],
	        [
            'inwoner_id' => 2,
            'taxi_id' => 1,
	        ],
	        [
            'inwoner_id' => 4,
            'taxi_id' => 1,
	        ],
	        [
            'inwoner_id' => 4,
            'taxi_id' => 1,
	        ],
	        [
            'inwoner_id' => 4,
            'taxi_id' => 1,
	        ],
	        [
            'inwoner_id' => 3,
            'taxi_id' => 2,
	        ],
	        [
            'inwoner_id' => 3,
            'taxi_id' => 2,
	        ],
	        [
            'inwoner_id' => 3,
            'taxi_id' => 2,
	        ],
	        [
            'inwoner_id' => 1,
            'taxi_id' => 1,
	        ],
	        
	    ]);
    }
}
