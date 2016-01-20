@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/wm.css">
@stop



@section('topic')
<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">応募管理</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop
@section('container')

<main>
    <div class="container">

        <section>
            <h1>收信箱</h1>

            <div class="box-xlg mb10">
                <p>件名をクリックするとメールの内容が表示され、返信することができます。</p>
                <ul class="text-md text-alert">
                    <li>※メールは、その企業と最後の送受信から2ヶ月後に自動に削除されますのでご注意下さい。</li>
                    <li>※スカウトメールの場合に限り、メール内容を閲覧すると、送信元の企業に開封されたことが伝わります。</li>
                </ul>
            </div>

            <div class="tab-wrap mb20">
                <ul class="tab clearfix">
                    <li class="current"><a href="/my/wm/inbox">收信箱</a></li>
                    <li><a href="/my/wm/outbox">送信箱</a></li>
                    <li><a href="/my/wm/memo">履历一览</a></li>
                </ul>
                <p class="link text-md"><a href="http://www.find-job.net/help/usage_wm.html" target="_blank" class="icon icon-arrow02-xs">応募管理の使い方</a></p>
            </div>

            <p class="mt40 ml40 mb50 pb30 pl20 border-b-gray">我还没有邮件</p>

        </section>

        

    </div><!--container-->
</main>
@stop
