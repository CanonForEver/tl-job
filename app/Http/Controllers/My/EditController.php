<?php

namespace App\Http\Controllers\My;

use App\Models\Skill;
use App\models\User_keitai;
use App\Models\User_skill;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\User_shokushu;
use App\Models\Shokushu;
use App\Models\User_kinmuchi;
use App\Models\Kinmuchi;
use App\Models\Province;
use App\Models\Skill_category;
use App\Models\Resume;
use App\Models\Keitai;

class EditController extends Controller
{
    private $user;
    //登录后,用户主页
    public function __construct()
    {

        if(!session()->has('user')) {
            $user = User::find(5);
            session(['user' => $user]);
        }else{
            $this->user = session('user');
        }

        view()->share(['user' =>session('user')]);
//        dump(session('user'));
}
    function index()
    {
        $user_shokushus = User::with('user_shokushus.shokushu')->find($this->user['id']);
        $shokushus = $user_shokushus['user_shokushus'];
        $user_kinmuchi = User::with('user_kinmuchis.kinmuchi')->find($this->user['id']);
//                return($user_kinmuchi);
        $kinmuchis = $user_kinmuchi['user_kinmuchis'];
        $user_keitais = User::with('user_keitais.keitai')->find($this->user['id']);
        $keitais = $user_keitais['user_keitais'];
//        return ($keitais);


        return view('my.edit.edit',['shokushus' => $shokushus,'kinmuchis' => $kinmuchis,'keitais' => $keitais]);
    }


    //相同路由，不同函数，各种编辑...!!!
    //功能试验
    function edit(Request $request)
    {
//        dump($request->all());
        switch ($request->submitted) {
            case 'edit_name':
                return $this->update_edit_name($request);
                break;
            case 'career':                   //编辑各种信息列表
                return $this->career();
                break;

            case 'skill':                   //显示修改职业技能
                return $this->skill();
                break;
            case 'skill_form':              //执行修改职业技能
                return $this->skill_form();
                break;

            case 'rireki_delete':           //删除职务经历
                $this->rireki_delete();
                break;
            case 'block_scout':
                return $this->skill();
                break;
            case 'rireki_add':              //职务经历追加
                return $this->rireki_add();
                break;

            case 'mail':                    //希望的工作条件,是否接受邮件
                return $this->mail();
                break;

        }
    }

    //编辑各种信息列表



    //编辑用户信息
    function edit_name()
    {
        return view('my.edit.edit_name');
    }

    //更新用户信息
    function update_edit_name(Request $request)
    {
        $user = User::find($this->user['id']);
        $data = $request->only('name','kana','sex','email','m_email','m_domain');
        $user->update($data);
        return  redirect("/my/edit/edit");
    }

    //编辑用户web履历
    function edit_resume()
    {
        $provinces = Province::get();
        $skill_categories = Skill_category::with(['skill.user_skills' =>function($query){
                            $query->where('user_id',$this->user['id'])
                                ->where('value','>','0');
                            }])
                            ->orderBy('sort_order','asc')
                            ->get();
//        return $skill_categories;
        $resumes = Resume::with('shokushu')->with('keitai')->where('user_id',$this->user['id'])->orderBy('syear', 'desc','smonth','desc')
        ->get();
        $shokushus = Shokushu::orderby('sort_order','asc')->get();
        $keitais = Keitai::orderby('sort_order','asc')->get();
        return view('my.edit.edit_resume',['provinces' => $provinces,'resumes' => $resumes,'shokushus' => $shokushus,'keitais' => $keitais,'skill_categories'=>$skill_categories]);
    }

    //更新用户履历
    function update_resume(Request $request)
    {
        $user_data = $request->only('name','kana','sex','birthday_year','birthday_month','birthday_day','ken','jusho','jusho2','tel','tel2','email','m_email','m_domain','g_name','g_gakubu','g_year','g_type','shokureki');
        $user = User::find($this->user['id']);
        $user->update($user_data);
        $resumes = $request->only('resume');
        $resume_column = ['office', 'syear', 'smonth', 'eyear', 'emonth', 'r_shokushu', 'r_keitai', 'job_content'];
        foreach ($resumes['resume']['id'] as $k => $v) {
            $resume = [];
            foreach ($resume_column as $column) {
                $resume["$column"] = $resumes['resume']["$column"]["$k"];
            }
            Resume::where("id",$v)->update($resume);
        }
        return redirect('/my/edit/edit_resume');
    }

    //追加履历
    public function add_resume()
    {
        $shokushus = Shokushu::orderby('sort_order','asc')->get();
        $keitais = Keitai::orderby('sort_order','asc')->get();
        return view('my.edit.resume_add',['shokushus' => $shokushus,'keitais' => $keitais]);
    }

    //存储追加履历
    public function store_add_resume(Request $request)
    {
        Resume::create($request->all());
        return redirect('/my/edit/edit_resume');
    }

    //删除履历
    public function delete_resume($resume_id)
    {
        Resume::where('id',$resume_id)->delete();
        return redirect('/my/edit/edit_resume');
    }

    //修改职业技能
    function edit_skill()
    {
        $skill_categories = Skill_category::with('skill')
            ->orderBy('sort_order','asc')
            ->get();
//        return $skill_categories;
        $user_skills = User_skill::where('user_id',$this->user['id'])->get();
        $my_skills = [];
        foreach ($user_skills as $skill) {
            $my_skills["$skill->skill_id"] = $skill->value;
        }
//        return ($user_skills);
//        return ($my_skills);
        return view('my.edit.skill',['skill_categories' => $skill_categories,'user_skills' => $user_skills,'my_skills' => $my_skills]);
    }

    public function update_skill(Request $request)
    {
//        return $request->all();
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
        return redirect('/my/edit/edit_resume');
    }

   //修改跟踪设定
    public function edit_scout()
    {
        return view('my.edit.edit_scout');
    }

    //跟新跟踪条件
    public function update_scout(Request $request)
    {
        User::where('id', $this->user->id)->update(['scout' => $request->enable]);
        return redirect('/my/edit/edit');
    }

    ////希望的工作条件,是否接受邮件
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function edit_mail()
    {
        $shokushus = Shokushu::orderby('sort_order','asc')->get();
        $user_shokushus = User_shokushu::where('user_id',$this->user['id'])->get();
        $kinmuchis = Kinmuchi::get();
        $user_kinmuchis = User_kinmuchi::where('user_id',$this->user['id'])->get();
        $keitais = Keitai::orderby('sort_order','asc')->get();
        $user_keitais = User_keitai::where('user_id',$this->user['id'])->get();

        //希望工作
        $user_shokushu = [];
        foreach ($user_shokushus as $v) {
            $user_shokushu[] = $v->shokushu_id;
        }

        //希望工作地点
        $user_kinmuchi = [];
        foreach ($user_kinmuchis as $v) {
            $user_kinmuchi[] = $v->kinmuchi_id;
        }

        //希望雇佣形式
        $user_keitai = [];
        foreach ($user_keitais as $v) {
            $user_keitai[] = $v->keitai_id;
        }
        return view('my.edit.mail',['shokushus'=>$shokushus,'kinmuchis'=>$kinmuchis,'keitais'=>$keitais,'user_shokushu'=>$user_shokushu,'user_kinmuchi'=>$user_kinmuchi,'user_keitai'=>$user_keitai]);
    }

    public function update_edit_mail(Request $request)
    {
        $user_id = $this->user->id;
        User_shokushu::where("user_id", $user_id)->delete();       //删除原始数据
        if($request->k_shokushu){
            foreach ($request->k_shokushu as  $value) {
                $user_shokushu = [];
                $user_shokushu['user_id'] = $user_id;
                $user_shokushu['shokushu_id'] = $value;
                User_shokushu::create($user_shokushu);
            }
        }

        User_kinmuchi::where("user_id", $user_id)->delete();       //删除原始数据
        if($request->k_kinmuchi) {
            foreach ($request->k_kinmuchi as $value) {
                $user_kinmuchi = [];
                $user_kinmuchi['user_id'] = $user_id;
                $user_kinmuchi['kinmuchi_id'] = $value;
                User_kinmuchi::create($user_kinmuchi);
            }
        }

        User_keitai::where("user_id", $user_id)->delete();       //删除原始数据
        if($request->k_keitai) {
            foreach ($request->k_keitai as $value) {
                $user_keitai = [];
                $user_keitai['user_id'] = $user_id;
                $user_keitai['keitai_id'] = $value;
                User_keitai::create($user_keitai);
            }
        }

        User::where('id',$this->user->id)->update($request->only(['k_jikyuu','k_gekkyuu','k_nenbou','html_mail','mailservice_new','mailservice_pickup','mailservice_digest','mailservice_dm']));
        return redirect('/my/edit/edit');
    }

    //修改密码

    function change_passwd(Request $request)
    {
        dump($request->all());
        return view('my.edit.change_passwd');
    }


}
