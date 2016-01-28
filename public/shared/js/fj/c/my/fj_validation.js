/* fj_validation.js 
 *
 * validate pluginへ追加する独自関数群
 */

$(function(){

    /*
     * <select>は生年月日の年月日など、複数セットで
     * バリデーションをかけているので、１つが変更されたら
     * 他も同時にバリデーションするように設定。
     */
    var $birth_year =  $('#birth_year');
    var $birth_month = $('#birth_month');
    var $birth_day =   $('#birth_day');
    $birth_year.change(function(){
        $birth_month.valid();
        $birth_day.valid();
    });
    $birth_month.change(function(){
        $birth_year.valid();
        $birth_day.valid();
    });
    $birth_day.change(function(){
        $birth_year.valid();
        $birth_month.valid();
    });
    var $form_g_year = $('.form_g_year');
    var $form_g_type = $('.form_g_type');
    $form_g_year.change(function(){
        $form_g_type.valid();
    });
    $form_g_type.change(function(){
        $form_g_year.valid();
    });
    var $syear = $('#syear');
    var $smonth = $('#smonth');
    $syear.change(function(){
        $smonth.valid();
    });
    $smonth.change(function(){
        $syear.valid();
    });
    var $form_tel = $('#form_tel');
    var $form_tel2 = $('#form_tel2');
    $form_tel.change(function(){
        $form_tel2.valid();
    });
    $form_tel2.change(function(){
        $form_tel.valid();
    });

    /*
     *  ここからvalidation.jsに追加するオリジナルメソッド。
     */

    /*
     *  valid_required_select
     *
     *  <select>単体がデフォルト選択（value=0）のままは
     *  NGとする、validation追加メソッド。
     */  
    $.validator.addMethod("valid_required_select", function(value, element, params) { 
        return this.optional(element) || value != 0; 
    }, $.format(""));

    /*
     *  valid_tel
     *
     *  電話番号　自宅　携帯の、どちらかの入力が必須。
     */
    $.validator.addMethod("valid_tel", function(value, element, params) {
        var tel = $('#form_tel').attr('value');
        var tel2 = $('#form_tel2').attr('value');
        return (tel!="" || tel2!="");//falseでエラーと判定
    }, $.format(""));

    /*
     *  valid_tel_zenkaku
     *
     *  全角の電話番号で入力された場合のみ、
     *  「半角で入力してください」とエラーするためのメソッド。
     */
    $.validator.addMethod("valid_tel_zenkaku", function(value, element, params) {
        return this.optional(element) || !(/^[０-９-−ー‐—]+$/.test(value));
    }, $.format(""));

    /*
     * valid_birthday
     *
     * 生年月日の年、月、日の３つが全て選択済みかどうかをチェックする。
     *
     * (希望) エラーが3つ選択してから出る条件、消える条件
     * 連続して<select>を操作してもフォーカスは一旦bodyに移る。
     * bodyに移って再度フォーカスが入る前のタイミングでvalidation判定がかかるので
     * 他の方法を探す。
     */ 
    $.validator.addMethod("valid_birthday", function(value, element, params) {
        var year  = $birth_year.attr('value');
        var month = $birth_month.attr('value');
        var day   = $birth_day.attr('value');
        return this.optional(element) || (year!=0&&month!=0&&day!=0);//falseでエラーと判定 
    }, $.format(""));//messageで指定しなかった場合のデフォルト。message指定するので不要。

    /*
     * valid_is_phone_jp
     *
     * 電話番号が数字とハイフンで構成されているかチェック。
     */ 
    $.validator.addMethod("valid_is_phone_jp", function(value, element) {
        return this.optional(element) || /^[0-9-]+$/.test(value);
    }, $.format(""));

    /*
     * valid_g_kubun_required
     *
     *  卒業区分のセットで必須の処理
     */
    $.validator.addMethod("valid_g_kubun_required", function(value, element) {
        var year = $('.form_g_year').attr('value');
        var type = $('.form_g_type').attr('value');
        return this.optional(element) || (year!=0 && type!=0);
    }, $.format(""));

    /*
     * valid_g_kako
     *
     *  過去に卒業見込みは禁止
     */
    $.validator.addMethod("valid_g_kako", function(value, element) {
        var d = new Date();
        var year_now = d.getFullYear();
        var year = $('.form_g_year').attr('value');
        var type = $('.form_g_type').attr('value');
        var result = true;
        if ( type==4 && year_now > year ) {
            result = false;
        }
        return this.optional(element) || result;
    }, $.format(""));

    /*
     * valid_g_mirai
     *
     *  未来に卒業、中退、入学は禁止
     */
    $.validator.addMethod("valid_g_mirai", function(value, element) {
        var d = new Date();
        var year_now = d.getFullYear();
        var year = $('.form_g_year').attr('value');
        var type = $('.form_g_type').attr('value');
        var result = true;
        if ( type==1 || type==2 || type==3 ){
            if ( year > year_now ) {
                result = false;
            }
        }
        return this.optional(element) || result;
    }, $.format(""));

    /*
     * valid_start_date
     *
     * 職歴の入社年、生年月日の年、月、日の
     * <select>がどれか一つでもデフォルト選択（value=0）のままはNG
     */
    $.validator.addMethod("valid_start_date", function(value, element, params) {
        var year  = $syear.attr('value');
        var month = $smonth.attr('value');
        return this.optional(element) || (year!=0&&month!=0);
    }, $.format("入社年、月は必ず選択してください。"));

    /*
     * valid_registerd_email
     *
     * emailが既にFJに登録済みエラー枠が表示されているかどうか。
     * API経由の非同期通信チェックとタイミングがずれるため、
     * my.js側でfj.c.my.emailErrを更新してバリデーション実行する。
     */
    $.validator.addMethod("valid_registerd_email", function(value, element, params) {
        return this.optional(element)|| fj.c.my.emailErr;
    }, $.format("登録済みメールアドレスでログインしてください。"));

    /*
     * valid_mobile_email
     *
     * 携帯メアドは拒否
     */
    $.validator.addMethod("valid_mobile_email", function(value, element, params) {
        var result = true;

        if ( value.match(/(docomo.ne.jp|docomo.ne.jp|ezweb.ne.jp|ezweb.ne.jp|softbank.ne.jp|softbank.ne.jp|d.vodafone.ne.jp|d.vodafone.ne.jp|h.vodafone.ne.jp|h.vodafone.ne.jp|t.vodafone.ne.jp|t.vodafone.ne.jpc.vodafone.ne.jp|c.vodafone.ne.jpk.vodafone.ne.jp|k.vodafone.ne.jpr.vodafone.ne.jp|r.vodafone.ne.jpn.vodafone.ne.jp|n.vodafone.ne.jps.vodafone.ne.jp|s.vodafone.ne.jpq.vodafone.ne.jp|q.vodafone.ne.jpdisney.ne.jp|disney.ne.jppdx.ne.jp|pdx.ne.jpdi.pdx.ne.jp|di.pdx.ne.jpdj.pdx.ne.jp|dj.pdx.ne.jpdk.pdx.ne.jp|dk.pdx.ne.jpwm.pdx.ne.jp|wm.pdx.ne.jpwillcom.com|willcom.comi.softbank.jp|i.softbank.jp)$/i) ) {
            result = false;
        }
        return this.optional(element) || result;
    }, $.format("パソコンのメールアドレスを入力してください"));


    /*
     * valid_katakana_only
     *
     * カタカナのみ入力可能
     */
    $.validator.addMethod("valid_katakana_hiragana", function(value, element) {
        return this.optional(element) || /^([ぁ-んァ-ヶー・\s　]+)$/.test(value);
    }, $.format("全角カタカナを入力してください"));


    /*
     * valid_url_char
     *
     * 半角英数字と記号のみ入力可能
     */
    $.validator.addMethod("valid_url_char", function(value, element) {
        return this.optional(element) || /^([0-9a-zA-z\.$,;/\:&=\?!\*\~@#_()\-\.])+$/.test(value);
    }, $.format("URLを正しく入力して下さい"));


    /*
     * valid_phone_number_char
     *
     * 電話番号は数字とハイフンのみ入力可能
     */
    $.validator.addMethod("valid_phone_number_char", function(value, element) {
        return this.optional(element) || /^([0-9０-９−\-])+$/.test(value);
    }, $.format("電話番号は数字とハイフンで入力してください"));

    /*
     * valid_is_zip_jp
     *
     * 郵便番号は000-0000 or 0000000のみ許可
     */
    $.validator.addMethod("valid_is_zip_jp", function(value, element) {
        return this.optional(element) || /^([0-9]{3}[-]{0,1}[0-9]{4})$/.test(value);
    }, $.format("郵便番号を正しく入力して下さい"));


});
