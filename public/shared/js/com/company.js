/*
 *
 */

var cookieSetScript = '/com/set_cookie.pl';

/* For 1block */
function changeDisplay(id, type){

    var target = document.getElementById(id);
    var cookieValue = 0;
    if(type == 'open'){
        //open
        target.style.display = 'block';
    }
    else{
        //close
        target.style.display = 'none';
        cookieValue = 1;
    }
    setCookieValue(id, cookieValue);
}

/* For 2blocks */
function switchDisplay(id, type, noSetCookie){

    var cookieValue = 0;

    if ( /^message/.test(id) ){
        var targetOps = document.getElementsByClassName(id+'_open');
        var targetCls = document.getElementsByClassName(id+'_close');

        if (type == 'open'){
            for (var i=0,j=targetOps.length;i<j;i++){
                targetOps[i].style.display = 'block';
            }

            for (var i=0,j=targetCls.length;i<j;i++){
                targetCls[i].style.display = 'none';
            }
        }
        else {
            for (var i=0,j=targetOps.length;i<j;i++){
                targetOps[i].style.display = 'none';
            }

            for (var i=0,j=targetCls.length;i<j;i++){
                targetCls[i].style.display = 'block';
            }
        }
    }
    else {
        var targetOp = document.getElementById(id+'_open');
        var targetCl = document.getElementById(id+'_close');

        if(type == 'open'){
            //open
            targetOp.style.display = 'block';
            targetCl.style.display = 'none';
        }
        else{
            //close
            targetOp.style.display = 'none';
            targetCl.style.display = 'block';
            cookieValue = 1;
        }
    }

    if(noSetCookie != '1'){
        setCookieValue(id, cookieValue);
    }
}

function setCookieValue(id, cookieValue){

    //TODO plファイルにアクセスしないようにする
    var img = new Image();
    var param = '?id='+id+'&val='+cookieValue;
    var date = new Date();
    param += '&'+date.getTime();
    img.src = cookieSetScript + param;
}
