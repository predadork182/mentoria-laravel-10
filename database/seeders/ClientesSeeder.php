<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
     /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Adriana Sousa dos Reis',
            'email' => 'adrianadoresis@geekwork.com.br',
            'endereco' => 'Alameda Maria Teresa',
            'logradouro' => 'Alameda Maria Teresa, quadra 7, n82',
            'cep' => '60190210',
            'bairro' => 'Cidade 2000',
        ]);
    }
}
