@extends('layouts._home')
@section('css')
@stop

@section('topic')

<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href=""><span itemprop="title">会員登録情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">会員登録情報</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">Web简历书登记完了</h1>

        <p class="mb50">web简历书的登记结束了。。</p>

        <div class="text-center">
            <a href="/" class="btn btn-xxlg btn-primary btn-wide">回首页</a>
        </div>

    </div><!--container-->
</main>
@stop
