<?php get_header(); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<main <?php st_text_copyck(); ?>>
			<article>
				<aside>

					<?php //記事一覧
					if( $GLOBALS["stdata44"]  === ''){ //新着一覧非表示で無い場合
						if ( trim( $GLOBALS["stdata9"] ) !== '' && !is_paged() ) { //固定記事の挿入の場合
							if ( trim( $GLOBALS["stdata66"] ) !== '' ) { //新着記事の文字を挿入
								$new_entryname = esc_html( $GLOBALS["stdata66"] );
							} else {
								$new_entryname = 'NEW ENTRY';
							}
							?>
                  					<p class="n-entry-t"><span class="n-entry"><?php echo $new_entryname; ?></span></p>
						<?php } ?>

						<?php get_template_part( 'itiran' ); ?>
						<?php get_template_part( 'st-pagenavi' ); //ページナビ読み込み ?>
					<?php } ?>

				</aside>

					<?php get_template_part( 'sns-top' ); //ソーシャルボタン読み込み ?>

					<?php if ( is_front_page() && is_active_sidebar( 13 ) ) { ?>
						<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 13 ) ) : else : //トップ下部のウィジェット ?>
						<?php endif; ?>
					<?php } ?>

			</article>
		</main>
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div>
<!-- /#content -->
<?php get_footer(); ?>
