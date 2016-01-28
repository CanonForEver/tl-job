@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')

    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
        <ul>
            <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
            <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <strong><span itemprop="title">登録情報</span></strong></li>
        </ul>
    </div><!--topic-path-->
@stop

@section('container')

    <main>
        <div class="container container-narrow">

            <h1 class="mb30">Web履历书</h1>


            <p class="mb40">様のプロフィールをご登録いただきます。
            <p>

            <p class="mb40"><img src="/images/edit/icon_lock.png" class="mr5">マークのついている個人を特定できる情報はスカウトサービスを利用しても企業には公開されません。<br>あなた自身が応募した企業には、すべての情報が公開されます。
            </p>

            <form method="post" name="regist" id="regist" class="form">
                <input type="hidden" name="submitted">
                <input type="hidden" name="num">
                <input type="hidden" name="from" value="">
                <input type="hidden" name="userid" value="">
                <input type="hidden" name="user_sid" value="">
                <input type="hidden" name="skill_sid" value="">
                <input type="hidden" name="rireki_sid" value="">

                <input type="hidden" name="mailservice_new" value="1">
                <input type="hidden" name="mailservice_pickup" value="1">
                <input type="hidden" name="mailservice_digest" value="1">
                <input type="hidden" name="mailservice_dm" value="1">
                <input type="hidden" name="enable" value="">

                <section>
                    <h2 class="h2 text-em mb10">基础信息</h2>
                    <table class="input-cell mb40">
                        <tr>
                            <th>
                                姓名<img src="/images/edit/icon_lock.png" alt="非公开" class="ml5"><span class="tag tag-xsm tag-primary pull-right">必须</span>
                            </th>
                            <td>
                                <dl class="td-inner-sm mb10 clearfix">
                                    <dt class="pull-left">汉字</dt>
                                    <dd class="pull-left">
                                        <input id="form_name" name="name" placeholder="例）刘 长乐" class="text-md" type="text" value="{{$user->name}}" tabindex="101">
                                        <div class="errortxtbox text-alert text-bold pt10"></div>
                                    </dd>
                                </dl>
                                <dl class="td-inner-sm clearfix">
                                    <dt class="pull-left">英文</dt>
                                    <dd class="pull-left">
                                        <input id="form_kana" name="kana" placeholder="例）Python Ryuu" class="text-md" type="text" value="{{$user->kana}}" tabindex="102">
                                        <div class="errortxtbox text-alert text-bold pt10"></div>
                                    </dd>
                                </dl>
                            </td>
                        </tr>
                        <tr>
                            <th>性別<span class="tag tag-xsm tag-primary pull-right">必须</span></th>
                            <td>

                                <ul class="clearfix">
                                    <li class="pull-left mr10">
                                        <input name="sex" type="radio" value="1" id="man" tabindex="103" @if($user->sex==1) checked @endif><label for="man"><span class="valign-middle">男性</span></label>
                                    </li>
                                    <li class="pull-left">
                                        <input name="sex" type="radio" value="2" id="woman" tabindex="104" @if($user->sex==2) checked @endif><label for="woman"><span class="valign-middle">女性</span></label>
                                    </li>
                                </ul>
                                <div class="errortxtbox error_gender text-bold text-alert pt10"></div>

                            </td>
                        </tr>
                        <tr>
                            <th>
                                生年月日<img src="/images/edit/icon_lock.png" alt="非公开" class="ml5"><span class="tag tag-xsm tag-primary pull-right">必须</span>
                            </th>
                            <td class="clearfix">
                                <div class="select form-sm pull-left">
                                    <select name="birthday_year" id="birth_year" tabindex="105">
                                        <option value="0">------</option>

                                        @for ($i=date("Y",  time())-16; $i>=1930; $i--)
                                            <option value="{{$i}}" @if($user->birthday_year==$i) selected @endif>{{$i}}
                                                年
                                            </option>
                                        @endfor


                                    </select>
                                </div>
                                <span class="pull-left mt10 mr10">&nbsp;年</span>
                                <div class="select form-xsm pull-left">
                                    <select name="birthday_month" id="birth_month" tabindex="106">
                                        <option value="0">--</option>
                                        @for($i=1; $i<=12; $i++)
                                            <option value="{{$i}}" @if($user->birthday_month==$i) selected @endif>{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <span class="pull-left mt10 mr10">&nbsp;月</span>
                                <div class="select form-xsm pull-left">
                                    <select name="birthday_day" id="birth_day" tabindex="107">
                                        <option value=0>--</option>
                                        @for($i=1; $i<=31; $i++)
                                            <option value="{{$i}}" @if($user->birthday_day==$i) selected @endif>{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <span class="pull-left mt10">&nbsp;日</span>
                                <div class="errortxtbox error_birthday text-bold text-alert pt10 clear"></div>
                            </td>
                        </tr>
                        <tr>
                            <th>住所<span class="tag tag-xsm tag-primary pull-right">必须</span></th>
                            <td>
                                <dl class="td-inner-md mb10 clearfix">
                                    <dt class="pull-left">省</dt>
                                    <dd class="pull-left">
                                        <div class="select form-sm">
                                            <select name="ken" tabindex="108">
                                                <option value=0>请选择</option>
                                                @foreach($provinces as $province)
                                                    <option value="{{$province->id}}" @if($user->ken==$province->id) selected @endif>
                                                        {{$province->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="errortxtbox error_ken text-bold text-alert pt10"></div>
                                        <p class="icon icon-arrow02-xs">
                                            <a href="/help/usage_scout.html#c03" target="_blank">被用优厚条件搜罗登记时，公开的信息</a>
                                        </p>
                                    </dd>
                                </dl>
                                <dl class="td-inner-md mb10 clearfix">
                                    <dt class="pull-left">市区</dt>
                                    <dd class="pull-left">
                                        <input name="jusho" type="text" placeholder="例）渋谷区東1-2-20 " class="text-md" value="{{$user->jusho}}" id="address" id="address" tabindex="109">
                                        <div class="errortxtbox text-alert text-bold pt10"></div>
                                        <p class="text-md pt0">※被用优厚条件搜罗登记时，为企业公开</p>
                                    </dd>
                                </dl>
                                <dl class="td-inner-md clearfix">
                                    <dt class="pull-left">详细地址</dt>
                                    <dd class="pull-left">
                                        <input name="jusho2" type="text" placeholder="例）住友不動産渋谷ファーストタワー7F" class="text-md" value="{{$user->jusho2}}" id="form_jusho2" tabindex="110">
                                        <p class="text-md pt10">※应募时，以外不被企业公开</p>
                                    </dd>
                                </dl>
                            </td>
                        </tr>
                        <tr>
                            <th>电话号码<span class="tag tag-xsm tag-primary pull-right">必须</span></th>
                            <td>
                                <dl class="clearfix">
                                    <dt>住宅</dt>
                                    <dd>
                                        <input name="tel" type="text" id="form_tel" value="{{$user->tel}}" tabindex="111">
                                        <div class="errortxtbox text-alert text-bold pt10"></div>
                                    </dd>
                                </dl>
                                <dl class="clearfix">
                                    <dt>手机</dt>
                                    <dd>
                                        <input name="tel2" type="text" id="form_tel2" value="{{$user->tel2}}" tabindex="112">
                                        <div class="errortxtbox text-alert text-bold pt10"></div>
                                    </dd>
                                </dl>
                                <p class="marl120">自宅か携帯電話のどちらかを必ずご記入ください。(半角)</p>
                            </td>
                        </tr>
                        <tr>
                            <th>邮件地址<span class="tag tag-xsm tag-primary pull-right">必须</span></th>
                            <td>

                                {{$user->email}}
                                <input name="email" type="hidden" value="{{$user->email}}">

                            </td>
                        </tr>
                        <tr>
                            <th>移动邮件地址</th>
                            <td>
                                <dl class="td-inner-md mb10 clearfix">
                                    <dt class="pull-left">半角英数記号</dt>
                                    <dd class="pull-left">
                                        <input name="m_email" value="{{$user->m_email}}" type="text" id="form_m_email" tabindex="117" placeholder="例） ****" class="form-md text-md pull-left">
                                        <div class="mt5 ml10 mr10 pull-left">@</div>
                                        <div class="select form-sm pull-left">
                                            <select name="m_domain" tabindex="118" id="m_domain">
                                                <option value="0">---</option>

                                                <option value="docomo.ne.jp">docomo.ne.jp</option>

                                                <option value="ezweb.ne.jp">ezweb.ne.jp</option>

                                                <option value="softbank.ne.jp">softbank.ne.jp</option>

                                                <option value="d.vodafone.ne.jp">d.vodafone.ne.jp</option>

                                                <option value="h.vodafone.ne.jp">h.vodafone.ne.jp</option>

                                                <option value="t.vodafone.ne.jp">t.vodafone.ne.jp</option>

                                                <option value="c.vodafone.ne.jp">c.vodafone.ne.jp</option>

                                                <option value="k.vodafone.ne.jp">k.vodafone.ne.jp</option>

                                                <option value="r.vodafone.ne.jp">r.vodafone.ne.jp</option>

                                                <option value="n.vodafone.ne.jp">n.vodafone.ne.jp</option>

                                                <option value="s.vodafone.ne.jp">s.vodafone.ne.jp</option>

                                                <option value="q.vodafone.ne.jp">q.vodafone.ne.jp</option>

                                                <option value="i.softbank.jp">i.softbank.jp</option>

                                                <option value="pdx.ne.jp">pdx.ne.jp</option>

                                                <option value="di.pdx.ne.jp">di.pdx.ne.jp</option>

                                                <option value="dj.pdx.ne.jp">dj.pdx.ne.jp</option>

                                                <option value="dk.pdx.ne.jp">dk.pdx.ne.jp</option>

                                                <option value="wm.pdx.ne.jp">wm.pdx.ne.jp</option>

                                                <option value="disney.ne.jp">disney.ne.jp</option>

                                                <option value="willcom.com">willcom.com</option>

                                            </select>
                                        </div>
                                        <div class="errortxtbox error_m_email text-bold text-alert pt10 clear"></div>
                                    </dd>
                                </dl>
                                <dl class="td-inner-md clearfix">
                                    <dt class="pull-left">確認用</dt>
                                    <dd class="pull-left">
                                        <input type=text name=m_email2 tabindex="119" placeholder="例） ****" class="form-md text-md pull-left" id="form_m_email2" value="{{$user->m_email}}">
                                        <div class="mt5 ml10 mr10 pull-left">@</div>
                                        <div class="select form-sm pull-left">
                                            <select name="m_domain2" tabindex="120" id="m_domain2">
                                                <option value="0">---</option>

                                                <option value="docomo.ne.jp">docomo.ne.jp

                                                <option value="ezweb.ne.jp">ezweb.ne.jp

                                                <option value="softbank.ne.jp">softbank.ne.jp

                                                <option value="d.vodafone.ne.jp">d.vodafone.ne.jp

                                                <option value="h.vodafone.ne.jp">h.vodafone.ne.jp

                                                <option value="t.vodafone.ne.jp">t.vodafone.ne.jp

                                                <option value="c.vodafone.ne.jp">c.vodafone.ne.jp

                                                <option value="k.vodafone.ne.jp">k.vodafone.ne.jp

                                                <option value="r.vodafone.ne.jp">r.vodafone.ne.jp

                                                <option value="n.vodafone.ne.jp">n.vodafone.ne.jp

                                                <option value="s.vodafone.ne.jp">s.vodafone.ne.jp

                                                <option value="q.vodafone.ne.jp">q.vodafone.ne.jp

                                                <option value="i.softbank.jp">i.softbank.jp

                                                <option value="pdx.ne.jp">pdx.ne.jp

                                                <option value="di.pdx.ne.jp">di.pdx.ne.jp

                                                <option value="dj.pdx.ne.jp">dj.pdx.ne.jp

                                                <option value="dk.pdx.ne.jp">dk.pdx.ne.jp

                                                <option value="wm.pdx.ne.jp">wm.pdx.ne.jp

                                                <option value="disney.ne.jp">disney.ne.jp

                                                <option value="willcom.com">willcom.com

                                            </select>
                                        </div>
                                        <div class="errortxtbox error_m_email2 text-bold text-alert pt10 clear"></div>
                                    </dd>
                                </dl>
                            </td>
                        </tr>
                        <tr>
                            <th>最終学歴<span class="tag tag-xsm tag-primary pull-right">必须</span></th>
                            <td>
                                <dl class="td-inner-md mb10 clearfix">
                                    <dt class="pull-left">学校名</dt>
                                    <dd class="pull-left">
                                        <input tabindex="121" class="text-md" name="g_name" type="text" id="form_g_name" value="{{$user->g_name}}">
                                        <div class="errortxtbox text-alert text-bold pt10"></div>
                                    </dd>
                                </dl>
                                <dl class="td-inner-md mb10 clearfix">
                                    <dt class="pull-left">专业</dt>
                                    <dd class="pull-left">
                                        <input tabindex="122" name="g_gakubu" class="text-md" type="text" id="form_g_gakubu" value="{{$user->g_gakubu}}">
                                        <div class="errortxtbox text-alert text-bold pt10"></div>
                                    </dd>
                                </dl>
                                <dl class="td-inner-md clearfix">
                                    <dt class="pull-left">毕业时间</dt>
                                    <dd class="pull-left">
                                        <div class="select form-sm pull-left">
                                            <select tabindex="123" class="form_g_year" name="g_year" id="select">
                                                <option value="0">---</option>
                                                @for($i=(date('Y',time())+2); $i>=1950 ; $i--)
                                                    <option value="{{$i}}" @if($user->g_year == $i) selected @endif>{{$i}}
                                                        年
                                                    </option>
                                                @endfor

                                            </select>
                                        </div>
                                        <p class="pull-left text-md mt10 mr10">&nbsp;年に</p>
                                        <div class="select form-sm pull-left">
                                            <select tabindex="124" class="form_g_type" name="g_type">
                                                <option value="0">----</option>
                                                <option value=1 @if($user->g_type == 1) selected @endif>入学
                                                <option value=2 @if($user->g_type == 2) selected @endif>退学
                                                <option value=3 @if($user->g_type == 3) selected @endif>毕业
                                                <option value=4 @if($user->g_type == 4) selected @endif>毕业实习

                                            </select>
                                        </div>
                                        <div class="errortxtbox error_g_kubun text-bold text-alert pt10 clear"></div>
                                        <p class="pt10 text-md">
                                            <a href="/my/g_chart.html" target="_blank" class="icon icon-arrow02-xs">卒業年早見表</a>
                                        </p>
                                    </dd>
                                </dl>
                            </td>
                        </tr>
                    </table>
                </section>

                <section>
                    <h2 class="h2 text-em pull-left mb10">スキルシート</h2>

                    <a href="#" data-role="submit-button" data-submit-type="skill" tabindex="126" class="btn btn-md btn-secondary pull-right">スキルシートを入力</a>
                    <p class="border-t-gray mb40 pt10 clear">語学・資格・PCスキルなどを入力してください</p>

                </section>

                <section>
                    <h2 class="h2 text-em mb10">职务经历</h2>
                    <div class="box clearfix mb40">
                        <input type="hidden" name="rireki_delete_" value="">
                        @if($user->resumes)
                            @foreach($user->resumes as $k=> $resume)
                                <div class="box-md clearfix">
                                    <div class="clearfix mb10">
                                        <h3 class="h3 pull-left">职务经历{{$k+1}}</h3>
                                    </div>
                                    <table class="input-cell">
                                        <tr>
                                            <th>公司名</th>
                                            <td>
                                                <input type="text" placeholder="例） 株式会社 ****" name="office[]" value="{{$resume->office}}" class="text-md form_office">
                                                <p class="pt10 text-md">
                                                    <a href="/help/howto_apply/company_name.html" target="_blank" class="icon icon-arrow02-xs">派遣・出向や統合・合併がある場合の社名記入例</a>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>工作期间</th>
                                            <td>
                                                <div class="select form-sm pull-left">
                                                    <select tabindex="134" name="syear[]" id="com_year1">
                                                        <option value="0">---</option>
                                                        @for($i=date('Y',time()); $i>=1930 ; $i--)
                                                            <option value="{{$i}}" @if($resume->syear==$i) selected @endif>
                                                                {{$i}}年
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <p class="pull-left text-md mt10 mr10">&nbsp;年</p>
                                                <div class="select form-xsm pull-left">
                                                    <select tabindex="135" name="smonth[]" id="com_month1">
                                                        <option value="0">---</option>
                                                        @for($i=1; $i<=12; $i++)
                                                            <option value="{{$i}}" @if($resume->smonth==$i) selected @endif>
                                                                {{$i}}
                                                            </option>
                                                        @endfor

                                                    </select>
                                                </div>
                                                <p class="pull-left mt10">&nbsp;月&nbsp;～&nbsp;</p>
                                                <div class="select form-sm pull-left">
                                                    <select tabindex="136" name="eyear[]" id="com_year2">
                                                        <option value="0">---</option>
                                                        @for($i=date('Y',time()); $i>=1930 ; $i--)
                                                            <option value="{{$i}}" @if($resume->eyear==$i) selected @endif>
                                                                {{$i}}年
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <p class="pull-left text-md mt10 mr10">&nbsp;年</p>
                                                <div class="select form-xsm pull-left">
                                                    <select tabindex="137" name="emonth[]" id="com_month2">
                                                        <option value="0">--</option>

                                                        @for($i=1; $i<=12; $i++)
                                                            <option value="{{$i}}" @if($resume->emonth==$i) selected @endif>
                                                                {{$i}}
                                                            </option>
                                                        @endfor

                                                    </select>
                                                </div>
                                                <p class="pull-left mt10">&nbsp;月</p>
                                                <p class="clear pt10 text-md">現在勤務中の場合、終了年月は未入力にしてください。(例：1999年4月 ～ 年
                                                    月)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>职位</th>
                                            <td>
                                                <div class="select form-lg">
                                                    <select tabindex="138" name="r_shokushu[]" id="syokusyu" class="shokushu" data-num="1">
                                                        <option value="0">---</option>


                                                        <option value="0" selected>-------------</option>


                                                        <optgroup label="Web系">

                                                            <option value="205">Web设计师</option>

                                                            <option value="8">Web制片人・导演</option>

                                                            <option value="1">Web运营</option>

                                                            <option value="7">Web内容编辑</option>

                                                        </optgroup>


                                                        <optgroup label="创造性系">

                                                            <option value="9">DTP话务员・设计师</option>

                                                            <option value="5">平面设计</option>

                                                            <option value="10">編集・校正</option>

                                                            <option value="11">打火机・广告创意人</option>

                                                            <option value="202">CAD话务员</option>

                                                        </optgroup>


                                                        <optgroup label="软件系">

                                                            <option value="2">Web、开放系SE・程序员</option>

                                                            <option value="12">通用系SE・程序员</option>

                                                            <option value="203">控制、嵌入系SE・程序员</option>

                                                            <option value="13">软件包开发</option>

                                                            <option value="204">网络、发球员构筑・运用</option>

                                                        </optgroup>


                                                        <optgroup label="办公室工作系">

                                                            <option value="4">一般事务</option>

                                                            <option value="14">营业事务</option>

                                                            <option value="15">数据收集</option>

                                                            <option value="16">电话话务员</option>

                                                            <option value="3">用户支持・咨询台</option>

                                                            <option value="17">教练・讲师</option>

                                                            <option value="201">总务・人事</option>

                                                            <option value="18">经理・财务</option>

                                                            <option value="19">秘书</option>

                                                        </optgroup>


                                                        <optgroup label="营业・企画系">

                                                            <option value="6">营业</option>

                                                            <option value="20">企画・营销</option>

                                                        </optgroup>


                                                        <optgroup label="其他">

                                                            <option value="200">其他</option>

                                                        </optgroup>


                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>雇佣形式</th>
                                            <td>
                                                <div class="select form-lg">
                                                    <select tabindex="139" name="r_keitai[]" size="1" id="keitai">
                                                        <option value="0">---</option>
                                                        <option value="1">アルバイト
                                                        <option value="5">派遣社員
                                                        <option value="6">契約社員
                                                        <option value="2">正社員
                                                        <option value="3">業務委託

                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>工作内容</th>
                                            <td>
                                                <textarea id="rireki_form1" class="form_job_content" tabindex="140" name="job_content[]">{{$resume->job_content}}</textarea>
                                                <p class="pt10 text-md">
                                                    <a href="/help/howto_apply/experience.html" target="_blank" class="icon icon-docs-md">職務経歴の記入例</a>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div><!--box-md-->
                            @endforeach
                        @else
                            <div class="box-md clearfix">
                                <div class="clearfix mb10">
                                    <h3 class="h3 pull-left">职务经历1</h3>
                                </div>
                                <table class="input-cell">
                                    <tr>
                                        <th>公司名</th>
                                        <td>
                                            <input type="text" placeholder="例） 株式会社 ****" name="office1" value="" class="text-md form_office">
                                            <p class="pt10 text-md">
                                                <a href="/help/howto_apply/company_name.html" target="_blank" class="icon icon-arrow02-xs">派遣・出向や統合・合併がある場合の社名記入例</a>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>工作期间</th>
                                        <td>
                                            <div class="select form-sm pull-left">
                                                <select tabindex="134" name="syear" id="com_year1">
                                                    <option value="0">---</option>
                                                    @for($i=date('Y',time()); $i>=1930 ; $i--)
                                                        <option value="{{$i}}">{{$i}}年</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <p class="pull-left text-md mt10 mr10">&nbsp;年</p>
                                            <div class="select form-xsm pull-left">
                                                <select tabindex="135" name="smonth1" id="com_month1">
                                                    <option value="0">---</option>
                                                    @for($i=1; $i<=12; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor

                                                </select>
                                            </div>
                                            <p class="pull-left mt10">&nbsp;月&nbsp;～&nbsp;</p>
                                            <div class="select form-sm pull-left">
                                                <select tabindex="136" name="eyear" id="com_year2">
                                                    <option value="0">---</option>
                                                    @for($i=date('Y',time()); $i>=1930 ; $i--)
                                                        <option value="{{$i}}">{{$i}}年</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <p class="pull-left text-md mt10 mr10">&nbsp;年</p>
                                            <div class="select form-xsm pull-left">
                                                <select tabindex="137" name="emonth1" id="com_month2">
                                                    <option value="0">--</option>

                                                    @for($i=1; $i<=12; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor

                                                </select>
                                            </div>
                                            <p class="pull-left mt10">&nbsp;月</p>
                                            <p class="clear pt10 text-md">現在勤務中の場合、終了年月は未入力にしてください。(例：1999年4月 ～ 年 月)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>职位</th>
                                        <td>
                                            <div class="select form-lg">
                                                <select tabindex="138" name="r_shokushu1" id="syokusyu" class="shokushu" data-num="1">
                                                    <option value="0">---</option>


                                                    <option value="0" selected>-------------</option>


                                                    <optgroup label="Web系">

                                                        <option value="205">Web设计师</option>

                                                        <option value="8">Web制片人・导演</option>

                                                        <option value="1">Web运营</option>

                                                        <option value="7">Web内容编辑</option>

                                                    </optgroup>


                                                    <optgroup label="创造性系">

                                                        <option value="9">DTPオペレーター・デザイナー</option>

                                                        <option value="5">グラフィックデザイナー</option>

                                                        <option value="10">編集・校正</option>

                                                        <option value="11">ライター・コピーライター</option>

                                                        <option value="202">CADオペレーター</option>

                                                    </optgroup>


                                                    <optgroup label="ソフトウェア系">

                                                        <option value="2">Web、オープン系SE・プログラマ</option>

                                                        <option value="12">汎用系SE・プログラマ</option>

                                                        <option value="203">制御、組込み系SE・プログラマ</option>

                                                        <option value="13">パッケージソフト開発</option>

                                                        <option value="204">ネットワーク、サーバー構築・運用</option>

                                                    </optgroup>


                                                    <optgroup label="オフィスワーク系">

                                                        <option value="4">一般事務</option>

                                                        <option value="14">営業事務</option>

                                                        <option value="15">データ入力</option>

                                                        <option value="16">テレフォンオペレーター</option>

                                                        <option value="3">ユーザーサポート・ヘルプデスク</option>

                                                        <option value="17">インストラクター・講師</option>

                                                        <option value="201">総務・人事</option>

                                                        <option value="18">経理・財務</option>

                                                        <option value="19">秘書</option>

                                                    </optgroup>


                                                    <optgroup label="営業・企画系">

                                                        <option value="6">営業</option>

                                                        <option value="20">企画・マーケティング</option>

                                                    </optgroup>


                                                    <optgroup label="その他">

                                                        <option value="200">その他</option>

                                                    </optgroup>


                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>雇佣形式</th>
                                        <td>
                                            <div class="select form-lg">
                                                <select tabindex="139" name="r_keitai1" size="1" id="keitai">
                                                    <option value="0">---</option>
                                                    <option value="1">アルバイト
                                                    <option value="5">派遣社員
                                                    <option value="6">契約社員
                                                    <option value="2">正社員
                                                    <option value="3">業務委託

                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>工作内容</th>
                                        <td>
                                            <textarea id="rireki_form1" class="form_job_content" tabindex="140" name="job_content1"></textarea>
                                            <p class="pt10 text-md">
                                                <a href="/help/howto_apply/experience.html" target="_blank" class="icon icon-docs-md">職務経歴の記入例</a>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div><!--box-md-->
                        @endif
                    </div>
                    <a href="#" data-role="submit-button" data-submit-type="rireki_add" tabindex="141" class="btn btn-md btn-secondary pull-right mr20 mb20">職務経歴追加</a>
                    <p class="pull-right pt5 mr20">※上記のほかに勤務した会社があれば追加してください</p>
                </section>

                <section>
                    <h2 class="h2 text-em text-b-gr mb10">自己PR・求职意愿</h2>
                    <div class="box-md box-default clearfix mb40">
                        <textarea id="form_shokureki" tabindex="142" name="shokureki">{{$user->shokureki}}</textarea>
                        <p class="pt10 text-md">
                            ※職務経歴だけでは表現しにくいアピールポイントを記入<a href="/help/howto_apply/pr.html" target=_blank class="icon icon-docs-md ml20">自己PR・志望動機の記入例</a>
                        </p>
                    </div>
                </section>


                <section>
                    <div class="box-md box-scout box-default text-md clearfix mb40">
                        <dl class="mb15 clearfix">
                            <dt class="pull-left">
                                <input type="checkbox" id="sscout" name="sscout" tabindex="10" value="1" checked="checked">
                            </dt>
                            <dd class="text-bold head pull-left"><label for="sscout">スカウトサービス</label></dd>
                            <dd class="pull-left">あなたのスキルや経験に強く興味をもった企業から、スカウトメールが届きます。<br>転職成功者の70%がスカウトサービスを利用しています。
                            </dd>
                        </dl>
                    </div>
                </section>

                <div class="relative text-center">
                    <button type="submit" name="confirm" data-role="submit-button" value="1" data-submit-type="data_regist" class="btn btn-xxlg btn-primary btn-wide block-center">
                        Web履歴書を登録する
                    </button>
                </div>

            </form>

        </div><!--container-->
    </main>
@stop

@section('js')
    <script src="/assets/javascripts/my/jquery-fjplugins.js"></script>
    <script src="/shared/js/jquery/validation/jquery.validate.min.js"></script>
    <script src="/assets/javascripts/my/fj_validation.js"></script>
    <script src="/assets/javascripts/my/fj.js"></script>
    <script src="/assets/javascripts/my/my.js"></script>
    <script>
        $(function () {
            fj.c.my.edit.initResumeForm();
        });
    </script>
@stop
