@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/scout.css">
@stop

@section('topic')


<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">スカウト</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop
@section('container')
<main>
    <div class="container">

        <h1 class="mb10">选拔</h1>

        <section>
            <div class="mt20 clearfix">
                <div class="title-sub mb30">
                    <h2 class="h2 text-em border-b-gray pb5">上个月的选拔报告</h2>
                    <p class="sub">使用状态：&nbsp;<span class="text-alert text-bold icon icon-check-gr-sm">使用中</span></p>
                </div>
                <div class="col-2 pull-left">
                    <div class="box-sm bg-default text-lg mb30">你的选拔接收数: <span class="text-bold text-xlg text-alert">0</span>通</div>
                    <h4 class="text-em text-lg border-b-gray pb5">全体的选拔接收数</h4>
                    <dl class="list-receive text-md clearfix">
                        <dt class="pull-left">10通以上</dt>
                            <dd class="pull-left text-right">128人</dd>
                        <dt class="pull-left">5通〜10通</dt>
                            <dd class="pull-left text-right">713人</dd>
                        <dt class="pull-left">4通</dt>
                            <dd class="pull-left text-right">60人</dd>
                        <dt class="pull-left">3通</dt>
                            <dd class="pull-left text-right">146人</dd>
                        <dt class="pull-left">2通</dt>
                            <dd class="pull-left text-right">146人</dd>
                        <dt class="border-none pull-left">1通</dt>
                            <dd class="border-none pull-left text-right">1029人</dd>
                    </dl>
                </div>
                <div class="col-2 pull-right mb20">
                    <div class="box-sm bg-default text-lg mb30">你的Web简历阅览数: <span class="text-bold text-xlg text-alert">0</span>通</div>
                    <h4 class="text-em text-lg border-b-gray pb5">全体的简历阅览数</h4>
                    <dl class="list-receive text-md clearfix">
                        <dt class="pull-left">31回以上</dt>
                            <dd class="pull-left text-right">84人</dd>
                        <dt class="pull-left">21〜30回</dt>
                            <dd class="pull-left text-right">159人</dd>
                        <dt class="pull-left">11〜20回</dt>
                            <dd class="pull-left text-right">675人</dd>
                        <dt class="pull-left">6〜10回</dt>
                            <dd class="pull-left text-right">1052人</dd>
                        <dt class="pull-left">3〜5回</dt>
                            <dd class="pull-left text-right">1467人</dd>
                        <dt class="border-none pull-left">1〜２回</dt>
                            <dd class="border-none pull-left text-right">5271人</dd>
                    </dl>
                </div>
                <a href="http://www.find-job.net/my/edit/edit.cgi?submitted=edit_form&amp;from_scout=1" class="clear btn btn-md btn-primary pull-right">Web简历更新</a>
            </div>
        </section>

        <section>
            <div class="box-md clearfix mb20">
                <h2 class="h2 text-em border-b-gray pb5 mb30">スカウトを受けるためのポイント</h2>
                <div class="col-2 pull-left">
                    <h3 class="text-xlg mb10 ml15">Web履歴書を更新しましょう</h3>
                    <p class="bg-point-1 ml15">企業は、真剣に転職活動をしている人をスカウトしたいと考えています。<br>
            Web履歴書をこまめに更新し、積極的に転職活動していることをアピールしましょう。<br>
                この一手間で、スカウトメールを受け取る確率が格段に向上します。</p>
                </div>
                <div class="col-2 pull-right">
                    <h3 class="text-xlg mb10 ml15">「気になるリスト」を利用しましょう</h3>
                    <p class="bg-point-2 ml15">求人を検討中フォルダに追加すると、追加したことが企業に通知されます。<br>
                        あなたが求人に興味を持っていることを、企業に対してアピールですることがきます。</p>
                </div>
            </div>
        </section>

        <section>
            <div class="box-md mb20">
                <div class="title-sub mb30">
                    <h2 class="h2 text-em border-b-gray pb5">スカウトに関するFAQ</h2>
                    <p class="sub"><a href="http://www.find-job.net/support/qa/cat05/" class="icon icon-arrow02-xs">もっと見る</a></p>
                </div>
                <ul class="list-faq ml15">
                    <li class="mb15"><a href="http://www.find-job.net/support/qa/cat05/10.html">企業がスカウトする際に注目するポイントを教えてください</a></li>
                    <li class="mb15"><a href="http://www.find-job.net/support/qa/cat05/11.html">経験のない職種でもスカウトされることはあるんでしょうか？</a></li>
                    <li class="mb15"><a href="http://www.find-job.net/support/qa/cat05/5.html">スカウトメールには必ず返信しなくてはいけない？</a></li>
                    <li class="mb15"><a href="http://www.find-job.net/support/qa/cat05/3.html">スカウトメールが届いたので応募したのに不採用…。これってアリ？</a></li>
                </ul>
            </div>
        </section>

        <section>
            <div class="box-md clearfix">
                <h2 class="h2 text-em border-b-gray pb5 mb20">スカウトに効果的なWeb履歴書</h2>
                <h3 class="text-xlg mb20 ml15">職種ごとの傾向と対策、書き方のポイントを一挙公開します！</h3>
                <dl class="list-category pl15 pr15 pull-left mb20">
                    <dt class="text-lg border-b-gray mb10 pb5 pl5">クリエイティブ系</dt>
                    <dd>
                        <ul>
                            <li><a href="http://www.find-job.net/support/resume/producer.html" class="icon icon-arrow02-xs">Webプロデューサー編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/director.html" class="icon icon-arrow02-xs">Webディレクター編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/designer.html" class="icon icon-arrow02-xs">Webデザイナー編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/webconduct.html" class="icon icon-arrow02-xs">Web運営編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/graphic.html" class="icon icon-arrow02-xs">グラフィックデザイナー編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/editor.html" class="icon icon-arrow02-xs">編集者編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/writer.html" class="icon icon-arrow02-xs">ライター編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/dtp.html" class="icon icon-arrow02-xs">DTPオペレーター編</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="list-category pl15 pr15 pull-left mb20">
                    <dt class="text-lg border-b-gray mb10 pb5 pl5">エンジニア系</dt>
                    <dd>
                        <ul>
                            <li><a href="http://www.find-job.net/support/resume/webse.html" class="icon icon-arrow02-xs">Webオープン系SE編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/programmer.html" class="icon icon-arrow02-xs">プログラマ編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/network_engineer.html" class="icon icon-arrow02-xs">ネットワークエンジニア編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/control_se.html" class="icon icon-arrow02-xs">制御・組込系SE編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/general_se.html" class="icon icon-arrow02-xs">汎用系SE編</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="list-category pl15 pr15 pull-left mb20">
                    <dt class="text-lg border-b-gray mb10 pb5 pl5">事務系</dt>
                    <dd>
                        <ul>
                            <li><a href="http://www.find-job.net/support/resume/ippan_jimu.html" class="icon icon-arrow02-xs">一般事務編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/usersupport.html" class="icon icon-arrow02-xs">ユーザーサポート編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/it_instructor.html" class="icon icon-arrow02-xs">インストラクター編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/general.html" class="icon icon-arrow02-xs">総務・人事編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/management.html" class="icon icon-arrow02-xs">経理・財務編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/secretary.html" class="icon icon-arrow02-xs">秘書編</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="list-category pl15 pr15 pull-left mb20">
                    <dt class="text-lg border-b-gray mb10 pb5 pl5">営業／企画系・その他</dt>
                    <dd>
                        <ul>
                            <li><a href="http://www.find-job.net/support/resume/eigyou.html" class="icon icon-arrow02-xs">営業編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/mrk.html" class="icon icon-arrow02-xs">企画・マーケティング編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/eigyou_jimu.html" class="icon icon-arrow02-xs">営業事務編</a></li>
                            <li><a href="http://www.find-job.net/support/resume/cad_operator.html" class="icon icon-arrow02-xs">CADオペレーター編</a></li>
                        </ul>
                    </dd>
                </dl>
                <a href="http://www.find-job.net/my/edit/edit.cgi?submitted=edit_form&amp;from_scout=1" class="clear btn btn-md btn-primary pull-right">Web简历更新</a>
            </div>
        </section>

    </div><!--container-->
</main>
@stop
