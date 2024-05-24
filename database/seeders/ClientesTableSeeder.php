<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome' => 'João Silva',
            'email' => 'joao.silva@example.com',
        ]);
        Cliente::create([
            'nome' => 'Maria Santos',
            'email' => 'maria.santos@example.com',
        ]);
    }
}
