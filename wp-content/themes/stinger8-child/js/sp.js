// ナビ
$(function() {
  $('#nav-content .menu-global-container ul.sub-menu').hide();
  $('#nav-content .menu-global-container ul.menu > li > a').on('click', function(e){
    if($(this).parent().find('ul.sub-menu').is(':hidden')) {
      e.preventDefault();
      $(this).parent().addClass('open');
      $(this).parent().find('ul.sub-menu').slideDown('fast');
    } else {
      return true;
    }
  });
});

// smartphoneでのみ電話番号を有効にする
$(function() {
  if (!isSP())
    return;

  $('span[data-action=call]').each(function() {
    var $ele = $(this);
    $ele.wrap('<a href="tel:' + $ele.data('tel') + '"></a>');
  });
});

function isSP() {
  return (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('Android') > 0);
}
