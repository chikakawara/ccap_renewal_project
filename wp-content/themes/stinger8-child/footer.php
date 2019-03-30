</div><!-- /contentw -->
<!-- ページトップへ戻る -->
<div class="pagetop-wrapper static">
	<a href="" id="pageTop">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pagetop.png" alt="トップへ戻る">
	</a>
</div>
<!-- ページトップへ戻る　終わり -->
<footer>
<div id="footer">
<div id="footer-in">
	<?php //フッターメニュー
		$defaults = array(
			'theme_location'  => 'secondary-menu',
			'container'       => 'div',
			'container_class' => 'footermenubox',
			'menu_class'      => 'footermenust',
			'depth'           => 2,
		);
		wp_nav_menu( $defaults );
	?>

	<div class="footer-utility-box">
		<div class="footer-utility-box__top">
			<?php wp_nav_menu( array(
				'theme_location' => 'utility_footer_top',
				'menu_class' => 'menu-utility__footer-top'
			) ); ?>
			<div class="link-twitter">
				<a href="//twitter.com/ccap27117136" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="twitter">
				</a>
			</div>
		</div>
		<?php wp_nav_menu( array(
			'theme_location' => 'utility_footer_bottom',
			'menu_class' => 'menu-utility__footer-bottom'
		) ); ?>
	</div>

</div>
<div class="footer-bottom-box">
	<div class="footer-bottom-inner">
		<ul class="footer-bottom-links">
			<li><a href="./policy">プライバシーポリシー</a></li>
		</ul>
		<ul class="footer-bottom-banners">
			<li class="banner-orangeribbon">
				<a href="//www.orangeribbon.jp/" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bn_orangeribbon.png" alt="子ども虐待防止　オレンジリボン運動">
				</a>
			</li>
			<li class="banner-servicegrant">
				<a href="//www.servicegrant.or.jp/" target="_blank">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bn_servicegrant.png" alt="donated by SERVICE GRANT">
				</a>
			</li>
		</ul>
		<div class="footer-bottom-copy">
			<p class="copy">Copyright&copy;
				<?php bloginfo( 'name' ); ?>
				,
				<?php echo date( 'Y' ); ?>
				All Rights Reserved.</p>
		</div>

	</div>
</div>
</div>
</footer>
</div>
<!-- /#wrapperin -->
</div>
<!-- /#wrapper -->
</div><!-- /#st-ami -->
<?php wp_footer(); ?>
</body></html>
