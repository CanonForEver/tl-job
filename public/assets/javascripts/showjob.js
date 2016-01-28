$(function(){

  var $area = $('.fj-showjob-fixed-area');
  var $bookmarkAlert = $('.fj-bookmark-alert');

  function toggle_aria(){
    if ($(window).scrollTop() > 390) {
        $area.show();
    } else {
        $area.hide();
    }
  };

  //init
  toggle_aria();

  $(window).scroll(function(){
    toggle_aria();

    if ($(this).scrollTop() > 600) {
      $bookmarkAlert.fadeIn();
    } else {
      $bookmarkAlert.hide();
    };
  });

  if ($bookmarkAlert.size() > 0){

    window.setTimeout(function(){
      $bookmarkAlert.fadeIn();
    }, 1000);

    $('.fj-bookmark-alert-close').on('click', function(e){
      e.preventDefault();
      $.ajax({
        url: '/api/bookmark/delete_bookmark_promotion.pl',
        type: "POST",
        dataType: "json",
        data: "category=notice_bookmark_renewal2",
        success:function(){
          $bookmarkAlert.remove();
        }
      });
    });
  };

  $('.fj-showjob-apply-button').on('click', function(e){
    e.preventDefault();

    $('.fj-apply-form').submit();
  });

  $('.fj-contact-modal').on('mouseover', function(){
    $('.contact-company-balloon').show();
  }).on('mouseout', function(){
    $('.contact-company-balloon').hide();
  });

});
