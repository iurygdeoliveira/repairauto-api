<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create(['brand_id' => 1, 'name' => 'C4 Cactus']);
        Car::create(['brand_id' => 1, 'name' => 'C4 Pallas']);
        Car::create(['brand_id' => 1, 'name' => 'C4']);
        Car::create(['brand_id' => 1, 'name' => 'C3']);
        Car::create(['brand_id' => 1, 'name' => 'C4 Basalt']);

        Car::create(['brand_id' => 2, 'name' => '206']);
        Car::create(['brand_id' => 2, 'name' => '208']);

        Car::create(['brand_id' => 3, 'name' => 'Gol Bolinha']);
        Car::create(['brand_id' => 3, 'name' => 'Jetta']);

        Car::create(['brand_id' => 4, 'name' => 'Vectra']);
    }
}
