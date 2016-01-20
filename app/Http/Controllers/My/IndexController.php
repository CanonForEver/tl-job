<?php

namespace App\Http\Controllers\My;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    //显示用户履历
    function show_resume()
    {
        return view('my.show_resume');
    }


    // 检索条件保存
    function list_search_condition()
    {
        return view('my.list_search_condition');
    }

    //删除检索条件
    function delete_search_condition()
    {
        return view('my.delete_search_condition');
    }

}
