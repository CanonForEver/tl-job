@extends('layouts._home')
@section('css')
<link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')


<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href=""><span itemprop="title">登録情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">スカウトメール設定</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">スカウトメール設定</h1>

        <section>
            <div class="box box-md bg-yellow mb40">
                <h2 class="h5 text-em mb15">スカウトメールの受信設定をすると</h2>
                <p>あなたの登録情報や自己PRを見た企業から、スカウトメールが届きます！<br>
                スキルや資格に変更があったら即登録しましょう！ より求人企業の目に留まりやすくなります。</p>
            </div>

            <ul class="mb40">
                <li>※登録しているあなたの情報を変更したい場合は、「登録条件変更」からいつでも変更することが可能です。</li>
                <li>※スカウトを受ける場合は、求人企業に個人を特定できない範囲で登録情報を公開します。</li>
                <li>※スカウトメールの内容を閲覧すると、送信元の企業に、開封されたことが伝わります。</li>
            </ul>
        </section>

        <section>
            <h2 class="h2 text-em mb10">設定</h2>
            <form action="/my/edit/update_scout" method="post"  class="form">
                {!! csrf_field() !!}
                {!! method_field('put') !!}

            <input type="hidden" name="submitted" value="block_scout">
            <input type="hidden" name="from" value="">
            <input type="hidden" name="userid" value="557782">
            <input type="hidden" name="unique_key" value="4b04c19da9408dfe011ec8845631b790">
            <div class="box box-sm mb40">
                <p class="mb10">現在、スカウトメールを受け取る設定になっています。</p>
                <ul class="box-sm bg-yellow clearfix">
                    <li class="pull-left mr40"><label><input name="enable" value="1" type="radio" class="mr5" @if($user->scout == 1) checked @endif>受け取る</label></li>
                    <li class="pull-left"><label><input name="enable" value="0" type="radio" class="mr5" @if($user->scout == 0) checked @endif>受け取らない</label></li>
                </ul>
                
            </div>
            <table class="input-cell">
                <tbody><tr>
                    <th>指定企業ブロック</th>
                    <td class="clearfix">
                        
                        <p class="pull-left">履歴書を公開したくない企業を検索・設定できます。</p>
                        
                        <input type="submit" class="btn btn-md btn-secondary pull-right" value="指定企業ブロックへ">
                    </td>
                </tr>
            </tbody></table>
            <div class="relative text-center mt40">
                <a href="./スカウトメール設定 [登録情報] _ 求人情報 Find Job !_files/スカウトメール設定 [登録情報] _ 求人情報 Find Job !.html" class="btn btn-md btn-default btn-normal fixed-left">登録情報トップに戻る</a>
                <input type="submit" name="scout_edit" class="btn btn-xxlg btn-primary btn-wide block-center" value="スカウトメールを設定する">
            </div>
            </form>
        </section>

    </div><!--container-->
</main>
@stop
