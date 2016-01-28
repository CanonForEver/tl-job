<?php

namespace App\Http\Controllers\My;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegistController extends Controller
{
    private $messages;

    public function __construct()
    {
        parent::__construct();
        $this->messages = $this->messages();
    }

    //验证错误信息,还需要进一步调整
    //该验证的都要验证
    private function messages()
    {
        return [
            'email.required' => '邮箱不能为空！',
            'email.unique' => '邮箱已经存在!',
            'passwd.required' => '密码不能为空！'
        ];
    }

    //注册
    function index()
    {
        return view('my.regist.regist');
    }
//    function test(Request $request)
//    {
//        dump($request->all());
//    }

    function regist(Request $request)
    {
        dump($request->all());
        switch ($request->submitted) {
            case 'mailmaga':                   //希望条件
                return $this->mailmaga($request);
                break;
            case 'bookmark':                    //推荐关注企业
                return $this->bookmark($request);
                break;
            case 'rireki':                      //履历书
                return $this->rireki($request);
                break;
        }
    }


    function regist2(Request $request)
    {
        dump($request->all());
        switch ($request->submitted) {
            case 'form':                    //回退到履历书
                return $this->rireki($request);
                break;
            case 'skill':                   //职业技能
                return $this->skill($request);
                break;
            case 'rireki_add':                   //增加职务经历
                return $this->rireki_add($request);
                break;
            case 'data_regist':                   //注册完成
                return $this->data_regist($request);
                break;
        }
    }


    //2.希望工作
    function mailmaga($request)
    {
//        $this->validate($request, [
//            'email' => 'required|unique:users|max:255',
//            'passwd' => 'required',
//        ], $this->messages);
//
//        //创建新用户
//        $user = User::create([
//            'email' => $request->email,
//            'password' => bcrypt($request->passwd)
//        ]);
        $user=User::find(5);

        //加载希望条件页面
        return view('my.regist.mailmaga', ['user' => $user]);
    }

    //2.推荐关注企业
    function bookmark()
    {
//        ["submitted" => "bookmark"
//  "userid" => "5"
//  "mailservice_new" => "1"
//  "mailservice_pickup" => "1"
//  "mailservice_digest" => "1"
//  "mailservice_dm" => "1"
//  "_token" => "v0YQpn6XaeFsrhnhGbJahRdF7DSu051CbFLDbYLA"
//        "k_shokushu" => array:2 [▼            职位
//    0 => "203"
//    1 => "204"
//  ]
        //  "k_kinmuchi" => "9"             //地区
//  "k_keitai" => "2"                       //雇佣形式
//  "k_jikyuu" => "4"                       //时薪
//  "k_gekkyuu" => "3"                      //月薪
//  "k_nenbou" => "4"                       //年薪
//  "html_mail" => "1"                      //html邮件
//]
//


        return view('my.regist.bookmark');
    }

    function rireki()
    {
        return view('my.regist.rireki');
    }

    function rireki_add()
    {
        return view('my.regist.rireki_add');
    }

    function data_regist()
    {
        return view('my.regist.data_regist');
    }

    function skill()
    {
        return view('my.regist.skill');
    }


}
