@extends('layouts._home')
@section('css')
<link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')
<div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">会员注册</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">会员注册</h1>

        <div class="box box-md mb40">
            <p><span class="text-em text-lg text-bold">気になる求人があれば、まず検討中に追加しましょう。</span></p>
            <p>求人を気になるリストに追加すると企業に伝わるため、企業からアプローチを受ける可能性が高まります。<br>応募前に企業からの反応がわかるため、合格の可能性が高い求人を見つけることが可能です。<br>転職活動を有利に進めるためにも、気になった求人はどんどん追加しましょう。</p>
        </div>

        <form action="regist" method="post" class="form">
            <input type="hidden" name="submitted" value="rireki">
            <div class="text-center mb40 relative">
                <button onclick="$('form input[name=job_id]').prop('checked', true); $('form').submit(); return false;" class="btn btn-xxlg btn-primary btn-wide block-center">すべて追加して次へ</button>
                <a href="#" onclick="$('form input[name=job_id]').prop('checked', false); $('form').submit(); return false;" class="icon icon-arrow02-xs fixed-right">追加しない場合はこちら</a>
            </div>
            <table>
                <colgroup>
                    <col style="width:7%;">
                    <col style="width:28%;">
                    <col style="width:23%;">
                    <col style="width:23%;">
                    <col style="width:19%;">
                </colgroup>
                <tbody>
                <tr>
                    <th class="text-center">追加</th>
                    <th>職種/社名</th>
                    <th>待遇</th>
                    <th>仕事の概要</th>
                    <th>勤務地</th>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_108265"><input type="checkbox" name="job_id[]" value="108265" id="job_id_108265"></label>
                    <td>
                        合同会社リベラルアーツ<br>
                        <a href="/list/j108265.html?from=137" target="_blank">プログラマー</a>
                    </td>
                    <td>

                        月給25万円 ～<br>
                        正社員(中途)<img src="/images/common/begginer.png" alt="未経験可"><br>



                    </td>
                    <td>サーバーの構築から担当しシステムを構築、サイトの運用・保守までWebサービスに必要な開発・保守の一連の業務全てを行います。</td>
                    <td>大阪市西区、他東京23区内、全国各地、在宅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_108579"><input type="checkbox" name="job_id[]" value="108579" id="job_id_108579"></label>
                    <td>
                        株式会社ディエスピー<br>
                        <a href="/list/j108579.html?from=137" target="_blank">Webディレクター</a>
                    </td>
                    <td>

                        1. 年俸360万円 ～<br>
                        正社員(中途)<img src="/images/common/begginer.png" alt="未経験可"><br>


                        2. 年俸300万円 ～<br>
                        正社員(中途)<img src="/images/common/begginer.png" alt="未経験可"><br>


                    </td>
                    <td>提案やヒアリング・問題解決・サイトマップ作成・ワイヤーフレーム作成・スケジュール管理・顧客折衝などをお願いします。</td>
                    <td>千代田区：各線 神保町駅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_109728"><input type="checkbox" name="job_id[]" value="109728" id="job_id_109728"></label>
                    <td>
                        株式会社サンデーアーツ<br>
                        <a href="/list/j109728.html?from=137" target="_blank">Webデザイナー・コーダー[兼務]</a>
                    </td>
                    <td>

                        1. 月給27万円 ～ 60万円<br>
                        正社員(中途)<br>


                        2. 時給1200円<br>
                        アルバイト<img src="/images/common/begginer.png" alt="未経験可"><br>


                    </td>
                    <td>自社製システムパッケージ、及び関連システムのカスタマイズに伴うデザイン＆コーディングに携わっていただきます。</td>
                    <td>東京都千代田区、大阪市東淀川区</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_104999"><input type="checkbox" name="job_id[]" value="104999" id="job_id_104999"></label>
                    <td>
                        株式会社ミクシィ<br>
                        <a href="/list/j104999.html?from=137" target="_blank">「モンスターストライク」のイラストレーター</a>
                    </td>
                    <td>

                        月給21万4000円 ～ 35万7000円<br>
                        契約社員<br>



                    </td>
                    <td>モンスターストライクに登場するモンスターやキャラクターのイラストを制作していただきます。 </td>
                    <td>渋谷区：各線 渋谷駅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_108984"><input type="checkbox" name="job_id[]" value="108984" id="job_id_108984"></label>
                    <td>
                        株式会社every one<br>
                        <a href="/list/j108984.html?from=137" target="_blank">グラフィックデザイナー</a>
                    </td>
                    <td>

                        月給24万円 ～<br>
                        正社員(中途)<img src="/images/common/begginer.png" alt="未経験可"><br>



                    </td>
                    <td>当社が企画・開発・販売する健康食品・美容商品のパッケージやチラシ、DM、ポスターなどのグラフィックデザインをお任せします。</td>
                    <td>新宿区：新宿線 曙橋駅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_81306"><input type="checkbox" name="job_id[]" value="81306" id="job_id_81306"></label>
                    <td>
                        株式会社東京アドデザイナース<br>
                        <a href="/list/j81306.html?from=137" target="_blank">Webディレクター</a>
                    </td>
                    <td>

                        1. 年俸400万円 ～ 450万円<br>
                        正社員(中途)<br>


                        2. 年俸400万円 ～ 450万円<br>
                        契約社員<br>


                    </td>
                    <td>大手企業の案件を中心にWebサイト構築におけるディレクション業務をお任せいたします。</td>
                    <td>千代田区：半蔵門線 半蔵門駅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_84353"><input type="checkbox" name="job_id[]" value="84353" id="job_id_84353"></label>
                    <td>
                        株式会社ぐるなび <br>
                        <a href="/list/j84353.html?from=137" target="_blank">Webディレクター</a>
                    </td>
                    <td>

                        年俸400万円 ～ 600万円<br>
                        正社員(中途)<br>



                    </td>
                    <td>ぐるなびの手掛けるサービスサイトの企画・ディレクション業務をお任せいたします。</td>
                    <td>千代田区：各線 日比谷駅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_74301"><input type="checkbox" name="job_id[]" value="74301" id="job_id_74301"></label>
                    <td>
                        株式会社トライブ<br>
                        <a href="/list/j74301.html?from=137" target="_blank">Webディレクター</a>
                    </td>
                    <td>

                        1. 月給25万円 ～ 60万円<br>
                        正社員(中途)<img src="/images/common/begginer.png" alt="未経験可"><br>


                        2. 時給1600円 ～ 3000円<br>
                        派遣社員<img src="/images/common/begginer.png" alt="未経験可"><br>


                        3. 月給25万円 ～ 60万円<br>
                        業務委託<img src="/images/common/begginer.png" alt="未経験可">

                    </td>
                    <td>WEBディレクター・プロデューサーなど、ご希望に合わせて様々なお仕事をご紹介します。</td>
                    <td>東京都、神奈川県、千葉県</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_98956"><input type="checkbox" name="job_id[]" value="98956" id="job_id_98956"></label>
                    <td>
                        株式会社クライマークス<br>
                        <a href="/list/j98956.html?from=137" target="_blank">Webデザイナー</a>
                    </td>
                    <td>

                        年俸320万円 ～ 600万円<br>
                        正社員(中途)<br>



                    </td>
                    <td>クライアントのコーポレートサイトのトップページデザインや主要下層ページデザイン、コンペ提案用デザイン等をお願いします。</td>
                    <td>中央区：有楽町線 銀座一丁目駅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_109890"><input type="checkbox" name="job_id[]" value="109890" id="job_id_109890"></label>
                    <td>
                        サイボウズスタートアップス株式会社<br>
                        <a href="/list/j109890.html?from=137" target="_blank">自社クラウドサービスのPHPプログラマ</a>
                    </td>
                    <td>

                        1. 月給40万円 ～ 70万円<br>
                        正社員(中途)<br>


                        2. 月給40万円 ～ 70万円<br>
                        業務委託<br>


                    </td>
                    <td>多くの企業様にご利用いただいている自社のクラウドサービスのメンテナンス及び機能追加をしていただきます。</td>
                    <td>港区：山手線 田町駅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_90020"><input type="checkbox" name="job_id[]" value="90020" id="job_id_90020"></label>
                    <td>
                        株式会社コラセプタ<br>
                        <a href="/list/j90020.html?from=137" target="_blank">SEアシスタント</a>
                    </td>
                    <td>

                        1. 月給25万円 ～<br>
                        正社員(中途)<br>


                        2. 時給1200円 ～<br>
                        アルバイト<img src="/images/common/begginer.png" alt="未経験可"><br>


                        3. <br>
                        業務委託

                    </td>
                    <td>自社サービス・受託開発を中心に、まずは受託案件の一部の修正や機能追加をお任せします。</td>
                    <td>青梅市、ほか都内23区</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_110201"><input type="checkbox" name="job_id[]" value="110201" id="job_id_110201"></label>
                    <td>
                        株式会社デュエル<br>
                        <a href="/list/j110201.html?from=137" target="_blank">3DCADエンジニア</a>
                    </td>
                    <td>

                        1. 月給20万円 ～ 45万円<br>
                        正社員(中途)<img src="/images/common/begginer.png" alt="未経験可"><br>


                        2. 月給20万円 ～ 45万円<br>
                        正社員(新卒)<img src="/images/common/begginer.png" alt="未経験可"><br>


                    </td>
                    <td>3DCADを用いたデータ作成業務、3DCADユーザーへの操作サポート、モデリングサポートなどをお任せします。</td>
                    <td>港区、他東京都内、神奈川県、千葉県、埼玉県</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_110048"><input type="checkbox" name="job_id[]" value="110048" id="job_id_110048"></label>
                    <td>
                        ソフトウエアエンジニアリング株式会社<br>
                        <a href="/list/j110048.html?from=137" target="_blank">新人研修プログラミング講師</a>
                    </td>
                    <td>

                        月給60万円<br>
                        業務委託<img src="/images/common/begginer.png" alt="未経験可"><br>



                    </td>
                    <td>企業向け新人向けプログラミング講師の仕事をお任せします。</td>
                    <td>中央区、東京都内、他全国各地</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_110057"><input type="checkbox" name="job_id[]" value="110057" id="job_id_110057"></label>
                    <td>
                        NHN テコラス株式会社<br>
                        <a href="/list/j110057.html?from=137" target="_blank">EC事業のコールセンタースタッフ</a>
                    </td>
                    <td>

                        年俸300万円 ～<br>
                        契約社員<br>



                    </td>
                    <td>ネットショップ運営支援ツールのテクニカルサポートを担当いただきます。</td>
                    <td>新宿区：副都心線都 東新宿駅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_105088"><input type="checkbox" name="job_id[]" value="105088" id="job_id_105088"></label>
                    <td>
                        株式会社ニジボックス<br>
                        <a href="/list/j105088.html?from=137" target="_blank">フロントエンド・バックエンド開発エンジニア</a>
                    </td>
                    <td>

                        1. 時給930円 ～<br>
                        アルバイト<img src="/images/common/begginer.png" alt="未経験可"><br>


                        2. 年俸330万円 ～ 600万円<br>
                        契約社員<br>


                    </td>
                    <td>キャンペーンサイト、生活系・教育系アプリ、ソーシャルゲーム等さまざまなジャンルのWEBサービスの開発をするお仕事です。</td>
                    <td>中央区：大江戸線 勝どき駅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_109729"><input type="checkbox" name="job_id[]" value="109729" id="job_id_109729"></label>
                    <td>
                        株式会社サンデーアーツ<br>
                        <a href="/list/j109729.html?from=137" target="_blank">Webプログラマ</a>
                    </td>
                    <td>

                        1. 月給27万円 ～ 60万円<br>
                        正社員(中途)<br>


                        2. 時給1200円<br>
                        アルバイト<img src="/images/common/begginer.png" alt="未経験可"><br>


                    </td>
                    <td>自社製品の新規開発、バージョンアップ、iPhone/iPad、Android用アプリケーションの受託開発などをお願いします。</td>
                    <td>東京都千代田区、大阪市東淀川区</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_102220"><input type="checkbox" name="job_id[]" value="102220" id="job_id_102220"></label>
                    <td>
                        株式会社SLAM International<br>
                        <a href="/list/j102220.html?from=137" target="_blank">バスケオンラインショップのWeb運営・管理・制作スタッフ</a>
                    </td>
                    <td>

                        月給23万円 ～ 30万円<br>
                        正社員(中途)<img src="/images/common/begginer.png" alt="未経験可"><br>



                    </td>
                    <td>弊社が運営している既存WEBサイト(オンラインショップ)の制作・管理・運営が主なお仕事です。</td>
                    <td>相模原市：小田急線 小田急相模原駅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_104188"><input type="checkbox" name="job_id[]" value="104188" id="job_id_104188"></label>
                    <td>
                        北陸ゴム株式会社<br>
                        <a href="/list/j104188.html?from=137" target="_blank">ファッションサイトの運営スタッフ・Web制作デザイナー[兼務]</a>
                    </td>
                    <td>

                        月給20万円 ～ 30万円<br>
                        正社員(中途)<br>



                    </td>
                    <td>ECサイト(楽天，Yahoo! Amazon， shop list， make shop future shop)の制作業務になります。</td>
                    <td>大阪市北区：JR 大阪駅 </td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_110000"><input type="checkbox" name="job_id[]" value="110000" id="job_id_110000"></label>
                    <td>
                        株式会社アイエフクリエイト<br>
                        <a href="/list/j110000.html?from=137" target="_blank">Webクリエイター</a>
                    </td>
                    <td>

                        月給22万円 ～<br>
                        正社員(中途)<br>



                    </td>
                    <td>自社サイトの更新・修正業務、デザイン、コーディングおよび新規自社サイトの企画、デザイン、コーディングをお任せいたします。</td>
                    <td>立川市：中央線 立川駅</td>
                </tr>

                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_109998"><input type="checkbox" name="job_id[]" value="109998" id="job_id_109998"></label>
                    <td>
                        株式会社バーディモバイル<br>
                        <a href="/list/j109998.html?from=137" target="_blank">Webディレクター</a>
                    </td>
                    <td>

                        1. 月給25万円 ～<br>
                        正社員(中途)<br>


                        2. 月給22万円 ～<br>
                        契約社員<br>


                        3. 時給1000円 ～<br>
                        アルバイト<img src="/images/common/begginer.png" alt="未経験可">

                    </td>
                    <td>Webコンテンツ、Webサービス・スマートフォン向けアプリの企画や運営、受託開発や新規事業のディレクション全般をお任せします。</td>
                    <td>渋谷区：JR 渋谷駅</td>
                </tr>

                </tbody>
            </table>

            <div class="text-center mt30">
                <input type="submit" class="btn btn-xxlg btn-primary block-center" value="気になるリストに追加してWeb履歴書作成に進む">
            </div>
        </form>

    </div><!--container-->
</main>
@stop


@section('js')
<script>
    $(function() {
        $('form td').on("click", function(e){

            if (e.target.type === 'checkbox'){
                return;
            }

            var $input = $(this).find('input');
            if ($input.prop('checked')) {
                $input.prop('checked', false);
            }
            else {
                $input.prop('checked', true);
            }
        });
    });
</script>
@stop
