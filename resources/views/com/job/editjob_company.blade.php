<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=EUC-JP">
    <title>求人広告作成 [求人広告・応募者管理] | Find Job !の求人広告</title>
    <meta name="description" content="初回求人広告掲載に限り価格が57.1%OFFになるキャンペーン実施中！上位掲載プラン73,500円が31,500円で掲載可能です。求人広告を掲載し、人材募集するならアルバイト・転職・派遣のIT系求人情報サイト Find Job !（ファインドジョブ）。事務/クリエイティブ/エンジニア系など。">
    <meta name="keywords" content="求人広告,掲載,出稿,アルバイト,転職,求人,派遣,就職,募集,findjob,ファインドジョブ,find job,株式会社ミクシィ,mixi">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <link rel="stylesheet" href="/shared/css_import/com_job_pr.css" media="screen,print">
    <script type="text/javascript" src="/shared/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/shared/js/jquery-fjplugins.js"></script>
    <script type="text/javascript" src="/shared/js/fj.js"></script>
    <script type="text/javascript" src="/shared/js/fj/c/com/job.js"></script>
    <script type="text/javascript" src="/shared/js/com/register_company.js"></script>
    <script type="text/javascript">

        $(function(){

            fj.util.lockWindow({
                // 下部のボタン
                unlockItems: '.mar_t_15 a',
                message: fj.c.com.job.lockWindowMessage});

            $('._formSubmit').click(function(){
                $('[name=com_form]').submit();
                return false;
            });

            // 「内容を保存する」ボタン
            $('._submitRegisterJobDraft').click(function($ev){
                $('[name=com_form]')
                        .attr('action', '/com/job/register_job_draft.pl')
                        .find('[name=com_draft]')
                        .val(1).end()
                        .find('[name=draft_confirm]')
                        .val(1).end()
                        .submit();
                return false;
            });

        });

    </script>

</head>

<body>
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
    <div id="contents">

        <!-- cont_left -->
        <div>



            <!-- ad_modify_flow -->
            <div id="detail_flow2">
                <ul id="flow01" class="ad_modify_flow">
                    <li class="step001on"><strong>Step1.企業情報編集</strong></li>
                    <li class="step002off"><span>Step2.募集要項編集</span></li>
                    <li class="step003off"><span>Step3.PR情報編集</span></li>
                    <li class="step004off"><span>Step4.求人情報確認</span></li>
                    <li class="step005off"><span>Step5.企業情報確認</span></li>
                    <li class="step006off"><span>Step6.完了</span></li>
                </ul>
            </div>
            <!-- /ad_modify_flow -->

            @include('layouts._alert')

            <form name="com_form" ENCTYPE="multipart/form-data" method="post" >
                {{--<input type=hidden name=ses_job value="66a995da18cb3e1865ef52acd9b527d8">--}}
                {{--<input type=hidden name=ses_com value="">--}}
                {{--<input type=hidden name=ses_common value="1a0b7c38419f5704665e1eebb2efdeea">--}}
                {{--<input type=hidden name=ses_pr value="">--}}
                {{--<input type=hidden name=jobID value="">--}}
                {{--<input type=hidden name=job_draft_id value="">--}}
                {{--<input type=hidden name=submitted value=1>--}}
                {{--<input type=hidden name=draft_confirm>--}}
                {{--<input type=hidden name=com_draft>--}}
                {{--<input type=hidden name=next_editjob value=1>--}}
                {{--<input type=hidden name=act value="add">--}}


                <!-- set -->
                <div class="box03" id="com_data">
                    <div class="imgtitle_bg">
                        <div class="imgtitle">
                            <h2>面接地地図</h2></div>
                    </div>
                </div>

                <div class="box_body table_normal">
                    <!--map-->
                    <table cellspacing="1">
                        <tr>
                            <th>公司所在地<br>
                                <span>※必須</span></th>
                            <td>
                                <p class="alert_txt">{{$errors->first('honsha')}}</p>
                                <p><input type="text" name="honsha" value="{{old('honsha')}}" class="w_410" tabindex="1" /></p>
                                <p><span class="txt_orange">ビル名、フロア</span>なども含めて最後まで正確にご記入ください。</p>
                                <p class="icon_simile">渋谷区渋谷△△-××-□□　渋谷○×△ビル 20F</p></td>
                        </tr>
                        <tr>
                            <th>公司网址</th>
                            <td>

                                <p><input type="text" name="web" class="w_410" value="{{old('web')!=null ? old('web') : $com->web}}" tabindex="2" />
                                </p>
                                <p>インターネット関連企業様で空欄にされている場合、ご登録いただけませんので必ずご記入ください。<a href="/com_help/examination.html" target="_blank" class="tlink3 f10">詳しくはこちら</a></p></td>
                        </tr>
                        <tr>
                            <th>代表者名<br>
                                <span>※必須</span></th>
                            <td>
                                <p class="alert_txt">{{$errors->first('ceo')}}</p>

                                <p>フルネームでご記入ください。 </p>

                                <p><input type="text" name="ceo" class="w_410" value="{{old('ceo')!=null ? old('ceo') : $com->tantoname}}" tabindex="3" /></p>
                            </td>
                        </tr>
                        <tr>
                            <th>成立日<br>
                                <span>※必須</span></th>
                            <td>
                                <p class="alert_txt">{{$errors->first('setup_year')}}</p>
                                <p class="alert_txt">{{$errors->first('setup_month')}}</p>

                                <p>公园でご記入ください。</p>

                                <p><input type="text" name="setup_year" value="{{old('setup_year')}}" size="6" tabindex="4">&nbsp;年 &nbsp;
                                    <input type="text" name="setup_month" value="{{old('setup_month')}}" size="4" tabindex="5">&nbsp;月</p>
                                <div class="clear_space_5">&nbsp;</div>
                                <p><span class="s_l icon_simile">1999年6月</span><span class="span_01"><a class="tlink3 f10" href="/com/regist/anno_domini_list.html" target="_blank">西暦の参照</a></span></p></td>
                        </tr>
                        <tr>
                            <th>注册资本<br>
                                <span>※必須</span></th>
                            <td>
                                <p class="alert_txt">{{$errors->first('capital')}}</p>

                                <p><input type="text" name="capital" value="{{old('capital')}}" tabindex="6"> 円
                                </p>
                                <p class="icon_simile">1000万円　10億5000万円</p>
                                <p>海外法人の場合は日本円に換算して、ご記入ください。また日本に現地法人がない場合はご登録できません。 </p></td>
                        </tr>
                        <tr>
                            <th>从业人员数<br>
                                <span>※必須</span></th>
                            <td>

                                <p class="alert_txt">{{$errors->first('workers')}}</p>

                                <p><input type="text" name="workers" value="{{old('workers')}}" tabindex="7">&nbsp;名
                                </p>
                                <p class="icon_simile">15名　派遣・外注スタッフは除く</p></td>
                        </tr>
                        <tr>
                            <th>事业内容<br>
                                <span>※必須</span></th>
                            <td>
                                <p>事業内容が不明確な場合、IDを発行出来ないこともございますので明確にご記入ください。<br>
                                    ホームページ、会社パンフレット等からの引用可。</p>

                                <p><textarea name="business" rows="5" class="w_410" id="free1_2" tabindex="9">{{old('business')}}</textarea></p>
                                <p class="icon_simile">インターネット広告事業<br>
                                    インターネットメディア事業<br>
                                    ソーシャルゲーム事業</p></td>
                        </tr>
                        <tr>
                            <th class="bg_ecf">主要取引先</th>
                            <td>

                                <p>
                                    <span class="s_l"><textarea name="torihiki" rows="5" class="w_410" id="free1_2" tabindex="10">{{old('torihiki')}}</textarea></span>
                                    <span class="span_13 gray_66 f10" style="width:150px; text-align:left">5行以内</span>
                                </p></td>
                        </tr>
                        <tr>
                            <th class="bg_ecf">年间销售额</th>
                            <td>

                                <p>
                                    <input type="text" name="sales_year1" value="" size="6" tabindex="11">&nbsp;年
                                    &nbsp;
                                    <select name=sales_month1 tabindex="12">

                                        <option value="0" selected>選択してください</option>

                                        <option value="3" >3月期</option>

                                        <option value="4" >4月期</option>

                                        <option value="5" >5月期</option>

                                        <option value="6" >6月期</option>

                                        <option value="7" >7月期</option>

                                        <option value="8" >8月期</option>

                                        <option value="9" >9月期</option>

                                        <option value="10" >10月期</option>

                                        <option value="11" >11月期</option>

                                        <option value="12" >12月期</option>

                                        <option value="1" >1月期</option>

                                        <option value="2" >2月期</option>

                                    </select>
                                    <select name=sales_type1 tabindex="13">

                                        <option value="0" selected>選択してください</option>

                                        <option value="1" >実績</option>

                                        <option value="2" >見込み</option>

                                    </select>
                                    年
                                    <input name="sales1" type="text" value="" tabindex="14">&nbsp;円
                                </p>
                                <p>
                                    <input type="text" name="sales_year2" value="" size="6" tabindex="15">&nbsp;年
                                    &nbsp;
                                    <select name=sales_month2 tabindex="16">

                                        <option value="0" selected>選択してください</option>

                                        <option value="3" >3月期</option>

                                        <option value="4" >4月期</option>

                                        <option value="5" >5月期</option>

                                        <option value="6" >6月期</option>

                                        <option value="7" >7月期</option>

                                        <option value="8" >8月期</option>

                                        <option value="9" >9月期</option>

                                        <option value="10" >10月期</option>

                                        <option value="11" >11月期</option>

                                        <option value="12" >12月期</option>

                                        <option value="1" >1月期</option>

                                        <option value="2" >2月期</option>

                                    </select>
                                    <select name=sales_type2 tabindex="17">

                                        <option value="0" selected>選択してください</option>

                                        <option value="1" >実績</option>

                                        <option value="2" >見込み</option>

                                    </select>
                                    年
                                    <input name="sales2" type="text" value="" tabindex="18">&nbsp;円
                                </p>

                                <p class="icon_simile">2012年3月期実績　1億円
                                    <br>
                                    2011年3月期見込み　1億5000万円</p></td>
                        </tr>
                        <tr>
                            <th>業種<br>
                                <span>※必須</span></th>
                            <td>
                                <p class="alert_txt">{{$errors->first('category')}}</p>

                                <select name="category" tabindex="10">
                                    <option value=0>選択してください</option>

                                    <option value=1 >インターネット関連</option>

                                    <option value=2 >ソフトウェア・情報処理</option>

                                    <option value=5 >サービス業</option>

                                    <option value=6 >デザイン・出版・マスコミ</option>

                                    <option value=3 >メーカー</option>

                                    <option value=13 >ゲーム</option>

                                    <option value=12 >会計・コンサル・金融</option>

                                    <option value=9 >公共団体・NPO</option>

                                    <option value=11 >人材派遣・紹介・アウトソーシング</option>

                                    <option value=10 >その他</option>

                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th class="bg_ecf">许可号</th>
                            <td>

                                <div id="form_license1" class="fmain01"><p>国の許認可が必要となる業種や事業の場合はご記入ください。</p>
                                    <select name="license_category1" tabindex="10">
                                        <option value="0">選択してください</option>

                                        <option value="1" >一般労働者派遣</option>

                                        <option value="2" >特定労働者派遣</option>

                                        <option value="3" >有料職業紹介</option>

                                        <option value="4" >不動産業</option>

                                        <option value="6" >旅行業</option>

                                    </select>
                                    <input type="text" maxlength="20" tabindex="10" value="" name="license_number1" class="f0213b">
<span id="btn_for_license2"><input type="button" value="　許可番号を追加する　" tabindex="10" onclick="displayLicenseCategory();">
<span class="formnote">※複数になる場合は追加してください</span></span>
                                </div>
                                <div id="form_license2" class="fsub01" style="display:none;">
                                    <select name="license_category2" tabindex="10">
                                        <option value="0">選択してください</option>

                                        <option value="1" >一般労働者派遣</option>

                                        <option value="2" >特定労働者派遣</option>

                                        <option value="3" >有料職業紹介</option>

                                        <option value="4" >不動産業</option>

                                        <option value="6" >旅行業</option>

                                    </select>
                                    <input type="text" maxlength="20" tabindex="10" value="" name="license_number2" class="f0213b">
                                    <span id="btn_for_license3"></span>
                                </div>
                                <div id="form_license3" class="fsub01" style="display:none;">
                                    <select name="license_category3" tabindex="10">
                                        <option value="0">選択してください</option>

                                        <option value="1" >一般労働者派遣</option>

                                        <option value="2" >特定労働者派遣</option>

                                        <option value="3" >有料職業紹介</option>

                                        <option value="4" >不動産業</option>

                                        <option value="6" >旅行業</option>

                                    </select>
                                    <input type="text" value="" tabindex="10" name="license_number3" class="f0213b">
                                </div>

                            </td>
                        </tr>
                    </table>

                    <div class="clearfix mar_t_15">
                        <a href="javascript:void(0);" class="bt_editjob_save2 _submitRegisterJobDraft"><img src="/img/com_common/bt_editjob_save.gif" width="112" height="20" alt="内容を保存する" /></a><a href="javascript:void(0);" class="bt_editjob_next2 _formSubmit" tabindex="19"><img width="137" height="24" alt="次へ進む" src="/img/com_regforms/btn_go2next01.gif"></a>

                    </div>
                    <!--/map-->
                </div>
                <!-- /set -->
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
