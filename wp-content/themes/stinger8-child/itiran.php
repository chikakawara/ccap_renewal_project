<?php
/**
 * トップやアーカイブ一覧
 */
?>
<div class="kanren list-box--wrapper">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<dl class="clearfix list-box">
			<dt><a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
						<?php the_post_thumbnail( 'thumbnail' ); ?>
					<?php else: // サムネイルを持っていないときの処理 ?>

					<?php endif; ?>
				</a></dt>
			<dd>
				<p class="kanren-t"><a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a></p>

				<div class="blog_info">
					<p>
						<span class="pcone">
							<?php the_category( ' ' ) ?>
							<?php the_tags( '<i class="fa fa-tags"></i>&nbsp;', ', ' ); ?>
          	</span>
						&nbsp;
						<?php the_time( 'Y/m/d' ); ?>
					</p>
				</div>
				<div class="smanone2 excerpt">
					<?php the_excerpt(); //抜粋文 ?>
				</div>
			</dd>
		</dl>
	<?php endwhile;
	else: ?>
		<p>記事がありません</p>
	<?php endif; ?>
</div>
