@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')


<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/my/edit/edit.cgi"><span itemprop="title">登録情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">希望条件登録</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">希望条件登録</h1>

        <div class="box box-md bg-yellow mb40">
            <p class="text-bold text-em">希望条件をご登録いただくと、条件に合致する最新の求人情報のメールマガジンを週2回お届けします。</p>
        </div>

        <form class="form" action="/my/edit/update_edit_mail" method="post" name="edit">
            {!! csrf_field() !!}
            {!! method_field('put') !!}


            <section>
                <h2 class="h2 text-em mb10">希望条件</h2>
                <table class="input-cell mb40">
                    <tr>
                        <th>職種<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <ul class="inner-td-col2 clearfix">
                                @foreach($shokushus as $k => $shokushu)
                                    <li class="pull-left mb5 @if($k%2 == 1)list-sm @endif">
                                        <label for="shokushu{{$shokushu->id}}"><input type=checkbox name="k_shokushu[]" class="mr5" value="{{$shokushu->id}}" id="shokushu205" @if(in_array("$shokushu->id", $user_shokushu))checked @endif>
                                            {{$shokushu->name}}</label>
                                    </li>
                                @endforeach
                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <th>勤務地<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td class="clearfix">
                            <ul class="inner-td-col4 clearfix">
                                @foreach($kinmuchis as $k => $kinmuchi)
                                    <li class="pull-left mb5 @if($k%2 == 1)list-sm @endif">
                                        <label for="kinmuchil{{$kinmuchi->id}}"><input type=checkbox name="k_kinmuchi[]" class="mr5" value="{{$kinmuchi->id}}" id="kinmuchil{{$kinmuchi->id}}" @if(in_array("$kinmuchi->id", $user_kinmuchi))checked @endif>
                                            {{$kinmuchi->name}}</label>
                                    </li>
                                @endforeach
                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <th>雇用形態<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td class="clearfix">
                            <ul class="inner-td-col4 clearfix">

                                @foreach($keitais as $k => $keitai)
                                    <li class="pull-left mb5 @if($k%2 == 1)list-sm @endif">
                                        <label for="keitai{{$keitai->id}}"><input type=checkbox name="k_keitai[]" class="mr5" value="{{$keitai->id}}" id="keitai{{$keitai->id}}" @if(in_array("$keitai->id", $user_keitai))checked @endif>
                                            {{$keitai->name}}</label>
                                    </li>
                                @endforeach

                            </ul>

                        </td>
                    </tr>

                    <tr>
                        <th>時給</th>
                        <td>
                            <div class="select form-md">
                                <select name=k_jikyuu>

                                    <option value='0' >最低時給の希望は特にない</option>

                                    <option value='1' @if($user->k_jikyuu == 1) selected @endif>時給 800 円以上</option>

                                    <option value='2' @if($user->k_jikyuu == 2) selected @endif>時給 1000 円以上</option>

                                    <option value='3' @if($user->k_jikyuu == 3) selected @endif>時給 1500 円以上</option>

                                    <option value='4' @if($user->k_jikyuu == 4) selected @endif>時給 2000 円以上</option>

                                    <option value='5' @if($user->k_jikyuu == 5) selected @endif>時給 2500 円以上</option>

                                    <option value='6' @if($user->k_jikyuu ==6 ) selected @endif>時給 3000 円以上</option>

                                    <option value='7' @if($user->k_jikyuu == 7) selected @endif>時給 3500 円以上</option>

                                    <option value='8' @if($user->k_jikyuu == 8) selected @endif>時給 4000 円以上</option>

                                    <option value='9' @if($user->k_jikyuu == 9) selected @endif>時給制は希望しない</option>

                                </select>
                            </div>
                            <p class="text-md pt10">※メールマガジンの配信条件ではありません</p>
                        </td>
                    </tr>
                    <tr>
                        <th>月給</th>
                        <td>
                            <div class="select form-md">
                                <select name=k_gekkyuu>

                                    <option value='0' >最低月給の希望は特にない</option>

                                    <option value='1' @if($user->k_gekkyuu == 1) selected @endif>月給 15 万円以上</option>

                                    <option value='2' @if($user->k_gekkyuu == 2) selected @endif>月給 20 万円以上</option>

                                    <option value='3' @if($user->k_gekkyuu == 3) selected @endif>月給 25 万円以上</option>

                                    <option value='4' @if($user->k_gekkyuu == 4) selected @endif>月給 30 万円以上</option>

                                    <option value='5' @if($user->k_gekkyuu == 5) selected @endif>月給 35 万円以上</option>

                                    <option value='6' @if($user->k_gekkyuu == 6) selected @endif>月給 40 万円以上</option>

                                    <option value='7' @if($user->k_gekkyuu == 7) selected @endif>月給 45 万円以上</option>

                                    <option value='8' @if($user->k_gekkyuu == 8) selected @endif>月給 50 万円以上</option>

                                    <option value='9' @if($user->k_gekkyuu == 9) selected @endif>月給制は希望しない</option>

                                </select>
                            </div>
                            <p class="text-md pt10">※メールマガジンの配信条件ではありません</p>
                        </td>
                    </tr>
                    <tr>
                        <th>年俸</th>
                        <td>
                            <div class="select form-md">
                                <select name=k_nenbou>

                                    <option value='0' >最低年俸の希望は特にない</option>

                                    <option value='1' @if($user->k_nenbou ==1 ) selected @endif>年俸 250 万円以上</option>

                                    <option value='2' @if($user->k_nenbou == 2) selected @endif>年俸 300 万円以上</option>

                                    <option value='3' @if($user->k_nenbou == 3) selected @endif>年俸 350 万円以上</option>

                                    <option value='4' @if($user->k_nenbou ==4 ) selected @endif>年俸 400 万円以上</option>

                                    <option value='5' @if($user->k_nenbou ==5 ) selected @endif>年俸 450 万円以上</option>

                                    <option value='6' @if($user->k_nenbou ==6 ) selected @endif>年俸 500 万円以上</option>

                                    <option value='7' @if($user->k_nenbou ==7 ) selected @endif>年俸 600 万円以上</option>

                                    <option value='8' @if($user->k_nenbou == 8) selected @endif>年俸 700 万円以上</option>

                                    <option value='9' @if($user->k_nenbou == 9) selected @endif>年俸 800 万円以上</option>

                                    <option value='10' @if($user->k_nenbou ==10 ) selected @endif>年俸 1000 万円以上</option>

                                    <option value='11' @if($user->k_nenbou == 11) selected @endif>年俸制は希望しない</option>

                                </select>
                            </div>
                            <p class="text-md pt10">※メールマガジンの配信条件ではありません</p>
                        </td>
                    </tr>

                </table>
            </section>


            <section>
                <h2 class="h2 text-em mb10">メールマガジン配信設定</h2>
                <table class="input-cell mb40">
                    <tr>
                        <th>新着求人情報<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="inner-td-mailmagazine clearfix">
                                <dt class="pull-left text-bold">毎週月・木</dt>
                                <dd class="subscript pull-left">ご登録されている「職種・勤務地・雇用形態」の希望条件に合った、新着求人情報を毎週月・木曜にお届けします。</dd>
                                <dd class="check pull-right">
                                    <ul>

                                        <li class="mb5">
                                            <label for="mailservice_new_yes">
                                                <input type="radio" id="mailservice_new_yes" name="mailservice_new" value="1" @if($user->mailservice_new == 1 ) checked @endif>受け取る
                                            </label>
                                        </li>
                                        <li>
                                            <label for="mailservice_new_no">
                                                <input type="radio" id="mailservice_new_no" name="mailservice_new" value="0" @if($user->mailservice_new == 0 ) checked @endif>受け取らない
                                            </label>
                                        </li>

                                    </ul>
                                </dd>
                            </dl>
                        </td>
                    </tr>

                    <tr>
                        <th>注目求人ダイジェスト<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="inner-td-mailmagazine clearfix">
                                <dt class="pull-left text-bold">毎週土曜</dt>
                                <dd class="subscript pull-left">厳選した注目の求人情報や仕事探しや転職活動に役立つ情報を毎週土曜にお届けします。</dd>
                                <dd class="check pull-right">
                                    <ul>
                                        <li class="mb5"><label for="mailservice_pickup_yes">
                                                <input type="radio" id="mailservice_pickup_yes" name="mailservice_pickup" value="1" @if($user->mailservice_pickup == 1 ) checked @endif>受け取る
                                            </label></li>
                                        <li><label for="mailservice_pickup_no">
                                                <input type="radio" id="mailservice_pickup_no" name="mailservice_pickup" value="0" @if($user->mailservice_pickup == 0 ) checked @endif>受け取らない
                                            </label></li>
                                    </ul>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <th><span class="pull-left">注目求人ダイジェスト<br>臨時増刊号</span><span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="inner-td-mailmagazine clearfix">
                                <dt class="pull-left text-bold">不定期</dt>
                                <dd class="subscript pull-left">求人市場のトレンド情報や旬な企業の求人をイチ早くお届けするメルマガです。</dd>
                                <dd class="check pull-right">
                                    <ul>
                                        <li class="mb5"><label for="mailservice_digest_yes">
                                                <input type="radio" id="mailservice_digest_yes" name="mailservice_digest" value="1" @if($user->mailservice_digest == 1 ) checked @endif>受け取る
                                            </label></li>
                                        <li><label for="mailservice_digest_no">
                                                <input type="radio" id="mailservice_digest_no" name="mailservice_digest" value="0" @if($user->mailservice_digest == 0 ) checked @endif>受け取らない
                                            </label></li>
                                    </ul>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <th><span class="pull-left">職種カテゴリDM<br>[首都圏版]</span><span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="inner-td-mailmagazine clearfix">
                                <dt class="pull-left text-bold">不定期</dt>
                                <dd class="subscript pull-left">ご登録されている「職種」からあなたにマッチする限定1社の詳細な求人情報をお届けします。</dd>
                                <dd class="check pull-right">
                                    <ul>
                                        <li class="mb5"><label for="mailservice_dm_yes">
                                                <input type="radio" id="mailservice_dm_yes" name="mailservice_dm" value="1" @if($user->mailservice_dm == 1 ) checked @endif>受け取る
                                            </label></li>
                                        <li><label for="mailservice_dm_no">
                                                <input type="radio" id="mailservice_dm_no" name="mailservice_dm" value="0" @if($user->mailservice_dm == 0 ) checked @endif>受け取らない
                                            </label></li>
                                    </ul>
                                </dd>
                            </dl>
                        </td>
                    </tr>

                </table>

                <table class="input-cell mb50">
                    <tr>
                        <th>メールの配信形式<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <ul>
                                <li class="mb5"><label for="html_mail_yes">
                                        <input type="radio" id="html_mail_yes" name="html_mail" value="1" @if($user->html_mail ==1 ) checked @endif>HTML形式
                                    </label></li>
                                <li><label for="html_mail_no">
                                        <input type="radio" id="html_mail_no" name="html_mail" value="0"  @if($user->html_mail ==0 ) checked @endif>テキスト形式
                                    </label></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </section>


            <div class="relative text-center">
                <a href="edit" class="btn btn-md btn-default btn-normal fixed-left">登録情報トップに戻る</a>
                <input type="submit" class="btn btn-xxlg btn-primary btn-wide block-center" value="希望条件を変更する">
            </div>
        </form>

    </div><!--container-->
</main>

@stop
