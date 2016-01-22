<?php

namespace App\Http\Controllers\My;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User, App\Models\User_shokushu, App\Models\User_kinmuchi;
use Validator;

class RegistController extends Controller
{
    private $messages;

    public function __construct()
    {
        parent::__construct();
        $this->messages = $this->messages();

        //如果用户信息已经存入session,那么发送到模板
        if (session()->has('user')) {
            view()->share(['user' => session('user')]);
        }
    }

    //验证错误信息
    private function messages()
    {
        return [
            'email.required' => '邮箱不能为空！',
            'email.unique' => '邮箱已经存在!',
            'passwd.required' => '密码不能为空！',
            'k_shokushu.required' => '至少选择一个希望的职位',
            'k_kinmuchi.required' => '至少选择一个希望的工作地点',
            'k_keitai.required' => '至少选择一个希望的雇佣形式',
        ];
    }

    //注册
    function index()
    {
        return view('my.regist.regist');
    }

    function index_store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|max:255',
            'passwd' => 'required',
        ], $this->messages);
//
        //创建新用户
//        $user = User::create([
//            'email' => $request->email,
//            'password' => bcrypt($request->passwd)
//        ]);
        $user = User::find(5);
        session(["user" => $user]);
        return redirect('/my/regist/mailmaga');
    }


    //2.希望工作
    function mailmaga()
    {
        //加载希望条件页面
        return view('my.regist.mailmaga');
    }


    function mailmaga_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'k_shokushu' => 'required',
            'k_kinmuchi' => 'required',
            'k_keitai' => 'required',
        ], $this->messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }


        // 生成新的希望数据
        $user_id = session("user")->id;                         //当前用户的id
        $hopes = [
            'shokushu' => $request->k_shokushu,         //希望职位
            'kinmuchi' => $request->k_kinmuchi,         //希望工作地点
            'keitai' => $request->k_keitai,             //希望雇佣方式
        ];

        foreach ($hopes as $key => $value) {
            $data = [];
            $model = "App\\Models\\User_" . $key;               //需要调用的模型
            $model::where("user_id", $user_id)->delete();       //删除原始数据

            foreach ($value as $v) {                            //插入新数据
                $data["user_id"] = $user_id;
                $data[$key . '_id'] = $v;
                $model::create($data);
            }
        }


        //希望的薪酬


        return redirect('/my/regist/bookmark');

    }


    //2.推荐关注企业
    function bookmark()
    {
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
