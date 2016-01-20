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
                        <h2 class="mb10">Web总监</h2>

                        <ul class="list-tag">
                            <li class="tag tag-xsm tag-new">NEW</li>

                            <li class="tag tag-xsm tag-primary">社会保険完備</li>

                            <li class="tag tag-xsm tag-primary">学歴不問</li>

                            <li class="tag tag-xsm tag-primary">第二新卒</li>

                            <li class="tag tag-xsm tag-primary">年俸制有り</li>

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
                            <a href="/list/j108579">招聘信息</a>
                        </li>

                        <li class="tab-company ">
                            <a href="/list/j108579/com">企业信息</a>
                        </li>
                    </ul>
                </div>
            </nav>


            <div class="clearfix mb30">


                <div class="box-detail-img-vertical bg-default box-sm pull-left mr30 mb20">
                    <img src="/images/h-abe4a93f.jpg" alt="「困ったときあなたの顔が浮かんだ」と&lt;br&gt;言われる存在になるのが目標です！" class="block">
                    <p class="text-sm pt10">「困ったときあなたの顔が浮かんだ」と<br>言われる存在になるのが目標です！</p>
                </div>

                <h2 class="text-showjob-xlg mb10">300ヶ所の保育園のWEBサイトをお任せします。<br>あなたの得意分野で、信頼される存在に。</h2>
                <p class="line-width">

                    私たちは、幼稚園・保育園・老人ホームに向けたWebプロモーション支援を手掛けています。保育業界・介護業界のお客様には、ITに詳しくない方、自分の施設をPRするのが不得意な方も。ときには、幼稚園の理事長先生と一緒に教育方針を言葉にしていったり、老人ホームの施設長と独自の強みを探ったり。保育士の先生にブログの書き方をレクチャーしたり。ときには、PCの使い方をイチからお教えすることだってあります。
                    <br>
                    <br>今回の採用では、Web業界出身者を募集中。前職の職種は問いません。この仕事には、自分が培ってきた経験や知識が活かせる場面がきっとあるからです。
                    <br>
                    <br>WEBサイトを利用していただき、お客様の『本当に伝えたかった事』を表現することで、「本当にありがとう」と握手を求められたり、私たちを「先生」と呼ぶ方もいらっしゃるくらい。WEBのプロとしてお客様に認められ、喜ばれ、頼られる手応えは想像以上です。

                </p>
            </div>


            <div class="box-detail-img-sm-wrap clearfix mb50">

                <div class="box-detail-img-sm bg-default box-sm pull-left">
                    <img src="/images/b-510a0083.jpg" alt="個性溢れるメンバーたち。心地いい距離感&lt;br&gt;で仕事をしています。" class="block">
                    <p class="text-sm pt10">個性溢れるメンバーたち。心地いい距離感<br>で仕事をしています。</p>
                </div>

                <div class="box-detail-img-sm bg-default box-sm pull-left">
                    <img src="/images/b-31da659a.jpg" alt="施設のオリジナルのカラーを、お客様&lt;br&gt;と一緒にカタチにしていくお仕事です。" class="block">
                    <p class="text-sm pt10">施設のオリジナルのカラーを、お客様<br>と一緒にカタチにしていくお仕事です。</p>
                </div>

                <div class="box-detail-img-sm bg-default box-sm pull-left">
                    <img src="/images/b-97a66851.jpg" alt="「相談して良かった！」と嬉しいメール&lt;br&gt;をいただくことも日常茶飯事です。" class="block">
                    <p class="text-sm pt10">「相談して良かった！」と嬉しいメール<br>をいただくことも日常茶飯事です。</p>
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

                            <span itemprop="title">Webディレクター</span>

                        </td>
                    </tr>

                    <tr>
                        <th>公司背景</th>
                        <td>保育業界(幼稚園・保育園)のお客様に対し、WEBサイト制作・更新運用のサポート・カスタマーサービスを提供しています。
                            <br>介護施設からの問い合わせも増えており、介護福祉業界のマーケット開拓をすることになりました。
                            <br>今回の募集では、既存のお客様とのやり取りに加え、新規事業のコアメンバーとして活躍していただきます。
                        </td>
                    </tr>

                    <tr>
                        <th>工作内容</th>
                        <td>
                    <span itemprop="description">300ヶ所の保育園・幼稚園のWEBディレクション業務(提案やヒアリング・問題解決・サイトマップ作成・ワイヤーフレーム作成・スケジュール管理・顧客折衝など)、
<br>更新運用サポート、PCの操作説明やメールアドレスの設定や更新業務のレクチャーなどカスタマーサービス業務をお願いします。
<br>お客様を大切に考え、お客様の気持ちを理解し、一緒になって悩みを解決していくお手伝いをお願いします。
<br>
<br>WEBディレクター経験者は、経験や知識等を加味し、担当していただくポジションを決定します。
<br>WEBディレクター未経験だがWEB業界経験者は、経験を活かしながらディレクション業務を覚えていただきます。
<br>例)WEBデザインの経験がある方は、サイトのデザインやコーディングをおこなっていただきながら、ディレクションを覚えていただきます。
<br>例)営業の経験のある方は、新規顧客獲得や既存顧客のアプローチをしながら、ディレクション(特に、ヒアリングや提案)を覚えていただきます。
<br>未経験者は、アシスタントディレクターとして先輩社員のサポート、WEBディレクションやITスキルの知識を覚えていただきます。
<br>
<br>【仕事の流れ】
<br>▼ヒアリング・ご提案
<br>お客様先へ訪問し、ヒアリングやご要望を聞きご提案します。
<br>その際、現状の問題点や課題等を把握し、施設の独自性や強みなどを引き出していきます。
<br>
<br>▼制作
<br>原稿収集やスケジュール管理、外部のパートナーとの連携をはかりお客様の要望をカタチにしていきます。
<br>
<br>▼納品
<br>公開後には必ず更新研修をおこない、お客様との信頼関係を作っていきます。
<br>
<br>▼更新運用
<br>お電話やFAXなどで更新や修正依頼がきますので、随時対応していきます。
<br>また、アクセス解析による効果検証などをおこない、改善のご提案をします。
<br>
<br>【仕事のポイント】
<br>◎お客様と利用者の立場を考えることが大切！
<br>お客様の要望をお聞きし、施設の独自性や強みなどをWEBサイトに反映することも大切ですが
<br>そのサイトを閲覧する利用者の立場になって考えることも大切です。
<br>
<br>◎お客様へのホスピタリティ
<br>PCの操作が不慣れな方、ITに詳しくない方も多くいますので、WEB業界でよくある「専門用語」などは極力使わないようにしてください。
<br>お客様は困って当社を信頼してお問い合わせしてきておりますので、ホスピタリティ精神で対応してください。
<br>
<br>【採用担当より】
<br>小人数ですので、ディレクションやクライアント対応(電話応対、更新運用サポート)のみではなく、
<br>ご自分の得意分野(デザインや営業など)の範囲で業務もお任せいたします。
<br>
<br>ディレクターとして、実務経験をお持ちでなくとも、デザイン・営業等の経験をお持ちであればご応募ください。
<br>案件により、WEBデザインや企画提案などのディレクション業務も兼務していただきます。
<br>
<br>未経験者でも働く環境をご用意しております。
<br>はじめは誰でも未経験ですので、「WEBの業界で働きたい！」やる気がある方からのご応募をお待ちしております。
<br>
<br>社内の雰囲気も良好で、制作会社にありがちな「長時間労働・過渡な残業」はありません。
<br>また、月1回「ディナーミーティング」を開催し意見交換をしたり、働きやすい環境となっています。</span>
                        </td>
                    </tr>
                    <tr>
                        <th>工作形式</th>
                        <td>


                            <strong>1. </strong><span itemprop="employmentType"
                                                      class="employmentType">正社員(中途)</span><img
                                    src="/images/begginer.png" alt="未経験可">

                            <strong>2. </strong><span itemprop="employmentType"
                                                      class="employmentType">正社員(中途)</span><img
                                    src="/images/begginer.png" alt="未経験可">


                        </td>
                    </tr>

                    <tr>
                        <th>应征资格</th>
                        <td>

                            仕事や行動に責任を持ち、仲間との意思統一がはかれ、お客様を大切にできる方の応募をお待ちしています。
                            <br>
                            <br>【必須スキル・経験】
                            <br>・社会人経験
                            <br>・Office系ソフト等の使用経験
                            <br>
                            <br>【歓迎するスキル・経験】
                            <br>・営業のご経験がある方(法人営業、提案型営業などの経験)
                            <br>※介護福祉業界での営業経験者は優遇いたします。
                            <br>・デザイナーのご経験がある方(デザインやコーディング、WordPressなどの構築経験)
                            <br>・ディレクターのご経験がある方(提案やコンサルティングなどの経験)
                            <br>・お客様との折衝経験がある方(飲食店などの接客経験がある方)
                            <br>
                            <br>【歓迎する人物像】
                            <br>・コミュニケーション能力が高く、協調性がある方
                            <br>・明るく、社交的な方
                            <br>・やる気があり、進んで仕事をする方
                            <br>・一般常識がある方
                            <br>・お客様視点で、ものを考える事ができ満足を第一に考えられる方
                            <br>・お客様を大切にできる方
                            <br>・自分の仕事がお客様の役に立っている、という実感を得たい方
                            <br>・前向きな気持ちを持って、経験したことのない仕事にもチャレンジできる方
                            <br>
                            <br>ディレクター経験者、これからディレクターにチャレンジしたい方からのご応募をお待ちしております。

                        </td>
                    </tr>

                    <tr>
                        <th>工作地</th>
                        <td>
                    
                        <span itemprop="jobLocation" itemscope="" itemtype="http://schema.org/Place" class="fn">
                            <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress" class="fn">
                                <span itemprop="addressLocality" class="fn">東京都千代田区神田神保町1-1-17 東京堂神保町第3ビルディング8F </span>
                            </span>
                        </span><br><br>【最寄駅】<br>■都営三田線・新宿線、東京メトロ半蔵門線「神保町」駅(A5・A7出口)より徒歩2分
                            <br>■東京メトロ東西線「竹橋」駅(3b出口)より徒歩6分
                            <br>■東京メトロ千代田線「新御茶ノ水」駅(B7出口)より徒歩5分
                            <br>■JR線「御茶ノ水」駅(御茶ノ水橋口)より徒歩8分

                        </td>
                    </tr>
                    <tr>
                        <th>工作时间</th>
                        <td>

                            <span itemprop="workHours">9：00〜18：00</span>

                        </td>
                    </tr>
                    <tr>
                        <th>工资</th>
                        <td class="indent">

                            <b>1. </b> 年俸360万円 〜 <br>経験者：月給30万円 〜 40万円
                            <br>※経験・能力・前給を考慮し優遇有。　<br><b>2. </b> 年俸300万円 〜 <br>未経験者：月給23万円 〜 30万円
                            <br>※上記はあくまでも想定年収です。ご経験・スキルを考慮の上、決定いたします。
                            <br><br>【研修・試用期間】<br>試用期間3ヶ月 (この期間の給与は本採用時と同額です)

                        </td>
                    </tr>
                    <tr>
                        <th>福利待遇</th>
                        <td>

                            交通費一部支給 (上限月額2万円) <br>昇給年1回、各種社会保険完備
                        </td>
                    </tr>
                    <tr>
                        <th>休息日・休假</th>
                        <td>

                            完全週休2日制(土日)、祝日、夏季休暇、年末年始休暇、GW

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <trans data-src="こだわり条件" data-dst="讲究条件" style="background: transparent;">讲究条件</trans>
                        </th>
                        <td>
                            <ul>
                                <li class="tag tag-xsm tag-primary">
                                    <trans data-src="経験者優遇" data-dst="経験者優遇" style="background: transparent;">経験者優遇
                                    </trans>
                                </li>
                                <li class="tag tag-xsm tag-primary">
                                    <trans data-src="社会保険完備" data-dst="社会保険完備">社会保険完備</trans>
                                </li>
                                <li class="tag tag-xsm tag-primary">
                                    <trans data-src="女性も歓迎の仕事" data-dst="女性欢迎的工作" style="background: transparent;">
                                        女性欢迎的工作
                                    </trans>
                                </li>
                                <li class="tag tag-xsm tag-primary">
                                    <trans data-src="学歴不問" data-dst="学歴不問">学歴不問</trans>
                                </li>
                                <li class="tag tag-xsm tag-primary">
                                    <trans data-src="服装自由" data-dst="服装自由">服装自由</trans>
                                </li>
                                <li class="tag tag-xsm tag-primary">
                                    <trans data-src="正社員登用制度有り" data-dst="正社員登用制度有り">正社員登用制度有り</trans>
                                </li>
                                <li class="tag tag-xsm tag-primary">
                                    <trans data-src="残業手当有り" data-dst="残業手当有り">残業手当有り</trans>
                                </li>
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
                        <p class="text-sm pt10">化粧品販売も私たちが手掛ける事業の一つ。
                            <br>新事業の立ち上げも大歓迎です！</p>
                    </div>

                    <h2 class="text-showjob-xlg mb10">多彩な事業を展開しています！</h2>
                    <p class="line-width">
                        当社では、幼稚園・保育園向けの制作サービス以外にも事業を展開しています。
                        <br>これから注力したいのは、介護業界向けに制作サービスになります。
                        <br>WEBサイトを「広告」から「広報・啓蒙」という観点で、介護・福祉についてご家族や地域の方々へ理解をしていただけるような
                        <br>サービスにしていきたいと思います。
                        <br>
                        <br>制作サービスの提供では、オウンドメディアやUXのWebマーケティングのトレンドなども取り入れながら、
                        <br>「顧客の視点や利用体験を考える」ことを念頭においた独自のノウハウを構築していきます。
                        <br>他の事業やサービスともノウハウを活かし、連携できるように化粧品販売事業やグループ会社との事業強化を図っていきます。
                        <br>
                        <br>このように多角的な事業を展開することで、安定的な経営体制を築くだけでなく、
                        <br>メンバーの可能性を広げていきたいという思いもあります。
                        <br>興味があれば新規事業に関わったり、新しい職種にチャレンジすることも可能です！
                    </p>
                </div>
            </section>


            <section>
                <div class="clearfix mb40">

                    <div class="box-detail-img-md bg-default box-sm pull-right ml30 mb10">
                        <img src="/images/b-d9e186aa.jpg" alt="いい仕事はいい職場から生まれると考えて
&lt;br&gt;いるので、明るい雰囲気を心掛けています。" class="block">
                        <p class="text-sm pt10">いい仕事はいい職場から生まれると考えて
                            <br>いるので、明るい雰囲気を心掛けています。</p>
                    </div>

                    <h2 class="text-showjob-xlg mb10">個性溢れるメンバーのご紹介</h2>
                    <p class="line-width">当社は代表の野見山と澁谷、深谷の3名で構成されています。ここでは、それぞれのメンバーに対する印象を紹介します！
                        <br>
                        <br>■野見山の印象⇒いつでも冷静沈着で穏やか。怒った姿を見たことがありません。経営知識が豊富で、着実に会社を成長させるプロ。ワクワクする仕事がしたいという思いが強く、新しい事業構想も次々と生み出しています。
                        <br>■澁谷の印象⇒当社のムードメーカー。飲食業界出身なのでコミュニケーション力が高く、お客様から絶大な信頼を寄せられています。ある園長からは「ウチの保育園を継いでほしい」と熱心にスカウトされたことも(笑)。
                        <br>■深谷の印象⇒制作会社やシステム会社、SEO会社でのディレクター、営業、人事など豊富な経験を持っています。多趣味で好奇心旺盛なため、どんなお客様とも話が盛り上がるのが魅力です。</p>
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
                               data-dst="最新技术研究。公司运营的レスポンシブデザイン的画廊网站（25万/月)。PV">最新技术研究。公司运营的レスポンシブデザイン的画廊网站（25万/月)。PV
                        </trans>
                    </p>
                </div>
                <div class="box-detail-img-sm bg-default box-sm pull-left"><img src="/img/com_pics/38804/b-2491f0b0.jpg"
                                                                                alt="和気藹々とした明るい雰囲気の職場です。" class="block">
                    <p class="text-sm pt10">
                        <trans data-src="和気藹々とした明るい雰囲気の職場です。" data-dst="和蔼可亲的明亮的气氛的职场。"
                               style="background: transparent;">和蔼可亲的明亮的气氛的职场。
                        </trans>
                    </p>
                </div>
                <div class="box-detail-img-sm bg-default box-sm pull-left"><img src="/img/com_pics/38804/b-e5f6ca01.jpg"
                                                                                alt="BBQや社員旅行などメンバーが自由に企画。参加率はとても高いです。"
                                                                                class="block">
                    <p class="text-sm pt10">
                        <trans data-src="BBQや社員旅行などメンバーが自由に企画。参加率はとても高いです。" data-dst="时和职员旅行等成员自由企。参加率很高。">
                            时和职员旅行等成员自由企。参加率很高。
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

                            Find Job !の応募フォームよりご応募ください。


                        </td>
                    </tr>
                    <tr>
                        <th>遴选过程</th>
                        <td>

                            ◎ ご応募から内定までは、2〜3週間程度とお考えください。 ◎
                            <br>
                            <br>【STEP1】Find Job !応募フォームによる書類選考
                            <br>▼
                            <br>【STEP2】1次面接
                            <br>※面接の際に課題提出をお願いする場合があります。
                            <br>▼
                            <br>【STEP3】2次面接
                            <br>▼
                            <br>【STEP4】内定
                            <br>
                            <br>※選考においてはなるべくスピーディーに行ないます。
                            <br>※面接日や入社日などは考慮しますので、ご相談ください。

                        </td>
                    </tr>
                    <tr>
                        <th>面试地</th>
                        <td>

                            東京都千代田区神田神保町1-1-17 東京堂神保町第3ビルディング8F

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
