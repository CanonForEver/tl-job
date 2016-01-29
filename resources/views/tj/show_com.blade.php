@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/showjob.css">
@stop

@section('topic')
    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
        <ul>
            <li><a href="https://www.find-job.net/" itemprop="url"><span itemprop="title">庭燎・求贤</span></a></li>

            <li class="t1" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="https://www.find-job.net/list/shokushu-1-34/1-1-1/" itemprop="url"><span itemprop="title">Webサイト運営・ECサイト運営</span></a>
            </li>

            <li class="t2" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="https://www.find-job.net/x/2-ja-22-34-13/1-1-1/" itemprop="url"><span
                            itemprop="title">東京都</span></a></li>

            <li class="t3" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="https://www.find-job.net/x/3-jaf-221-34-13-6/1-1-1/" itemprop="url"><span
                            itemprop="title">中途採用</span></a></li>

            <li class="t4" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                        href="https://www.find-job.net/list/company/41309/jobs/" itemprop="url"><span itemprop="title">株式会社ディエスピー</span></a>
            </li>

            <li class="t5" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span
                            itemprop="title">Webディレクター</span></strong></li>
        </ul>
    </div>
@stop
@section('container')
    <main>
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


                        <a href="https://www.find-job.net/list/j108579c.html#" data-action="showjob"
                           data-label="no_login_company_fixed"
                           class="fj-show-login-box btn btn-md btn-secondary block pull-right">关注</a>


                        <a href="https://www.find-job.net/list/j108579c.html#"
                           class="fj-showjob-apply-button btn btn-md btn-primary block pull-right mr15">应聘</a>
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
                        <p class="text-sm pull-right"><trans data-src="掲載期間：" data-dst="掲載期間：">招聘期间：</trans><span itemprop="datePosted"><trans data-src="2016/01/08" data-dst="2016 / 01 / 08">2016 / 01 / 08</trans></span><trans data-src="～2016/01/21" data-dst="～2016/01/21">～2016/01/21</trans></p>

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
                        <a href="https://www.find-job.net/list/j108579c.html#"
                           class="fj-showjob-apply-button btn btn-lg text-lg btn-primary block pull-left mr15">应聘</a>


                        <a href="https://www.find-job.net/list/j108579c.html#" data-action="showjob"
                           data-label="no_login_company_head"
                           class="fj-show-login-box btn btn-lg text-lg btn-secondary block pull-left">关注</a>


                    </div>


                    <!-- /apply_buttons_head -->

                </div>
            </section>


            <nav>
                <div class="box-tab">
                    <ul class="tab clearfix mb20">
                        <li class="tab-job ">
                            <a href="/list/{{$job->id}}">招聘信息</a>
                        </li>

                        <li class="tab-company current">
                            <a href="/list/{{$job->id}}/com">企业信息</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <section>
                <h2 class="text-em mb10">会社概要</h2>
                <table class="input-cell mb10">
                    <colgroup>
                        <col style="width:20%;">
                        <col style="width:80%;">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th>成立日</th>
                        <td>{{$job->com->setup_year}} 年 {{$job->com->setup_month}} 月</td>
                    </tr>
                    <tr>
                        <th>法人</th>
                        <td>{{$job->com->ceo}}</td>
                    </tr>
                    <tr>
                        <th>注册资本</th>
                        <td>{{$job->com->capital}}</td>
                    </tr>

                    <tr>
                        <th>年間売上</th>
                        <td>{{$job->com->sales_year1}}年 {{$job->com->sales_month1}}月期 {{$job->com->sales1}}
                            <br>{{$job->com->sales_year2}}年 {{$job->com->sales_month2}}月期  {{$job->com->sales2}}</td>
                    </tr>

                    <tr>
                        <th>从业人员数</th>
                        <td>{{$job->com->workers}}</td>
                    </tr>
                    <tr>
                        <th>事业内容</th>
                        <td> {{$job->com->business}}</td>
                    </tr>

                    <tr>
                        <th>主页</th>
                        <td><a href="http://www.ds-p.jp/" rel="nofollow" target="_blank">{{$job->com->mail}}</a></td>
                    </tr>
                    <tr>
                        <th>地址</th>
                        <td>{{$job->com->honsha}}</td>
                    </tr>
                    </tbody>
                </table>
            </section>




            <ul class="btn-share clearfix mb50">

                <li class="fj-contact-modal contact pull-right ml10 relative"><a href="/fj/askjob.pl?jobID=108984"><img src="/images/showjob/img_mail.png" alt="企業に問い合せる"></a>
                    <div class="contact-company-balloon contact-modal box-xsm text-center hidden""><p>企業に問い合わせる</p></div>
        </li>

        <li class="facebook pull-right ml10">
            <div class="fb-like" data-href="http://www.find-job.net/list/j108984.html" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </li>

        <li class="twitter pull-right ml10">
            <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-url="http://www.find-job.net/list/j108984.html?from=134">ツイート</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </li>

        <li class="mixicheck pull-right ml10">
            <a href="http://mixi.jp/share.pl" class="mixi-check-button" data-key="49fcf456485d3f0f24f6b0ade5c577a55062f4f5" data-url="http://www.find-job.net/list/j108984.html?from=133" onclick="pageTracker._trackEvent('showjob', '/fj/showjob_mixicheck.html', '');"></a><script type="text/javascript" src="https://mixi.jp/static/public/js/share.js"></script>
        </li>


        </ul>


        <!-- apply_buttons_bottom -->
        <ul class="btn-action block-center clearfix mb50">



            <li class="pull-left mr30"><a href="#" class="fj-showjob-apply-button btn btn-xlg btn-primary block">应聘</a></li>

            <li class="pull-left">



                <a href="#"
                   data-job-id="108984"
                   data-uniq-key="440efd5bfa3e9bea5c04bf6ff7226c0b"
                   data-action="showjob"
                   data-label="company_bottom"
                   class="fj-add-to-bookmark btn btn-xlg btn-secondary block">关注</a>



            </li>




        </ul>
        <!-- /apply_buttons_bottom -->


        <section>
            <h2 class="h2 icon icon-recommend-lg mb10">この求人を見た人へのおすすめ求人</h2>
            <div class="box-job-wrap clearfix">

                <div class="box-job" onclick="window.open(&#39;/list/j104590.html?from=147&#39;);return false;">
                    <div class="thumbnail-sm"><img src="/images/d-5ca5d487.jpg" alt="エムスリー株式会社"></div>
                    <div class="box-sm text-md text-left">
                        <div class="box-job-info text-center">
                            <a href="https://www.find-job.net/list/j104590.html?from=147" target="_blank">
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
                            <a href="https://www.find-job.net/list/j101898.html?from=147" target="_blank">
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
                            <a href="https://www.find-job.net/list/j84353.html?from=147" target="_blank">
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
                            <a href="https://www.find-job.net/list/j81306.html?from=147" target="_blank">
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
                            <a href="https://www.find-job.net/list/j74301.html?from=147" target="_blank">
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
                            <a href="https://www.find-job.net/list/j97318.html?from=147" target="_blank">
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
                            <a href="https://www.find-job.net/list/j96326.html?from=147" target="_blank">
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
                            <a href="https://www.find-job.net/list/j105199.html?from=147" target="_blank">
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
@stop


@section('js')
    <script src="/assets/javascripts/showjob.js"></script>
@stop

