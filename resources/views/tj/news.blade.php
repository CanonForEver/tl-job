@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/search.css">
@stop

@section('topic')
<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">庭燎・求贤</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">最新职位</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop
@section('container')

<main>
    <div class="container">
    <h1 class="mb30">最新职位信息</h1>
    
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
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="/list/j108579" target="_blank" data-from=""><span class="block" itemprop="title">Webディレクター</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社ディエスピー</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">300ヶ所の保育園のWEBサイトをお任せします。
あなたの得意分野で、信頼される存在に。</h3>
        <p class="text-md mb15">私たちは、幼稚園・保育園・老人ホームに向けたWebプロモーション支援を手掛けています。保育業界・介護業界のお客様には、ITに詳しくない方、自分の施設をPRするのが不得意な方も。ときには、幼稚園の理事長先生と一緒に教育方針を言葉にしていったり、老人ホームの施設長と独自の強みを探ったり。保育士の先生にブログの･･･<a href="http://www.find-job.net/list/j108579.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j108579.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-abe4a93f.jpg" data-original="/img/com_pics/34785/t-abe4a93f.jpg" alt="株式会社ディエスピー - Webディレクター 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">提案やヒアリング・問題解決・サイトマップ作成・ワイヤーフレーム作成・スケジュール管理・顧客折衝などをお願いします。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p>1.<span itemprop="employmentType">正社員(中途)</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                <p>2.<span itemprop="employmentType">正社員(中途)</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>1. 年俸360万円 〜</p>
                <p>2. 年俸300万円 〜</p>
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">千代田区：各線 神保町駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">第二新卒</li>
                
                <li class="tag tag-sm tag-default">年俸制有り</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j108579.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="108579" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j108604.html" target="_blank" data-from=""><span class="block" itemprop="title">MACオペレーター</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社パレード</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">グラフィックデザイナーを強力サポート！
MACオペレーター募集！</h3>
        <p class="text-md mb15">様々なオペレーション案件に対して“どうすれば効率が良いか”と“どうすればデザイナーが作業しやすいか”を意識してどんどんマウスをクリック！キーボードをタッチタイピング！パレードは全員でクライアントのオーダーに応えるクリエイティブ集団です！<a href="http://www.find-job.net/list/j108604.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j108604.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-a3d850df.jpg" data-original="/img/com_pics/22751/t-a3d850df.jpg" alt="株式会社パレード - MACオペレーター 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">主に通販カタログ・セールスプロモーションツールのMACオペレーション作業をお願いします。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p>1.<span itemprop="employmentType">正社員(中途)</span></p>
                <p>2.<span itemprop="employmentType">アルバイト</span></p>
                <p>3.<span itemprop="employmentType">正社員(新卒)</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>1. 月給22万円 〜</p>
                <p>2. 時給900円 〜</p>
                <p>3. 月給22万円 〜</p>
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">大阪市北区：各線 天満橋駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
                <li class="tag tag-sm tag-default">年俸制有り</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j108604.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="108604" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j98956.html" target="_blank" data-from=""><span class="block" itemprop="title">Webデザイナー</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社クライマークス</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                <li class="tag tag-xsm tag-primary">制作実績</li>
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">クリエイティブな大手企業サイトのデザインをやりたいWebデザイナー募集！</h3>
        <p class="text-md mb15">当社は設立11年を迎え、大手企業のコーポレートサイトやスマホサイトなどを、戦略策定・企画・設計からデザイン・実装まで一貫して提供しています。お客さまとは直接取引させていただいているため、私たちが本当に提供したいと考えるサイトをじっくりと提案し、取り組むことができます。また無理な仕事が多いといわれるWeb･･･<a href="http://www.find-job.net/list/j98956.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j98956.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-6d178aea.jpg" data-original="/img/com_pics/38804/t-6d178aea.jpg" alt="株式会社クライマークス - Webデザイナー 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">クライアントのコーポレートサイトのトップページデザインや主要下層ページデザイン、コンペ提案用デザイン等をお願いします。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p><span itemprop="employmentType">正社員(中途)</span></p>
                
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>年俸320万円 〜 600万円</p>
                
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">中央区：有楽町線 銀座一丁目駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
                <li class="tag tag-sm tag-default">第二新卒</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j98956.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="98956" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j98975.html" target="_blank" data-from=""><span class="block" itemprop="title">Webデザイナー</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社グミ</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">事業拡大のため、Webデザイナー複数名募集！
Web業界未経験のデザイナーも大歓迎☆</h3>
        <p class="text-md mb15">今回はWeb制作を担当していただく方を求めています。 お願いするのは通常のWebサイトのコンテンツ制作や、更新をはじめ、 映像を組込んだサイトや、iPhone/iPad、Androidアプリのデザインなど多岐に渡ります。グミでは、映像制作、Web制作、アプリ制作、グラフィック制作とそれぞれの部門のプロが集結し、お互いの強みを活･･･<a href="http://www.find-job.net/list/j98975.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j98975.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-73993e0e.jpg" data-original="/img/com_pics/37176/t-73993e0e.jpg" alt="株式会社グミ - Webデザイナー 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">主にクライアントサイトのWebサイトや映像、グラフィックにおけるデザインをお任せします。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p><span itemprop="employmentType">正社員(中途)</span></p>
                
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>月給20万円 〜</p>
                
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">渋谷区：JR 恵比寿駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
                <li class="tag tag-sm tag-default">第二新卒</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j98975.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="98975" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j87742.html" target="_blank" data-from=""><span class="block" itemprop="title">グラフィックデザイナー(アートディレクター候補)</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社トライアウト</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">【東京急募!!】クリエイティブカンパニー拡大中。あなたのチカラが必要です!!</h3>
        <p class="text-md mb15">今回は、東京支社で勤務していただける方を特に募集しております!もちろん大阪本社も募集しています。私たちは、雑誌広告を中心とした総合広告代理店・制作会社、編集プロダクションという3つの機能を兼ね備えたトータルクリエイティブカンパニーです。総勢96名(デザイナー21名)、平均年齢28歳とエネルギーに溢れた会社で、･･･<a href="http://www.find-job.net/list/j87742.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j87742.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-97cc05f1.jpg" data-original="/img/com_pics/20214/t-97cc05f1.jpg" alt="株式会社トライアウト - グラフィックデザイナー(アートディレクター候補) 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">デザイン力をベースにクライアントの問題解決をおこなうのが、主な仕事です。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p><span itemprop="employmentType">正社員(中途)</span></p>
                
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>月給19万5000円 〜 25万円</p>
                
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">東京都渋谷区、大阪市中央区</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j87742.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="87742" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j102370.html" target="_blank" data-from=""><span class="block" itemprop="title">スマートフォン向けクライアントエンジニア</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社BEFOOL</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">Hello ! ボードゲーム好きのエンジニア</h3>
        <p class="text-md mb15">BEFOOLでは、社長の趣味の影響もあり、ボードゲーム好きが多く集まっています。もしボードゲームで遊ぶのが好きなら、是非一度弊社まで遊びにきてください！主にUnity、Cocos2d-xを使用してスマホ向けゲームのクライアントサイドの実装行っていただきます。大きい会社ではできない企画、設計、から運営まで一貫して関わるこ･･･<a href="http://www.find-job.net/list/j102370.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j102370.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/s-f0293377.jpg" data-original="/img/com_pics/35122/s-f0293377.jpg" alt="株式会社BEFOOL - スマートフォン向けクライアントエンジニア 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">UnityやCocos2d-xを使用したゲームのフロント部分を企画から公開・運営まで携わることができます。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p><span itemprop="employmentType">正社員(中途)</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>月給25万円 〜 45万円</p>
                
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">渋谷区：副都心線 北参道駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
                <li class="tag tag-sm tag-default">フレックスタイム制有り</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j102370.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="102370" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j104920.html" target="_blank" data-from=""><span class="block" itemprop="title">スマートフォン向けモーションデザイナー</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社BEFOOL</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">Hello ! ボードゲーム好きのモーションデザイナー</h3>
        <p class="text-md mb15">BEFOOLでは、社長の趣味の影響もあり、ボードゲーム好きが多く集まっています。もしボードゲームで遊ぶのが好きなら、是非一度弊社まで遊びにきてください！SpineやLive2Dなどを使用した最先端のスキルを習得することができます。この技術はまだ発展途上ながら数々のゲームで使用されている実績がありこれからも需要が伸び･･･<a href="http://www.find-job.net/list/j104920.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j104920.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/s-f0293377.jpg" data-original="/img/com_pics/35122/s-f0293377.jpg" alt="株式会社BEFOOL - スマートフォン向けモーションデザイナー 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">主にSpineを使用した2Dキャラクターのモーションの作成を行っていただきます。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p><span itemprop="employmentType">正社員(中途)</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>月給25万円 〜 45万円</p>
                
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">渋谷区：副都心線 北参道駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
                <li class="tag tag-sm tag-default">フレックスタイム制有り</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j104920.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="104920" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j110043.html" target="_blank" data-from=""><span class="block" itemprop="title">フロントエンドエンジニア</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社グレイビートレイン</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">フロントエンドエンジニア募集！
受賞歴多数のクリエイティブ会社</h3>
        <p class="text-md mb15">作品から“楽しさ”を感じられるデザインを行う当社では、依頼される仕事はいったん一から考え直します。ワクに縛られることなくデザインという知恵を使って、ひとつひとつの広告作りを楽しみながら、課題を解決するための手法や表現を創り出します。おかげさまで案件のご依頼も増えており、それに伴い制作体制の強化も図っ･･･<a href="http://www.find-job.net/list/j110043.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j110043.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-c3c658a5.jpg" data-original="/img/com_pics/21365/t-c3c658a5.jpg" alt="株式会社グレイビートレイン - フロントエンドエンジニア 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">アートディレクター、デザイナーと共にデザイン企画・演出などを打ち合わせた上で制作していただきます。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p>1.<span itemprop="employmentType">正社員(中途)</span></p>
                <p>2.<span itemprop="employmentType">正社員(中途)</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>1. 月給20万円 〜 35万円</p>
                <p>2. 月給18万円 〜 30万円</p>
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">渋谷区：山手線 恵比寿駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j110043.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="110043" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j110039.html" target="_blank" data-from=""><span class="block" itemprop="title">スマートフォン向けweb/サーバーサイドエンジニア</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社BEFOOL</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">Hello ! ボードゲーム好きのエンジニア</h3>
        <p class="text-md mb15">BEFOOLでは、社長の趣味の影響もあり、ボードゲーム好きが多く集まっています。もしボードゲームで遊ぶのが好きなら、是非一度弊社まで遊びにきてください！自社開発から他社案件まで幅広い案件で活躍することができます。webソーシャルゲームやスマホ向けゲームのバックエンドの実装をおまかせいたします。大きい会社では･･･<a href="http://www.find-job.net/list/j110039.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j110039.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/s-f0293377.jpg" data-original="/img/com_pics/35122/s-f0293377.jpg" alt="株式会社BEFOOL - スマートフォン向けweb/サーバーサイドエンジニア 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">PHPやRubyを使用して、webソーシャル案件やネイティブのサーバーサイド開発に携わって頂きます。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p><span itemprop="employmentType">正社員(中途)</span></p>
                
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>月給25万円 〜 40万円</p>
                
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">渋谷区：副都心線 北参道駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
                <li class="tag tag-sm tag-default">フレックスタイム制有り</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j110039.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="110039" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j110037.html" target="_blank" data-from=""><span class="block" itemprop="title">ヘルプデスク</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">テクノブレイブ株式会社</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">医療業界のハードルが高いなんて、
誰が決めたんでしょうか？</h3>
        <p class="text-md mb15">あらゆる分野のシステムを手掛け、 コンサルティングからシステム導入・運用までワンストップで提供している当社。そんな中まだまだ、医療分野のIT活用は、浸透しきれていない現在。 医療に国境はありませんし、世界に目を向けてみれば、可能性はまだまだ眠っています。この業界を専門に担っているのが、特命事業本部「メデ･･･<a href="http://www.find-job.net/list/j110037.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j110037.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-362b079e.jpg" data-original="/img/com_pics/42482/t-362b079e.jpg" alt="テクノブレイブ株式会社 - ヘルプデスク 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">当社のクライアントである病院内で、電子カルテのサポート業務をメインに行っていただきます。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p><span itemprop="employmentType">正社員(中途)</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>月給23万円 〜 40万円</p>
                
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">千代田区、他東京23区内</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">残業手当有り</li>
                
                <li class="tag tag-sm tag-default">第二新卒</li>
                
                <li class="tag tag-sm tag-default">新規事業</li>
                
                <li class="tag tag-sm tag-default">U・Iターン歓迎</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j110037.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="110037" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j109926.html" target="_blank" data-from=""><span class="block" itemprop="title">自社サイトのWebデザイナー</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">デザインフェスタ有限会社</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">全ての「表現したい」を応援する、
“デザフェス”の裏方募集。</h3>
        <p class="text-md mb15">デザインフェスタは、オリジナル作品を作るクリエイターであれば誰でも参加できるアートイベント。絵画、イラスト、ライブペイント、写真、雑貨、アクセサリー、ファッション、パフォーマンス、映像・マルチメディア…会場では、年齢や国籍・ジャンル・スタイルを問わず、1万人以上ものアーティストのありとあらゆる表現に･･･<a href="http://www.find-job.net/list/j109926.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j109926.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-028e049a.jpg" data-original="/img/com_pics/43371/t-028e049a.jpg" alt="デザインフェスタ有限会社 - 自社サイトのWebデザイナー 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">アートイベント「デザインフェスタ」や「學展」の運営を手掛けている当社にて自社サイトのクリエイティブ全般をお任せします。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p>1.<span itemprop="employmentType">正社員(中途)</span></p>
                <p>2.<span itemprop="employmentType">アルバイト</span></p>
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>1. 月給28万円 〜 45万円</p>
                <p>2. 時給1000円 〜 1500円</p>
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">渋谷区：各線 明治神宮前駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
                <li class="tag tag-sm tag-default">第二新卒</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j109926.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="109926" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j109592.html" target="_blank" data-from=""><span class="block" itemprop="title">自社広告物のDTPデザイナー</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社アサヒクリエイション</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">Illustratorが使えなくたって、OK。
私たちが重視するのは、向上心と人柄です。</h3>
        <p class="text-md mb15">「未経験OK」と書いていても、その実、応募資格には「美大卒の方限定」「デザインスキルは必須」と書いてあり、なかなかチャンスが無い…でもデザイナーになりたい！クリエイティブな仕事に就きたい！もしあなたがそう思い悩んでいるなら、ぜひ当社へ！IllustratorやPhotoshopが使えない方も大歓迎。当社はあくまで、あなた･･･<a href="http://www.find-job.net/list/j109592.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j109592.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-61b7797a.jpg" data-original="/img/com_pics/40907/t-61b7797a.jpg" alt="株式会社アサヒクリエイション - 自社広告物のDTPデザイナー 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">親会社である朝日土地建物(株)が発行している不動産チラシの制作をお任せします。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p>1.<span itemprop="employmentType">正社員(中途)</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                <p>2.<span itemprop="employmentType">正社員(新卒)</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>1. 月給16万円 〜</p>
                <p>2. 月給16万円 〜</p>
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">町田市：各線 町田駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
                <li class="tag tag-sm tag-default">残業手当有り</li>
                
                <li class="tag tag-sm tag-default">第二新卒</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j109592.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="109592" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j83466.html" target="_blank" data-from=""><span class="block" itemprop="title">Webディレクター</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社FUCA</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">WEBディレクター大募集。大手・優良企業のWEB制作や企画立案に関わってみませんか？</h3>
        <p class="text-md mb15">【WEBディレクターとしてステップアップ！幅広い活躍ができるステージがあります！FUCAは柔軟な発想力と、新しいエネルギーを求めています！】〜社内の雰囲気はとてもアットホームですが、“仕事を楽しみ・手を抜かず・常にワンランク上を目指す”ことをモットーにしています〜当社は設立10年目にして大手企業のWEBサイト制･･･<a href="http://www.find-job.net/list/j83466.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j83466.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-4382f928.jpg" data-original="/img/com_pics/21472/t-4382f928.jpg" alt="株式会社FUCA - Webディレクター 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">WEBサイトなど広告制作物の企画・提案、クリエイティブ制作の進行管理などをお願いします。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p>1.<span itemprop="employmentType">正社員(中途)</span></p>
                <p>2.<span itemprop="employmentType">正社員(新卒)</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                <p>3.<span itemprop="employmentType">契約社員</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>1. 月給20万円 〜 45万円</p>
                <p>2. 月給20万円 〜 30万円</p>
                <p>3. 時給1500円 〜 2200円</p>
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">渋谷区：山手線 恵比寿駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
                <li class="tag tag-sm tag-default">正社員登用制度有り</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j83466.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="83466" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j110027.html" target="_blank" data-from=""><span class="block" itemprop="title">Webエンジニア</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社ニューユニークス</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">fun×いっぱい=UNIQUES</h3>
        <p class="text-md mb15">UNIQUEな価値を創りだし「心の豊かさ」を提供し続ける人、モノ、コトに対して新しい価値を見いだす事で新たな面白さ(UNIQUES)を創造する。わたしたちはUNIQUEな発想を通して今までにない「面白さ」そして「感動」を創りだし世の中に笑顔と心の豊かさを発信し続ける事を目指します。私たちの目指す企業UNIQUEな『価値』で顧･･･<a href="http://www.find-job.net/list/j110027.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j110027.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/s-9667c283.jpg" data-original="/img/com_pics/43761/s-9667c283.jpg" alt="株式会社ニューユニークス - Webエンジニア 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">Web制作、自社サイトシステム構築・コーディング・WordPress構築などをお任せします。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p><span itemprop="employmentType">正社員(中途)</span></p>
                
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>月給25万円 〜 65万円</p>
                
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">渋谷区：各線 恵比寿駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
                <li class="tag tag-sm tag-default">第二新卒</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j110027.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="110027" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j97596.html" target="_blank" data-from=""><span class="block" itemprop="title">Webデザイナー・コーダー[兼務]</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社アヴァンティ</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">多様な仕事を体験することで、
短期的に自分を成長させることができます。</h3>
        <p class="text-md mb15">アヴァンティは様々な業種のクライアントの仕事の依頼をいただきます。 クライアントの業界は違っても、Webに求められる『成果』達成に向けたソリューションの提供、ご納得をいただける納品物の提供というサービスの本質的な軸は変わりません。案件毎にクライアント業界の仕事、課題を俯瞰し、ビジネスモデルや構造を理解し･･･<a href="http://www.find-job.net/list/j97596.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j97596.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-b8dba650.jpg" data-original="/img/com_pics/39582/t-b8dba650.jpg" alt="株式会社アヴァンティ - Webデザイナー・コーダー[兼務] 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">主にWebサイト新規立ち上げ・リニューアル、運用に伴うデザイン・マークアップ全般をお任せします。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p><span itemprop="employmentType">正社員(中途)</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>月給18万円 〜 30万円</p>
                
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">新宿区：各線 飯田橋駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j97596.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="97596" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j109935.html" target="_blank" data-from=""><span class="block" itemprop="title">フロントエンド・エンジニア</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社ミツエーリンクス</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">【東京・仙台・大阪】新しい技術を積極的に
取り入れる環境で最新ノウハウに触れる！</h3>
        <p class="text-md mb15">「いろいろなWebサイトを作ってスキルを磨きたい！」 「さまざまなデバイス向けの案件に携わりたい！」 「数千ページを超える大規模サイトを手掛けたい！」 Webサイトを手掛ける人ならこう思っている人は多いはず。ミツエーリンクスには充実した案件環境があり、社内に在籍する多くのスペシャリストと共にやりがいのある案･･･<a href="http://www.find-job.net/list/j109935.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j109935.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-a69cd26f.jpg" data-original="/img/com_pics/6477/t-a69cd26f.jpg" alt="株式会社ミツエーリンクス - フロントエンド・エンジニア 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">さまざまなデバイス(PC、タブレット、スマートフォンなど)向けのWebサイトの設計・実装をお任せします。 </dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p>1.<span itemprop="employmentType">正社員(中途)</span></p>
                <p>2.<span itemprop="employmentType">アルバイト</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                <p>3.<span itemprop="employmentType">アルバイト</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>1. 月給27万円 〜 45万円</p>
                <p>2. 時給1010円 〜</p>
                <p>3. 時給1010円 〜</p>
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">東京都新宿区、仙台市青葉区、大阪市淀川区</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
                <li class="tag tag-sm tag-default">正社員登用制度有り</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j109935.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="109935" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j108836.html" target="_blank" data-from=""><span class="block" itemprop="title">サーバーサイドエンジニア</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社FiNC</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">世界を代表するウェルネスカンパニーを
本気で目指しています。</h3>
        <p class="text-md mb15">「医療費の高騰」「少子高齢化」「人口減少」「経済の縮小」など、現在私たちが抱えている問題に直面している国は、世界中に多くあります。この問題に対して、どの国も大きな課題意識を持ちながらも、いまだに明確な解決策を見いだすことができていません。私たちは、こうした事象の解決を目指した「予防」領域で、スマート･･･<a href="http://www.find-job.net/list/j108836.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j108836.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/s-e97b3319.jpg" data-original="/img/com_pics/43454/s-e97b3319.jpg" alt="株式会社FiNC - サーバーサイドエンジニア 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">ダイエット家庭教師の開発、ウェルネス経営事業「ウェルネスサーベイ」の開発などをお願いします。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p><span itemprop="employmentType">正社員(中途)</span></p>
                
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>年俸400万円 〜 1200万円</p>
                
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">中央区：各線 東銀座駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j108836.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="108836" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j107039.html" target="_blank" data-from=""><span class="block" itemprop="title">通販カタログのデザイナー</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社ミウ</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                <li class="tag tag-xsm tag-primary">制作実績</li>
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/08</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">あのコクヨと直取引だから、
「売れるカタログづくり」に企画から関われます。</h3>
        <p class="text-md mb15">最近、単調なDTP作業が多くなったり、案件が減少したりで「このままこの業界にいてもいいのだろうか？」と悩んだりしていませんか？私たちミウは、20年近くにわたり、コクヨグループ様と直取引を行ってきました。特に通販カタログ「カウネット」は、長年当社で企画・制作を担当し続けており、絶対的な信頼関係を構築するこ･･･<a href="http://www.find-job.net/list/j107039.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j107039.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/s-3bb3a436.jpg" data-original="/img/com_pics/42470/s-3bb3a436.jpg" alt="株式会社ミウ - 通販カタログのデザイナー 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">文具・オフィス用品の通販カタログ「カウネット」の紙面企画・デザインをお願いします。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p><span itemprop="employmentType">正社員(中途)</span></p>
                
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>月給26万5000円 〜 33万5000円</p>
                
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">目黒区：東横線 中目黒駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">髪型自由</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j107039.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="107039" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j109728.html" target="_blank" data-from=""><span class="block" itemprop="title">Webデザイナー・コーダー[兼務]</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社サンデーアーツ</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                <li class="tag tag-xsm tag-primary">制作実績</li>
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/07</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">月に1度のJavascript勉強会は大好評！
ワンランク上のデザイナーを目指せます！</h3>
        <p class="text-md mb15">従業員の定着率は94%！無理のないスケジュール管理の為、残業は、ほぼありません！業務後は勉強会に参加するも良し、プライベートを楽しむも良し、リフレッシュした気持ちで翌日の業務を迎えていただくことを大切に考えています。また社内全体のスキルアップを目的とし、月に1回、JavaScriptの勉強会を行っています。授業形･･･<a href="http://www.find-job.net/list/j109728.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j109728.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/t-ca62d824.jpg" data-original="/img/com_pics/40827/t-ca62d824.jpg" alt="株式会社サンデーアーツ - Webデザイナー・コーダー[兼務] 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">自社製システムパッケージ、及び関連システムのカスタマイズに伴うデザイン＆コーディングに携わっていただきます。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p>1.<span itemprop="employmentType">正社員(中途)</span></p>
                <p>2.<span itemprop="employmentType">アルバイト</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>1. 月給27万円 〜 60万円</p>
                <p>2. 時給1200円</p>
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">東京都千代田区、大阪市東淀川区</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
                <li class="tag tag-sm tag-default">経験者優遇</li>
                
                <li class="tag tag-sm tag-default">社会保険完備</li>
                
                <li class="tag tag-sm tag-default">女性も歓迎の仕事</li>
                
                <li class="tag tag-sm tag-default">学歴不問</li>
                
                <li class="tag tag-sm tag-default">服装自由</li>
                
                <li class="tag tag-sm tag-default">正社員登用制度有り</li>
                
                <li class="tag tag-sm tag-default">残業手当有り</li>
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j109728.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="109728" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    
        <!-- plan: s -->
<div class="box mb40 fj-search-contents-box " itemscope="itemscope" itemtype="http://schema.org/JobPosting">
    <div class="box-corp-head bg-yellow clearfix">
        <div class="pull-left">
            <h2 class="text-xlg pull-left">
                <a href="http://www.find-job.net/list/j105088.html" target="_blank" data-from=""><span class="block" itemprop="title">フロントエンド・バックエンド開発エンジニア</span><span class="name pull-left mr20" itemprop="hiringOrganization" itemscope="" itemtype="http://schema.org/Organization"><span itemprop="name">株式会社ニジボックス</span></span></a>
            <ul>
                <li class="tag tag-xsm tag-new">NEW</li>
                
            </ul>
            </h2>
        </div>
        
        <div class="text-md pull-right">更新日：<span itemprop="datePosted">2016/01/07</span></div>
        
    </div>
    <div class="box-corp-body">
        <h3 class="text-xlg mb10">ゲームも、ゲームじゃないものもあります。
最先端のWebエンジニア募集！
</h3>
        <p class="text-md mb15">今期のニジボックスの開発案件は、バリエーションの豊富さが自慢です。これまでのゲーム開発はもちろんのこと、ゲーム以外のアプリや企業のキャンペーンサイトの開発案件が着実に伸びています。ゲームも、ゲーム以外の開発も興味がある、webもネイティブもやってみたいという方にはもってこいの環境。たとえば、リクルート･･･<a href="http://www.find-job.net/list/j105088.html" target="_blank" data-from="" class="icon icon-arrow02-xs">了解更多</a></p>
        <a href="http://www.find-job.net/list/j105088.html" target="_blank" class="thumbnail-search" data-from=""><img src="/images/s-c98dded7.jpg" data-original="/img/com_pics/35116/s-c98dded7.jpg" alt="株式会社ニジボックス - フロントエンド・バックエンド開発エンジニア 写真" class="fj-lazyload block pull-left mr20 mb20" style="display: block;"></a>
        <div class="overview text-md pull-left mb20">
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作内容</dt>
                <dd class="pull-right" itemprop="description">キャンペーンサイト、生活系・教育系アプリ、ソーシャルゲーム等さまざまなジャンルのWEBサービスの開発をするお仕事です。</dd>
            </dl>
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">工作形式</dt>
                <dd class="pull-right">
                <p>1.<span itemprop="employmentType">アルバイト</span><img src="/images/begginer.png" alt="未経験可" class="icon-begginer"></p>
                <p>2.<span itemprop="employmentType">契約社員</span></p>
                
                </dd>
            </dl>

            
            <dl class="clearfix mb15">
                <dt class="text-sm text-center pull-left">薪水</dt>

                <dd class="pull-right">
                
                <p>1. 時給930円 〜</p>
                <p>2. 年俸330万円 〜 600万円</p>
                
                
                </dd>
            </dl>
            
            <dl class="clearfix mb20" itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place">
                <dt class="text-sm text-center pull-left">工作地点</dt>
                <dd class="pull-right" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <span itemprop="addressLocality">中央区：大江戸線 勝どき駅</span>
                </dd>
            </dl>
            <ul class="text-size-md">
                
            </ul>
        </div>
    </div>
    <div class="clear box-action box-md text-center border-t-gray">
        

        <a href="http://www.find-job.net/list/j105088.html" target="_blank" data-from="" class="btn btn-xlg btn-primary btn-horizontal inlin-block mr30">详细资料</a>

        
        
        
        <a href="http://www.find-job.net/fj/search.cgi#" data-action="search_logout" data-label="105088" class="fj-show-login-box btn btn-xlg btn-secondary btn-horizontal inlin-block">关注</a>
        
        
        
        
    </div>
</div>

    

    
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

