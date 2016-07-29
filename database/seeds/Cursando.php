<?php

use Illuminate\Database\Seeder;

class Cursando extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursando')->insert([
            'user_id' => 1,
            'cursos_idCurso' => 1,
        ]);
    }
}
