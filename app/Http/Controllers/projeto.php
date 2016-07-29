<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projetos;

use App\Http\Requests;

class projeto extends Controller
{
    public function projects_user(){

        if ($projeto = Projetos::on('user_responsavel')->find(Auth::user()->id)){

            return $projeto;
        }


    }
}
