<div id="headbox">
	<div id="header-l">
		<?php get_template_part( 'st-header-logo' ); //サイト名とディスクリプション ?>
	</div><!-- /#header-l -->
	<div class="headbox-inner">
		<div class="utility-box">
			<!-- utility_top -->
			<?php wp_nav_menu( array( 'theme_location' => 'utility_top', 'container_class' => 'menu-utility__top' ) ); ?>
			<!-- utility_bottom -->
			<?php wp_nav_menu( array( 'theme_location' => 'utility_bottom', 'container_class' => 'menu-utility__bottom' ) ); ?>
		</div>
		<div id="header-r">
			<?php if ( isset($GLOBALS['stdata43']) && $GLOBALS['stdata43'] === 'yes' ) {
				get_template_part( 'st-footer-link' ); //フッターリンク
			} ?>
			<?php get_template_part( 'st-header-widget' ); //電話番号とヘッダー用ウィジェット ?>
		</div><!-- /#header-r -->
		<?php get_template_part( 'st-accordion-menu' ); //アコーディオンメニュー ?>
	</div>
</div><!-- /#headbox clearfix -->
