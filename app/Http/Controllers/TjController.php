<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class TjController extends Controller
{

    //职位搜索123
    function search(Request $request)
    {
//        dump($request->all());
        return 123;
        return view('tj.search');

    }

    //最新职位
    function news()
    {
        return view('tj.news');
    }


    //招聘信息
    function show()
    {
        return view('tj.show');
    }

    //企业信息
    function show_com()
    {
        return view('tj.show_com');
    }

}
