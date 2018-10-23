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
