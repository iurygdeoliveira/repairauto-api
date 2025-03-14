<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(['name' => 'Citroen']);
        Brand::create(['name' => 'Peugeot']);
        Brand::create(['name' => 'Volkswagen']);
        Brand::create(['name' => 'Chevrolet']);
        Brand::create(['name' => 'Mercedes']);
        Brand::create(['name' => 'Jaguar']);
        Brand::create(['name' => 'Ford']);
        Brand::create(['name' => 'Jeep']);
        Brand::create(['name' => 'Ferrari']);
    }
}
