@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')

    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
        <ul>
            <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
            <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span
                            itemprop="title">登録情報</span></strong></li>
        </ul>
    </div><!--topic-path-->
@stop

@section('container')
    <main>
        <div class="container container-narrow">

            <h1 class="mb30">スキルシート登録</h1>

            <p>312 様のスキルシートをご登録いただきます。</p>

            <div class="box box-info box-md mb40">
                <h2 class="h5 text-lg text-em mb5">スキルシートを登録して、有利に転職活動を進めましょう</h2>
                <p>詳細に入力すると、選考通過率、スカウトでの注目度が高まります。</p>
            </div>

            <form name="skill" class="form" action="regist2" method="post">
                <input type=hidden name=submitted value="skill_form">
                <input type=hidden name=from value="">
                <input type=hidden name=userid value="">
                <input type=hidden name=user_sid value="6db5ac81718b6e718e8afb1c8e532206">
                <input type=hidden name=skill_sid value="d7e31f76463b838afeb75af2953be675">
                <input type=hidden name=rireki_sid value="0826f0b72710d2f8b7fee0f39585aa0a">
                <section>
                    <h2 class="h2 text-em mb10">オフィス</h2>
                    <table class="table-skill input-cell text-md mb40">
                        <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <td>なし</td>
                            <td>独学</td>
                            <td>実務<br>~1年</td>
                            <td>実務<br>1~2年</td>
                            <td>実務<br>2年~</td>
                            <th class="partition">&nbsp;</th>
                            <td>なし</td>
                            <td>独学</td>
                            <td>実務<br>~1年</td>
                            <td>実務<br>1~2年</td>
                            <td>実務<br>2年~</td>
                        </tr>
                        </thead>
                        <tbody>


                        <tr>
                            <th>Word</th>

                            <td><input type="radio" tabindex="10" name="21" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="21" value="1"></td>

                            <td><input type="radio" tabindex="10" name="21" value="2"></td>

                            <td><input type="radio" tabindex="10" name="21" value="3"></td>

                            <td><input type="radio" tabindex="10" name="21" value="4"></td>


                            <th class="partition">Access</th>

                            <td><input type="radio" tabindex="7" name="23" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="23" value="1"></td>

                            <td><input type="radio" tabindex="7" name="23" value="2"></td>

                            <td><input type="radio" tabindex="7" name="23" value="3"></td>

                            <td><input type="radio" tabindex="7" name="23" value="4"></td>


                        </tr>


                        <tr>
                            <th>Excel</th>

                            <td><input type="radio" tabindex="10" name="22" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="22" value="1"></td>

                            <td><input type="radio" tabindex="10" name="22" value="2"></td>

                            <td><input type="radio" tabindex="10" name="22" value="3"></td>

                            <td><input type="radio" tabindex="10" name="22" value="4"></td>


                            <th class="partition">PowerPoint</th>

                            <td><input type="radio" tabindex="7" name="24" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="24" value="1"></td>

                            <td><input type="radio" tabindex="7" name="24" value="2"></td>

                            <td><input type="radio" tabindex="7" name="24" value="3"></td>

                            <td><input type="radio" tabindex="7" name="24" value="4"></td>


                        </tr>


                        </tbody>
                    </table>
                </section>

                <section>
                    <h2 class="h2 text-em mb10">デザイン</h2>
                    <table class="table-skill input-cell text-md mb40">
                        <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <td>なし</td>
                            <td>独学</td>
                            <td>実務<br>~1年</td>
                            <td>実務<br>1~2年</td>
                            <td>実務<br>2年~</td>
                            <th class="partition">&nbsp;</th>
                            <td>なし</td>
                            <td>独学</td>
                            <td>実務<br>~1年</td>
                            <td>実務<br>1~2年</td>
                            <td>実務<br>2年~</td>
                        </tr>
                        </thead>
                        <tbody>


                        <tr>
                            <th>Photoshop</th>

                            <td><input type="radio" tabindex="10" name="10" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="10" value="1"></td>

                            <td><input type="radio" tabindex="10" name="10" value="2"></td>

                            <td><input type="radio" tabindex="10" name="10" value="3"></td>

                            <td><input type="radio" tabindex="10" name="10" value="4"></td>


                            <th class="partition">InDesign</th>

                            <td><input type="radio" tabindex="7" name="104" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="104" value="1"></td>

                            <td><input type="radio" tabindex="7" name="104" value="2"></td>

                            <td><input type="radio" tabindex="7" name="104" value="3"></td>

                            <td><input type="radio" tabindex="7" name="104" value="4"></td>


                        </tr>


                        <tr>
                            <th>Illustrator</th>

                            <td><input type="radio" tabindex="10" name="11" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="11" value="1"></td>

                            <td><input type="radio" tabindex="10" name="11" value="2"></td>

                            <td><input type="radio" tabindex="10" name="11" value="3"></td>

                            <td><input type="radio" tabindex="10" name="11" value="4"></td>


                            <th class="partition">HTMLタグ打ち</th>

                            <td><input type="radio" tabindex="7" name="70" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="70" value="1"></td>

                            <td><input type="radio" tabindex="7" name="70" value="2"></td>

                            <td><input type="radio" tabindex="7" name="70" value="3"></td>

                            <td><input type="radio" tabindex="7" name="70" value="4"></td>


                        </tr>


                        <tr>
                            <th>QuarkXpress</th>

                            <td><input type="radio" tabindex="10" name="68" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="68" value="1"></td>

                            <td><input type="radio" tabindex="10" name="68" value="2"></td>

                            <td><input type="radio" tabindex="10" name="68" value="3"></td>

                            <td><input type="radio" tabindex="10" name="68" value="4"></td>


                            <th class="partition">CSS</th>

                            <td><input type="radio" tabindex="7" name="103" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="103" value="1"></td>

                            <td><input type="radio" tabindex="7" name="103" value="2"></td>

                            <td><input type="radio" tabindex="7" name="103" value="3"></td>

                            <td><input type="radio" tabindex="7" name="103" value="4"></td>


                        </tr>


                        <tr>
                            <th>DreamWeaver</th>

                            <td><input type="radio" tabindex="10" name="71" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="71" value="1"></td>

                            <td><input type="radio" tabindex="10" name="71" value="2"></td>

                            <td><input type="radio" tabindex="10" name="71" value="3"></td>

                            <td><input type="radio" tabindex="10" name="71" value="4"></td>


                            <th class="partition">HTML5</th>

                            <td><input type="radio" tabindex="7" name="106" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="106" value="1"></td>

                            <td><input type="radio" tabindex="7" name="106" value="2"></td>

                            <td><input type="radio" tabindex="7" name="106" value="3"></td>

                            <td><input type="radio" tabindex="7" name="106" value="4"></td>


                        </tr>


                        <tr>
                            <th>FireWorks</th>

                            <td><input type="radio" tabindex="10" name="69" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="69" value="1"></td>

                            <td><input type="radio" tabindex="10" name="69" value="2"></td>

                            <td><input type="radio" tabindex="10" name="69" value="3"></td>

                            <td><input type="radio" tabindex="10" name="69" value="4"></td>


                            <th class="partition">CSS3</th>

                            <td><input type="radio" tabindex="7" name="107" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="107" value="1"></td>

                            <td><input type="radio" tabindex="7" name="107" value="2"></td>

                            <td><input type="radio" tabindex="7" name="107" value="3"></td>

                            <td><input type="radio" tabindex="7" name="107" value="4"></td>


                        </tr>


                        <tr>
                            <th>Flash</th>

                            <td><input type="radio" tabindex="10" name="61" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="61" value="1"></td>

                            <td><input type="radio" tabindex="10" name="61" value="2"></td>

                            <td><input type="radio" tabindex="10" name="61" value="3"></td>

                            <td><input type="radio" tabindex="10" name="61" value="4"></td>


                            <th class="partition">CAD</th>

                            <td><input type="radio" tabindex="7" name="14" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="14" value="1"></td>

                            <td><input type="radio" tabindex="7" name="14" value="2"></td>

                            <td><input type="radio" tabindex="7" name="14" value="3"></td>

                            <td><input type="radio" tabindex="7" name="14" value="4"></td>


                        </tr>


                        <tr>
                            <th>Director</th>

                            <td><input type="radio" tabindex="10" name="73" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="73" value="1"></td>

                            <td><input type="radio" tabindex="10" name="73" value="2"></td>

                            <td><input type="radio" tabindex="10" name="73" value="3"></td>

                            <td><input type="radio" tabindex="10" name="73" value="4"></td>


                            <th class="partition">3DCG</th>

                            <td><input type="radio" tabindex="7" name="98" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="98" value="1"></td>

                            <td><input type="radio" tabindex="7" name="98" value="2"></td>

                            <td><input type="radio" tabindex="7" name="98" value="3"></td>

                            <td><input type="radio" tabindex="7" name="98" value="4"></td>


                        </tr>


                        </tbody>
                    </table>
                </section>

                <section>
                    <h2 class="h2 text-em mb10">OS</h2>
                    <table class="table-skill input-cell text-md mb40">
                        <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <td>なし</td>
                            <td>独学</td>
                            <td>実務<br>~1年</td>
                            <td>実務<br>1~2年</td>
                            <td>実務<br>2年~</td>
                            <th class="partition">&nbsp;</th>
                            <td>なし</td>
                            <td>独学</td>
                            <td>実務<br>~1年</td>
                            <td>実務<br>1~2年</td>
                            <td>実務<br>2年~</td>
                        </tr>
                        </thead>
                        <tbody>


                        <tr>
                            <th>Windows</th>

                            <td><input type="radio" tabindex="10" name="36" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="36" value="1"></td>

                            <td><input type="radio" tabindex="10" name="36" value="2"></td>

                            <td><input type="radio" tabindex="10" name="36" value="3"></td>

                            <td><input type="radio" tabindex="10" name="36" value="4"></td>


                            <th class="partition">BSD</th>

                            <td><input type="radio" tabindex="7" name="43" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="43" value="1"></td>

                            <td><input type="radio" tabindex="7" name="43" value="2"></td>

                            <td><input type="radio" tabindex="7" name="43" value="3"></td>

                            <td><input type="radio" tabindex="7" name="43" value="4"></td>


                        </tr>


                        <tr>
                            <th>Mac</th>

                            <td><input type="radio" tabindex="10" name="40" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="40" value="1"></td>

                            <td><input type="radio" tabindex="10" name="40" value="2"></td>

                            <td><input type="radio" tabindex="10" name="40" value="3"></td>

                            <td><input type="radio" tabindex="10" name="40" value="4"></td>


                            <th class="partition">Solaris</th>

                            <td><input type="radio" tabindex="7" name="42" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="42" value="1"></td>

                            <td><input type="radio" tabindex="7" name="42" value="2"></td>

                            <td><input type="radio" tabindex="7" name="42" value="3"></td>

                            <td><input type="radio" tabindex="7" name="42" value="4"></td>


                        </tr>


                        <tr>
                            <th>Linux</th>

                            <td><input type="radio" tabindex="10" name="41" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="41" value="1"></td>

                            <td><input type="radio" tabindex="10" name="41" value="2"></td>

                            <td><input type="radio" tabindex="10" name="41" value="3"></td>

                            <td><input type="radio" tabindex="10" name="41" value="4"></td>


                            <td colspan=6></td>

                        </tr>


                        </tbody>
                    </table>
                </section>

                <section>
                    <h2 class="h2 text-em mb10">プログラミング</h2>
                    <table class="table-skill input-cell text-md mb40">
                        <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <td>なし</td>
                            <td>独学</td>
                            <td>実務<br>~1年</td>
                            <td>実務<br>1~2年</td>
                            <td>実務<br>2年~</td>
                            <th class="partition">&nbsp;</th>
                            <td>なし</td>
                            <td>独学</td>
                            <td>実務<br>~1年</td>
                            <td>実務<br>1~2年</td>
                            <td>実務<br>2年~</td>
                        </tr>
                        </thead>
                        <tbody>


                        <tr>
                            <th>Perl</th>

                            <td><input type="radio" tabindex="10" name="7" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="7" value="1"></td>

                            <td><input type="radio" tabindex="10" name="7" value="2"></td>

                            <td><input type="radio" tabindex="10" name="7" value="3"></td>

                            <td><input type="radio" tabindex="10" name="7" value="4"></td>


                            <th class="partition">C#</th>

                            <td><input type="radio" tabindex="7" name="82" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="82" value="1"></td>

                            <td><input type="radio" tabindex="7" name="82" value="2"></td>

                            <td><input type="radio" tabindex="7" name="82" value="3"></td>

                            <td><input type="radio" tabindex="7" name="82" value="4"></td>


                        </tr>


                        <tr>
                            <th>PHP</th>

                            <td><input type="radio" tabindex="10" name="45" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="45" value="1"></td>

                            <td><input type="radio" tabindex="10" name="45" value="2"></td>

                            <td><input type="radio" tabindex="10" name="45" value="3"></td>

                            <td><input type="radio" tabindex="10" name="45" value="4"></td>


                            <th class="partition">Objective-C</th>

                            <td><input type="radio" tabindex="7" name="105" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="105" value="1"></td>

                            <td><input type="radio" tabindex="7" name="105" value="2"></td>

                            <td><input type="radio" tabindex="7" name="105" value="3"></td>

                            <td><input type="radio" tabindex="7" name="105" value="4"></td>


                        </tr>


                        <tr>
                            <th>Python</th>

                            <td><input type="radio" tabindex="10" name="99" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="99" value="1"></td>

                            <td><input type="radio" tabindex="10" name="99" value="2"></td>

                            <td><input type="radio" tabindex="10" name="99" value="3"></td>

                            <td><input type="radio" tabindex="10" name="99" value="4"></td>


                            <th class="partition">Java</th>

                            <td><input type="radio" tabindex="7" name="6" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="6" value="1"></td>

                            <td><input type="radio" tabindex="7" name="6" value="2"></td>

                            <td><input type="radio" tabindex="7" name="6" value="3"></td>

                            <td><input type="radio" tabindex="7" name="6" value="4"></td>


                        </tr>


                        <tr>
                            <th>Ruby</th>

                            <td><input type="radio" tabindex="10" name="100" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="100" value="1"></td>

                            <td><input type="radio" tabindex="10" name="100" value="2"></td>

                            <td><input type="radio" tabindex="10" name="100" value="3"></td>

                            <td><input type="radio" tabindex="10" name="100" value="4"></td>


                            <th class="partition">VisualBasic</th>

                            <td><input type="radio" tabindex="7" name="3" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="3" value="1"></td>

                            <td><input type="radio" tabindex="7" name="3" value="2"></td>

                            <td><input type="radio" tabindex="7" name="3" value="3"></td>

                            <td><input type="radio" tabindex="7" name="3" value="4"></td>


                        </tr>


                        <tr>
                            <th>ASP</th>

                            <td><input type="radio" tabindex="10" name="47" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="47" value="1"></td>

                            <td><input type="radio" tabindex="10" name="47" value="2"></td>

                            <td><input type="radio" tabindex="10" name="47" value="3"></td>

                            <td><input type="radio" tabindex="10" name="47" value="4"></td>


                            <th class="partition">Delphi</th>

                            <td><input type="radio" tabindex="7" name="83" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="83" value="1"></td>

                            <td><input type="radio" tabindex="7" name="83" value="2"></td>

                            <td><input type="radio" tabindex="7" name="83" value="3"></td>

                            <td><input type="radio" tabindex="7" name="83" value="4"></td>


                        </tr>


                        <tr>
                            <th>JSP</th>

                            <td><input type="radio" tabindex="10" name="81" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="81" value="1"></td>

                            <td><input type="radio" tabindex="10" name="81" value="2"></td>

                            <td><input type="radio" tabindex="10" name="81" value="3"></td>

                            <td><input type="radio" tabindex="10" name="81" value="4"></td>


                            <th class="partition">COBOL</th>

                            <td><input type="radio" tabindex="7" name="5" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="5" value="1"></td>

                            <td><input type="radio" tabindex="7" name="5" value="2"></td>

                            <td><input type="radio" tabindex="7" name="5" value="3"></td>

                            <td><input type="radio" tabindex="7" name="5" value="4"></td>


                        </tr>


                        <tr>
                            <th>C</th>

                            <td><input type="radio" tabindex="10" name="1" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="1" value="1"></td>

                            <td><input type="radio" tabindex="10" name="1" value="2"></td>

                            <td><input type="radio" tabindex="10" name="1" value="3"></td>

                            <td><input type="radio" tabindex="10" name="1" value="4"></td>


                            <th class="partition">JavaScript</th>

                            <td><input type="radio" tabindex="7" name="66" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="66" value="1"></td>

                            <td><input type="radio" tabindex="7" name="66" value="2"></td>

                            <td><input type="radio" tabindex="7" name="66" value="3"></td>

                            <td><input type="radio" tabindex="7" name="66" value="4"></td>


                        </tr>


                        <tr>
                            <th>C++</th>

                            <td><input type="radio" tabindex="10" name="2" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="2" value="1"></td>

                            <td><input type="radio" tabindex="10" name="2" value="2"></td>

                            <td><input type="radio" tabindex="10" name="2" value="3"></td>

                            <td><input type="radio" tabindex="10" name="2" value="4"></td>


                            <th class="partition">ActionScript</th>

                            <td><input type="radio" tabindex="7" name="101" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="101" value="1"></td>

                            <td><input type="radio" tabindex="7" name="101" value="2"></td>

                            <td><input type="radio" tabindex="7" name="101" value="3"></td>

                            <td><input type="radio" tabindex="7" name="101" value="4"></td>


                        </tr>


                        </tbody>
                    </table>
                </section>

                <section>
                    <h2 class="h2 text-em mb10">データベース</h2>
                    <table class="table-skill input-cell text-md mb40">
                        <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <td>なし</td>
                            <td>独学</td>
                            <td>実務<br>~1年</td>
                            <td>実務<br>1~2年</td>
                            <td>実務<br>2年~</td>
                            <th class="partition">&nbsp;</th>
                            <td>なし</td>
                            <td>独学</td>
                            <td>実務<br>~1年</td>
                            <td>実務<br>1~2年</td>
                            <td>実務<br>2年~</td>
                        </tr>
                        </thead>
                        <tbody>


                        <tr>
                            <th>Oracle</th>

                            <td><input type="radio" tabindex="10" name="44" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="44" value="1"></td>

                            <td><input type="radio" tabindex="10" name="44" value="2"></td>

                            <td><input type="radio" tabindex="10" name="44" value="3"></td>

                            <td><input type="radio" tabindex="10" name="44" value="4"></td>


                            <th class="partition">PostgreSQL</th>

                            <td><input type="radio" tabindex="7" name="89" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="89" value="1"></td>

                            <td><input type="radio" tabindex="7" name="89" value="2"></td>

                            <td><input type="radio" tabindex="7" name="89" value="3"></td>

                            <td><input type="radio" tabindex="7" name="89" value="4"></td>


                        </tr>


                        <tr>
                            <th>DB2</th>

                            <td><input type="radio" tabindex="10" name="86" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="86" value="1"></td>

                            <td><input type="radio" tabindex="10" name="86" value="2"></td>

                            <td><input type="radio" tabindex="10" name="86" value="3"></td>

                            <td><input type="radio" tabindex="10" name="86" value="4"></td>


                            <th class="partition">MySQL</th>

                            <td><input type="radio" tabindex="7" name="90" value="0" checked></td>

                            <td><input type="radio" tabindex="7" name="90" value="1"></td>

                            <td><input type="radio" tabindex="7" name="90" value="2"></td>

                            <td><input type="radio" tabindex="7" name="90" value="3"></td>

                            <td><input type="radio" tabindex="7" name="90" value="4"></td>


                        </tr>


                        <tr>
                            <th>SQLServer</th>

                            <td><input type="radio" tabindex="10" name="88" value="0" checked></td>

                            <td><input type="radio" tabindex="10" name="88" value="1"></td>

                            <td><input type="radio" tabindex="10" name="88" value="2"></td>

                            <td><input type="radio" tabindex="10" name="88" value="3"></td>

                            <td><input type="radio" tabindex="10" name="88" value="4"></td>


                            <td colspan=6></td>

                        </tr>


                        </tbody>
                    </table>
                </section>

                <section>
                    <h2 class="h2 text-em mb10">各種資格</h2>
                    <table class="input-cell text-md mb40">
                        <tr>
                            <th>TOEIC</th>
                            <td>
                                <ul class="list-skill-col4 clearfix">


                                    <li class="pull-left"><label for="64"><input tabindex="17" class="mr5" id="64"
                                                                                 name="64" type="checkbox" value="1">500点以上</label>
                                    </li>


                                    <li class="pull-left"><label for="28"><input tabindex="17" class="mr5" id="28"
                                                                                 name="28" type="checkbox" value="1">600点以上</label>
                                    </li>


                                    <li class="pull-left"><label for="59"><input tabindex="17" class="mr5" id="59"
                                                                                 name="59" type="checkbox" value="1">730点以上</label>
                                    </li>


                                    <li class="pull-left"><label for="75"><input tabindex="17" class="mr5" id="75"
                                                                                 name="75" type="checkbox" value="1">860点以上</label>
                                    </li>


                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>簿記</th>
                            <td>
                                <ul class="list-skill-col4 clearfix">


                                    <li class="pull-left"><label for="30"><input class="mr5" tabindex="17" id="30"
                                                                                 name="30" type="checkbox" value="1">簿記3級</label>
                                    </li>


                                    <li class="pull-left"><label for="65"><input class="mr5" tabindex="17" id="65"
                                                                                 name="65" type="checkbox" value="1">簿記2級</label>
                                    </li>


                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>情報系資格</th>
                            <td>
                                <ul class="list-skill-col3 clearfix">


                                    <li class="pull-left mb10"><label for="63"><input tabindex="17" class="mr5" id="63"
                                                                                      name="63" type="checkbox"
                                                                                      value="1">初級シスアド</label></li>


                                    <li class="pull-left mb10"><label for="58"><input tabindex="17" class="mr5" id="58"
                                                                                      name="58" type="checkbox"
                                                                                      value="1">ソフトウェア開発技術者</label></li>


                                    <li class="pull-left mb10"><label for="62"><input tabindex="17" class="mr5" id="62"
                                                                                      name="62" type="checkbox"
                                                                                      value="1">基本情報技術者</label></li>


                                    <li class="pull-left mb10"><label for="91"><input tabindex="17" class="mr5" id="91"
                                                                                      name="91" type="checkbox"
                                                                                      value="1">CCNA</label></li>


                                    <li class="pull-left mb10"><label for="92"><input tabindex="17" class="mr5" id="92"
                                                                                      name="92" type="checkbox"
                                                                                      value="1">CCNP</label></li>


                                    <li class="pull-left mb10"><label for="56"><input tabindex="17" class="mr5" id="56"
                                                                                      name="56" type="checkbox"
                                                                                      value="1">MOT</label></li>


                                    <li class="pull-left mb10"><label for="96"><input tabindex="17" class="mr5" id="96"
                                                                                      name="96" type="checkbox"
                                                                                      value="1">OracleMaster</label>
                                    </li>


                                    <li class="pull-left mb10"><label for="97"><input tabindex="17" class="mr5" id="97"
                                                                                      name="97" type="checkbox"
                                                                                      value="1">MOS(旧MOUS)</label></li>


                                </ul>
                            </td>
                        </tr>
                    </table>
                </section>

                <section>
                    <h2 class="h2 text-em mb10">スキルに関する捕足</h2>
                    <div class="box-md bg-default border-t-gray border-b-gray mb50">
                        <textarea placeholder="上記以外にあなたのスキルについてアピールしたいことがあればご記入ください" tabindex=""
                                  name="s_other"></textarea>
                    </div>
                </section>

                <div class="relative text-center">
                    <a href="#" tabindex="09" data-role="back-button"
                       class="btn btn-md btn-default fixed-left">変更しないで戻る</a>
                    <input type="submit" class="btn btn-xxlg btn-primary btn-wide block-center" value="スキルシートを登録して戻る">
                </div>

            </form>
        </div><!--container-->
    </main>
@stop

@section('js')

    <script type="text/javascript" src="/assets/javascripts/my/jquery-fjplugins.js"></script>
    <script type="text/javascript" src="/assets/javascripts/my/fj.js"></script>
    <script type="text/javascript" src="/assets/javascripts/my/my.js"></script>
    <script type="text/javascript">

        $(function () {

            fj.c.my.edit.initSkillForm();

            // セル選択でチェック
            var $td = $('form td');
            $td.click(function () {
                var $input = $(this).find('input');
                // 資格チェックボックス、textareaを除外。
                if ($input.attr('type') == 'radio') {
                    var $value = $input.val();
                    $input.val([$value]);
                }
            });

            $("a[data-role='back-button']").click(function () {

                fj.c.my.apply.noAlert = true;

                try {
                    $("form:first")
                            .find("[name=submitted]").val("form").end()
                            .get(0).submit();
                } catch (e) {
                    // IE で onbeforeunload キャンセル時に発生する「未定義のエラー」回避
                }

                return false;
            });
        });

    </script>
@stop