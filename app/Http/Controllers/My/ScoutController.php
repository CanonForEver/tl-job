<?php

namespace App\Http\Controllers\My;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ScoutController extends Controller
{

    //选拔报告
    function index()
    {
        //判断是否登录
//        if(session("is_login")) {
//            return view('home.my.scout.info');
//        } else {
        return view('my.scout.index');
//        }
    }

//    function edit_scout()
//    {
//        return view('home.my.edit.edit_scout');
//    }

}
