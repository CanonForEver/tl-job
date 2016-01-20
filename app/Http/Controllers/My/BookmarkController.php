<?php

namespace App\Http\Controllers\My;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookmarkController extends Controller
{

    //选拔报告
    function index(Request $request)
    {
        //判断是否登录
//        if (session("is_login")) {
        switch ($request->mode) {
            //登录前说明页
            case null:
                return $this->you();
                break;

            //你关注的企业
            case 'you':
                return $this->you();
                break;

            //关注你的企业
            case 'com':
                return $this->com();
                break;

            //互相关注的企业
            case 'matching':
                return $this->matching();
                break;
        }
//        else {
//            return view('my.bookmark.index');
//            //我的关注企业
//        }
    }

    function you()
    {
        return view('my.bookmark.you');
    }

    function com()
    {
        return view('my.bookmark.com');
    }

    function matching()
    {
        return view('my.bookmark.matching');
    }

    function destroy()
    {

    }


}
