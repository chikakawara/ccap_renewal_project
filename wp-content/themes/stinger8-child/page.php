<?php get_header(); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<div class="st-main" style="margin-right:0;">

			<div id="st-page" <?php post_class('post static-page'); ?>>
			<article>
					<!--ループ開始 -->
					<?php if (have_posts()) : while (have_posts()) :
					the_post(); ?>

						<?php if(!is_front_page()){ ?>
							<h1 class="entry-title">
								<div class="static-page-title">
									<?php the_title(); //タイトル ?>
									<!-- <span class="static-page-title__en">Something</span> -->
								</div></h1>
						<?php } ?>

					<div class="mainbox">

							<div class="entry-content">
								<?php the_content(); //本文 ?>
							</div>

							<?php //ページ改
									$defaults = array(
									'before'           => '<p class="tuzukicenter"><span class="tuzuki">' . __( '', 'default' ),
									'after'            => '</span></p>',
									'link_before'      => '&gt;&ensp;',
									'link_after'       => '&ensp;',
									'next_or_number'   => 'next',
									'separator'        => ' ',
									'nextpagelink'     => __( '続きを読む', 'default' ),
									'previouspagelink' => __( '前のページへ', 'default' ),
									'pagelink'         => '%',
									'echo'             => 1
									);
									wp_link_pages( $defaults );
							?>

					</div>







				<?php endwhile; else: ?>
					<p>記事がありません</p>
				<?php endif; ?>
				<!--ループ終了 -->

			</article>

				<?php if ( comments_open() || get_comments_number() ) {
					comments_template(); //コメント
				} ?>

				<?php get_template_part( 'newpost-page' ); //最近のエントリ ?>

			</div>
			<!--/post-->

		</div><!-- /st-main -->
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div>
<!--/#content -->
<?php get_footer(); ?>
