@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')
    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
        <ul>
            <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
            <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span
                            itemprop="title">会員登録</span></strong></li>
        </ul>
    </div><!--topic-path-->
@stop

@section('container')

    <main>
        <div class="container container-narrow">

            <h1 class="mb30">会員登録</h1>


            <div class="box box-md mb40">
                <p><span class="text-em text-lg text-bold">会員登録が完了しました。</span><br>ご登録いただいたメールアドレスに、登録完了のお知らせメールを送信しました。
                </p>
            </div>


            <div class="box box-md bg-yellow clearfix mb40">
                <h2 class="text-xlg text-em mb5">詳細情報をご登録いただくと利用できる便利な機能！</h2>
                <p class="mb10">詳細な情報を登録すると、希望条件に応じたメールマガジンのお届けや企業からのスカウトメールを受けることが可能になります。</p>
                <dl class="box-regist-scout box-sm bg-white pull-left">
                    <dt class="text-xlg text-em text-bold mb5">新着メルマガ</dt>
                    <dd>あなたのご希望に応じた求人情報を毎週2回メールで受信できます。</dd>
                </dl>
                <dl class="box-regist-scout box-sm bg-white pull-right">
                    <dt class="text-xlg text-em text-bold mb5">スカウトメール</dt>
                    <dd>匿名の履歴書を登録・公開すると、あなたに興味を持った企業からスカウトメールが届きます。</dd>
                </dl>
            </div>

            <form class="form" action="regist" method="post">
                <input type="hidden" name="submitted" value="bookmark">
                <input type="hidden" name="userid" value="{{$user->id}}">
                <input type="hidden" name="mailservice_new" value="1">
                <input type="hidden" name="mailservice_pickup" value="1">
                <input type="hidden" name="mailservice_digest" value="1">
                <input type="hidden" name="mailservice_dm" value="1">
                {!! csrf_field() !!}}

                <section>
                    <h2 class="h2 text-em mb10">希望条件</h2>
                    <table class="input-cell mb40">
                        <tbody>
                        <tr>
                            <th>职位<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                            <td>
                                <ul class="inner-td-col2 clearfix">
                                    @foreach($shokushus as $key=>$shokushu)
                                        <li class="pull-left mb5 @if($key%2!=0) list-sm @endif">
                                            <label for="shokushu{{$shokushu->id}}">
                                                <input type="checkbox" name="k_shokushu[]" class="mr5" value="{{$shokushu->id}}" id="shokushu{{$shokushu->id}}">
                                                {{$shokushu->name}}</label>
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>工作地点<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                            <td class="clearfix">
                                <ul class="inner-td-col4 clearfix">
                                    @foreach($kinmuchis as $kinmuchi)
                                        <li class="pull-left mb5">
                                            <label for="kinmuchi{{$kinmuchi->id}}">
                                                <input type="checkbox" name="k_kinmuchi[]" class="mr5" value="{{$kinmuchi->id}}" id="kinmuchi{{$kinmuchi->id}}">
                                                {{$kinmuchi->name}}</label>
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>雇用方式<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                            <td class="clearfix">
                                <ul class="inner-td-col4 clearfix">
                                    @foreach($keitais as $keitai)
                                        <li class="pull-left mb5">
                                            <label for="keitai{{$keitai->id}}">
                                                <input type="checkbox" name="k_keitai[]" class="mr5" value="{{$keitai->id}}" id="keitai{{$keitai->id}}">
                                                {{$keitai->name}}
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th>时薪</th>
                            <td>
                                <div class="select form-md">
                                    <select name="k_jikyuu">

                                        <option value="0">最低時給の希望は特にない</option>

                                        <option value="1">時給 800 円以上</option>

                                        <option value="2">時給 1000 円以上</option>

                                        <option value="3">時給 1500 円以上</option>

                                        <option value="4">時給 2000 円以上</option>

                                        <option value="5">時給 2500 円以上</option>

                                        <option value="6">時給 3000 円以上</option>

                                        <option value="7">時給 3500 円以上</option>

                                        <option value="8">時給 4000 円以上</option>

                                        <option value="9">時給制は希望しない</option>

                                    </select>
                                </div>
                                <p class="text-md pt10">※メールマガジンの配信条件ではありません</p>
                            </td>
                        </tr>
                        <tr>
                            <th>月薪</th>
                            <td>
                                <div class="select form-md">
                                    <select name="k_gekkyuu">

                                        <option value="0">最低月給の希望は特にない</option>

                                        <option value="1">月給 15 万円以上</option>

                                        <option value="2">月給 20 万円以上</option>

                                        <option value="3">月給 25 万円以上</option>

                                        <option value="4">月給 30 万円以上</option>

                                        <option value="5">月給 35 万円以上</option>

                                        <option value="6">月給 40 万円以上</option>

                                        <option value="7">月給 45 万円以上</option>

                                        <option value="8">月給 50 万円以上</option>

                                        <option value="9">月給制は希望しない</option>

                                    </select>
                                </div>
                                <p class="text-md pt10">※メールマガジンの配信条件ではありません</p>
                            </td>
                        </tr>
                        <tr>
                            <th>年薪</th>
                            <td>
                                <div class="select form-md">
                                    <select name="k_nenbou">

                                        <option value="0">最低年俸の希望は特にない</option>

                                        <option value="1">年俸 250 万円以上</option>

                                        <option value="2">年俸 300 万円以上</option>

                                        <option value="3">年俸 350 万円以上</option>

                                        <option value="4">年俸 400 万円以上</option>

                                        <option value="5">年俸 450 万円以上</option>

                                        <option value="6">年俸 500 万円以上</option>

                                        <option value="7">年俸 600 万円以上</option>

                                        <option value="8">年俸 700 万円以上</option>

                                        <option value="9">年俸 800 万円以上</option>

                                        <option value="10">年俸 1000 万円以上</option>

                                        <option value="11">年俸制は希望しない</option>

                                    </select>
                                </div>
                                <p class="text-md pt10">※メールマガジンの配信条件ではありません</p>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </section>


                <table class="input-cell mb50">
                    <tbody>
                    <tr>
                        <th>メールの配信形式<span class="tag tag-sm tag-primary pull-right">必須</span></th>
                        <td>
                            <ul>
                                <li class="mb5"><label for="html_mail_yes">
                                        <input type="radio" id="html_mail_yes" name="html_mail" value="1" checked="">HTML形式
                                    </label></li>
                                <li><label for="html_mail_no">
                                        <input type="radio" id="html_mail_no" name="html_mail" value="0">テキスト形式
                                    </label></li>
                            </ul>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="relative text-center">
                    <input type="submit" class="btn btn-xxlg btn-primary btn-wide block-center" value="希望条件を登録">
                </div>
            </form>

        </div><!--container-->
    </main>
@stop
@section('js')


    <script src="/assets/javascripts/my/fj.js"></script>
    <script src="/assets/javascripts/my/jquery-fjplugins.js"></script>
    <script src="/assets/javascripts/my/my.js"></script>
    <script>
        $(function () {

            fj.c.my.regist.initMailmagaForm({form: "form"});

        });
    </script>
@stop
