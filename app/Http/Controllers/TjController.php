<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use  App\Models\Shokushu;
use  App\Models\Keitai;
use  App\Models\Kinmuchi;
use  App\Models\Category;
use App\Models\Job;
use App\Models\Bookmark;
use App\Models\Com;



class TjController extends Controller
{

    //职位搜索
    function search()
    {

        $searchs = Job::with('this_kinmuchi')
            ->with('this_keitai1')
            ->with('this_keitai2')
            ->with('this_keitai3')
            ->with('this_shokushu')
            ->with('this_category')
            ->with('job_focus_words.focus_word')
            ->get();
//        return $searchs;

        return view('tj.search',['searchs' =>$searchs]);
    }
    function add_to_bookmark_ajax(Request $request){

        $data=array(
            'job_id'=>8,
            'user_id'=>5
    );

        Bookmark::create($data);
           return 1;
}


    //最新职位
    function news()
    {
        return view('tj.news');
    }


    //招聘信息
    function show($id)
    {
        $job=Job::with('job_focus_words.focus_word')
            ->with('this_shokushu')
            ->with('this_keitai1')
            ->with('this_keitai2')
            ->with('this_keitai3')
            ->find($id);
//        return $job;

        return view('tj.show',['job'=>$job]);
    }



    //企业信息
    function show_com($id)
    {
           $job=Job::with('com')->with('job_focus_words.focus_word')->find($id);
        return view('tj.show_com',['job'=>$job]);
    }

}
