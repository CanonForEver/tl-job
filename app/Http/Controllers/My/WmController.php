<?php

namespace App\Http\Controllers\My;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WmController extends Controller
{

    // wm 收信箱
    function inbox()
    {
        return view('my.wm.inbox');
    }

    // wm 送信箱
    function outbox()
    {
        return view('my.wm.outbox');
    }

    // wm 履历一览
    function memo()
    {
        return view('my.wm.memo');
    }

}
