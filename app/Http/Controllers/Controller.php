<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Cache;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected $comm_info;      // 公共基础信息

    function __construct()
    {
        //初始化值
        $this->init_value();
    }

    //缓存常用值
    function init_value()
    {
        // 工作地点
        $kinmuchis = Cache::rememberForever('kinmuchis', function () {
            return DB::table('kinmuchis')->get();
        });

        // 雇用方式
        $keitais = Cache::rememberForever('keitais', function () {
            return DB::table('keitais')->orderBy('sort_order')->get();
        });

        // 职位
        $shokushus = Cache::rememberForever('shokushus', function () {
            return DB::table('shokushus')->orderBy('sort_order')->get();
        });

        // 行业
        $categories = Cache::rememberForever('categories', function () {
            return DB::table('categories')->orderBy('sort_order')->get();
        });

        //希望时薪
        $jikyuus = Cache::rememberForever('jikyuus', function () {
            return DB::table('jikyuus')->get();
        });

        //希望月薪
        $gekkyuus = Cache::rememberForever('gekkyuus', function () {
            return DB::table('gekkyuus')->get();
        });

        //希望年薪
        $nenbous = Cache::rememberForever('nenbous', function () {
            return DB::table('nenbous')->get();
        });

        $provinces = Cache::rememberForever('provinces', function () {
            return DB::table('provinces')->get();
        });

        //发送给模板
        $this->comm_info = [
            'kinmuchis' => $kinmuchis,
            'keitais' => $keitais,
            'shokushus' => $shokushus,
            'categories' => $categories,
            'jikyuus' => $jikyuus,
            'gekkyuus' => $gekkyuus,
            'nenbous' => $nenbous,
            'provinces' => $provinces,
        ];

        view()->share($this->comm_info);
    }

}
