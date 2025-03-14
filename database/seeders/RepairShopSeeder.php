<?php

namespace Database\Seeders;

use App\Models\RepairShop;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RepairShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RepairShop::factory()
            ->count(10)
            ->create();
    }
}
