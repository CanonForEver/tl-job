 @extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/search.css">
@stop

@section('topic')
<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">庭燎・求贤</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">职位搜索</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop
@section('container')

<main>
    <div class="container">
    <h1 class="mb30">职位搜索</h1>
    
<form name="searchForm" action="" method="get" class="form">
    <div class="box-condition box box-md clearfix mb40">

        <p class="h4 text-bold pull-left mb15">现在的检索条件</p>

        <a href="/my/register_search_condition.pl?_d=0" class="icon icon-save-sm ml20 pull-right">检索条件保存</a>


        <a href="http://www.find-job.net/my/register_mailmag.pl?_d=0&amp;save_conditions=1" class="icon icon-mail-blue-sm pull-right">この条件で新着メールを受取る</a>

        <div id="fj-search-condition-detail-text" class="clear text-md border-t-gray pt10">
            <dl class="list-current clearfix mb5">
                <dt class="pull-left">职业</dt>
                <dd class="text-bold pull-left">不限</dd>
            </dl>
            <dl class="list-current clearfix mb5">
                <dt class="pull-left">工作地点</dt>
                <dd class="text-bold pull-left">不限</dd>
            </dl>
            <dl class="list-current clearfix  mb5">
                <dt class="pull-left">工作形式</dt>
                <dd class="text-bold pull-left">不限</dd>
            </dl>
        </div>

        

        <div id="fj-search-condition-box" class="clear text-md mt20 hidden">
            <table class="input-cell mb20">
                <colgroup>
                    <col style="width:16%;">
                    <col style="width:84%;">
                </colgroup>
                <tbody><tr>
                    <th>职业</th>
                    <td><a href="javascript:void(0)" class="fj-open-condition-modal btn btn-default btn-md btn-select" data-box="shokushu">職種を选择</a>
                        <ul class="fj-search-shokushu list-col2 mt5 clearfix pull-right">
                        
                        <li class="pull-left mb5">不限</li>
                        
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>工作地点</th>
                    <td><a href="javascript:void(0)" class="fj-open-condition-modal btn btn-default btn-md btn-select" data-box="kinmuchi">工作地点を选择</a>
                        <ul class="fj-search-kinmuchi list-col5 mt5 clearfix pull-right">
                            
                            <li class="pull-left mb5">不限</li>
                            
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>工作形式</th>
                    <td><a href="javascript:void(0)" class="fj-open-condition-modal btn btn-default btn-md btn-select" data-box="keitai">工作形式を选择</a>
                        <ul class="fj-search-keitai list-col4 mt5 clearfix pull-right">
                            
                            <li class="pull-left mb5">不限</li>
                            
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>業種</th>
                    <td><a href="javascript:void(0)" class="fj-open-condition-modal btn btn-default btn-md btn-select" data-box="category">業種を选择</a>
                        <ul class="fj-search-category list-col3 mt5 clearfix pull-right">
                            
                            <li class="pull-left mb5">不限</li>
                            
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th class="valign-middle">薪水</th>
                    <td>
                        <div class="select form-sm pull-left mr10">
                           <select name="ky_kind" onchange="set_price(this.selectedIndex)">
                           
                           <option value="0" selected="">------</option>
                           
                           <option value="hour">時給</option>
                           
                           <option value="day">日給</option>
                           
                           <option value="month">月給</option>
                           
                           <option value="year">年俸</option>
                           
                           </select>
                        </div>
                        <div class="select form-sm pull-left mr10">
                        <select name="ky_from">
                            <option value="0">---</option>
                        </select>
                        </div>
                        <div class="pull-left mt10">以上</div>
                    </td>
                </tr>
                <tr>
                    <th class="valign-middle">关键词</th>
                    <td>
                        <input type="text" name="keyword" placeholder="关键词" class="fj-auto-complete pull-left mr40 ui-autocomplete-input" value="" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <th class="valign-middle">其他</th>
                    <td>
                <div class="pull-left mr40"><label for="new"><input type="checkbox" id="new" name="new" value="1" class="mr5">新着求人<span class="tag tag-sm tag-new ml5">NEW</span></label></div>

                <div class="pull-left"><label for="mikeiken"><input type="checkbox" id="mikeiken" name="mikeiken" value="1" class="mr5">業務経験不問<img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></label></div>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="text-center pb40">
                <input type="submit" class="btn btn-xxlg btn-primary btn-wide block-center" value="検索">
            </div>
        </div>

        
        <div>
            <a href="http://www.find-job.net/fj/search.cgi#" class="fj-search-more-button btn-furl btn btn-md btn-secondary btn-normal">
                <span class="plus">详细检索</span>
            </a>
        </div>
        

    </div>
</form>

<div class="clearfix mb10">
    
    <div class="text-lg pull-left">1~20件（<span class="text-alert fj-search-max-count">4972</span>件中）</div>
    
    <div class="text-right">
        
        <a href="http://www.find-job.net/fj/search.cgi?_d=0&amp;order=up&amp;order_ad=desc" rel="nofollow">按新后顺序排列</a>
        
    </div>
    
    
</div>


    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    @foreach($searchs as $search)
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="/list/{{$search->id}}" target="_blank" data-from=""><span class="block" itemprop="title">Webディレクター</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社ディエスピー</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>

    <div class="box-corp-body">
        <h3 class="text-xlg mb10">{{$search->shosai}}</h3>
        <p class="text-md mb15">{{$search->background}}<a href="/list/{{$search->id}}" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="/list/{{$search->id}}" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-abe4a93f.jpg" data-original="/img/com_pics/34785/t-abe4a93f.jpg" alt="株式会社ディエスピー - Webディレクター 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">{{$search->job_details}}</dd>
            </dl>

            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">

                <p>1.<span itemprop="employmentType">{{$search->this_keitai1->name}}</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                <p>2.<span itemprop="employmentType">{{$search->this_keitai2->name}}</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                <p>3.<span itemprop="employmentType">{{$search->this_keitai3->name}}</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>

                </dd>
            </dl>


            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                           <dd class="pull-right">

                        <p>1.{{$search->ky3_kind}}{{$search->ky1_from}}~{{$search->ky1_to}}</p>
                        <p>2.{{$search->ky3_kind}}{{$search->ky2_from}}~{{$search->ky2_to}}</p>
                        <p>3.{{$search->ky3_kind}}{{$search->ky3_from}}~{{$search->ky3_to}}</p>


                </dd>
            </dl>

            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">{{$search->this_kinmuchi->name}}</span>
                </dd>
            </dl>
            <ul class="text-size-md">
               @foreach($search->job_focus_words as $word)
                <li class="tag tag-sm tag-default">{{$word->focus_word->name}}</li>
                   @endforeach

            </ul>
        </div>
    </div>
    @endforeach
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="/list/{{$search->id}}" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="" data-job-id="{{$search->id}}" data-action="search_logout" data-label="108579" class="fj-add-to-bookmark btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->


    

    
    <ul class="pager block-center">
        <li class="prev"></li>
        
        <li class="current"><a href="http://www.find-job.net/fj/search.cgi?_d=0">1</a></li>
        
        <li><a href="http://www.find-job.net/fj/search.cgi?_d=0&amp;page=2">2</a></li>
        
        <li><a href="http://www.find-job.net/fj/search.cgi?_d=0&amp;page=3">3</a></li>
        
        <li><a href="http://www.find-job.net/fj/search.cgi?_d=0&amp;page=4">4</a></li>
        
        <li><a href="http://www.find-job.net/fj/search.cgi?_d=0&amp;page=5">5</a></li>
        
        <li><a href="http://www.find-job.net/fj/search.cgi?_d=0&amp;page=6">6</a></li>
        
        <li class="next"><a href="http://www.find-job.net/fj/search.cgi?_d=0&amp;page=2">下一页&nbsp;&gt;</a></li>
    </ul>
    

    
    <div class="text-center">
        
        
        
        
        
        
    </div>
    

    </div><!--container-->
</main>


<div class="fj-login-modal container-modal search-modal02 hidden">
    <div class="mb10 clearfix">
        <h2 class="text-em pull-left">「気になる」は会員限定機能です</h2>
        <div class="btn-close pull-right"><a href="#" class="fj-login-modal-close">閉じる</a></div>
    </div>
    <p>「気になる」すると、企業にあなたがこの求人に興味を持っていることが伝わります。</p>
    <p>「気になる」された企業もあなたに興味を持っていると、あなたに通知が届くことがあります。</p>
    <div class="box-xs text-center mt20 mb10">
        <a href="/my/regist/regist.cgi" class="btn btn-xlg btn-primary inlin-block btn-horizontal mr10">会員登録する</a>
        <a href class="fj-login-modal-login-link btn btn-xlg btn-secondary inlin-block btn-horizontal ml10">ログイン</a>
    </div>
</div>

<div class="container-modal bookmark-modal hidden">

    <div class="bookmark-sending hidden">
        <p><img src="/images/common/loader.gif" alt="loader"></p>
        <p>送信中です</p>
    </div>

    <div class="bookmark-complete hidden">
        <h2 class="text-em">話を聞いてみたいオファーを送信しました</h2>
        <p>企業担当者があなたのWeb履歴書（匿名）を閲覧し、実際に会ってみたいと判断された場合、<br>日程調整についての連絡が届きます。</p>
    </div>

    <form class="bookmark-form" name="send_meet_form" action="/api/wm/send_meet_mail.pl" method="post">
        <div class="mb10 clearfix">
            <div class="btn-close pull-right"><a href="#" class="fj-login-modal-close">閉じる</a></div>
            <h2 class="text-em">話を聞いてみたいオファーを送信しますか？</h2>
        </div>
        <p>企業にあなたが話を聞いてみたい旨と、あなたのWeb履歴書（匿名）が送信されます。企業担当者があなたのWeb履歴書（匿名）を閲覧し、実際に会ってみたいと判断された場合のみ、日程調整についての連絡が届きます。</p>
        <ul class="text-left clearfix">
            <li><img src="/images/bookmark/listen_img01.png" alt="話を聞きたい旨を通知"></li>
            <li><img src="/images/bookmark/listen_img02.png" alt="日程調整"></li>
            <li class="last"><img src="/images/bookmark/listen_img03.png" alt="実際に会う"></li>
        </ul>
        <dl class="box box-sm bg-yellow clearfix">
            <dt class="pull-left mr20">雇用形態を选择</dt>
            <dd class="pull-left mr20"><input class="_keitai1" type="radio" name="" id="" value="1" checked /></dd>
            <dd class="pull-left mr20"><input class="_keitai2" type="radio" name="" id="" value="2" /></dd>
            <dd class="pull-left mr20"><input class="_keitai3" type="radio" name="" id="" value="3" /></dd>
        </dl>
        <input type="hidden" name="jobID" value="">
        <input type="hidden" name="uniq_key" value="">
        <input type="hidden" name="via" value="">
        <p>送信されるプロフィール・スキルシート・職務経歴は<a href="/my/edit/edit.cgi?submitted=career" target="_blank">こちら</a>で確認、編集することが可能です。</p>
        <div class="text-center mb10">
            <a href="javascript:void(0)" class="btn fj-send-offer btn-xlg btn-primary btn-horizontal">送信する</a>
        </div>
    </form>
</div>

<div class="container-modal search-modal text-left hidden">
    <div class="mb10 clearfix">
        <h2 class="h3 pull-left">検索する条件にチェックを入れ、选择ボタンを押してください</h2>
        <div class="btn-close pull-right"><a class="plainmodal-close" href="javascript:void(0)">閉じる</a></div>
    </div>
    <div class="box-md bg-white">
        <ul class="fj-search-modal-shokushu list-col2 clearfix">

            <li class="pull-left mb5"><label><input value="205" name="shokushu" type="checkbox" class="mr5" >Webデザイナー・HTMLコーダー</label></li>

            <li class="pull-left mb5"><label><input value="1" name="shokushu" type="checkbox" class="mr5" >Webディレクター・Webプロデューサー</label></li>

            <li class="pull-left mb5"><label><input value="203" name="shokushu" type="checkbox" class="mr5" >Webエンジニア・Webプログラマ</label></li>

            <li class="pull-left mb5"><label><input value="207" name="shokushu" type="checkbox" class="mr5" >スマートフォンエンジニア</label></li>

            <li class="pull-left mb5"><label><input value="204" name="shokushu" type="checkbox" class="mr5" >ネットワークエンジニア・サーバーエンジニア</label></li>

            <li class="pull-left mb5"><label><input value="2" name="shokushu" type="checkbox" class="mr5" >エンジニア その他</label></li>

            <li class="pull-left mb5"><label><input value="5" name="shokushu" type="checkbox" class="mr5" >グラフィックデザイナー・クリエイター</label></li>

            <li class="pull-left mb5"><label><input value="3" name="shokushu" type="checkbox" class="mr5" >ユーザーサポート</label></li>

            <li class="pull-left mb5"><label><input value="4" name="shokushu" type="checkbox" class="mr5" >一般事務・営業事務</label></li>

            <li class="pull-left mb5"><label><input value="6" name="shokushu" type="checkbox" class="mr5" >営業・企画営業</label></li>

            <li class="pull-left mb5"><label><input value="201" name="shokushu" type="checkbox" class="mr5" >人事、経理、広報、法務</label></li>

            <li class="pull-left mb5"><label><input value="200" name="shokushu" type="checkbox" class="mr5" >その他</label></li>

        </ul>
        <ul class="fj-search-modal-kinmuchi list-col5 clearfix">

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="1" class="mr5" >東京23区</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="2" class="mr5" >東京23区外</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="3" class="mr5" >神奈川県</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="4" class="mr5" >埼玉県</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="5" class="mr5" >千葉県</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="9" class="mr5" >大阪府</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="10" class="mr5" >京都府</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="11" class="mr5" >兵庫県</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="6" class="mr5" >茨城県</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="7" class="mr5" >栃木・群馬</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="12" class="mr5" >奈良・滋賀</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="13" class="mr5" >和歌山県</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="15" class="mr5" >愛知県</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="16" class="mr5" >静岡県</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="17" class="mr5" >岐阜・三重</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="18" class="mr5" >山梨・長野</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="20" class="mr5" >北海道</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="21" class="mr5" >東北</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="22" class="mr5" >北陸</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="23" class="mr5" >中国</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="24" class="mr5" >四国</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="25" class="mr5" >九州・沖縄</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="26" class="mr5" >海外</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="kinmuchi" value="27" class="mr5" >在宅</label></li>

        </ul>

        <ul class="fj-search-modal-keitai list-col4 clearfix">

            <li class="pull-left mb5"><label><input type="checkbox" name="keitai" value="2" class="mr5" >正社員(中途)</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="keitai" value="7" class="mr5" >正社員(新卒)</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="keitai" value="1" class="mr5" >アルバイト</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="keitai" value="6" class="mr5" >契約社員</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="keitai" value="5" class="mr5" >派遣社員</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="keitai" value="3" class="mr5" >業務委託</label></li>

        </ul>

        <ul class="fj-search-modal-category list-col3 clearfix">

            <li class="pull-left mb5"><label><input type="checkbox" name="category" value="1" class="mr5" >インターネット関連</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="category" value="2" class="mr5" >ソフトウェア・情報処理</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="category" value="5" class="mr5" >サービス業</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="category" value="6" class="mr5" >デザイン・出版・マスコミ</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="category" value="3" class="mr5" >メーカー</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="category" value="13" class="mr5" >ゲーム</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="category" value="12" class="mr5" >会計・コンサル・金融</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="category" value="9" class="mr5" >公共団体・NPO</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="category" value="11" class="mr5" >人材派遣・紹介・アウトソーシング</label></li>

            <li class="pull-left mb5"><label><input type="checkbox" name="category" value="10" class="mr5" >その他</label></li>

        </ul>
    </div>
    <div class="box-xs text-center mt20">
        <a href="javascript:void(0)" class="fj-submit-modal-data btn btn-xlg btn-secondary inlin-block btn-horizontal mr10">选择</a>
    </div>
</div>

@stop


@section('js')
<script src="/vendor/assets/jquery/jquery.lazyload.min.js"></script>
<script src="/assets/javascripts/search.js"></script>
@stop

