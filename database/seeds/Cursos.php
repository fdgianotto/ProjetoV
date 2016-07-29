<?php

use Illuminate\Database\Seeder;

class Cursos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'idCurso' => 0,
            'Curso_nome' => 'Informatica',
            'instituicao_idInstituicao' => 1,
        ]);

        $this->call(Projeto::class);
    }
}
