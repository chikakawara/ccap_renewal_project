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
