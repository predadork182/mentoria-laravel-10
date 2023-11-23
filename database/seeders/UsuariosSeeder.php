<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Marcos',
            'email' => 'marcosvinicius@geekwork.com.br',
            'password' =>  Hash::make('123654'),
        ]);
    }
}
