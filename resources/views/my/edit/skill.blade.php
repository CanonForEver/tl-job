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

        <form name=skill action="/my/edit/update_skill" method=post class="form">
            {!! csrf_field() !!}
            {!! method_field('put') !!}

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

                        {{--<td><input type="radio"  name="{{$skill['id']}}" value="0" checked></td>--}}

                        {{--<td><input type="radio"  name="{{$skill['id']}}" value="1" ></td>--}}

                        {{--<td><input type="radio"  name="{{$skill['id']}}" value="2" ></td>--}}

                        {{--<td><input type="radio"  name="{{$skill['id']}}" value="3" ></td>--}}

                        {{--<td><input type="radio"  name="{{$skill['id']}}" value="4" ></td>--}}

                        @for($i=0;$i<=4; $i++)
                            <td>
                                <input type="radio" tabindex="10" name="{{$skill->id}}" value="{{$i}}"
                                       @if(!array_key_exists("$skill->id",$my_skills) and $i==0)
                                       checked
                                       @endif

                                       @if(array_key_exists("$skill->id",$my_skills) and $i == $my_skills["$skill->id"])
                                       checked
                                        @endif
                                        >
                            </td>
                        @endfor

                    @if($k+1 % 2 == 0)
                        <tr>
                    @endif

                     @endforeach

                    </tbody>
                </table>
                @endforeach
            </section>


            <section>
                <h2 class="h2 text-em mb10">スキルに関する捕足</h2>
                <div class="box-md bg-default border-t-gray border-b-gray mb50">
                    <textarea placeholder="上記以外にあなたのスキルについてアピールしたいことがあればご記入ください" tabindex="" name="s_other">{{$user->s_other}}</textarea>
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

