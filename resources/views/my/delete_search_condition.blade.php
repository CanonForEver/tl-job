@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')


    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href=""><span itemprop="title">会員登録情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">検索条件の一覧</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">検索条件の一覧</h1>

        <p class="mb40">以下の検索条件を削除します。よろしければ、「削除する」をクリックしてください。</p>
        <dl class="box box-default box-md mb50">
            <dt class="icon icon-list-md text-lg text-bold">検索条件(2016/01/17)</dt>
            <dd class="ml20">Webエンジニア・Webプログラマ <br>東京23区 <br>月給 25万円以上<br>新着：　指定あり<br>実務経験不問：　指定あり<br></dd>

        </dl>

        <form class="form">
            <div class="text-center mb60">
                <a href="http://www.find-job.net/my/delete_search_condition.pl?delete=1&amp;condition_id=21979&amp;delete_unique_key=ea8354fd69a5932624aea5c8c8141f41" class="btn btn-xxlg btn-primary btn-wide block-center">この検索条件を削除する</a>
            </div>
        </form>

    </div><!--container-->
</main>
@stop

