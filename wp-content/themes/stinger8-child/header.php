<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="i7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
	<!--<![endif]-->
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta charset="<?php bloginfo( 'charset' ); ?>" >
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
		<meta name="format-detection" content="telephone=no" >

		<?php if ( is_home() && !is_paged() ): ?>
			<meta name="robots" content="index,follow">
		<?php elseif ( is_search() or is_404() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( !is_category() && is_archive() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( is_paged() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php endif; ?>

		<link rel="alternate" type="application/rss+xml" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" >
		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/js/html5shiv.js"></script>
		<![endif]-->
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
			<div id="st-ami">
				<div id="wrapper">
				<div id="wrapper-in">
					<header>
						<div id="headbox-bg">
							<div id="headbox">
									<div id="header-l">
									<!-- ロゴ又はブログ名 -->
										<div class="ccap-logo">
											<a href="/">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="子どもの虐待防止センター">
											</a>
										</div>
										<!-- ロゴ又はブログ名ここまで -->
									</div><!-- /#header-l -->

									<div id="header-r">
										<div class="header-r__top">
											<!-- utility_top -->
											<?php wp_nav_menu( array( 'theme_location' => 'utility_top', 'menu_class' => 'menu-utility__header-top' ) ); ?>

											<!-- links -->
											<div class="link-orange-ribbon">
											  <a href="" target="_blank">オレンジリボン運動</a>
											</div>
											<div class="link-clinic">
											  <a href="">クリニック（開設予定）</a>
											</div>
											<div class="link-twitter"><a href="" target="_blank">twitter</a></div>
										</div>
										<div class="header-r__bottom">
											<!-- utility_bottom -->
											<?php wp_nav_menu( array( 'theme_location' => 'utility_bottom', 'menu_class' => 'menu-utility__header-bottom' ) ); ?>
											<div class="telno">
												<a href="/">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tel.png" alt="聞かせてください、子育ての悩み。03-5300-2990">
												</a>
											</div>

											<!-- custom accordion -->
											<div class="accordion-custom">
												<div id="nav-drawer">
													<input id="nav-input" type="checkbox" class="nav-unshown">
													<label id="nav-open" for="nav-input"><span></span></label>
													<label class="nav-unshown" id="nav-close" for="nav-input"></label>
		      								<div id="nav-content">
														<?php get_template_part( 'accordion-custom' ); //アコーディオンの中身 ?>
													</div>
												</div>
											</div>

										</div>

									</div><!-- /#header-r -->
							</div><!-- /#headbox -->
							<div class="telno__forsp">
								<a href="/">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tel.png" alt="聞かせてください、子育ての悩み。03-5300-2990">
								</a>
							</div>
						</div><!-- /#headbox-bg -->

						<div id="gazou-wide">
							<?php get_template_part( 'st-header-menu' ); //カスタムヘッダーメニュー ?>

							<?php if ( (get_header_image()) && (is_front_page()) ) : //カスタムヘッダー ?>
							<div id="st-headerbox">
								<div id="st-header">
									<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
								</div>
							</div>
							<?php endif;?>

						</div>
						<!-- /gazou -->

					</header>
					<div id="content-w">
