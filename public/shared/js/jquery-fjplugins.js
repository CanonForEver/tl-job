/**
 * @fileOverview
 * <pre>
 * objects:
 *
 * - jQuery plugins
 * </pre>
 */

(function($){


(function(){ // start fj(Bind|Unbind)Beforeunload

var handlers = [];

var onBeforeunload = function(){
    for (var i = 0, l = handlers.length; i < l; i++) {
        var handler = handlers[i];
        var returnValue = handler.fn.apply(handler.context, arguments);
        if (returnValue) {
            return returnValue;
        }
    }
};

/**
 * onbeforeunload にイベントを設定
 * <pre>
 * 複数のイベントを登録できる様に拡張
 * </pre>
 *
 * @function
 * @name jQuery.fn.fjBindBeforeunload
 *
 * @example
 * var $window = $(window);
 * $window.fjBindBeforeunload({fn: function(){
 *     if (location.href === 'http://example.com/foo/') {
 *         return '編集中の内容が破棄されますがよろしいですか?';
 *     }
 * }});
 * $window.fjBindBeforeunload({fn: function(){
 *     if (location.href === 'http://example.com/bar/') {
 *         return '別画面へ移動しますか?';
 *     }
 * }});
 *
 * @param {Object} option
 * <pre>
 * {Function} fn(ev)
 * {Object} context
 * </pre>
 * @returns {jQuery}
 */
$.fn.fjBindBeforeunload = function(option){
    option = $.extend({
        fn: function(){},
        context: null}, option);

    this.each(function(){
        if (!this.onbeforeunload) {
            this.onbeforeunload = onBeforeunload;
        }
    });
    handlers.push(option);
    return this;
};

/**
 * $.fn.fjBindBeforeunload で bind したイベントを削除する
 * <pre>
 * bind した要素は指定できない
 * </pre>
 *
 * @function
 * @name jQuery.fn.fjUnbindBeforeunload
 *
 * @example
 * var $window = $(window);
 * var callback = function(){
 *     $window.fjUnbindBeforeunload({fn: callback});
 *     return "キャンセルすると次から表示されなくなります。";
 * };
 * $window.fjBindBeforeunload({fn: callback});
 *
 * @param {Object} option
 * <pre>
 * {Function} fn(ev)
 * {Object} context
 * </pre>
 * @returns {jQuery}
 */
$.fn.fjUnbindBeforeunload = function(option){
    option = $.extend({
        fn: function(){},
        context: null}, option);

    for (var i = 0, l = handlers.length; i < l; i++) {
        if (handlers[i].fn === option.fn
            && handlers[i].context === option.context) {

            delete handlers[i];
        }
    }
};

})(); // end fj(Bind|Unbind)Beforeunload


/**
 * hover 要素を初期化。
 * <pre>
 * 内部で $.live を利用しているので、
 * 新しく生成した DOM にも適用される
 * </pre>
 *
 * @function
 * @name jQuery.fn.fjInitHoverClass
 *
 * @example
 * $('.hoverTarget').fjInitHoverClass({hoverClass: 'highlight'});
 *
 * @param {Object} [option]
 * <pre>
 * {String} [hoverClass]
 * {Function} [onHover($ev)]
 * {Function} [onUnHover($ev)]
 * </pre>
 * @returns {jQuery}
 * @see jQuery.fjInitHoverClass
 */
$.fn.fjInitHoverClass = function(option){
    option = $.extend({}, $.fn.fjInitHoverClass.defaults, option);
    var name = 'fjInitHoverClass';

    $(this)
        .live('mouseover.' + name, function($ev){
            if (!option.onHover($ev)) {
                return true;
            }
            $(this).addClass(option.hoverClass);
            return true;
        })
        .live('mouseout.' + name, function($ev){
            if (!option.onUnHover($ev)) {
                return true;
            }
            $(this).removeClass(option.hoverClass);
            return true;
        });
    return this;
};
$.fn.fjInitHoverClass.defaults = {
    hoverClass: 'hover',
    onHover: function(){return true},
    onUnHover: function(){return true}};
/**
 * hover 要素を初期化
 *
 * @function
 * @name jQuery.fjInitHoverClass
 *
 * @example
 * $.fjInitHoverClass();
 * $.fjInitHoverClass({hoverClass: 'hover'});
 * $.fjInitHoverClass('.hoverTarget', {
 *     onHover: function(){
 *         alert('hover');
 *     },
 *     onUnHover: function(){
 *         alert('unhover');
 *     }
 * });
 *
 * @param {mixed}
 * @returns {jQuery}
 * @see jQuery.fn.fjInitHoverClass
 */
$.fjInitHoverClass = function(){
    var target, option;
    if (arguments.length === 0 || typeof arguments[0] === 'object') {
        target = '._hover';
        option = arguments[0];
    } else {
        target = arguments[0];
        option = arguments[1];
    }
    $target = $(target);
    $target.fjInitHoverClass(option);
    return $target;
};


/**
 * 2重送信防止
 * <pre>
 * jQuery の外部プラグインを若干カスタマイズ。
 *
 * base)
 * http://www.evanbyrne.com/article/jquery-disable-on-submit-plugin
 * </pre>
 *
 * @function
 * @name jQuery.fn.fjDisableOnSubmit
 *
 * @example
 * $('form').fjDisableOnSubmit();
 * $('form').fjDisableOnSubmit({target: 'button, input[type=submit]'});
 *
 * @param {Object} option
 * <pre>
 * target {String} selector
 * </pre>
 * @returns {jQuery}
 */
$.fn.fjDisableOnSubmit = function(option){
    option = $.extend({}, $.fn.fjDisableOnSubmit.defaults, option);
    var name = "fjDisableOnSubmit";
    var $this = $(this);

    $this.bind('submit.' + name, function(){
        $this.find(option.target).attr('disabled', 'disabled');
    });
    return this;
};
$.fn.fjDisableOnSubmit.defaults = {
    target: [
        'input[type=submit]',
        'input[type=image]',
        'input[type=reset]',
        'input[type=button]',
        'button'].join(',')
};

/**
 * jQuery.fn.one('click') の IE6 対応用ラッパー
 *
 * @function
 * @name jQuery.fn.fjClickOne
 * @param {Function} callback
 * @param {Object} [option]
 * <pre>
 * {String} [namespace='.fjClickOne']
 * {Object} [context=null]
 * </pre>
 * @returns {jQuery}
 */
$.fn.fjClickOne = function(callback, option){
    option = $.extend({}, $.fn.fjClickOne.defaults, option);
    var $this = $(this);
    $this.one('click' + option.namespace, function(){
        return callback.apply(option.context, arguments);
    });
    return $this;
};
$.fn.fjClickOne.defaults = {
    namespace: '.fjClickOne',
    context: null};


/**
 * コメントだけの script タグ内から内容を取得
 *
 * @function
 * @name jQuery.fn.fjGetScriptComment
 * @params {void}
 * @returns {String}
 */
$.fn.fjGetScriptComment = function(){
    var html = this.html() || '';
    var comment = html.replace(/^\s*\/\*\s*/, "")
                      .replace(/\s*\*\/\s*$/, "");
    return comment;
};


/**
 * position=relative 要素用のバルーン表示処理
 *
 * @function
 * @name jQuery.fn.fjInitRelativeBalloon
 * @param {Object} option
 * <pre>
 * {String} [balloon='.balloon'] バルーンのセレクタ
 * </pre>
 * @returns {jQuery}
 */
$.fn.fjInitRelativeBalloon = function(option){
    option = $.extend({}, $.fn.fjInitRelativeBalloon.defaults, option);

    var $this = $(this);
    var $balloon = $this.find(option.balloon);

    $this
        .mouseover(function($ev){
            $balloon.show();
        })
        .mouseout(function($ev){
            $balloon.hide();
        });

    $balloon
        .css('left', - ($balloon.width() / 2) + ($this.width() / 2))
        .hide();
    return this;
};
$.fn.fjInitRelativeBalloon.defaults = {
    balloon: '.balloon'
};


/**
 * リンクの href を window.open で開くようにする
 * <pre>
 * window.open - MDC Doc Center
 * https://developer.mozilla.org/ja/DOM/window.open
 * </pre>
 *
 * @function
 * @name jQuery.fn.fjSetWindowOpen
 *
 * @example
 * $('._windowOpen').fjSetWindowOpen({
 *     name: 'newWindow',
 *     width: 500,
 *     height: 800});
 *
 * @param {Object} [option] window.open のパラメータをオブジェクトにしたもの。ウィンドウ名を指定する場合は name を利用する。
 * @returns {jQuery}
 */
$.fn.fjSetWindowOpen = function(option){
    option = $.extend({name: null}, option);
    var name = option.name;
    delete option.name;

    var optionArray = [];
    for (var i in option) {
        optionArray.push(i + '=' + option[i]);
    }
    var optionStr = optionArray.join(', ');

    var $this = $(this);
    $this.bind('click.fjSetWindowOpen', function($ev){
        var href = $this.attr('href');
        window.open(href, name, optionStr);
        return false;
    });
    return this;
};


(function(){ // start fjSetPulldown

var openPulldown = function($pulldown, option){
    if (option.slide > 0) {
        $pulldown.slideDown(option.slide);
    } else {
        $pulldown.show();
    }
};
var closePulldown = function($pulldown, option){
    if (option.slide > 0) {
        $pulldown.slideUp(option.slide);
    } else {
        $pulldown.hide();
    }
};
var pulldownElements = [];

/**
 * プルダウンを設定する
 *
 * @function
 * @name jQuery.fn.fjSetPulldown
 *
 * @example
 * $('.pulldownOpen').fjSetPulldown({
 *     pulldown: '.pulldown',
 *     onClick: function($ev){
 *         var $target = $($ev.target);
 *         alert($target.html());
 *         return true;
 *     }
 * });
 *
 * @param {Object} option
 * <pre>
 * {String|Element} pulldown            プルダウン要素
 * {String|Element} [pulldownItem="li"] プルダウンのアイテム要素
 * {Number} [slide=0]                  スライドのアニメーションミリ秒。
 * {Boolean} [singleOpen=true]         単一のプルダウンのみ開く
 * {Function} [onOpen($ev)]            プルダウンを開いた際のコールバック
 * {Function} [onClose($ev)]           プルダウンを閉じた際のコールバック
 * {Function} [onClick($ev)]           アイテム要素をクリックした際のコールバック。false を返すと onClose が実行されない。
 * </pre>
 * @returns {jQuery}
 */
$.fn.fjSetPulldown = function(option){
    option = $.extend({}, $.fn.fjSetPulldown.defaults, option);
    var name = 'fjSetPulldown';

    var $this = $(this);
    pulldownElements.push($this);
    var $pulldown = $(option.pulldown);
    $this.data('pulldown', $pulldown);
    var $items = $pulldown.find(option.pulldownItem);

    $this.bind('click.' + name, function($ev){

        if ($pulldown.is(':visible')) {
            closePulldown($pulldown, option);
            return option.onClose($ev);
        }

        openPulldown($pulldown, option);
        if (option.singleOpen) {
            // 自分以外のプルダウンを閉じる
            $.each(pulldownElements, function(i){
                if (this !== $this) {
                    closePulldown(this.data('pulldown'), option);
                    var $ev = $.Event('click');
                    $ev.target = this.get(0);
                    return option.onClose($ev);
                }
            });
        }
        return option.onOpen($ev);
    });

    $items.bind('click.' + name, function($ev){
        if (!option.onClick($ev)) {
            return true;
        }
        $pulldown.hide();
        return option.onClose($ev);
    });

    $(document).bind('click.' + name, function($ev){
        if (!$pulldown.is(':visible')) {
            return true;
        }
        var isPulldownChild = false;
        $pulldown.find('*').each(function(){
            if ($ev.target === this) {
                isPulldownChild = true;
            }
        });
        if (isPulldownChild) {
            return true;
        }
        closePulldown($pulldown, option);
        var $ev = $.Event('click');
        $ev.target = $this.get(0);
        return option.onClose($ev);
    });

    return $this;
};
$.fn.fjSetPulldown.defaults = {
    pulldown: null,
    pulldownItem: 'li',
    slide: 0,
    singleOpen: true,
    onOpen: function($ev){},
    onClose: function($ev){},
    onClick: function($ev){}};

})(); // end fjSetPulldown


/**
 * fixed を JavaScript で行う
 *
 * @function
 * @name jQuery.fn.fjSetFixed
 * @example
 * $('#toolbar').fjSetFixed({
 *     top: 100,
 *     left: 50});
 *
 * @param {Object} [option]
 * <pre>
 * {Number} [top] fixed する top の値
 * {Number} [left] fixed する left の値
 * {Number} [right] fixed する right の値
 * {Number} [bottom] fixed する bottom の値
 * {Number} [interval=100] 処理間隔
 * </pre>
 * @returns {Number} interval id
 * @see jQuery.fn.fjSetFixedCenter
 */
$.fn.fjSetFixed = function(option){
    option = $.extend({}, $.fn.fjSetFixed.defaults, option);
    var $this = $(this);

    $.fn.fjSetFixed.fix($this, option);
    return setInterval(function(){
        if ($this.is(":visible")) {
            $.fn.fjSetFixed.fix($this, option);
        }
    }, option.interval);
};
$.fn.fjSetFixed.fix = function(target, option){
    var $target = $(target),
        thisHeight = $target.height(),
        thisWidth = $target.width(),
        $window = $(window),
        $document = $(document),
        scroll = fj.util.getPageScroll(),
        css = {};

    if (typeof option.right !== 'undefined') {
        css.top = (scroll.y
                   + $window.height()
                   - thisHeight
                   - option.bottom) + 'px';
    }
    if (typeof option.bottom !== 'undefined') {
        css.left = (scroll.x
                    + $window.width()
                    - thisWidth
                    - option.right) + 'px';
    }
    if (typeof option.top !== 'undefined') {
        css.top = (scroll.y + option.top) + 'px';
    }
    if (typeof option.left !== 'undefined') {
        css.left = (scroll.x + option.left) + 'px';
    }
    $target.css(css);
};
$.fn.fjSetFixed.defaults = {
    interval: 100};


/**
 * 中央に fixed する
 *
 * @function
 * @name jQuery.fn.fjSetFixedCenter
 * @example
 * $('#dialog').fjSetFixedCenter({
 *     y: false,
 *     interval: 200,
 *     widthTarget: 'body'});
 *
 * @param {Object} [option]
 * <pre>
 * {Boolean} [x=true] x 軸を中央寄せにする場合 true
 * {Boolean} [y=true] y 軸を中央寄せにする場合 true
 * {Number} [interval=100] 処理間隔
 * {String|Element} [widthTarget] fixed の基準となる横幅を持つエレメント
 * {String|Element} [heightTarget] fixed の基準となる縦幅を持つエレメント
 * {Object} [animate=false] アニメーションで位置を調整する場合 true
 * </pre>
 * @returns {Number} interval id
 * @see jQuery.fn.fjSetFixed
 */
$.fn.fjSetFixedCenter = function(option){
    option = $.extend({}, $.fn.fjSetFixedCenter.defaults, option);
    var $this = $(this);

    $.fn.fjSetFixedCenter.fix($this, option);

    var interval = setInterval(function(){
        if ($this.is(":visible")) {
            $.fn.fjSetFixedCenter.fix($this, option);
        }
    }, option.interval);

    return interval;
};
$.fn.fjSetFixedCenter.fix = function(target, option){
    var $target = $(target),
        size = fj.util.getPageSize();

    if (option.widthTarget) {
        size.windowWidth = $(option.widthTarget).width();
    }
    if (option.heightTarget) {
        size.windowHeight = $(option.heightTarget).height();
    }
    var scroll = fj.util.getPageScroll();
    var css = {};
    if (option.x) {
        css.left = parseInt(
            scroll.x
            + (size.windowWidth / 2)
            - ($target.width() / 2)) + 'px';
    }
    if (option.y) {
        css.top = parseInt(
            scroll.y
            + (size.windowHeight / 2)
            - ($target.height() / 2)) + 'px';
    }

    if (option.animate) {
        if (!$target.is(':animated')) {
            $target.animate(css);
        }
        return;
    }
    $target.css(css);
};
$.fn.fjSetFixedCenter.defaults = {
    x: true,
    y: true,
    interval: 100,
    animate: false};


/**
 * 特定箇所までスクロールしたらフェードインさせる
 *
 * @function
 * @name jQuery.fn.fjSetFadeInPosition
 *
 * @param {Object} option
 * <pre>
 * {Number} y フェードインを開始するスクロール位置
 * {Number} [interval=100]
 * </pre>
 * @returns jQuery
 */
$.fn.fjSetFadeInPosition = function(option){
    var o = $.extend({}, $.fn.fjSetFadeInPosition.defaults, option),
        $this = $(this),
        $window = $(window),
        $document = $(document);

    setInterval(function(){
        var scrollTop = $document.scrollTop();
        if (scrollTop > o.y && $this.is(":not(:visible)")) {
            $this.fadeIn();
        } else if (scrollTop < o.y && $this.is(":visible")) {
            $this.fadeOut();
        }
    }, o.interval);

    return this;
};
$.fn.fjSetFadeInPosition.defaults = {
    interval: 100};


/**
 * プレースホルダーを設定する
 *
 * @function
 * @name jQuery.fn.fjSetPlaceholder
 *
 * @param {Object} [option]
 * <pre>
 * {String} [placeholder='入力']
 * </pre>
 * @returns {jQuery}
 */
$.fn.fjSetPlaceholder = function(option){
    option = $.extend({}, $.fn.fjSetPlaceholder.defaults, option);
    var name = 'fjSetPlaceholder';

    var $this = $(this);
    if ($this.val() && $this.val() !== option.placeholder) {
        return $this;
    }
    $this.val(option.placeholder);

    $this.one('click.' + name, function(){
        $this.val('');
        return true;
    });
    return $this;
};
$.fn.fjSetPlaceholder.defaults = {
    placeholder: '入力'};


/**
 * 入力要素に値を設定する
 *
 * @function
 * @name jQuery.fn.fjSetInputs
 * @example
 * $('form#login').fjSetInputs({
 *     email: 'test@example.com',
 *     password: 'password'});
 *
 * @param {Object} [values] 入力要素の name を key、value を値にしたオブジェクト
 * @returns {jQuery}
 */
$.fn.fjSetInputs = function(values){
    this.find(':input').each(function(){
        var $input = $(this);
        var value = values[$input.attr('name')];
        if (typeof value !== 'undefined') {
            $input.val(value);
        }
    });
    return this;
};


/**
 * 文字数チェックを行う
 *
 * @function
 * @name jQuery.fn.fjCheckInputLength
 * @example
 * $(':input[name=email]')
 *     .fjCheckInputLength({maxlength: 100})
 *     .bind('overmaxlength', function(){
 *         // maxlength を超えた際の処理
 *     })
 *     .bind('zerolength', function(){
 *         // 長さが 0 の場合
 *     })
 *     .bind('unovermaxlength', function(){
 *         // それ以外の場合
 *     });
 *
 * @param {Object} option
 * <pre>
 * {Number} [maxlength=10] 入力可能な文字長
 * {Number} [checkInterval=100] 入力チェックの間隔
 * </pre>
 * @returns {jQuery}
 */
$.fn.fjCheckInputLength = function(option){
    option = $.extend({}, $.fn.fjCheckInputLength.defaults, option);
    var $this = $(this),
        name = 'fjCheckInputLength',
        lastlength = null,
        checkInput = function(){
            var length = $.trim($this.val()).length,
                limit = (option.maxlength - length),
                over = - limit;
            if (length === lastlength) {
                return true;
            }
            if (over < 0) {
                over = 0;
            }
            if (limit < 0) {
                limit = 0;
            }
            var params = {length: length, over: over, limit: limit};
            if (length === 0) {
                $this.trigger('zerolength', [params]);
            } else if (length > option.maxlength) {
                $this.trigger('overmaxlength', [params]);
            } else {
                $this.trigger('unovermaxlength', [params]);
            }
            lastlength = length;
            return true;
        };

    if (option.checkInterval) {
        clearInterval($this.data(name + 'Interval'));
        $this.data(
            name + 'Interval',
            setInterval(checkInput, option.checkInterval));
    }
    $this.bind('keyup.' + name, checkInput);
    return this;
};
$.fn.fjCheckInputLength.defaults = {
    maxlength: 10,
    checkInterval: 100};

/**
 * GoogleMaps を表示
 *
 * @function
 * @name jQuery.fn.fjGoogleMaps
 * @example
 * $('#map').fjGoogleMaps({
 *     zoom: 18,
 *     center: [35.69, 139.75]},
 *     markers: [{
 *         icon: '/img/icon.png',
 *         iconSize: [40, 40],
 *         iconAnchor: [10, 20],
 *         shadow: '/img/shadow.png',
 *         infoWindow: 'information'}]);
 *
 * @param {Object} option google.maps.Map() のパラメータに以下を追加
 * <pre>
 * {String}   [mapType='ROADMAP'] マップの種別。google.maps.MapTypeId のキー。
 * {Array}    [markers=[]]        マーカー情報の配列
 *   {Array}  [position]          指定しない場合 option.center と同じ
 *   {String} [icon]              アイコン画像URL
 *   {Array}  [iconSize]          アイコンサイズ
 *   {Array}  [iconAnchor]        アイコンアンカー位置
 *   {String} [shadow]            影画像URL
 *   {Array}  [shadowSize]        影サイズ
 *   {Array}  [shadowAnchor]      影アンカー位置
 *   {String} [infoWindow]        情報ウィンドウのコンテンツ
 * </pre>
 * @returns {jQuery}
 */
$.fn.fjGoogleMaps = function(option){
    var $this = $(this);

    option = $.extend({}, $.fn.fjGoogleMaps.defaults, option);

    if (!google || !google.maps) {
        $this.html('Google Maps API not found.');
        return $this;
    }

    var cast = $.fn.fjGoogleMaps._cast;

    var markers = option.markers;
    delete option.markers;

    this.map = new google.maps.Map(
        $this.get(0),
        $.extend({}, option, {
            center: cast('LatLng', option.center),
            mapTypeId: google.maps.MapTypeId[option.mapType]}));

    this.markers = [];
    var self = this;

    $.each(markers, function(i, markerOption){
        var realOption = {
            map: self.map,
            position: cast(
                'LatLng',
                (markerOption.position || option.center))};

        if (markerOption.icon) {
            realOption.icon = new google.maps.MarkerImage(
                markerOption.icon,
                cast('Size', markerOption.iconSize),
                cast('Point', [0, 0]),
                cast('Point', markerOption.iconAnchor));
        }
        if (markerOption.shadow) {
            realOption.shadow = new google.maps.MarkerImage(
                markerOption.shadow,
                cast('Size', markerOption.shadowSize),
                cast('Point', [0, 0]),
                cast('Point', markerOption.shadowAnchor));
        }
        var marker = new google.maps.Marker(realOption);
        self.markers.push(marker);

        if (!markerOption.infoWindow) {
            return;
        }

        var infoWindow = new google.maps.InfoWindow({
            content: markerOption.infoWindow});

        google.maps.event.addListener(marker, 'click', function() {
            infoWindow.open(self.map, marker);
        });
    });
};
$.fn.fjGoogleMaps._cast = function(type, value){
    if (value.constructor === google.maps[type]) {
        return value;
    }
    var a = value[0];
    var b = value[1];
    return new google.maps[type](a, b);
};
$.fn.fjGoogleMaps.defaults = {
    zoom: 17,
    mapType: 'ROADMAP',
    markers: [],
    mapTypeControl: true};

/**
 * カスタマイズしたスクロールバー
 *
 * <pre>
 * jScrollPane をカスタマイズしたもの
 *
 * /shared/js/jquery/jScrollPane/ 内にある以下のファイルを読み込んでおく必要がある。
 *
 * - jquery.mousewheel.js
 * - jquery.jscrollpane.min.js
 * - jquery.jscrollpane.css
 * - jquery.fjscrollpane.css
 *
 * Links:
 *
 * - http://www.kelvinluck.com/projects/jscrollpane-custom-cross-browser-scrollbars/
 * - http://takien.com/980/styling-scrollbar-to-look-like-facebook-scrollablearea-using-jscrollpane.php
 * </pre>
 *
 * @function
 * @name jQuery.fn.fjScrollPane
 * @param {Object} options jQuery.fn.jScrollPane のパラメータに以下を追加
 * <pre>
 * {String} [notScrollableVContainerClass='few'] 縦スクロールできない場合に .jspContainer に追加されるクラス
 * {Bool} [scrollOuterContents=false] スクロール位置を過ぎたら外側のコンテンツをスクロール
 * {String} [fade='slow'] スクロールバーのフェードのタイプ。
 * {String} [height='200px'] スクロール領域の高さ。
 * </pre>
 * @returns {jQuery}
 */
$.fn.fjScrollPane = function(options){
    var o = $.extend({
            horizontalGutter: 5,
            verticalGutter: 5,
            showArrow: false,
            // Original options
            scrollOuterContents: false,
            notScrollableVContainerClass: 'few',
            fade: 'slow',
            height: '200px'}, options),
        name = 'fjScrollPane';

    this
        .css({
            height: o.height,
            width: '100%',
            overflow: 'auto'})
        .jScrollPane(o);

    if (!this.data('jsp').getIsScrollableV()) {
        this.find('.jspContainer')
            .addClass(o.notScrollableVContainerClass);
    }

    var $jspDrag = this.find('.jspDrag').hide();

    this
        .bind('mouseenter.' + name, function(){
            $jspDrag.stop(true, true).fadeIn(o.fade);
        })
        .bind('mouseleave.' + name, function(){
            $jspDrag.stop(true, true).fadeOut(o.fade);
        });

    if (!o.scrollOuterContents) {

        var jspMousewheelEvent = $.fn.mwheelIntent ? 'mwheelIntent.jsp'
                                                   : 'mousewheel.jsp';
        this.find('.jspContainer')
            .bind(jspMousewheelEvent, function(){
                // jScrollPane の処理の処理を無視して
                // パネル上にマウスがある際はウィンドウをスクロールしない。
                return false;
            });
    }

    return this;
};

/**
 * クリックした際に指定した要素までスクロールする
 *
 * @example
 * $("#from").fjBindScrollTo(); // <a id="from" href="#to"></a>
 * $("#from").fjBindScrollTo("#to");
 * $("#from").fjBindScrollTo($("#to"));
 * $("#from").fjBindScrollTo({target: "#to", animate: false});
 *
 * @params {Object} [options]
 * <pre>
 * {String} [target]
 * {String} [animate=true]
 * {Function} [afterScroll()]
 * </pre>
 * @returns {jQuery}
 */
$.fn.fjBindScrollTo = function(options){
    var o = $.extend({
        animate: true,
        afterScroll: function(){}}, options);

    if (options && options.constructor !== Object) {
        o.target = options;
    }
    if (typeof o.target === "undefined") {
        o.target = this.attr("href");
    }

    var $target = $(document).find(o.target.selector || o.target);

    this.bind("click.fjBindScrollTo", function(){
        var scrollTo = $target.offset().top;
        if (o.animate) {
            $("html,body").animate({scrollTop: scrollTo}, o.afterScroll);
        } else {
            window.scrollTo(0, scrollTo);
        }
        return false;
    })

    return this;
};

})(jQuery); // end of root anonymous
