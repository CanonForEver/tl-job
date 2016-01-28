@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')
<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">会员注册（免费）</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">会员注册（免费）</h1>

        <div class="box box-md bg-yellow clearfix mb40">
            <h2 class="text-xxlg mb15"><span class="text-em">会員限定機能</span>を利用して、有利な転職活動を！</h2>
            <dl class="box-regist-info box-sm bg-white pull-left">
                <dt class="text-xxlg text-em text-bold mb10">非公開求人情報</dt>
                <dd>会員の方にしか、ご紹介することができない非公開求人が多数あります。</dd>
            </dl>
            <dl class="box-regist-scout box-sm bg-white pull-right">
                <dt class="text-xxlg text-em text-bold mb10">スカウトメール</dt>
                <dd>匿名の履歴書を登録・公開すると、あなたに興味を持った企業からスカウトメールが届きます。</dd>
            </dl>
        </div>

        @include('layouts._message')

        <form name="register" method="post" class="form">
            {!! csrf_field() !!}
            <input type=hidden name=submitted value="">
            <input type=hidden name=mailservice value="0">
            <input type="hidden" name="_header_footer_type" value="">
            <input type="hidden" name="desc_type" value="">
            <input type="hidden" name="ht" value="">

            <div class="box-narrow">
                <p class="mb10">フォームを入力して、利用規約等に同意の上、『会员注册する』ボタンを押してください。</p>
                <table class="input-cell mb50">
                    <colgroup>
                        <col style="width:35%;">
                        <col style="width:65%;">
                    </colgroup>
                    <tr>

                        <th>电子邮件<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <input type="text" id="mail" name="email" placeholder="" value="">
                            <div class="mt10" data-role="message-of-check-email" style="display:none;">
                                <div class="text-bold text-alert">您输入的邮件地址已经存在</div>
                                <ul>
                                    <li><a href="/login" class="icon icon-arrow02-xs">已有账号直接登录</a></li>
                                    <li><a href="/help/reminder" target="_blank" class="icon icon-arrow02-xs">我忘记了密码</a></li>
                                </ul>
                            </div>
                            <p class="text-alert text-bold mt5">{{$errors->first('email')}}</p>

                        </td>
                    </tr>
                    <tr>
                        <th class="valign-middle">密码<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <input id="passwd" type="password" name="passwd" value="" placeholder="">
                            <p class="text-alert text-bold mt5">{{$errors->first('passwd')}}</p>
                        </td>
                    </tr>
                    <tr>
                        <th class="valign-middle">密码（确认）<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <input type="password" id="password2" name="passwd2" value="" placeholder="">

                        </td>
                    </tr>
                </table>
            </div>
            <div class="text-center mb50">
                <p class="mb20"><a href="/help/riyokiyaku.html" target="_blank" rel="nofollow">利用規約</a>及び<a href="http://www.mixi-recruitment.co.jp/privacy.html#p02" target="_blank" rel="nofollow">個人情報の取り扱いについて</a>に同意して</p>
                <input type="submit" class="fj-agree-button btn btn-xxlg btn-primary btn-wide block-center" value="会员注册">
            </div>


        </form>

        <div class="bt_facebook border-t-gray text-center ml80 mr80 pt30">
            <a href="/login_oauth.pl?p=f&amp;a=l&amp;u=1&amp;next_url=%2F" class="mb40 btn btn-xxlg btn-facebook icon-facebook-lg btn-wide">facebookで会员注册</a>
            <p>※Facebookに利用状況が投稿されることはありません</p>
        </div>
    </div><!--container-->
</main>

@stop
@section('js')

<script src="/assets/javascripts/my/fj.js"></script>
<script src="/assets/javascripts/my/jquery-fjplugins.js"></script>
<script src="/assets/javascripts/my/my.js"></script>
<script>
    $(function(){
        fj.c.my.regist.initRegistForm({
            agreeButton: ".fj-agree-button"
        });
    });
</script>
@stop
