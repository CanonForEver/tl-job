@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')
<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href=""><span itemprop="title">登録情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">スキルシート登録</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">スキルシート登録</h1>

        <section>
            <div class="box box-md bg-yellow mb40">
                <h2 class="h5 text-em mb15">スキルシートを登録して転職活動を有利に進めましょう</h2>
                <p>詳細に入力すると、選考通過率、スカウトでの注目度が高まります。</p>
            </div>
        </section>

        <form name=skill action="edit" method=post class="form">
            <input type="hidden" name="submitted" value="skill_form">
            <input type="hidden" name="from" value="">
            <input type="hidden" name="userid" value="557782">
            <input type="hidden" name="user_sid" value="1223dfa5f00868373e5431180001062c">
            <input type="hidden" name="skill_sid" value="370b9bcbf7604e2b4b4e0b29be7599b2">
            <input type="hidden" name="rireki_sid" value="41af19592e54fde661b472b6225f0c14">
            <input type="hidden" name="career" value="1">
            <input type="hidden" name="old_rireki" value="">
            <input type="hidden" name="edit_form" value="0">
            <input type="hidden" name="unique_key" value="9e908efd87c839e8235d5b9da36c308f">

            <section>
                @foreach($skill_categories as $skill_category)
                <h2 class="h2 text-em mb10">{{$skill_category['name']}}</h2>
                <table class="table-skill input-cell text-md mb40">
                    <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <td>なし</td>
                        <td>独学</td>
                        <td>実務<br>~1年</td>
                        <td>実務<br>1~2年</td>
                        <td>実務<br>2年~</td>
                        <th class="partition">&nbsp;</th>
                        <td>なし</td>
                        <td>独学</td>
                        <td>実務<br>~1年</td>
                        <td>実務<br>1~2年</td>
                        <td>実務<br>2年~</td>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($skill_category['skill'] as $k => $skill)
                    @if($k % 2 == 0)
                    <tr>
                     @endif
                        <th>{{$skill['name']}}</th>

                        {{--<td><input type="radio"  name="{{$skill['id']}}" value="0" @if(in_array($skill['id'], $user_skills) and $skill['value']==0) checked @endif></td>--}}
                        <td><input type="radio"  name="{{$skill['id']}}" value="0" checked></td>

                        <td><input type="radio"  name="{{$skill['id']}}" value="1" ></td>

                        <td><input type="radio"  name="{{$skill['id']}}" value="2" ></td>

                        <td><input type="radio"  name="{{$skill['id']}}" value="3" ></td>

                        <td><input type="radio"  name="{{$skill['id']}}" value="4" ></td>

                    @if($k+1 % 2 == 0)
                        <tr>
                    @endif

                     @endforeach

                    </tbody>
                </table>
                @endforeach
            </section>



            <section>
                <h2 class="h2 text-em mb10">各種資格</h2>
                <table class="input-cell text-md mb40">
                    <tr>
                        <th>TOEIC</th>
                        <td>
                            <ul class="list-skill-col4 clearfix">


                                <li class="pull-left"><label for="64"><input tabindex="17" class="mr5" id="64" name="64" type="checkbox" value="1" >500点以上</label></li>



                                <li class="pull-left"><label for="28"><input tabindex="17" class="mr5" id="28" name="28" type="checkbox" value="1" >600点以上</label></li>



                                <li class="pull-left"><label for="59"><input tabindex="17" class="mr5" id="59" name="59" type="checkbox" value="1" >730点以上</label></li>



                                <li class="pull-left"><label for="75"><input tabindex="17" class="mr5" id="75" name="75" type="checkbox" value="1" >860点以上</label></li>


                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>簿記</th>
                        <td>
                            <ul class="list-skill-col4 clearfix">


                                <li class="pull-left"><label for="30"><input class="mr5" tabindex="17" id="30" name="30" type="checkbox" value="1" >簿記3級</label></li>



                                <li class="pull-left"><label for="65"><input class="mr5" tabindex="17" id="65" name="65" type="checkbox" value="1" >簿記2級</label></li>


                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>情報系資格</th>
                        <td>
                            <ul class="list-skill-col3 clearfix">


                                <li class="pull-left mb10"><label for="63"><input tabindex="17" class="mr5" id="63" name="63" type="checkbox" value="1" >初級シスアド</label></li>



                                <li class="pull-left mb10"><label for="58"><input tabindex="17" class="mr5" id="58" name="58" type="checkbox" value="1" >ソフトウェア開発技術者</label></li>



                                <li class="pull-left mb10"><label for="62"><input tabindex="17" class="mr5" id="62" name="62" type="checkbox" value="1" >基本情報技術者</label></li>



                                <li class="pull-left mb10"><label for="91"><input tabindex="17" class="mr5" id="91" name="91" type="checkbox" value="1" >CCNA</label></li>



                                <li class="pull-left mb10"><label for="92"><input tabindex="17" class="mr5" id="92" name="92" type="checkbox" value="1" >CCNP</label></li>



                                <li class="pull-left mb10"><label for="56"><input tabindex="17" class="mr5" id="56" name="56" type="checkbox" value="1" >MOT</label></li>



                                <li class="pull-left mb10"><label for="96"><input tabindex="17" class="mr5" id="96" name="96" type="checkbox" value="1" >OracleMaster</label></li>



                                <li class="pull-left mb10"><label for="97"><input tabindex="17" class="mr5" id="97" name="97" type="checkbox" value="1" >MOS(旧MOUS)</label></li>


                            </ul>
                        </td>
                    </tr>
                </table>
            </section>

            <section>
                <h2 class="h2 text-em mb10">スキルに関する捕足</h2>
                <div class="box-md bg-default border-t-gray border-b-gray mb50">
                    <textarea placeholder="上記以外にあなたのスキルについてアピールしたいことがあればご記入ください" tabindex="" name="s_other">随便&#35828;的&#21861;</textarea>
                </div>
            </section>

            <div class="relative text-center">
                <a href="#" tabindex="09" data-role="back-button" class="btn btn-md btn-default fixed-left">変更しないで戻る</a>
                <input type="submit" class="btn btn-xxlg btn-primary btn-wide block-center" value="スキルシートを登録して戻る">
            </div>


        </form>
    </div><!--container-->
</main>


@stop

@section('js')

<script src="/assets/javascripts/my/jquery-fjplugins.js"></script>
<script src="/assets/javascripts/my/fj.js"></script>
<script src="/assets/javascripts/my/my.js"></script>
<script>

    $(function(){

        fj.c.my.edit.initSkillForm();

        // セル選択でチェック
        var $td = $('form td');
        $td.click(function(){
            var $input = $(this).find('input');
            // 資格チェックボックス、textareaを除外。
            if($input.attr('type') == 'radio'){
                var $value = $input.val();
                $input.val([$value]);
            }
        });

        $("a[data-role='back-button']").click(function(){

            try {
                $("form:first")
                        .find("[name=submitted]").val("form").end()
                        .get(0).submit();
            } catch (e) {
                // IE で onbeforeunload キャンセル時に発生する「未定義のエラー」回避
            }

            return false;
        });
    });

</script>
@stop

