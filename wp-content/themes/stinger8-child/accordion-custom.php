<?php
/**
 * アコーディオンメニュー
 */
 ?>
<div style="text-align:left;">
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
