<?php

namespace App\Http\Controllers\My;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User, App\Models\Bookmark, App\Models\Resume,
    App\Models\User_skill, App\Models\Skill_category;
use Validator;

class RegistController extends Controller
{
    private $user;

    public function __construct(Request $request)
    {
        parent::__construct();

        //调用中间件,判断是否登录
        $this->middleware('check_login', ['except' => ['index', 'index_store']]);

        //如果用户信息已经存入session,那么发送到模板
        if (session()->has('user')) {
            $this->user = session('user');
            view()->share(['user' => $this->user]);
        }
    }

    //更新用户的session信息
    private function refresh_session_user(){
        $user = User::find($this->user->id);
        session(['user' => $user]);
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
        ], $this->messages());
//
        //创建新用户
//        $user = User::create([
//            'email' => $request->email,
//            'password' => bcrypt($request->passwd)
//        ]);
        $user = User::find(5);
        session(['user' => $user]);
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
        ], $this->messages());

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // 生成新的希望数据
        $user_id = $this->user->id;                         //当前用户的id
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
        $salarys = [
            'k_jikyuu' => $request->k_jikyuu,
            'k_gekkyuu' => $request->k_gekkyuu,
            'k_nenbou' => $request->k_nenbou,
            'html_mail' => $request->html_mail,

        ];
        User::where('id', $user_id)->update($salarys);

        //更新session
        $this->refresh_session_user();

        return redirect('/my/regist/bookmark');
    }


    //2.推荐关注企业
    function bookmark()
    {
        return view('my.regist.bookmark');
    }

    function bookmark_store(Request $request)
    {
        if ($request->job_id) {
            $user_id = $this->user->id;                         //当前用户的id
            $data = [];
            foreach ($request->job_id as $job_id) {
                $bookmark = Bookmark::where('user_id', $user_id)->where('job_id', $job_id)->first();
                if ($bookmark) {
                    continue;
                }
                $data['user_id'] = $user_id;
                $data['job_id'] = $job_id;
                Bookmark::create($data);
            }
        }

        return redirect('/my/regist/rireki');
    }


    //制作web履历书
    function rireki()
    {
        $user = User::with('resumes')->find($this->user->id);
        return view('my.regist.rireki')->with("user", $user);
    }

    function rireki_store(Request $request)
    {
        //先储存自己的信息,再判断请求后,跳转
        $user = User::find($this->user->id);
        $user->update($request->all());

        //更新session
        $this->refresh_session_user();

        //职业经历
        Resume::where("user_id", $this->user->id)->delete();       //删除原始数据
        $resume_column = ['office', 'syear', 'smonth', 'eyear', 'emonth', 'r_shokushu', 'r_keitai', 'job_content'];
        foreach ($request->office as $k => $v) {
            $resume = [];
            $resume["user_id"] = $this->user->id;
            foreach ($resume_column as $column) {
                $resume["$column"] = $request->input($column)["$k"];
            }
            Resume::create($resume);
        }

        //跳转
        switch ($request->submitted) {
            //职业技能
            case 'skill':
                return redirect('/my/regist/skill');
                break;

            //增加工作经历
            case 'rireki_add':
                return redirect('/my/regist/rireki_add');
                break;

            //完成~
            case 'data_regist':
                return redirect('/my/regist/data_regist');
                break;
        }
    }


    //增加职业经历
    function rireki_add()
    {
        return view('my.regist.rireki_add');
    }

    function rireki_add_store(Request $request)
    {
        $resume_column = ['office', 'syear', 'smonth', 'eyear', 'emonth', 'r_shokushu', 'r_keitai', 'job_content'];
        $resume = [];
        $resume["user_id"] = $this->user->id;
        foreach ($resume_column as $column) {
            $resume["$column"] = $request->input($column);
        }
        Resume::create($resume);
        return redirect('/my/regist/rireki');
    }

    //职业技能
    function skill()
    {
        //技能列表
        $skill_categories = Skill_category::with('skills')->orderBy('sort_order')->get();

        //当前用户的技能,并重新组装数组
        $user_skills = User_skill::where('user_id', $this->user->id)->get();
        $my_skills = [];
        foreach ($user_skills as $skill) {
            $my_skills["$skill->skill_id"] = $skill->value;
        }
        //return $skills;

        return view('my.regist.skill')
            ->with('skill_categories', $skill_categories)
            ->with('my_skills', $my_skills);
    }

    function skill_store(Request $request)
    {
        $user_id = $this->user->id;
        User_skill::where("user_id", $user_id)->delete();       //删除原始数据

        //技能表
        foreach ($request->except(['s_other']) as $skill => $value) {
            $user_skill = [];
            $user_skill['user_id'] = $user_id;
            $user_skill['skill_id'] = $skill;
            $user_skill['value'] = $value;
            User_skill::create($user_skill);
        }

        //补充技能
        User::where('id', $user_id)->update(['s_other' => $request->s_other]);

        //更新session
        $this->refresh_session_user();

        return redirect('/my/regist/rireki');
    }


    function data_regist()
    {
        return view('my.regist.data_regist');
    }

}
