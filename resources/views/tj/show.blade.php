@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/showjob.css">
@stop

@section('topic')
    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
        <ul>
            <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">庭燎・求贤</span></a></li>

            <li class="t1" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="http://www.find-job.net/list/shokushu-1-34/1-1-1/" itemprop="url"><span itemprop="title">Webサイト運営・ECサイト運営</span></a>
            </li>

            <li class="t2" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="http://www.find-job.net/x/2-ja-22-34-13/1-1-1/" itemprop="url"><span
                            itemprop="title">東京都</span></a></li>

            <li class="t3" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="http://www.find-job.net/x/3-jaf-221-34-13-6/1-1-1/" itemprop="url"><span itemprop="title">中途採用</span></a>
            </li>

            <li class="t4" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="http://www.find-job.net/list/company/41309/jobs/" itemprop="url"><span itemprop="title">株式会社ディエスピー</span></a>
            </li>

            <li class="t5" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span
                            itemprop="title">Webディレクター</span></strong></li>
        </ul>
    </div>
@stop
@section('container')

    <main itemscope="itemscope" itemtype="http://schema.org/JobPosting">

        <div class="container container-showjob">

            <!-- apply_buttons_fixed -->
            <form method="post" action="https://www.find-job.net/my/apply.cgi?jobID=108579" name="apply_form"
                  target="_self" class="fj-apply-form">
                <input type="hidden" name="jobID" value="108579">
                <input type="hidden" name="from" value="">
                <input type="hidden" name="mail_id" value="">
            </form>

            <div class="header-modal fj-showjob-fixed-area hidden" style="display: none;">
                <div class="container-narrow block-center clearfix">
                    <div class=" box-corp-button pull-right relative">


                        <a href="http://www.find-job.net/list/j108579.html#" data-action="showjob"
                           data-label="no_login_fixed"
                           class="fj-show-login-box btn btn-md btn-secondary block pull-right">気になる</a>


                        <a href="http://www.find-job.net/list/j108579.html#"
                           class="fj-showjob-apply-button btn btn-md btn-primary block pull-right mr15">応募フォームへ</a>
                    </div>
                </div>
            </div>


            <!-- /apply_buttons_fixed -->

            <section>
                <div class="box-corp clearfix">
                    <div class="box-corp-img pull-left mr20"><img src="/images/34785logo.png" alt="株式会社ディエスピー"></div>
                    <div class="box-corp-detail pull-left" itemprop="hiringOrganization" itemscope=""
                         itemtype="http://schema.org/Organization">
                        <h1 class="name" itemprop="name">株式会社ディエスピー</h1>
                        <p class="text-sm pull-right">
                            <trans data-src="掲載期間：" data-dst="掲載期間：">招聘期间：</trans>
                            <span itemprop="datePosted"><trans data-src="2016/01/08" data-dst="2016 / 01 / 08">2016 / 01
                                    / 08
                                </trans></span>
                            <trans data-src="～2016/01/21" data-dst="～2016/01/21">～2016/01/21</trans>
                        </p>
                        <h2 class="mb10">{{$job->shosai}}</h2>

                        <ul class="list-tag">
                            <li class="tag tag-xsm tag-new">NEW</li>
                            @foreach($job->job_focus_words as $word)
                            <li class="tag tag-xsm tag-primary">{{$word->focus_word->name}}</li>
                                   @endforeach
                        </ul>
                    </div>


                    <!-- apply_buttons_head -->


                    <div class="box-corp-button pull-right pt30">
                        <a href="http://www.find-job.net/list/j108579.html#"
                           class="fj-showjob-apply-button btn btn-lg text-lg btn-primary block pull-left mr15">应聘</a>


                        <a href="http://www.find-job.net/list/j108579.html#" data-action="showjob"
                           data-label="no_login_head"
                           class="fj-show-login-box btn btn-lg text-lg btn-secondary block pull-left">关注</a>


                    </div>


                    <!-- /apply_buttons_head -->

                </div>
            </section>


            <nav>
                <div class="box-tab">
                    <ul class="tab clearfix mb20">
                        <li class="tab-job current">
                            <a href="">招聘信息</a>
                        </li>

                        <li class="tab-company ">
                            <a href="/list/{{$job->id}}/com">企业信息</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <div class="clearfix mb30">

                <div class="box-detail-img-vertical bg-default box-sm pull-left mr30 mb20">
                    <img src="/images/h-abe4a93f.jpg" alt="「困ったときあなたの顔が浮かんだ」と&lt;br&gt;言われる存在になるのが目標です！" class="block">
                    <p class="text-sm pt10">{{$job->p_comment1}}</p>
                </div>

                <h2 class="text-showjob-xlg mb10">{{$job->catch_copy}}</h2>
                <p class="line-width">


                    <br>{{$job->pr_text}}

                </p>
            </div>


            <div class="box-detail-img-sm-wrap clearfix mb50">

                <div class="box-detail-img-sm bg-default box-sm pull-left">
                    <img src="/images/b-510a0083.jpg" alt="個性溢れるメンバーたち。心地いい距離感&lt;br&gt;で仕事をしています。" class="block">
                    <p class="text-sm pt10">{{$job->p_comment2}}</p>
                </div>

                <div class="box-detail-img-sm bg-default box-sm pull-left">
                    <img src="/images/b-31da659a.jpg" alt="施設のオリジナルのカラーを、お客様&lt;br&gt;と一緒にカタチにしていくお仕事です。" class="block">
                    <p class="text-sm pt10">{{$job->p_comment3}}</p>
                </div>

                <div class="box-detail-img-sm bg-default box-sm pull-left">
                    <img src="/images/b-97a66851.jpg" alt="「相談して良かった！」と嬉しいメール&lt;br&gt;をいただくことも日常茶飯事です。" class="block">
                    <p class="text-sm pt10">{{$job->p_comment4}}</p>
                </div>

            </div>


            <section>
                <h2 class="text-em mb10">募集要項</h2>


                <table class="input-cell mb40">
                    <colgroup>
                        <col style="width:20%;">
                        <col style="width:80%;">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th>职业</th>
                        <td>

                            <span itemprop="title">{{$job->this_shokushu->name}}</span>

                        </td>
                    </tr>

                    <tr>
                        <th>公司背景</th>
                        <td>{{$job->background}}
                            </td>
                    </tr>

                    <tr>
                        <th>工作内容</th>
                        <td>
                    <span itemprop="description">{{$job->job_details}}</span>
                        </td>
                    </tr>
                    <tr>
                        <th>工作形式</th>
                        <td>


                            <strong>1. </strong><span itemprop="employmentType"
                                                      class="employmentType">{{$job->this_keitai1->name}}</span><img
                                    src="/images/begginer.png" alt="未経験可">

                            <strong>2. </strong><span itemprop="employmentType"
                                                      class="employmentType">{{$job->this_keitai2->name}}</span><img
                                    src="/images/begginer.png" alt="未経験可">
                            <strong>3. </strong><span itemprop="employmentType"
                                                      class="employmentType">{{$job->this_keitai3->name}}</span><img
                                    src="/images/begginer.png" alt="未経験可">

                        </td>
                    </tr>

                    <tr>
                        <th>应征资格</th>
                        <td>
                            <br>1.{{$job->sikaku1}}
                            <br>2.{{$job->sikaku2}}
                            <br>3.{{$job->sikaku3}}


                        </td>
                    </tr>

                    <tr>
                        <th>工作地</th>
                        <td>

                        <span itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place" class="fn">
                            <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="fn">
                                <span itemprop="addressLocality" class="fn">{{$job->jusho}}</span>
                            </span>
                        </span>

                        </td>
                    </tr>
                    <tr>
                        <th>工作时间</th>
                        <td>

                            <span itemprop="workHours">{{$job->jikan1}}</span>

                        </td>
                    </tr>
                    <tr>
                        <th>工资</th>
                        <td class="indent">
                            <p>1.{{$job->ky3_kind}}{{$job->ky1_from}}</p>
                            <p>2.{{$job->ky3_kind}}{{$job->ky2_from}}</p>
                            <p>3.{{$job->ky3_kind}}{{$job->ky3_to}}</p>

                        </td>
                    </tr>
                    <tr>
                        <th>福利待遇</th>
                        <td>
                            <br>{{$job->koutsuuhi1}}
                            <br>{{$job->koutsuuhi2}}
                            <br>{{$job->koutsuuhi3}}
                        </td>
                    </tr>
                    <tr>
                        <th>休息日・休假
                        </th>
                        <td>

                            <br>{{$job->kyujitu1}}
                            <br>{{$job->kyujitu2}}
                            <br>{{$job->kyujitu3}}

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <trans data-src="こだわり条件" data-dst="讲究条件" style="background: transparent;">讲究条件</trans>
                        </th>
                        <td>
                            <ul>
                                @foreach($job->job_focus_words as $word)
                                <li class="tag tag-xsm tag-primary">
                                    <trans data-src="経験者優遇" data-dst="経験者優遇" style="background: transparent;">{{$word->focus_word->name}}
                                    </trans>
                                </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>

            <!-- apply_buttons_center -->
            <ul class="btn-action block-center clearfix mb50">


                <li class="pull-left mr30"><a href="http://www.find-job.net/list/j108579.html#"
                                              class="fj-showjob-apply-button btn btn-xlg btn-primary block">应聘</a></li>
                <li class="pull-left">


                    <a href="http://www.find-job.net/list/j108579.html#" data-action="showjob"
                       data-label="no_login_center" class="fj-show-login-box btn btn-xlg btn-secondary block">关注</a>


                </li>


            </ul>
            <!-- /apply_buttons_center -->

            <section>
                <div class="clearfix mb40">

                    <div class="box-detail-img-md bg-default box-sm pull-right ml30 mb10">
                        <img src="/images/b-c98a1110.jpg" alt="化粧品販売も私たちが手掛ける事業の一つ。
&lt;br&gt;新事業の立ち上げも大歓迎です！" class="block">
                        <p class="text-sm pt10">{{$job->p_comment5}}</p>
                    </div>

                    <h2 class="text-showjob-xlg mb10">{{$job->free_title}}</h2>
                    <p class="line-width">
                        {{$job->free_body}}
                    </p>
                </div>
            </section>


            <section>
                <div class="clearfix mb40">

                    <div class="box-detail-img-md bg-default box-sm pull-right ml30 mb10">
                        <img src="/images/b-d9e186aa.jpg" alt="いい仕事はいい職場から生まれると考えて
&lt;br&gt;いるので、明るい雰囲気を心掛けています。" class="block">
                        <p class="text-sm pt10">{{$job->p_comment6}}</p>
                    </div>

                    <h2 class="text-showjob-xlg mb10">{{$job->free_title2}}</h2>
                    <p class="line-width">
                        {{$job->free_body2}}
                    </p>
                </div>
            </section>


            <section>
                <div class="box-comment box-md bg-yellow clearfix mb40">
                    <h2 class="h2 border-b-orange clearfix mb15 pb10">
                        <span class="text-em text-normal pull-left">Interview</span>
                        <span class="pull-right">代表取締役社長 野見山</span>
                    </h2>
                    <div class="clearfix">

                        <p class="line-width box-comment-detail pull-right">
                            私はインターネットを介した流通に興味を持ち、Webビジネスを選びました。これまで幼稚園・保育園に特化したWeb制作を手掛けていましたが、この度、介護業界にもマーケットを拡大していきたいと考えています。当社では新しいことにも積極的にチャレンジしていく予定なので、今回入社される方は、変化に対応できる、変化を楽しめる人にお越しいただけたら嬉しいですね。私たちの仕事は、お客様の課題を引き出し、ときにはお客様の価値観を変えるような提案をしなくてはいけない場面もあります。エネルギーを使う分、人の役に立つ嬉しさ、感謝される喜びを充分に感じられるのが、仕事の面白いところです。</p>

                        <img src="/images/d-c177e8ad.jpg" alt="株式会社ディエスピー インタビュー" class="block pull-left">
                    </div>
                </div>
            </section>


            <div class="box-detail-img-sm-wrap clearfix mb50">
                <div class="box-detail-img-sm bg-default box-sm pull-left"><img src="/img/com_pics/38804/b-e25ec167.jpg"
                                                                                alt="最新技術も研究。社員運営のレスポンシブデザインのギャラリーサイト(25万PV/月)。"
                                                                                class="block">
                    <p class="text-sm pt10">
                        <trans data-src="最新技術も研究。社員運営のレスポンシブデザインのギャラリーサイト(25万PV/月)。"
                               data-dst="最新技术研究。公司运营的レスポンシブデザイン的画廊网站（25万/月)。PV">{{$job->p_comment5}}
                        </trans>
                    </p>
                </div>
                <div class="box-detail-img-sm bg-default box-sm pull-left"><img src="/img/com_pics/38804/b-2491f0b0.jpg"
                                                                                alt="和気藹々とした明るい雰囲気の職場です。" class="block">
                    <p class="text-sm pt10">
                        <trans data-src="和気藹々とした明るい雰囲気の職場です。" data-dst="和蔼可亲的明亮的气氛的职场。"
                               style="background: transparent;">{{$job->p_comment6}}
                        </trans>
                    </p>
                </div>
                <div class="box-detail-img-sm bg-default box-sm pull-left"><img src="/img/com_pics/38804/b-e5f6ca01.jpg"
                                                                                alt="BBQや社員旅行などメンバーが自由に企画。参加率はとても高いです。"
                                                                                class="block">
                    <p class="text-sm pt10">
                        <trans data-src="BBQや社員旅行などメンバーが自由に企画。参加率はとても高いです。" data-dst="时和职员旅行等成员自由企。参加率很高。">
                            {{$job->p_comment7}}
                        </trans>
                    </p>
                </div>
            </div>

            <section>
                <h2 class="text-em mb10">录用方法</h2>


                <table class="input-cell mb40">
                    <colgroup>
                        <col style="width:20%;">
                        <col style="width:80%;">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th>应征方法</th>
                        <td>

                            {{$job->how_apply1}}


                        </td>
                    </tr>
                    <tr>
                        <th>遴选过程</th>
                        <td>

                            <br>{{$job->process}}


                        </td>
                    </tr>
                    <tr>
                        <th>面试地</th>
                        <td>

                            <br>{{$job->mensetuti}}

                            <a href="http://www.find-job.net/fj/map.cgi?id=108579"
                               class="icon icon-arrow02-xs">地図を見る</a>


                        </td>
                    </tr>
                    <tr>
                        <th>担当</th>
                        <td>

                            採用担当

                        </td>
                    </tr>
                    </tbody>
                </table>
            </section>


            <section>
                <div class="box-comment box-md bg-yellow clearfix mb20">
                    <h2 class="h2 text-em border-b-orange clearfix mb15 pb10">采访者的留言</h2>
                    <div class="clearfix">

                        <p class="line-width box-comment-detail pull-left">
                            一味的稳重体贴的代表、野见山先生为首，快乐的话高涨气氛的澁谷先生，丰富的Web行业经验和涉及多方面有兴趣的好奇心旺盛的深谷先生。三人三样的成员聚集的DSP。各自的个性很好地被弄活，一个人一个人的存在感，发挥着。多样的成员接受，想法和想法蔓延好事。虽说如此，也有共通点。那是，“快乐的工作”。反正笑很多，消极的发言极力不。阳台包围的开放的办公室说互相结合，采访者都什么时间也在想这样的心情好的公司。
                        </p>
                        <img src="/images/d-1177ee09.jpg" alt="取材者からのコメント" class="block pull-right">
                    </div>

                </div>
            </section>


            <ul class="btn-share clearfix mb50">

                <li class="fj-contact-modal contact pull-right ml10 relative"><a href="/fj/askjob.pl?jobID=108579"><img
                                src="/images/showjob/img_mail.png" alt="企業に問い合せる"></a>
                    <div class="contact-company-balloon contact-modal box-xsm text-center hidden"
                    "><p>企業に問い合わせる</p>
        </div>
        </li>

        <li class="facebook pull-right ml10">
            <div class="fb-like" data-href="http://www.find-job.net/list/j108579.html" data-layout="button_count"
                 data-action="like" data-show-faces="false" data-share="false"></div>
        </li>

        <li class="twitter pull-right ml10">
            <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja"
               data-url="http://www.find-job.net/list/j108579.html?from=134">ツイート</a>
            <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');</script>
        </li>

        <li class="mixicheck pull-right ml10">
            <a href="http://mixi.jp/share.pl" class="mixi-check-button"
               data-key="49fcf456485d3f0f24f6b0ade5c577a55062f4f5"
               data-url="http://www.find-job.net/list/j108579.html?from=133"
               onclick="pageTracker._trackEvent('showjob', '/fj/showjob_mixicheck.html', '');"></a>
            <script type="text/javascript" src="https://mixi.jp/static/public/js/share.js"></script>
        </li>


        </ul>


        <!-- apply_buttons_bottom -->
        <ul class="btn-action block-center clearfix mb50">


            <li class="pull-left mr30"><a href="http://www.find-job.net/list/j108579.html#"
                                          class="fj-showjob-apply-button btn btn-xlg btn-primary block">应聘</a></li>

            <li class="pull-left">


                <a href="http://www.find-job.net/list/j108579.html#" data-action="showjob" data-label="no_login_bottom"
                   class="fj-show-login-box btn btn-xlg btn-secondary block">关注</a>


            </li>


        </ul>
        <!-- /apply_buttons_bottom -->

        <section>
            <div class="box box-sm mb50">
                <h2 class="h3 text-normal border-b-gray mb10 pb10">
                    <trans data-src="株式会社サンデーアーツが募集している他の職種" data-dst="株式会社圣代艺术募集的其他职业">株式会社圣代艺术募集的其他职业</trans>
                </h2>
                <ul class="text-md">
                    <li><a href="/list/j109729.html?from=1">
                            <trans data-src="Webプログラマ" data-dst="Web程序员">Web程序员</trans>
                        </a></li>
                </ul>
            </div>
        </section>


        <section>
            <h2 class="h2 icon icon-recommend-lg mb10">看这个信息的人还会去看</h2>
            <div class="box-job-wrap clearfix">

                <div class="box-job" onclick="window.open(&#39;/list/j104590.html?from=147&#39;);return false;">
                    <div class="thumbnail-sm"><img src="/images/d-5ca5d487.jpg" alt="エムスリー株式会社"></div>
                    <div class="box-sm text-md text-left">
                        <div class="box-job-info text-center">
                            <a href="http://www.find-job.net/list/j104590.html?from=147" target="_blank">
                                <p class="text-md text-black">エムスリー株式会社</p>
                                <p class="mt5">Webディレクター</p>
                            </a>
                        </div>
                        <ul>
                            <li class="icon icon-status-xs">正社員(中途)</li>
                            <li class="icon icon-salary-xs text-red text-bold">年俸400万円 〜 1000万円</li>
                            <li class="icon icon-location-xs">港区：各線 溜池山王駅</li>
                        </ul>
                    </div>
                </div>


                <div class="box-job" onclick="window.open(&#39;/list/j101898.html?from=147&#39;);return false;">
                    <div class="thumbnail-sm"><img src="/images/d-718eb3ca.jpg" alt="株式会社ダイバース"></div>
                    <div class="box-sm text-md text-left">
                        <div class="box-job-info text-center">
                            <a href="http://www.find-job.net/list/j101898.html?from=147" target="_blank">
                                <p class="text-md text-black">株式会社ダイバース</p>
                                <p class="mt5">Webディレクター</p>
                            </a>
                        </div>
                        <ul>
                            <li class="icon icon-status-xs">正社員(中途)</li>
                            <li class="icon icon-salary-xs text-red text-bold">年俸400万円 〜 800万円</li>
                            <li class="icon icon-location-xs">渋谷区：JR 渋谷駅</li>
                        </ul>
                    </div>
                </div>


                <div class="box-job" onclick="window.open(&#39;/list/j84353.html?from=147&#39;);return false;">
                    <div class="thumbnail-sm"><img src="/images/d-7863f628.jpg" alt="株式会社ぐるなび "></div>
                    <div class="box-sm text-md text-left">
                        <div class="box-job-info text-center">
                            <a href="http://www.find-job.net/list/j84353.html?from=147" target="_blank">
                                <p class="text-md text-black">株式会社ぐるなび </p>
                                <p class="mt5">Webディレクター</p>
                            </a>
                        </div>
                        <ul>
                            <li class="icon icon-status-xs">正社員(中途)</li>
                            <li class="icon icon-salary-xs text-red text-bold">年俸400万円 〜 600万円</li>
                            <li class="icon icon-location-xs">千代田区：各線 日比谷...</li>
                        </ul>
                    </div>
                </div>


                <div class="box-job" onclick="window.open(&#39;/list/j81306.html?from=147&#39;);return false;">
                    <div class="thumbnail-sm"><img src="/images/d-88ad3268.jpg" alt="株式会社東京アドデザイナース"></div>
                    <div class="box-sm text-md text-left">
                        <div class="box-job-info text-center">
                            <a href="http://www.find-job.net/list/j81306.html?from=147" target="_blank">
                                <p class="text-md text-black">株式会社東京アドデザイナース</p>
                                <p class="mt5">Webディレクター</p>
                            </a>
                        </div>
                        <ul>
                            <li class="icon icon-status-xs">正社員(中途)</li>
                            <li class="icon icon-salary-xs text-red text-bold">年俸400万円 〜 450万円</li>
                            <li class="icon icon-location-xs">千代田区：半蔵門線 半...</li>
                        </ul>
                    </div>
                </div>


                <div class="box-job" onclick="window.open(&#39;/list/j74301.html?from=147&#39;);return false;">
                    <div class="thumbnail-sm"><img src="/images/d-48328855.jpg" alt="株式会社トライブ"></div>
                    <div class="box-sm text-md text-left">
                        <div class="box-job-info text-center">
                            <a href="http://www.find-job.net/list/j74301.html?from=147" target="_blank">
                                <p class="text-md text-black">株式会社トライブ</p>
                                <p class="mt5">Webディレクター</p>
                            </a>
                        </div>
                        <ul>
                            <li class="icon icon-status-xs">正社員(中途)</li>
                            <li class="icon icon-salary-xs text-red text-bold">月給25万円 〜 60万円</li>
                            <li class="icon icon-location-xs">東京都、神奈川県、千...</li>
                        </ul>
                    </div>
                </div>


                <div class="box-job" onclick="window.open(&#39;/list/j97318.html?from=147&#39;);return false;">
                    <div class="thumbnail-sm"><img src="/images/d-6b1f4cb1.jpg" alt="株式会社kazeniwa"></div>
                    <div class="box-sm text-md text-left">
                        <div class="box-job-info text-center">
                            <a href="http://www.find-job.net/list/j97318.html?from=147" target="_blank">
                                <p class="text-md text-black">株式会社kazeniwa</p>
                                <p class="mt5">ディレクター</p>
                            </a>
                        </div>
                        <ul>
                            <li class="icon icon-status-xs">正社員(中途)</li>
                            <li class="icon icon-salary-xs text-red text-bold">月給25万円 〜</li>
                            <li class="icon icon-location-xs">港区：各線 新橋駅</li>
                        </ul>
                    </div>
                </div>


                <div class="box-job" onclick="window.open(&#39;/list/j96326.html?from=147&#39;);return false;">
                    <div class="thumbnail-sm"><img src="/images/d-dda62da7.jpg" alt="株式会社センタード"></div>
                    <div class="box-sm text-md text-left">
                        <div class="box-job-info text-center">
                            <a href="http://www.find-job.net/list/j96326.html?from=147" target="_blank">
                                <p class="text-md text-black">株式会社センタード</p>
                                <p class="mt5">Webディレクター</p>
                            </a>
                        </div>
                        <ul>
                            <li class="icon icon-status-xs">正社員(中途)</li>
                            <li class="icon icon-salary-xs text-red text-bold">月給26万円 〜 40万円</li>
                            <li class="icon icon-location-xs">新宿区：JR 新宿駅</li>
                        </ul>
                    </div>
                </div>


                <div class="box-job" onclick="window.open(&#39;/list/j105199.html?from=147&#39;);return false;">
                    <div class="thumbnail-sm"><img src="/images/d-22f93753.jpg" alt="アズーリ株式会社"></div>
                    <div class="box-sm text-md text-left">
                        <div class="box-job-info text-center">
                            <a href="http://www.find-job.net/list/j105199.html?from=147" target="_blank">
                                <p class="text-md text-black">アズーリ株式会社</p>
                                <p class="mt5">Webディレクター</p>
                            </a>
                        </div>
                        <ul>
                            <li class="icon icon-status-xs">正社員(中途)</li>
                            <li class="icon icon-salary-xs text-red text-bold">年俸380万円 〜</li>
                            <li class="icon icon-location-xs">文京区：JR 水道橋駅</li>
                        </ul>
                    </div>
                </div>


            </div>
        </section>


        </div><!--container-->
    </main>



    <!--  link -->
    <section>
        <div class="container container-showjob">
            <div class="box box-sm box-relation">
                <h2 class="h5">Web的相关分类</h2>
                <dl class="mt10 text-sm clearfix">


                    <dt class="pull-left">雇佣形式</dt>
                    <dd class="pull-left">
                        <ul class="clearfix">
                            <li><a href="http://www.find-job.net/list/shokushu-1/">SOHO・在家工作</a></li>


                        </ul>
                    </dd>

                    <dt class="pull-left">职业</dt>
                    <dd class="pull-left">
                        <ul class="clearfix">
                            <li><a href="http://www.find-job.net/list/shokushu-1/">Webディレクター・Webプロデューサー</a></li>

                            <li><a href="http://www.find-job.net/list/shokushu-1-34/1-1-1/">Webサイト運営・ECサイト運営</a></li>

                        </ul>
                    </dd>

                    <dt class="pull-left">工作地</dt>
                    <dd class="pull-left">
                        <ul class="clearfix">
                            <li><a href="http://www.find-job.net/list/area-3/">関東</a></li>
                            <li><a href="http://www.find-job.net/list/area-3-13/">東京都</a></li>

                            <li><a href="http://www.find-job.net/list/area-3-13-48/1-1-1/">神田</a></li>

                        </ul>
                    </dd>
                    <dt class="pull-left">企业名</dt>
                    <dd class="pull-left">
                        <ul class="clearfix">
                            <li>株式会社ディエスピー</li>
                        </ul>
                    </dd>

                    <dt class="pull-left">こだわり条件</dt>
                    <dd class="pull-left">
                        <ul class="clearfix">

                            <li><a href="http://www.find-job.net/list/focus-2/1-1-1/">ベンチャー企業</a></li>

                            <li><a href="http://www.find-job.net/list/focus-6/1-1-1/">中途採用</a></li>

                            <li><a href="http://www.find-job.net/list/focus-26/1-1-1/">未経験可</a></li>

                            <li><a href="http://www.find-job.net/list/focus-19/1-1-1/">社会保険完備</a></li>

                            <li><a href="http://www.find-job.net/list/focus-25/1-1-1/">学歴不問</a></li>

                            <li><a href="http://www.find-job.net/list/focus-5/1-1-1/">第二新卒</a></li>

                            <li><a href="http://www.find-job.net/list/focus-12/1-1-1/">年俸制有り</a></li>

                        </ul>
                    </dd>


                    <dt class="pull-left">技能・资格</dt>
                    <dd class="pull-left">
                        <ul class="clearfix">

                            <li><a href="http://www.find-job.net/list/skill-9-103/1-1-1/">アクセス解析</a></li>

                            <li><a href="http://www.find-job.net/list/skill-2-15/1-1-1/">Word（ワード）</a></li>

                        </ul>
                    </dd>

                </dl>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script src="/assets/javascripts/showjob.js"></script>
@stop]
