
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=euc-jp" />
    <title>求人広告作成 [求人広告・応募者管理] | Find Job !の求人広告</title>
    <meta name="description" content="初回求人広告掲載に限り価格が57.1%OFFになるキャンペーン実施中！上位掲載プラン73,500円が31,500円で掲載可能です。求人広告を掲載し、人材募集するならアルバイト・転職・派遣のIT系求人情報サイト Find Job !（ファインドジョブ）。事務/クリエイティブ/エンジニア系など。">
    <meta name="keywords" content="求人広告,掲載,出稿,アルバイト,転職,求人,派遣,就職,募集,findjob,ファインドジョブ,find job,株式会社ミクシィ,mixi">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <link rel="stylesheet" href="/shared/css_import/com_job_pr.css" media="screen,print">
    <script type="text/javascript" src="/shared/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/shared/js/jquery-fjplugins.js"></script>
    <script type="text/javascript" src="/shared/js/fj.js?20120425"></script>
    <script type="text/javascript" src="/shared/js/fj/c/com/job.js"></script>
    <script type="text/javascript" src="/shared/com/job/editjob1.js"></script>
    <script type="text/javascript">

        $(function(){
            fj.util.lockWindow({
                unlockItems: ".bteditjob a",
                message: fj.c.com.job.lockWindowMessage});

            var $myForm = $('._myForm');

            // 「コピーする求人広告を選ぶ」ボタン
            $('._openCopyWindow').click(function($ev){
                $('[name=copy]')
                        .attr('target', '_blank')
                        .submit();
                return false;
            });

            // 「勤務地と同じ」ボタン
            $('._copyJushoToMensetuti').click(function($ev){
                $myForm
                        .find('[name=mensetuti]')
                        .val($myForm.find('[name=jusho]').val());
                return false;
            });

            // 「内容をクリアする」ボタン
            $('._clearForm').each(function(i){
                $(this).click(function($ev){
                    clearForm((i + 1).toString());
                    return false;
                });
            });

            // 「条件nの内容をコピーする」ボタン
            $('._copyFromKeitai1').each(function(i){
                $(this).click(function($ev){
                    refresh(1, i + 2);
                    return false;
                });
            });

            // 「内容を保存する」ボタン
            $('._submitRegisterJobDraft').click(function($ev){
                $myForm
                        .attr('action', '/com/job/register_job_draft.pl')
                        .find('[name=job_draft]')
                        .val(1).end()
                        .find('[name=draft_confirm]')
                        .val(1).end()
                        .submit();
                return false;
            });

            // 「PR情報編集へ進む」ボタン
            $('._formSubmit').click(function($ev){
                $myForm.submit();
                return false;
            });

        });

    </script>
</head>

<body>

<!-- container -->
<div id="container" class="hd_light">
    <a name="pagetop"></a>

    <!-- header -->
    <div id="header_simple">
        <div id="header_top">
            <!-- hd_left -->
            <p id="hd_left">
                <a href="/com/"></a></p>
            <!-- /hd_left -->

            <!-- hd_center -->
            <div id="hd_center">
                <p>
                    クリエーター・事務・エンジニアの転職・アルバイト・派遣情報<br>
                    Find Job ! へようこそ！
                </p>
            </div>
            <!-- /hd_center -->
        </div>
    </div>

    <!-- <div class="clear_space_5">&nbsp;</div> -->
    <!-- /header -->



    <!-- cont_title -->
    <div id="cont_title">

        <div class="job_pr_draw"><h1>求人広告作成</h1></div>

    </div>
    <!-- /cont_title -->


    <!-- contents -->
    <div id="contents" class="pad_t_10">
        <!-- cont_left -->
        <div>




            <!-- ad_modify_flow -->
            <div id="detail_flow2">
                <ul id="flow01" class="clearfix">
                    <li class="step001off"><span>Step1.企業情報編集</span></li>
                    <li class="step002on"><strong>Step2.募集要項編集</strong></li>
                    <li class="step003off"><span>Step3.PR情報編集</span></li>
                    <li class="step004off"><span>Step4.求人情報確認</span></li>
                    <li class="step005off"><span>Step5.企業情報確認</span></li>
                    <li class="step006off"><span>Step6.完了</span></li>
                </ul>
            </div>
            <!-- /ad_modify_flow -->


            @include('layouts._alert')


            <div class="mar_b_15 mar_t_15">
                <p>ステップごとに求人広告の情報を入力していきます。最初に「基本情報」を入力してください。</p>
            </div>





            <!-- plan -->
            <div class="cart_cont">
                <p class="cart_cont_title"><img src="/img/com_job_pr/t_buy_plan.gif" alt="購入した商品" width="73" height="13"></p>
                <!-- table -->
                <div>
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="table_column01 gray_bg"><strong>初回ベーシックプラン</strong></td>
                            <td class="table_column02 gray_bg">
                                <img src="/img/com_common/plan_icon_
2week.gif" width="68" height="14" alt="掲載：2週間">

                                <img src="/img/option/option_icon_s32.gif" width="68" height="14" alt="新着表示">

                            </td>
                        </tr>

                        <tr>
                            <td class="empty_cell">&nbsp;</td>
                            <td colspan="3" class="total">合計 <strong>￥30,000</strong>&nbsp;<span>（税別）</span></td>
                        </tr>
                    </table>
                </div>
                <!-- /table -->
            </div>
            <!-- /plan -->


            <!-- alert -->
            <div class="alert">
                <ul>


                    <li>修正された求人は、一度修正内容の審査を行います。</li>
                    <li>掲載中の求人を修正する場合、審査中は修正前の状態で掲載を続けるか、審査完了まで一旦サイト上に表示されなくするかを選択可能です。
                    <li>審査時間は平日10:00～18:00にご変更いただいた場合は3時間以内、それ以外は翌営業日13時迄となっております。<br>
                        <a href="/com_help/usage_ad_new.html#c03" class="tlink3 f10" target="_blank">広告掲載スケジュール</a></li>

                </ul>
            </div>
            <!--/alert-->



            <form name="myFORM" class="_myForm" method="post">
                <input type="hidden" name="ses_job" value="66a995da18cb3e1865ef52acd9b527d8">
                <input type="hidden" name="ses_com" value="1d572649e064d30a678a5d7a8f262bdc">
                <input type="hidden" name="ses_common" value="1a0b7c38419f5704665e1eebb2efdeea">
                <input type="hidden" name="ses_pr" value="">
                <input type="hidden" name="modify" value="">
                <input type="hidden" name="next" value="1">
                <input type="hidden" name="mensetuti_default" value="">
                <input type="hidden" name="longitude" value="">
                <input type="hidden" name="latitude" value="">
                <input type="hidden" name="draft_confirm">
                <input type="hidden" name="job_draft">
                <input type="hidden" name="job_draft_id" value="">
                <input type="hidden" name="jobID" value="">
                <input type="hidden" name="option_id" value="">
                <input type="hidden" name="display_tel" value="0"><!-- BTS:3698 -->

                <!-- set -->
                <div class="box03" id="default_data">
                    <div class="imgtitle_bg">
                        <div class="imgtitle">
                            <h2>基本情報</h2>
                        </div>
                    </div>
                </div>

                <div class="box_body table_normal">
                    <table cellspacing="1">

                        <tr>
                            <th>
                                招聘职业种类<span> <br>
※必項</span></th>
                            <td>

                                <p class="mar_b_10"><select name="shokushu" id="shokushu" size="1" class="w_410" tabindex="1">

                                        <option value="0" >選択してください</option>

                                        <option value="205" >Webデザイナー・HTMLコーダー</option>

                                        <option value="1" >Webディレクター・Webプロデューサー</option>

                                        <option value="203" >Webエンジニア・Webプログラマ</option>

                                        <option value="207" >スマートフォンエンジニア</option>

                                        <option value="204" >ネットワークエンジニア・サーバーエンジニア</option>

                                        <option value="2" >エンジニア その他</option>

                                        <option value="5" >グラフィックデザイナー・クリエイター</option>

                                        <option value="3" >ユーザーサポート</option>

                                        <option value="4" >一般事務・営業事務</option>

                                        <option value="6" >営業・企画営業</option>

                                        <option value="201" >人事、経理、広報、法務</option>

                                        <option value="200" >その他</option>

                                    </select></p>
                                <p id="cont_left_read">※当方の判断により、別カテゴリに移動させていただくこともあります。</p>
                                <p class="align_right f10"><a class="tlink3" href="/com_help/ad_attention.html#a02" target="_blank">募集職種カテゴリについて</a></p>
                            </td>
                        </tr>

                        <tr>
                            <th> 招聘职业标题<span><br>
※必項</span></th>
                            <td>
                                <p class="alert_txt">募集職種を入力して下さい。</p>
                                <p class="mar_b_10">
                                    <input type="text" name="shosai" class="w_410" id="jobtype" value="" tabindex="2">
                                    <span class="gray_66 f10"> 全角33文字以内</span></p>
                                <ul>
                                    <li>※複数職種は入力できません。<br>
                                        <span class="icon_simile">○　『Find Job !』のWebデザイナー</span><br>
                                        <span class="icon_simile">×　Webデザイナー、Webディレクター</span><br>
                                        <span class="icon_simile">×　システムエンジニア、プログラマ</span></li>
                                    <li>※紹介予定派遣の場合は募集職種名の後ろに[紹介予定派遣]と必ずご明記ください。</li>
                                    <li>※人材紹介の場合は募集職種名の後ろに[人材紹介]と必ずご明記ください。</li>
                                </ul>
                                <p class="align_right f10"><a class="tlink3" href="/com_help/ad_attention.html#a03" target="_blank">募集職種の記載について</a></p>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="1" class="bg_ecf"> 招聘背景</th>
                            <td><p>事業拡大/欠員補充など、今回の求人掲載の理由があればご記入ください。</b>
                                </p>
                                <p>

                                    <textarea name="background" rows="5" class="w_410" id="job" tabindex="3"></textarea>
                                    <span class="gray_66 f10"> 全角400文字以内</span></p>
                            </td>
                        </tr>
                        <tr>
                            <th> 工作内容<span> <br>
※必項</span></th>
                            <td><p> 仕事内容をできるだけ詳細にご記入ください。<br />（業務委託契約や請負先への出向の場合は、それが分かるようにご記入ください。）
                                </p>
                                <p>

                                    <textarea name="job_details" rows="5" class="w_410" id="job" tabindex="3"></textarea>
                                    <span class="gray_66 f10"> 全角2000文字以内</span></p>
                                <p class="align_right f10"><a class="tlink3" href="/com_help/ad_point_step2.html" target="_blank">仕事内容のポイント</a></p>
                            </td>
                        </tr>
                        <tr>
                            <th> 工作地<span><br>
※必項</span></th>
                            <td><p>勤務地の住所をビル名まで正確にご記入ください。複数ある場合はそれぞれご記入ください。
                                    <br>
                                    派遣(出向)案件の場合は、派遣(出向)先の住所をご記入ください。 </p>

                                <p><textarea name="jusho" class="w_410" id="joblocation" tabindex="8">時以外は企業に公 学校名</textarea>
                                    <span class="gray_66 f10"> 全角500文字以内</span></p>
                                <p class="icon_simile">渋谷区渋谷△△-××-□□　渋谷○×△ビル 20F</p></td>
                        </tr>
                        <tr>
                            <th> <p>勤務地チェック</p>
                                <p><span> ※必項</span></p></th>
                            <td><p>勤務地に当てはまるものをチェックしてください。<br />（在宅勤務の場合は『在宅』をチェックしてください。）</p>

                                <p class="s_l">
                                    <select name="kinmuchi" size="6" class="w_200" id="locationcheck" tabindex="9" multiple>

                                        <option value="1" >東京23区</option>

                                        <option value="2" >東京23区外</option>

                                        <option value="3" >神奈川県</option>

                                        <option value="4" >埼玉県</option>

                                        <option value="5" >千葉県</option>

                                        <option value="6" >茨城県</option>

                                        <option value="7" >栃木・群馬</option>

                                        <option value="9" >大阪府</option>

                                        <option value="10" >京都府</option>

                                        <option value="11" >兵庫県</option>

                                        <option value="12" >奈良・滋賀</option>

                                        <option value="13" >和歌山県</option>

                                        <option value="15" >愛知県</option>

                                        <option value="16" >静岡県</option>

                                        <option value="17" >岐阜・三重</option>

                                        <option value="18" >山梨・長野</option>

                                        <option value="20" >北海道</option>

                                        <option value="21" >東北</option>

                                        <option value="22" >北陸</option>

                                        <option value="23" >中国</option>

                                        <option value="24" >四国</option>

                                        <option value="25" >九州・沖縄</option>

                                        <option value="26" >海外</option>

                                        <option value="27" >在宅</option>

                                    </select>
                                </p>
                                <p class="s_l w_218">複数選択の方法：Windowsは『Ctrlキー』、Macは『Commandキー』を押しながらクリックしてください。 </p>
                                <div class="clear"></div></td>
                        </tr>
                        <tr>
                            <th> <p>勤務地最寄駅</p>
                                <p><span>※必項</span></p></th>
                            <td>

                                <p><textarea name="railway" class="w_410" id="station" tabindex="10"></textarea>
                                    <span class="gray_66 f10"> 全角120文字以内</span></p>
                                <p class="icon_simile">山手線 渋谷駅、京王井の頭線 神泉駅</p>
                                <p class="gray_66 f10">※最寄駅検索の対象となる駅は最初の駅名のみとなります。</p></td>
                        </tr>
                        <tr>
                            <th> 面接地<span><br>
※必項</span></th>
                            <td><p>地図表示に使用しますので、面接地の住所をビル名まで正確にご記入ください。</p>

                                <p><input name="mensetuti" type="text" class="w_410" id="comlocation" value="" tabindex="11">
                                </p>
                                <p><span class="icon_simile float_l">渋谷区渋谷△△-××-□□　渋谷○×△ビル 20F</span><span class="span_04"><a href="javascript:void(0);" class="_copyJushoToMensetuti" tabindex="12"><img src="/img/com_common/bt_location_as.gif" width="99" height="16" border="0" alt="勤務地と同じ"></a></span></p></td>
                        </tr>
                        <tr>
                            <th>应聘方法<span> <br>
※必項</span></th>
                            <td>

                                <p>Find Job !の応募フォームからの応募が必須となっておりますので下記以外による応募受付はできません。</p>
                                <p>

                                    <label for="how_apply1_1">
                                        <input name="how_apply1" type="radio" tabindex="13" id="how_apply1_1" value="1" checked>Find Job !応募フォームから受付
                                    </label>
                                    <br>

                                    <label for="how_apply1_3">
                                        <input name="how_apply1" type="radio" tabindex="13" id="how_apply1_3" value="3" >Find Job !応募フォームと電話による受付
                                    </label>


                                </p></td>
                        </tr>
                        <tr>
                            <th>選考プロセス<br>
                                <span> ※必項</span></th>
                            <td>

                                <p>
<textarea name="process" rows="5" class="w_410" id="process" tabindex="14" wrap="virtual">◎ ご応募から内定までは、2週間程度とお考えください。 ◎

【STEP1】Find Job !応募フォームによる書類選考
   ▼
【STEP2】配属先担当者との面接
   ▼
【STEP3】内定

※選考においてはなるべくスピーディーに行います。
※面接日等は考慮しますので、ご相談ください。
</textarea>
                                    <span class="gray_66 f10"> 全角1000文字以内</span>
                                </p></td>
                        </tr>

                        <tr>
                            <th>担当者<br>
                                <span> ※必項</span></th>
                            <td>

                                <p><input name="tantosha" type="text" id="name" value="山田" tabindex="15"></p>
                                <p>※求人情報に表示されます。</p>
                            </td>
                        </tr>
                        <tr>
                            <th>メールアドレス<br>
                                <span> ※必項</span></th>
                            <td>

                                <p>
                                    <span class="gray_66 f10"> メイン:</span>
                                    <input name="mail" type="text" id="mail" value="123pd@gmail.com" tabindex="16" class="w_410">
                                    <span class="gray_66 f10"> 半角英数字</span></p>

                                <p>
                                    <span class="gray_66 f10"> サブ1:</span>
                                    <input name="sub_mail1" type="text" value="" tabindex="16" class="w_410">
                                </p>

                                <p>
                                    <span class="gray_66 f10"> サブ2:</span>
                                    <input name="sub_mail2" type="text" value="" tabindex="16" class="w_410">
                                </p>

                                <p class="mar_t_10">※求職者からの応募メールは、Find Job !の応募フォームを使って、企業管理画面に送信されます。<br>
                                    ※求人情報には表示されませんが、この求人に応募した求職者には<span class="txt_orange">緊急連絡先としてメインに指定されたメールアドレスが通知</span>されます。<br>
                                    ※こちらにご入力いただいた全てのメールアドレスに、Find Job!から「応募メール着信のお知らせ」をお届けします。
                                    <span class="span_01"><a class="tlink3 f10" href="/com_help/ad_attention.html#a11" target="_blank">応募メールサンプル</a></span></p></td>
                        </tr>

                        <tr>
                            <th><p>电话号码</p>
                                <p><span>※必項</span></p></th>
                            <td>

                                <p><input name="tel" type="text" id="no" tabindex="17" value="123432">
                                    <span class="gray_66 f10"> 半角英数字</span></p>
                                <p class="mar_t_10">
                                    ※この求人に応募した求職者に<span class="txt_orange">緊急連絡先</span>としてメールで通知されます。
                                </p>
                            </td>
                        </tr>
                    </table>

                </div>
                <!-- /set -->

                <!-- set -->
                <div class="box03" id="job_type">
                    <div class="imgtitle_bg">
                        <div class="imgtitle"><h2>雇用形態</h2></div>
                    </div>
                </div>

                <div class="box_body table_normal">
                    <p>雇用形態から待遇まで、条件ごとにご記入ください。<br>
                        条件は入力必須です。条件が複数ある場合は、条件2、3にご記入ください。</p>
                    <table cellspacing="1">
                        <tr>
                            <th rowspan="2" class="bg_ecf">条件のコピーと削除</th>
                            <td class="button_td">条件1</td>
                            <td class="button_td">条件2</td>
                            <td class="button_td">条件3</td></tr>
                        <tr>
                            <td class="button_td"><a href="javascript:void(0);" class="_clearForm"><img src="/img/com_common/bt_job_pr_clear.gif" width="167" height="16" alt="内容をクリアする" /></a></td>
                            <td class="button_td"><a href="javascript:void(0);" class="_copyFromKeitai1"><img src="/img/com_common/bt_1_copy.gif" width="167" height="16" alt="条件内容をコピーする" /></a><br>
                                <a href="javascript:void(0);" class="_clearForm"><img src="/img/com_common/bt_job_pr_clear.gif" alt="内容をクリアする" width="167" height="16"></a></td>
                            <td class="button_td"><a href="javascript:void(0);" class="_copyFromKeitai1"><img src="/img/com_common/bt_1_copy.gif" width="167" height="16" alt="条件内容をコピーする" /></a><br>
                                <a href="javascript:void(0);" class="_clearForm"><img src="/img/com_common/bt_job_pr_clear.gif" alt="内容をクリアする" width="167" height="16"></a></td>
                        </tr>


                        <tr>
                            <th rowspan="2">雇用形態<br>
                                <span> ※条件1は必項</span></th>
                            <td>
                                <select name="keitai1" class="w_001" id="keitai1" tabindex="19">

                                    <option value="0" >選択してください</option>

                                    <option value="2" >正社員(中途)</option>

                                    <option value="7" >正社員(新卒)</option>

                                    <option value="1" >アルバイト</option>

                                    <option value="6" >契約社員</option>

                                    <option value="5" >派遣社員</option>

                                    <option value="3" >業務委託</option>

                                </select>
                            </td>
                            <td>
                                <select name="keitai2" class="w_001" id="keitai2" tabindex="46">

                                    <option value="0" >選択してください</option>

                                    <option value="2" >正社員(中途)</option>

                                    <option value="7" >正社員(新卒)</option>

                                    <option value="1" >アルバイト</option>

                                    <option value="6" >契約社員</option>

                                    <option value="5" >派遣社員</option>

                                    <option value="3" >業務委託</option>

                                </select>
                            </td>
                            <td>
                                <select name="keitai3" class="w_001" id="keitai3" tabindex="64">

                                    <option value="0" >選択してください</option>

                                    <option value="2" >正社員(中途)</option>

                                    <option value="7" >正社員(新卒)</option>

                                    <option value="1" >アルバイト</option>

                                    <option value="6" >契約社員</option>

                                    <option value="5" >派遣社員</option>

                                    <option value="3" >業務委託</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">




                                <script Language=javascript>
                                    <!--

                                    function show(inputData) {
                                        var objID = document.getElementById("layer_" + inputData);
                                        var buttonID = document.getElementById("category_" + inputData);

                                        if (objID.className == 'close') {
                                            objID.style.display = 'block';
                                            objID.className = 'open';
                                        } else {
                                            objID.style.display = 'none';
                                            objID.className = 'close';
                                        }
                                    }

                                    //-->
                                </script>

                                <p>

                                <ul>
                                    <li><a href="javascript:void(0)" id="category_1" onclick="show('1');">・同時にご選択いただける雇用形態についてはこちら（派遣業・紹介業の企業様のみ）</a><br>
                                        <div id="layer_1" style="display: none;position:relative;" class="close">
                                            「派遣社員」をご選択いただく場合は、紹介予定派遣（「派遣社員」）および人材紹介（「正社員（新卒）」「正社員（中途）」「契約社員」）の場合のみ、同時に募集していただけます。<br>
                                            <ul>
                                                <li><span class="icon_simile">○　「派遣社員」＋「派遣社員」</span>
                                                <li><span class="icon_simile">○　「派遣社員」＋「派遣社員」 ※紹介予定派遣</span>
                                                <li><span class="icon_simile">○　「派遣社員」＋「正社員（中途）」 ※人材紹介</span>
                                                <li><span class="icon_simile">×　「派遣社員」＋「正社員（中途）」 ※自社内勤務</span>
                                            </ul>
                                        </div>
                                </p>

                                <p class="align_right f10"><a class="tlink3" href="/com_help/ad_attention.html#a05" target="_blank">雇用形態について</a></p>
                            </td>
                        </tr>

                        <tr>
                            <th rowspan="2">工作时间<span><br>
※条件1は必項</span></th>
                            <td><input name="jikan1" type="text" id="jikan1" tabindex="20" class="w_001" value=""></td>
                            <td><input name="jikan2" type="text" id="jikan2" tabindex="47" class="w_001" value=""></td>
                            <td><input name="jikan3" type="text" id="jikan3" tabindex="65" class="w_001" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <ul>
                                    <li>※24時間表記でご記入ください。<br />
                                        <p class="icon_simile">9：00～17：00 実働7時間</p>
                                        <p class="icon_simile">フレックスタイム制 (コアタイム11：00～15：00) 標準労働時間8時間 </p>
                                        <p class="icon_simile">9：00～21：00の間で実働6～8時間(シフト制)</p>
                                    </li>
                                    <li>※勤務地によって異なる場合も目安となる勤務時間を明記してください。</li>
                                    <li>※フレックスタイム制の場合は標準労働時間を明記してください。</li>
                                    <li>※在宅等で時間を指定しない場合は、その旨を明記してください。</li>
                                </ul>
                                <p class="align_right"><a class="tlink3 f10" href="/com_help/ad_attention.html#a07" tabindex="101" target="_blank">勤務時間の記載について</a></p></td>
                        </tr>

                        <tr>
                            <th rowspan="2">休息日<span><br>
※条件1は必項</span></th>
                            <td><textarea name="kyujitu1" id="kyujitu1" tabindex="21" class="w_001"></textarea></td>
                            <td><textarea name="kyujitu2" id="kyujitu2" tabindex="48" class="w_001"></textarea></td>
                            <td><textarea name="kyujitu3" id="kyujitu3" tabindex="66" class="w_001"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="3">

                                <p class="alert_txt">条件1の休日を入力して下さい</p>
                                <p class="alert_txt">条件2の休日を入力して下さい</p>
                                <p class="alert_txt">条件3の休日を入力して下さい</p>

                                <span class="gray_66 f10"> 全角120文字以内</span>
                                <p class="icon_simile mar_t_5">完全週休2日制(土・日)、祝日、有給休暇(入社半年後に12日間)、夏季・年末年始休暇、慶弔</p>
                                <p class="icon_simile">シフト制による週休2～3日制(曜日は応相談)</p>
                                <p>※シフト制等の場合、休日日数もしくは勤務日数(週何日以上の勤務)がわかるようにご記入ください</p>
                                <p class="align_right"><a class="tlink3 f10" href="/com_help/ad_attention.html#a08" tabindex="101" target="_blank">休日の記載について</a></p>
                            </td>
                        </tr>

                        <tr>
                            <th rowspan="3">薪资<span><br>
※条件1は必項</span></th>
                            <td colspan="3">
                                <p><a href="http://www2.mhlw.go.jp/topics/seido/kijunkyoku/minimum/minimum-02.htm" target="_blank">地域別最低賃金</a> で定められた金額を下回る給与はご掲載することができません。
                                    出来高制等で1案件単位で支給される場合は、賃金形態を『選択』のまま「給与補足」欄にご記入ください。</p></td>
                        </tr>
                        <tr>
                            <td>
                                <select name="ky1_kind" size=1 id="ky1_kind" tabindex="22" class="w_002">

                                    <option value="0" >選択</option>

                                    <option value="hour" >時給</option>

                                    <option value="day" >日給</option>

                                    <option value="month" >月給</option>

                                    <option value="year" >年俸</option>

                                </select>
                                <input name="ky1_from" type="text" id="ky1_from" tabindex="23" class="w_003" value="">
                                円～
                                <input name="ky1_to" type="text" id="ky1_to" tabindex="24" class="w_003" value="">
                                円
                            </td>
                            <td>
                                <select name="ky2_kind" size=1 id="ky2_kind" tabindex="49" class="w_002">

                                    <option value="0" >選択</option>

                                    <option value="hour" >時給</option>

                                    <option value="day" >日給</option>

                                    <option value="month" >月給</option>

                                    <option value="year" >年俸</option>

                                </select>
                                <input name="ky2_from" type="text" id="ky2_from" tabindex="50" class="w_003" value="">
                                円～
                                <input name="ky2_to" type="text" id="ky2_to" tabindex="51" class="w_003" value="">
                                円
                            </td>
                            <td>
                                <select name="ky3_kind" size=1 id="ky3_kind" tabindex="67" class="w_002">

                                    <option value="0" >選択</option>

                                    <option value="hour" >時給</option>

                                    <option value="day" >日給</option>

                                    <option value="month" >月給</option>

                                    <option value="year" >年俸</option>

                                </select>
                                <input name="ky3_from" type="text" id="ky3_from" tabindex="68" class="w_003" value="">
                                円～
                                <input name="ky3_to" type="text" id="ky3_to" tabindex="69" class="w_003" value="">
                                円
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">



                                <p class="icon_simile">月給20万円の場合→200000円～200000円</p>
                                <p class="icon_simile">時給1000円～1500円の場合→1000円～1500円</p>
                                <p class="txt_orange">※金額が確定していない場合も、一律で支給される最低額の明記が必要となっています。「応相談」「当社規定による」等の表記のみではご掲載することはできません。</p>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg_ecf" rowspan="2">給与補足</th>
                            <td><textarea name="ky1_info" id="ky1_info" class="w_001" rows="2" tabindex="25"></textarea></td>
                            <td><textarea name="ky2_info" id="ky2_info" class="w_001" rows="2" tabindex="52"></textarea></td>
                            <td><textarea name="ky3_info" id="ky3_info" class="w_001" rows="2" tabindex="70"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <span class="gray_66 f10"> 全角120文字以内</span>
                                <p>給与についての補足や、1案件あたりの給与はこちらにご記入ください。</p>
                                <p><span class="icon_simile">別途手当て、歩合給あり</span><span class="icon_simile">完全歩合制：1案件につき5万円～10万円</span></p></td>
                        </tr>
                        <tr>
                            <th>交通費<br>
                                <span>※条件1は必項</span></th>
                            <td>

                                <label for="koutsuuhi1_all">
                                    <input name="koutsuuhi1" type="radio" tabindex="26" id="koutsuuhi1_all" value="all" >全支給
                                </label>
                                <br />

                                <label for="koutsuuhi1_half">
                                    <input name="koutsuuhi1" type="radio" tabindex="26" id="koutsuuhi1_half" value="half" >一部支給
                                </label>
                                <br />

                                <label for="koutsuuhi1_none">
                                    <input name="koutsuuhi1" type="radio" tabindex="26" id="koutsuuhi1_none" value="none" >支給なし
                                </label>
                                <br />

                            </td>
                            <td>

                                <label for="koutsuuhi2_all">
                                    <input name="koutsuuhi2" type="radio" tabindex="53" id="koutsuuhi2_all" value="all" >全支給
                                </label>
                                <br />

                                <label for="koutsuuhi2_half">
                                    <input name="koutsuuhi2" type="radio" tabindex="53" id="koutsuuhi2_half" value="half" >一部支給
                                </label>
                                <br />

                                <label for="koutsuuhi2_none">
                                    <input name="koutsuuhi2" type="radio" tabindex="53" id="koutsuuhi2_none" value="none" >支給なし
                                </label>
                                <br />

                            </td>
                            <td>

                                <label for="koutsuuhi3_all">
                                    <input name="koutsuuhi3" type="radio" tabindex="71" id="koutsuuhi3_all" value="all" >全支給
                                </label>
                                <br />

                                <label for="koutsuuhi3_half">
                                    <input name="koutsuuhi3" type="radio" tabindex="71" id="koutsuuhi3_half" value="half" >一部支給
                                </label>
                                <br />

                                <label for="koutsuuhi3_none">
                                    <input name="koutsuuhi3" type="radio" tabindex="71" id="koutsuuhi3_none" value="none" >支給なし
                                </label>
                                <br />

                            </td>
                        </tr>
                        <tr>
                            <th class="bg_ecf" rowspan="2">交通費補足</th>
                            <td><input name="koutsuuhi1_info" type="text" class="w_001" id="koutsuuhi1_info" value="" tabindex="27"></td>
                            <td><input name="koutsuuhi2_info" type="text" class="w_001" id="koutsuuhi2_info" value="" tabindex="54"></td>
                            <td><input name="koutsuuhi3_info" type="text" class="w_001" id="koutsuuhi3_info" value="" tabindex="72"></td>
                        </tr>
                        <tr>
                            <td colspan="3">



                                <p class="icon_simile">月2万円まで</p></td>
                        </tr>
                        <tr>
                            <th class="bg_ecf" rowspan="2">待遇</th>
                            <td><textarea name="taigu1" id="taigu1" class="w_001" rows="2" tabindex="28"></textarea></td>
                            <td><textarea name="taigu2" id="taigu2" class="w_001" rows="2" tabindex="55"></textarea></td>
                            <td><textarea name="taigu3" id="taigu3" class="w_001" rows="2" tabindex="73"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="3">



                                <span class="gray_66 f10"> 全角120文字以内</span>
                                <p class="icon_simile"> 昇給年1回（4月）、賞与年2回（6月・12月）、各種社会保険完備、社員登用制度</p></td>
                        </tr>
                        <tr>
                            <th class="bg_ecf" rowspan="6">研修・試用期間</th>
                            <td colspan="3"><p>研修もしくは試用期間の有無と期間を記入してください。</p></td>
                        </tr>
                        <tr>
                            <td>
                                <select name="training_period_kind1" size=1 id="training_period_kind1" tabindex="29" class="w_002" style="width:105px;">

                                    <option value="undecided" >未定</option>

                                    <option value="training_trial" >研修・試用期間</option>

                                    <option value="training" >研修期間</option>

                                    <option value="trial" >試用期間</option>

                                </select>
                                <input name="training_period1" type="text" id="training_period1" class="w_001" tabindex="30" value=""></td>
                            <td>
                                <select name="training_period_kind2" size=1 id="training_period_kind2" tabindex="56" class="w_002" style="width:105px;">

                                    <option value="undecided" >未定</option>

                                    <option value="training_trial" >研修・試用期間</option>

                                    <option value="training" >研修期間</option>

                                    <option value="trial" >試用期間</option>

                                </select>
                                <input name="training_period2" type="text" id="training_period2" class="w_001" tabindex="57" value=""></td>
                            <td>
                                <select name="training_period_kind3" size=1 id="training_period_kind3" tabindex="74" class="w_002" style="width:105px;">

                                    <option value="undecided" >未定</option>

                                    <option value="training_trial" >研修・試用期間</option>

                                    <option value="training" >研修期間</option>

                                    <option value="trial" >試用期間</option>

                                </select>
                                <input name="training_period3" type="text" id="training_period3" class="w_001" tabindex="75" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="3">






                                <p>
                                <p>研修・試用期間を設けていない場合は、「未定」をご選択ください。</p>
                                <p class="gray_66 f10">全角30文字以内</p>
                                <span class="icon_simile">3ヶ月</span>
                                <span class="icon_simile">3ヶ月※スキル・経験に応じて変更あり</span>
                                </p>
                            </td>
                        </tr>
                        <tr><td colspan="3">試用期間がある場合の給与の明記は必須になります。</td></tr>
                        <tr>
                            <td><input name="training_ky1" type="text" id="training_ky1" class="w_001" tabindex="31" value=""></td>
                            <td><input name="training_ky2" type="text" id="training_ky2" class="w_001" tabindex="58" value=""></td>
                            <td><input name="training_ky3" type="text" id="training_ky3" class="w_001" tabindex="76" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="3">



                                <p class="gray_66 f10">※給与が本採用時と変わらない場合もその旨を明記してください。</p>
                                <p>
                                    <span class="icon_simile">給与は本採用時と同額</span>
                                    <span class="icon_simile">時給1000円</span>
                                    <span class="icon_simile">月給19万円～</span></p></td>
                        </tr>
                        <tr>
                            <th class="bg_ecf" rowspan="4">応募資格（求めるスキル・資格経験など）</th>
                            <td colspan="3"><p>募集職種の実務経験が無くても勤務可能な場合はチェックボックスにチェックを入れてください。</p></td>
                        </tr>
                        <tr>
                            <td><p class="float_l_w_001"><label for="mikeiken1"><input type="checkbox" name="v" tabindex="42" value="1" id="mikeiken1">実務経験不問</label></p></td>
                            <td><p class="float_l_w_001"><label for="mikeiken2"><input type="checkbox" name="mikeiken2" tabindex="60" value="1" id="mikeiken2">実務経験不問</label></p></td>
                            <td><p class="float_l_w_001"><label for="mikeiken3"><input type="checkbox" name="mikeiken3" tabindex="78" value="1" id="mikeiken3">実務経験不問</label></p></td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="sikaku1" rows="10" id="skill1" tabindex="43" class="w_001"></textarea>
                            </td>
                            <td>
                                <textarea name="sikaku2" rows="10" id="skill1" tabindex="61" class="w_001"></textarea>
                            </td>
                            <td>
                                <textarea name="sikaku3" rows="10" id="skill1" tabindex="79" class="w_001"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">



                                <p class="align_right"><span class="gray_66 f10"> 全角1000文字以内</span><br />
                                    <a class="tlink3 f10" href="/com_help/ad_point_step4.html" target="_blank">求めるスキル・資格経験書き方のポイント</a></p>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /set -->

                <!-- pr_help -->
                <div class="box03">
                    <div class="imgtitle_bg">
                        <div class="imgtitle"><img src="/img/common/t_pr_regulations.gif" width="173" height="22" alt="Find Job !広告掲載規定"></div>
                    </div>
                </div>

                <div class="box_body">
                    <p>
                        【注意 !!】 弊社が下記に該当すると判断した広告は、掲載をお断りもしくは表現を一部修正いたしますので、その旨ご了承ください。
                    </p>
                    <p>
<textarea name="kisoku" rows="4" class="w_570" id="kisoku" readonly>■求人広告掲載をお断りするケース

・ 求人以外の目的で広告を出している
・ 法律に違反する内容を含んでいる
・ 虚偽の内容や誇大表現を掲載している(職業安定法
・ 法律で定められた賃金より低い賃金を記載している(最低賃金法第5条-1)
参照：地域別最低賃金の全国一覧(厚生労働省ホームページ内)
・ 求人広告の内容が曖昧すぎる(労働基準法 第15条)
・ 公序良俗に反する表現を含んでいる(民法 第90条)
・ 求職者の誤解や不安を生じさせる内容を含んでいる
・ 差別的表現を含んでいる(労働基準法 第3条)
・ 国籍を限定する表現を含んでいる　例：外国人不可、日本人のみ<
・ 応募者に費用負担(研修・登録費用)を強いる(労働基準法 第17条)
・ 著作権・肖像権などを侵害している(著作権法 第７章)
・ 詐欺的要素が強い
・ マルチ商法、ねずみ講などの法律で禁止されている内容を含んでいる(訪問販売法第12条-1)
・ 出会い系サイト、アダルト関連の全ての業務に関する内容を含んでいる
・ 掲載内容とは違う条件で雇用される(労働基準法 第15条、職業安定法 65条１項9号)
・ 許認可を必要とされる事業において、許認可を得ていない
(職業安定法 第30・33条 等)
・ Find Job！と競合するサービス事業に関する表記を含んでいる　例：サイトのURL
・ Find Job ! と競合するサービス事業に関わる仕事を募集している　例：求人サイトのデザイナー
・ 弊社掲載規定に基づくFind Job ! 運営事務局からの変更・修正の依頼をしない、または審査の為の判断材料が得られない
・ 他の求人サイトに掲載した求人内容で、同サイトの運営者が作成したものを流用している
・ その他Find Job ! 事務局が不適当と認める内容を含んでいる

なお、掲載期間中でも上記に該当することが発覚した場合、またはその可能性があると判断した場合、
企業様の了解を得ることなく広告の掲載を保留・中止できるものとします。
また掲載期間の短縮によるご返金は致しません。
掲載が再開された場合でも、期間の延長は行いませんのでご了承下さい。

■表記を一部削除・修正するケース

・ 1枠に複数の職種を掲載している
・ 「男性歓迎」「女性歓迎」など性別を特定している (男女雇用機会均等法第5条～8条)
　例：主婦歓迎、カメラマン、営業マン、女性は未婚者のみ、キーマン
・ 労働条件(業務内容、賃金、労働時間、休日など)を明示していない　 (職業安定法第5条3-2、労働基準法 第15条)
・ 客観的事実のない法人格の変更や上場予定の表記を使用している　例：株式上場予定、1年後株式上場予定
・ 客観的事実のないトップ表記を使用している　例：No.1、日本一、業界初、最大、唯一
・ 募集職種・案件に直接関係のない表記を使用している
・ 募集職種・案件に直接関係のないサイトURL、　企業様の応募フォームURLの表記がある
・ 応募受付・問い合わせに使用するメールアドレスの表記がある（制作物添付のためのメールアドレスの使用可）
・ 半角カタカナ・機種依存文字を使用している
・ 顔文字を使用している
・ 口語表現を使用している
・ 求人内容に関係のない文字や飾り文字を濫用している
・ 求職者に誤解や不安を抱かせるような表現を使用している(職業安定法 第42条)
・ 内容が曖昧で分かりづらい、文意が不明確な文章を使用している(職業安定法 第42条)
・ 求人内容に不適切な表現を使用している
・ 同じ文言を多用している
・ 全角英数字を使用している
・ その他、Find Job ! 事務局が不適当とみなした文言を使用している

■募集職種名について
・ 勤務地住所の表記
・ 応募資格に該当する表記
・ キャッチコピーに該当する表記、または職種名が入っていない、具体的な業務内容が把握できない表記
・ 紹介予定派遣、または人材紹介の募集では、その旨を追記させていただく場合があります

■募集職種カテゴリについて
・ 募集職種名・仕事内容にそぐわない職種カテゴリを選択している

■仕事内容の詳細について
・募集職種に関する複数の案件の記述がある（一部プランは除外）
・仕事内容に関係のない表記、他項目に該当する表記がある
・データを取り扱う職種の場合、取り扱う情報が不明確である
・Web関連の職種の場合、サイトURLやコンテンツ内容が不明確である

■雇用形態について
・実際の雇用とは違った雇用形態を選択している
例1：派遣事業を営んでいない企業の派遣社員の募集
例2：本来は派遣社員にあたる募集においてのアルバイト雇用での募集
・派遣社員と他雇用形態を同時に選択している
例）クライアント先に派遣する「派遣社員」と、自社内勤務となる「正社員」などの同時募集

■給与について
・最低賃金法で定められた基準を満たしていない、またはその可能性のある表記を含んでいる
・実際の給与体系と違った給与表記を含んでいる

■時間について
・24時間制ではない表記
例）朝9：00～夜7：00
・労働基準法で定められた基準を満たしていない、またはその可能性のある表記を含んでいる
例）法定労働時間を越える勤務時間（週5日の勤務において実働8時間を越える表記、または月の総労働時間160時間を超える表記）
例）勤務時間（勤務時間帯・実働時間など）に関する確認が取れない表記
[記入例]
・9：00～18：00 ※実働8時間
・9：00～15：00、15：00～21：00のシフト制（週○日以上の勤務）
・フレックスタイム制（コアタイム 10：00～17：00） 標準労働時間1日8時間

■休日について
・労働基準法で定められた基準を満たしていない、またはその可能性のある表記を含んでいる
例）毎週少なくとも1回の休日、月4日以上の休日の付与が確認できない表記

休日のシステム定義
　[週休制]
　週1日の休みがある
　[週休2日制]
　1年を通じて、月1回以上週2日の休みがあり、他の週は毎週1日の休みがあること
　[隔週休2日制]
　1年を通じて隔週に週2日の休みがあり、他の週は毎週1日の休みがあること
　[完全週休2日制]
　1年を通じて毎週2日の休みがあること
　[週休3日制]
　1年を通じて、月1回以上週3日の休みがあり、他の週は毎週2日の休みがあること
　[隔週休3日制]
　1年を通じて隔週に週3日の休みがあり、他の週は毎週2日の休みがあること
　[完全週休3日制]
　1年を通じて、毎週3日の休みがある
　[○勤○休制]
　○日勤務して○日休みを繰り返す
　[月4日以上]
　一ヶ月を通じて4日以上の休みがあることが
　分かれば良い
　月4日では×あくまで月4日以上でなければ
　いけない
　[年間休日○日]
　月4日以上の休日を与えなければならないとする
　労働基準法の法律を侵さなければ年間で休日日数を表記できる

■PRデータで使用する表記について
・文章の記入がないもの
・求人情報にある他項目との同一表記を使用している
・飾り文字・記号を濫用している
・その他、掲載規定に違反する表記を使用している

■広告PRデータで使用する写真について
・次の規定を満たしていない画像を使用している
規定：横328×縦246ピクセル
横240×縦180ピクセル
横270×縦360ピクセル
横240×縦320ピクセル
jpg形式、60KB未満
・同じ画像を重複して使用している
・画質が悪く、不鮮明な画像を使用している
・素材集、イメージ画像を使用している（ロゴ・イラスト等は原則1点のみ可）
・出会い系サイト・アダルトを連想させる画像を使用している
・文字のみから構成される画像を使用している
・著作権・肖像権などを侵害している画像を使用している(著作権法 第７章)

影響範囲が広いと弊社が判断した場合は、登録企業の了承を得ることなく
広告の掲載を保留・中止できるものとします。また掲載期間の短縮による
ご返金は致しません。掲載が再開された場合でも、期間の延長は行いませんのでご了承ください。

なお、本規定は予告なく変更でき、原則、その時より効力が発生するものとします。
変更後に登録企業が本サービスを利用した場合には、
登録企業は、本規定の内容の変更に同意したものとみなします。
</textarea>
                    </p>
                    <p class="txt_orange m_b_0">※他の求人サイトに掲載した求人広告で同サイトの運営者が作成したものを流用すると著作権侵害になる可能性がありますのでご注意ください<br>
                    </p>
                </div>
                <!-- /pr_help -->
                <!--button-->
                <div class="bt bteditjob">

                    <a href="javascript:void(0);" class="bt_editjob_save _submitRegisterJobDraft"><img src="/img/com_common/bt_editjob_save.gif" width="112" height="20" alt="内容を保存する" /></a>

                    <a href="javascript:void(0);" class="_formSubmit" tabindex="81">

                        <img src="/img/common/bt_pr_data_edit.gif" alt="PR情報編集へ進む" width="136" height="25" class="m_l_43">

                    </a>
                </div>
                <!--/bottan-->
            </form>
        </div>
        <!-- /cont_left -->

        <!-- pagetop_button -->
        <div class="clear">
            <p class="pagetop">
                <a href="#pagetop" target="_self"><img src="/img/user_common/bt_pagetop.gif" alt="ページトップへ" width="60" height="12" border="0"></a></p>
        </div>
        <!-- /pagetop_button -->
    </div>
    <!-- /contents -->

    <!-- footer -->
    <div id="footer02">
        <p class="mixilogo"><a href="http://www.mixi-recruitment.co.jp/" target="_blank"></a></p>
        <p class="copy gray_66 ">Copyright (C) mixi recruitment, Inc. all rights reserved.</p>
        <p class="clear">&nbsp;</p>
    </div>
    <!-- /footer -->


</div>
</div>
<!-- /container -->

</body>

</html>
