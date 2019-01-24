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
  var currentY, lastY, targetY;
  var footerHeight = $('footer').height();
  var windowHeight = $(window).height();
  var documentHeight = $(document).height();
  var pagetopBtnHeight = 60;
  var pagetopBtnBottomMargin = 20;

  // footer上部のY座標
  var footerTopY = documentHeight - footerHeight;
  // pagetop btnをstaticに切り替える位置
  targetY = documentHeight - footerHeight - windowHeight - pagetopBtnHeight;

  // documentHeightが小さい場合は切替を行わない
  if (documentHeight - windowHeight < 700) {
    if (pageTopBtn.hasClass("fixed")) {
      pageTopBtn.removeClass('fixed').addClass('static');
    }
  } else {
    $(window).scroll(function() {
      // 現在位置
      currentY = $(window).scrollTop();
      if ((currentY >= 100) && (currentY > lastY)) {
        setTimeout(function(){
          pageTopBtn.fadeIn('slow');
        }, 1000);
      }
      if (currentY >= targetY) {
        if (pageTopBtn.hasClass("fixed")) {
          pageTopBtn.removeClass('fixed').addClass('static');
        }
      } else {
        if (!pageTopBtn.hasClass("fixed")) {
          pageTopBtn.addClass('fixed').removeClass('static');
        }
      }
      if ((currentY < 100) && (currentY < lastY)) {
        setTimeout(function(){
          pageTopBtn.fadeOut('fast');
        }, 1000);
      }
      // 直前のY座標
      lastY = currentY;
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

// gloval nav hover slidedown
$(function() {
  $('#menu-global-1 .menu-item').mouseenter(function() {
    $(this).children('.sub-menu').slideDown('fast');
  }).mouseleave(function() {
    $(this).children('.sub-menu').slideUp('fast');
  });
});
