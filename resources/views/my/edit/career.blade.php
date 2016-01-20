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




        <p class="mb40">Web履歴書を最新情報に更新して、「Web履歴書を登録する」ボタンを押してください。<br>
            ※スカウトメールを「受け取る」に設定されている方：<img src="/images/edit/icon_lock.png" class="mr5">マークのついている情報は企業には公開されません。</p>

        <form action="edit" method="post" name="edit" id="edit" class="form">
            <input type="hidden" name="submitted">
            <input type="hidden" name="num">
            <input type="hidden" name="from" value="">
            <input type="hidden" name="userid" value="557782">
            <input type="hidden" name="user_sid" value="">
            <input type="hidden" name="skill_sid" value="">
            <input type="hidden" name="rireki_sid" value="">
            <input type="hidden" name="career" value="1">
            <input type="hidden" name="scout" value="0">
            <input type="hidden" name="edit_form" value="0">
            <input type="hidden" name="old_rireki" value="">
            <input type="hidden" name="unique_key" value="c7e11c3dd9932a009a0aa7bbd9db43d4">


            <section>
                <h2 class="h2 text-em mb10">プロフィール</h2>
                <table class="input-cell mb40">
                    <tr>
                        <th>氏名<img src="/images/edit/icon_lock.png" alt="非公開" class="ml5"><span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="td-inner-sm mb10 clearfix">
                                <dt class="pull-left">漢字</dt>
                                <dd class="pull-left">
                                    <input id="form_name"  name="name" placeholder="例）山田 太郎" class="text-md" type="text" value="山田千" tabindex="101">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                </dd>
                            </dl>
                            <dl class="td-inner-sm clearfix">
                                <dt class="pull-left">カナ</dt>
                                <dd class="pull-left">
                                    <input id="form_kana" name="kana" placeholder="例）ヤマダ タロウ" class="text-md" type="text" value="てください" tabindex="102">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <th>性別<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>

                            男性<input type="hidden" name="sex" value="1">

                        </td>
                    </tr>
                    <tr>
                        <th>生年月日<img src="/images/edit/icon_lock.png" alt="非公開" class="ml5"><span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td class="clearfix">
                            <div class="select form-sm pull-left">
                                <select name="birthday_year" id="birth_year" tabindex="105">
                                    <option value="0">------</option>
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
                                    <option value="1987" selected="selected">1987年 (昭和62年)</option>
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
                            <span class="pull-left mt10 mr10">&nbsp;年</span>
                            <div class="select form-xsm pull-left">
                                <select name="birthday_month" id="birth_month" tabindex="106">
                                    <option value="0">--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" selected="selected">3</option>
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
                            <span class="pull-left mt10 mr10">&nbsp;月</span>
                            <div class="select form-xsm pull-left">
                                <select name="birthday_day" id="birth_day" tabindex="107">
                                    <option value=0>--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8" selected="selected">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>

                                </select>
                            </div>
                            <span class="pull-left mt10">&nbsp;日</span>
                            <div class="errortxtbox error_birthday text-bold text-alert pt10 clear"></div>
                        </td>
                    </tr>
                    <tr>
                        <th>住所<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">都道府県</dt>
                                <dd class="pull-left">
                                    <div class="select form-sm">
                                        <select name="ken" tabindex="108">
                                            <option value=0>選択してください</option>
                                            <option value=2>北海道
                                            <option value=3>青森県
                                            <option value=4>秋田県
                                            <option value=5>岩手県
                                            <option value=6>山形県
                                            <option value=7>宮城県
                                            <option value=8>福島県
                                            <option value=9>新潟県
                                            <option value=10>富山県
                                            <option value=11>石川県
                                            <option value=12>福井県
                                            <option value=13>群馬県
                                            <option value=14>栃木県
                                            <option value=15>茨城県
                                            <option value=16>埼玉県
                                            <option value=17>千葉県
                                            <option value=18>東京都
                                            <option value=19>神奈川県
                                            <option value=20>山梨県
                                            <option value=21>長野県
                                            <option value=22>静岡県
                                            <option value=23>岐阜県
                                            <option value=24>愛知県
                                            <option value=25>三重県
                                            <option value=26>滋賀県
                                            <option value=27>奈良県
                                            <option value=28>和歌山県
                                            <option value=29 selected>京都府
                                            <option value=30>大阪府
                                            <option value=31>兵庫県
                                            <option value=32>島根県
                                            <option value=33>鳥取県
                                            <option value=34>広島県
                                            <option value=35>岡山県
                                            <option value=36>山口県
                                            <option value=37>徳島県
                                            <option value=38>香川県
                                            <option value=39>愛媛県
                                            <option value=40>高知県
                                            <option value=41>福岡県
                                            <option value=42>佐賀県
                                            <option value=43>長崎県
                                            <option value=44>熊本県
                                            <option value=45>大分県
                                            <option value=46>宮崎県
                                            <option value=47>鹿児島県
                                            <option value=48>沖縄県
                                            <option value=49>海外

                                        </select>
                                    </div>
                                    <div class="errortxtbox error_ken text-bold text-alert pt10"></div>
                                    <p class="icon icon-arrow02-xs"><a href="/help/usage_scout.html#c03" target="_blank">スカウト登録時に公開される情報</a></p>
                                </dd>
                            </dl>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">市区町村</dt>
                                <dd class="pull-left">
                                    <input name="jusho" type="text" placeholder="例）渋谷区東1-2-20 " class="text-md" value="市区町村まで" id="address" id="address" tabindex="109">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                    <p class="text-md pt0">※スカウト登録時に企業に公開されます</p>
                                </dd>
                            </dl>
                            <dl class="td-inner-md clearfix">
                                <dt class="pull-left">以降の住所</dt>
                                <dd class="pull-left">
                                    <input name="jusho2" type="text" placeholder="例）住友不動産渋谷ファーストタワー7F" class="text-md" value="時以外は企業に公" id="form_jusho2" tabindex="110">
                                    <p class="text-md pt10">※応募時以外は企業に公開されません</p>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <th>電話番号<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="clearfix"><dt>自宅</dt><dd>
                                    <input name="tel" type="text" id="form_tel" value="123432" tabindex="111">
                                    <div class="errortxtbox text-alert text-bold pt10"></div></dd>
                            </dl>
                            <dl class="clearfix"><dt>携帯電話</dt><dd><input name="tel2" type="text" id="form_tel2" value="12342333" tabindex="112">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                </dd></dl>
                            <p class="marl120">自宅か携帯電話のどちらかを必ずご記入ください。(半角)</p>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>

                            <dl class="clearfix"><dt>半角英数記号</dt><dd>
                                    <input name=email value="canonpd@163.com" type="text" id="form_email" tabindex="113"><div class="errortxtbox text-alert text-bold pt10"></div></dd></dl>
                            <dl class="clearfix"><dt>確認用</dt><dd><input name=email2 value="canonpd@163.com" type="text" id="form_email2" tabindex="114"><div class="errortxtbox text-alert text-bold pt10"></div></dd></dl>

                        </td>
                    </tr>
                    <tr>
                        <th>携帯メールアドレス</th>
                        <td>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">半角英数記号</dt>
                                <dd class="pull-left">
                                    <input name="m_email" value="" type="text" id="form_m_email" tabindex="117" placeholder="例） ****" class="form-md text-md pull-left">
                                    <div class="mt5 ml10 mr10 pull-left">@</div>
                                    <div class="select form-sm pull-left">
                                        <select name="m_domain" tabindex="118" id="m_domain">
                                            <option value="0">---</option>

                                            <option value="docomo.ne.jp" >docomo.ne.jp</option>

                                            <option value="ezweb.ne.jp" >ezweb.ne.jp</option>

                                            <option value="softbank.ne.jp" >softbank.ne.jp</option>

                                            <option value="d.vodafone.ne.jp" >d.vodafone.ne.jp</option>

                                            <option value="h.vodafone.ne.jp" >h.vodafone.ne.jp</option>

                                            <option value="t.vodafone.ne.jp" >t.vodafone.ne.jp</option>

                                            <option value="c.vodafone.ne.jp" >c.vodafone.ne.jp</option>

                                            <option value="k.vodafone.ne.jp" >k.vodafone.ne.jp</option>

                                            <option value="r.vodafone.ne.jp" >r.vodafone.ne.jp</option>

                                            <option value="n.vodafone.ne.jp" >n.vodafone.ne.jp</option>

                                            <option value="s.vodafone.ne.jp" >s.vodafone.ne.jp</option>

                                            <option value="q.vodafone.ne.jp" >q.vodafone.ne.jp</option>

                                            <option value="i.softbank.jp" >i.softbank.jp</option>

                                            <option value="pdx.ne.jp" >pdx.ne.jp</option>

                                            <option value="di.pdx.ne.jp" >di.pdx.ne.jp</option>

                                            <option value="dj.pdx.ne.jp" >dj.pdx.ne.jp</option>

                                            <option value="dk.pdx.ne.jp" >dk.pdx.ne.jp</option>

                                            <option value="wm.pdx.ne.jp" >wm.pdx.ne.jp</option>

                                            <option value="disney.ne.jp" >disney.ne.jp</option>

                                            <option value="willcom.com" >willcom.com</option>

                                        </select>
                                    </div>
                                    <div class="errortxtbox error_m_email text-bold text-alert pt10 clear"></div>
                                </dd>
                            </dl>
                            <dl class="td-inner-md clearfix">
                                <dt class="pull-left">確認用</dt>
                                <dd class="pull-left">
                                    <input type=text name=m_email2 tabindex="119" placeholder="例） ****" class="form-md text-md pull-left" id="form_m_email2" value="">
                                    <div class="mt5 ml10 mr10 pull-left">@</div>
                                    <div class="select form-sm pull-left">
                                        <select name="m_domain2" tabindex="120" id="m_domain2">
                                            <option value="0">---</option>

                                            <option value="docomo.ne.jp" >docomo.ne.jp

                                            <option value="ezweb.ne.jp" >ezweb.ne.jp

                                            <option value="softbank.ne.jp" >softbank.ne.jp

                                            <option value="d.vodafone.ne.jp" >d.vodafone.ne.jp

                                            <option value="h.vodafone.ne.jp" >h.vodafone.ne.jp

                                            <option value="t.vodafone.ne.jp" >t.vodafone.ne.jp

                                            <option value="c.vodafone.ne.jp" >c.vodafone.ne.jp

                                            <option value="k.vodafone.ne.jp" >k.vodafone.ne.jp

                                            <option value="r.vodafone.ne.jp" >r.vodafone.ne.jp

                                            <option value="n.vodafone.ne.jp" >n.vodafone.ne.jp

                                            <option value="s.vodafone.ne.jp" >s.vodafone.ne.jp

                                            <option value="q.vodafone.ne.jp" >q.vodafone.ne.jp

                                            <option value="i.softbank.jp" >i.softbank.jp

                                            <option value="pdx.ne.jp" >pdx.ne.jp

                                            <option value="di.pdx.ne.jp" >di.pdx.ne.jp

                                            <option value="dj.pdx.ne.jp" >dj.pdx.ne.jp

                                            <option value="dk.pdx.ne.jp" >dk.pdx.ne.jp

                                            <option value="wm.pdx.ne.jp" >wm.pdx.ne.jp

                                            <option value="disney.ne.jp" >disney.ne.jp

                                            <option value="willcom.com" >willcom.com

                                        </select>
                                    </div>
                                    <div class="errortxtbox error_m_email2 text-bold text-alert pt10 clear"></div>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <th>最終学歴<span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">学校名</dt>
                                <dd class="pull-left">
                                    <input tabindex="121" class="text-md" name="g_name" type="text" id="form_g_name" value="学校学校名">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                </dd>
                            </dl>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">学部・学科名</dt>
                                <dd class="pull-left">
                                    <input tabindex="122" name="g_gakubu" class="text-md" type="text" id="form_g_gakubu" value="	 学校名">
                                    <div class="errortxtbox text-alert text-bold pt10"></div>
                                </dd>
                            </dl>
                            <dl class="td-inner-md clearfix">
                                <dt class="pull-left">卒業区分</dt>
                                <dd class="pull-left">
                                    <div class="select form-sm pull-left">
                                        <select tabindex="123" class="form_g_year" name="g_year" id="select">
                                            <option value="0">---</option>
                                            <option value="2018">2018年 (平成30年)</option>
                                            <option value="2017">2017年 (平成29年)</option>
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
                                            <option value="2002" selected="selected">2002年 (平成14年)</option>
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

                                        </select>
                                    </div>
                                    <p class="pull-left text-md mt10 mr10">&nbsp;年に</p>
                                    <div class="select form-sm pull-left">
                                        <select tabindex="124" class="form_g_type" name="g_type">
                                            <option value="0">----</option>
                                            <option value=1 selected>入学
                                            <option value=2>中退
                                            <option value=3>卒業
                                            <option value=4>卒業見込み

                                        </select>
                                    </div>
                                    <div class="errortxtbox error_g_kubun text-bold text-alert pt10 clear"></div>
                                    <p class="pt10 text-md"><a href="/my/g_chart.html" target="_blank" class="icon icon-arrow02-xs">卒業年早見表</a></p>
                                </dd>
                            </dl>
                        </td>
                    </tr>
                </table>
            </section>

            <section>
                <h2 class="h2 text-em pull-left mb10">スキルシート</h2>

                <a href="#" data-role="submit-button" data-submit-type="skill" tabindex="125" class="btn btn-md btn-secondary pull-right">スキルシート更新</a>
                <table class="clear input-cell mb40">

                    <tr>
                        <th>オフィスツール</th>
                        <td>

                            Word：独学<br>

                            Excel：実務1年～2年<br>

                            PowerPoint：独学

                        </td>
                    </tr>

                    <tr>
                        <th>デザイン</th>
                        <td>

                            Photoshop：実務1年未満<br>

                            QuarkXpress：実務1年未満<br>

                            CSS：実務2年以上<br>

                            HTML5：実務2年以上<br>

                            CSS3：実務2年以上

                        </td>
                    </tr>

                    <tr>
                        <th>OS</th>
                        <td>

                            Windows：実務2年以上<br>

                            Mac：実務2年以上<br>

                            Linux：実務2年以上

                        </td>
                    </tr>

                    <tr>
                        <th>プログラム</th>
                        <td>

                            PHP：実務2年以上<br>

                            Python：実務2年以上<br>

                            Ruby：実務2年以上<br>

                            JavaScript：実務2年以上

                        </td>
                    </tr>

                    <tr>
                        <th>データベース</th>
                        <td>

                            MySQL：実務2年以上

                        </td>
                    </tr>


                    <tr>
                        <th>スキル補足</th>
                        <td>随便&#35828;的&#21861;</td>
                    </tr>

                </table>

            </section>

            <section>
                <h2 class="h2 text-em mb10">職務経歴</h2>

                <div class="box clearfix mb40">

                    <input type="hidden" name="rireki_delete_1" value="">
                    <div class="box-md clearfix">
                        <div class="clearfix mb10">
                            <h3 class="h3 pull-left">職務経歴1</h3>
                            <a href="#" data-role="submit-button" data-submit-type="rireki_delete" data-submit-num="1"  data-num="1" class="_deleteRireki btn btn-md btn-default pull-right">削除</a>
                        </div>
                        <table class="input-cell">
                            <tr>
                                <th>会社名</th>
                                <td>
                                    <input type="text" placeholder="例） 株式会社 ****" name="office1" value="&#38271;&#20048;未央" class="text-md form_office">
                                    <p class="pt10 text-md"><a href="/help/howto_apply/company_name.html" target=_blank class="icon icon-arrow02-xs">派遣・出向や統合・合併がある場合の社名記入例</a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>勤務期間</th>
                                <td>
                                    <div class="select form-sm pull-left">
                                        <select tabindex="127" name="syear1" id="com_year1">
                                            <option value="0">---</option>
                                            <option value="2016">2016年 (平成28年)</option>
                                            <option value="2015">2015年 (平成27年)</option>
                                            <option value="2014">2014年 (平成26年)</option>
                                            <option value="2013">2013年 (平成25年)</option>
                                            <option value="2012">2012年 (平成24年)</option>
                                            <option value="2011" selected="selected">2011年 (平成23年)</option>
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
                                        <select tabindex="128" name="smonth1" id="com_month1">
                                            <option value="0">---</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected="selected">5</option>
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
                                        <select tabindex="129" name="eyear1" id="com_year2">
                                            <option value="0">---</option>
                                            <option value="2016" selected="selected">2016年 (平成28年)</option>
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
                                        <select tabindex="130" name="emonth1" id="com_month2">
                                            <option value="0">--</option>
                                            <option value="1" selected="selected">1</option>
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
                                    <p class="clear pt10 text-md">現在勤務中の場合、終了年月は未入力にしてください。(例：1999年4月 ～ 年 月)</p>
                                </td>
                            </tr>
                            <tr>
                                <th>職種</th>
                                <td>
                                    <div class="select form-lg">
                                        <select tabindex="131" name="r_shokushu1" id="syokusyu" class="shokushu" data-num="1">
                                            <option value="0">---</option>


                                            <option value="0" >-------------</option>



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

                                                <option value="2" selected>Web、オープン系SE・プログラマ</option>

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
                                        <select tabindex="132" name="r_keitai1" size="1" id="keitai">
                                            <option value="0">---</option>
                                            <option value="1">アルバイト
                                            <option value="5" selected="selected">派遣社員
                                            <option value="6">契約社員
                                            <option value="2">正社員
                                            <option value="3">業務委託

                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>職務内容</th>
                                <td>
                                    <textarea id="rireki_form1" class="form_job_content" tabindex="133" name="job_content1">PHP工程&#24072;</textarea>
                                    <p class="pt10 text-md"><a href="/help/howto_apply/experience.html" target=_blank class="icon icon-docs-md">職務経歴の記入例</a></p>
                                </td>
                            </tr>
                        </table>
                    </div><!--box-md-->

                    <input type="hidden" name="rireki_delete_2" value="">
                    <div class="box-md clearfix">
                        <div class="clearfix mb10">
                            <h3 class="h3 pull-left">職務経歴2</h3>
                            <a href="#" data-role="submit-button" data-submit-type="rireki_delete" data-submit-num="2"  data-num="2" class="_deleteRireki btn btn-md btn-default pull-right">削除</a>
                        </div>
                        <table class="input-cell">
                            <tr>
                                <th>会社名</th>
                                <td>
                                    <input type="text" placeholder="例） 株式会社 ****" name="office2" value="教育部" class="text-md form_office">
                                    <p class="pt10 text-md"><a href="/help/howto_apply/company_name.html" target=_blank class="icon icon-arrow02-xs">派遣・出向や統合・合併がある場合の社名記入例</a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>勤務期間</th>
                                <td>
                                    <div class="select form-sm pull-left">
                                        <select tabindex="127" name="syear2" id="com_year1">
                                            <option value="0">---</option>
                                            <option value="2016">2016年 (平成28年)</option>
                                            <option value="2015">2015年 (平成27年)</option>
                                            <option value="2014">2014年 (平成26年)</option>
                                            <option value="2013">2013年 (平成25年)</option>
                                            <option value="2012">2012年 (平成24年)</option>
                                            <option value="2011" selected="selected">2011年 (平成23年)</option>
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
                                        <select tabindex="128" name="smonth2" id="com_month1">
                                            <option value="0">---</option>
                                            <option value="1">1</option>
                                            <option value="2" selected="selected">2</option>
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
                                        <select tabindex="129" name="eyear2" id="com_year2">
                                            <option value="0">---</option>
                                            <option value="2016">2016年 (平成28年)</option>
                                            <option value="2015" selected="selected">2015年 (平成27年)</option>
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
                                        <select tabindex="130" name="emonth2" id="com_month2">
                                            <option value="0">--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected="selected">3</option>
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
                                    <p class="clear pt10 text-md">現在勤務中の場合、終了年月は未入力にしてください。(例：1999年4月 ～ 年 月)</p>
                                </td>
                            </tr>
                            <tr>
                                <th>職種</th>
                                <td>
                                    <div class="select form-lg">
                                        <select tabindex="131" name="r_shokushu2" id="syokusyu" class="shokushu" data-num="2">
                                            <option value="0">---</option>


                                            <option value="0" >-------------</option>



                                            <optgroup label="Web系">

                                                <option value="205" >Webデザイナー</option>

                                                <option value="8" selected>Webプロデューサー・ディレクター</option>

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
                                        <select tabindex="132" name="r_keitai2" size="1" id="keitai">
                                            <option value="0">---</option>
                                            <option value="1">アルバイト
                                            <option value="5">派遣社員
                                            <option value="6">契約社員
                                            <option value="2">正社員
                                            <option value="3" selected="selected">業務委託

                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>職務内容</th>
                                <td>
                                    <textarea id="rireki_form2" class="form_job_content" tabindex="133" name="job_content2">1111</textarea>
                                    <p class="pt10 text-md"><a href="/help/howto_apply/experience.html" target=_blank class="icon icon-docs-md">職務経歴の記入例</a></p>
                                </td>
                            </tr>
                        </table>
                    </div><!--box-md-->


                    <a href="#" data-role="submit-button" data-submit-type="rireki_add" tabindex="133" class="btn btn-md btn-secondary pull-right mr20 mb20">職務経歴追加</a>

                    <p class="pull-right pt5 mr20">※上記のほかに勤務した会社があれば追加してください</p>

                </div>

            </section>

            <section>
                <h2 class="h2 text-em text-b-gr mb10">自己PR・志望動機</h2>
                <div class="box-md box-default clearfix mb40">
        <textarea id="form_shokureki" tabindex="142" name="shokureki">&#29233;上地方
123123
&#21834;&#21834;</textarea>
                    <p class="pt10 text-md">※職務経歴だけでは表現しにくいアピールポイントを記入<a href="/help/howto_apply/pr.html" target=_blank class="icon icon-docs-md ml20">自己PR・志望動機の記入例</a></p>
                </div>
            </section>




            <section>
                <div class="box-md bg-default mb50">
                    <h2 class="text-md">個人情報の取り扱いについて</h2>
                    <ul class="text-md">
                        <li class="indent-align">・お客様の個人情報は、求人広告掲載企業への応募等のサービスをご利用いただくために利用いたします。<br>ここで登録した情報については事前の同意なしに一切公開されることはありません。</li>
                        <li class="indent-align">・個人情報などの取り扱いについては「<a href="http://www.mixi-recruitment.co.jp/privacy.html" target="_blank">プライバシーポリシー</a>」をご覧ください。</li>
                    </ul>
                </div>
            </section>

            <div class="relative text-center">
                <a href="/my/edit/edit" class="btn btn-md btn-default btn-nortmal fixed-left">登録情報トップに戻る</a>
                <a href="javascript:void(0);" type="button" name="data_edit" class="btn btn-xxlg btn-primary btn-wide block-center" data-role="submit-button" data-submit-type="data_edit">Web履歴書を登録する</a>
            </div>

        </form>

    </div><!--container-->
</main>
@stop


@section('js')
<script src="/assets/javascripts/my/jquery-fjplugins.js"></script>
<script src="/shared/js/jquery/validation/jquery.validate.min.js"></script>
<script src="/assets/javascripts/my/fj_validation.js"></script>
<script src="/assets/javascripts/my/fj.js"></script>
<script src="/assets/javascripts/my/my.js"></script>
<script>
    $(function(){
        fj.c.my.edit.initResumeForm();
    });
</script>
@stop
