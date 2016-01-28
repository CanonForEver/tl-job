/*
 * 全画面間で共通のJavaScript関数。
 *
 */
function check_all( checkbox ) {
    if ( checkbox ) {
        if ( checkbox.length ) {
            for ( i = 0; i < checkbox.length; i++ ) checkbox[i].checked = true;
        }
        else {
            checkbox.checked = true;
        }
    }
}

function clear_all( checkbox ) {
    if (checkbox) {
        if ( checkbox.length ) {
            for ( i = 0; i < checkbox.length; i++ ) checkbox[i].checked = false;
        }
        else {
            checkbox.checked = false;
        }
    }
}

// f->Form Name e->Element Name
function set_focus(f,e){
    document.forms[f].elements[e].focus();
}

/*
 * doument.URLからプロトコル、ホスト名を抜いたREQUEST_URIを返す。
 *
 * 例)
 * document.URL: http://www.find-job.net/fj/search.cgi?shokushu=1
 * var request_uri = get_request_uri();
 * --> /fj/search.cgi?shokushu=1
 */
function get_request_uri() {
    var regexp = new RegExp("^" + location.protocol + "//" + location.host + "(.+)", "i");
    if (document.URL.match(regexp)) {
        uri = RegExp.$1;
    }
    else {
        uri = "/";
    }
    return uri;
}
