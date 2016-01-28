/*
 *
 */

var script_url         = '/com/update_memo.pl';
var memo_max_length    = 255;
var message_max_length = 50;

function trim(str){
    return str.replace(/^\s+|\s+$/g, '');
}

function updateScoutBookmarkMemo(company_id, user_id, memo){
    memo = trim(memo);
    if(memo.length > memo_max_length){
        alert('メモは、'+memo_max_length+'文字以内で入力してください');
        return;
    }
    $.ajax({
        type: "POST",
        url: script_url,
        data: {
            mode: 'scout',
            company_id: company_id,
            myuser_id: user_id,
            memo: memo
        },
        success: function(msg){
            return;
        }
    });
}
function updateWMCompanyMemo(user_id, job_id, memo){
    memo = trim(memo);
    if(memo.length > memo_max_length){
        return 'メモは、'+memo_max_length+'文字以内で入力してください';
    }
    $.ajax({
        type: "POST",
        url: script_url,
        data: {
            mode: 'com',
            user_id: user_id,
            job_id: job_id,
            memo: memo
        },
        success: function(msg){
            return;
        }
    });
}
function updateWMUserMemo(user_id, job_id, memo){
    memo = trim(memo);
    if(memo.length > memo_max_length){
        alert('メモは、'+memo_max_length+'文字以内で入力してください');
        return;
    }
    $.ajax({
        type: "POST",
        url: script_url,
        data: {
            mode: 'com',
            user_id: user_id,
            job_id: job_id,
            memo: memo
        },
        success: function(msg){
            return;
        }
    });
}
function updateScoutBookmarkMessage(company_id, user_id, job_id, message){
    message = trim(message);
    if (message.length > message_max_length){
        alert('メッセージは'+message_max_length+'文字以内で入力してください');
        return;
    }
    $.ajax({
        type: "POST",
        url: script_url,
        data: {
            mode: 'message',
            company_id: company_id,
            myuser_id: user_id,
            job_id: job_id,
            memo: message
        },
        success: function(msg){
            return;
        }
    });
}
function updateSameClassMemo(className, memo, type){

    $("textarea."+className).val(memo);

    if (type === 'memo'){
        if(memo.length < 1){
            memo = "メモ";
        }
    }
    else {
        if(memo.length < 1){
            memo = "求職者へのひとことメッセージを入力";
        }
    }

    $("span."+className).text(memo);
}

function updateMemoCondition(memo, memoClassName, switchClassName){
    memo = trim(memo);
    if(memo.length > memo_max_length){
        return;
    }
    if(trim(memo).length == ""){
        $("span."+memoClassName).addClass("empty_alt");
    }
    else{
        $("span."+memoClassName).removeClass("empty_alt");
    }
    updateSameClassMemo(memoClassName, memo, 'memo');
    switchDisplay(switchClassName, 'close', 1);
}

function undoMemoValue(restoreMemoValue, memoTextArea){
    memoTextArea.value = restoreMemoValue;
}

function cacheValue(cacheValue, cacheArea){
    $(cacheArea).html(cacheValue);
}

function updateMessageCondition(message, messageClassName, switchClassName){
    message = trim(message);
    if(message.length > message_max_length){
        return;
    }

    updateSameClassMemo(messageClassName, message, 'message');
    switchDisplay(switchClassName, 'close', 1);
}

