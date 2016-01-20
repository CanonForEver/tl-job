<!DOCTYPE html>
<!-- saved from url=(0024)/ -->
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/common/base.css">
    @yield('css')
    <title>庭燎・求贤 | Web人的换工作网站Tl Job!</title>
    <meta name="Slurp" content="NOYDIR">
    <meta name="robots" content="noodp">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
          content="Webエンジニア・Webデザイナー・Webディレクター・Webマーケティングの庭燎・求贤が満載。Web業界の優良企業への転職相談や非公開求人の紹介など転職支援サービスも提供中。庭燎・求贤なら、ミクシィの『Webな人の転職サイトFind Job !』">
    <meta name="keywords" content="転職,転職サイト,転職情報,求人,求人情報,求人サイト,findjob,ファインドジョブ,株式会社ミクシィ">
    <link rel="stylesheet" href="/vendor/assets/jquery-ui/themes/base/jquery-ui.min.css">
    <link rel='stylesheet' href='/vendor/assets/NProgress/nprogress.css'/>
</head>
<body>

<header>
    <div id="header">
        <div class="container-header clearfix">


            <h1 class="logo"><a href="/"><img
                            src="/images/logo_findjob.png" alt="find job ! webな人の転職サイト"></a></h1>


            <div class="tagline"><img src="/images/tagline.png" alt="Web人的专职网站"></div>
            <ul class="header-menu text-sm">


                <li><a href="/com" class="icon icon-company-xs">招聘负责人登录</a></li>
                <li><a href="/my/regist/regist" class="icon icon-register-xs">会员注册</a></li>
                <li><a href="/login" class="icon icon-login-xs">登录</a>
                </li>


            </ul>
        </div>
    </div>
</header>

<nav>
    <div id="menu">
        <ul class="container-menu">
            <li><a href="/tj/search">职位搜索</a></li>
            <li><a href="/tj/new">最新职位</a></li>


            <li><a href="/my/scout/index">招聘公司</a></li>
            <li>
                <a href="/my/bookmark">我关注的职位
                    <span class="badge">4</span>
                </a>
            </li>
            <li><a href="/my/wm/inbox">应聘管理</a></li>
        </ul>
    </div><!--menu-->
</nav>


@yield('topic')

@yield('container')


@yield('footer')


<div id="footer-list-page">
    <div class="container-footer-list-page text-xs clearfix">
        <ul class="first">
            <li><a href="./庭燎・求贤 _ Webな人の転職サイトFind Job!_files/庭燎・求贤 _ Webな人の転職サイトFind Job!.html">Find Job !トップ</a>
            </li>
            <li class="parent">シンプル検索</li>
            <li class="child"><a href="/list/shokushu/">職種</a> / <a
                        href="/list/area/">エリア</a> / <a
                        href="/list/station/">路線</a>
                / <a href="/list/company/">企業名</a> / <a
                        href="/list/focus/">こだわり条件</a> / <a
                        href="/list/skill/">スキル</a><br><a href="/arbeit/">アルバイト</a>
                / <a href="/haken/">派遣</a> / <a
                        href="/soho/">SOHO・在宅ワーク</a> / <a
                        href="/shushoku/">就職</a><br><a href="/income/">平均年収・給料・給与</a>
                / <a href="/word/">キーワード</a></li>
        </ul>
        <ul>
            <li><a href="/startup/">Find Job !スタートアップ</a></li>
            <li><a href="/support/">転職ガイド</a></li>
            <li><a href="/help/sitemap.html">サイトマップ</a></li>
            <li><a href="/help/" target="_blank">ヘルプ</a></li>
        </ul>
        <ul>
            <li><a href="/com/" onclick="s_objectID=&#39;/text/com_top_2&#39;">求人広告掲載
                    (採用ご担当者様)</a></li>
            <li><a href="http://www.mixi-recruitment.co.jp/" target="_blank" rel="nofollow">会社概要</a></li>
            <li><a href="/help/riyokiyaku.html" rel="nofollow">利用規約</a></li>
            <li><a href="/agent/rules.html" rel="nofollow">転職支援サービス利用規約</a></li>
            <li><a href="http://www.mixi-recruitment.co.jp/privacy.html" target="_blank" rel="nofollow">プライバシーポリシー</a>
            </li>
        </ul>
    </div>
    <div class="text-center text-xs mt20"><a href="https://mixi.jp/" target="_blank">mixi</a> | <a
                href="http://www.monster-strike.com/" target="_blank">モンスターストライク</a> | <a href="http://nohana.jp/"
                                                                                          target="_blank">ノハナ</a> | <a
                href="https://mitene.us/" target="_blank">子供の写真・動画を共有</a> | <a href="http://ecle.jp/" target="_blank">街コン「えくる」</a>
        | <a href="https://museco.jp/" target="_blank">ファッション通販</a> | <a href="http://party.youbride.jp/"
                                                                         target="_blank">婚活パーティー</a> | <a
                href="http://ticketcamp.net/" target="_blank">チケットフリマ</a></div>

</div><!--footer-list-page-->

<footer>
    <div id="footer">
        <div class="container-footer">Copyright (C) mixi recruitment, Inc. all rights reserved.</div>
    </div>
</footer>

<script src="/vendor/assets/jquery/jquery.js"></script>
<script src="/vendor/assets/jquery/js.cookie-2.0.3.min.js"></script>
<script src="/vendor/assets/jquery/jquery.plainmodal.min.js"></script>
<script src="/assets/javascripts/common/fj.js"></script>

<script src="/vendor/assets/jquery-ui/jquery-ui.min.js"></script>
<script src="/vendor/assets/NProgress/nprogress.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    NProgress.start();
    NProgress.done();
</script>

@yield('js')
