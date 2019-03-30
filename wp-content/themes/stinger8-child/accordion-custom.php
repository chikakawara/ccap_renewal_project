<?php
/**
 * アコーディオンメニュー
 */
 ?>
<div>
	<?php
	if ( has_nav_menu( 'smartphone-menu' ) ) :
		$defaults = array(
			'theme_location' => 'smartphone-menu',
		);
	else :
		$defaults = array(
			'theme_location' => 'primary-menu',
		);
	endif;?>
	<?php wp_nav_menu( $defaults ); ?>
	<div class="clear"></div>
</div>
<div class="st-submenu-box">
  <?php wp_nav_menu( array(
    'theme_location' => 'smartphone-submenu02',
    'menu_class' => 'menu-utility__sp-sub-top'
   ) ); ?>
 <?php wp_nav_menu( array(
   'theme_location' => 'smartphone-submenu03',
   'menu_class' => 'menu-utility__sp-sub-bottom'
  ) ); ?>
</div>
<div class="link-clinic">
  <a href="//yamaneko.ccap.or.jp/" target="_blank">クリニック（開設予定）</a>
</div>
<div class="link-orange-ribbon">
  <a href="//www.orangeribbon.jp/" target="_blank">オレンジリボン運動</a>
</div>
