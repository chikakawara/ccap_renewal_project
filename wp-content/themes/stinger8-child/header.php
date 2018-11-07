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
											<a href="<?php echo esc_url( home_url() ); ?>">
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
												<span data-action="call" data-tel="0353002990">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tel.png" alt="聞かせてください、子育ての悩み。03-5300-2990">
												</span>
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
								<span data-action="call" data-tel="0353002990">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tel.png" alt="聞かせてください、子育ての悩み。03-5300-2990">
								</span>
							</div>
						</div><!-- /#headbox-bg -->

						<div id="gazou-wide">
							<?php get_template_part( 'st-header-menu' ); //カスタムヘッダーメニュー ?>

						<!-- /gazou -->

					</header>
					<div id="content-w">

						<!-- 固定ページ用ぱんくず -->
						<?php if( !is_front_page() && is_page() ): ?>
							<!--ぱんくず -->
							<section id="breadcrumb">
							<ol itemscope itemtype="http://schema.org/BreadcrumbList">
								 <li itemprop="itemListElement" itemscope
						itemtype="http://schema.org/ListItem"><a href="<?php echo home_url(); ?>" itemprop="item"><span itemprop="name">HOME</span></a> > <meta itemprop="position" content="1" /></li>
								<?php
								$i = 2;
								foreach ( array_reverse( get_post_ancestors( $post->ID ) ) as $parid ) { ?>

									<li itemprop="itemListElement" itemscope
						itemtype="http://schema.org/ListItem"><a href="<?php echo get_page_link( $parid ); ?>" title="<?php echo  get_the_title(); ?>" itemprop="item"> <span itemprop="name"><?php echo get_page( $parid )->post_title; ?></span></a> > <meta itemprop="position" content="<?php echo $i; ?>" /></li>
								<?php  $i++; } ?>
							</ol>
							</section>
							<!--/ ぱんくず -->
						<?php endif; ?>


						<!-- カテゴリページ用ぱんくず -->
						<?php if ( is_category() ) { ?>
							<section id="breadcrumb">
							<ol itemscope itemtype="http://schema.org/BreadcrumbList">
								<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a href="<?php echo home_url(); ?>" itemprop="item"><span itemprop="name">HOME</span></a> > <meta itemprop="position" content="1" /></li>
							<?php /*--- カテゴリーが階層化している場合に対応させる --- */ ?>
							<?php
							$catid = get_query_var('cat');
							if( !$catid ){
							$cat_now = get_the_category();
							$cat_now = $cat_now[0];
							$catid  = $cat_now->cat_ID;
							}
							?>
							<?php $allcats = array( $catid ); ?>
							<?php
							while ( !$catid == 0 ) {    /* すべてのカテゴリーIDを取得し配列にセットするループ */
								$mycat = get_category( $catid );    /* カテゴリーIDをセット */
								$catid = $mycat->parent;    /* 上で取得したカテゴリーIDの親カテゴリーをセット */
								array_push( $allcats, $catid );
							}
							array_pop( $allcats );
							$allcats = array_reverse( $allcats );
							?>
							<?php /*--- 親カテゴリーがある場合は表示させる --- */ ?>
							<?php
							$i = 2;
							foreach ( $allcats as $catid ): ?>
									<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a href="<?php echo esc_url( get_category_link( $catid ) ); ?>" itemprop="item">
										<span itemprop="name"><?php echo esc_html( get_cat_name( $catid ) ); ?></span> </a> &gt;
										<meta itemprop="position" content="<?php echo $i; ?>" />
									</li>
							<?php  $i++; ?>
							<?php endforeach; ?>
							</ol>
							</section>

						<?php } elseif ( is_tag() ) { //タグアーカイブ ?>
							<section id="breadcrumb">
							<ol>
								<li><a href="<?php echo home_url(); ?>"><span>HOME</span></a> > </li>
								<li><?php single_tag_title(); ?></li>
							</ol>
							</section>
						<?php } elseif ( is_author() ) { //投稿者アーカイブ ?>
							<section id="breadcrumb">
							<ol>
								<li><a href="<?php echo home_url(); ?>"><span>HOME</span></a> >  </li>
								<li><?php the_author_meta('display_name', get_query_var('author')); ?></li>
							</ol>
							</section>
						<?php } elseif(is_attachment()){ //添付ファイル ?>
							<section id="breadcrumb">
							<ol>
								<li><a href="<?php echo home_url(); ?>"><span>HOME</span></a> >  </li>
								<?php if($post -> post_parent != 0 ): ?> >
									<li><a href="<?php echo get_permalink($post -> post_parent); ?>"><?php echo get_the_title($post -> post_parent); ?></a> > </li>
								<?php endif; ?>
									<li><?php echo $post -> post_title; ?></li>
							</ol>
							</section>
						<?php } elseif(is_date()){ //日付アーカイブ ?>
							<section id="breadcrumb">
							<ol>
								<li><a href="<?php echo home_url(); ?>"><span>HOME</span></a> >  </li>

								<?php if(is_day()): //日別アーカイブ ?>
									<li><a href="<?php echo get_year_link(get_query_var('year')); ?>"><?php echo get_query_var('year'); ?>年</a> > </li>
									<li><a href="<?php echo get_month_link(get_query_var('year'), get_query_var('monthnum')); ?>"><?php echo get_query_var('monthnum'); ?>月</a> > </li>
									<li><?php echo get_query_var('day'); ?>日</li>
								<?php elseif(is_month()): //月別アーカイブ ?>
									<li><a href="<?php echo get_year_link(get_query_var('year')); ?>"><?php echo get_query_var('year'); ?>年</a> > </li>
									<li><?php echo get_query_var('monthnum'); ?>月</li>
								<?php elseif(is_year()): //年別アーカイブ ?>
									<li><?php echo get_query_var('year'); ?>年</li>
								<?php endif; ?>
							</ol>
							</section>
						<?php }else{} ?>
						<!--/ ぱんくず -->

						<!-- 投稿ページ用ぱんくず -->
						<?php if ( is_single() ) { ?>
						<!-- ぱんくず -->
						<section id="breadcrumb">
						<ol itemscope itemtype="http://schema.org/BreadcrumbList">
								 <li itemprop="itemListElement" itemscope
						itemtype="http://schema.org/ListItem"><a href="<?php echo home_url(); ?>" itemprop="item"><span itemprop="name">HOME</span></a> > <meta itemprop="position" content="1" /></li>
							<?php
								$postcat = get_the_category();
								$catid = $postcat[0]->cat_ID;
								$allcats = array( $catid );

							while ( !$catid == 0 ) {
								$mycat = get_category( $catid );
								$catid = $mycat->parent;
								array_push( $allcats, $catid );
							}
							array_pop( $allcats );
							$allcats = array_reverse( $allcats );
							$i = 2;
							foreach ( $allcats as $catid ): ?>
								<li itemprop="itemListElement" itemscope
						itemtype="http://schema.org/ListItem"><a href="<?php echo get_category_link( $catid ); ?>" itemprop="item">
								<span itemprop="name"><?php echo esc_html( get_cat_name( $catid ) ); ?></span> </a> &gt;<meta itemprop="position" content="<?php echo $i; ?>" /></li>
							<?php
							$i++;
							endforeach; ?>
						</ol>
						</section>
						<?php }else{} ?>
						<!--/ ぱんくず -->
