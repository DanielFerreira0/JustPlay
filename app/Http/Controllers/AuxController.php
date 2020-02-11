<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuxController extends Controller
{
    public function login(){
        return view ('vendor/adminlte/login');
    }
    public function register(){
        return view ('vendor/adminlte/register');
    }
}
