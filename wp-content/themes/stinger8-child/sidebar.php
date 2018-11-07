<?php

		global $wp_query;
		if( isset ( $wp_query ) ){
			if ( is_page() || is_front_page() ) {
			} else {

	?>
	<div id="side">
	<div class="st-aside">

		<?php if ( is_active_sidebar( 10 ) ) { ?>
			<div class="side-topad">
				<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 10 ) ) : else : //サイドバートップのみのウィジェット ?>
				<?php endif; ?>
			</div>
		<?php } ?>



		<?php if ( is_active_sidebar( 1 ) ) { ?>
			<div id="mybox">
				<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 1 ) ) : else : //サイドウイジェット読み込み ?>
				<?php endif; ?>
			</div>
		<?php } ?>

	</div>
</div>
<!-- /#side -->
<?php }
} ?>
