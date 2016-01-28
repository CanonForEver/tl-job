/**
 * @fileOverview
 * <pre>
 * objects:
 *
 * - fj.c.my
 * - fj.c.my.apply_skill
 * </pre>
 */

fj.namespace("fj.c.com.regist", {

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
    },

    _changeOption : function(kenEnableOption){
        var selectPlan = $('[name="select_plan_id"]:checked').val();
        var selectKen = $('#jusho1').val();
        if($.inArray(selectKen, kenEnableOption) >= 0){
            if (selectPlan == '34'){

                if ($('#prosupport_free').is(':checked')){
                    $('#prosupport').attr("checked", true);
                }
                else{
                    $('#prosupport').attr("checked", false);
                }

                $('._option1').show();
                $('._option2').hide();
            }
            else{
                if ($('#prosupport').is(':checked')){
                    $('#prosupport_free').attr("checked", true);
                }
                else{
                    $('#prosupport_free').attr("checked", false);
                }
                $('._option1').hide();
                $('._option2').show();
           }
        }
    },

    _displayOption: function(kenEnableOption){
        var selectKen = $('#jusho1').val();
        if($.inArray(selectKen, kenEnableOption) >= 0){
            $('._select_option').show();
            fj.c.com.regist._changeOption(kenEnableOption);
        }
        else{
            $('._select_option').hide();
        }
    }

});

/**
 * 企業登録フォーム
 * @namespace
 * @name fj.c.com.regist.regist_company
 */
fj.namespace("fj.c.com.regist.regist_company", {

    /** @lends fj.c.my.apply */

    noAlert: false,

    _onError: function(){
        alert("Error");
    },


    /*
     * initForms()
     *
     * ・フォームの中にヒント表示の出しわけをセットする
     * ・テキストエリア系に文字数カウンターをセットする
     */
    initForms: function(options){

        var kenEnableOption = ['東京都', '神奈川県', '千葉県', '埼玉県'];
        // var kenEnableOption = ['なし'];

        fj.c.com.regist._displayOption(kenEnableOption);

        // ヒントを表示する要素の取得
        var $formName = $('input#name');
        var $formKana = $('input#kana');
        var $formAddress   = $('input#zip');
        var $formJusho2 = $('input#jusho2'); 
        var $formJusho3 = $('input#jusho3');
        var $formTel  = $('input#tel');
        var $formTantoname = $('input#tantoname');
        var $formTantokana = $('input#tantokana');
        var $formMail = $('input#mail');
        var $formCeo = $('input#ceo');

        fj.c.com.regist._setHint($formName);
        fj.c.com.regist._setHint($formKana);
        fj.c.com.regist._setHint($formAddress);
        fj.c.com.regist._setHint($formJusho2);
        fj.c.com.regist._setHint($formJusho3);
        fj.c.com.regist._setHint($formTel);
        fj.c.com.regist._setHint($formTantoname);
        fj.c.com.regist._setHint($formTantokana);
        fj.c.com.regist._setHint($formMail);
        fj.c.com.regist._setHint($formCeo);

        var $getAddressButton = $('#get_address_button');

        $getAddressButton.click(function(){
            var zipValue = $('#zip').val();
            if (zipValue != ''){
                getAddress(
                    zipValue,
                    'jusho1', 
                    'jusho2', 
                    $getAddressButton,
                    'zip_alert1'
                 );
                 setTimeout(function(){
                     var $jusho2 =  $('#jusho2');
                     if ($jusho2.val() != "") {
                         $jusho2.removeClass('tipped');
                         $('[htmlfor="jusho1"]').hide();
                         $('[htmlfor="jusho2"]').hide();
                         var selectKen = $('#jusho1').val();
                         if ($.inArray(selectKen, kenEnableOption) >= 0){
                             $('._select_option').show();
                             fj.c.com.regist._changeOption(kenEnableOption);
                         }
                         else {
                             $('._select_option').hide();
                         }
                     }
                     else{
                         $jusho2.addClass('tipped');
                     }

                 }, 100);
 


             }

             return false;
        });


        var $jusho1 = $('#jusho1');
        $jusho1.bind("change",function(){
             fj.c.com.regist._displayOption(kenEnableOption);
        });

    
        var $selectPlanID = $('[name="select_plan_id"]');
        $selectPlanID.bind("click", function(){
            fj.c.com.regist._changeOption(kenEnableOption);
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

        var regist_options = {
            errorPlacement: function(error, element) {
                // エラーを出す場所
                    error.appendTo(element.next()).fadeIn();
            },
            rules: {
                name: {
                    required: true
                },
                kana: {
                    required: true,
                    valid_katakana_hiragana: true
                },
                zip: {
                    required: true,
                    valid_is_phone_jp: true,
                    valid_is_zip_jp: true
                },
                ken: {
                    valid_required_select: true
                },
                jusho1: {
                    required: true
                },
                jusho2:{
                    required: true
                },
                tel: {
                    required: true,
                    valid_phone_number_char: true
                },
                tantoname: {
                    required: true
                },
                tantokana: {
                    required: true,
                    valid_katakana_hiragana: true
                },
                mail: {
                    required: true,
                    email: true
                },
                web: {
                    valid_url_char: true
                },
                ceo: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "会社名（漢字）を入力してください"
                },
                kana: {
                    required: "会社名（カナ）を入力してください",
                    valid_katakana_hiragana: "会社名をカタカナで入力してください"
                },
                zip: {
                    required: "郵便番号を入力してください",
                    valid_is_phone_jp: "郵便番号を半角数字で入力してください",
                    valid_is_zip_jp: "郵便番号を正しく入力して下さい"
                },
                jusho1: {
                    required: "都道府県を選択してください"
                },
                jusho2: {
                    required: "市区町村を入力してください"
                },
                tel: {
                    required: "電話番号を入力してください",
                    valid_phone_number_char: "電話番号は数字で入力してください"
                },
                tantoname: {
                    required: "ご担当者名（漢字）を入力してください"
                },
                tantokana: {
                    required: "ご担当者名（カナ）を入力してください",
                    valid_katakana_hiragana: "ご担当者名をカタカナで入力して下さい"
                },
                mail: {
                    required: "メールアドレスを入力してください",
                    email: "メールアドレスの形式で入力してください"
                },
                web: {
                    valid_url_char: "会社ホームページを半角英数で入力してください。"
                },
                ceo: {
                    required: "代表者名を入力して下さい"
                }
            },
            errorClass: "errortxt",
            errorElement: "div"
        //        onfocusout: function(){console.log(this);}
        };
        $('form').validate(regist_options);
    }
});

