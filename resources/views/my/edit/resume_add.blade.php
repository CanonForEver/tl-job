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

        <h2 class="h3">職務経歴の追加</h2>

        <p class="mb40">新しい職務経歴を追加します。<br>
            必要な項目を入力し、ページ下の「この職務経歴を追加する」ボタンをクリックしてください。</p>

        <form action="/my/edit/store_add_resume" method="post" class="form" name=edit_form id='edit_form' onsubmit="document.edit_form.form.value='';">
            {!! csrf_field() !!}

            <input hidden name="user_id"  value="{{$user->id}}">

            <section>
                <h2 class="h2 text-em mb10">職務経歴</h2>

                <div class="box clearfix mb40">

                        <div class="box-md clearfix">
                            <div class="clearfix mb10">
                                <h3 class="h3 pull-left"></h3>
                                <a href="#" data-role="submit-button" data-submit-type="rireki_delete" data-submit-num="1"  data-num="1" class="_deleteRireki btn btn-md btn-default pull-right">削除</a>
                            </div>
                            <table class="input-cell">
                                <tr>
                                    <th>会社名</th>
                                    <td>
                                        <input type="text" placeholder="例） 株式会社 ****" name="office" value="" class="text-md form_office">
                                        <p class="pt10 text-md"><a href="/help/howto_apply/company_name.html" target=_blank class="icon icon-arrow02-xs">派遣・出向や統合・合併がある場合の社名記入例</a></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>勤務期間</th>
                                    <td>
                                        <div class="select form-sm pull-left">
                                            <select tabindex="127" name="syear" id="com_year1">
                                                <option value="0">---</option>
                                                @for($i=date('Y',time()); $i>=1930 ; $i--)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <p class="pull-left text-md mt10 mr10">&nbsp;年</p>
                                        <div class="select form-xsm pull-left">
                                            <select tabindex="128" name="smonth" id="com_month1">
                                                <option value="0">---</option>
                                                @for($i=1; $i<=12 ; $i++)
                                                    <option value="{{$i}}" >{{$i}}</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <p class="pull-left mt10">&nbsp;月&nbsp;～&nbsp;</p>
                                        <div class="select form-sm pull-left">
                                            <select tabindex="129" name="eyear" id="com_year2">
                                                <option value="0">---</option>
                                                @for($i=date('Y',time()); $i>=1930 ; $i--)
                                                    <option value="{{$i}}" >{{$i}}</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <p class="pull-left text-md mt10 mr10">&nbsp;年</p>
                                        <div class="select form-xsm pull-left">
                                            <select tabindex="130" name="emonth" id="com_month2">
                                                <option value="0">--</option>
                                                @for($i=1; $i<=12 ; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
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
                                            <select tabindex="131" name="r_shokushu" id="syokusyu" class="shokushu" data-num="1">
                                                <option value="0">---</option>
                                                @foreach($shokushus as $shokushu)
                                                    <option value="{{$shokushu['id']}}">{{$shokushu['name']}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>雇用形態</th>
                                    <td>
                                        <div class="select form-lg">
                                            <select tabindex="132" name="r_keitai" size="1" id="keitai">
                                                <option value="0">---</option>
                                                @foreach($keitais as $keitai)
                                                    <option value="{{$keitai['id']}}" >{{$keitai['name']}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>職務内容</th>
                                    <td>
                                        <textarea id="rireki_form1" class="form_job_content" tabindex="133" name="job_content"></textarea>
                                        <p class="pt10 text-md"><a href="/help/howto_apply/experience.html" target=_blank class="icon icon-docs-md">職務経歴の記入例</a></p>
                                    </td>
                                </tr>
                            </table>
                        </div><!--box-md-->


                </div>

            </section>

            <div class="relative text-center">
                <a href="javascript:void(0);" class="btn btn-md btn-default fixed-left" data-role="back-button" tabindex="09">追加しないで戻る</a>
                <input type="submit" class="btn btn-xxlg btn-primary btn-wide block-center" value="職務経歴を追加">
            </div>


        </form>

    </div><!--container-->
</main>

@stop

@section('js')
<script src="/assets/javascripts/my/jquery-fjplugins.js"></script>
<script src="/vendor/assets/jquery/jquery.validate.min.js"></script>
<script src="/assets/javascripts/my/fj_validation.js"></script>
<script src="/assets/javascripts/my/fj.js"></script>
<script src="/assets/javascripts/my/my.js"></script>
<script>
    $(function(){
        fj.c.my.edit.initBiographyForm();

        $("a[data-role='back-button']").click(function(){

            $("form:first").validate().cancelSubmit = true;
            try {
                $("form:first")
                        .find("[name=form]").val("1").end()
                        .get(0).submit();
            } catch (e) {
                // IE で onbeforeunload キャンセル時に発生する「未定義のエラー」回避
            }

            return false;
        });
    });
</script>
@stop
