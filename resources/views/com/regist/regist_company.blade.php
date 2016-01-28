<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <title>初回求人広告出稿はキャンペーン価格！ | Find Job !の求人広告</title>
    <meta name="description" content="初回求人広告掲載に限り50,000円が30,000円で40%OFFになるキャンペーン実施中！求人広告を掲載し、人材募集するならWebな人の転職サイト Find Job !（ファインドジョブ）。Webエンジニア/Webデザイナー/Webディレクターなど。" />
    <meta name="keywords" content="求人広告,掲載,出稿,アルバイト,転職,求人,派遣,就職,募集,findjob,ファインドジョブ,find job,株式会社ミクシィ,mixi" />
    <link rel="stylesheet" href="/shared/css_import/com_regist2.css?20140729" media="screen,print" />
    <script type="text/javascript" src="/shared/js/common.js"></script>
    <script type="text/javascript" src="/shared/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/shared/js/jquery/validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/shared/js/jquery-fjplugins.js"></script>
    <script type="text/javascript" src="/shared/js/fj/c/my/fj_validation.js?20121203"></script>
    <script type="text/javascript" src="/shared/js/fj.js"></script>
    <script src="/shared/js/com/register_company.js" type="text/javascript"></script>
    <script type="text/javascript" src="/shared/js/fj/c/com/regist.js?20150428"></script>
    <script type="text/javascript" src="/shared/js/fj/c/com/job.js?20120425"></script>
    <script type="text/javascript">
        <!--
        $(function(){

            fj.c.com.regist.regist_company.initForms();

            var enableBeforeunload = true;

            $('._btn_submit').click(function(){

                var prosupport = 0;
                var selectPlanID = $('[name="select_plan_id"]:checked').val();

                if ($("._option1").is(':visible')){
                    if (selectPlanID == '34' && $('[name="option_prosupport"]').is(':checked')) {
                        prosupport = 1;
                    }
                }
                else if($("._option2").is(':visible')){
                    if($('[name="option_prosupport_free"]').is(':checked')){
                        prosupport = 2;
                    }
                }

                $('form [name=plan_id]').val(selectPlanID);
                $('form [name=prosupport]').val(prosupport);

                if ($('form[id=com_form]').valid()) {
                    enableBeforeunload = false;
                }

                $('form[id=com_form]').submit();

                return false;
            });

            $(window).fjBindBeforeunload({fn: function(){
                if (enableBeforeunload) {
                    return fj.c.com.job.lockWindowMessage;
                }
            }});

        });

        //-->
    </script>

<body>
<!-- container -->

<div id="wrap">
    <!-- header -->
    <div id="header">
        <div class="inner clearfix">
            <h1><img src="/img/com/logo_findjob.gif" alt="Find Job !" /></h1>
            <p><img src="/img/com/tel02.gif" alt="ご不明点などありましたら、お問い合わせください0120-314-715平日10:00～18:00" /></p>
        </div>
    </div>
    <!-- /header -->
    <div id="ct">

        <div class="plan">
            <div class="planprice">
                <h2><img src="/img/com_regist/plan_title.gif" alt="はじめての企業様限定キャンペーン" /></h2>
                <p><img src="/img/com_regist/price_image3.gif" alt="検索結果表示" /></p>
                <div class="clearfix">
                    <dl class="basic">
                        <dt><img src="/img/com_regist/title_basic.gif" alt="ベーシックプラン" /></dt>
                        <dd class="price"><img src="/img/com_regist/price_basic.png" alt="特別価格30,000円（税別）" /></dd>
                    </dl>
                    <dl class="premium">
                        <dt><img src="/img/com_regist/title_premium.gif" alt="プレミアムプラン" /></dt>
                        <dd class="price"><img src="/img/com_regist/price_premium.png" alt="特別価格50,000円（税別）" /></dd>
                    </dl>
                    <dl class="spremium">
                        <dt><img src="/img/com_regist/title_spremium.gif" alt="Sプレミアムプラン" /></dt>
                        <dd class="price"><img src="/img/com_regist/price_spremium.png" alt="特別価格70,000円（税別）" /></dd>
                    </dl>
                </div>
                <div class="schedule"><img src="/img/com/top/schedule.gif" alt="掲載期間：2週間（全プラン）" ></div>
            </div>
        </div>


        <h2><img src="/img/com_regist/h2_title01.gif" alt="申し込み情報入力" /></h2>
        <ul class="step01">
            <li>申し込み情報入力</li>
            <li>内容確認</li>
            <li>申し込み完了</li>
        </ul>
        <p class="info">下記項目にご入力の上、規約等に同意して「確認画面へ」ボタンを押してください。</p>
        <form name="com_form" id="com_form" method="post" action="/com/regist/regist_company">
            <input type="hidden" name="submitted" value="1">
            <input type="hidden" name="show_confirm" value="1">
            <input type="hidden" name="plan_id" value="">
            <input type="hidden" name="prosupport" value="">
            <input type="hidden" name="unique_key" value="9af815f480f56cf64586e0ee963f1510">
            <h3>企業情報</h3>
            <table>
                <tr>
                    <th><img src="/img/user_agent/ico_ness.gif" alt="必須" class="fR" />公司名</th>
                    <td>
                        <dl class="clearfix">
                            <dt>漢字</dt>
                            <dd>
                                <input tabindex="1" name="name" type="text" id="name" value="{{$com->name or ''}}" maxlength="33" />
                                <div class="errortxtbox"></div>
                            </dd>
                        </dl>

                        <dl class="clearfix">
                            <dt>カナ</dt>
                            <dd>
                                <input tabindex="1" name="kana" type="text" id="kana" value="{{$com->kana or ''}}" maxlength="50" />
                                <div class="errortxtbox"></div>
                            </dd>
                        </dl>

                    </td>
                </tr>
                <tr>
                    <th><img src="/img/user_agent/ico_ness.gif" alt="必須" class="fR" />住所</th>
                    <td>
                        <dl class="clearfix">
                            <dt>邮政编码</dt>
                            <dd>
                                <input tabindex="1" name="zip" type="text" id="zip" value="{{$com->zip or ''}}" maxlength="8" />
                                <div class="errortxtbox"></div>
                            </dd>
                            <dd>
                                <div class="btn_zip">
                                    <input type="image" name="get_address_button" tabindex="1" value="郵便番号から住所を入力" src="/img/com_regist/btn_zip.gif" alt="郵便番号から住所を入力" id="get_address_button">
                                </div>
                            </dd>
                        </dl>

                        <dl class="clearfix">
                            <dt>都道府県</dt>
                            <dd>
                                <select name="jusho1" id="jusho1" tabindex="1">
                                    <option value="">選択してください</option>
                                    <option value="北海道" >北海道</option><option value="青森県" >青森県</option><option value="秋田県" >秋田県</option><option value="岩手県" >岩手県</option><option value="山形県" >山形県</option><option value="宮城県" >宮城県</option><option value="福島県" >福島県</option><option value="新潟県" >新潟県</option><option value="富山県" >富山県</option><option value="石川県" >石川県</option><option value="福井県" >福井県</option><option value="群馬県" >群馬県</option><option value="栃木県" >栃木県</option><option value="茨城県" >茨城県</option><option value="埼玉県" >埼玉県</option><option value="千葉県" >千葉県</option><option value="東京都" >東京都</option><option value="神奈川県" >神奈川県</option><option value="山梨県" >山梨県</option><option value="長野県" >長野県</option><option value="静岡県" >静岡県</option><option value="岐阜県" >岐阜県</option><option value="愛知県" >愛知県</option><option value="三重県" >三重県</option><option value="滋賀県" >滋賀県</option><option value="奈良県" >奈良県</option><option value="和歌山県" >和歌山県</option><option value="京都府" >京都府</option><option value="大阪府" >大阪府</option><option value="兵庫県" >兵庫県</option><option value="島根県" >島根県</option><option value="鳥取県" >鳥取県</option><option value="広島県" >広島県</option><option value="岡山県" >岡山県</option><option value="山口県" >山口県</option><option value="徳島県" >徳島県</option><option value="香川県" >香川県</option><option value="愛媛県" >愛媛県</option><option value="高知県" >高知県</option><option value="福岡県" >福岡県</option><option value="佐賀県" >佐賀県</option><option value="長崎県" >長崎県</option><option value="熊本県" >熊本県</option><option value="大分県" >大分県</option><option value="宮崎県" >宮崎県</option><option value="鹿児島県" >鹿児島県</option><option value="沖縄県" >沖縄県</option>
                                </select>
                                <div class="errortxtbox"></div>
                                <div class="error" id="zip_alert1" style="display:none">※郵便番号から住所が特定できませんでした</div>
                            </dd>
                        </dl>

                        <dl class="clearfix">
                            <dt>市区町村番地</dt>
                            <dd>
                                <input type="text" tabindex="1" value="{{$com->jusho2 or ''}}" name="jusho2" maxlength="50" id="jusho2" />
                                <div class="errortxtbox"></div>
                            </dd>
                        </dl>

                        <dl class="clearfix">
                            <dt>ビル名、フロア</dt>
                            <dd>
                                <input type="text" tabindex="1" value="{{$com->jusho3 or ''}}" name="jusho3" maxlength="50" id="jusho3" />
                            </dd>
                        </dl>
                    </td>
                </tr>
                <tr>
                    <th><img src="/img/user_agent/ico_ness.gif" alt="必須" class="fR" />電話番号</th>
                    <td>
                        <dl class="clearfix">
                            <dt>半角数字</dt>
                            <dd>
                                <input type="text" tabindex="1" value="{{$com->tel or ''}}" name="tel" maxlength="20" id="tel" />
                                <div class="errortxtbox"></div>
                            </dd>
                        </dl>

                    </td>
                </tr>
                <tr>
                    <th><img src="/img/user_agent/ico_ness.gif" alt="必須" class="fR" />ご担当者名</th>
                    <td>
                        <dl class="clearfix">
                            <dt>漢字</dt>
                            <dd>
                                <input type="text" tabindex="1" value="{{$com->tantoname or ''}}" name="tantoname" maxlength="33" id="tantoname" />
                                <div class="errortxtbox"></div>
                            </dd>
                        </dl>

                        <dl class="clearfix">
                            <dt>カナ</dt>
                            <dd>
                                <input type="text" tabindex="1" value="{{$com->tantokana or ''}}" name="tantokana" maxlength="50" id="tantokana" />
                                <div class="errortxtbox"></div>
                            </dd>
                        </dl>

                    </td>
                </tr>
                <tr>
                    <th><img src="/img/user_agent/ico_ness.gif" alt="必須" class="fR" />メールアドレス</th>
                    <td>
                        <dl class="clearfix">
                            <dt>半角英数</dt>
                            <dd>
                                <input type="text" tabindex="1" value="{{$com->mail or ''}}" name="mail" maxlength="255" id="mail" />
                                <div class="errortxtbox"></div>
                            </dd>
                        </dl>

                    </td>
                </tr>
                <tr>
                    <th>会社ホームページ</th>
                    <td>
                        <dl class="clearfix">
                            <dt>半角英数</dt>
                            <dd>
                                <input type="text" tabindex="1" value="http://{{$com->web or ''}}" name="web" maxlength="100" id="web" />
                                <div class="errortxtbox"></div>
                            </dd>
                        </dl>

                        <p class="marl120">※インターネット関連企業様で空欄の場合、登録できませんので必ず入力してください。</p>
                    </td>
                </tr>
                <tr>
                    <th><img src="/img/user_agent/ico_ness.gif" alt="必須" class="fR" />代表者名</th>
                    <td>
                        <dl class="clearfix">
                            <dt>漢字</dt>
                            <dd>
                                <input type="text" tabindex="1" value="{{$com->ceo or ''}}" name="ceo" maxlength="33" id="ceo" />
                                <div class="errortxtbox"></div>
                            </dd>
                        </dl>

                    </td>
                </tr>
            </table>

            <h3>商品情報</h3>
            <table>
                <tr>
                    <th><img src="/img/user_agent/ico_ness.gif" alt="必須" class="fR" />プラン名</th>
                    <td>
                        <input type="radio" tabindex="1" value="34" name="select_plan_id" id="plan_01"  />
                        <label for="plan_01">ベーシック：30,000円</label>
                        <input type="radio" tabindex="1" value="40" name="select_plan_id" id="plan_03"  checked />
                        <label for="plan_03">プレミアム：50,000円</label>
                        <input type="radio" tabindex="1" value="41" name="select_plan_id" id="plan_02"  />
                        <label for="plan_02">Sプレミアム：70,000円</label>
                    </td>
                </tr>
                <tr>
                    <th class="_select_option" style="display: none;">オプション</th>
                    <td class="_select_option" style="display: none;">
                        <div class="_option1">
                            <input type="checkbox" tabindex="1" value="" name="option_prosupport" id="prosupport" checked />
                            <label for="prosupport">求人広告制作代行サービス：<span class="sprice">15,000円（税別）</span>&nbsp;&nbsp;<span class="strike">通常価格50,000円（税別）</span></label>
                        </div>
                        <div class="_option2" style="display: none;">
                            <input type="checkbox" tabindex="1" value="" name="option_prosupport_free" id="prosupport_free"  checked/>
                            <label for="prosupport_free">求人広告制作代行サービス：<span class="sprice">10,000円（税別）</span>&nbsp;&nbsp;<span class="strike">通常価格50,000円（税別）</span></label>
                        </div>
                        <div class="vicarious">
                            <dl>
                                <dt>求人広告制作代行とは</dt>
                                <dd>専門のスタッフが取材を行い、企業様のターゲットにマッチした広告を制作します。</dd>
                            </dl>
                            <ul>
                                <li class="pen">採用ターゲットに合致した原稿で、マッチング率が大幅にアップします</li>
                                <li class="camera">専門スタッフによるプロ視点の取材で、貴社の魅力を最大限に伝えます</li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </table>




            <p>Find Job !の利用規約、個人情報の取り扱いについて必ずお読みください。</p>
            <div class="consent"><a href="/com_help/riyokiyaku.html" rel="nofollow" target="_blank">利用規約</a>及び<a href="http://www.mixi-recruitment.co.jp/privacy.html" target="_blank">個人情報の取り扱いについて</a>に同意して</div>
            <p class="btn_confirm"><a href="./com/regist/regist_company" class="_btn_submit" tabindex="1">確認画面へ</a></p>
    </div>
</div>

<!-- # (CF-0516) /regform_order02 # -->

</form>

</div>
<!-- ### /cont_full ### -->
</div>
<!-- ##### /contents ##### -->

<div id="footer">
    <div class="inner clearfix">
        <div class="pmark clearfix">
            <div class="simbol"><a href="http://privacymark.jp/" target="_blank" rel="nofollow"><img src="/img/com/pmark.gif" alt="プライバシーマーク" /></a></div>
            <p>Find Job !は、<br />「プライバシーマーク」を取得しています。</p>
        </div>
        <div class="company">
            <div class="logo"><a href="http://mixi.co.jp/profile/business/" target="_blank" rel="nofollow"><img src="/img/com/logo_mixirecruitment.png" alt="ミクシィ・リクルートメント" /></a></div>
            <p class="copy">Copyright (C) mixi recruitment, Inc. all rights reserved.</p>
        </div>
    </div>

</div>
<!-- /container -->

</body>
</html>
