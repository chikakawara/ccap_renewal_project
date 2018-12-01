// pagetop btn
$(function() {
  $('#pageTop').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 500, 'swing');
  });
});

// pageTopBtn表示切替
$(function() {
  var pageTopBtn = $('.pagetop-wrapper');
  var currentY, targetY;
  var footerHeight = $('footer').height();
  var windowHeight = $(window).height();
  var documentHeight = $(document).height();
  var pagetopBtnHeight = 60;
  var pagetopBtnBottomMargin = 20;

  // footer上部のY座標
  var footerTopY = documentHeight - footerHeight;

  // documentHeightが小さい場合は切替を行わない
  if (documentHeight - windowHeight < 700) {
    pageTopBtn.removeClass('fixed').addClass('static');
    $('#footer').css('margin-top', 0);
  } else {
    // 初期状態ではpageTopBtnは隠しておく
    pageTopBtn.addClass('fixed').hide();
    $(window).scroll(function() {
      if (currentY >= 50) {
        setTimeout(function(){
          pageTopBtn.fadeIn('slow');
        }, 1000);
      }
      // 現在位置
      currentY = $(window).scrollTop();
      // pagetop btnをstaticに切り替える位置
      targetY = documentHeight - footerHeight - windowHeight - pagetopBtnHeight;

      if (currentY >= targetY) {
        pageTopBtn.removeClass('fixed').addClass('static');
        $('#footer').css('margin-top', 0);
      } else {
        pageTopBtn.addClass('fixed').removeClass('static');
        $('#footer').css('margin-top', pagetopBtnHeight + pagetopBtnBottomMargin + 'px');
      }
      if (currentY < 50) {
        setTimeout(function(){
          pageTopBtn.fadeOut('slow');
          $('#footer').css('margin-top', pagetopBtnHeight + pagetopBtnBottomMargin + 'px');
        }, 1000);
      }
    });
  }
});

// accordion
$(function() {
  $('.js-accordion-box dd').hide();
  $('.js-accordion-box dt').on('click', function() {
    if($(this).siblings('dd').is(':hidden')) {
      $(this).addClass('open').siblings('dd').slideDown('fast');
    } else {
      $(this).removeClass('open').siblings('dd').slideUp('fast');
    }
  });
});
