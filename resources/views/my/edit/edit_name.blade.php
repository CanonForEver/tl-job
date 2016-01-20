@extends('layouts._home')
@section('css')
    <link rel="stylesheet" type="text/css" href="/assets/stylesheets/edit.css">
@stop

@section('topic')
    <div id="topic-path" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <ul>
        <li><a href="http://www.find-job.net/" itemprop="url"><span itemprop="title">転職・求人情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://www.find-job.net/my/edit/edit.cgi"><span itemprop="title">登録情報</span></a></li>
        <li itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><strong><span itemprop="title">会員登録情報</span></strong></li>
    </ul>
</div><!--topic-path-->
@stop

@section('container')
<main>
    <div class="container">

        <h1 class="mb20">会員登録情報</h1>
        
        <p class="mb40">以下のフォームに必要事項をご記入の上、『登録内容を変更する』ボタンを押してください。 <br>
        ※ <img src="/images/edit/icon_lock.png" alt="非公開" class="mr5">マークのついている情報は企業には公開されません。</p>

        <form class="form" name="edit" action="/images/edit/edit_name.html" method="post">
        <input type="hidden" value="1" name="submitted">
        <input type="hidden" value="mail" name="frm">
        <input type="hidden" name="mid">
        <input type="hidden" name="from">
        <input type="hidden" name="userid">
        <input type="hidden" name="unique_key" value="742f52987b4c3dd35e8e2480a204ef5f">

            <section>
                <h2 class="h2 text-em mb10">プロフィール</h2>
                <table class="input-cell mb40">
                    <tbody><tr>
                        <th>氏名<img src="/images/edit/icon_lock.png" alt="非公開" class="ml5"><span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="td-inner-sm mb10 clearfix">
                                <dt class="pull-left">漢字</dt>
                                <dd class="pull-left">
                                    <input type="text" value="山田" class=" text-md " name="name">
                                </dd>
                            </dl>
                            <dl class="td-inner-sm clearfix">
                                <dt class="pull-left">カナ</dt>
                                <dd class="pull-left"><input type="text" value="てください" class=" text-md " name="kana"></dd>
                            </dl>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>性別<img src="/images/edit/icon_lock.png" alt="非公開" class="ml5"><span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            
                                男性<input name="sex" type="hidden" value="1">
                            
                        </td>
                    </tr>
                    <tr>
                        <th>电子邮件<img src="/images/edit/icon_lock.png" alt="非公开" class="ml5"><span class="tag tag-xsm tag-primary pull-right">必須</span></th>
                        <td>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">半角英数記号</dt>
                                <dd class="pull-left">
                                    <input type="text" name="email" value="canonpd@163.com" class=" text-md ">
                                </dd>
                                
                            </dl>
                            <dl class="td-inner-md clearfix">
                                <dt class="pull-left">確認用</dt>
                                <dd class="pull-left">
                                    <input type="text" name="email2" value="canonpd@163.com" class=" text-md ">
                                </dd>
                                
                            </dl>
                        </td>
                    </tr>
                    <tr>
                        <th>移动邮件地址<img src="/images/edit/icon_lock.png" alt="非公開" class="ml5"></th>
                        <td>
                            <dl class="td-inner-md mb10 clearfix">
                                <dt class="pull-left">半角英数記号</dt>
                                <dd class="pull-left">
                                    <input type="text" name="m_email" value="" class="form-md  text-md pull-left">
                                    <div class="mt5 ml10 mr10 pull-left">@</div>
                                    <div class="select form-sm pull-left">
                                        <select name="m_domain" class="">
                                            <option value="0">---</option>
                                            
                                            <option value="docomo.ne.jp">docomo.ne.jp</option>
                                            
                                            <option value="ezweb.ne.jp">ezweb.ne.jp</option>
                                            
                                            <option value="softbank.ne.jp">softbank.ne.jp</option>
                                            
                                            <option value="d.vodafone.ne.jp">d.vodafone.ne.jp</option>
                                            
                                            <option value="h.vodafone.ne.jp">h.vodafone.ne.jp</option>
                                            
                                            <option value="t.vodafone.ne.jp">t.vodafone.ne.jp</option>
                                            
                                            <option value="c.vodafone.ne.jp">c.vodafone.ne.jp</option>
                                            
                                            <option value="k.vodafone.ne.jp">k.vodafone.ne.jp</option>
                                            
                                            <option value="r.vodafone.ne.jp">r.vodafone.ne.jp</option>
                                            
                                            <option value="n.vodafone.ne.jp">n.vodafone.ne.jp</option>
                                            
                                            <option value="s.vodafone.ne.jp">s.vodafone.ne.jp</option>
                                            
                                            <option value="q.vodafone.ne.jp">q.vodafone.ne.jp</option>
                                            
                                            <option value="i.softbank.jp">i.softbank.jp</option>
                                            
                                            <option value="pdx.ne.jp">pdx.ne.jp</option>
                                            
                                            <option value="di.pdx.ne.jp">di.pdx.ne.jp</option>
                                            
                                            <option value="dj.pdx.ne.jp">dj.pdx.ne.jp</option>
                                            
                                            <option value="dk.pdx.ne.jp">dk.pdx.ne.jp</option>
                                            
                                            <option value="wm.pdx.ne.jp">wm.pdx.ne.jp</option>
                                            
                                            <option value="disney.ne.jp">disney.ne.jp</option>
                                            
                                            <option value="willcom.com">willcom.com</option>
                                            
                                        </select>
                                    </div>
                                </dd>
                                
                            </dl>
                            <dl class="td-inner-md clearfix">
                                <dt class="pull-left">確認用</dt>
                                <dd class="pull-left">
                                    <input type="text" name="m_email2" value="" class="form-md  text-md pull-left">
                                    <div class="mt5 ml10 mr10 pull-left">@</div>
                                    <div class="select form-sm pull-left">
                                        <select name="m_domain2" class="">
                                            <option value="0">---</option>
                                            
                                            <option value="docomo.ne.jp">docomo.ne.jp</option>
                                            
                                            <option value="ezweb.ne.jp">ezweb.ne.jp</option>
                                            
                                            <option value="softbank.ne.jp">softbank.ne.jp</option>
                                            
                                            <option value="d.vodafone.ne.jp">d.vodafone.ne.jp</option>
                                            
                                            <option value="h.vodafone.ne.jp">h.vodafone.ne.jp</option>
                                            
                                            <option value="t.vodafone.ne.jp">t.vodafone.ne.jp</option>
                                            
                                            <option value="c.vodafone.ne.jp">c.vodafone.ne.jp</option>
                                            
                                            <option value="k.vodafone.ne.jp">k.vodafone.ne.jp</option>
                                            
                                            <option value="r.vodafone.ne.jp">r.vodafone.ne.jp</option>
                                            
                                            <option value="n.vodafone.ne.jp">n.vodafone.ne.jp</option>
                                            
                                            <option value="s.vodafone.ne.jp">s.vodafone.ne.jp</option>
                                            
                                            <option value="q.vodafone.ne.jp">q.vodafone.ne.jp</option>
                                            
                                            <option value="i.softbank.jp">i.softbank.jp</option>
                                            
                                            <option value="pdx.ne.jp">pdx.ne.jp</option>
                                            
                                            <option value="di.pdx.ne.jp">di.pdx.ne.jp</option>
                                            
                                            <option value="dj.pdx.ne.jp">dj.pdx.ne.jp</option>
                                            
                                            <option value="dk.pdx.ne.jp">dk.pdx.ne.jp</option>
                                            
                                            <option value="wm.pdx.ne.jp">wm.pdx.ne.jp</option>
                                            
                                            <option value="disney.ne.jp">disney.ne.jp</option>
                                            
                                            <option value="willcom.com">willcom.com</option>
                                            
                                        </select>
                                    </div>
                                </dd>
                                
                            </dl>
                        </td>
                    </tr>
                </tbody></table>
            </section>

            <section>
                <h2 class="h2 text-em mb10">邮件设置</h2>
                <table class="input-cell mb50">
                    <tbody><tr>
                        <th>気になる企業リマインドメール</th>
                        <td>
                            <ul>
                                <li class="mb5"><label><input type="checkbox" name="remindmail_pc" value="1" checked="">PCで受け取る</label></li>
                                <li><label><input type="checkbox" name="remindmail_mobile" value="1">携帯で受け取る</label></li>
                            </ul>
                             <p class="text-sm pt10">※気になるリストに入れた求人が掲載終了３日前になるとリマインドメールが届きます </p>
                        </td>
                    </tr>
                    <tr>
                        <th>メール着信のお知らせ</th>
                        <td>
                            <ul>
                                <li class="mb5"><label><input type="radio" name="noticemail" value="1" checked="" class="mr5">受け取る(PC)</label></li>
                                <li class="mb5"><label><input type="radio" name="noticemail" value="2" class="mr5">受け取る(携帯)</label></li>
                                <li><label><input type="radio" name="noticemail" value="3" class="mr5">受け取る(PC&amp;携帯)</label></li>
                            </ul>
                            <p class="text-sm pt10">※企業からのメール受信時に通知を受け取る方法を選択してください</p>
                            
                        </td>
                    </tr>
                </tbody></table>
            </section>

            <div class="relative text-center">
                <a href="http://www.find-job.net/my/edit/edit.cgi" class="btn btn-md btn-default btn-normal fixed-left">登録情報トップに戻る</a>
                <input type="submit" class="btn btn-xxlg btn-primary btn-wide block-center" value="登録内容を変更する">
            </div>
        </form>

    </div><!--container-->
</main>
@stop
