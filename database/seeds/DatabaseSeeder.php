<?php

use Illuminate\Database\Seeder;

use App\Maker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Maker::truncate();

        $this->call('MakerSeed');
        $this->call('VehiclesSeed');
    }
}
