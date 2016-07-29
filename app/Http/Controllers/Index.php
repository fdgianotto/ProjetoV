<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Index extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about(){

        return view('about');
    }
    public function register(){

        return view('auth/register');
    }
    public function login(){

        return view('auth/login');
    }
    public function projetos(){

        return view('projects');
    }
}
