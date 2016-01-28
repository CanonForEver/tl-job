<?php

namespace App\Http\Controllers\My;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;

class EditController extends Controller
{
    //登录后,用户主页
    function index()
    {


        return view('my.edit.edit');
    }


    //各种编辑...!!!  没啥用
    function edit(Request $request)
    {
        dump($request->all());
        switch ($request->submitted) {
            case 'form':
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
