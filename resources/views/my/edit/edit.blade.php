@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')
    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
        <ul>
            <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
            <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span
                            itemprop="title">登録情報</span></strong></li>
        </ul>
    </div>
    <!--topic-path-->
@stop

@section('container')
    <main>
        <div class="container">
            <h1>登録情報</h1>
            <section>
                <div class="box box-md bg-yellow mb40">
                    <h2 class="h5 text-em mb15">詳細な情報を登録すると、以下の機能を無料でご利用いただけます。</h2>
                    <p>あなたの登録した条件に応じたメールマガジンのお届けや求人企業からのスカウトを受けることなどが可能になります。</p>
                </div>
            </section>
            <form name="edit_form" action="" method="post">
                <input type="hidden" name="submitted">
                <section>
                    <h2 class="h2 text-em mb10">会員登録情報</h2>
                    <div class="box box-md clearfix mb40">
                        <table class="input-cell mb20">
                            <tbody>
                            <tr>
                                <th>姓名</th>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <th>性別</th>
                                <td>
                                    @if($user->sex == 1)
                                        男性
                                    @elseif($user->sex == 2)
                                        女性
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>电子邮件</th>
                                <td>{{$user->email}}</td>
                            </tr>

                            <tr>
                                <th>気になる企業リマインドメール</th>
                                <td>PCで受け取る</td>
                            </tr>
                            <tr>
                                <th>メール着信のお知らせ</th>
                                <td>PCで受け取る</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="/my/edit/edit_name"
                           class="btn btn-md btn-secondary btn-normal pull-right fj-submit">会員登録情報変更</a>
                    </div>
                </section>

                <section>
                    <h2 class="h2 text-em mb10">Web简历书</h2>
                    <div class="box box-md clearfix mb40">
                        <p class="pull-left mt5">※ Web简历，招聘企业阅览的事能的你的履历书。 <br>
                            选拔接受邮件设定和招聘企业Web简历公开。</p>

                        {{--<a href="javascript:void(0);" data-submitted="career" data-action="" class="btn btn-md btn-secondary pull-right ml20 pl15 pr15 fj-submit">Web履历书修改</a>--}}
                        <a href="/my/edit/edit_resume" data-submitted="career" data-action="" class="btn btn-md btn-secondary pull-right ml20 pl15 pr15 fj-submit">Web履历书修改</a>

                        <a href="/my/show_resume" target="_blank"
                           class="btn btn-md btn-secondary pull-right pl15 pr15">Web简历书确认</a>
                    </div>
                </section>

                <section>
                    <h2 class="h2 text-em mb10">选秀邮件设置</h2>
                    <div class="box box-md mb40">
                        <div class="clearfix border-b-gray mb15 pb20">
                            <p class="text-lg pull-left mt5">スカウトメールを受け取る</p>

                            <a href="/my/edit/edit_scout"  class="btn btn-md btn-secondary pull-right fj-submit">スカウトメール設定変更</a>
                        </div>
                        <p class="text-alert text-md">

                            ※ スカウトメールを受け取る設定にすると、あなたのWeb履歴書を見た企業から直接アプローチを受けることが可能になります。</p>

                        <p></p>
                        <a href="http://www.find-job.net/help/usage_scout.html" class="icon icon-arrow02-xs text-md"
                           target="_blank">スカウトメールについての詳細はこちら</a>
                    </div>
                </section>

                <section>
                    <h2 class="h2 text-em mb10">希望工作条件</h2>
                    <div class="box box-md clearfix mb40">
                        <table class="input-cell mb20">
                            <tbody>
                            <tr>
                                <th>希望職種</th>
                                <td>
                                    @foreach($shokushus as $shokushu)
                                        {{$shokushu['shokushu']['name']}},
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>希望勤務地</th>
                                <td>
                                    @foreach($kinmuchis as $kinmuchi)
                                        {{$kinmuchi['kinmuchi']['name']}},
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>希望雇用形態</th>
                                <td>
                                    @foreach($keitais as $keitai)
                                        {{$keitai['keitai']['name']}},
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>新着求人情報</th>
                                <td>受け取る</td>
                            </tr>
                            <tr>
                                <th>注目求人ダイジェスト</th>
                                <td>受け取る</td>
                            </tr>
                            <tr>
                                <th>注目求人ダイジェスト臨時増刊号</th>
                                <td>受け取る</td>
                            </tr>
                            <tr>
                                <th>職種カテゴリDM ［首都圏版］</th>
                                <td>受け取る</td>
                            </tr>
                            <tr>
                                <th>メールの配信形式</th>
                                <td>
                                    @if($user->html_mail == 1)
                                        HTML形式
                                    @elseif($user->html_mail == 2)
                                        Mail形式
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="/my/edit/edit_mail"  class="btn btn-md btn-secondary btn-normal pull-right fj-submit">希望条件変更</a>
                    </div>
                </section>

                <section>
                    <h2 class="h2 text-em mb10">検索条件</h2>
                    <div class="box box-md clearfix mb40">
                        <p class="pull-left mt5">保存した検索条件の確認と削除ができます。</p>
                        <a href="/my/list_search_condition"
                           class="btn btn-md btn-secondary btn-normal pull-right">検索条件を管理する</a>
                    </div>
                </section>


                <section>
                    <h2 class="h2 text-em mb10">修改密码</h2>
                    <div class="box box-md clearfix mb40">
                        <p class="text-alert pull-left mt5">※セキュリティー上の観点から、定期的に変更いただくことをおすすめします。</p>
                        <a href="javascript:void(0);" data-submitted="" data-action="change_passwd" class="btn btn-md btn-secondary btn-normal pull-right fj-submit">修改密码</a>
                    </div>
                </section>


                <section>
                    <h2 class="h2 text-em mb10">安全退出</h2>
                    <div class="box box-md clearfix">
                        <a href="http://www.find-job.net/my/regist/drop_confirm.pl"
                           class="icon icon-arrow02-xs text-md pull-right">退会手続きはこちら</a>
                    </div>
                </section>
            </form>

        </div><!--container-->
    </main>
@stop

@section('js')
<script>
    $(function(){
        $('.fj-submit').click(function(){
            $('form[name=edit_form] input[name=submitted]').val($(this).data('submitted'));
            $('form[name=edit_form]').attr('action', $(this).data('action'));
            $('form[name=edit_form]').submit();
        });
    });
</script>
@stop
