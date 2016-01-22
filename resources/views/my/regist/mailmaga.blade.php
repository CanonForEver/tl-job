@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')
    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
        <ul>
            <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
            <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span
                            itemprop="title">会员注册</span></strong></li>
        </ul>
    </div><!--topic-path-->
@stop

@section('container')

    <main>
        <div class="container container-narrow">

            <h1 class="mb30">会员注册</h1>


            <div class="box box-md mb40">
                <p><span class="text-em text-lg text-bold">会员注册が完了しました。</span><br>ご登録いただいたメールアドレスに、登録完了のお知らせメールを送信しました。
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

            @include('layouts._message')

            <form class="form" method="post">
                <input type="hidden" name="submitted" value="bookmark">
                <input type="hidden" name="userid" value="{{$user->id}}">
                <input type="hidden" name="mailservice_new" value="1">
                <input type="hidden" name="mailservice_pickup" value="1">
                <input type="hidden" name="mailservice_digest" value="1">
                <input type="hidden" name="mailservice_dm" value="1">
                {!! csrf_field() !!}

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
                                                <input type="checkbox" name="k_shokushu[]" class="mr5"
                                                       @if(old('k_shokushu') and in_array($shokushu->id, old('k_shokushu')) )
                                                       checked
                                                       @endif
                                                       value="{{$shokushu->id}}" id="shokushu{{$shokushu->id}}">
                                                {{$shokushu->name}}</label>
                                        </li>
                                    @endforeach
                                </ul>
                                <p class="text-alert text-bold pt10">{{$errors->first('k_shokushu')}}</p>
                            </td>
                        </tr>
                        <tr>
                            <th>工作地点<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                            <td class="clearfix">
                                <ul class="inner-td-col4 clearfix">
                                    @foreach($kinmuchis as $kinmuchi)
                                        <li class="pull-left mb5">
                                            <label for="kinmuchi{{$kinmuchi->id}}">
                                                <input type="checkbox" name="k_kinmuchi[]" class="mr5"
                                                       @if(old('k_kinmuchi') and in_array($kinmuchi->id, old('k_kinmuchi')) )
                                                       checked
                                                       @endif
                                                       value="{{$kinmuchi->id}}" id="kinmuchi{{$kinmuchi->id}}">
                                                {{$kinmuchi->name}}</label>
                                        </li>
                                    @endforeach
                                </ul>
                                <p class="text-alert text-bold pt10">{{$errors->first('k_kinmuchi')}}</p>
                            </td>
                        </tr>
                        <tr>
                            <th>雇用方式<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                            <td class="clearfix">
                                <ul class="inner-td-col4 clearfix">
                                    @foreach($keitais as $keitai)
                                        <li class="pull-left mb5">
                                            <label for="keitai{{$keitai->id}}">
                                                <input type="checkbox" name="k_keitai[]" class="mr5"
                                                       @if(old('k_keitai') and in_array($keitai->id, old('k_keitai')) )
                                                       checked
                                                       @endif
                                                       value="{{$keitai->id}}" id="keitai{{$keitai->id}}">
                                                {{$keitai->name}}
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                                <p class="text-alert text-bold pt10">{{$errors->first('k_keitai')}}</p>
                            </td>
                        </tr>

                        <tr>
                            <th>时薪</th>
                            <td>
                                <div class="select form-md">
                                    <select name="k_jikyuu">

                                        <option value="0">最低時給の希望は特にない</option>

                                        @foreach($jikyuus as $jikyuu)
                                            <option value="{{$jikyuu->id}}" @if (old('k_jikyuu') == $jikyuu->id) selected @endif >
                                                {{$jikyuu->name}}
                                            </option>
                                        @endforeach

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

                                        @foreach($gekkyuus as $gekkyuu)
                                            <option value="{{$gekkyuu->id}}" @if (old('k_gekkyuu') == $gekkyuu->id) selected @endif>
                                                {{$gekkyuu->name}}
                                            </option>
                                        @endforeach

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

                                        @foreach($nenbous as $nenbou)
                                            <option value="{{$nenbou->id}}" @if (old('k_nenbou') == $nenbou->id) selected @endif>
                                                {{$nenbou->name}}
                                            </option>
                                        @endforeach

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
                                        <input type="radio" id="html_mail_yes" name="html_mail"
                                               @if(!(old('html_mail') or old('html_mail')=='1'))
                                               checked
                                               @endif
                                               value="1">HTML形式
                                    </label></li>
                                <li><label for="html_mail_no">
                                        <input type="radio" id="html_mail_no" name="html_mail"
                                               @if(old('html_mail')=='0'))
                                               checked
                                               @endif
                                               value="0">テキスト形式
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
