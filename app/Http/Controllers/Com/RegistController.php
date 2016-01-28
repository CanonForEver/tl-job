<?php

namespace App\Http\Controllers\Com;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Com;

class RegistController extends Controller
{
    private $com;

    public function __construct(Request $request)
    {
        parent::__construct();

        //调用中间件,判断是否登录
//        $this->middleware('check_login', ['except' => ['index', 'index_store']]);

        //如果公司信息已经存入session,那么发送到模板
        if (session()->has('com')) {
            $this->com = session('com');
            view()->share(['com' => $this->com]);
        }
    }




    //公司注册
    function regist_company()
    {
        return view('com.regist.regist_company');
    }

    function regist_company_store(Request $request)
    {
        $com = Com::create($request->all());
        session(['com' => $com]);
        return redirect('/com/regist/show_confirm');
    }


    //确认公司信息
    function show_confirm()
    {
        return view('com.regist.show_confirm');
    }

    function show_confirm_request(Request $request)
    {
//        return $request->all();
        if($request->edit){
            return redirect('/com/regist/regist_company');
        }

        if($request->send){
            return redirect('/com/regist/show_finish');
        }
    }

    //完成
    function show_finish()
    {
        return view('com.regist.show_finish');
    }
}
