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
  pageTopBtn.addClass('fixed').fadeOut();
  var currentY;
  var footerHeight = $('footer').height();
  var windowHeight = $(window).height();
  var documentHeight = $(document).height();
  var pagetopBtnHeight = 60;
  var pagetopBtnBottomMargin = 10;
  // footer上部のY座標
  var footerTopY = documentHeight - footerHeight;
  $(window).scroll(function() {
    pageTopBtn.fadeIn();
    // 現在位置
    currentY = $(window).scrollTop();
    // pagetop btnをstaticに切り替える位置
    targetY = documentHeight - footerHeight - windowHeight + pagetopBtnHeight + pagetopBtnBottomMargin;

    if (currentY >= targetY) {
      pageTopBtn.removeClass('fixed').addClass('static');
    } else {
      pageTopBtn.addClass('fixed').removeClass('static');
    }
    if (currentY == 0) {
      pageTopBtn.fadeOut();
    }

  });
});
