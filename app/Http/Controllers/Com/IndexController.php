<?php

namespace App\Http\Controllers\Com;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function index()
    {
        return view('com.index');
    }

}
