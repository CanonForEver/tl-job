<?php

namespace App\Http\Controllers\Com;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Com;
use Validator;

class JobController extends Controller
{
    private $com;

    public function __construct(Request $request)
    {
        parent::__construct();

        //调用中间件,判断是否登录
//        $this->middleware('check_login', ['except' => ['index', 'index_store']]);

        $com = Com::find(3);
        $this->com = $com;


        //如果公司信息已经存入session,那么发送到模板
//        if (session()->has('com')) {
//            $this->com = session('com');
            view()->share(['com' => $this->com]);
//        }
    }

    //验证错误信息
    private function messages()
    {
        return [
            'honsha.required' => '公司地址不能为空。',
            'ceo.required' => '代表者名不能为空。',
            'setup_year.required' => '注册年不能为空。',
            'setup_month.required' => '注册月不能为空。',
            'capital.required' => '注册资本不能为空。',
            'workers.required' => '员工数不能为空。',
            'business.required' => '事业内容不能为空。',
            'category.not_in' => '所属行业不能为空。',
        ];
    }


    function editjob_company()
    {
        return view('com.job.editjob_company');
    }

    function editjob_company_store(Request $request)
    {
//        dump($request->category);
        $validator = Validator::make($request->all(), [
            'honsha' => 'required',
            'ceo' => 'required',
            'setup_year' => 'required',
            'setup_month' => 'required',
            'capital' => 'required',
            'workers' => 'required',
            'business' => 'required',
            'category' => 'not_in:0',
        ], $this->messages());

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        Com::where('id', $this->com->id)->update($request->all());

        return redirect('/com/job/editjob');
    }


    //招聘信息详情
    function editjob()
    {
        return view('com.job.editjob');
    }

    function editjob_store(Request $request)
    {
        return $request->all();
    }


    //传图片什么的
    function edit_pr()
    {
        return view('com.job.edit_pr');

    }

    function edit_pr_store(Request $request)
    {
        return $request->all();
    }
}
