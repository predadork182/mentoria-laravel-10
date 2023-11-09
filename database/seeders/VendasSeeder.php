<?php

namespace Database\Seeders;

use App\Models\Venda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendasSeeder extends Seeder
{
    public function run(): void
    {
        Venda::create([
            'numero_da_venda' => 1,
            'produto_id' => 7,
            'cliente_id' => 2,
        ]);
    }
}
