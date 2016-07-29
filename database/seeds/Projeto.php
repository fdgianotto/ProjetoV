<?php

use Illuminate\Database\Seeder;

class Projeto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projeto')->insert([
            'id_proj'=> 0,
            'nome_proj' => 'Teste',
            'pdf' => 'teste.pdf',
            'resumo'=> 'Testando antes de fazer...',
            'submit_data' => str_random(10),
            'aprovado' => 0,
            'tags'=> 'test,testando',
            'curso'=> 1,
            'user_responsavel'=> 1,
        ]);

        $this->call(Cursando::class);
    }
}