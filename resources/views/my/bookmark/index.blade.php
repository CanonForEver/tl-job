@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/bookmark.css">
@stop

@section('topic')
    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
        <ul>
            <li><a href="https://www.find-job.net/" itemprop="url"><span itemprop="title">庭燎・求贤</span></a></li>
            <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">关注名单</span></strong></li>
        </ul>
    </div><!--topic-path-->

@stop

@section('container')


<main>
    <div class="container container-bookmark">

        <h1 class="mb40">关注名单</h1>
        <h2 class="title-logout-1 mb50 text-center">「気になるリスト」を有効活用して転職活動を成功に導きましょう</h2>

        <div class="box-logout">
            <div class="box-md bg-yellow mb10">
                <h2 class="title-logout-2 mb20">気になるリストの４つのメリット</h2>
                <ul class="clearfix">
                    <li class="pull-left mb20"><img src="/images/logout_img01.png" alt="1 企業に興味があることが伝わるためオファーが届くことがあります"></li>
                    <li class="pull-right mb20"><img src="/images/logout_img02.png" alt="2 いつでも、気になる求人がチェックできる！"></li>
                    <li class="pull-left"><img src="/images/logout_img03.png" alt="3 求人の掲載終了前に、お知らせメールが届く!"></li>
                    <li class="pull-right"><img src="/images/logout_img04.png" alt="4 一括応募機能で、まとめて応募ができる！"></li>
                </ul>
            </div>
            <p class="text-xs text-right mb50">※気になるリストのご利用は、会員登録が必要です</p>
            <ul class="button clearfix">
                <li class="pull-left mr20"><a href="https://www.find-job.net/my/regist/regist.cgi" class="btn btn-xxlg btn-primary block">会员注册（免费）</a></li>
                <li class="pull-left"><a href="https://www.find-job.net/login_oauth.pl?p=f&amp;a=l&amp;u=1&amp;next_url=%2F" class="btn btn-xxlg btn-facebook icon-facebook-lg block">facebookで会員登録</a></li>
            </ul>
        </div>

    </div><!--container-->
</main>
@stop