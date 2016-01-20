@extends('layouts._home')
@section('css')
@stop

@section('topic')
    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
        <ul>
            <li><a href="https://www.find-job.net/" itemprop="url"><span itemprop="title">庭燎・求贤</span></a></li>
            <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">ログインフォーム</span></strong></li>
        </ul>
    </div><!--topic-path-->
@stop

@section('container')

<main>
    <div class="container">
        <h1 class="mb30">登录</h1>
    </div>
    <div class="container container-narrow">

        
        <form action="/login" name="login_form" method="post" class="form">
            <div class="box-narrow">
                <table class="input-cell mb10">
                    <colgroup>
                        <col style="width:35%;">
                        <col style="width:65%;">
                    </colgroup>
                    <tbody><tr>
                        <th class="valign-middle">邮件地址</th>
                        <td>
                            <input type="text" id="form_user_mail" name="user_mail" value="" placeholder="邮件地址">
                        </td>
                    </tr>
                    <tr>
                        <th class="valign-middle">密码</th>
                        <td>
                            <input type="password" id="form_password" name="password" placeholder="密码">
                        </td>
                    </tr>
                </tbody></table>

                <p class="pull-left"><input id="auto_login" type="checkbox" name="sticky" value="1" checked="checked"><label for="auto_login" class="ml5">下次开始自动登录</label></p>



                <a href="https://www.find-job.net/help/reminder.html" class="icon icon-arrow02-xs pull-right" target="_blank">忘记密码</a>
            </div>

            <div class="text-center clear pt30">
                <input type="submit" class="btn btn-xxlg btn-primary btn-wide block-center" value="登录">
            </div>

            <input type="hidden" name="next_url" value="%2Fmy%2Fwm%2Finbox.cgi">
            <input type="hidden" name="_header_footer_type" value="">

        </form>
            <div class="text-center mt30 pt30 border-t-gray">
                <p class="mb10">Facebookアカウントを利用してログイン</p>
                <a href="https://www.find-job.net/login_oauth.pl?p=f&amp;a=l&amp;u=1&amp;next_url=%2Fmy%2Fwm%2Finbox.cgi" class="btn btn-xxlg btn-facebook icon-facebook-lg btn-wide block-center">facebookでログイン</a>
                <p class="mt40 text-lg"><a href="https://www.find-job.net/my/regist/regist.cgi" class="icon icon-arrow02-xs">会員登録がお済みでない方はこちら</a></p>
            </div>

            <div class="box box-info text-center mt50">
                <a href="https://www.find-job.net/login.pl?c=1&amp;next_url=com/" class="text-lg block box-lg">招聘负责人登录</a>
            </div>

    </div><!--container-->
</main>

@stop
