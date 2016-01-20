@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')


<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/my/edit/edit.cgi"><span itemprop="title">登録情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">希望条件登録</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">希望条件登録</h1>

        <div class="box box-md bg-yellow mb40">
            <p class="text-bold text-em">希望条件をご登録いただくと、条件に合致する最新の求人情報のメールマガジンを週2回お届けします。</p>
        </div>

        <form class="form" action="edit" method="post" name="edit">
            <input type="hidden" name="submitted" value="1">
            <input type="hidden" name="frm" value="mail">
            <input type="hidden" name="from" value="">
            <input type="hidden" name="userid" value="">
            <input type="hidden" name="unique_key" value="8a5095b92cfb751180826510c0cda903">

            <section>
                <h2 class="h2 text-em mb10">希望条件</h2>
                <table class="input-cell mb40">
                    <tr>
                        <th>職種<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <ul class="inner-td-col2 clearfix">

                                <li class="pull-left mb5 ">
                                    <label for="shokushu205"><input type=checkbox name="k_shokushu" class="mr5" value="205" id="shokushu205" checked>
                                        Webデザイナー・HTMLコーダー</label>
                                </li>

                                <li class="pull-left mb5 list-sm">
                                    <label for="shokushu1"><input type=checkbox name="k_shokushu" class="mr5" value="1" id="shokushu1" >
                                        Webディレクター・Webプロデューサー</label>
                                </li>

                                <li class="pull-left mb5 ">
                                    <label for="shokushu203"><input type=checkbox name="k_shokushu" class="mr5" value="203" id="shokushu203" >
                                        Webエンジニア・Webプログラマ</label>
                                </li>

                                <li class="pull-left mb5 list-sm">
                                    <label for="shokushu207"><input type=checkbox name="k_shokushu" class="mr5" value="207" id="shokushu207" >
                                        スマートフォンエンジニア</label>
                                </li>

                                <li class="pull-left mb5 ">
                                    <label for="shokushu204"><input type=checkbox name="k_shokushu" class="mr5" value="204" id="shokushu204" >
                                        ネットワークエンジニア・サーバーエンジニア</label>
                                </li>

                                <li class="pull-left mb5 list-sm">
                                    <label for="shokushu2"><input type=checkbox name="k_shokushu" class="mr5" value="2" id="shokushu2" >
                                        エンジニア その他</label>
                                </li>

                                <li class="pull-left mb5 ">
                                    <label for="shokushu5"><input type=checkbox name="k_shokushu" class="mr5" value="5" id="shokushu5" >
                                        グラフィックデザイナー・クリエイター</label>
                                </li>

                                <li class="pull-left mb5 list-sm">
                                    <label for="shokushu3"><input type=checkbox name="k_shokushu" class="mr5" value="3" id="shokushu3" >
                                        ユーザーサポート</label>
                                </li>

                                <li class="pull-left mb5 ">
                                    <label for="shokushu4"><input type=checkbox name="k_shokushu" class="mr5" value="4" id="shokushu4" >
                                        一般事務・営業事務</label>
                                </li>

                                <li class="pull-left mb5 list-sm">
                                    <label for="shokushu6"><input type=checkbox name="k_shokushu" class="mr5" value="6" id="shokushu6" >
                                        営業・企画営業</label>
                                </li>

                                <li class="pull-left mb5 ">
                                    <label for="shokushu201"><input type=checkbox name="k_shokushu" class="mr5" value="201" id="shokushu201" >
                                        人事、経理、広報、法務</label>
                                </li>

                                <li class="pull-left mb5 list-sm">
                                    <label for="shokushu200"><input type=checkbox name="k_shokushu" class="mr5" value="200" id="shokushu200" >
                                        その他</label>
                                </li>

                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <th>勤務地<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td class="clearfix">
                            <ul class="inner-td-col4 clearfix">

                                <li class="pull-left mb5">
                                    <label for="kinmuchi1"><input type=checkbox name="k_kinmuchi" class="mr5" value="1" id="kinmuchi1" checked>
                                        東京23区</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi2"><input type=checkbox name="k_kinmuchi" class="mr5" value="2" id="kinmuchi2" checked>
                                        東京23区外</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi3"><input type=checkbox name="k_kinmuchi" class="mr5" value="3" id="kinmuchi3" >
                                        神奈川県</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi4"><input type=checkbox name="k_kinmuchi" class="mr5" value="4" id="kinmuchi4" >
                                        埼玉県</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi5"><input type=checkbox name="k_kinmuchi" class="mr5" value="5" id="kinmuchi5" >
                                        千葉県</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi6"><input type=checkbox name="k_kinmuchi" class="mr5" value="6" id="kinmuchi6" >
                                        茨城県</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi7"><input type=checkbox name="k_kinmuchi" class="mr5" value="7" id="kinmuchi7" >
                                        栃木・群馬</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi9"><input type=checkbox name="k_kinmuchi" class="mr5" value="9" id="kinmuchi9" >
                                        大阪府</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi10"><input type=checkbox name="k_kinmuchi" class="mr5" value="10" id="kinmuchi10" >
                                        京都府</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi11"><input type=checkbox name="k_kinmuchi" class="mr5" value="11" id="kinmuchi11" >
                                        兵庫県</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi12"><input type=checkbox name="k_kinmuchi" class="mr5" value="12" id="kinmuchi12" >
                                        奈良・滋賀</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi13"><input type=checkbox name="k_kinmuchi" class="mr5" value="13" id="kinmuchi13" >
                                        和歌山県</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi15"><input type=checkbox name="k_kinmuchi" class="mr5" value="15" id="kinmuchi15" >
                                        愛知県</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi16"><input type=checkbox name="k_kinmuchi" class="mr5" value="16" id="kinmuchi16" >
                                        静岡県</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi17"><input type=checkbox name="k_kinmuchi" class="mr5" value="17" id="kinmuchi17" >
                                        岐阜・三重</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi18"><input type=checkbox name="k_kinmuchi" class="mr5" value="18" id="kinmuchi18" >
                                        山梨・長野</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi20"><input type=checkbox name="k_kinmuchi" class="mr5" value="20" id="kinmuchi20" >
                                        北海道</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi21"><input type=checkbox name="k_kinmuchi" class="mr5" value="21" id="kinmuchi21" >
                                        東北</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi22"><input type=checkbox name="k_kinmuchi" class="mr5" value="22" id="kinmuchi22" >
                                        北陸</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi23"><input type=checkbox name="k_kinmuchi" class="mr5" value="23" id="kinmuchi23" >
                                        中国</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi24"><input type=checkbox name="k_kinmuchi" class="mr5" value="24" id="kinmuchi24" >
                                        四国</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi25"><input type=checkbox name="k_kinmuchi" class="mr5" value="25" id="kinmuchi25" >
                                        九州・沖縄</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi26"><input type=checkbox name="k_kinmuchi" class="mr5" value="26" id="kinmuchi26" >
                                        海外</label>
                                </li>

                                <li class="pull-left mb5">
                                    <label for="kinmuchi27"><input type=checkbox name="k_kinmuchi" class="mr5" value="27" id="kinmuchi27" >
                                        在宅</label>
                                </li>

                            </ul>

                        </td>
                    </tr>
                    <tr>
                        <th>雇用形態<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td class="clearfix">
                            <ul class="inner-td-col4 clearfix">

                                <li class="pull-left mb5">
                                    <label for="keitai2"><input type=checkbox name="k_keitai" class="mr5" value="2" id="keitai2" checked>
                                        正社員(中途)</label>

                                <li class="pull-left mb5">
                                    <label for="keitai7"><input type=checkbox name="k_keitai" class="mr5" value="7" id="keitai7" >
                                        正社員(新卒)</label>

                                <li class="pull-left mb5">
                                    <label for="keitai1"><input type=checkbox name="k_keitai" class="mr5" value="1" id="keitai1" >
                                        アルバイト</label>

                                <li class="pull-left mb5">
                                    <label for="keitai6"><input type=checkbox name="k_keitai" class="mr5" value="6" id="keitai6" >
                                        契約社員</label>

                                <li class="pull-left mb5">
                                    <label for="keitai5"><input type=checkbox name="k_keitai" class="mr5" value="5" id="keitai5" >
                                        派遣社員</label>

                                <li class="pull-left mb5">
                                    <label for="keitai3"><input type=checkbox name="k_keitai" class="mr5" value="3" id="keitai3" >
                                        業務委託</label>

                            </ul>

                        </td>
                    </tr>

                    <tr>
                        <th>時給</th>
                        <td>
                            <div class="select form-md">
                                <select name=k_jikyuu>

                                    <option value='0' selected>最低時給の希望は特にない</option>

                                    <option value='1' >時給 800 円以上</option>

                                    <option value='2' >時給 1000 円以上</option>

                                    <option value='3' >時給 1500 円以上</option>

                                    <option value='4' >時給 2000 円以上</option>

                                    <option value='5' >時給 2500 円以上</option>

                                    <option value='6' >時給 3000 円以上</option>

                                    <option value='7' >時給 3500 円以上</option>

                                    <option value='8' >時給 4000 円以上</option>

                                    <option value='9' >時給制は希望しない</option>

                                </select>
                            </div>
                            <p class="text-md pt10">※メールマガジンの配信条件ではありません</p>
                        </td>
                    </tr>
                    <tr>
                        <th>月給</th>
                        <td>
                            <div class="select form-md">
                                <select name=k_gekkyuu>

                                    <option value='0' selected>最低月給の希望は特にない</option>

                                    <option value='1' >月給 15 万円以上</option>

                                    <option value='2' >月給 20 万円以上</option>

                                    <option value='3' >月給 25 万円以上</option>

                                    <option value='4' >月給 30 万円以上</option>

                                    <option value='5' >月給 35 万円以上</option>

                                    <option value='6' >月給 40 万円以上</option>

                                    <option value='7' >月給 45 万円以上</option>

                                    <option value='8' >月給 50 万円以上</option>

                                    <option value='9' >月給制は希望しない</option>

                                </select>
                            </div>
                            <p class="text-md pt10">※メールマガジンの配信条件ではありません</p>
                        </td>
                    </tr>
                    <tr>
                        <th>年俸</th>
                        <td>
                            <div class="select form-md">
                                <select name=k_nenbou>

                                    <option value='0' selected>最低年俸の希望は特にない</option>

                                    <option value='1' >年俸 250 万円以上</option>

                                    <option value='2' >年俸 300 万円以上</option>

                                    <option value='3' >年俸 350 万円以上</option>

                                    <option value='4' >年俸 400 万円以上</option>

                                    <option value='5' >年俸 450 万円以上</option>

                                    <option value='6' >年俸 500 万円以上</option>

                                    <option value='7' >年俸 600 万円以上</option>

                                    <option value='8' >年俸 700 万円以上</option>

                                    <option value='9' >年俸 800 万円以上</option>

                                    <option value='10' >年俸 1000 万円以上</option>

                                    <option value='11' >年俸制は希望しない</option>

                                </select>
                            </div>
                            <p class="text-md pt10">※メールマガジンの配信条件ではありません</p>
                        </td>
                    </tr>

                </table>
            </section>


            <section>
                <h2 class="h2 text-em mb10">メールマガジン配信設定</h2>
                <table class="input-cell mb40">
                    <tr>
                        <th>新着求人情報<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="inner-td-mailmagazine clearfix">
                                <dt class="pull-left text-bold">毎週月・木</dt>
                                <dd class="subscript pull-left">ご登録されている「職種・勤務地・雇用形態」の希望条件に合った、新着求人情報を毎週月・木曜にお届けします。</dd>
                                <dd class="check pull-right">
                                    <ul>

                                        <li class="mb5">
                                            <label for="mailservice_new_yes">
                                                <input type="radio" id="mailservice_new_yes" name="mailservice_new" value="1" checked>受け取る
                                            </label>
                                        </li>
                                        <li>
                                            <label for="mailservice_new_no">
                                                <input type="radio" id="mailservice_new_no" name="mailservice_new" value="0">受け取らない
                                            </label>
                                        </li>

                                    </ul>
                                </dd>
                            </dl>
                        </td>
                    </tr>

                    <tr>
                        <th>注目求人ダイジェスト<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="inner-td-mailmagazine clearfix">
                                <dt class="pull-left text-bold">毎週土曜</dt>
                                <dd class="subscript pull-left">厳選した注目の求人情報や仕事探しや転職活動に役立つ情報を毎週土曜にお届けします。</dd>
                                <dd class="check pull-right">
                                    <ul>
                                        <li class="mb5"><label for="mailservice_pickup_yes">
                                                <input type="radio" id="mailservice_pickup_yes" name="mailservice_pickup" value="1" checked>受け取る
                                            </label></li>
                                        <li><label for="mailservice_pickup_no">
                                                <input type="radio" id="mailservice_pickup_no" name="mailservice_pickup" value="0">受け取らない
                                            </label></li>
                                    </ul>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <th><span class="pull-left">注目求人ダイジェスト<br>臨時増刊号</span><span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="inner-td-mailmagazine clearfix">
                                <dt class="pull-left text-bold">不定期</dt>
                                <dd class="subscript pull-left">求人市場のトレンド情報や旬な企業の求人をイチ早くお届けするメルマガです。</dd>
                                <dd class="check pull-right">
                                    <ul>
                                        <li class="mb5"><label for="mailservice_digest_yes">
                                                <input type="radio" id="mailservice_digest_yes" name="mailservice_digest" value="1" checked>受け取る
                                            </label></li>
                                        <li><label for="mailservice_digest_no">
                                                <input type="radio" id="mailservice_digest_no" name="mailservice_digest" value="0">受け取らない
                                            </label></li>
                                    </ul>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <th><span class="pull-left">職種カテゴリDM<br>[首都圏版]</span><span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="inner-td-mailmagazine clearfix">
                                <dt class="pull-left text-bold">不定期</dt>
                                <dd class="subscript pull-left">ご登録されている「職種」からあなたにマッチする限定1社の詳細な求人情報をお届けします。</dd>
                                <dd class="check pull-right">
                                    <ul>
                                        <li class="mb5"><label for="mailservice_dm_yes">
                                                <input type="radio" id="mailservice_dm_yes" name="mailservice_dm" value="1" checked>受け取る
                                            </label></li>
                                        <li><label for="mailservice_dm_no">
                                                <input type="radio" id="mailservice_dm_no" name="mailservice_dm" value="0">受け取らない
                                            </label></li>
                                    </ul>
                                </dd>
                            </dl>
                        </td>
                    </tr>

                </table>

                <table class="input-cell mb50">
                    <tr>
                        <th>メールの配信形式<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <ul>
                                <li class="mb5"><label for="html_mail_yes">
                                        <input type="radio" id="html_mail_yes" name="html_mail" value="1" checked>HTML形式
                                    </label></li>
                                <li><label for="html_mail_no">
                                        <input type="radio" id="html_mail_no" name="html_mail" value="0">テキスト形式
                                    </label></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </section>


            <div class="relative text-center">
                <a href="edit" class="btn btn-md btn-default btn-normal fixed-left">登録情報トップに戻る</a>
                <input type="submit" class="btn btn-xxlg btn-primary btn-wide block-center" value="希望条件を変更する">
            </div>
        </form>

    </div><!--container-->
</main>

@stop
