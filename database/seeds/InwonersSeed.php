<?php

use Illuminate\Database\Seeder;

class InwonersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inwoners')->insert([
        	[
            'name' => 'Gerard',
            'city' => 'Utrecht',
            'budget' => 77,
            'ritten' => 23,
	        ],
	        [
            'name' => 'Hans',
            'city' => 'Utrecht',
            'budget' => 98,
            'ritten' => 2,
	        ],
	        [
            'name' => 'Merel',
            'city' => 'Amsterdam',
            'budget' => 82,
            'ritten' => 18,
	        ],
	        [
            'name' => 'Vincent',
            'city' => 'Utrecht',
            'budget' => 65,
            'ritten' => 35,
	        ],
	    ]);
    }
}
