<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Pag_Login extends Controller
{

    /**
     * @return string
     */
    /**
     * @param array $middleware
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function perfil(){
        return view('user_home');
    }
    public function config(){
        return view('settings');
    }
    
}
