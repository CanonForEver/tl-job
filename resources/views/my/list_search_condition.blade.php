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

            @foreach($user_searches as $search)
            <div class="box mb40">
                <div class="box-sm bg-default clearfix">
                    <p class="pull-left mt5 ml5">{{$search->title }}</p>
                    {{--<a href="/my/delete_search_condition?condition_id=21979"--}}
                       {{--class="btn btn-md btn-default pull-right">删除</a>--}}
                    <a class="btn btn-md btn-default pull-right" href="/my/{{$search['id']}}/delete_search_condition" data-method="delete" data-token="{{csrf_token()}}" data-confirm="确定删除吗？">
                         删除
                    </a>
                </div>
                <div class="box-md clearfix">
                    <div class="pull-left">
                        @if($search->user_shokushus)
                        @foreach($shokushus as $shokushu)
                            @if(in_array("$shokushu->id", $search->user_shokushus)) {{$shokushu->name}}/@endif
                        @endforeach
                            <br>
                        @endif

                        @if($search->user_kinmuchis)
                        @foreach($kinmuchis as $kinmuchi)
                            @if(in_array("$kinmuchi->id", $search->user_kinmuchis)) {{$kinmuchi->name}}/@endif
                        @endforeach
                            <br>
                        @endif

                        @if($search->user_keitais)
                        @foreach($keitais as $keitai)
                             @if(in_array("$keitai->id", $search->user_keitais)) {{$keitai->name}}/@endif
                        @endforeach
                            <br>
                        @endif

                        @if($search->user_categories)
                        @foreach($categories as $category)
                            @if(in_array("$category->id", $search->user_categories)) {{$category->name}}/@endif
                        @endforeach
                            <br>
                        @endif

                        @if($search->ky_kind)
                            @if($search->ky_kind == 'hour') 时给
                            @elseif($search->ky_kind == 'day') 日给
                            @elseif($search->ky_kind == 'month') 月给
                            @elseif($search->ky_kind == 'year') 年给
                            @endif
                            {{$search->ky_from}}以上
                            <br>
                        @endif
                        @if($search->keyword)
                            关键词：{{$search->keyword}}
                            <br>
                        @endif
                        @if($search->new == 1) 新着：　指定あり<br> @endif
                        @if($search->mikeiken == 1) 実務経験不問：　指定あり @endif
                        {{--Webエンジニア・Webプログラマ <br>東京23区 <br>月給 25万円以上<br>新着：　指定あり<br>実務経験不問：　指定あり<br>--}}
                    </div>
                    <a href="http://www.find-job.net/fj/search.cgi?ky_from=250000&amp;shokushu=203&amp;mikeiken=1&amp;new=1&amp;ky_kind=month&amp;kinmuchi=1&amp;from=108&amp;condition_id=21979"
                       class="btn btn-md btn-primary pull-right">この条件で求人を検索</a>
                </div>
            </div>
            @endforeach

        </form>


        <p class="mb40">検索条件を保存するには、求人検索フォームから希望する条件で求人検索をしてください。<br>
            次に、検索結果にある「検索条件を保存」をクリックします。<br>
            最後に、保存する条件の確認と、条件名をつけて保存するをクリックします。<br>
            検索条件の保存は最大3件までです。すでに3件の検索条件が保存されている場合は、 どれか条件を削除してください。</p>


        <a href="/my/edit/edit" class="btn btn-md btn-default btn-normal">登録情報トップに戻る</a>

    </div><!--container-->
</main>
@stop