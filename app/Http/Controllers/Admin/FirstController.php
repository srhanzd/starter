<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{

    public  function __construct()
    {
        $this->middleware('auth')->except('login','showname0');
    }

    //
    public function showname0(){
        return 'srhan0 the king';
    }

    public function showname1(){
        return 'srhan1 the king';
    }

    public function showname2(){
        return 'srhan2 the king';
    }

    public function showname3(){
        return 'srhan3 the king';
    }
    public function login(){
        return 'you have to login first to access this route';
    }
}
