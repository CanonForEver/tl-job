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
    Route::post('login', 'IndexController@check_login');                        //登录

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

        //注册流程
        Route::get('regist/regist', 'RegistController@index');                      // 显示注册页面
        Route::post('regist/regist', 'RegistController@regist');                    // 各种注册
        Route::post('regist/regist2', 'RegistController@regist2');                  // 各种注册2

        Route::group(['prefix' => 'edit'], function () {
            Route::get('edit', 'EditController@index');                             // 登录后,用户主页

            Route::get('edit_name', 'EditController@edit_name');                    // 编辑用户信息
            Route::put('update_edit_name', 'EditController@update_edit_name');    //更新用户信息

            Route::get('edit_resume', 'EditController@edit_resume');                  //编辑用户履历
            Route::put('update_resume', 'EditController@update_resume');              //更新用户履历
            Route::get('add_resume', 'EditController@add_resume');                  //追加用户履历
            Route::post('store_add_resume', 'EditController@store_add_resume');    //存储追加履历
            Route::delete('/{resume_id}/delete_resume', 'EditController@delete_resume');     //删除履历

            Route::get('edit_skill', 'EditController@edit_skill');                        // 编辑用户信息
            Route::put('update_skill', 'EditController@update_skill');                    // 编辑用户信息

            Route::get('edit_scout', 'EditController@edit_scout');                  // 修改跟踪设定
            Route::put('update_scout', 'EditController@update_scout');                  // 更新跟踪设定

            Route::get('edit_mail', 'EditController@edit_mail');                  //编辑希望条件
            Route::put('update_edit_mail', 'EditController@update_edit_mail');                  //更新希望条件

            Route::get('change_passwd', 'EditController@change_passwd');           // 修改密码
            Route::put('do_change_passwd', 'EditController@do_change_passwd');           // 更新密码
        });


        Route::get('show_resume', 'IndexController@show_resume');                   // 显示履历信息
        Route::get('list_search_condition', 'IndexController@list_search_condition');       // 检索记录保存
        Route::delete('/{search_id}/delete_search_condition', 'IndexController@delete_search_condition');   // 删除检索条件


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
