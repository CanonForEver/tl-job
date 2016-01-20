var price_value = [
    [0],
    [800,1000,1200,1500,1800,2000],
    [6000,7500,9000,10000,12000,15000],
    [160000,200000,250000,300000,350000,400000],
    [2400000,3000000,3600000,4200000,5000000,6000000]
];

var price_name = [
    ["---"],
    ["800円","1000円","1200円","1500円","1800円","2000円"],
    ["6000円","7500円","9000円","10000円","12000円","15000円"],
    ["16万円","20万円","25万円","30万円","35万円","40万円"],
    ["240万円","300万円","360万円","420万円","500万円","600万円"]
];

var track_impression = function(img) {
  try {
    var $img = $(img);

    var obj  = $img.parents('div.fj-search-contents-box');
    var job  = $img.parent('a').attr('href');
    var rank = $('div.fj-search-contents-box').index(obj) + 1;
    var max  = $('.fj-search-max-count').text();
    pageTracker._trackEvent('impression', job, rank + '/' + max);
  }
  catch(e){}
};

function set_price(n){
  optlen = document.searchForm.ky_from.options.length;
  while(optlen > 0){
    clearOption(optlen);
    optlen = document.searchForm.ky_from.options.length;
  }

  if (price_value[n].length > 0) {
    for (i=0; i<price_value[n].length; i++) {
      document.searchForm.ky_from.options[i] = new Option(price_name[n][i],price_value[n][i]);
    }
  }
}

function clearOption(len){
  var i;
  for (i=0; i<len; i++) {
    document.searchForm.ky_from.options[i] = null;
  }
}

$(function(){

  try {
    $('.fj-lazyload').lazyload({
      load: function(e){ track_impression(this);}
    }).removeClass('.fj-lazyload');
  }
  catch(err) {
  }

  $('.fj-search-more-button').on('click', function(e){
    e.preventDefault();

    var $textLabel = $(this).find('span');
    var $conditionDetailText = $('#fj-search-condition-detail-text');
    var $conditionBox        = $('#fj-search-condition-box');

    if ( $conditionBox.hasClass('hidden') ){
      $conditionBox.removeClass('hidden');
      $conditionDetailText.addClass('hidden');
      $textLabel.text('閉じる').removeClass('plus').addClass('minus');
    }
    else {
      $conditionBox.addClass('hidden');
      $conditionDetailText.removeClass('hidden');
      $('body').scrollTop($conditionBox);
      $textLabel.text('さらに詳しく探す').removeClass('minus').addClass('plus');
    }
  });

  $('.fj-open-condition-modal').on('click', function(e){
    e.preventDefault();

    var $target = $('.search-modal');
    var $box    = $(this).data('box');
    var $submit = $('.fj-submit-modal-data');

    $target.find('ul').addClass('hidden');
    $target.find('ul.fj-search-modal-' + $box).removeClass('hidden');

    //sync checkbox
    $('.container-modal [name='+$box+']').prop('checked', false);
    $.each($('#fj-search-condition-box [name='+$box+']:checked'), function(){
      var value = $(this).val();
      $('.container-modal [name='+$box+'][value='+value+']').prop('checked', true);
    });

    $submit.one('click', function(e){
      e.preventDefault();

      var elements     = $('.fj-search-modal-'+$box).find('li');

      var checked_elem = $.grep(elements, function(row, i){
        return $(row).find('input').is(':checked');
      });

      if (checked_elem.length > 0){
        $('.fj-search-'+$box).html($(checked_elem).clone());
      } else {
        $('.fj-search-'+$box).html('<li class="pull-left mb5">こだわらない</li>');
      }

      $target.plainModal('close');
    });

    $target.plainModal('open', {
      overlay: {fillColor: '#000', opacity: 0.5},
      close: function(){
        $submit.off('click');
      }
    });

  });

});
