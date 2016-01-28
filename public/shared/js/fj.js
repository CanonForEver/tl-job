/**
 * @fileOverview
 * <pre>
 * objects:
 *
 * - fj
 * - fj.config
 * - fj.namespace
 * - fj.log
 * - fj.util      ファイルを分離した方が良いかも
 * - fj.text      ファイルを分離した方が良いかも
 * </pre>
 */

if (typeof fj === 'undefined') {
    /**
     * FindJob ! ライブラリ
     *
     * @namespace
     */
    var fj = window.fj = {};
}

(function(){ // start anonymous

/**
 * fj オブジェクトの動作設定
 *
 * @namespace
 */
fj.config = {
    
    /** @lends fj.config */

    /**
     * {Boolean} true の場合 fj.log() が有効になる
     *
     * @fields
     */
    log: false,

    /**
     * {Function} 設定されている場合、fj.log が呼ばれた際に実行される
     *
     * @fields
     */
    onLog: null,

    /**
     * {String} fj.util.cookie で利用する Cookie の名前
     *
     * @fields
     */
    cookieName: 'fjconf'
};

/**
 * ログ処理のラッパー関数
 *
 * <pre>
 * console.log が存在しなくてもエラーが発生しない
 * また、fj.config.log = true でないとログが表示されない
 * </pre>
 *
 * @function
 * @param {mixed}
 * @returns void
 */
fj.log = function fjLog(){
    if (fj.config.onLog) {
        fj.config.onLog.apply(null, arguments);
    }
    if (!fj.config.log) {
        return;
    }
    try {
        if ($.browser.msie) {
            if (arguments.length < 2) {
                console.log(arguments[0]);
            } else {
                console.log(Array.prototype.slice.apply(arguments));
            }
        } else {
            console.log.apply(null, arguments);
        }
    } catch (e) {}
};

/**
 * namespace を定義する
 *
 * @function
 * @example
 * fj.namespace('my.orig.namespace', {
 *  foo: 'AAA',
 *  bar: 'BBB',
 *  hoge: function(){
 *      alert('fuga');
 *  }
 * });
 *
 * @param {String} namespace 定義する namespace
 * @param {Object} body 指定した namespace に定義する内容
 * @param {String} [root] namespace を定義する root。default='window.'
 * @returns {Object}
 */
fj.namespace = function fjNamespace(namespace, body, root) {
    root = root || 'window.';
    if (namespace.substr(0, root.length) !== root) {
        namespace = root + namespace;
    }
    body = body || {};
    var names = namespace.split('.');
    var currentNamespace = '';
    var parentObject = {};
    for (var i = 1, l = names.length; i < l; i++) {
        currentNamespace = names.slice(0, i + 1).join('.');
        parentObject = eval(names.slice(0, i).join('.'));
        if (typeof parentObject[names[i]] === 'undefined') {
            if (currentNamespace === namespace) {
                return parentObject[names[i]] = body;
            } else {
                parentObject[names[i]] = {};
            }
        }
    }
};

/**
 * class の様な挙動の関数を作る
 *
 * <pre>
 * - 現状クラスメソッドは継承していません。
 *   SuperClass.classMethod() の形で直接実行してください。
 * </pre>
 *
 * @function
 * @example
 * var myClass = fj.Class({
 *     init: function(option){
 *         // constructor
 *     },
 *     method: function(){
 *         // method
 *     }
 * });
 * myClass.classMethod = function(){};
 *
 * // extend
 * var mySubClass = fj.Class(myClass, {
 *     // override
 *     method: function(){
 *         // call super class method
 *         this.super.method.apply(this);
 *     }
 * });
 *
 * var myInstance = myClass.init({
 *     a: 'AAA',
 *     b: 'BBB'});
 *
 * @param {mixed}
 * @returns {Object}
 */
fj.Class = function fjClass(){
    var klass = function Class(){};
    var newPrototype = {
        init: function(){}
    };
    var _super = {};
    for (var i = 0, l = arguments.length; i < l; i++) {
        if (arguments[i].prototype) {
            $.extend(newPrototype, arguments[i].prototype);
            if (i < l - 1) {
                _super = arguments[i].prototype;
            }
        } else {
            $.extend(newPrototype, arguments[i]);
            if (i < l - 1) {
                _super = arguments[i];
            }
        }
    }
    klass.prototype = newPrototype;
    klass.prototype._super = _super;
    klass.prototype.constructor = klass;
    klass.init = function(){
        var instance = new klass();
        instance.init.apply(instance, arguments);
        return instance;
    };
    return klass;
};

/**
 * ユーティリティ
 *
 * @namespace
 * @name fj.util
 */
fj.namespace('fj.util', {

    /**
     * IE6 かどうか判定
     *
     * @param {void}
     * @returns {Boolean}
     */
    isIE6: function(){
        return $.browser.msie && $.browser.version.split('.')[0] === '6';
    },

    /**
     * getPageSize()
     *
     * Returns array with page width, height and window width, height
     * Core code from - quirksmode.org
     * Edit for Firefox by pHaez
     * 
     * @function
     * @name fj.util.getPageSize
     * @param {void}
     * @returns {Object} width, height, scrollWidth, scrollHeight, windowWidth, windowHeight
     */
    getPageSize: function() {
        var xScroll, yScroll;
        if (window.innerHeight && window.scrollMaxY) {
            xScroll = window.innerWidth + window.scrollMaxX;
            yScroll = window.innerHeight + window.scrollMaxY;
        } else if (document.body.scrollHeight > document.body.offsetHeight) { // all but Explorer Mac
            xScroll = document.body.scrollWidth;
            yScroll = document.body.scrollHeight;
        } else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
            xScroll = document.body.offsetWidth;
            yScroll = document.body.offsetHeight;
        }
        var windowWidth, windowHeight;
        if (self.innerHeight) { // all except Explorer
            if (document.documentElement.clientWidth) {
                windowWidth = document.documentElement.clientWidth;
            } else {
                windowWidth = self.innerWidth;
            }
            windowHeight = self.innerHeight;
        } else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
            windowWidth = document.documentElement.clientWidth;
            windowHeight = document.documentElement.clientHeight;
        } else if (document.body) { // other Explorers
            windowWidth = document.body.clientWidth;
            windowHeight = document.body.clientHeight;
        }
        // for small pages with total height less then height of the viewport
        if (yScroll < windowHeight) {
            pageHeight = windowHeight;
        } else {
            pageHeight = yScroll;
        }
        // for small pages with total width less then width of the viewport
        if (xScroll < windowWidth) {
            pageWidth = xScroll;
        } else {
            pageWidth = windowWidth;
        }
        var size = {
            width: pageWidth,
            height: pageHeight,
            scrollWidth: xScroll,
            scrollHeight: yScroll,
            windowWidth: windowWidth,
            windowHeight: windowHeight};
        return size;
    },

    /**
     * getPageScroll()
     *
     * Returns array with x,y page scroll values.
     * Core code from - quirksmode.com
     *
     * @param {void}
     * @returns {Object} x, y
     */
    getPageScroll: function(){
        var xScroll, yScroll;

        if (self.pageYOffset) {
            yScroll = self.pageYOffset;
            xScroll = self.pageXOffset;
        } else if (document.documentElement && document.documentElement.scrollTop){ // Explorer 6 Strict
            yScroll = document.documentElement.scrollTop;
            xScroll = document.documentElement.scrollLeft;
        } else if (document.body) {// all other Explorers
            yScroll = document.body.scrollTop;
            xScroll = document.body.scrollLeft;
        }
        return {x: xScroll, y: yScroll};
    },
 
    /**
     * jQuery.cookie wrapper
     * <pre>
     * 全ての値を一つの cookie に書きこむ。
     * jQuery.cookie が存在しない場合は動作しない。
     *
     * touch より移植
     * </pre>
     *
     * @function
     * @name fj.util.cookie
     * @example
     * var cookie = fj.util.cookie;
     * cookie(); // 全ての値を Object として返す
     * cookie('foo'); // foo の値を返す
     * cookie('foo', 123); // foo に 123 を設定する
     * cookie('foo', null); // foo の値を削除する
     *
     * @param {String} [name]
     * @param {String|Number} [value]
     * @param {Object} [options]
     * @returns {mixed}
     * @requires jQuery.cookie
     */
    cookie: function(name, value, options) {
        if (!$.cookie
            || (typeof name !== 'undefined' && !name)) {

            return;
        }
        options = $.extend({path: '/',
                            expires: 7 * 2},
                           options);

        var cookieName = fj.config.cookieName,
            source = $.cookie(cookieName) || '',
            splitted = source.split('&'),
            values = {};
    
        for (var i = 0, l = splitted.length; i < l; i++) {
            var item = (splitted[i] || '').split('=');
            if (item[0].length > 0) {
                values[item[0]] = item[1];
            }
        }
    
        if (typeof name === 'undefined') {
            return values;
        }
        if (typeof value === 'undefined') {
            return values[name];
        }
        if (value === null) {
            delete values[name];
        } else {
            values[name] = value;
        }
        var storeValues = $.param(values);
        if (storeValues === "") {
            storeValues = null;
        }
        return $.cookie(cookieName, storeValues, options);
    },

    /**
     * lockWindow の有効化フラグ
     *
     * @fields
     * @see fj.util.lockWindow
     * @see fj.util.unlockWindow
     */
    _isLockWindow: null,

    /**
     * 画面を移動しようとした際にダイアログを表示させる
     *
     * IE では href="javascript:..." の要素をクリックすると beforeunload を
     * 必ず trigger してしまうため、例外的に href="javascript:..." の要素の
     * click イベントをキャンセルさせる。
     *
     * @example
     * fj.util.lockWindow({
     *     message: '現在の処理がキャンセルされます。',
     *     unlockItems: 'a.submit, a.back'});
     *
     * @param {Object} [options]
     * <pre>
     * {String} [message] ダイアログに表示するメッセージ
     * {String} [unlockItems] クリック時に onbeforeunload を発生させないリンクのセレクタ
     * {Function} [callback] onbeforeunload が実行された時のコールバック
     * </pre>
     * @returns {Boolean} 既に設定済みの場合 false
     * @see fj.util._isLockWindow
     * @see fj.util.unlockWindow
     */
    lockWindow: function(options){
        var ns = 'fj.util.lockWindow',
            o = $.extend({
                message: '編集中の内容が破棄されます。',
                unlockItems: null,
                callback: function(){}}, options);

        if (fj.util._isLockWindow !== null) {
            return false;
        } else {
            fj.util._isLockWindow = true;
        }

        $(window).fjBindBeforeunload({fn: function(){
            o.callback(fj.util._isLockWindow);
            if (fj.util._isLockWindow) {
                return o.message;
            }
            fj.util._isLockWindow = true;
            return undefined;
        }});

        if (o.unlockItems) {
            // click だと IE で問題が発生
            $(o.unlockItems).bind('mousedown.' + ns, function(){
                fj.util._isLockWindow = false;
                return true;
            });
        }

        if ($.browser.msie) {
            $("a[href^='javascript:']").bind('click.' + ns, function(){
                fj.util._isLockWindow = false;
                return true;
            });
        }

        return true;
    },

    /**
     * lockWindow の処理をキャンセルさせる
     *
     * @param {void}
     * @returns {void}
     */
    unlockWindow: function(){
        fj.util._isLockWindow = false;
    },

    initAutoComplete: function(){

        var listData;

        if (!listData){
            $.getJSON( "/api/word/", function(data){
                listData = data;
            });
        }

        $('.fj-autoComplete').autocomplete({
            source: function(request, response){

                var re = new RegExp('^(' + request.term.toLowerCase() + ')'), list = [];

                $.each(listData, function(i, values) {
                    if(values[0] && values[0].match(re) || values[1] && values[1].match(re)) {
                        list.push(values[2]);
                    };
                });
                response(list.slice(0, 15));
            },
            autoFocus: true,
            delay: 10,
            minLength: 1,
            select: function(ev,ui){
                ga('send', 'event', 'auto-complete', 'click', ui.item.label);
            }
        })
    }

}); // end of fj.util


/**
 * @namespace
 * @name fj.text
 */
fj.namespace('fj.text', {

    /** @lends fj.text */

    /** @fields */
    entities: {
        '&': '&amp;',
        '"': '&quot;',
        "'": '&#39;',
        '<': '&lt;',
        '>': '&gt;'},

    /**
     * HTML文字列を実体参照に変換
     *
     * @example
     * fj.text.replaceEntity('<a href="?hoge&fuga"></a>');
     * // "&lt;a href=&quot;?hoge&amp;fuga&quot;&gt;&lt;/a&gt;"
     *
     * @param {String} text
     * @returns {String}
     */
    replaceEntity: function(text){
        text = text.replace(/(&|"|'|<|>)/g, function(match){
            return fj.text.entities[match];
        });
        return text;
    },

    /**
     * 実体参照をHTML文字列に変換
     *
     * @example
     * fj.text.replaceReference("&lt;a href=&quot;?hoge&amp;fuga&quot;&gt;&lt;/a&gt;");
     * // '<a href="?hoge&fuga"></a>'
     *
     * @param {String} text
     * @returns {String}
     */
    replaceReference: function(text){
        text = text.replace(/(&gt;|&lt;|&#39;|&quot;|&amp;)/g, function(match){
            for (var key in fj.text.entities) {
                if (fj.text.entities[key] === match) {
                    return key;
                }
            }
        });
        return text;
    },

    _emailAtom: "[a-zA-Z0-9_!#\\$\\%&'*+/=?\\^`{}~|\\-\\.]+",

    /**
     * 簡易メールアドレスチェック
     *
     * How do I check a valid mail address?
     * http://perldoc.perl.org/perlfaq9.html#How-do-I-check-a-valid-mail-address%3f
     *
     * @param {String} email
     * @returns {Boolean}
     */
    isEmail: function(email){
        var atom = fj.text._emailAtom,
            patternSource = ["^",
                             atom, // account
                             "@",
                             atom, // local
                             "\\.[a-zA-Z]+", // domain
                             "$"].join(""),
            pattern = new RegExp(patternSource);
        return pattern.test(email);
    }
}); // end of fj.text

$(document).ready(function() {
    $("a").bind("click", function() {
        try {
            var from = $(this).data('from');
            if (from) {
                jQuery.cookie('from', from, { expires: 0, path: '/' });
            }
        } catch (e) {}
    });
});

})(); // end anonymous
