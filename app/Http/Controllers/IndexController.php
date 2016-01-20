<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class IndexController extends Controller
{
    //首页
    function index()
    {
        return view('index.index');
    }

    //登录
    function login()
    {
        return view('index.login');
    }

    //检查登录信息
    function check_login(Request $request)
    {
        dump($request->all());
    }

    //登出
    function logout()
    {
    }
}
