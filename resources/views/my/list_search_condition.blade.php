@extends('layouts._home')
@section('css')
<link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')


<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span
                itemprop="title">検索条件</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">検索条件</h1>

        <p class="mb40">検索条件を保存すると、いつでもこの条件で検索できます。保存されるのは検索条件のみです。現在の検索結果は保存され
            ませんので、次回も同じ求人がヒットするとは限りません。気になる求人は気になるリストに追加して保存してください。 最大3件まで保存できます。</p>

        <form class="form">


            <div class="box mb40">
                <div class="box-sm bg-default clearfix">
                    <p class="pull-left mt5 ml5">検索条件(2016/01/17)</p>
                    <a href="/my/delete_search_condition?condition_id=21979"
                       class="btn btn-md btn-default pull-right">删除</a>
                </div>
                <div class="box-md clearfix">
                    <div class="pull-left">Webエンジニア・Webプログラマ <br>東京23区 <br>月給 25万円以上<br>新着：　指定あり<br>実務経験不問：　指定あり<br>
                    </div>
                    <a href="http://www.find-job.net/fj/search.cgi?ky_from=250000&amp;shokushu=203&amp;mikeiken=1&amp;new=1&amp;ky_kind=month&amp;kinmuchi=1&amp;from=108&amp;condition_id=21979"
                       class="btn btn-md btn-primary pull-right">この条件で求人を検索</a>
                </div>
            </div>

        </form>


        <p class="mb40">検索条件を保存するには、求人検索フォームから希望する条件で求人検索をしてください。<br>
            次に、検索結果にある「検索条件を保存」をクリックします。<br>
            最後に、保存する条件の確認と、条件名をつけて保存するをクリックします。<br>
            検索条件の保存は最大3件までです。すでに3件の検索条件が保存されている場合は、 どれか条件を削除してください。</p>


        <a href="/my/edit/edit" class="btn btn-md btn-default btn-normal">登録情報トップに戻る</a>

    </div><!--container-->
</main>
@stop