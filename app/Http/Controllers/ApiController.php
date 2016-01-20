<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;

class ApiController extends Controller
{
    function my(Request $request)
    {
        $action = $request->action;

        //判断要执行的校验
        switch ($action) {
            case 'check_email':
                return $this->check_email($request);
        }

    }

    //检测邮箱是否重复
    private function check_email($request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        $info['ok'] = $user ? false : true;
        return $info;
    }


}
