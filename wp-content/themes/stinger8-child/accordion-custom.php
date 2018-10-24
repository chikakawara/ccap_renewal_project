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
  <?php
    $spsubmenu02 = array(
      'theme_location' => 'smartphone-submenu02'
    );
   ?>
  <?php wp_nav_menu( $spsubmenu02 ); ?>
  <?php
    $spsubmenu03 = array(
      'theme_location' => 'smartphone-submenu03'
    );
   ?>
  <?php wp_nav_menu( $spsubmenu03 ); ?>
</div>
<a href="" target="_blank"><div class="link-orange-ribbon">
  オレンジリボン運動
</div></a>
<a href=""><div class="link-clinic">
  クリニック（開設予定）
</div></a>
