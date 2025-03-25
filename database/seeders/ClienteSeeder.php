<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'João Silva',
            'email' => 'joao@email.com',
            'cpf' => '12345678900',
            'telefone' => '11999999999',
            'endereco' => 'Rua Exemplo, 123',
            'password' => Hash::make('123456'),
        ]);
    }
}
