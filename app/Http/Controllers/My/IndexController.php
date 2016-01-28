<?php

namespace App\Http\Controllers\My;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User_search;
use App\Models\Shokushu;
use App\Models\Kinmuchi;
use App\Models\Keitai;


class IndexController extends Controller
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
    }
    //显示用户履历
    function show_resume()
    {

        return view('my.show_resume');
    }


    // 检索条件保存
    function list_search_condition()
    {
        $user_searches = User_search::where('user_id',$this->user->id)->get();
        foreach($user_searches as &$user_search){
            if($user_search->shokushu_id){
            $user_search['user_shokushus'] = unserialize($user_search->shokushu_id);
            }
            if($user_search->kinmuchi_id){
            $user_search['user_kinmuchis'] = unserialize($user_search->kinmuchi_id);
            }
            if($user_search->keitai_id){
            $user_search['user_keitais'] = unserialize($user_search->keitai_id);
            }
            if($user_search->category_id){
            $user_search['user_categories'] = unserialize($user_search->category_id);
            }
        }
        $shokushus =Shokushu::get();
        $kinmuchis =Kinmuchi::get();
        $keitais =Keitai::orderBy('sort_order','asc')->get();
        $categories =Category::orderBy('sort_order','asc')->get();
//        return $user_searches;
        return view('my.list_search_condition',['user_searches'=>$user_searches,'shokushus'=>$shokushus,'kinmuchis'=>$kinmuchis,'keitais'=>$keitais,'categories'=>$categories]);
    }

    //删除检索条件
    function delete_search_condition($search_id)
    {
        User_search::where('id',$search_id)->delete();
        return back();
//        return view('my.delete_search_condition');
    }

}
