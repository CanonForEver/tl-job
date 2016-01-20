/**
 * @fileOverview
 * <pre>
 * objects:
 *
 * - fj.c.my
 * - fj.c.my.regist
 * - fj.c.my.edit
 * - fj.c.my.apply
 * - fj.c.my.apply_rireki
 * - fj.c.my.apply_skill
 * </pre>
 */

fj.namespace("fj.c.my", {

    /** @lends fj.c.my */

    emailErr: true,

    //ajax检查用户名是否重复
    emailCheckAPI: "/api/my",

    emailCheckAPIData: {action: "check_email"},

    isRegist: 0,

    /**
     * メール重複チェックを設定する
     *
     * @param {jQuery} $emailInput
     * @param {jQuery} $emailMessage
     * @param {Function} onError
     * @returns {Function} チェック時に実行される関数
     */
    setEmailCheck: function($emailInput, $emailMessage, onError){
        if ($emailInput.is(":hidden")) {
            return;
        }
        var check = function(){
            var email = $.trim($emailInput.val());

            if (!fj.text.isEmail(email)) {
                return;
            }

            var data = $.extend(fj.c.my.emailCheckAPIData, {email: email});

            $.post(fj.c.my.emailCheckAPI, data)
                .done(function(response){
                    //console.log(response);
                    if (response.error) {
                        onError();
                        return;
                    }
                    if (response.ok) {
                        $emailMessage.fadeOut();
                        fj.c.my.emailErr = true;
                        if (fj.c.my.isRegist == 0 ) {
                            $('#form_email').valid();
                        }
                    } else {
                        $emailMessage
                            .hide()
                            .fadeIn();
                            fj.c.my.emailErr = false;
                        if (fj.c.my.isRegist == 0){
                            $('#form_email').valid();
                        }
                    }
                })
                .fail(onError);
        };

        $emailInput.blur(check);

        check();

        return check;
    },

    /*
     *  _setCountTextarea(options)
     *
     *  テキストエリアに対して文字数カウントの
     *  初期化とリアルタイムカウントをセットする。
     * <How to use?>
     *  this._setCountTextarea({
     *      form: $formObj,
     *      count: $countObj
     *  });
     */
    _setCountTextarea: function(option){
        // 初期値セット
        option.count.html($(option.form).val().replace(/\r\n/g, "").replace(/\n/g, "").length);
        // リアルタイムカウントをセット
        $(option.form).bind('keydown keyup keypress change',function(){
            var thisValueLength = $(this).val().replace(/\r\n/g, "").replace(/\n/g, "").length;
            option.count.html(thisValueLength);
        });
    },

    /*
     * fj.c.my._setHint(option) フォームに薄いヒントを表示する
     *
     * <How to use?>
     * 1. ヒントに表示する文言の画像を用意する。
     * 2. CSSに「対象フォームのID .tipped」で背景画像が出るように。
     * 3. JSから呼び出し。
     *    var $option = $('#form_password input');
     *    fj.c.my._setHint($option);
     */
    _setHint: function(option){

        option.blur(function(){
          var $input=$(this);
          if($input.val()==''){
            $input.addClass('tipped');
          }
        })
        option.focus(function(){
          var $input=$(this);
          if($input.val()==''){
            $input.removeClass('tipped');
          }
        })
        option.blur();
    }
});

/**
 * 会員登録フォーム
 * @namespace
 * @name fj.c.my.regist
 */
fj.namespace("fj.c.my.regist", {
    
    /** @lends fj.c.my.regist */

    lockWindowMessage: [
        "会員情報の入力が最後まで完了しておりません。",
        "入力を中止し、ページを移動しますか？"].join("\n"),

    initRegistForm: function(options){
        var o = $.extend({
                emailInput: "input[name=email]",
                emailMessage: "[data-role='message-of-check-email']",
                agreeButton: "._bt_agree img",
                lockWindow: true,
                onError: function(){ alert("Error"); }}, options),
            $form = $("form:first");

        $form.submit(function(){
            fj.util.unlockWindow();
            return true;
        });

        $(o.agreeButton).click(function(){
            $("input[name=submitted]").val('mailmaga');
            $form.action = '/my/regist/regist.cgi';
            $form.submit();
            return false;
        });

        fj.c.my.isRegist = 1;
        fj.c.my.setEmailCheck($(o.emailInput), $(o.emailMessage), o.onError);

        if (o.lockWindow) {
            var unlockItems = [o.agreeButton, ".bt_facebook a"].join(",");
            fj.util.lockWindow({
                unlockItems: unlockItems,
                message: fj.c.my.regist.lockWindowMessage});
        }
    },

    initMailmagaForm: function(options){
        var o = $.extend({form: "#cont_left form:first"}, options),
            $form = $(o.form);

        $form.submit(function(){
            fj.util.unlockWindow();
            return true;
        });
        fj.util.lockWindow({
            message: fj.c.my.regist.lockWindowMessage});
    }
});

/**
 * 会員情報編集フォーム
 * @namespace
 * @name fj.c.my.edit
 */
fj.namespace("fj.c.my.edit", {

    isEdit: false,

    lockWindowMessage: [
        "Web履歴書の入力が最後まで完了しておりません。",
        "入力を中止し、ページを移動しますか？"].join("\n"),

    checkEdit: function(){
        if ($("form[action='edit.cgi']").length) {
            fj.c.my.edit.isEdit = true;
        }
        else{
            fj.c.my.edit.isEdit = false;
        }
    },

    initResumeForm: function(options){

        var o = $.extend({
                form: "form:first",
                submitButtons: "*[data-role=submit-button]"}, options),
            $form = $(o.form),
            $submitButtons = $(o.submitButtons);

        $form.submit(function(){
            fj.util.unlockWindow();
            return true;
        });

        var $form_resume;
        if ($('form#regist').length) {
           $form_resume = $('form#regist');
            fj.c.my.edit.isEdit = false;
        } else if ($('form#edit').length) {
           $form_resume = $('form#edit');
           fj.c.my.edit.isEdit = true;
        }

        var enableBeforeunload = true;

        $submitButtons.click(function(){

            var $this = $(this);
            var $submit_type = $this.data("submit-type");

            if ($submit_type == 'skill' 
                || $submit_type == 'rireki_add'
                || $submit_type == 'rireki_delete'
                || $submit_type == 'block_scout'){
                $form_resume.validate().cancelSubmit = true;// バリデーションを無効化
                enableBeforeunload = false;
            }

            if ($submit_type == 'data_regist'
                || $submit_type == 'data_edit'){

                if($form.find("[name=sscout]").length > 0){
                    if($form.find("[name=sscout]").is(':checked')){
                        $form.find("input[name=enable]").val(1);
                    }else{
                        $form.find("input[name=enable]").val(0);
                    }
                }

                if ($form.valid()) {
                    enableBeforeunload = false;
                } else {
                    enableBeforeunload = true;
                }
            }

            $form
                .find("[name=submitted]")
                    .val($this.data("submit-type")).end()
                .find("[name=num]")
                    .val($this.data("submit-num")).end()
                .submit();

            return false;
        });


        //跳转,重刷新提示
        $(window).fjBindBeforeunload({fn: function(){
            if (enableBeforeunload) {
                if (fj.c.my.edit.isEdit) {
                    return fj.c.my.edit.lockWindowMessage;
                }
                else{
                    return fj.c.my.regist.lockWindowMessage;
                }
            }
        }});


        /*
        * EFOメッセージ
        *
        */

        // パスワードフォームのヒント表示
        var $form_name = $('input#form_name');
        var $form_kana = $('input#form_kana');
        var $address   = $('input#address');
        var $form_jusho2 = $('input#form_jusho2');
        var $form_tel  = $('input#form_tel');
        var $form_tel2 = $('input#form_tel2');
        var $form_m_email  = $('input[name=m_email]');
        var $form_m_email2 = $('input[name=m_email2]');
        var $form_g_name = $('input#form_g_name');
        var $form_g_gakubu = $('input#form_g_gakubu');
        fj.c.my._setHint($form_kana);
        fj.c.my._setHint($form_name);
        fj.c.my._setHint($address);
        fj.c.my._setHint($form_jusho2);
        fj.c.my._setHint($form_tel);
        fj.c.my._setHint($form_tel2);
        fj.c.my._setHint($form_m_email);
        fj.c.my._setHint($form_m_email2);
        fj.c.my._setHint($form_g_name);
        fj.c.my._setHint($form_g_gakubu);

        var $form_email  = $('input#form_email');
        var $form_email2 = $('input#form_email2');

        if ($form_email.length > 0 && $form_email2.length > 0){
            fj.c.my._setHint($form_email);
            fj.c.my._setHint($form_email2);
        }

        // 職務経歴はフォームが複数に増やされる可能性があるため
        // クラス指定でJSのみで処理する。
        var $career_arr = $('input.form_office');
        $.each($career_arr, function() {
            fj.c.my._setHint($(this));
        });

        /*
         * 各ページ用validationルール
         * groups: 同一のバリデーションを書けるinputをグループ化する
         * errorPlacement: エラーの出す場所はデフォルトはinput直後の
         * 　errorElementになるが、radioやselectのセットなどで
         * 　別の場所に出したい場合セット。
         * rules: バリデーションをかけるinputのname、バリデーションの種類を設定
         * messages: rulesと同じ形式で、エラーの場合の文言をセット。
         */
        var $k_shokushu_size = $form_resume
                              .find('[name=k_shokushu\\[\\]]')
                              .size();
        var valid_type = 'resume';
        if ($k_shokushu_size != 0) {
            valid_type = 'resume_all';
        }
        var edit_options = fj.c.my.edit._setValidOption(valid_type);

        $form_resume.validate(edit_options);

    },

    _initSimpleForm: function(options){
        var o = $.extend({
                form: "form:first",
                unlockItems: "a[data-role=back-button]",
                submitButton: "a[data-role=submit-button]"}, options),
            $form = $(o.form),
            $submitButton = $(o.submitButton);

        $form.submit(function(){
            fj.util.unlockWindow();

            return true;
        });

        $submitButton.click(function(){
            fj.util.unlockWindow();
            $form.submit();

            return false;
        });

        fj.c.my.edit.checkEdit();

        var message;
        if (fj.c.my.edit.isEdit) {
            message = fj.c.my.edit.lockWindowMessage;
        }
        else{
            message = fj.c.my.regist.lockWindowMessage;
        }

        fj.util.lockWindow({
            unlockItems: o.unlockItems,
            message: message});
    },

    initSkillForm: function(options){
        return fj.c.my.edit._initSimpleForm(options);
    },

    initBiographyForm: function(options){
        var o = $.extend({
                form: "form:first",
                unlockItems: "[data-role=back-button]",
                submitButton: "[data-role=submit-button]"}, options),
            $form = $(o.form),
            $submitButton = $(o.submitButton);
            $unlockItems = $(o.unlockItems);

        var $form_biography;
        if ($('form#regist_form').length) {
           $form_biography = $('form#regist_form');
        } 
        else if ($('form#edit_form').length) {
           $form_biography = $('form#edit_form');
        }


        var enableBeforeunload = true;
        $submitButton.click(function(){
            if ($form_biography.valid()) {
                enableBeforeunload = false;
            } else {
                enableBeforeunload = true;
            }
            $form.submit();
            return false;
        });

        $unlockItems.click(function(){
                enableBeforeunload = false;
        });

        fj.c.my.edit.checkEdit();

        $(window).fjBindBeforeunload({fn: function(){
            if (enableBeforeunload) {
                if (fj.c.my.edit.isEdit){
                    return fj.c.my.edit.lockWindowMessage;
                }
                else{
                    return fj.c.my.regist.lockWindowMessage;
                }
            }
        }});


        var $career_arr = $('.form_office');
        $.each($career_arr, function() {
            fj.c.my._setHint($(this));
        });

        // 職歴追加画面
        var edit_biography_options = {
            groups: {
                start_date: "syear smonth"
            },
            errorPlacement: function(error, element) {
                // エラーを出す場所を決める
                if (element.attr("name") == "syear"
                    || element.attr("name") == "smonth"){
                    $(".errortxtbox.error_rireki").html('');
                    error.appendTo(".errortxtbox.error_rireki").fadeIn();
                }
                else {
                    error.fadeIn().insertAfter(element);
                }
            },
            rules: {
                syear: {
                    valid_start_date: true
                },
                smonth: {
                    valid_start_date: true
                }
            },
            messages: {
                syear: {
                    valid_start_date: "入社年と入社月は必ず選択してください"
                },
                smonth: {
                    valid_start_date: "入社年と入社月は必ず選択してください"
                }
            },
            errorClass: "alert",
            errorElement: "div",
            highlight: function(element, errorClass, validClass){
              $(element).parent('.select').addClass('select-alert');
              $(element).addClass(errorClass);
            },
            unhighlight: function(element, errorClass, validClass){
              $(element).parent('.select').removeClass('select-alert');
              $(element).removeClass(errorClass);
            }
        };
        // バリデーションセット
        $form_biography.validate(edit_biography_options);

    },

    initBiographyDeleteForm: function(options){
        return fj.c.my.edit._initSimpleForm(options);
    },

    _setValidOption: function(valid_type){

        var valid_options;

        if (valid_type == 'resume_all') {
            valid_options = {
                groups: {
                    birthday: "birthday_year birthday_month birthday_day"
                },
                errorPlacement: function(error, element) {
                    // エラーを出す場所を決める
                    if ( element.attr("name") == "birthday_year"
                        || element.attr("name") == "birthday_month"
                        || element.attr("name") == "birthday_day" ) {
                        $('.errortxtbox.error_birthday').html('');
                        error.appendTo(".errortxtbox.error_birthday").fadeIn();
                    } else if ( element.attr("name") == "sex" ) {
                        $('.errortxtbox.error_gender').html('');
                        error.appendTo(".errortxtbox.error_gender").fadeIn();
                    } else if ( element.attr("name") == "ken" ) {
                        $('.errortxtbox.error_ken').html('');
                        error.appendTo(".errortxtbox.error_ken").fadeIn();
                    } else if ( element.attr("name") == "g_year"
                        || element.attr("name") == "g_type" ) {
                        $('.errortxtbox.error_g_kubun').html('');
                        error.appendTo(".errortxtbox.error_g_kubun").fadeIn();
                    } else if ( element.attr("name") == "m_email") {
                        $('.errortxtbox.error_m_email').html('');
                        error.appendTo(".errortxtbox.error_m_email").fadeIn();
                    } else if ( element.attr("name") == "m_email2"
                        ||  element.attr("name") == "m_domain2") {
                        $('.errortxtbox.error_m_email2').html('');
                        error.appendTo(".errortxtbox.error_m_email2").fadeIn();
                    } else if (element.attr("name") == "k_shokushu[]"){
                        $('.errortxtbox.error_k_shokushu').html('');
                        error.appendTo(".errortxtbox.error_k_shokushu").fadeIn();
                    } else if (element.attr("name") == "k_kinmuchi[]") {
                        $('.errortxtbox.error_k_kinmuchi').html('');
                        error.appendTo(".errortxtbox.error_k_kinmuchi").fadeIn();
                    } else if (element.attr("name") == "k_keitai[]") {
                       $('.errortxtbox.error_k_keitai').html('');
                        error.appendTo(".errortxtbox.error_k_keitai").fadeIn();
                    } else {
                        error.appendTo(element.next()).fadeIn();
                    }
                },
                rules: {
                    name: {
                        required: true
                    },
                    kana: {
                        required: true
                    },
                    sex: {
                        required: true
                    },
                    birthday_year: {
                        valid_birthday: true
                    },
                    birthday_month: {
                        valid_birthday: true
                    },
                    birthday_day: {
                        valid_birthday: true
                    },
                    ken: {
                        valid_required_select: true
                    },
                    jusho: {
                        required: true
                    },
                    tel: {
                        valid_tel_zenkaku: true,
                        valid_tel: true,
                        valid_is_phone_jp: true
                    },
                    tel2: {
                        valid_tel_zenkaku: true,
                        valid_tel: true,
                        valid_is_phone_jp: true
                    },
                    g_name: {
                        required: true
                    },
                    g_year: {
                        valid_g_kubun_required: true,
                        valid_g_mirai: true,
                        valid_g_kako: true
                    },
                    g_type: {
                        valid_g_kubun_required: true,
                        valid_g_mirai: true,
                        valid_g_kako: true
                    },
                    email:{
                        required: true,
                        email: true,
                        valid_mobile_email: true
                    },
                    email2: {
                        equalTo: "#form_email"
                    },
                    m_email:{
                        valid_url_char: true
                    },
                    m_email2: {
                        equalTo: "#form_m_email"
                    },
                    m_domain2: {
                        equalTo: "select[name=m_domain]"
                    },
                    k_shokushu: {
                        required: true
                    },
                    k_kinmuchi: {
                        required: true
                    },
                    k_keitai: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "氏名（漢字）を入力してください"
                    },
                    kana: {
                        required: "氏名（カナ）を入力してください"
                    },
                    sex: {
                        required: "性別を入力してください"
                    },
                    birthday_year: {
                        valid_birthday: "生年月日を入力してください"
                    },
                    birthday_month: {
                        valid_birthday: "生年月日を入力してください"
                    },
                    birthday_day: {
                        valid_birthday: "生年月日を入力してください"
                    },
                    ken: {
                        valid_required_select: "都道府県を入力してください"
                    },
                    jusho: {
                        required: "住所（市区町村まで）を入力してください"
                    },
                    tel: {
                        valid_tel_zenkaku: "電話番号は半角で入力してください",
                        valid_tel: "電話番号を必ず一つは入力してください",
                        valid_is_phone_jp: "電話番号の形式で入力してください"
                    },
                    tel2: {
                        valid_tel_zenkaku: "電話番号は半角で入力してください",
                        valid_tel: "電話番号を必ず一つは入力してください",
                        valid_is_phone_jp: "電話番号の形式で入力してください"
                    },
                    g_name: {
                        required: "学校名を入力してください"
                    },
                    g_year: {
                        valid_g_kubun_required: "卒業区分を選択してください",
                        valid_g_mirai: "未来の年を選択する場合は、「卒業見込み」を選択してください",
                        valid_g_kako:  "「卒業見込み」を選択する場合は未来の年を選択してください"
                    },
                    g_type: {
                        valid_g_kubun_required: "卒業区分を選択してください",
                        valid_g_mirai: "未来の年を選択する場合は、「卒業見込み」を選択してください",
                        valid_g_kako:  "「卒業見込み」を選択する場合は未来の年を選択してください"
                    },
                    email: {
                        required: "メールアドレスを入力してください",
                        email: "メールアドレスの形式で入力してください",
                        valid_mobile_email: "パソコンのメールアドレスを入力してください"
                    },
                    email2: {
                        equalTo: "メールアドレスが一致しません"
                    },
                    m_email: {
                        valid_url_char: "半角英数字記号のみで入力してください"
                    },
                    m_email2: {
                        equalTo: "携帯メールアドレスが一致しません"
                    },
                    m_domain2: {
                        equalTo: "携帯メールアドレスが一致しません"
                    },
                    k_shokushu: {
                        required: "希望職種を選択して下さい"
                    },
                    k_kinmuchi: {
                        required: "希望勤務地を選択して下さい"
                    },
                    k_keitai: {
                        required: "希望雇用形態を入力して下さい"
                    }
                },
                errorClass: "alert",
                errorElement: "div",
                highlight: function(element, errorClass, validClass){
                  $(element).parent('.select').addClass('select-alert');
                  $(element).addClass(errorClass);
                },
                unhighlight: function(element, errorClass, validClass){
                  $(element).parent('.select').removeClass('select-alert');
                  $(element).removeClass(errorClass);
                }
            }; // end of options

        }
        else {

            valid_options = {
                groups: {
                    birthday: "birthday_year birthday_month birthday_day"
                },
                errorPlacement: function(error, element) {
                    // エラーを出す場所を決める
                    if ( element.attr("name") == "birthday_year"
                        || element.attr("name") == "birthday_month"
                        || element.attr("name") == "birthday_day" ) {
                        $('.errortxtbox.error_birthday').html('');
                        error.appendTo(".errortxtbox.error_birthday").fadeIn();
                    } else if ( element.attr("name") == "sex" ) {
                        $('.errortxtbox.error_gender').html('');
                        error.appendTo(".errortxtbox.error_gender").fadeIn();
                    } else if ( element.attr("name") == "ken" ) {
                        $('.errortxtbox.error_ken').html('');
                        error.appendTo(".errortxtbox.error_ken").fadeIn();
                    } else if ( element.attr("name") == "g_year"
                        || element.attr("name") == "g_type" ) {
                        $('.errortxtbox.error_g_kubun').html('');
                        error.appendTo(".errortxtbox.error_g_kubun").fadeIn();
                    } else if ( element.attr("name") == "m_email") {
                        $('.errortxtbox.error_m_email').html('');
                        error.appendTo(".errortxtbox.error_m_email").fadeIn();
                    } else if ( element.attr("name") == "m_email2"
                        ||  element.attr("name") == "m_domain2") {
                        $('.errortxtbox.error_m_email2').html('');
                        error.appendTo(".errortxtbox.error_m_email2").fadeIn();
                    } else {
                        error.appendTo(element.next()).fadeIn();
                    }
                },
                rules: {
                    name: {
                        required: true
                    },
                    kana: {
                        required: true
                    },
                    sex: {
                        required: true
                    },
                    birthday_year: {
                        valid_birthday: true
                    },
                    birthday_month: {
                        valid_birthday: true
                    },
                    birthday_day: {
                        valid_birthday: true
                    },
                    ken: {
                        valid_required_select: true
                    },
                    jusho: {
                        required: true
                    },
                    tel: {
                        valid_tel_zenkaku: true,
                        valid_tel: true,
                        valid_is_phone_jp: true
                    },
                    tel2: {
                        valid_tel_zenkaku: true,
                        valid_tel: true,
                        valid_is_phone_jp: true
                    },
                    g_name: {
                        required: true
                    },
                    g_year: {
                        valid_g_kubun_required: true,
                        valid_g_mirai: true,
                        valid_g_kako: true
                    },
                    g_type: {
                        valid_g_kubun_required: true,
                        valid_g_mirai: true,
                        valid_g_kako: true
                    },
                    email:{
                        required: true,
                        email: true,
                        valid_mobile_email: true
                    },
                    email2: {
                        equalTo: "#form_email"
                    },
                    m_email: {
                        valid_url_char: true
                    },
                    m_email2: {
                        equalTo: "#form_m_email"
                    },
                    m_domain2: {
                        equalTo: "select[name=m_domain]"
                    }
                },
                messages: {
                    name: {
                        required: "氏名（漢字）を入力してください"
                    },
                    kana: {
                        required: "氏名（カナ）を入力してください"
                    },
                    sex: {
                        required: "性別を入力してください"
                    },
                    birthday_year: {
                        valid_birthday: "生年月日を入力してください"
                    },
                    birthday_month: {
                        valid_birthday: "生年月日を入力してください"
                    },
                    birthday_day: {
                        valid_birthday: "生年月日を入力してください"
                    },
                    ken: {
                        valid_required_select: "都道府県を入力してください"
                    },
                    jusho: {
                        required: "住所（市区町村まで）を入力してください"
                    },
                    tel: {
                        valid_tel_zenkaku: "電話番号は半角で入力してください",
                        valid_tel: "電話番号を必ず一つは入力してください",
                        valid_is_phone_jp: "電話番号の形式で入力してください"
                    },
                    tel2: {
                        valid_tel_zenkaku: "電話番号は半角で入力してください",
                        valid_tel: "電話番号を必ず一つは入力してください",
                        valid_is_phone_jp: "電話番号の形式で入力してください"
                    },
                    g_name: {
                        required: "学校名を入力してください"
                    },
                    g_year: {
                        valid_g_kubun_required: "卒業区分を選択してください",
                        valid_g_mirai: "未来の年を選択する場合は、「卒業見込み」を選択してください",
                        valid_g_kako:  "「卒業見込み」を選択する場合は未来の年を選択してください"
                    },
                    g_type: {
                        valid_g_kubun_required: "卒業区分を選択してください",
                        valid_g_mirai: "未来の年を選択する場合は、「卒業見込み」を選択してください",
                        valid_g_kako:  "「卒業見込み」を選択する場合は未来の年を選択してください"
                    },
                    email: {
                        required: "メールアドレスを入力してください",
                        email: "メールアドレスの形式で入力してください",
                        valid_mobile_email: "パソコンのメールアドレスを入力してください"
                    },
                    email2: {
                        equalTo: "メールアドレスが一致しません"
                    },
                    m_email: {
                        valid_url_char: "半角英数字記号のみで入力してください"
                    },
                    m_email2: {
                        equalTo: "携帯メールアドレスが一致しません"
                    },
                    m_domain2: {
                        equalTo: "携帯メールアドレスが一致しません"
                    }
                },
                errorClass: "alert",
                errorElement: "div",
                highlight: function(element, errorClass, validClass){
                  $(element).parent('.select').addClass('select-alert');
                  $(element).addClass(errorClass);
                },
                unhighlight: function(element, errorClass, validClass){
                  $(element).parent('.select').removeClass('select-alert');
                  $(element).removeClass(errorClass);
                }
            }; // end of options

        }

        return valid_options;
    }

});

/**
 * 応募フォーム
 * @namespace
 * @name fj.c.my.apply
 */
fj.namespace("fj.c.my.apply", {

    /** @lends fj.c.my.apply */

    noAlert: false,

    _onError: function(){
        alert("Error");
    },

    /**
     * 応募フォーム
     *
     * @param {Object} [options]
     * <pre>
     * {String} [emailInput]
     * {String} [emailMessage]
     * {String} [linkToLogin]
     * {String} [beforeunloadMessage] 指定した場合 beforeunload の際にアラートを表示
     * {Function} [onError()]
     * </pre>
     * @returns {void}
     */
    initApplyForm: function(options){
        var ns = "fj.c.my.apply.initApplyForm",
            o = $.extend({
                emailInput: "#profile input[name=email]",
                emailMessage: "div[data-role='message-of-check-email']",
                linkToLogin: "[href=#member]",
                emailInputOnLogin: "#member input[name=user_mail]",
                beforeunloadMessage: null,
                onError: fj.c.my.apply._onError}, options);
            $emailInput = $(o.emailInput),
            $emailMessage = $(o.emailMessage),
            $emailInputOnLogin = $(o.emailInputOnLogin);

        $emailMessage.find(o.linkToLogin)
            .fjBindScrollTo({
                target: "body",
                afterScroll: function(){
                    $emailInputOnLogin
                        .focus()
                        .val($.trim($emailInput.val()));
                }
            });

        fj.c.my.setEmailCheck($emailInput, $emailMessage, o.onError);

        var enableBeforeunload = true;
        $("form").bind("submit." + ns, function(){
            if (fj.c.my.apply.noAlert == true) {
                enableBeforeunload = false;
                return true;
            }else if ($('form#apply_form').valid()) {
                enableBeforeunload = false;
                return true;
            }
        });
        $("#member .facebook a").bind("click." + ns, function(){
            enableBeforeunload = false;
            return true;
        });
        // EFO版のみ
        // OAuthボタンの離脱アラート無効
        $(".loginboxR a").bind("click." + ns, function(){
            enableBeforeunload = false;
            return true;
        });

        if (o.beforeunloadMessage) {
            $(window).fjBindBeforeunload({fn: function(){
                if (enableBeforeunload) {
                    return o.beforeunloadMessage;
                }
            }});
        }
    },

    /**
     * 応募確認フォーム
     *
     * @param {Object} [options]
     * <pre>
     * {String} [beforeunloadMessage] 指定した場合 beforeunload の際にアラートを表示
     * </pre>
     * @returns {void}
     */
    initApplyConfirmForm: function(options){
        var ns = "fj.c.my.apply.initApplyConfirmForm",
            o = $.extend({
                beforeunloadMessage: null,
                onError: fj.c.my.apply._onError}, options);

        var enableBeforeunload = true;
        $("form").bind("submit." + ns, function(e){
            enableBeforeunload = false;

            if ( $(this).data('submitted') === true ) {
                e.preventDefault();
            }
            else {
                $(this).data('submitted', true);
            }

            return true;
        });

        if (o.beforeunloadMessage) {
            $(window).fjBindBeforeunload({fn: function(){
                if (enableBeforeunload) {
                    return o.beforeunloadMessage;
                }
            }});
        }
    },

    /**
     * 応募完了フォーム
     *
     * @param {Object} options
     * <pre>
     * {String} [panel]
     * {String} [button]
     * {String} [completeClass]
     * {Function} [onSuccess(response)]
     * {Function} [onError()]
     * </pre>
     * @returns {void}
     */
    initApplyFinishForm: function(options){
        var o = $.extend({
            panel: "[data-role=other-service-panel]",
            button: "a[data-api]",
            completeClass: "complete",
            onSuccess: function(){},
            onError: fj.c.my.apply._onError}, options);

        $(o.panel).each(function(){
            var $panel = $(this),
                $button = $panel.find(o.button);

            $button.click(function(){
                if ($button.data("complete")) {
                    return;
                }
                $.get($button.data("api"))
                    .done(function(response){
                        if (response.error) {
                            return o.onError();
                        }
                        $button.data("complete", 1);
                        $panel.addClass(o.completeClass);
                        o.onSuccess(response);
                    })
                    .fail(o.onError);
                return false;
            });
        });
    },

    /*
     * _passHintLoop()
     *
     * メールアドレス入力によってパスワードが
     * 自動入力されたときに自動的にヒントを消す処理
     */
    _passHintLoop: function(){
        if(this.form_password.val()!='' && this.form_password.hasClass('tipped')){
            this.form_password.removeClass('tipped');
        }
        if(this.isPassHintLoop == true){
            setTimeout(this._passHintLoop,1000);
        }
    },

    /*
     * initForms()
     *
     * ・フォームの中にヒント表示の出しわけをセットする
     * ・テキストエリア系に文字数カウンターをセットする
     */
    initForms: function(){
        this.isPassHintLoop = false;
        // メールアドレスフォームのヒント表示
        var $form_user_mail = $('#form_user_mail input');
        var obj = this;
        $form_user_mail
            .blur(function(){
              var $input=$(this);
              if($input.val()==''){
                $input.addClass('tipped');
              }
              this.isPassHintLoop = false;
            })
            .focus(function(){
              var $input=$(this);
              if($input.val()==''){
                $input.removeClass('tipped');
              }
              this.isPassHintLoop = true;
              obj._passHintLoop();
            })
            .blur();

        // パスワードフォームのヒント表示
        this.form_password = $('#form_password input');
        var $form_name = $('input#form_name');
        var $form_kana = $('input#form_kana');
        var $address   = $('input#address');
        var $form_jusho2 = $('input#form_jusho2');
        var $form_kana = $('input#form_kana');
        var $form_tel  = $('input#form_tel');
        var $form_tel2 = $('input#form_tel2');
        var $form_email  = $('input#form_email');
        var $form_email2 = $('input#form_email2');
        var $form_g_name = $('input#form_g_name');
        var $form_g_gakubu = $('input#form_g_gakubu');
        fj.c.my._setHint( this.form_password );
        fj.c.my._setHint($form_kana);
        fj.c.my._setHint($form_name);
        fj.c.my._setHint($address);
        fj.c.my._setHint($form_jusho2);
        fj.c.my._setHint($form_kana);
        fj.c.my._setHint($form_tel);
        fj.c.my._setHint($form_tel2);
        fj.c.my._setHint($form_email);
        fj.c.my._setHint($form_email2);
        fj.c.my._setHint($form_g_name);
        fj.c.my._setHint($form_g_gakubu);

        // 職務経歴はフォームが複数に増やされる可能性があるため
        // クラス指定でJSのみで処理する。
        var $career_arr = $('input.form_office');
        $.each($career_arr, function() {
            fj.c.my._setHint($(this));
        });
        var $career_arr = $('textarea.form_job_content');
        $.each($career_arr, function() {
            var id = $(this).attr('id');
            var count_class = $(".count_" + id);
            fj.c.my._setCountTextarea({
                form: $(this),
                count: count_class
            });
        });
        var $form_shokureki = $('textarea#form_shokureki');
        var $count_form_shokureki = $('span.count_form_shokureki');
        fj.c.my._setCountTextarea({
            form: $form_shokureki,
            count: $count_form_shokureki
        });


        var $form_passwd = $('input#form_passwd'); fj.c.my._setHint($form_passwd);
        var $form_passwd2 = $('input#form_passwd2'); fj.c.my._setHint($form_passwd2);

        /*
         * 各ページ用validationルール
         * groups: 同一のバリデーションを書けるinputをグループ化する
         * errorPlacement: エラーの出す場所はデフォルトはinput直後の
         * 　errorElementになるが、radioやselectのセットなどで
         * 　別の場所に出したい場合セット。
         * rules: バリデーションをかけるinputのname、バリデーションの種類を設定
         * messages: rulesと同じ形式で、エラーの場合の文言をセット。
         */

        var apply_options = {
            groups: {
                birthday: "birthday_year birthday_month birthday_day"
            },
            errorPlacement: function(error, element) {
                // エラーを出す場所を決める
                if ( element.attr("name") == "birthday_year"
                    || element.attr("name") == "birthday_month"
                    || element.attr("name") == "birthday_day" ) {
                    $('.errortxtbox.error_birthday').html('');
                    error.appendTo(".errortxtbox.error_birthday").fadeIn();
                } else if ( element.attr("name") == "sex" ) {
                    $('.errortxtbox.error_gender').html('');
                    error.appendTo(".errortxtbox.error_gender").fadeIn();
                } else if ( element.attr("name") == "ken" ) {
                    $('.errortxtbox.error_ken').html('');
                    error.appendTo(".errortxtbox.error_ken").fadeIn();
                } else if ( element.attr("name") == "g_year"
                    || element.attr("name") == "g_type" ) {
                    $('.errortxtbox.error_g_kubun').html('');
                    error.appendTo(".errortxtbox.error_g_kubun").fadeIn();
                } else if ( element.attr("name") == "term" ){
                    error.appendTo(".errortxtbox.error_term").fadeIn();
                } else if ( /^[0-9-]+_keitai$/.test(element.attr("name")) ) {
                    var class_id = element.attr("name");
                    error.appendTo(".errortxtbox.err_" + class_id).fadeIn();
                } else {
                    error.appendTo(element.next()).fadeIn();
                }
            },
            rules: {
                name: {
                    required: true
                },
                kana: {
                    required: true
                },
                sex: {
                    required: true
                },
                birthday_year: {
                    valid_birthday: true
                },
                birthday_month: {
                    valid_birthday: true
                },
                birthday_day: {
                    valid_birthday: true
                },
                ken: {
                    valid_required_select: true
                },
                jusho: {
                    required: true
                },
                tel: {
                    valid_tel_zenkaku: true,
                    valid_tel: true,
                    valid_is_phone_jp: true
                },
                tel2: {
                    valid_tel_zenkaku: true,
                    valid_tel: true,
                    valid_is_phone_jp: true
                },
                email: {
                    required: true,
                    email: true,
                    valid_mobile_email: true,
                    valid_registerd_email: true
                },
                g_name: {
                    required: true
                },
                g_year: {
                    valid_g_kubun_required: true,
                    valid_g_mirai: true,
                    valid_g_kako: true
                },
                g_type: {
                    valid_g_kubun_required: true,
                    valid_g_mirai: true,
                    valid_g_kako: true
                },
                passwd: {
                    required: true
                },
                passwd2: {
                    required: true,
                    equalTo: "#form_passwd"
                },
                term: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "氏名（漢字）を入力してください"
                },
                kana: {
                    required: "氏名（カナ）を入力してください"
                },
                sex: {
                    required: "性別を入力してください"
                },
                birthday_year: {
                    valid_birthday: "生年月日を入力してください"
                },
                birthday_month: {
                    valid_birthday: "生年月日を入力してください"
                },
                birthday_day: {
                    valid_birthday: "生年月日を入力してください"
                },
                ken: {
                    valid_required_select: "都道府県を入力してください"
                },
                jusho: {
                    required: "住所（市区町村まで）を入力してください"
                },
                tel: {
                    valid_tel_zenkaku: "電話番号は半角で入力してください",
                    valid_tel: "電話番号を必ず一つは入力してください",
                    valid_is_phone_jp: "電話番号の形式で入力してください"
                },
                tel2: {
                    valid_tel_zenkaku: "電話番号は半角で入力してください",
                    valid_tel: "電話番号を必ず一つは入力してください",
                    valid_is_phone_jp: "電話番号の形式で入力してください"
                },
                email: {
                    required: "メールアドレスを入力してください",
                    email: "メールアドレスの形式で入力してください",
                    valid_mobile_email: "パソコンのメールアドレスを入力してください",
                    valid_registerd_email: "登録済みのメールアドレスでログインしてください"
                },
                g_name: {
                    required: "学校名を入力してください"
                },
                g_year: {
                    valid_g_kubun_required: "卒業区分を選択してください",
                    valid_g_mirai: "未来の年を選択する場合は、「卒業見込み」を選択してください",
                    valid_g_kako:  "「卒業見込み」を選択する場合は未来の年を選択してください"
                },
                g_type: {
                    valid_g_kubun_required: "卒業区分を選択してください",
                    valid_g_mirai: "未来の年を選択する場合は、「卒業見込み」を選択してください",
                    valid_g_kako:  "「卒業見込み」を選択する場合は未来の年を選択してください"
                },
                passwd: {
                    required: "会員登録用にパスワードを入力してください"
                },
                passwd2: {
                    required: "パスワードの確認を入力してください",
                    equalTo: "パスワードが一致しません"
                },
                term: {
                    required: "利用規約に同意してください"
                }
            },
            errorClass: "alert",
            errorElement: "div",
            highlight: function(element, errorClass, validClass){
              $(element).parent('.select').addClass('select-alert');
              $(element).addClass(errorClass);
            },
            unhighlight: function(element, errorClass, validClass){
              $(element).parent('.select').removeClass('select-alert');
              $(element).removeClass(errorClass);
            }
        };
        $('form#apply_form').validate(apply_options);
    },
    /*
     * initForms()
     *
     * ・応募フォーム内に一括応募候補の求人情報、チェックボックスを表示
     * ・情報の呼び出しはAPIで行う。
     *   /api/job/get_recommend.pl?type=package_apply
     * 
     */
    initPackageApplyForm: function(options){

        var job_id  = options.jobID;
        var _job_id = options._jobID;
        var type    = 'package_apply';

        function requestPackageApply (keitai) {
            var $packageForm = $("[data-role='package-apply']");
            if ($packageForm.length < 1){
                return false;
            }

            $.ajax({
                type:'POST',
                data:{jobID: job_id,
                      _jobID: _job_id,
                      type: type,
                      keitai: keitai},
                url: '/api/job/get_recommend.pl',
                success: function(data){
                    if (data != '') {
                        $packageForm.after(data).remove();
                        $packageForm.show();

                        $.each($("[data-role='package-apply-input']"), function(){
                            /* チェックボックス自体は操作を無効化 */
                            $(this).click(function(e){
                                var $checkbox = $(this).find("input[name=_jobID]");
                                var target = e.target;
                                if (target.tagName === 'TD') {
                                    if ($checkbox.prop('checked')){
                                        $checkbox.prop('checked', false);
                                        return false;
                                    } else {
                                        $checkbox.prop('checked', true);
                                        return false;
                                    }
                                }
                            });
                        });
                    } else {
                        $packageForm.hide();
                    }
                }
            });
        }

        if (job_id != ''){
            var first_request = 0;
            $.each($("[data-role='package-source']"), function(){
                if ($(this).prop('checked')) {
                    var keitai = $(this).data("package-keitai");
                    requestPackageApply(keitai);
                }
                $(this).change(function(){
                    var keitai = $(this).data("package-keitai");
                    requestPackageApply(keitai);
                    return false; 
                });
            });
        }

        var $sendButton = $("[data-role='package-submit']");
        if ($sendButton) {
            $sendButton.click(function() {
                $.each($("[data-role='package-apply-input']"), function(){
                    if ($(this).find("input[name=_jobID]").prop('checked')) {
                        $.each($(this).find("input"), function(){
                            var input_name = $(this).prop('name');
                            //replace _jobID and _jobID_keitai
                            $(this).prop('name', input_name.replace(/^_(.+)$/, "$1"));
                        });
                    }
                });
                return true;
            });
        }

        var $formButton = $("button[name=form]");
        if ($formButton) {
            $formButton.click(function() {
                first = 1;
                $.each($("input[name=jobID]"), function(){
                    /* 1個目は応募フォームのjobID */
                    if (first) {
                        first = 0;
                    } else {
                        var input_name = $(this).prop('name');
                        $(this).prop('name', input_name.replace(/^(.+)$/, "_$1"));
                    }
                });
                return true;
            });
        }
    }
});

/**
 * 応募フォーム→職務経歴追加画面
 * @namespace
 * @name fj.c.my.apply
 */
fj.namespace("fj.c.my.apply_rireki", {

    /** @lends fj.c.my.apply_rireki */

    noAlert: false,
 
    /*
     * initForms()
     * @param {Object} [options]
     * <pre>
     * {String} [beforeunloadMessage] 指定した場合 beforeunload の際にアラートを表示
     * </pre>
     * @returns {void}
     *
     * ・フォームの中にヒント表示の出しわけをセットする
     * ・テキストエリア系に文字数カウンターをセットする
     * ・上記引数がある場合離脱防止アラートを出す
     */
    initForms: function(options){
        var ns = "fj.c.my.apply_rireki.initForms",
            o = $.extend({
                beforeunloadMessage: null,
                onError: fj.c.my.apply._onError}, options);

        var enableBeforeunload = true;
        $("form").bind("submit." + ns, function(){
            if (fj.c.my.apply_rireki.noAlert == true) {
                enableBeforeunload = false;
                return true;
            }else if ($('form#apply_form').valid()) {
                enableBeforeunload = false;
                return true;
            }
        });

        if (o.beforeunloadMessage) {
            $(window).fjBindBeforeunload({fn: function(){
                if (enableBeforeunload) {
                    return o.beforeunloadMessage;
                }
            }});
        }

        // 職務経歴はフォームが複数に増やされる可能性があるため
        // クラス指定でJSのみで処理する。
        var $career_arr = $('input.form_office');
        $.each($career_arr, function() {
            fj.c.my._setHint($(this));
        });
        var $career_arr = $('textarea.form_job_content');
        $.each($career_arr, function() {
//            fj.c.my._setHint($(this));
            var id = $(this).attr('id');
            var count_class = $(".count_" + id);
            fj.c.my._setCountTextarea({
                form: $(this),
                count: count_class
            });
        });

        // 職歴追加画面
        var apply_biography_options = {
            groups: {
                start_date: "syear smonth"
            },
            errorPlacement: function(error, element) {
                // エラーを出す場所を決める
                if (element.attr("name") == "syear"
                    || element.attr("name") == "smonth"){
                    error.appendTo(".error_rireki").fadeIn();
                } else {
                    error.fadeIn().insertAfter(element);
                }
            },
            rules: {
                syear: {
                    valid_start_date: true
                },
                smonth: {
                    valid_start_date: true
                }
            },
            messages: {
                syear: {
                    valid_start_date: "入社年と入社月は必ず選択してください"
                },
                smonth: {
                    valid_start_date: "入社年と入社月は必ず選択してください"
                }
            },
            errorClass: "alert",
            errorElement: "div",
            highlight: function(element, errorClass, validClass){
              $(element).parent('.select').addClass('select-alert');
              $(element).addClass(errorClass);
            },
            unhighlight: function(element, errorClass, validClass){
              $(element).parent('.select').removeClass('select-alert');
              $(element).removeClass(errorClass);
            }
        };

        // バリデーションセット
        $('form#apply_form').validate(apply_biography_options);
    }
});

/**
 * 応募フォーム→職務経歴削除画面
 * @namespace
 * @name fj.c.my.apply_rireki_delete
 */
fj.namespace("fj.c.my.apply_rireki_delete", {

    /** @lends fj.c.my.apply_rireki_delete */

    /*
     * initForms()
     * @param {Object} [options]
     * <pre>
     * {String} [beforeunloadMessage] 指定した場合 beforeunload の際にアラートを表示
     * </pre>
     * @returns {void}
     *
     * ・上記引数がある場合離脱防止アラートを出す
     */
    initForms: function(options){
        var ns = "fj.c.my.apply_rireki_delete.initForms",
            o = $.extend({
                beforeunloadMessage: null,
                onError: fj.c.my.apply._onError}, options);

        var enableBeforeunload = true;
        $("form").bind("submit." + ns, function(){
            enableBeforeunload = false;
            return true;
        });

        if (o.beforeunloadMessage) {
            $(window).fjBindBeforeunload({fn: function(){
                if (enableBeforeunload) {
                    return o.beforeunloadMessage;
                }
            }});
        }
    }
});

/**
 * 応募フォーム→スキルシート画面
 * @namespace
 * @name fj.c.my.apply_skill
 */
fj.namespace("fj.c.my.apply_skill", {

    /** @lends fj.c.my.apply_skill */

    /*
     * initForms()
     * @param {Object} [options]
     * <pre>
     * {String} [beforeunloadMessage] 指定した場合 beforeunload の際にアラートを表示
     * </pre>
     * @returns {void}
     *
     * ・フォームの中にヒント表示の出しわけをセットする
     * ・上記引数がある場合離脱防止アラートを出す
     */
    initForms: function(options){
        var $s_other = $('.box textarea');
        fj.c.my._setHint($s_other);

        var ns = "fj.c.my.apply_skill.initForms",
            o = $.extend({
                beforeunloadMessage: null,
                onError: fj.c.my.apply._onError}, options);

        var enableBeforeunload = true;
        $("form").bind("submit." + ns, function(){
            enableBeforeunload = false;
            return true;
        });

        $("a[data-role=back-button]").on('click', function(){
            enableBeforeunload = false;
            return true;
        });

        if (o.beforeunloadMessage) {
            $(window).fjBindBeforeunload({fn: function(){
                if (enableBeforeunload) {
                    return o.beforeunloadMessage;
                }
            }});
        }
    }
});
