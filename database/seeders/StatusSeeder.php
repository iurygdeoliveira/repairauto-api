<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create(['name' => 'Aguardando Confirmação']);
        Status::create(['name' => 'A caminho']);
        Status::create(['name' => 'Aguardando orçamento']);
        Status::create(['name' => 'Aguardando aprovação']);
        Status::create(['name' => 'Em manutenção']);
        Status::create(['name' => 'Pronto']);
        Status::create(['name' => 'Em rota de entrega']);
    }
}
