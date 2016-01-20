@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/scout.css')}}">
@stop

@section('topic')
<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="https://www.find-job.net/" itemprop="url"><span itemprop="title">庭燎・求贤</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">スカウト</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')

<main>
    <div class="container mb40">
        <h1>スカウト</h1>
    </div>

    <div class="container container-scout-logout">

        <section>
            <h2 class="title-1 mb30">スカウトを利用して、転職活動を効率的に進めましょう</h2>
            <p class="text-lg text-center mb20">あなたのスキル・経験を匿名で公開し、企業からアプローチを受けることが可能になるサービスです。<br>
            あなたのWeb履歴書に興味を持った企業から、直接「スカウトメール」が届きます。<br>
                ぜひ、スカウトを利用して、転職成功への可能性を広げてください。</p>

            <div class="box box-md bg-yellow clearfix mb40">
               <img src="/images/img_logout.png" alt="" class="pull-left ml30 mr50">
               <ul class="img-list pull-left">
                   <li class="list-scout-attention">履歴書の注目度がわかる</li>
                   <li class="list-scout-approach">登録するだけで企業からアプローチ</li>
                   <li class="list-scout-anonymous">匿名だから安心</li>
                   <li class="list-scout-secret">非公開求人あり</li>
               </ul>
            </div>
        </section>

        <div class="text-center mb50"><a href="https://www.find-job.net/my/regist/regist.cgi" class="btn btn-xlg btn-primary">会员登陆后使用优厚条件检索(免费)</a></div>

    </div><!--container-scout-logout-->
</main>

@stop
