@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')

    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="https://www.find-job.net/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">会員登録</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop
@section('container')
<main>
    <div class="container container-narrow">

        <h1 class="mb30">会員登録</h1>

        <div class="box box-md mb40">
            <p><span class="text-em text-lg text-bold">気になる求人があれば、まず検討中に追加しましょう。</span></p>
            <p>求人を気になるリストに追加すると企業に伝わるため、企業からアプローチを受ける可能性が高まります。<br>応募前に企業からの反応がわかるため、合格の可能性が高い求人を見つけることが可能です。<br>転職活動を有利に進めるためにも、気になった求人はどんどん追加しましょう。</p>
        </div>

        <form action="/my/edit/edit_info" method="get" class="form">
            <input type="hidden" name="submitted" value="rireki">
            <div class="text-center mb40 relative">
                <button onclick="$(&#39;form input[name=job_id]&#39;).prop(&#39;checked&#39;, true); $(&#39;form&#39;).submit(); return false;" class="btn btn-xxlg btn-primary btn-wide block-center">すべて追加して次へ</button>
                <a href="https://www.find-job.net/my/regist/regist.cgi#" onclick="$(&#39;form input[name=job_id]&#39;).prop(&#39;checked&#39;, false); $(&#39;form&#39;).submit(); return false;" class="icon icon-arrow02-xs fixed-right">追加しない場合はこちら</a>
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
                        <label for="job_id_109890"><input type="checkbox" name="job_id" value="109890" id="job_id_109890"></label>
                    </td><td>
                        サイボウズスタートアップス株式会社<br>
                        <a href="https://www.find-job.net/list/j109890.html?from=137" target="_blank">自社クラウドサービスのPHPプログラマ</a>
                    </td>
                    <td>
                        
                            1. 月給40万円 〜 70万円<br>
                            正社員(中途)<br>
                        
                        
                            2. 月給40万円 〜 70万円<br>
                            業務委託<br>
                        
                        
                    </td>
                    <td>多くの企業様にご利用いただいている自社のクラウドサービスのメンテナンス及び機能追加をしていただきます。</td>
                    <td>港区：山手線 田町駅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_105483"><input type="checkbox" name="job_id" value="105483" id="job_id_105483"></label>
                    </td><td>
                        株式会社コンケーブ<br>
                        <a href="https://www.find-job.net/list/j105483.html?from=137" target="_blank">ネット広告のWebエンジニア</a>
                    </td>
                    <td>
                        
                            1. 月給40万円 〜 80万円<br>
                            正社員(中途)<img src="/images/begginer.png" alt="未経験可"><br>
                        
                        
                            2. 月給25万円 〜 50万円<br>
                            正社員(新卒)<img src="/images/begginer.png" alt="未経験可"><br>
                        
                        
                            3. 月給20万円 〜 80万円<br>
                            契約社員
                        
                    </td>
                    <td>最初は運用サポートや開発アシスタントとして、サービスについて覚えながら、社内機能の改善などを担当していただきます。</td>
                    <td>新宿区：東西線 早稲田駅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_109552"><input type="checkbox" name="job_id" value="109552" id="job_id_109552"></label>
                    </td><td>
                        株式会社FID<br>
                        <a href="https://www.find-job.net/list/j109552.html?from=137" target="_blank">自社メール配信システム開発エンジニア</a>
                    </td>
                    <td>
                        
                            1. 月給21万円 〜<br>
                            正社員(中途)<br>
                        
                        
                            2. 月給21万円 〜 100万円<br>
                            契約社員<br>
                        
                        
                            3. 時給1000円 〜 5000円<br>
                            アルバイト
                        
                    </td>
                    <td>LAMP環境を使用した、メール配信システムの開発、運営、保守などをお願いします。</td>
                    <td>新宿区、町田市、船橋市</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_104908"><input type="checkbox" name="job_id" value="104908" id="job_id_104908"></label>
                    </td><td>
                        株式会社イー・ビジョン<br>
                        <a href="https://www.find-job.net/list/j104908.html?from=137" target="_blank">Webシステムエンジニア</a>
                    </td>
                    <td>
                        
                            1. 月給28万円 〜 60万円<br>
                            正社員(中途)<br>
                        
                        
                            2. 月給22万円 〜 60万円<br>
                            正社員(中途)<img src="/images/begginer.png" alt="未経験可"><br>
                        
                        
                            3. 月給30万円 〜 60万円<br>
                            契約社員
                        
                    </td>
                    <td>不動産サイトや情報検索サイト、WEB系業務管理システムの開発や、スマホアプリの開発をお任せいたします。</td>
                    <td>新宿区：JR 新宿駅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_110007"><input type="checkbox" name="job_id" value="110007" id="job_id_110007"></label>
                    </td><td>
                        イープロデュース株式会社<br>
                        <a href="https://www.find-job.net/list/j110007.html?from=137" target="_blank">Webマーケッター</a>
                    </td>
                    <td>
                        
                            月給30万円 〜 60万円<br>
                            正社員(中途)<br>
                        
                        
                        
                    </td>
                    <td>自社サービスに関わるWebマーケティングをお任せいたします。</td>
                    <td>渋谷区、在宅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_110009"><input type="checkbox" name="job_id" value="110009" id="job_id_110009"></label>
                    </td><td>
                        イープロデュース株式会社<br>
                        <a href="https://www.find-job.net/list/j110009.html?from=137" target="_blank">Webシステム開発のPHPプログラマー</a>
                    </td>
                    <td>
                        
                            月給30万円 〜 60万円<br>
                            正社員(中途)<br>
                        
                        
                        
                    </td>
                    <td>当社はWEB戦略によってほとんどの集客を行っています。WEBは基幹部分です。その基幹部分であるシステムの構築をお任せします。</td>
                    <td>渋谷区、在宅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_110004"><input type="checkbox" name="job_id" value="110004" id="job_id_110004"></label>
                    </td><td>
                        株式会社受験ドクター<br>
                        <a href="https://www.find-job.net/list/j110004.html?from=137" target="_blank">Webシステム開発のPHPプログラマー</a>
                    </td>
                    <td>
                        
                            月給30万円 〜 60万円<br>
                            正社員(中途)<br>
                        
                        
                        
                    </td>
                    <td>CMSの開発、wordpressのカスタマイズなどをご担当いただきます。</td>
                    <td>渋谷区、在宅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_110027"><input type="checkbox" name="job_id" value="110027" id="job_id_110027"></label>
                    </td><td>
                        株式会社ニューユニークス<br>
                        <a href="https://www.find-job.net/list/j110027.html?from=137" target="_blank">Webエンジニア</a>
                    </td>
                    <td>
                        
                            月給25万円 〜 65万円<br>
                            正社員(中途)<br>
                        
                        
                        
                    </td>
                    <td>Web制作、自社サイトシステム構築・コーディング・WordPress構築などをお任せします。</td>
                    <td>渋谷区：各線 恵比寿駅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_109729"><input type="checkbox" name="job_id" value="109729" id="job_id_109729"></label>
                    </td><td>
                        株式会社サンデーアーツ<br>
                        <a href="https://www.find-job.net/list/j109729.html?from=137" target="_blank">Webプログラマ</a>
                    </td>
                    <td>
                        
                            1. 月給27万円 〜 60万円<br>
                            正社員(中途)<br>
                        
                        
                            2. 時給1200円<br>
                            アルバイト<img src="/images/begginer.png" alt="未経験可"><br>
                        
                        
                    </td>
                    <td>自社製品の新規開発、バージョンアップ、iPhone/iPad、Android用アプリケーションの受託開発などをお願いします。</td>
                    <td>東京都千代田区、大阪市東淀川区</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_69040"><input type="checkbox" name="job_id" value="69040" id="job_id_69040"></label>
                    </td><td>
                        レバレジーズ株式会社<br>
                        <a href="https://www.find-job.net/list/j69040.html?from=137" target="_blank">PHP、Java、C++、Objective-C、C#等のWebエンジニア</a>
                    </td>
                    <td>
                        
                            1. 月給35万円 〜 80万円<br>
                            業務委託<br>
                        
                        
                            2. 時給2500円 〜 3650円<br>
                            契約社員<br>
                        
                        
                            3. 月給30万円 〜 65万円<br>
                            正社員(中途)
                        
                    </td>
                    <td>常時100件以上ある案件から希望する案件に参画いただきます。</td>
                    <td>渋谷区、ほか東京都内、都内近郊</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_110082"><input type="checkbox" name="job_id" value="110082" id="job_id_110082"></label>
                    </td><td>
                        株式会社アイソトープ・テクノロジー<br>
                        <a href="https://www.find-job.net/list/j110082.html?from=137" target="_blank">お客様専用ソフトのWebアプリケーションエンジニア</a>
                    </td>
                    <td>
                        
                            1. 月給24万円 〜 40万円<br>
                            正社員(中途)<br>
                        
                        
                            2. 月給22万円 〜 25万円<br>
                            正社員(新卒)<img src="/images/begginer.png" alt="未経験可"><br>
                        
                        
                            3. 月給24万円 〜 50万円<br>
                            正社員(中途)
                        
                    </td>
                    <td>顧客専用ソフトウエアの開発、サーバー等の運用提案及び、環境構築、iPhone、ipad系アプリ開発を行います。</td>
                    <td>千代田区：半蔵門線 神保町駅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_110178"><input type="checkbox" name="job_id" value="110178" id="job_id_110178"></label>
                    </td><td>
                        パークネット株式会社<br>
                        <a href="https://www.find-job.net/list/j110178.html?from=137" target="_blank">Webプログラムの開発職</a>
                    </td>
                    <td>
                        
                            1. 月給23万円 〜 29万円<br>
                            正社員(中途)<img src="/images/begginer.png" alt="未経験可"><br>
                        
                        
                            2. 月給35万円 〜 55万円<br>
                            契約社員<br>
                        
                        
                    </td>
                    <td>Webプログラムは、サーバー側の機能やデータ分析などをお願いします。</td>
                    <td>渋谷区、他東京都内、神奈川県</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_74767"><input type="checkbox" name="job_id" value="74767" id="job_id_74767"></label>
                    </td><td>
                        キュープラス株式会社<br>
                        <a href="https://www.find-job.net/list/j74767.html?from=137" target="_blank">システムエンジニア</a>
                    </td>
                    <td>
                        
                            1. 月給26万円 〜 50万円<br>
                            正社員(中途)<br>
                        
                        
                            2. 月給18万円 〜 22万円<br>
                            正社員(新卒)<img src="/images/begginer.png" alt="未経験可"><br>
                        
                        
                            3. 月給21万円 〜 35万円<br>
                            アルバイト<img src="/images/begginer.png" alt="未経験可">
                        
                    </td>
                    <td>WEBアプリケーションシステムの設計・開発業務全般、LAMPなどオープンソースを活用してのシステム開発等をお任せします。</td>
                    <td>豊島区：JR 池袋駅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_104778"><input type="checkbox" name="job_id" value="104778" id="job_id_104778"></label>
                    </td><td>
                        株式会社デクー<br>
                        <a href="https://www.find-job.net/list/j104778.html?from=137" target="_blank">PHPエンジニア</a>
                    </td>
                    <td>
                        
                            1. 月給30万円 〜 60万円<br>
                            正社員(中途)<br>
                        
                        
                            2. 月給30万円 〜 60万円<br>
                            契約社員<br>
                        
                        
                            3. 時給1000円 〜<br>
                            アルバイト<img src="/images/begginer.png" alt="未経験可">
                        
                    </td>
                    <td>自社サービスや外部案件によるWebアプリケーションの開発を行なっていただきます。</td>
                    <td>東京都渋谷区、福岡市中央区</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_88987"><input type="checkbox" name="job_id" value="88987" id="job_id_88987"></label>
                    </td><td>
                        株式会社フリーセンター<br>
                        <a href="https://www.find-job.net/list/j88987.html?from=137" target="_blank">Webエンジニア・Webプログラマ[兼務]</a>
                    </td>
                    <td>
                        
                            1. 月給30万円 〜 70万円<br>
                            正社員(中途)<img src="/images/begginer.png" alt="未経験可"><br>
                        
                        
                            2. 月給30万円 〜 70万円<br>
                            業務委託<img src="/images/begginer.png" alt="未経験可"><br>
                        
                        
                            3. 月給30万円 〜 70万円<br>
                            契約社員<img src="/images/begginer.png" alt="未経験可">
                        
                    </td>
                    <td>Webエンジニアとしてのご経験・スキル・ご要望に応じて担当業務をご相談させていただきます。</td>
                    <td>渋谷区、他東京23区、在宅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_13110"><input type="checkbox" name="job_id" value="13110" id="job_id_13110"></label>
                    </td><td>
                        有限会社バイナリーラブ<br>
                        <a href="https://www.find-job.net/list/j13110.html?from=137" target="_blank">開発エンジニア</a>
                    </td>
                    <td>
                        
                            1. 月給25万円 〜 40万円<br>
                            正社員(中途)<img src="/images/begginer.png" alt="未経験可"><br>
                        
                        
                            2. 月給30万円 〜 70万円<br>
                            業務委託<img src="/images/begginer.png" alt="未経験可"><br>
                        
                        
                            3. 月給22万円 〜<br>
                            正社員(新卒)<img src="/images/begginer.png" alt="未経験可">
                        
                    </td>
                    <td>ポータルサイトの開発・運営・管理保守、スマートフォン開発、ソーシャルアプリ開発などの案件に携わることができます。</td>
                    <td>渋谷区：山手線 渋谷駅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_8190"><input type="checkbox" name="job_id" value="8190" id="job_id_8190"></label>
                    </td><td>
                        株式会社ネットステーション<br>
                        <a href="https://www.find-job.net/list/j8190.html?from=137" target="_blank">開発者</a>
                    </td>
                    <td>
                        
                            1. 月給20万円 〜 40万円<br>
                            正社員(中途)<br>
                        
                        
                            2. 月給30万円 〜 55万円<br>
                            契約社員<br>
                        
                        
                            3. 月給40万円 〜 70万円<br>
                            業務委託
                        
                    </td>
                    <td>ECサイト、Web系、スマートフォンアプリなどに関する開発になります。</td>
                    <td>港区、他東京都内、神奈川県、埼玉県、千葉県</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_110038"><input type="checkbox" name="job_id" value="110038" id="job_id_110038"></label>
                    </td><td>
                        株式会社エクスコア<br>
                        <a href="https://www.find-job.net/list/j110038.html?from=137" target="_blank">サービス開発エンジニア</a>
                    </td>
                    <td>
                        
                            1. 月給20万円 〜 50万円<br>
                            正社員(中途)<br>
                        
                        
                            2. 時給1300円 〜 3000円<br>
                            アルバイト<br>
                        
                        
                    </td>
                    <td>学生向けの管理ページ制作とデータベース構築、企業用マッチングサービスの開発・運用をお願いします。</td>
                    <td>渋谷区、在宅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_109168"><input type="checkbox" name="job_id" value="109168" id="job_id_109168"></label>
                    </td><td>
                        アマツ株式会社<br>
                        <a href="https://www.find-job.net/list/j109168.html?from=137" target="_blank">スマートフォン・ゲームのWeb/サーバーエンジニア</a>
                    </td>
                    <td>
                        
                            1. 月給23万円 〜 65万円<br>
                            正社員(中途)<br>
                        
                        
                            2. 時給1000円 〜 2500円<br>
                            アルバイト<br>
                        
                        
                            3. 時給1000円 〜<br>
                            業務委託
                        
                    </td>
                    <td>自社または協業によるWebサービス(ソーシャルアプリ・ブラウザゲームなど)の企画、設計、開発、運用をお任せします。</td>
                    <td>渋谷区：JR線 恵比寿駅</td>
                </tr>
                
                <tr>
                    <td class="text-center valign-middle">
                        <label for="job_id_109824"><input type="checkbox" name="job_id" value="109824" id="job_id_109824"></label>
                    </td><td>
                        スマートキャンプ株式会社<br>
                        <a href="https://www.find-job.net/list/j109824.html?from=137" target="_blank">自社サービス「Boxil (ボクシル)」のエンジニア</a>
                    </td>
                    <td>
                        
                            月給33万円 〜 58万円<br>
                            正社員(中途)<br>
                        
                        
                        
                    </td>
                    <td>新たなサービスの実装に向けた要件定義・設計から開発、細かな修正まで、フロントエンドのUIのデザインや設計を担って頂きます。</td>
                    <td>港区：山手線 田町駅</td>
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
