@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/index.css">
@stop

@section('container')
    @include('layouts._message')
    <div class="container">

        <p class="text-sm">
            Web业界的优良企业的转职·招人信息满载。转职咨询和非公开招人的介绍，履历书和职务履历书的删改等，各种转职支援服务也提供中。要是Web业界的转职Find Job！
        </p>

        <section>
            <h2 class="h2 icon icon-search-lg pull-left mt30 mb10">寻找招人信息</h2>
            <p class="pull-right text-md mt40"><a href="http://www.find-job.net/fj/search.html"
                                                  class="fj-top-search-detail">＋详细地找</a></p>
            <div class="container clear mb40">
                <div class="box box-default box-md">
                    <form name="search_form" action="http://www.find-job.net/fj/search.cgi"
                          class="form form-top-search">
                        <div id="dropdownShokushu" class="fj-dropdown-toggle select pull-left">
                            <span class="link link-arrow03-xs"></span>

                            <div class="fj-dropdown-menu select-option category text-md hidden"
                                 aria-labelledby="dropdownShokushu">
                                <dl class="pull-left">
                                    <dt class="text-bold ">
                                        <a class="fj-top-search-checkCategory" data-category="designer"
                                           href="http://www.find-job.net/#">设计师・创作者系</a>
                                    </dt>
                                    <dd class="pl20">
                                        <a class="fj-top-search-checkbox" data-category="designer"
                                           href="http://www.find-job.net/#">平面设计师・创作者</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="5">
                                    </dd>
                                    <dd class="pl20">
                                        <a class="fj-top-search-checkbox" data-category="designer"
                                           href="http://www.find-job.net/#">Web设计师・HTML工程师</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="205">
                                    </dd>
                                    <dt class="mt10 text-bold">
                                        <a class="fj-top-search-checkCategory" data-category="engineer"
                                           href="http://www.find-job.net/#">工程师系</a>
                                    </dt>
                                    <dd class="pl20">
                                        <a class="fj-top-search-checkbox" data-category="engineer"
                                           href="http://www.find-job.net/#">Web工程师・Web程序员</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="203">
                                    </dd>
                                    <dd class="pl20">
                                        <a class="fj-top-search-checkbox" data-category="engineer"
                                           href="http://www.find-job.net/#">智能手机工程师</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="207">
                                    </dd>
                                    <dd class="pl20">
                                        <a class="fj-top-search-checkbox" data-category="engineer"
                                           href="http://www.find-job.net/#">网络工程师・服务器工程师</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="204">
                                    </dd>
                                    <dd class="pl20">
                                        <a class="fj-top-search-checkbox" data-category="engineer"
                                           href="http://www.find-job.net/#">工程师 其他</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="2">
                                    </dd>

                                </dl>
                                <dl class="pull-right">
                                    <dt class="text-bold">
                                        <a class="fj-top-search-checkbox" href="http://www.find-job.net/#">Web总监・Webプロデューサー</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="1">
                                    </dt>
                                    <dt class="mt10 text-bold">
                                        <a class="fj-top-search-checkCategory" data-category="office"
                                           href="http://www.find-job.net/#">営業・事務・管理系</a>
                                    </dt>
                                    <dd class="pl20">
                                        <a class="fj-top-search-checkbox" data-category="office"
                                           href="http://www.find-job.net/#">用户支持</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="3">
                                    </dd>
                                    <dd class="pl20">
                                        <a class="fj-top-search-checkbox" data-category="office"
                                           href="http://www.find-job.net/#">一般事務・営業事務</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="4">
                                    </dd>
                                    <dd class="pl20">
                                        <a class="fj-top-search-checkbox" data-category="office"
                                           href="http://www.find-job.net/#">営業・企画営業</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="6">
                                    </dd>
                                    <dd class="pl20">
                                        <a class="fj-top-search-checkbox" data-category="office"
                                           href="http://www.find-job.net/#">人事、経理、広報、法務</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="201">
                                    </dd>
                                    <dt class="mt10 text-bold">
                                        <a class="fj-top-search-checkbox" href="http://www.find-job.net/#">其他</a>
                                        <input class="hidden" type="checkbox" name="shokushu" value="200">
                                    </dt>
                                </dl>
                            </div>

                            <p class="fj-text-shokushu">职位</p>
                        </div>
                        <div id="dropdownKinmuchi" class="fj-dropdown-toggle select pull-left">
                            <span class="link link-arrow03-xs"></span>
                            <ul class="fj-dropdown-menu select-option location text-md hidden"
                                aria-labelledby="dropdownKinmuchi">
                                @foreach($kinmuchis as $kinmuchi)
                                    <li class="pull-left">
                                        <a class="fj-top-search-checkbox" href="http://www.find-job.net/#">{{$kinmuchi->name}}</a>
                                        <input class="hidden" type="checkbox" name="kinmuchi" value="{{$kinmuchi->id}}">
                                    </li>
                                @endforeach


                            </ul>
                            <p class="fj-text-kinmuchi">工作地点</p>
                        </div>
                        <div id="dropdownKeitai" class="fj-dropdown-toggle select pull-left">
                            <span class="link link-arrow03-xs"></span>
                            <ul class="fj-dropdown-menu select-option text-md hidden" aria-labelledby="dropdownKeitai">
                                @foreach($keitais as $keitai)
                                <li>
                                    <a class="fj-top-search-checkbox" href="http://www.find-job.net/#">{{$keitai->name}}</a>
                                    <input class="hidden" type="checkbox" name="keitai" value="{{$keitai->id}}">
                                </li>
                                @endforeach
                            </ul>
                            <p class="fj-text-keitai">雇佣方式</p>
                        </div>
                        <input type="hidden" name="from" value="23">
                        <input type="hidden" name="category" value="0">
                        <input type="hidden" name="ky_kind" value="0">
                        <input type="hidden" name="ky_from" value="0">
                        <input type="hidden" name="do_search" value="1">
                        <input type="text" name="keyword" class="fj-auto-complete pull-left ui-autocomplete-input"
                               placeholder="关键字" autocomplete="off">
                        <input type="submit" value="检索" class="btn btn-lg text-lg btn-primary pull-left">
                    </form>
                </div>

            </div>
        </section>


        <main>
            <div class="col-main pull-left">

                <section>
                    <h2 class="h2 title-main-top icon-arrival-lg mb10">最新职位</h2>
                    <div class="fj-recently-update-box box-job-wrap clearfix">
                        <div class="box-job" onclick="window.open(&#39;/list/j98975.html?from=136&#39;);return false;">
                            <div class="thumbnail-sm"><img src="/images/d-d1230d3e.jpg" alt="株式会社グミ"></div>
                            <div class="box-sm text-md text-left">
                                <div class="box-job-info text-center">
                                    <a href="http://www.find-job.net/list/j98975.html?from=136" target="_blank">
                                        <p class="text-md text-black">株式会社グミ</p>
                                        <p class="mt5">Webデザイナー</p>
                                    </a>
                                </div>
                                <ul>
                                    <li class="icon icon-status-xs">正社員(中途)</li>
                                    <li class="icon icon-salary-xs text-red text-bold">月給20万円 〜</li>
                                    <li class="icon icon-location-xs">渋谷区：JR 恵比寿駅</li>
                                </ul>
                            </div>
                        </div>


                        <div class="box-job" onclick="window.open(&#39;/list/j102370.html?from=136&#39;);return false;">
                            <div class="thumbnail-sm"><img src="/images/d-f0293377.jpg" alt="株式会社BEFOOL"></div>
                            <div class="box-sm text-md text-left">
                                <div class="box-job-info text-center">
                                    <a href="http://www.find-job.net/list/j102370.html?from=136" target="_blank">
                                        <p class="text-md text-black">株式会社BEFOOL</p>
                                        <p class="mt5">スマートフォン向けクライアントエンジニア</p>
                                    </a>
                                </div>
                                <ul>
                                    <li class="icon icon-status-xs">正社員(中途)</li>
                                    <li class="icon icon-salary-xs text-red text-bold">月給25万円 〜 45万円</li>
                                    <li class="icon icon-location-xs">渋谷区：副都心線 北参道駅</li>
                                </ul>
                            </div>
                        </div>


                        <div class="box-job" onclick="window.open(&#39;/list/j110043.html?from=136&#39;);return false;">
                            <div class="thumbnail-sm"><img src="/images/d-210288ba.jpg" alt="株式会社グレイビートレイン"></div>
                            <div class="box-sm text-md text-left">
                                <div class="box-job-info text-center">
                                    <a href="http://www.find-job.net/list/j110043.html?from=136" target="_blank">
                                        <p class="text-md text-black">株式会社グレイビートレイン</p>
                                        <p class="mt5">フロントエンドエンジニア</p>
                                    </a>
                                </div>
                                <ul>
                                    <li class="icon icon-status-xs">正社員(中途)</li>
                                    <li class="icon icon-salary-xs text-red text-bold">月給20万円 〜 35万円</li>
                                    <li class="icon icon-location-xs">渋谷区：山手線 恵比寿駅</li>
                                </ul>
                            </div>
                        </div>


                        <div class="box-job" onclick="window.open(&#39;/list/j110039.html?from=136&#39;);return false;">
                            <div class="thumbnail-sm"><img src="/images/d-f0293377.jpg" alt="株式会社BEFOOL"></div>
                            <div class="box-sm text-md text-left">
                                <div class="box-job-info text-center">
                                    <a href="http://www.find-job.net/list/j110039.html?from=136" target="_blank">
                                        <p class="text-md text-black">株式会社BEFOOL</p>
                                        <p class="mt5">スマートフォン向けweb/サーバーサイドエンジニア</p>
                                    </a>
                                </div>
                                <ul>
                                    <li class="icon icon-status-xs">正社員(中途)</li>
                                    <li class="icon icon-salary-xs text-red text-bold">月給25万円 〜 40万円</li>
                                    <li class="icon icon-location-xs">渋谷区：副都心線 北参道駅</li>
                                </ul>
                            </div>
                        </div>


                        <div class="box-job" onclick="window.open(&#39;/list/j51958.html?from=136&#39;);return false;">
                            <div class="thumbnail-sm"><img src="/images/d-ba90af58.jpg" alt="株式会社彩凛システム"></div>
                            <div class="box-sm text-md text-left">
                                <div class="box-job-info text-center">
                                    <a href="http://www.find-job.net/list/j51958.html?from=136" target="_blank">
                                        <p class="text-md text-black">株式会社彩凛システム</p>
                                        <p class="mt5">Webプログラマー</p>
                                    </a>
                                </div>
                                <ul>
                                    <li class="icon icon-status-xs">正社員(中途)</li>
                                    <li class="icon icon-salary-xs text-red text-bold">月給19万円 〜 25万円</li>
                                    <li class="icon icon-location-xs">中央区：京阪本線 天満橋駅</li>
                                </ul>
                            </div>
                        </div>


                        <div class="box-job" onclick="window.open(&#39;/list/j110038.html?from=136&#39;);return false;">
                            <div class="thumbnail-sm"><img src="/images/d-eefdc722.jpg" alt="株式会社エクスコア"></div>
                            <div class="box-sm text-md text-left">
                                <div class="box-job-info text-center">
                                    <a href="http://www.find-job.net/list/j110038.html?from=136" target="_blank">
                                        <p class="text-md text-black">株式会社エクスコア</p>
                                        <p class="mt5">サービス開発エンジニア</p>
                                    </a>
                                </div>
                                <ul>
                                    <li class="icon icon-status-xs">正社員(中途)</li>
                                    <li class="icon icon-salary-xs text-red text-bold">月給20万円 〜 50万円</li>
                                    <li class="icon icon-location-xs">渋谷区、在宅</li>
                                </ul>
                            </div>
                        </div>


                        <div class="box-job" onclick="window.open(&#39;/list/j109574.html?from=136&#39;);return false;">
                            <div class="thumbnail-sm"><img src="/images/d-38dda3dc.jpg" alt="株式会社デクー"></div>
                            <div class="box-sm text-md text-left">
                                <div class="box-job-info text-center">
                                    <a href="http://www.find-job.net/list/j109574.html?from=136" target="_blank">
                                        <p class="text-md text-black">株式会社デクー</p>
                                        <p class="mt5">自社サービスのインフラエンジニア</p>
                                    </a>
                                </div>
                                <ul>
                                    <li class="icon icon-status-xs">正社員(中途)</li>
                                    <li class="icon icon-salary-xs text-red text-bold">月給35万円 〜 60万円</li>
                                    <li class="icon icon-location-xs">渋谷区：各線 渋谷駅</li>
                                </ul>
                            </div>
                        </div>


                        <div class="box-job" onclick="window.open(&#39;/list/j109052.html?from=136&#39;);return false;">
                            <div class="thumbnail-sm"><img src="/images/d-fab5fe3e.jpg" alt="ミューズコー株式会社"></div>
                            <div class="box-sm text-md text-left">
                                <div class="box-job-info text-center">
                                    <a href="http://www.find-job.net/list/j109052.html?from=136" target="_blank">
                                        <p class="text-md text-black">ミューズコー株式会社</p>
                                        <p class="mt5">Webサービスプランナー</p>
                                    </a>
                                </div>
                                <ul>
                                    <li class="icon icon-status-xs">正社員(中途)</li>
                                    <li class="icon icon-salary-xs text-red text-bold">年俸420万円 〜 600万円</li>
                                    <li class="icon icon-location-xs">千代田区：各線 九段下駅</li>
                                </ul>
                            </div>
                        </div>


                        <div class="box-job" onclick="window.open(&#39;/list/j109050.html?from=136&#39;);return false;">
                            <div class="thumbnail-sm"><img src="/images/d-fab5fe3e.jpg" alt="ミューズコー株式会社"></div>
                            <div class="box-sm text-md text-left">
                                <div class="box-job-info text-center">
                                    <a href="http://www.find-job.net/list/j109050.html?from=136" target="_blank">
                                        <p class="text-md text-black">ミューズコー株式会社</p>
                                        <p class="mt5">スマートフォンエンジニア</p>
                                    </a>
                                </div>
                                <ul>
                                    <li class="icon icon-status-xs">正社員(中途)</li>
                                    <li class="icon icon-salary-xs text-red text-bold">年俸420万円 〜 840万円</li>
                                    <li class="icon icon-location-xs">千代田区：各線 九段下駅</li>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <a href="http://www.find-job.net/fj/search.cgi?keyword=php&amp;from=109&amp;history_id=66655998&amp;order=up&amp;order_ad=desc"
                       class="fj-recently-update-link link-more link-arrow-md mb40">新着求人をすべて見る</a>

                </section>

                <section>
                    <div class="box box-md box-support">
                        <h2 class="h2 text-normal mb20 pb10">支持服务</h2>
                        <div class="clearfix mb20">
                            <p class="read pull-left">業界・職種専任のキャリアアドバイザーが<br>あなたの転職活動を振るサポートいたします。</p>
                            <img src="/images/img_top_logo.png" alt="find job ! の人材紹介" class="pull-right">
                        </div>
                        <div class="clearfix mb20">
                            <div class="arrow">
                                <img src="/images/img_support01.jpg" alt="">
                                <p class="text-sm">専任のキャリアアドバイザーが1対1で面談し、キャリアプランを一緒に考えます。</p>
                            </div>
                            <div class="arrow">
                                <img src="/images/img_support02.jpg" alt="">
                                <p class="text-sm">職務経歴書の添削や、模擬面接の実施などで、選考通過率ＵＰ！</p>
                            </div>
                            <div class="arrow last">
                                <img src="/images/img_support03.jpg" alt="">
                                <p class="text-sm">年収交渉も代行。「Find Job !の人材紹介」なら約80％が年収UPに成功!</p>
                            </div>
                        </div>
                        <p class="link-support text-right"><a href="http://www.find-job.net/cp/introduce.pl?r=14267"
                                                              target="_blank"
                                                              class="link link-arrow-md">転職支援サービスの詳細はこちら</a>
                        </p>
                    </div>
                </section>

            </div><!--col-main-->
        </main>

        <div class="col-side pull-right">


            <div class="mb40">
                <a href="my/regist/regist"
                   class="btn btn-xxlg btn-primary block mb20">会员注册（免费）</a>
                <a href="http://www.find-job.net/login_oauth.pl?p=f&amp;a=l&amp;u=1&amp;next_url=%2F"
                   class="btn btn-xxlg btn-facebook icon-facebook-lg block">facebookで会員登録</a>
            </div>


            <section>
                <div class="list-side mb40">
                    <h2 class="h3 mb10">知名企业<span class="head-sub text-md">〜发现喜欢的企业</span></h2>
                    <div class="box-list text-md border-t-gray">


                        <a href="http://www.find-job.net/connect/uuum/" class="text-black">
                            <dl class="clearfix text-left">
                                <dt class="thumbnail-xs pull-left"><img src="/images/14502360590945170.jpeg"
                                                                        alt="UUUM株式会社"></dt>
                                <dd class="pull-left"><span class="text-link text-bold text-ellipsis">UUUM株式会社</span>
                                    コドモゴコロだらけ！？ トップYouTuberが所属する「UUUM」社に潜入リポート！
                                </dd>
                            </dl>
                        </a>

                        <a href="http://www.find-job.net/connect/mediba/" class="text-black">
                            <dl class="clearfix text-left">
                                <dt class="thumbnail-xs pull-left"><img src="/images/14435113048968911.jpeg"
                                                                        alt="株式会社mediba"></dt>
                                <dd class="pull-left"><span class="text-link text-bold text-ellipsis">株式会社mediba</span>
                                    今のmedibaはハッピーオーラ満点！ ヒカリエ31階で、革命が起きていました。
                                </dd>
                            </dl>
                        </a>

                        <a href="http://www.find-job.net/connect/studyplus/" class="text-black">
                            <dl class="clearfix text-left">
                                <dt class="thumbnail-xs pull-left"><img src="/images/14401371761934860.jpeg"
                                                                        alt="スタディプラス株式会社"></dt>
                                <dd class="pull-left"><span class="text-link text-bold text-ellipsis">スタディプラス株式会社</span>
                                    学習する人が集まるプラットフォーム。 スタディプラスの考える「教育から学習」へのシフトとは？
                                </dd>
                            </dl>
                        </a>

                        <a href="http://www.find-job.net/connect/moneyforward/" class="text-black">
                            <dl class="clearfix text-left">
                                <dt class="thumbnail-xs pull-left"><img src="/images/14393703846517601.jpeg"
                                                                        alt="株式会社マネーフォワード"></dt>
                                <dd class="pull-left"><span
                                            class="text-link text-bold text-ellipsis">株式会社マネーフォワード</span>
                                    エンジニアドリブンどころじゃなかった！「全員ドリブン」なマネーフォワードの日常。
                                </dd>
                            </dl>
                        </a>

                        <a href="http://www.find-job.net/connect/gamewith/" class="text-black">
                            <dl class="clearfix text-left">
                                <dt class="thumbnail-xs pull-left"><img src="/images/14386932369702590.png"
                                                                        alt="株式会社GameWith"></dt>
                                <dd class="pull-left"><span
                                            class="text-link text-bold text-ellipsis">株式会社GameWith</span>
                                    ゲームプレイヤーを「憧れの職業」にしたい！ GameWithが目指す世界観が新しすぎる。
                                </dd>
                            </dl>
                        </a>

                    </div>
                    <a href="http://www.find-job.net/connect/" class="link-more link-arrow-md">更多</a>
                </div>
            </section>

            <section>
                <div class="list-side list-guide mb40">
                    <h2 class="h3 mb10">求职向导</h2>
                    <div class="box-list text-md border-t-gray">
                        <a href="http://www.find-job.net/support/resume/" class="text-black">
                            <dl class="clearfix text-left">
                                <dt class="pull-left"><img src="/images/img_guide01.png" alt="No Image"></dt>
                                <dd class="pull-left"><span class="text-md text-bold text-link">Web履歴書コーチ</span><br>効果的な履歴書や自己PRの書き方を
                                    チェック！
                                </dd>
                            </dl>
                        </a>
                        <a href="http://www.find-job.net/support/interview_coach/" class="text-black">
                            <dl class="clearfix text-left">
                                <dt class="pull-left"><img src="/images/img_guide02.png" alt="No Image"></dt>
                                <dd class="pull-left"><span class="text-md text-bold text-link">面接コーチ</span><br>面接の基本から、雇用形態別・職種別
                                    の攻略法までお教えします。
                                </dd>
                            </dl>
                        </a>
                        <a href="http://www.find-job.net/support/" class="text-black">
                            <dl class="clearfix text-left ">
                                <dt class="pull-left"><img src="/images/img_guide03.png" alt="No Image"></dt>
                                <dd class="pull-left"><span class="text-md text-bold text-link">仕事探しFAQ</span><br>給与やマナーなど仕事探しに関する
                                    疑問・質問にお答えします。
                                </dd>
                            </dl>
                        </a>
                    </div>
                </div>
            </section>


            <section>
                <div class="list-side mb40">
                    <h2 class="h4 mb10">転職サイトFind Job!の求人情報について</h2>
                    <dl class="border-t-gray text-md pt10 pb10">
                        <dt class="text-bold">【転職者の方へ】</dt>
                        <dd>万が一、求人掲載内容が事実と異なる場合は、<a href="http://www.find-job.net/help/user_report.pl">こちら</a>までお問い合わせください
                        </dd>
                    </dl>
                    <dl class="border-t-gray text-md pt10 pb10">
                        <dt class="text-bold">【企業様へ】</dt>
                        <dd>転職サイトFind Job !への広告掲載のお問い合わせと資料請求は<a href="http://www.find-job.net/com_help/ask.cgi">こちら</a>までお願いします
                        </dd>
                    </dl>
                </div>
            </section>


        </div><!--col-side-->


    </div><!--container-->
@stop

@section('footer')
    <section>
        <div class="discription container mb20">
            <h2 class="h2 border-b-gray text-normal mb10 pb10">庭燎・求贤 TL-Job !</h2>
            <p class="text-sm">
                是Web业界最大级的转职·招人信息网站。每天用更新送交Web工程师·Web设计师·Web导演·Web营销的新到的东西招人信息。如果预先登记希望的工作的种类·工作地·雇佣形态新到的东西的招人信息被通知的新到的东西邮件杂志，用匿名预先公开Web履历书的话从企业用优厚条件搜罗传达的用优厚条件搜罗邮件功能等，大量提供为了有效地推进转职活动的受欢迎功能。向Web业界的优良企业的转职咨询和介绍非公开招人的转职支援服务也提供中。Find
                Job !ha，在从PC也在从智能手机也招人的检索·应募的功能能利用。考虑， 转职Find Job！wo请利用。
            </p>
        </div>
    </section>


    <div id="footer-list-search">
        <div class="container-footer-list-search">
            <dl class="clearfix">
                <dt class="text-md">職種から求人情報を探す</dt>
                <dd class="text-xs">
                    <a href="http://www.find-job.net/list/shokushu-203/">Webエンジニア・Webプログラマ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/shokushu-205/">Webデザイナー・HTMLコーダー</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/shokushu-5/">グラフィックデザイナー・クリエイター</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/shokushu-1/">Webディレクター・Webプロデューサー</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/shokushu-207/">スマートフォンエンジニア</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/shokushu-204/">ネットワークエンジニア・サーバーエンジニア</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/word/hu/%E3%83%95%E3%83%AD%E3%83%B3%E3%83%88%E3%82%A8%E3%83%B3%E3%83%89%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2/">フロントエンドエンジニア</a>
                </dd>
            </dl>
            <dl class="clearfix">
                <dt class="text-md">スキルから求人情報を探す</dt>
                <dd class="text-xs">
                    <a href="http://www.find-job.net/list/skill-3-35/1-1-1/">PHP</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/skill-3-34/1-1-1/">Perl</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/skill-3-44/1-1-1/">Ruby</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/skill-3-43/1-1-1/">Python</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/skill-3-33/1-1-1/">Java</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/skill-3-38/1-1-1/">JavaScript</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/skill-3-27/1-1-1/">C言語</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/skill-3-28/1-1-1/">C++</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/skill-4-49/1-1-1/">MySQL</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/skill-4-48/1-1-1/">PostgreSQL</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/skill-10-104/1-1-1/">iPhoneアプリ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/skill-10-105/1-1-1/">Androidアプリ</a>
                </dd>
            </dl>
            <dl class="mb0 clearfix">
                <dt class="text-md">企業名から求人情報を探す</dt>
                <dd class="text-xs">
                    <a href="http://www.find-job.net/list/company/index/a/">あ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/i/">い</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/u/">う</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/e/">え</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/o/">お</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ka/">か</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ki/">き</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ku/">く</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ke/">け</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ko/">こ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/sa/">さ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/shi/">し</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/su/">す</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/se/">せ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/so/">そ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ta/">た</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/chi/">ち</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/tsu/">つ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/te/">て</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/to/">と</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/na/">な</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ni/">に</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/nu/">ぬ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ne/">ね</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/no/">の</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ha/">は</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/hi/">ひ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/fu/">ふ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/he/">へ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ho/">ほ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ma/">ま</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/mi/">み</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/mu/">む</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/me/">め</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/mo/">も</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ya/">や</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/yu/">ゆ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/yo/">よ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ra/">ら</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ri/">り</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ru/">る</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/re/">れ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/ro/">ろ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/wa/">わ</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/n/">ん</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/A/">A</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/B/">B</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/C/">C</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/D/">D</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/E/">E</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/F/">F</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/G/">G</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/H/">H</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/I/">I</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/J/">J</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/K/">K</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/L/">L</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/M/">M</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/N/">N</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/O/">O</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/P/">P</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/Q/">Q</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/R/">R</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/S/">S</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/T/">T</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/U/">U</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/V/">V</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/W/">W</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/X/">X</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/Y/">Y</a>&nbsp;|&nbsp;
                    <a href="http://www.find-job.net/list/company/index/Z/">Z</a>
                </dd>
            </dl>
        </div>
    </div><!--footer-list-search-->
@stop

@section('js')
    <script src="/assets/javascripts/index.js"></script>
@stop