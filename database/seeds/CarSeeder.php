<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 3; $i++) {
            Car::create([
                'car_name' => Str::random(20),
                'transmission' => Str::random(20),
                'wheel_drive' => Str::random(20),
                'wheel_position' => Str::random(20),
                'model' => Str::random(20),
                'fuel' => Str::random(20),
                'make' => Str::random(20),
                'year' => Str::random(20),
                'amount'=> Str::random(20),
                'description' => Str::random(200)
            ]);
        }


    }
}
