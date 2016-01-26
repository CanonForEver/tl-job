@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')
<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/my/edit/edit.cgi"><span itemprop="title">登録情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">Web履歴書</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">Web履歴書</h1>




        <p class="mb40">Web履歴書を最新情報に更新して、「Web履歴書を登録する」ボタンを押してください。<br>
            ※スカウトメールを「受け取る」に設定されている方：<img src="/images/edit/icon_lock.png" class="mr5">マークのついている情報は企業には公開されません。</p>

        <form action="/my/edit/update_resume" method="post" name="edit" id="edit" class="form">
            {!! csrf_field() !!}
            {!! method_field('put') !!}

            <input type="hidden" name="submitted">
            <input type="hidden" name="num">
            <input type="hidden" name="from" value="">
            <input type="hidden" name="userid" value="557782">
            <input type="hidden" name="user_sid" value="">
            <input type="hidden" name="skill_sid" value="">
            <input type="hidden" name="rireki_sid" value="">
            <input type="hidden" name="career" value="1">
            <input type="hidden" name="scout" value="0">
            <input type="hidden" name="edit_form" value="0">
            <input type="hidden" name="old_rireki" value="">
            <input type="hidden" name="unique_key" value="c7e11c3dd9932a009a0aa7bbd9db43d4">


            <section>
                <h2 class="h2 text-em mb10">プロフィール</h2>
                <table class="input-cell mb40">
                    <tr>
                        <th>氏名<img src="/images/edit/icon_lock.png" alt="非公開" class="ml5"><span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="td-inner-sm mb10 clearfix">
                                <dt class="pull-left">漢字</dt>
                                <dd class="pull-left">
                                    <input id="form_name"  name="name" placeholder="例）山田 太郎" class="text-md" type="text" value="{{$user->name}}" tabindex="101">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                </dd>
                            </dl>
                            <dl class="td-inner-sm clearfix">
                                <dt class="pull-left">カナ</dt>
                                <dd class="pull-left">
                                    <input id="form_kana" name="kana" placeholder="例）ヤマダ タロウ" class="text-md" type="text" value="{{$user->kana}}" tabindex="102">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <th>性別<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <input type="radio" name="sex" value="1" @if($user->sex == 1) checked @endif>男性
                            <input type="radio" name="sex" value="2" @if($user->sex == 2) checked @endif>女性
                        </td>
                    </tr>
                    <tr>
                        <th>生年月日<img src="/images/edit/icon_lock.png" alt="非公開" class="ml5"><span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td class="clearfix">
                            <div class="select form-sm pull-left">
                                <select name="birthday_year" id="birth_year" tabindex="105">
                                        <option value="0">------</option>
                                    @for($i=date('Y',time()); $i>=1930 ; $i--)
                                        <option value="{{$i}}" @if($user->birthday_year == $i) selected="selected"  @endif>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <span class="pull-left mt10 mr10">&nbsp;年</span>
                            <div class="select form-xsm pull-left">
                                <select name="birthday_month" id="birth_month" tabindex="106">
                                    <option value="0">--</option>
                                    @for($i=1; $i<=12 ; $i++)
                                        <option value="{{$i}}" @if($user->birthday_month == $i) selected="selected"  @endif>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <span class="pull-left mt10 mr10">&nbsp;月</span>
                            <div class="select form-xsm pull-left">
                                <select name="birthday_day" id="birth_day" tabindex="107">
                                    <option value=0>--</option>
                                    @for($i=1; $i<=31 ; $i++)
                                        <option value="{{$i}}" @if($user->birthday_day == $i) selected="selected"  @endif>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <span class="pull-left mt10">&nbsp;日</span>
                            <div class="errortxtbox error_birthday text-bold text-alert pt10 clear"></div>
                        </td>
                    </tr>
                    <tr>
                        <th>住所<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">都道府県</dt>
                                <dd class="pull-left">
                                    <div class="select form-sm">
                                        <select name="ken" tabindex="108">
                                            <option value=0>选择省份</option>
                                            @foreach($provinces as $province)
                                                <option value="{{$province['id']}}" @if($user->ken == $province['id']) selected="selected"  @endif>{{$province['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="errortxtbox error_ken text-bold text-alert pt10"></div>
                                    <p class="icon icon-arrow02-xs"><a href="/help/usage_scout.html#c03" target="_blank">スカウト登録時に公開される情報</a></p>
                                </dd>
                            </dl>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">市区町村</dt>
                                <dd class="pull-left">
                                    <input name="jusho" type="text" placeholder="例）渋谷区東1-2-20 " class="text-md" value="{{$user->jusho}}" id="address" id="address" tabindex="109">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                    <p class="text-md pt0">※スカウト登録時に企業に公開されます</p>
                                </dd>
                            </dl>
                            <dl class="td-inner-md clearfix">
                                <dt class="pull-left">以降の住所</dt>
                                <dd class="pull-left">
                                    <input name="jusho2" type="text" placeholder="例）住友不動産渋谷ファーストタワー7F" class="text-md" value="{{$user->jusho2}}" id="form_jusho2" tabindex="110">
                                    <p class="text-md pt10">※応募時以外は企業に公開されません</p>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <th>電話番号<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="clearfix"><dt>自宅</dt><dd>
                                    <input name="tel" type="text" id="form_tel" value="{{$user->tel}}" tabindex="111">
                                    <div class="errortxtbox text-alert text-bold pt10"></div></dd>
                            </dl>
                            <dl class="clearfix"><dt>携帯電話</dt><dd>
                                    <input name="tel2" type="text" id="form_tel2" value="{{$user->tel2}}" tabindex="112">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                </dd></dl>
                            <p class="marl120">自宅か携帯電話のどちらかを必ずご記入ください。(半角)</p>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>

                            <dl class="clearfix"><dt>半角英数記号</dt><dd>
                                    <input name=email value="{{$user->email}}" type="text" id="form_email" tabindex="113"><div class="errortxtbox text-alert text-bold pt10"></div></dd>
                            </dl>
                            <dl class="clearfix"><dt>確認用</dt>
                                <dd><input name=email2 value="{{$user->email}}" type="text" id="form_email2" tabindex="114"><div class="errortxtbox text-alert text-bold pt10"></div></dd>
                            </dl>

                        </td>
                    </tr>
                    <tr>
                        <th>携帯メールアドレス</th>
                        <td>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">半角英数記号</dt>
                                <dd class="pull-left">
                                    <input name="m_email" value="{{$user->m_email}}" type="text" id="form_m_email" tabindex="117" placeholder="例） ****" class="form-md text-md pull-left">
                                    <div class="mt5 ml10 mr10 pull-left">@</div>
                                    <div class="select form-sm pull-left">
                                        <select name="m_domain" tabindex="118" id="m_domain">
                                            <option value="0">---</option>

                                            <option value="docomo.ne.jp" @if($user->m_domain == 'docomo.ne.jp') selected="selected" @endif >docomo.ne.jp</option>

                                            <option value="i.softbank.jp" @if($user->m_domain == 'i.softbank.jp') selected="selected" @endif >i.softbank.jp</option>

                                            <option value="pdx.ne.jp" @if($user->m_domain == 'pdx.ne.jp') selected="selected" @endif >pdx.ne.jp</option>

                                            <option value="di.pdx.ne.jp" @if($user->m_domain == 'di.pdx.ne.jp') selected="selected" @endif >di.pdx.ne.jp</option>

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

                                            <option value="docomo.ne.jp" @if($user->m_domain == 'docomo.ne.jp') selected="selected" @endif >docomo.ne.jp</option>

                                            <option value="i.softbank.jp" @if($user->m_domain == 'i.softbank.jp') selected="selected" @endif >i.softbank.jp</option>

                                            <option value="pdx.ne.jp" @if($user->m_domain == 'pdx.ne.jp') selected="selected" @endif >pdx.ne.jp</option>

                                            <option value="di.pdx.ne.jp" @if($user->m_domain == 'di.pdx.ne.jp') selected="selected" @endif >di.pdx.ne.jp</option>

                                        </select>
                                    </div>
                                    <div class="errortxtbox error_m_email2 text-bold text-alert pt10 clear"></div>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <th>最終学歴<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">学校名</dt>
                                <dd class="pull-left">
                                    <input tabindex="121" class="text-md" name="g_name" type="text" id="form_g_name" value="{{$user->g_name}}">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                </dd>
                            </dl>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">学部・学科名</dt>
                                <dd class="pull-left">
                                    <input tabindex="122" name="g_gakubu" class="text-md" type="text" id="form_g_gakubu" value="{{$user->g_gakubu}}">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                </dd>
                            </dl>
                            <dl class="td-inner-md clearfix">
                                <dt class="pull-left">卒業区分</dt>
                                <dd class="pull-left">
                                    <div class="select form-sm pull-left">
                                        <select tabindex="123" class="form_g_year" name="g_year" id="select">
                                            <option value="0">---</option>
                                            @for($i=(date('Y',time())+2); $i>=1950 ; $i--)
                                                <option value="{{$i}}" @if($user->g_year == $i) selected="selected"  @endif>{{$i}}年</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <p class="pull-left text-md mt10 mr10">&nbsp;年に</p>
                                    <div class="select form-sm pull-left">
                                        <select tabindex="124" class="form_g_type" name="g_type">
                                            <option value="0">----</option>
                                            <option value=1 @if($user->g_type == 1) selected="selected"  @endif>入学
                                            <option value=2 @if($user->g_type == 2) selected="selected"  @endif>中退
                                            <option value=3 @if($user->g_type == 3) selected="selected"  @endif>卒業
                                            <option value=4 @if($user->g_type == 4) selected="selected"  @endif>卒業見込み

                                        </select>
                                    </div>
                                    <div class="errortxtbox error_g_kubun text-bold text-alert pt10 clear"></div>
                                    <p class="pt10 text-md"><a href="/my/g_chart.html" target="_blank" class="icon icon-arrow02-xs">卒業年早見表</a></p>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                </table>
            </section>

            <section>
                <h2 class="h2 text-em pull-left mb10">スキルシート</h2>

                <a href="/my/edit/edit_skill"  tabindex="125" class="btn btn-md btn-secondary pull-right">スキルシート更新</a>
                <table class="clear input-cell mb40">
                    @foreach($skill_categories as $skill_category)
                    <tr>
                        <th>{{$skill_category['name']}}</th>
                        <td>
                            @foreach($skill_category['skill'] as $skill)
                            @if(!$skill->user_skills->isEmpty())
                                @foreach($skill->user_skills as $user_skill)
                                <span >{{$skill['name']}}</span> ：
                                @if($user_skill->value == 1)独学
                                @elseif($user_skill->value == 2)実務~1年
                                @elseif($user_skill->value == 3)実務1~2年
                                @elseif($user_skill->value == 4)実務2~年
                                @endif
                             <br>
                              @endforeach
                            @endif
                            @endforeach
                        </td>
                    </tr>
                    @endforeach

                    <tr>
                        <th>スキル補足</th>
                        <td>{{$user->s_other}}</td>
                    </tr>

                </table>

            </section>

            <section>
                <h2 class="h2 text-em mb10">職務経歴</h2>

                <div class="box clearfix mb40">
                    @foreach($resumes as $k => $resume)

                    <input type="hidden" name="resume[id][]" value="{{$resume['id']}}">
                    <div class="box-md clearfix">
                        <div class="clearfix mb10">
                            <h3 class="h3 pull-left">職務経歴{{$k + 1}}</h3>
                            <a href="#" data-role="submit-button" data-submit-type="rireki_delete" data-submit-num="1"  data-num="1" class="_deleteRireki btn btn-md btn-default pull-right">削除</a>
                        </div>
                        <table class="input-cell">
                            <tr>
                                <th>会社名</th>
                                <td>
                                    <input type="text" placeholder="例） 株式会社 ****" name="resume[office][]" value="{{$resume['office']}}" class="text-md form_office">
                                    <p class="pt10 text-md"><a href="/help/howto_apply/company_name.html" target=_blank class="icon icon-arrow02-xs">派遣・出向や統合・合併がある場合の社名記入例</a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>勤務期間</th>
                                <td>
                                    <div class="select form-sm pull-left">
                                        <select tabindex="127" name="resume[syear][]" id="com_year1">
                                            <option value="0">---</option>
                                            @for($i=date('Y',time()); $i>=1930 ; $i--)
                                                <option value="{{$i}}" @if($resume['syear'] == $i) selected="selected"  @endif>{{$i}}</option>
                                            @endfor

                                        </select>
                                    </div>
                                    <p class="pull-left text-md mt10 mr10">&nbsp;年</p>
                                    <div class="select form-xsm pull-left">
                                        <select tabindex="128" name="resume[smonth][]" id="com_month1">
                                            <option value="0">---</option>
                                            @for($i=1; $i<=12 ; $i++)
                                                <option value="{{$i}}" @if($resume['smonth'] == $i) selected="selected"  @endif>{{$i}}</option>
                                            @endfor

                                        </select>
                                    </div>
                                    <p class="pull-left mt10">&nbsp;月&nbsp;～&nbsp;</p>
                                    <div class="select form-sm pull-left">
                                        <select tabindex="129" name="resume[eyear][]" id="com_year2">
                                            <option value="0">---</option>
                                            @for($i=date('Y',time()); $i>=1930 ; $i--)
                                                <option value="{{$i}}" @if($resume['eyear'] == $i) selected="selected"  @endif>{{$i}}</option>
                                            @endfor

                                        </select>
                                    </div>
                                    <p class="pull-left text-md mt10 mr10">&nbsp;年</p>
                                    <div class="select form-xsm pull-left">
                                        <select tabindex="130" name="resume[emonth][]" id="com_month2">
                                            <option value="0">--</option>
                                            @for($i=1; $i<=12 ; $i++)
                                                <option value="{{$i}}" @if($resume['emonth'] == $i) selected="selected"  @endif>{{$i}}</option>
                                            @endfor

                                        </select>
                                    </div>
                                    <p class="pull-left mt10">&nbsp;月</p>
                                    <p class="clear pt10 text-md">現在勤務中の場合、終了年月は未入力にしてください。(例：1999年4月 ～ 年 月)</p>
                                </td>
                            </tr>
                            <tr>
                                <th>職種</th>
                                <td>
                                    <div class="select form-lg">
                                        <select tabindex="131" name="resume[r_shokushu][]" id="syokusyu" class="shokushu" data-num="1">
                                            <option value="0">---</option>
                                            @foreach($shokushus as $shokushu)
                                                <option value="{{$shokushu['id']}}" @if($resume['r_shokushu'] == $shokushu['id']) selected="selected"  @endif>{{$shokushu['name']}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>雇用形態</th>
                                <td>
                                    <div class="select form-lg">
                                        <select tabindex="132" name="resume[r_keitai][]" size="1" id="keitai">
                                            <option value="0">---</option>
                                            @foreach($keitais as $keitai)
                                                <option value="{{$keitai['id']}}" @if($resume['r_keitai'] == $keitai['id']) selected="selected"  @endif>{{$keitai['name']}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>職務内容</th>
                                <td>
                                    <textarea id="rireki_form1" class="form_job_content" tabindex="133" name="resume[job_content][]">{{$resume['job_content']}}</textarea>
                                    <p class="pt10 text-md"><a href="/help/howto_apply/experience.html" target=_blank class="icon icon-docs-md">職務経歴の記入例</a></p>
                                </td>
                            </tr>
                        </table>
                    </div><!--box-md-->

                    @endforeach

                        <a href="/my/edit/add_resume"  class="btn btn-md btn-secondary pull-right mr20 mb20">職務経歴追加</a>
                        <p class="pull-right pt5 mr20">※上記のほかに勤務した会社があれば追加してください</p>

                </div>

            </section>

            <section>
                <h2 class="h2 text-em text-b-gr mb10">自己PR・志望動機</h2>
                <div class="box-md box-default clearfix mb40">
        <textarea id="form_shokureki" tabindex="142" name="shokureki">{{$user->shokureki}}</textarea>
                    <p class="pt10 text-md">※職務経歴だけでは表現しにくいアピールポイントを記入<a href="/help/howto_apply/pr.html" target=_blank class="icon icon-docs-md ml20">自己PR・志望動機の記入例</a></p>
                </div>
            </section>




            <section>
                <div class="box-md bg-default mb50">
                    <h2 class="text-md">個人情報の取り扱いについて</h2>
                    <ul class="text-md">
                        <li class="indent-align">・お客様の個人情報は、求人広告掲載企業への応募等のサービスをご利用いただくために利用いたします。<br>ここで登録した情報については事前の同意なしに一切公開されることはありません。</li>
                        <li class="indent-align">・個人情報などの取り扱いについては「<a href="http://www.mixi-recruitment.co.jp/privacy.html" target="_blank">プライバシーポリシー</a>」をご覧ください。</li>
                    </ul>
                </div>
            </section>

            <div class="relative text-center">
                <a href="/my/edit/edit" class="btn btn-md btn-default btn-nortmal fixed-left">登録情報トップに戻る</a>
                <a href="javascript:void(0);" type="button" name="data_edit" class="btn btn-xxlg btn-primary btn-wide block-center" data-role="submit-button" data-submit-type="data_edit">Web履歴書を登録する</a>
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
    $(function(){
        fj.c.my.edit.initResumeForm();
    });
</script>
@stop
