@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/bookmark.css">
@stop

@section('topic')

<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">気になるリスト</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-bookmark">
        <section>
            <h1>気になるリスト</h1>

            <p class="box-xlg mb10">スカウト機能利用時に「気になるリスト」に求人を追加すると、企業にあなたが気になっていることが伝わります。<br>求人を追加して、企業に興味を持っていることをアピールしましょう。</p>

            

            <div class="tab-wrap mb20">
                <ul class="tab clearfix">
                    <li class=""><a href="/my/bookmark?mode=you">我关注的企业</a></li>
                    <li class="current"><a href="/my/bookmark?mode=com">关注我的企业</a></li>
                    <li class=""><a href="/my/bookmark?mode=matching">互相关注的企业</a></li>
                </ul>

                
            </div>

            <form action="http://www.find-job.net/my/bookmark/bookmark.cgi" method="post" class="form" name="bookmark">
            <input type="hidden" name="do_delete" value="0">
            <input type="hidden" name="mode" value="you">
            <input type="hidden" name="uniq_key" value="11135c4e9e4605a8ba64af1b607157a7">
            <input type="hidden" name="from" value="137">

            <div class="box bg-yellow pt10 pb10 clearfix">
                <label class="text-md pull-left mt10 ml15 mr20"><input type="checkbox" id="allcheck" data-target="jobID" class="fj-check-all checkbox mr10 valign-middle">全选</label>
                <a href="javascript:void(0);" class="btn btn-md btn-primary mr10 pull-left fj-apply">一键应聘</a>
                
                <a href="javascript:void(0);" class="btn btn-md btn-default pull-left fj-delete">删除</a>
                
            </div>

            <ul class="box-list box-bookmark mb30 pt10">
            
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="110048"><input type="checkbox" name="jobID" value="110048" id="110048"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j110048.html?from=137"><img src="/images/common/sp-s-25a95b8f.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">ソフトウエアエンジニアリング株式会社</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j110048.html?from=137">新人研修プログラミング講師</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              業務委託<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"><br>
                              <br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              求人詳細参照
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">中央区、東京都内、他全国各地</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/21</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=110048&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="108579"><input type="checkbox" name="jobID" value="108579" id="108579"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j108579.html?from=137"><img src="/images/common/sp-s-510a0083.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">株式会社ディエスピー</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j108579.html?from=137">Webディレクター</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              1. 正社員(中途)<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"><br>
                              2. 正社員(中途)<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"><br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              1. 年俸360万円 〜<br>
                              2. 年俸300万円 〜<br>
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">千代田区：各線 神保町駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/21</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=108579&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="110057"><input type="checkbox" name="jobID" value="110057" id="110057"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j110057.html?from=137"><img src="/images/common/sp-s-de92bbf5.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        <span class="tag tag-xsm tag-new">NEW</span>
                        
                        <p class="text-black">NHN テコラス株式会社</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j110057.html?from=137">EC事業のコールセンタースタッフ</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              契約社員<br>
                              <br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              年俸300万円 〜<br>
                              
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">新宿区：副都心線都 東新宿駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/21</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=110057&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="105088"><input type="checkbox" name="jobID" value="105088" id="105088"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j105088.html?from=137"><img src="/images/common/sp-s-c98dded7.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">株式会社ニジボックス</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j105088.html?from=137">フロントエンド・バックエンド開発エンジニア</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              1. アルバイト<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"><br>
                              2. 契約社員<br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              1. 時給930円 〜<br>
                              2. 年俸330万円 〜 600万円<br>
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">中央区：大江戸線 勝どき駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/20</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=105088&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="98956"><input type="checkbox" name="jobID" value="98956" id="98956"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j98956.html?from=137"><img src="/images/common/sp-s-21d14cb3.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        <span class="tag tag-xsm tag-new">NEW</span>
                        
                        <p class="text-black">株式会社クライマークス</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j98956.html?from=137">Webデザイナー</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              正社員(中途)<br>
                              <br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              年俸320万円 〜 600万円<br>
                              
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">中央区：有楽町線 銀座一丁目駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/21</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=98956&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="109729"><input type="checkbox" name="jobID" value="109729" id="109729"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j109729.html?from=137"><img src="/images/common/sp-s-94e4be79.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        <span class="tag tag-xsm tag-new">NEW</span>
                        
                        <p class="text-black">株式会社サンデーアーツ</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j109729.html?from=137">Webプログラマ</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              1. 正社員(中途)<br>
                              2. アルバイト<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"><br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              1. 月給27万円 〜 60万円<br>
                              2. 時給1200円<br>
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">東京都千代田区、大阪市東淀川区</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/20</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=109729&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="104188"><input type="checkbox" name="jobID" value="104188" id="104188"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j104188.html?from=137"><img src="/images/common/sp-s-d2ba9630.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">北陸ゴム株式会社</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j104188.html?from=137">ファッションサイトの運営スタッフ・Web制作デザイナー[兼務]</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              正社員(中途)<br>
                              <br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              月給20万円 〜 30万円<br>
                              
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">大阪市北区：JR 大阪駅 </li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10"><span class="txt_red text-alert">終了2日前</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=104188&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="110000"><input type="checkbox" name="jobID" value="110000" id="110000"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j110000.html?from=137"><img src="/images/common/sp-s-ab04841b.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        <span class="tag tag-xsm tag-new">NEW</span>
                        
                        <p class="text-black">株式会社アイエフクリエイト</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j110000.html?from=137">Webクリエイター</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              正社員(中途)<br>
                              <br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              月給22万円 〜<br>
                              
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">立川市：中央線 立川駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10"><span class="txt_red text-alert">終了2日前</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=110000&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="109998"><input type="checkbox" name="jobID" value="109998" id="109998"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j109998.html?from=137"><img src="/images/common/sp-s-4f3720af.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        <span class="tag tag-xsm tag-new">NEW</span>
                        
                        <p class="text-black">株式会社バーディモバイル</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j109998.html?from=137">Webディレクター</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              1. 正社員(中途)<br>
                              2. 契約社員<br>
                              3. アルバイト<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"><br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              1. 月給25万円 〜<br>
                              2. 月給22万円 〜<br>
                              3. 時給1000円 〜<br>
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">渋谷区：JR 渋谷駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10"><span class="txt_red text-alert">終了2日前</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=109998&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="104908"><input type="checkbox" name="jobID" value="104908" id="104908"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j104908.html?from=137"><img src="/images/common/sp-s-6af31e2e.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">株式会社イー・ビジョン</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j104908.html?from=137">Webシステムエンジニア</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              1. 正社員(中途)<br>
                              2. 正社員(中途)<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"><br>
                              3. 契約社員<br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              1. 月給28万円 〜 60万円<br>
                              2. 月給22万円 〜 60万円<br>
                              3. 月給30万円 〜 60万円<br>
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">新宿区：JR 新宿駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/27</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=104908&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="92252"><input type="checkbox" name="jobID" value="92252" id="92252"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j92252.html?from=137"><img src="/images/common/sp-s-a5b6a64d.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">株式会社コロプラ </p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j92252.html?from=137">Webエンジニア</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              正社員(中途)<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"><br>
                              <br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              年俸300万円 〜 960万円<br>
                              
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">渋谷区：JR 恵比寿駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/26</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=92252&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="104725"><input type="checkbox" name="jobID" value="104725" id="104725"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j104725.html?from=137"><img src="/images/common/sp-s-dd453660.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">BASE株式会社</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j104725.html?from=137">EC構築サービス「BASE」のWebエンジニア</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              正社員(中途)<br>
                              <br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              年俸350万円 〜 900万円<br>
                              
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">渋谷区：JR 渋谷駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/20</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=104725&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="74302"><input type="checkbox" name="jobID" value="74302" id="74302"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j74302.html?from=137"><img src="/images/common/sp-s-dbf4571d.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">株式会社トライブ</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j74302.html?from=137">グラフィックデザイナー</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              1. 正社員(中途)<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"><br>
                              2. 派遣社員<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"><br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              1. 月給25万円 〜 50万円<br>
                              2. 時給1500円 〜 3000円<br>
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">東京都、神奈川県、千葉県</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10"><span class="txt_red text-alert">終了1日前</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=74302&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="106575"><input type="checkbox" name="jobID" value="106575" id="106575"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j106575.html?from=137"><img src="/images/common/sp-s-f8f93b11.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">Retty株式会社</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j106575.html?from=137">Webアプリケーションエンジニア</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              正社員(中途)<br>
                              <br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              年俸400万円 〜 800万円<br>
                              
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">品川区：山手線 五反田駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10"><span class="txt_red text-alert">終了2日前</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=106575&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="84353"><input type="checkbox" name="jobID" value="84353" id="84353"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j84353.html?from=137"><img src="/images/common/sp-s-7863f628.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">株式会社ぐるなび </p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j84353.html?from=137">Webディレクター</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              正社員(中途)<br>
                              <br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              年俸400万円 〜 600万円<br>
                              
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">千代田区：各線 日比谷駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/27</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=84353&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="107553"><input type="checkbox" name="jobID" value="107553" id="107553"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j107553.html?from=137"><img src="/images/common/sp-s-71abc2fb.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">ネットイヤーグループ株式会社</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j107553.html?from=137">データマーケティングスペシャリスト</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              正社員(中途)<br>
                              <br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              年俸600万円 〜 800万円<br>
                              
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">中央区：有楽町線 新富町駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/24</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=107553&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="109996"><input type="checkbox" name="jobID" value="109996" id="109996"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j109996.html?from=137"><img src="/images/common/sp-s-0ba34e53.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        
                        
                        <p class="text-black">株式会社パブリックデザイン</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j109996.html?from=137">HTMLコーダー</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              1. 正社員(中途)<br>
                              2. 契約社員<br>
                              3. アルバイト<br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              1. 月給25万円 〜 35万円<br>
                              2. 月給20万円 〜 30万円<br>
                              3. 時給1000円 〜 1500円<br>
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">千代田区：各線 九段下駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10"><span class="txt_red text-alert">終了2日前</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=109996&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="109728"><input type="checkbox" name="jobID" value="109728" id="109728"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j109728.html?from=137"><img src="/images/common/sp-s-69b2dd6a.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        <span class="tag tag-xsm tag-new">NEW</span>
                        
                        <p class="text-black">株式会社サンデーアーツ</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j109728.html?from=137">Webデザイナー・コーダー[兼務]</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              1. 正社員(中途)<br>
                              2. アルバイト<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"><br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              1. 月給27万円 〜 60万円<br>
                              2. 時給1200円<br>
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">東京都千代田区、大阪市東淀川区</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/20</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=109728&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
                <li class="box-sm clearfix">
                    <div class="checkbox"><label for="109864"><input type="checkbox" name="jobID" value="109864" id="109864"></label></div>
                    <div class="thumbnail"><a href="http://www.find-job.net/list/j109864.html?from=137"><img src="/images/common/sp-s-89028788.jpg" alt="No Image"></a></div>
                    <div class="detail">
                        <span class="tag tag-xsm tag-new">NEW</span>
                        
                        <p class="text-black">メディアアクティブ株式会社</p>
                        <p class="text-lg mb10"><a href="http://www.find-job.net/list/j109864.html?from=137">Web／UIデザイナー</a></p>
                        <ul class="clearfix">
                            <li class="icon icon-status-xs pull-left">
                              正社員(中途)<br>
                              <br>
                              <br>
                            </li>
                            <li class="icon icon-salary-xs pull-left">
                            
                              月給23万円 〜 35万円<br>
                              
                              
                            
                            </li>
                            <li class="icon icon-location-xs pull-left">大田区：京浜東北線 大森駅</li>
                       </ul>
                    </div>
                    <div class="button">
                        <p class="text-md text-right text-bold mb10">招聘截至日 : <span>2016/01/28</span></p>
                        
                          
                            <a href="https://www.find-job.net/my/apply.cgi?jobID=109864&amp;from=137" target="_blank" class="btn btn-md btn-primary block mb10">应聘</a>
                          
                        
                        
                    </div>
                </li>
            
            
            
            </ul>
            </form>

            <p class="box box-secondary box-sm text-md mb50 ml30 mr30">気になるリストに追加した求人は、応募をするか、招聘截至日から3ヶ月経過すると自動的に削除されます。<br>「スカウトメールを受け取る」に設定している場合、気になるリストに追加した企業に、あなたのWeb履歴書（匿名）が優先的に公開されます。</p>
        </section>

        
        <section>
            <h2 class="h2 mb10">在意的名单推荐从招聘</h2>
            <div class="box-job-col4-wrap clearfix">
                
                  <div class="box-job" onclick="window.open(&#39;/list/j104626.html?from=147&#39;);return false;">
    <div class="thumbnail-sm"><img src="/images/common/d-38dda3dc.jpg" alt="株式会社デクー"></div>
        <div class="box-sm text-md text-left">
            <div class="box-job-info text-center">
                <a href="http://www.find-job.net/list/j104626.html?from=147" target="_blank">
                    <p class="text-md text-black">株式会社デクー</p>
                    <p class="mt5">スマートフォンエンジニア </p>
                </a>
            </div>
            <ul>
                <li class="icon icon-status-xs">正社員(中途)</li>
                <li class="icon icon-salary-xs text-red text-bold">月給30万円 〜 60万円</li>
                <li class="icon icon-location-xs" title="渋谷区：各線 渋谷駅">渋谷区：各線 渋谷駅</li>
           </ul>
       </div>
</div>

                
                  <div class="box-job" onclick="window.open(&#39;/list/j106415.html?from=147&#39;);return false;">
    <div class="thumbnail-sm"><img src="/images/common/d-fe290473.jpg" alt="GameBank株式会社"></div>
        <div class="box-sm text-md text-left">
            <div class="box-job-info text-center">
                <a href="http://www.find-job.net/list/j106415.html?from=147" target="_blank">
                    <p class="text-md text-black">GameBank株式会社</p>
                    <p class="mt5">モバイルオンラインゲームのプランナー</p>
                </a>
            </div>
            <ul>
                <li class="icon icon-status-xs">正社員(中途)</li>
                <li class="icon icon-salary-xs text-red text-bold">年俸360万円 〜</li>
                <li class="icon icon-location-xs" title="港区：千代田線 乃木坂...">港区：千代田線 乃木坂...</li>
           </ul>
       </div>
</div>

                
                  <div class="box-job" onclick="window.open(&#39;/list/j106518.html?from=147&#39;);return false;">
    <div class="thumbnail-sm"><img src="/images/common/d-4cb4463f.jpg" alt="アマツ株式会社"></div>
        <div class="box-sm text-md text-left">
            <div class="box-job-info text-center">
                <a href="http://www.find-job.net/list/j106518.html?from=147" target="_blank">
                    <p class="text-md text-black">アマツ株式会社</p>
                    <p class="mt5">恋愛・乙女ゲームのシナリオライター</p>
                </a>
            </div>
            <ul>
                <li class="icon icon-status-xs">正社員(中途)</li>
                <li class="icon icon-salary-xs text-red text-bold">月給18万円 〜 36万円</li>
                <li class="icon icon-location-xs" title="渋谷区、在宅">渋谷区、在宅</li>
           </ul>
       </div>
</div>

                
                  <div class="box-job" onclick="window.open(&#39;/list/j107059.html?from=147&#39;);return false;">
    <div class="thumbnail-sm"><img src="/images/common/d-d8dab0bc.jpg" alt="サクラサクマーケティング株式会社"></div>
        <div class="box-sm text-md text-left">
            <div class="box-job-info text-center">
                <a href="http://www.find-job.net/list/j107059.html?from=147" target="_blank">
                    <p class="text-md text-black">サクラサクマーケティング株式会社</p>
                    <p class="mt5">アシスタントエンジニア</p>
                </a>
            </div>
            <ul>
                <li class="icon icon-status-xs">正社員(中途)<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"></li>
                <li class="icon icon-salary-xs text-red text-bold">月給22万5000円 〜</li>
                <li class="icon icon-location-xs" title="渋谷区：各線 恵比寿駅">渋谷区：各線 恵比寿駅</li>
           </ul>
       </div>
</div>

                
                  <div class="box-job" onclick="window.open(&#39;/list/j108265.html?from=147&#39;);return false;">
    <div class="thumbnail-sm"><img src="/images/common/d-57990a47.jpg" alt="合同会社リベラルアーツ"></div>
        <div class="box-sm text-md text-left">
            <div class="box-job-info text-center">
                <a href="http://www.find-job.net/list/j108265.html?from=147" target="_blank">
                    <p class="text-md text-black">合同会社リベラルアーツ</p>
                    <p class="mt5">プログラマー</p>
                </a>
            </div>
            <ul>
                <li class="icon icon-status-xs">正社員(中途)<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"></li>
                <li class="icon icon-salary-xs text-red text-bold">月給25万円 〜</li>
                <li class="icon icon-location-xs" title="大阪市西区、他東京23...">大阪市西区、他東京23...</li>
           </ul>
       </div>
</div>

                
                  <div class="box-job" onclick="window.open(&#39;/list/j108333.html?from=147&#39;);return false;">
    <div class="thumbnail-sm"><img src="/images/common/d-092f885b.jpg" alt="アップ・クルセーダーズ株式会社"></div>
        <div class="box-sm text-md text-left">
            <div class="box-job-info text-center">
                <a href="http://www.find-job.net/list/j108333.html?from=147" target="_blank">
                    <p class="text-md text-black">アップ・クルセーダーズ株式会社</p>
                    <p class="mt5">ゲームプランナー</p>
                </a>
            </div>
            <ul>
                <li class="icon icon-status-xs">正社員(中途)</li>
                <li class="icon icon-salary-xs text-red text-bold">年俸350万円 〜 700万円</li>
                <li class="icon icon-location-xs" title="渋谷区：各線 恵比寿駅">渋谷区：各線 恵比寿駅</li>
           </ul>
       </div>
</div>

                
                  <div class="box-job" onclick="window.open(&#39;/list/j13110.html?from=147&#39;);return false;">
    <div class="thumbnail-sm"><img src="/images/common/d-70a62ccf.jpg" alt="有限会社バイナリーラブ"></div>
        <div class="box-sm text-md text-left">
            <div class="box-job-info text-center">
                <a href="http://www.find-job.net/list/j13110.html?from=147" target="_blank">
                    <p class="text-md text-black">有限会社バイナリーラブ</p>
                    <p class="mt5">開発エンジニア</p>
                </a>
            </div>
            <ul>
                <li class="icon icon-status-xs">正社員(中途)<img src="/images/common/begginer.png" alt="未経験可" class="icon-begginer"></li>
                <li class="icon icon-salary-xs text-red text-bold">月給25万円 〜 40万円</li>
                <li class="icon icon-location-xs" title="渋谷区：山手線 渋谷駅">渋谷区：山手線 渋谷駅</li>
           </ul>
       </div>
</div>

                
                  <div class="box-job" onclick="window.open(&#39;/list/j109847.html?from=147&#39;);return false;">
    <div class="thumbnail-sm"><img src="/images/common/d-8e49416f.jpg" alt="アクセルマーク株式会社"></div>
        <div class="box-sm text-md text-left">
            <div class="box-job-info text-center">
                <a href="http://www.find-job.net/list/j109847.html?from=147" target="_blank">
                    <p class="text-md text-black">アクセルマーク株式会社</p>
                    <p class="mt5">コーダー</p>
                </a>
            </div>
            <ul>
                <li class="icon icon-status-xs">契約社員</li>
                <li class="icon icon-salary-xs text-red text-bold">月給21万円 〜 25万円</li>
                <li class="icon icon-location-xs" title="中野区：各線 中野坂上...">中野区：各線 中野坂上...</li>
           </ul>
       </div>
</div>

                
            </div>
        </section>
        

    </div><!--container-->
</main>
@stop
