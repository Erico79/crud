<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create(['name' => 'Goal Keeper']);
        Position::create(['name' => 'Striker']);
        Position::create(['name' => 'Defender']);
        Position::create(['name' => 'MidFielder']);
    }
}
