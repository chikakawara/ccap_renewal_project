// pagetop btn
$(function() {
  $('#pageTop').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 500, 'swing');
  });
});

// footerの位置取得
$(function() {
  var pageTopBtn = $('.pagetop-wrapper');
  pageTopBtn.addClass('fixed').hide();
  var currentY, targetY;
  var footerHeight = $('footer').height();
  var windowHeight = $(window).height();
  var documentHeight = $(document).height();
  var pagetopBtnHeight = 60;
  var pagetopBtnBottomMargin = 10;
  var footerTopMargin = 20;
  // footer上部のY座標
  var footerTopY = documentHeight - footerHeight;
  $(window).scroll(function() {
    if (currentY >= 50) {
      setTimeout(function(){ pageTopBtn.fadeIn('slow'); }, 1000);
    }
    // 現在位置
    currentY = $(window).scrollTop();
    // pagetop btnをstaticに切り替える位置
    targetY = documentHeight - footerHeight - windowHeight + pagetopBtnHeight + pagetopBtnBottomMargin;

    if (currentY >= targetY) {
      pageTopBtn.removeClass('fixed').addClass('static');
      $('#footer').css('margin-top', footerTopMargin + 'px');
    } else {
      pageTopBtn.addClass('fixed').removeClass('static');
      $('#footer').css('margin-top', pagetopBtnHeight + pagetopBtnBottomMargin + footerTopMargin + 'px');
    }
    if (currentY < 50) {
      setTimeout(function(){ pageTopBtn.fadeOut('slow'); }, 1000);
    }
  });
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
