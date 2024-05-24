<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chamado;

class ChamadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chamado::create([

            'cliente_id' => 1,
            'assunto' => 'Problema com o site',
            'descricao' => 'O site não está carregando corretamente.',
            'data_chamado' => now(),
        ]);
        Chamado::create([
            'cliente_id' => 2,
            'assunto' => 'Solicitação de suporte técnico',
            'descricao' => 'Preciso de assistência para configurar meu email.',
            'data_chamado' => now()->subDays(3),
        ]);
    }
}
