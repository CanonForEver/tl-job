/*
 *
 */
function getAddress(zip_code, form_pref, form_addr, btn, alert_id){
    zip_code = zip_code.replace(/(^\s+|\s+$)/g, '')
    var script_url = '/com/feed_address_from_zip.pl';
    btn.disabled = 'disabled';
    $("#"+alert_id).css('display', 'none');
    $.ajax({
        type: "POST",
        url: script_url,
        data: {
            zip: zip_code
        },
        success: function(data){
            if(data){
                var addr = eval("("+data+")");
                if(addr.prefecture == ''){
                    //
                    $("#"+alert_id).css('display', 'block');
                    btn.disabled = '';
                    return false;
                }
                $("#"+form_pref).val(addr.prefecture);
                $("#"+form_addr).val(addr.address);
            }
        }
    });
    btn.disabled = '';
    return false;
}

function showNotice() {
    document.getElementById("notice").style.display = 'block'; 
}

function hideNotice() {
    document.getElementById("notice").style.display = 'none'; 
}

function displayJushoATR(elem){
    if(elem.value != 'n'){
        $("#add_billfor_comp01").css("display", "none");
        $("#add_billfor_comp01sub01").css("display", "none");
        $("#name_billfor_usr01").css("display", "none");
        $("#txt_billfor_usrpos01").css("display", "none");
        $("#txt_billfor_usrdept01").css("display", "none");
        $("#honsha_same_yes2").attr("disabled", "disabled");
        return;
    }
    //'異なる'を選択した場合
    if(elem.checked ){
        $("#add_billfor_comp01").css("display", "");
        $("#add_billfor_comp01sub01").css("display", "");
        $("#name_billfor_usr01").css("display", "");
        $("#txt_billfor_usrpos01").css("display", "");
        $("#txt_billfor_usrdept01").css("display", "");
        $("#honsha_same_yes2").attr("disabled", "");
    }
}

function getURLFromMailaddress(mailaddress){
    if(mailaddress == ''){
        return;
    }
    mailaddress.match(/@(.*)$/);
    return 'http://www.'+RegExp.$1;
};

function setWebURL(mailaddress){
    var url = getURLFromMailaddress(mailaddress);
    $("#web").val(url);
}

function displayHonshTR(elem){
    if(elem.value != 'n'){
        $("#add_comp01sub01").css("display", "none");
        return;
    }
    //'異なる'を選択した場合
    if(elem.checked ){
        $("#add_comp01sub01").css("display", "");
    }
}

function displayFinancialCode(elem){
    if(elem.value != '3'){
        return;
    }
    //'上場企業'を選択した場合
    if(elem.checked){
        $("#finance_code").css("display", "block");
    }
    else{
        $("#finance_code").css("display", "none");
    }
}

function displayLicenseCategory(){
    if($('#form_license2').css('display') == 'none'){
        $('#form_license2').css('display', 'block');
    }
    else if($('#form_license3').css('display') == 'none'){
        $('#form_license3').css('display', 'block');
    }
}
