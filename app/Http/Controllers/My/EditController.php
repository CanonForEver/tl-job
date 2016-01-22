<?php

namespace App\Http\Controllers\My;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\User_shokushu;
use App\Models\Shokushu;
use App\Models\User_kinmuchi;
use App\Models\Kinmuchi;

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
    function career()
    {
        return view('my.edit.career');
    }

    //删除职务经历
    function rireki_delete()
    {
    }


    //编辑用户信息
    function edit_name()
    {
        return view('my.edit.edit_name');
    }

    function update_edit_name($request)
    {
//        return ($request);
        $user = User::find($this->user['id']);
//        $data = array_add($request->except('id'));
        $data = $request->only('name','kana','sex','email','m_email','m_domain');
//        return ($data);
        $user->update($data);
        return  redirect("/my/edit/edit");
    }

    //修改密码
    function change_passwd(Request $request)
    {
        dump($request->all());
        return view('my.edit.change_passwd');
    }


    //修改职业技能
    function skill()
    {
        return view('my.edit.skill');
    }

    //修改职业技能
    function rireki_add()
    {
        return view('my.edit.rireki_add');
    }


    ////希望的工作条件,是否接受邮件
    function mail()
    {
        return view('my.edit.mail');
    }


}
