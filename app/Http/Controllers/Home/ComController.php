<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ComController extends Controller
{

    function regist()
    {
        return view('home.my.regist');
    }

    function login()
    {
        return view('home.my.login');
    }
}
