function initRecentlyUpdateBox(options){

  var $target     = $(options.target);
  var $api        = options.api;
  var $defaultAPI = '/api/job/get_pickup_job.pl';
  var $link       = $('.fj-recently-update-link');
  var loader      = '<div class="loader"><img src="/images/common/loader.gif" alt="読み込み中"></div>';

  $.ajax({
    url: $api,
    beforeSend: function(){
      $target.html(loader);
    }
  }).fail(function(){
    $target.html('Error');
  }).done(function(response){

    var count = $(response).filter('.box-job').length;

    if (count >= 9){
      $target.html(response);
    }
    else if (count < 6){
      $.ajax({
        url: $defaultAPI
      }).fail(function(){
        $target.html('Error');
      }).done(function(response){
        $target.html(response);
      });
    }
    else {
      $target.html($(response).filter('.box-job').splice(0, 6));
    }

    $link.removeClass('hidden');
  });
}

function initGetIndexR(){
  $.ajax({
    type:'POST',
    data:{type: 'bookmark'},
    url: '/api/get_index_r.pl',
    success: function(html){
      $(".fj-index-bookmark").html(html);
    }
  });

  $.ajax({
      type:'POST',
      data:{type: 'mail_prepare'},
      url: '/api/get_index_r.pl',
      dataType: 'json',
      success: function(data){
          $('.fj-index-mail-prepare').html(data.html);
      }
  });

}

$(function(){

  var iconCheckClass = "icon-check-md";


  //init
  $.each($('.fj-top-search-checkbox'), function(){
    $target = $(this);
    var $checkbox = $target.next('input');
    if ($checkbox.prop('checked')){
      $target.addClass(iconCheckClass);
      replaceTextLabel();
    }
  });

  $('.fj-top-search-checkbox').on('click', function(e){
    e.stopPropagation();
    e.preventDefault();
    var $checkbox = $(e.target).next('input');

    if ($checkbox.prop('checked')){
      uncheck($(e.target));

    }
    else {
      check($(e.target));
    }
  });

  $('.fj-top-search-checkCategory').on('click', function(e){
    e.stopPropagation();
    e.preventDefault();

    var $target      = $(e.target);
    var categoryName = $target.data('category');

    var $checkboxes = $('.fj-top-search-checkbox[data-category=' +categoryName+ ']');
    if ($target.hasClass(iconCheckClass)){
      uncheck($checkboxes);
      $target.removeClass(iconCheckClass);
    }
    else {
      check($checkboxes);
      $target.addClass(iconCheckClass);
    }
  });

  function check($target){
    var $checkbox = $target.next('input');

    $checkbox.prop("checked", true);
    $target.addClass(iconCheckClass);
    replaceTextLabel();
  }

  function uncheck($target){
    var $checkbox = $target.next('input');

    $checkbox.prop("checked", false);
    $target.removeClass(iconCheckClass);
    replaceTextLabel();
  }

  function replaceTextLabel(){

    var hash = { shokushu: '职位', kinmuchi: '工作地点', keitai: '雇佣方式' };

    for (var i in hash){
      $('.fj-text-'+i).text( $('input[name='+i+']:checked:first').prev().text().substr(0,8) || hash[i] );
    }

  }

  $('.fj-top-search-detail').on('click', function(e){
    e.preventDefault();
    var form = document.search_form;
    form.action = $(this).attr('href');
    form.submit();
  });

});
