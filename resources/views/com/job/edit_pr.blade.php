
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>求人広告作成[求人広告・応募者管理] | Find Job !の求人広告</title>
    <meta name="description" content="初回求人広告掲載に限り価格が57.1%OFFになるキャンペーン実施中！上位掲載プラン73,500円が31,500円で掲載可能です。求人広告を掲載し、人材募集するならアルバイト・転職・派遣のIT系求人情報サイト Find Job !（ファインドジョブ）。事務/クリエイティブ/エンジニア系など。">
    <meta name="keywords" content="求人広告,掲載,出稿,アルバイト,転職,求人,派遣,就職,募集,findjob,ファインドジョブ,find job,株式会社ミクシィ,mixi">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <link rel="stylesheet" href="/shared/css_import/com_job_pr.css" media="screen,print">
    <script type="text/javascript" src="/shared/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/shared/js/jquery-fjplugins.js"></script>
    <script type="text/javascript" src="/shared/js/fj.js"></script>
    <script type="text/javascript" src="/shared/js/fj/c/com/job.js"></script>
    <script type="text/javascript">

        $(function(){

            function set_image_name() {
                var vlong_count = 0;
                if (vlong_count > 0) {
                    pic_value(vlong_count, "vlong");
                }

                var hlong_count = 0;
                if (hlong_count > 0) {
                    pic_value(hlong_count, "hlong");
                }

                var wide_count  = 0;
                if (wide_count > 0) {
                    pic_value(wide_count, "wide");
                }
            }

            function pic_value(ival,type){
                for (var j = 0; j < ival; j++) {
                    if (type == "vlong") { si = document.pr.elements["pr_pics_vlong" + j].selectedIndex; }
                    if (type == "hlong") { si = document.pr.elements["pr_pics_hlong" + j].selectedIndex; }
                    if (type == "wide") { si = document.pr.elements["pr_pics_wide" + j].selectedIndex; }
                    if (si){
                        if (type == "vlong") { s = document.images["pr_img_vlong" + j].src; }
                        if (type == "hlong") { s = document.images["pr_img_hlong" + j].src; }
                        if (type == "wide") { s = document.images["pr_img_wide" + j].src; }
                        var rp = s.match(/[hbldw][2]?-[0-9a-zA-Z]{8}_small.jpg$/);


                        if (si == 1) { document.pr.pic1.value = rp; }
                        if (si == 2) { document.pr.pic2.value = rp; }
                        if (si == 3) { document.pr.pic3.value = rp; }
                        if (si == 4) { document.pr.pic4.value = rp; }

                        if (si == 5) { document.pr.pic5.value = rp; }
                        if (si == 6) { document.pr.pic6.value = rp; }
                        if (si == 7) { document.pr.pic7.value = rp; }

                    }
                }
            }

            fj.util.lockWindow({
                // 画像削除リンク、アップロードボタン、下部ボタン
                unlockItems: ':file + a, .bteditjob a',
                message: fj.c.com.job.lockWindowMessage});

            var $prForm = $('form[name=pr]');

            // 「削除」リンク

            $('._deletePhoto').click(function($ev){
                if (!confirm("写真を削除します。よろしいですか？")) {
                    return false;
                }
                fj.util.unlockWindow();
                $prForm
                        .find('[name=delete_photo]')
                        .val(1).end()
                        .find('[name=filename]')
                        .val($(this).attr('_filename')).end()
                        .submit();

                return false;
            });

            // 「アップロード」ボタン
            $('._uploadPhotoH, ._uploadPhotoB').click(function($ev){
                var suffix = $(this).attr('class').slice(-1).toLowerCase();
                $prForm
                        .find('[name=upload_photo' + suffix + ']')
                        .val(1).end()
                        .submit();

                return false;
            });

            // 「広告内容確認へすすむ」ボタン
            $('._submitForm').click(function($ev){
                set_image_name();
                $prForm
                        .find('[name=send]').val(1).end()
                        .submit();

                return false;
            });

            // 「内容を保存する」ボタン
            $('._submitRegisterJobDraft').click(function($ev){
                set_image_name();
                $prForm
                        .attr('action', '/com/job/register_job_draft.pl')
                        .find('[name=pr_draft]')
                        .val(1).end()
                        .find('[name=draft_confirm]')
                        .val(1).end()
                        .submit()

                return false;
            });



        });

    </script>


</head>

<body>
<div id="container">
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
    <div id="cont_title" class="mar_t_10">

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
                    <li class="step002off"><span>Step2.募集要項編集</span></li>
                    <li class="step003on"><strong>Step3.PR情報編集</strong></li>
                    <li class="step004off"><span>Step4.求人情報確認</span></li>
                    <li class="step005off"><span>Step5.企業情報確認</span></li>
                    <li class="step006off"><span>Step6.完了</span></li>
                </ul>
            </div>
            <!-- /ad_modify_flow -->




            <!-- lead -->
            <div class="mar_b_15 mar_t_15">求人広告の“顔”となるPR情報を入力します。キャッチコピーとPR文、使用する写真を選択してください。</div>
            <!-- /lead -->

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


            <form action="/com/job/edit_pr" name="pr" method="post" enctype="multipart/form-data">
                <input type="hidden" name="ses_job" value="c1be6a372d789c69064c5984f7ea19a3">
                <input type="hidden" name="ses_com" value="1d572649e064d30a678a5d7a8f262bdc">
                <input type="hidden" name="ses_pr" value="">
                <input type="hidden" name="ses_common" value="1a0b7c38419f5704665e1eebb2efdeea">
                <input type="hidden" name="delete_photo" value="">
                <input type="hidden" name="filename" value="">
                <input type="hidden" name="upload_photoh" value="">
                <input type="hidden" name="upload_photob" value="">
                <input type="hidden" name="upload_photol" value="">
                <input type="hidden" name="upload_photod" value="">
                <input type="hidden" name="send" value="">
                <input type="hidden" name="pic1" value="">
                <input type="hidden" name="pic2" value="">
                <input type="hidden" name="pic3" value="">
                <input type="hidden" name="pic4" value="">
                <input type="hidden" name="pic5" value="">
                <input type="hidden" name="pic6" value="">
                <input type="hidden" name="pic7" value="">

                <input type="hidden" name="draft_confirm" value="">
                <input type="hidden" name="job_draft_id" value="">
                <input type="hidden" name="jobID" value="">
                <input type="hidden" name="pr_draft" value="">

                <!-- pr_data -->
                <div class="box03" id="t_pr_data">
                    <div class="imgtitle_bg">
                        <div class="imgtitle">
                            <h2>PRデータ</h2>
                        </div>
                    </div>
                </div>

                <div class="box_body table_normal">
                    <table cellspacing="1">
                        <tr>
                            <th>标语<br>
                                <span> ※必項</span></th>
                            <td>


                                <p><textarea name="catch_copy" class="w_260" tabindex="1" rows="2" cols="40"></textarea>
                                    <span class="gray_66 f10">2行×全角20文字の40文字以内</span></p>
                                <p>
                                    ※飾り文字・記号等の連続使用はできません。</p>
                                <p class="align_right"><a class="tlink3 f10" href="/com_help/ad_point_step5.html" target="_blank">キャッチコピーとPR文のポイント</a></p>
                            </td>
                        </tr>

                        <tr>
                            <th>宣传文<span> <br>
※必項</span></th>
                            <td>

                                <p><span class="float_l"><textarea name="pr_text" rows="10" class="w_410" id="pr" tabindex="2"></textarea></span>

                                    <span class="span_12"><span class="gray_66 f10">540文字以内</span><br><a class="tlink3 f10" href="/com_help/ad_attention.html#a09" target="_blank">PRデータの記載について</a></span></p>
                                <p>

                                <div class="clear_space_5">&nbsp;</div></p>
                                <p>
                                <ul>
                                    <li><span class="txt_orange">※「日本初」「No.1」等のトップ表記は掲載前に第三者機関の客観的証明物を確認させていただきます。</span></li>
                                    <li><span class="txt_orange">※弊社規定に基づき、一部表記の修正をお願いする場合がございます。</span></li>
                                </ul>
                                </p>
                            </td>
                        </tr>

                    </table>
                </div>
                <!-- /pr_data -->

                <!-- pr_data -->
                <div class="box03" id="t_com_message">
                    <div class="imgtitle_bg">
                        <div class="imgtitle">
                            <h2>メッセージ</h2>
                        </div>
                    </div>
                </div>

                <div class="box_body table_normal">
                    <table cellspacing="1">
                        <tr>
                            <th class="bg_ecf">信息项目1</th>
                            <td>


                                <p><input name="free_title" type="text" class="w_260" id="free_title" value="" tabindex="3">
                                    <span class="gray_66 f10"> 全角15文字以内</span></p>
                                <p>
                                    <textarea name="free_body" rows="5" class="w_410" id="free_body" tabindex="4" wrap="virtual"></textarea>
                                    <span class="gray_66 f10"> 全角2000文字以内</span></p>
                                <p class="align_right f10"><a class="tlink3" href="/com_help/ad_point_step3.html" target="_blank">自由項目のポイント</a></p>
                            </td></tr>


                        <tr>
                            <th class="bg_ecf">信息项目2</th>
                            <td>


                                <p><input name="free_title2" type="text" class="w_260" id="free_title2" value="" tabindex="5">
                                    <span class="gray_66 f10"> 全角15文字以内</span></p>
                                <p><textarea name="free_body2" rows="5" class="w_410" id="free2_2" tabindex="6" wrap="virtual"></textarea>
                                    <span class="gray_66 f10"> 全角2000文字以内</span>
                                </p>
                                <p class="align_right f10"><a class="tlink3" href="/com_help/ad_point_step3.html" target="_blank">自由項目のポイント</a></p></td>
                        </tr>



                    </table>
                </div>
                <!-- /pr_data -->


                <!-- photo_data -->
                <div class="box03" id="photo_pickup">
                    <div class="imgtitle_bg">
                        <div class="imgtitle">
                            <h2>写真選択</h2>
                        </div>
                    </div>
                </div>

                <div class="box_body table_normal">
                    <div>
<span class="float_l">
※【写真1】のみ縦写真(270x360)を選択できます。<br>
※「縦写真追加」「横写真追加」より、画像のアップロードが可能です。縦・横タイプでそれぞれ最大120枚まで保存できます。<br>
<div class="txt_orange">※素材集や使用許諾の必要な建造物や商品等を含む写真は、ご掲載いただけません。</div>
</span>
<span class="span_04 mar_t_10"><a class="tlink3 f10" href="/com_help/picture_point2.html" target="_blank">写真描述のポイント</a><br />
<a class="tlink3 f10" href="/com_help/picture_point1.html" target="_blank">写真撮影のポイント</a></span>
                        <div class="clear_space_5">&nbsp;</div>
                    </div>

                    <table cellspacing="1">




                        <!-- vlong -->
                        <tr>
                            <th class="bg_ecf">纵照片选择<br><span class="gray_66 f10">(横270×縦360ピクセル)</span></th>
                            <td class="photo_td">
                                <div class="mar_t_5">





                                    <span class="txt_red">縦写真が登録されていません。</span>


                                    <div class="clear"></div>
                                </div></td>
                        </tr>

                        <tr>
                            <th class="bg_ecf">纵照片追加<br><span class="gray_66 f10">(横270×縦360ピクセル)</span></th>
                            <td>


                                <p>ファイルを選択して「アップロード」ボタンを押下してください。</p>
                                <p class="mar_t_5 mar_b_10">
                                    <input type="file" name="file_photoh" size="40" tabindex="10">
                                    <a href="javascript:void(0);" class="_uploadPhotoH" tabindex="11"><img src="/img/com_common/bt_up_road.gif" width="99" height="17" border="0" alt="アップロードする" class="mar_l_5"></a>
                                </p>
                                <p>※各辺が横270×縦360ピクセル未満の画像は、ご利用いただけません。</p>
                                <p>※各辺が横270×縦360ピクセルを超える場合は、自動的に縮小され、上下左右に余白が追加されます。</p>
                                <p>※容量が3MB以上の画像はアップロードできません。</p>

                            </td>
                        </tr>
                        <!-- /vlong -->


                        <!-- hlong -->
                        <tr>
                            <th class="bg_ecf">横照片选择<br><span class="gray_66 f10">(横328×縦246ピクセル)</span></th>
                            <td class="photo_td">
                                <div class="mar_t_5">














                                    <span class="txt_red">横写真が登録されていません。</span>


                                    <div class="clear"></div>
                                </div></td>
                        </tr>

                        <tr>
                            <th class="bg_ecf">横照片追加<br><span class="gray_66 f10">(横328×縦246ピクセル)</span></th>
                            <td>


                                <p>ファイルを選択して「アップロード」ボタンを押下してください。</p>
                                <p class="mar_t_5 mar_b_10">
                                    <input type="file" name="file_photob" size="40" tabindex="10">
                                    <a href="javascript:void(0);" class="_uploadPhotoB" tabindex="11"><img src="/img/com_common/bt_up_road.gif" width="99" height="17" border="0" alt="アップロードする" class="mar_l_5"></a>

                                </p>
                                <p>※各辺が横328×縦246ピクセル未満の画像は、ご利用いただけません。</p>
                                <p>※各辺が横328×縦246ピクセルを超える場合は、自動的に縮小され、上下左右に余白が追加されます。</p>
                                <p>※容量が3MB以上の画像はアップロードできません。</p>

                            </td>
                        </tr>
                        <!-- /hlong -->



                        <tr>
                            <th class="bg_ecf">写真1描述
                            </th>
                            <td>
                                <p class="alert_txt"></p>
                                <p><textarea name="p_comment1" class="w_260 " tabindex="18"></textarea>
                                    <span class="gray_66 f10">2行×全角20文字の40文字以内</span></p>


                        </tr>

                        <tr>
                            <th class="bg_ecf">写真2描述
                            </th>
                            <td>
                                <p class="alert_txt"></p>
                                <p><textarea name="p_comment2" class="w_260 " tabindex="18"></textarea>
                                    <span class="gray_66 f10">2行×全角20文字の40文字以内</span></p>


                        </tr>

                        <tr>
                            <th class="bg_ecf">写真3描述
                            </th>
                            <td>
                                <p class="alert_txt"></p>
                                <p><textarea name="p_comment3" class="w_260 " tabindex="18"></textarea>
                                    <span class="gray_66 f10">2行×全角20文字の40文字以内</span></p>


                        </tr>

                        <tr>
                            <th class="bg_ecf">写真4描述
                            </th>
                            <td>
                                <p class="alert_txt"></p>
                                <p><textarea name="p_comment4" class="w_260 " tabindex="18"></textarea>
                                    <span class="gray_66 f10">2行×全角20文字の40文字以内</span></p>


                        </tr>

                        <tr>
                            <th class="bg_ecf">写真5描述
                            </th>
                            <td>
                                <p class="alert_txt"></p>
                                <p><textarea name="p_comment5" class="w_260 " tabindex="18"></textarea>
                                    <span class="gray_66 f10">2行×全角20文字の40文字以内</span></p>


                        </tr>

                        <tr>
                            <th class="bg_ecf">写真6描述
                            </th>
                            <td>
                                <p class="alert_txt"></p>
                                <p><textarea name="p_comment6" class="w_260 " tabindex="18"></textarea>
                                    <span class="gray_66 f10">2行×全角20文字の40文字以内</span></p>


                        </tr>

                        <tr>
                            <th class="bg_ecf">写真7描述
                            </th>
                            <td>
                                <p class="alert_txt"></p>
                                <p><textarea name="p_comment7" class="w_260 " tabindex="18"></textarea>
                                    <span class="gray_66 f10">2行×全角20文字の40文字以内</span></p>


                        </tr>




                    </table>
                </div>
                <!-- /photo_data -->

                <!-- keyword_flagset -->
                <div id="keyword_flagset">
                    <a name="focus"></a>
                    <h2>写真選択</h2>

                    <div class="box_body">
                        <p>該当項目にチェックをして下さい。<br>
                            「<a href="/list/focus/" target="_blank">キーワードでさがす</a>」ページに掲載され、Find Job ! 内での求人の発見率が高まります。</p>

                        <table border="0" cellpadding="0" cellspacing="0" id="keyword_flaglist">
                            <caption><strong>求人情報に関する条件</strong></caption>

                            <tr class="stair_odd">
                                <th>雇用形式</th>
                                <td><ul>

                                        <li><label for="focus_word4"><input type="checkbox" name="job_focus_word[]" value="4" id="focus_word4" >短期派遣</label></li>

                                        <li><label for="focus_word5"><input type="checkbox" name="job_focus_word[]" value="5" id="focus_word5" >第二新卒</label></li>

                                    </ul></td>
                            </tr>

                            <tr class="stair_even">
                                <th>工作时间・休假</th>
                                <td><ul>

                                        <li><label for="focus_word10"><input type="checkbox" name="job_focus_word[]" value="10" id="focus_word10" >长期休假</label></li>

                                        <li><label for="focus_word9"><input type="checkbox" name="job_focus_word[]" value="9" id="focus_word9" >弹性工作时间</label></li>

                                    </ul></td>
                            </tr>

                            <tr class="stair_odd">
                                <th>給与関連</th>
                                <td><ul>

                                        <li><label for="focus_word13"><input type="checkbox" name="job_focus_word[]" value="13" id="focus_word13" >计件工资</label></li>

                                        <li><label for="focus_word11"><input type="checkbox" name="job_focus_word[]" value="11" id="focus_word11" >退休金制度</label></li>

                                        <li><label for="focus_word16"><input type="checkbox" name="job_focus_word[]" value="16" id="focus_word16" >住房津贴</label></li>

                                        <li><label for="focus_word12"><input type="checkbox" name="job_focus_word[]" value="12" id="focus_word12" >年薪制</label></li>

                                        <li><label for="focus_word15"><input type="checkbox" name="job_focus_word[]" value="15" id="focus_word15" >加班津贴</label></li>

                                    </ul></td>
                            </tr>

                            <tr class="stair_even">
                                <th>待遇・制度</th>
                                <td><ul>

                                        <li><label for="focus_word21"><input type="checkbox" name="job_focus_word[]" value="21" id="focus_word21" >宿舍</label></li>

                                        <li><label for="focus_word32"><input type="checkbox" name="job_focus_word[]" value="32" id="focus_word32" >使用中文的工作</label></li>

                                        <li><label for="focus_word22"><input type="checkbox" name="job_focus_word[]" value="22" id="focus_word22" >股票期权制</label></li>

                                        <li><label for="focus_word31"><input type="checkbox" name="job_focus_word[]" value="31" id="focus_word31" >使用英语的工作</label></li>

                                        <li><label for="focus_word23"><input type="checkbox" name="job_focus_word[]" value="23" id="focus_word23" >公司内部风险企业制度</label></li>

                                        <li><label for="focus_word28"><input type="checkbox" name="job_focus_word[]" value="28" id="focus_word28" >管理职员采用</label></li>

                                        <li><label for="focus_word27"><input type="checkbox" name="job_focus_word[]" value="27" id="focus_word27" >U・Iターン歓迎</label></li>

                                        <li><label for="focus_word30"><input type="checkbox" name="job_focus_word[]" value="30" id="focus_word30" >新规事业</label></li>

                                        <li><label for="focus_word20"><input type="checkbox" name="job_focus_word[]" value="20" id="focus_word20" >正式员工录用制</label></li>

                                        <li><label for="focus_word18"><input type="checkbox" name="job_focus_word[]" value="18" id="focus_word18" >发型自由</label></li>

                                        <li><label for="focus_word17"><input type="checkbox" name="job_focus_word[]" value="17" id="focus_word17" >服装自由</label></li>

                                        <li><label for="focus_word25"><input type="checkbox" name="job_focus_word[]" value="25" id="focus_word25" >不问学历</label></li>

                                        <li><label for="focus_word24"><input type="checkbox" name="job_focus_word[]" value="24" id="focus_word24" >女性欢迎的工作</label></li>

                                        <li><label for="focus_word19"><input type="checkbox" name="job_focus_word[]" value="19" id="focus_word19" >社会保险完备</label></li>

                                        <li><label for="focus_word29"><input type="checkbox" name="job_focus_word[]" value="29" id="focus_word29" >有经验者优先</label></li>

                                    </ul></td>
                            </tr>

                        </table>

                    </div>
                </div>
                <!-- keyword_flagset -->

                <!-- option -->
                <div class="f_option">
                    <h2>オプション</h2>
                    <dl class="clearfix">
                        <dt><input type="checkbox" id="f_option" name="free_permission" value="1" checked /></dt>
                        <dd><label for="f_option">掲載期間終了後の応募を許可する</label></dd>
                    </dl>
                    <p>掲載期間終了後に求職者から要望があった場合、応募を受け付けることができます。ご希望されない場合はチェックを外して下さい。</p>
                    <ul>
                        <li>※掲載期間中では無いため、応募が見込めることをお約束するものではありません。</li>
                        <li>※求職者からの応募メールにご対応いただけない場合は、オプション機能を停止させていただく場合があります。</li>
                    </ul>
                </div>
                <!-- option -->

                <!--button-->
                <div class="bt bteditjob">
                    <a href="javascript:void(0);" class="_submitForm" tabindex="21"><img src="/img/common/bt_job_pr_con2.png" alt="求人情報確認へ進む"></a>

                    <a href="javascript:void(0);" class="bt_editjob_save _submitRegisterJobDraft"><img src="/img/com_common/bt_editjob_save.gif" width="112" height="20" alt="内容を保存する" /></a>

                    <!-- /途中保存テンプレ -->

                </div>
                <!--/button-->

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

<map name="Map"><area shape="rect" coords="0,0,90,120" href="#"></map>
<map name="Map2"><area shape="rect" coords="0,0,90,67" href="#"></map>

</body>

</html>
