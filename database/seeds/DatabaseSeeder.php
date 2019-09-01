<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InwonersSeed::class);
		$this->call(TaxiSeed::class);
		$this->call(UserTableSeed::class);
        $this->call(RittenSeed::class);
    }
}
