$(function(){

  /**
  *
  * メニュー開閉
  * クリック要素にfj-dropdown-toggle とidを指定
  * 開閉要素にfj-dropdown-menuとaria-labelledby=idを指定
  *
  */
  var $target     = $('.fj-dropdown-toggle'),
      $toggleMenu = $('.fj-dropdown-menu'),
    openClass     = 'hover',
    closeClass    = 'hidden';

  $target.click(function(ev){


    var _self      = this;
    var target_id  = $(this).prop('id');
    var $personal  = $('[aria-labelledby='+target_id+']');
    $toggleMenu.not($personal).removeClass(openClass).addClass(closeClass);

    if ($personal.hasClass(closeClass)) {
      $('body').one('click', function(){
        $personal.removeClass(openClass)
                 .addClass(closeClass);
      });
    }
    $personal.toggleClass(closeClass)
             .toggleClass(openClass);

    return false;
  });

  // 以下の様なチェックボックスをトグルするとname=hogeなチェックボックス全てにチェックが入る
  // <input type=checkbox class="fj-check-all" data-target="hoge">
  $(".fj-check-all").on("change", function() {
    target = $(this).data("target");
    if($(this).is(':checked')){
      $('[name='+target+']').prop('checked', true);
    }
    else {
      $('[name='+target+']').prop('checked', false);
    }
  });

  $('a').on('click', function() {
    var from = $(this).data('from');
    if (from){
      Cookies.set('from', from);
    }
  });

  $('a.fj-add-to-bookmark').on('click', function(e) {
    e.preventDefault();
    var _self       = $(this);
    if ( $(_self).hasClass('btn-disabled') ){ return };

    var jobId       = $(_self).data('jobId');
    var uniqKey     = $(_self).data('uniqKey');
    var action      = $(_self).data('action');
    var label       = $(_self).data('label');

    $.get("/fj/add_to_bookmark_ajax.cgi", {job_id: jobId, unique_key: uniqKey},
      function(data){
        if (data){
          //disable bookmark button
          $('a.fj-add-to-bookmark[data-job-id='+jobId+']').addClass('btn-disabled');
          //pageTracker._trackEvent('add_bookmark', action, label);

        }
    })
  });

  //没登录,模态提示框
  $('.fj-show-login-box').on('click', function(e) {
    e.preventDefault();

    var _self       = $(this);
    var action      = $(_self).data('action');
    var label       = $(_self).data('label');

    //pageTracker._trackEvent('add_bookmark', action, label);

    $('.fj-login-modal').plainModal('open', {
      closeClass: 'fj-login-modal-close',
      overlay: {fillColor: '#000', opacity: 0.5}
    });
    $('.fj-login-modal-login-link').attr( 'href','/login.pl?u=1&next_url=' + 
      encodeURIComponent(location.pathname + location.search) );
  });

  $('a.fj-send-meet-mail').on('click', function(e) {
    e.preventDefault();
    var _self    = $(this);


    if ( $(_self).hasClass('btn-disabled') ){ return };

    var uniqKey  = $(_self).data('uniqKey');
    var jobId    = $(_self).data('jobId');
    var keitai1  = $(_self).data('keitai1');
    var keitai2  = $(_self).data('keitai2');
    var keitai3  = $(_self).data('keitai3');
    var postFrom = '';

    var form             = $('.bookmark-form');
    var sendingContents  = $('.bookmark-sending');
    var completeContents = $('.bookmark-complete');

    $('.bookmark-modal').plainModal('open', {
      overlay: {fillColor: '#000', opacity: 0.5},
      closeClass: 'fj-login-modal-close',
      beforeclose: function(e){
        //init
        if (!sendingContents.hasClass('hidden')){
            e.preventDefault();
            return;
        }

      },
      close: function(e){
        form.removeClass('hidden');
        sendingContents.addClass('hidden');
        completeContents.addClass('hidden');
      }
    });

    form.find('label').remove();

    if (uniqKey && jobId){
      form.find('[name=jobID]').val(jobId);
      form.find('[name=uniq_key]').val(uniqKey);
      form.find('[name=via]').val(postFrom);
      for (i = 1; i <= 3; i++){
        eval("var keitai = keitai" + i + ";");
        if (keitai){
          form.find('._keitai' + i).attr({name: jobId + '_keitai', id: jobId + String(i)}).after(
            '<label class="ml5" for=' + jobId + String(i) + '>' + keitai + '</label>'
          );

          form.find('._keitai' + i).show();
        }
        else {
          form.find('._keitai' + i).hide();
        }
      }
    }
  });

  $('a.fj-send-offer').on('click', function(e){
    e.preventDefault();
    var _self = this;
    var form  = $('form[name=send_meet_form]');
    var jobId = form.find('[name=jobID]').val();

    var form             = $('.bookmark-form');
    var sendingContents  = $('.bookmark-sending');
    var completeContents = $('.bookmark-complete');

    $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: form.serialize(),
      beforeSend: function() {
        var $meet_btn = $('a.fj-send-meet-mail[data-job-id='+jobId+']');
        $meet_btn.addClass('btn-disabled');
        form.addClass('hidden');
        sendingContents.removeClass('hidden');
      },
      success: function(json){
        if (json.response == 403){
          alert("すでに送信されています。");
        }
        else if (json.response == 400){
          alert("エラーが発生しました。");
        }
        else {
            sendingContents.addClass('hidden');
            completeContents.removeClass('hidden');
        }
      }
    });
  });

});

function initAutoComplete(){

  var listData;

  if (!listData){
    $.getJSON( "/api/word/", function(data){
        listData = data;
    });
  }

  $('.fj-auto-complete').autocomplete({
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
