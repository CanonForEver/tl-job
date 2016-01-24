<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


//
Route::group(['middleware' => ['web']], function () {

    Route::post('/api/my', 'ApiController@my');

    // 首页
    Route::get('/', 'IndexController@index');
    Route::get('login', 'IndexController@login');                        //登录
    Route::post('login', 'IndexController@check_login');                 //登录

    Route::get('logout', 'IndexController@logout');                      //登出


    // 招聘
    Route::group(['prefix' => 'tj'], function () {
        Route::get('search', 'TjController@search');                    //招聘列表
        Route::get('new', 'TjController@news');                         //最新职位
    });

    Route::group(['prefix' => 'list/{id}'], function () {
        Route::get('/', 'TjController@show');                           //招聘信息
        Route::get('/com', 'TjController@show_com');                    //公司信息
    });


//    //公司部分
//    Route::group(['prefix' => 'com'], function () {
//        Route::get('regist', 'ComController@regist');
//        Route::get('login', 'ComController@login');
//    });


    //用户中心
    Route::group(['namespace' => 'My', 'prefix' => 'my'], function () {

        Route::group(['prefix' => 'regist'], function () {
            //注册流程
            Route::get('regist', 'RegistController@index');                       // 显示注册页面
            Route::post('regist', 'RegistController@index_store');                // 显示注册页面

            Route::get('mailmaga', 'RegistController@mailmaga');                 // 希望条件
            Route::post('mailmaga', 'RegistController@mailmaga_store');          // 希望条件

            Route::get('bookmark', 'RegistController@bookmark');                 // 推荐关注企业
            Route::post('bookmark', 'RegistController@bookmark_store');          // 推荐关注企业

            Route::get('rireki', 'RegistController@rireki');                     // 履历书
            Route::post('rireki', 'RegistController@rireki_store');              // 履历书

            Route::get('skill', 'RegistController@skill');                       // 职业技能
            Route::post('skill', 'RegistController@skill_store');                // 职业技能

            Route::get('rireki_add', 'RegistController@rireki_add');             // 增加职务经历
            Route::post('rireki_add', 'RegistController@rireki_add_store');      // 增加职务经历

            Route::get('data_regist', 'RegistController@data_regist');           // 注册完成
        });


        Route::group(['prefix' => 'edit'], function () {
            Route::get('edit', 'EditController@index');                             // 登录后,用户主页
            Route::post('edit', 'EditController@edit');                             // 各种编辑...!!!

            Route::get('edit_name', 'EditController@edit_name');                    // 编辑用户信息
            Route::post('change_passwd', 'EditController@change_passwd');           // 修改密码
            Route::get('edit_scout', 'EditController@edit_scout');                  // 邮件通知
        });


        Route::get('show_resume', 'IndexController@show_resume');                   // 显示履历信息
        Route::get('list_search_condition', 'IndexController@list_search_condition');       // 检索记录保存
        Route::get('delete_search_condition', 'IndexController@delete_search_condition');   // 删除检索条件


        // 信息管理
        Route::group(['prefix' => 'wm'], function () {
            Route::get('inbox', 'WmController@inbox');                              // 收信箱
            Route::get('outbox', 'WmController@outbox');                            // 送信箱
            Route::get('memo', 'WmController@memo');                                // 履历一览
        });

        // 招聘公司
        Route::group(['prefix' => 'scout'], function () {
            Route::get('index', 'ScoutController@index');
        });


        // 关注的职位
        Route::group(['prefix' => 'bookmark'], function () {
            Route::get('/', 'BookmarkController@index');
//        Route::delete('', 'MyController@destroy');
        });


    });

});
