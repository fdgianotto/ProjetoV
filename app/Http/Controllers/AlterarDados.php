<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AlterarDados extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function uploadPerfil()
    {

        if (Input::file('foto_perfil')) {

            $imagem = Input::file('foto_perfil');

            $tipo = $imagem->getClientOriginalExtension();

            $baseDiretorio = public_path() . '/images/User/Perfil-' . Auth::user()->id;


            if (!is_dir($baseDiretorio)) {

                File::makeDirectory($baseDiretorio);

            }

            File::move($imagem, public_path() . '/images/User/Perfil-' . Auth::user()->id . '/imgPerfilUser-' . Auth::user()->id . '.' . $tipo);

            $diretorioNew = '/images/User/Perfil-' . Auth::user()->id . '/imgPerfilUser-' . Auth::user()->id . '.' . $tipo;

            If ($diretorioNew) {

                DB::table('users')
                    ->where('id', Auth::user()->id)
                    ->update(['foto_user' => "$diretorioNew"]);
            }


            return redirect('/config');

        }
        return back()->with('erroFoto', 'Erro na Alteração da Imagem');
    }

    public function alterarNome()
    {

        if (request()->has('novoNome') && request()->has('novoSobrenome')) {

            $nnome = request()->input('novoNome');
            $nsobrenome = request()->input('novoSobrenome');

            if ($nnome) {

                DB::table('users')
                    ->where('id', Auth::user()->id)
                    ->update(['name' => "$nnome"]);
            }
            if ($nsobrenome) {

                DB::table('users')
                    ->where('id', Auth::user()->id)
                    ->update(['sobrenome' => "$nsobrenome"]);
            }

            return redirect('/config');

        } else {

            return back()->with('erroNome', 'Erro nos dados de alteração do Nome');

        }
    }

    public function alterarSenha()
    {

        

     /*   if (request()->has('password') && request()->has('password_confirmation') && request()->has('passwordOld')) {

            $senhaOld = request()->input('passwordOld');
            $senhaNew = request()->input('password');
            $senhaConf = request()->input('password_confirmation');
            $senhaOldBanco = Auth::user()->password;
            $senhaOldEnc = bcrypt("$senhaOld");

            if ($senhaNew == $senhaConf) {

                if ($senhaOldEnc == $senhaOldBanco) {

                    DB::table('users')
                        ->where('id', Auth::user()->id)
                        ->update(['password' => bcrypt($senhaNew)]);


                } else {

                    return back()->with('erroSenha', 'Senha Antiga errada');
                }
            }else{

                return back()->with('erroSenha','Senhas novas não combinam');
            }
        } else {

            return back()->with('erroSenha', 'Falta preencher dados');
        }
*/
    }
}
