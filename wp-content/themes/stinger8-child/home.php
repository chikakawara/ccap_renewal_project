<?php get_header(); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<div class="st-main">
			<article>
				<div class="st-aside">
					<?php get_template_part( 'itiran' ); ?>
					<?php get_template_part( 'st-pagenavi' ); //ページナビ読み込み ?>
				</div>
			</article>
		</div>
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div>
<!-- /#content -->
<?php get_footer(); ?>
