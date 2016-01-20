@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')
<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/my/edit/edit.cgi"><span itemprop="title">登録情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">Web履歴書</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">Web履歴書</h1>

        <h2 class="h3">職務経歴の追加</h2>

        <p class="mb40">新しい職務経歴を追加します。<br>
            必要な項目を入力し、ページ下の「この職務経歴を追加する」ボタンをクリックしてください。</p>

        <form action="edit" method="post" class="form" name=edit_form id='edit_form' onsubmit="document.edit_form.form.value='';">
            <input type="hidden" name="submitted" value="rireki_add_form">
            <input type="hidden" name="from" value="">
            <input type="hidden" name="userid" value="557782">
            <input type="hidden" name="keitai" value="">
            <input type="hidden" name="user_sid" value="1223dfa5f00868373e5431180001062c">
            <input type="hidden" name="skill_sid" value="370b9bcbf7604e2b4b4e0b29be7599b2">
            <input type="hidden" name="rireki_sid" value="41af19592e54fde661b472b6225f0c14">
            <input type="hidden" name="career" value="1">
            <input type="hidden" name="old_rireki" value="">
            <input type="hidden" name="edit_form" value="0">
            <input type="hidden" name="unique_key" value="9e908efd87c839e8235d5b9da36c308f">
            <input type="hidden" name="form" value="">

            <section>
                <h2 class="h2 text-em mb10">職務経歴</h2>

                <table class="input-cell mb40">
                    <tr>
                        <th>会社名</th>
                        <td>
                            <input tabindex="01" name="office" type="text" class="text-md form_office" value="" id=comname />
                            <p class="pt10 text-md"><a href="/help/howto_apply/company_name.html" target="_blank" class="icon icon-arrow02-xs">派遣・出向や統合・合併がある場合の社名記入例</a></p>
                        </td>
                    </tr>
                    <tr>
                        <th>勤務期間</th>
                        <td>
                            <div class="select form-sm pull-left">
                                <select name=syear id='syear' tabindex="02">
                                    <option value="0">---</option>
                                    <option value="2016">2016年 (平成28年)</option>
                                    <option value="2015">2015年 (平成27年)</option>
                                    <option value="2014">2014年 (平成26年)</option>
                                    <option value="2013">2013年 (平成25年)</option>
                                    <option value="2012">2012年 (平成24年)</option>
                                    <option value="2011">2011年 (平成23年)</option>
                                    <option value="2010">2010年 (平成22年)</option>
                                    <option value="2009">2009年 (平成21年)</option>
                                    <option value="2008">2008年 (平成20年)</option>
                                    <option value="2007">2007年 (平成19年)</option>
                                    <option value="2006">2006年 (平成18年)</option>
                                    <option value="2005">2005年 (平成17年)</option>
                                    <option value="2004">2004年 (平成16年)</option>
                                    <option value="2003">2003年 (平成15年)</option>
                                    <option value="2002">2002年 (平成14年)</option>
                                    <option value="2001">2001年 (平成13年)</option>
                                    <option value="2000">2000年 (平成12年)</option>
                                    <option value="1999">1999年 (平成11年)</option>
                                    <option value="1998">1998年 (平成10年)</option>
                                    <option value="1997">1997年 (平成9年)</option>
                                    <option value="1996">1996年 (平成8年)</option>
                                    <option value="1995">1995年 (平成7年)</option>
                                    <option value="1994">1994年 (平成6年)</option>
                                    <option value="1993">1993年 (平成5年)</option>
                                    <option value="1992">1992年 (平成4年)</option>
                                    <option value="1991">1991年 (平成3年)</option>
                                    <option value="1990">1990年 (平成2年)</option>
                                    <option value="1989">1989年 (平成1年)</option>
                                    <option value="1988">1988年 (昭和63年)</option>
                                    <option value="1987">1987年 (昭和62年)</option>
                                    <option value="1986">1986年 (昭和61年)</option>
                                    <option value="1985">1985年 (昭和60年)</option>
                                    <option value="1984">1984年 (昭和59年)</option>
                                    <option value="1983">1983年 (昭和58年)</option>
                                    <option value="1982">1982年 (昭和57年)</option>
                                    <option value="1981">1981年 (昭和56年)</option>
                                    <option value="1980">1980年 (昭和55年)</option>
                                    <option value="1979">1979年 (昭和54年)</option>
                                    <option value="1978">1978年 (昭和53年)</option>
                                    <option value="1977">1977年 (昭和52年)</option>
                                    <option value="1976">1976年 (昭和51年)</option>
                                    <option value="1975">1975年 (昭和50年)</option>
                                    <option value="1974">1974年 (昭和49年)</option>
                                    <option value="1973">1973年 (昭和48年)</option>
                                    <option value="1972">1972年 (昭和47年)</option>
                                    <option value="1971">1971年 (昭和46年)</option>
                                    <option value="1970">1970年 (昭和45年)</option>
                                    <option value="1969">1969年 (昭和44年)</option>
                                    <option value="1968">1968年 (昭和43年)</option>
                                    <option value="1967">1967年 (昭和42年)</option>
                                    <option value="1966">1966年 (昭和41年)</option>
                                    <option value="1965">1965年 (昭和40年)</option>
                                    <option value="1964">1964年 (昭和39年)</option>
                                    <option value="1963">1963年 (昭和38年)</option>
                                    <option value="1962">1962年 (昭和37年)</option>
                                    <option value="1961">1961年 (昭和36年)</option>
                                    <option value="1960">1960年 (昭和35年)</option>
                                    <option value="1959">1959年 (昭和34年)</option>
                                    <option value="1958">1958年 (昭和33年)</option>
                                    <option value="1957">1957年 (昭和32年)</option>
                                    <option value="1956">1956年 (昭和31年)</option>
                                    <option value="1955">1955年 (昭和30年)</option>
                                    <option value="1954">1954年 (昭和29年)</option>
                                    <option value="1953">1953年 (昭和28年)</option>
                                    <option value="1952">1952年 (昭和27年)</option>
                                    <option value="1951">1951年 (昭和26年)</option>
                                    <option value="1950">1950年 (昭和25年)</option>
                                    <option value="1949">1949年 (昭和24年)</option>
                                    <option value="1948">1948年 (昭和23年)</option>
                                    <option value="1947">1947年 (昭和22年)</option>
                                    <option value="1946">1946年 (昭和21年)</option>
                                    <option value="1945">1945年 (昭和20年)</option>
                                    <option value="1944">1944年 (昭和19年)</option>
                                    <option value="1943">1943年 (昭和18年)</option>
                                    <option value="1942">1942年 (昭和17年)</option>
                                    <option value="1941">1941年 (昭和16年)</option>
                                    <option value="1940">1940年 (昭和15年)</option>
                                    <option value="1939">1939年 (昭和14年)</option>
                                    <option value="1938">1938年 (昭和13年)</option>
                                    <option value="1937">1937年 (昭和12年)</option>
                                    <option value="1936">1936年 (昭和11年)</option>
                                    <option value="1935">1935年 (昭和10年)</option>
                                    <option value="1934">1934年 (昭和9年)</option>
                                    <option value="1933">1933年 (昭和8年)</option>
                                    <option value="1932">1932年 (昭和7年)</option>
                                    <option value="1931">1931年 (昭和6年)</option>
                                    <option value="1930">1930年 (昭和5年)</option>

                                </select>
                            </div>
                            <p class="pull-left text-md mt10 mr10">&nbsp;年</p>
                            <div class="select form-xsm pull-left">
                                <select name=smonth id='smonth' tabindex="03">
                                    <option value="0">--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>

                                </select>
                            </div>
                            <p class="pull-left mt10">&nbsp;月&nbsp;～&nbsp;</p>
                            <div class="select form-sm pull-left">
                                <select name=eyear tabindex="04">
                                    <option value="0">---</option>
                                    <option value="2016">2016年 (平成28年)</option>
                                    <option value="2015">2015年 (平成27年)</option>
                                    <option value="2014">2014年 (平成26年)</option>
                                    <option value="2013">2013年 (平成25年)</option>
                                    <option value="2012">2012年 (平成24年)</option>
                                    <option value="2011">2011年 (平成23年)</option>
                                    <option value="2010">2010年 (平成22年)</option>
                                    <option value="2009">2009年 (平成21年)</option>
                                    <option value="2008">2008年 (平成20年)</option>
                                    <option value="2007">2007年 (平成19年)</option>
                                    <option value="2006">2006年 (平成18年)</option>
                                    <option value="2005">2005年 (平成17年)</option>
                                    <option value="2004">2004年 (平成16年)</option>
                                    <option value="2003">2003年 (平成15年)</option>
                                    <option value="2002">2002年 (平成14年)</option>
                                    <option value="2001">2001年 (平成13年)</option>
                                    <option value="2000">2000年 (平成12年)</option>
                                    <option value="1999">1999年 (平成11年)</option>
                                    <option value="1998">1998年 (平成10年)</option>
                                    <option value="1997">1997年 (平成9年)</option>
                                    <option value="1996">1996年 (平成8年)</option>
                                    <option value="1995">1995年 (平成7年)</option>
                                    <option value="1994">1994年 (平成6年)</option>
                                    <option value="1993">1993年 (平成5年)</option>
                                    <option value="1992">1992年 (平成4年)</option>
                                    <option value="1991">1991年 (平成3年)</option>
                                    <option value="1990">1990年 (平成2年)</option>
                                    <option value="1989">1989年 (平成1年)</option>
                                    <option value="1988">1988年 (昭和63年)</option>
                                    <option value="1987">1987年 (昭和62年)</option>
                                    <option value="1986">1986年 (昭和61年)</option>
                                    <option value="1985">1985年 (昭和60年)</option>
                                    <option value="1984">1984年 (昭和59年)</option>
                                    <option value="1983">1983年 (昭和58年)</option>
                                    <option value="1982">1982年 (昭和57年)</option>
                                    <option value="1981">1981年 (昭和56年)</option>
                                    <option value="1980">1980年 (昭和55年)</option>
                                    <option value="1979">1979年 (昭和54年)</option>
                                    <option value="1978">1978年 (昭和53年)</option>
                                    <option value="1977">1977年 (昭和52年)</option>
                                    <option value="1976">1976年 (昭和51年)</option>
                                    <option value="1975">1975年 (昭和50年)</option>
                                    <option value="1974">1974年 (昭和49年)</option>
                                    <option value="1973">1973年 (昭和48年)</option>
                                    <option value="1972">1972年 (昭和47年)</option>
                                    <option value="1971">1971年 (昭和46年)</option>
                                    <option value="1970">1970年 (昭和45年)</option>
                                    <option value="1969">1969年 (昭和44年)</option>
                                    <option value="1968">1968年 (昭和43年)</option>
                                    <option value="1967">1967年 (昭和42年)</option>
                                    <option value="1966">1966年 (昭和41年)</option>
                                    <option value="1965">1965年 (昭和40年)</option>
                                    <option value="1964">1964年 (昭和39年)</option>
                                    <option value="1963">1963年 (昭和38年)</option>
                                    <option value="1962">1962年 (昭和37年)</option>
                                    <option value="1961">1961年 (昭和36年)</option>
                                    <option value="1960">1960年 (昭和35年)</option>
                                    <option value="1959">1959年 (昭和34年)</option>
                                    <option value="1958">1958年 (昭和33年)</option>
                                    <option value="1957">1957年 (昭和32年)</option>
                                    <option value="1956">1956年 (昭和31年)</option>
                                    <option value="1955">1955年 (昭和30年)</option>
                                    <option value="1954">1954年 (昭和29年)</option>
                                    <option value="1953">1953年 (昭和28年)</option>
                                    <option value="1952">1952年 (昭和27年)</option>
                                    <option value="1951">1951年 (昭和26年)</option>
                                    <option value="1950">1950年 (昭和25年)</option>
                                    <option value="1949">1949年 (昭和24年)</option>
                                    <option value="1948">1948年 (昭和23年)</option>
                                    <option value="1947">1947年 (昭和22年)</option>
                                    <option value="1946">1946年 (昭和21年)</option>
                                    <option value="1945">1945年 (昭和20年)</option>
                                    <option value="1944">1944年 (昭和19年)</option>
                                    <option value="1943">1943年 (昭和18年)</option>
                                    <option value="1942">1942年 (昭和17年)</option>
                                    <option value="1941">1941年 (昭和16年)</option>
                                    <option value="1940">1940年 (昭和15年)</option>
                                    <option value="1939">1939年 (昭和14年)</option>
                                    <option value="1938">1938年 (昭和13年)</option>
                                    <option value="1937">1937年 (昭和12年)</option>
                                    <option value="1936">1936年 (昭和11年)</option>
                                    <option value="1935">1935年 (昭和10年)</option>
                                    <option value="1934">1934年 (昭和9年)</option>
                                    <option value="1933">1933年 (昭和8年)</option>
                                    <option value="1932">1932年 (昭和7年)</option>
                                    <option value="1931">1931年 (昭和6年)</option>
                                    <option value="1930">1930年 (昭和5年)</option>

                                </select>
                            </div>
                            <p class="pull-left text-md mt10 mr10">&nbsp;年</p>
                            <div class="select form-xsm pull-left">
                                <select name=emonth tabindex="05">
                                    <option value="0">--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>

                                </select>
                            </div>
                            <p class="pull-left mt10">&nbsp;月</p>
                            <div class="clear errortxtbox error_rireki text-bold text-alert pt10"></div>
                            <p class="clear pt10 text-md">現在勤務中の場合、終了年月は未入力にしてください。(例：1999年4月 ～ 年 月)</p>
                        </td>
                    </tr>
                    <tr>
                        <th>職種</th>
                        <td>
                            <div class="select form-lg">
                                <select name=r_shokushu tabindex="06">
                                    <option value="0">---</option>


                                    <option value="0" selected>-------------</option>



                                    <optgroup label="Web系">

                                        <option value="205" >Webデザイナー</option>

                                        <option value="8" >Webプロデューサー・ディレクター</option>

                                        <option value="1" >Web運営</option>

                                        <option value="7" >Webコンテンツ編集</option>

                                    </optgroup>



                                    <optgroup label="クリエイティブ系">

                                        <option value="9" >DTPオペレーター・デザイナー</option>

                                        <option value="5" >グラフィックデザイナー</option>

                                        <option value="10" >編集・校正</option>

                                        <option value="11" >ライター・コピーライター</option>

                                        <option value="202" >CADオペレーター</option>

                                    </optgroup>



                                    <optgroup label="ソフトウェア系">

                                        <option value="2" >Web、オープン系SE・プログラマ</option>

                                        <option value="12" >汎用系SE・プログラマ</option>

                                        <option value="203" >制御、組込み系SE・プログラマ</option>

                                        <option value="13" >パッケージソフト開発</option>

                                        <option value="204" >ネットワーク、サーバー構築・運用</option>

                                    </optgroup>



                                    <optgroup label="オフィスワーク系">

                                        <option value="4" >一般事務</option>

                                        <option value="14" >営業事務</option>

                                        <option value="15" >データ入力</option>

                                        <option value="16" >テレフォンオペレーター</option>

                                        <option value="3" >ユーザーサポート・ヘルプデスク</option>

                                        <option value="17" >インストラクター・講師</option>

                                        <option value="201" >総務・人事</option>

                                        <option value="18" >経理・財務</option>

                                        <option value="19" >秘書</option>

                                    </optgroup>



                                    <optgroup label="営業・企画系">

                                        <option value="6" >営業</option>

                                        <option value="20" >企画・マーケティング</option>

                                    </optgroup>



                                    <optgroup label="その他">

                                        <option value="200" >その他</option>

                                    </optgroup>


                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>雇用形態</th>
                        <td>
                            <div class="select form-lg">
                                <select name=r_keitai tabindex="07">
                                    <option value="0">---</option>
                                    <option value="2">正社員
                                    <option value="6">契約社員
                                    <option value="5">派遣社員
                                    <option value="3">業務委託
                                    <option value="1">アルバイト

                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>職務内容</th>
                        <td>
                            <textarea id="rireki_form1" class="form_job_content" tabindex="08" name="job_content" ></textarea>
                            <p class="pt10 text-md"><a href="/help/howto_apply/experience.html" class="icon icon-docs-md" target="_blank">職務経歴の記入例</a></p>
                        </td>
                    </tr>
                </table>
            </section>

            <div class="relative text-center">
                <a href="javascript:void(0);" class="btn btn-md btn-default fixed-left" data-role="back-button" tabindex="09">追加しないで戻る</a>
                <input type="submit" data-role="submit-button" name="rireki_add_form" class="btn btn-xxlg btn-primary btn-wide block-center" value="職務経歴を追加">
            </div>


        </form>

    </div><!--container-->
</main>

@stop

@section('js')
<script src="/assets/javascripts/my/jquery-fjplugins.js"></script>
<script src="/vendor/assets/jquery/jquery.validate.min.js"></script>
<script src="/assets/javascripts/my/fj_validation.js"></script>
<script src="/assets/javascripts/my/fj.js"></script>
<script src="/assets/javascripts/my/my.js"></script>
<script>
    $(function(){
        fj.c.my.edit.initBiographyForm();

        $("a[data-role='back-button']").click(function(){

            $("form:first").validate().cancelSubmit = true;
            try {
                $("form:first")
                        .find("[name=form]").val("1").end()
                        .get(0).submit();
            } catch (e) {
                // IE で onbeforeunload キャンセル時に発生する「未定義のエラー」回避
            }

            return false;
        });
    });
</script>
@stop
