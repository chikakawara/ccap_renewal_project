</div><!-- /contentw -->
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
			<div class="link-twitter"><a href="" target="_blank">twitter</a></div>
		</div>
		<?php wp_nav_menu( array(
			'theme_location' => 'utility_footer_bottom',
			'menu_class' => 'menu-utility__footer-bottom'
		) ); ?>
	</div>

	<p class="copy">Copyright&copy;
		<?php bloginfo( 'name' ); ?>
		,
		<?php echo date( 'Y' ); ?>
		All Rights Reserved.</p>

</div>
</div>
</footer>
</div>
<!-- /#wrapperin -->
</div>
<!-- /#wrapper -->
</div><!-- /#st-ami -->
<!-- ページトップへ戻る -->
	<div id="page-top"><a href="#wrapper" class="fa fa-angle-up"></a></div>
<!-- ページトップへ戻る　終わり -->
<?php wp_footer(); ?>
</body></html>
