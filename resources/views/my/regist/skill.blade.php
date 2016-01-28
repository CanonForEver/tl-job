@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')

    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
        <ul>
            <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
            <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span
                            itemprop="title">登録情報</span></strong></li>
        </ul>
    </div><!--topic-path-->
@stop

@section('container')
    <main>
        <div class="container container-narrow">

            <h1 class="mb30">スキルシート登録</h1>

            <p>312 様のスキルシートをご登録いただきます。</p>

            <div class="box box-info box-md mb40">
                <h2 class="h5 text-lg text-em mb5">スキルシートを登録して、有利に転職活動を進めましょう</h2>
                <p>詳細に入力すると、選考通過率、スカウトでの注目度が高まります。</p>
            </div>

            <form name="skill" class="form" method="post">

                @foreach ($skill_categories as $skill_cateogry)
                    <section>
                        <h2 class="h2 text-em mb10">{{$skill_cateogry->name}}</h2>
                        <table class="table-skill input-cell text-md mb40">
                            <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <td>无</td>
                                <td>自学</td>
                                <td>实务<br>~1年</td>
                                <td>实务<br>1~2年</td>
                                <td>实务<br>2年~</td>
                                <th class="partition">&nbsp;</th>
                                <td>无</td>
                                <td>自学</td>
                                <td>实务<br>~1年</td>
                                <td>实务<br>1~2年</td>
                                <td>实务<br>2年~</td>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($skill_cateogry->skills as $key=>$skill)
                                @if($key%2==0)
                                    <tr>
                                        @endif

                                        <th @if($key%2 == 1) class="partition" @endif>{{$skill->name}}</th>

                                        @for($i=0;$i<=4; $i++)
                                            <td>
                                                <input type="radio" tabindex="10" name="{{$skill->id}}" value="{{$i}}"
                                                       @if(!$my_skills and $i==0)
                                                       checked
                                                       @endif

                                                       @if($my_skills and $i == $my_skills["$skill->id"])
                                                       checked
                                                        @endif
                                                >
                                            </td>
                                        @endfor

                                        {{--判断如果是最后一个,并且是单数--}}
                                        @if( ($key+1) == count($skill_cateogry->skills) and $key%2==0)
                                            <td colspan="6"></td>
                                        @endif

                                        @if($key%2==1)
                                    </tr>
                                @endif
                            @endforeach


                            </tbody>
                        </table>
                    </section>

                @endforeach


                <section>
                    <h2 class="h2 text-em mb10">证书资格</h2>
                    <table class="input-cell text-md mb40">
                        <tr>
                            <th>TOEIC</th>
                            <td>
                                <ul class="list-skill-col4 clearfix">


                                    <li class="pull-left"><label for="64"><input tabindex="17" class="mr5" id="64"
                                                                                 name="64" type="checkbox" value="1">500点以上</label>
                                    </li>


                                    <li class="pull-left"><label for="28"><input tabindex="17" class="mr5" id="28"
                                                                                 name="28" type="checkbox" value="1">600点以上</label>
                                    </li>


                                    <li class="pull-left"><label for="59"><input tabindex="17" class="mr5" id="59"
                                                                                 name="59" type="checkbox" value="1">730点以上</label>
                                    </li>


                                    <li class="pull-left"><label for="75"><input tabindex="17" class="mr5" id="75"
                                                                                 name="75" type="checkbox" value="1">860点以上</label>
                                    </li>


                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>簿記</th>
                            <td>
                                <ul class="list-skill-col4 clearfix">


                                    <li class="pull-left"><label for="30"><input class="mr5" tabindex="17" id="30"
                                                                                 name="30" type="checkbox" value="1">簿記3級</label>
                                    </li>


                                    <li class="pull-left"><label for="65"><input class="mr5" tabindex="17" id="65"
                                                                                 name="65" type="checkbox" value="1">簿記2級</label>
                                    </li>


                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>情報系資格</th>
                            <td>
                                <ul class="list-skill-col3 clearfix">


                                    <li class="pull-left mb10"><label for="63"><input tabindex="17" class="mr5" id="63"
                                                                                      name="63" type="checkbox"
                                                                                      value="1">初級シスアド</label></li>


                                    <li class="pull-left mb10"><label for="58"><input tabindex="17" class="mr5" id="58"
                                                                                      name="58" type="checkbox"
                                                                                      value="1">ソフトウェア開発技術者</label></li>


                                    <li class="pull-left mb10"><label for="62"><input tabindex="17" class="mr5" id="62"
                                                                                      name="62" type="checkbox"
                                                                                      value="1">基本情報技術者</label></li>


                                    <li class="pull-left mb10"><label for="91"><input tabindex="17" class="mr5" id="91"
                                                                                      name="91" type="checkbox"
                                                                                      value="1">CCNA</label></li>


                                    <li class="pull-left mb10"><label for="92"><input tabindex="17" class="mr5" id="92"
                                                                                      name="92" type="checkbox"
                                                                                      value="1">CCNP</label></li>


                                    <li class="pull-left mb10"><label for="56"><input tabindex="17" class="mr5" id="56"
                                                                                      name="56" type="checkbox"
                                                                                      value="1">MOT</label></li>


                                    <li class="pull-left mb10"><label for="96"><input tabindex="17" class="mr5" id="96"
                                                                                      name="96" type="checkbox"
                                                                                      value="1">OracleMaster</label>
                                    </li>


                                    <li class="pull-left mb10"><label for="97"><input tabindex="17" class="mr5" id="97"
                                                                                      name="97" type="checkbox"
                                                                                      value="1">MOS(旧MOUS)</label></li>


                                </ul>
                            </td>
                        </tr>
                    </table>
                </section>

                <section>
                    <h2 class="h2 text-em mb10">关于技能的补充</h2>
                    <div class="box-md bg-default border-t-gray border-b-gray mb50">
                        <textarea placeholder="上記以外にあなたのスキルについてアピールしたいことがあればご記入ください" tabindex=""
                                  name="s_other">{{$user->s_other}}</textarea>
                    </div>
                </section>

                <div class="relative text-center">
                    <a href="#" tabindex="09" data-role="back-button"
                       class="btn btn-md btn-default fixed-left">変更しないで戻る</a>
                    <input type="submit" class="btn btn-xxlg btn-primary btn-wide block-center" value="スキルシートを登録して戻る">
                </div>

            </form>
        </div><!--container-->
    </main>
@stop

@section('js')

    <script type="text/javascript" src="/assets/javascripts/my/jquery-fjplugins.js"></script>
    <script type="text/javascript" src="/assets/javascripts/my/fj.js"></script>
    <script type="text/javascript" src="/assets/javascripts/my/my.js"></script>
    <script type="text/javascript">

        $(function () {

            fj.c.my.edit.initSkillForm();

            // セル選択でチェック
            var $td = $('form td');
            $td.click(function () {
                var $input = $(this).find('input');
                // 資格チェックボックス、textareaを除外。
                if ($input.attr('type') == 'radio') {
                    var $value = $input.val();
                    $input.val([$value]);
                }
            });

            $("a[data-role='back-button']").click(function () {

                fj.c.my.apply.noAlert = true;

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