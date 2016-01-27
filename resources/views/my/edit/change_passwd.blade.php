@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')

    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://www.find-job.net/my/edit/edit.cgi"><span itemprop="title">登録情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">パスワード変更</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">修改密码</h1>
        
        <p class="mb40">以下のフォームにパスワードに設定する文字を入力し、『パスワードを変更する』ボタンを押してください。</p>

        <form class="form" name=""  action="/my/edit/do_change_passwd" method="post">
            {!! csrf_field() !!}
            {!! method_field('put') !!}

            <table class="input-cell mb50">
                <tbody><tr>
                    <th>现在的密码</th>
                    <td>
                        <input hidden name="email"  value="{{$user->email}}">
                        <input type="password" name="old_passwd" placeholder="" class="">

                        <ul class="mt15">
                            <li>※半角英数字 (0〜9、A〜Z)、6〜20文字で入力してください。</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>新密码</th>
                    <td>
                        <input type="password" name="passwd" placeholder="" class="">
                        
                        <ul class="mt15">
                            <li>※半角英数字 (0〜9、A〜Z)、6〜20文字で入力してください。</li>
                            <li>※メールアドレスの＠以前と同じパスワードは設定できません。</li>
                            <li>※同じ文字のみのパスワードは設定できません。</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>新密码（确认）</th>
                    <td>
                        <input type="password" name="passwd2" placeholder="" class="">
                        
                    </td>
                </tr>
            </tbody></table>
            <div class="relative text-center">
                <a href="/my/edit/edit" class="btn btn-md btn-default btn-normal fixed-left">登録情報トップに戻る</a>
                <input type="submit" class="btn btn-xxlg btn-primary btn-wide block-center" value="パスワードを変更する">
            </div>
        </form>

    </div><!--container-->
</main>
@stop