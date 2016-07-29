<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Void extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        if (!Schema::hasTable('users')) {

            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('email', 45)->unique();
                $table->string('password', 255);
                $table->string('name', 45);
                $table->string('sobrenome', 45);
                $table->boolean('admin')->default(0);
                $table->text('foto_user');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
                $table->rememberToken();

            });
        }
        if(!Schema::hasTable('cursos')){

        Schema::create('cursos', function (Blueprint $table){
            $table->increments('idCurso');
            $table->string('Curso_nome', 45);
            $table->integer('instituicao_idInstituicao');

        });
    }
        if(!Schema::hasTable('cursando')){

            Schema::create('cursando', function (Blueprint $table){
                $table->integer('user_id')->length(10)->unsigned();
                $table->integer('cursos_idCurso')->length(10)->unsigned();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('cursos_idCurso')->references('idCurso')->on('cursos')->onDelete('cascade');

            });
        }

        if(!Schema::hasTable('projeto')){

            Schema::create('projeto', function (Blueprint $table){

                $table->increments('id_proj');
                $table->string('nome_proj', 45);
                $table->text('pdf');
                $table->string('resumo', 255);
                $table->date('submit_data');
                $table->tinyInteger('aprovado');
                $table->string('tags', 255);
                $table->integer('curso')->length(10)->unsigned();
                $table->integer('user_responsavel')->length(10)->unsigned();
                $table->foreign('curso')->references('idCurso')->on('cursos')->onDelete('cascade');
                $table->foreign('user_responsavel')->references('id')->on('users')->onDelete('cascade');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
                $table->rememberToken();

            });
        }
        Schema::create('password_resets', function(Blueprint $table)
        {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursando', function ($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['cursos_idCurso']);
        });
        
        Schema::table('projeto', function ($table) {
            $table->dropForeign(['curso']);
            $table->dropForeign(['user_responsavel']);
        });
        Schema::drop('users');
        Schema::drop('cursos');
        Schema::drop('cursando');
        Schema::drop('projeto');
        Schema::drop('password_resets');
        

    }
}
