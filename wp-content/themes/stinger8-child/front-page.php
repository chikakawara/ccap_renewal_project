<?php get_header(); ?>

<!-- ヘッダー画像 -->
<div class="header-image">
	<ul class="header-image-animation">

		<li class="header-image-03">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top-main-03.png" alt=""></li>
		<li class="header-image-02">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top-main-02.png" alt=""></li>
		<li class="header-image-01">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top-main-01.png" alt=""></li>
	</ul>
	<div class="header-image-copy">
		<strong>
			<i class="fa fa-mobile phone-icon"></i>聞かせてください、<span class="br">子育ての悩み。</span>
		</strong>
		<p>
			ひとりで悩んでいないで、<span class="br">電話で相談してみませんか。</span>
		</p>
		<p>
			心が少し軽くなったら、<span class="br">忘れていた笑顔が</span><span class="br">帰ってくるかもしれません。</span>
		</p>
</div>

</div>
<div id="content" class="clearfix content--top-pc">
	<div id="contentInner">
		<div class="st-main" style="margin-right:0;">
			<article>

				<!-- lead -->
				<section class="lead-box">
					<h2 class="lead-box-title"><strong>子どもの虐待防止センター（CCAP) </strong>とは</h2>
					<p class="lead-box-body">
						社会福祉法人子どもの虐待防止センター（CCAP) は、子どもの虐待を早期に発見し、虐待防止を援助するために設立された民間の団体です。虐待から子どもを守り、親への支援を行っています。<br>（1991年に設立、1997年社会福祉法人として認可されました）
					</p>
				</section>

				<!-- ○○の方へ -->
				<section class="for-people-box">
					<div class="for-people-box--inner">
						<a href="./for-parent">
							<dl>
								<dt><span class="people-category">子育て中</span><br>の方へ</dt>
								<dd>
									<strong>ひとりで悩まずにお話ししてみる</strong>
									<p>児童虐待に悩む保護者への電話相談や面接相談を通じて、育児不安の解消や虐待の重症化の予防に努めています。</p>
								</dd>
							</dl>
						</a>
						<a href="./for-general">
							<dl>
								<dt><span class="people-category">一般</span><br>の方へ</dt>
								<dd>
									<strong>活動を応援する</strong>
									<p>児童虐待防止のためには市民の皆さまの力が必要です。ぜひみなさんの力をお貸しください。</p>
								</dd>
							</dl>
						</a>
						<a href="./for-fosterparent">
							<dl>
								<dt><span class="people-category">里親・養親</span><br>の方へ</dt>
								<dd>
									<strong>親と子の関係を育てる</strong>
									<p>専門家による相談、里親会への講師派遣、里親対象研修などさまざまな支援を行なっています。</p>
								</dd>
							</dl>
						</a>
						<a href="./for-profession">
							<dl>
								<dt><span class="people-category">専門職<br>・行政</span><br>の方へ</dt>
								<dd>
									<strong>児童虐待問題に関して協力する</strong>
									<p>公的機関に対するアドバイス、講師派遣、セミナーをはじめたし、立法・行政に対して積極的に事業協力を行なっています。</p>
								</dd>
							</dl>
						</a>
					</div>
				</section>

				<!-- 最新のお知らせ -->
				<section class="latest-news-box">
					<h2 class="section-title">最新のお知らせ<span class="section-title__en">Latest news</a></h2>
					<?php
					  $arg = array(
					             'posts_per_page' => 4, // 表示する件数
					             'orderby' => 'date', // 日付でソート
					             'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
					             'category_name' => 'news' // 表示したいカテゴリーのスラッグを指定
					         );
					  $posts = get_posts( $arg );
					  if( $posts ): ?>
					    <ul>
					  <?php
					      foreach ( $posts as $post ) :
					        setup_postdata( $post ); ?>

								<li>
									<a href="<?php the_permalink(); ?>">
										<p><?php the_time( 'Y.m.d' ); ?></p>
										<p><?php the_title(); ?></p>
									</a>
								</li>

					<?php endforeach; ?>
					    </ul>
							<div class="latest-news-more-link">
								<?php
									// 指定したカテゴリーの ID を取得
									$category_id = get_category_by_slug( 'news' );
									// このカテゴリーの URL を取得
									$category_link = get_category_link( $category_id );
								?>
								<a href="<?php echo esc_url( $category_link ); ?>">全てのお知らせを見る</a>
							</div>
					<?php
					  endif;
					  wp_reset_postdata();
					?>
				</section>

				<!-- 活動 -->
				<section class="actions-box">
					<h2 class="section-title">
						CCAPの活動
						<span class="section-title__en">Action</a>
					</h2>

					<div class="actions-items-wrapper">

						<div class="actions-item">
							<div class="actions-item-contents">
								<a href="./activity/consultation">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/main-hotline.png" alt="電話相談">
								</a>
								<div class="actions-item-description">
									<strong>電話相談</strong>
									<p>研修を受けた相談員（女性）が虐待の相談、子育ての悩みを受け付けています。あなたのお名前を聞くことはありません。秘密を守ります。お電話下さい。</p>
								</div>
							</div>
							<div class="actions-more-link">
								<a href="./activity/consultation">詳しくはこちら</a>
							</div>
						</div>

						<div class="actions-item">
							<div class="actions-item-contents">
								<a href="./activity/groupcare">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/main-groupcare.png" alt="グループケア">
								</a>
								<div class="actions-item-description">
									<strong>グループケア</strong>
									<p>「子どもがかわいく思えない」「イライラや怒りを子どもにぶつけてしまう」MCGはそんな子どもへの虐待の悩みを抱えたおかあさんたちのグループです。</p>
								</div>
							</div>
							<div class="actions-more-link">
								<a href="./activity/groupcare">詳しくはこちら</a>
							</div>
						</div>

						<div class="actions-item">
							<div class="actions-item-contents">
								<a href="./activity/fosterparent">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/main-fosterparent.png" alt="里親・養親支援">
								</a>
								<div class="actions-item-description">
									<strong>里親・養親支援</strong>
									<p>専門家による相談、里親会への講師派遣、里親対象研修などさまざまな支援を行なっています。</p>
								</div>
							</div>
							<div class="actions-more-link">
								<a href="./activity/fosterparent">詳しくはこちら</a>
							</div>
						</div>

						<div class="actions-item">
							<div class="actions-item-contents">
								<a href="./activity/childcare">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/main-childcare.png" alt="子どもケア">
								</a>
								<div class="actions-item-description">
									<strong>子どもケア</strong>
									<p>里親家庭や養子縁組家庭、児童養護施設等で暮らすお子さんを対象とした心理療法プログラムを実施しています。</p>
								</div>
							</div>
							<div class="actions-more-link">
								<a href="./activity/childcare">詳しくはこちら</a>
							</div>
						</div>

						<div class="actions-item">
							<div class="actions-item-contents">
							<a href="./activity/parenting">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/main-parenting.png" alt="ペアレンティングプログラム">
							</a>
								<div class="actions-item-description">
									<strong>ペアレンティングプログラム</strong>
									<p>子どもが言うことを聞かない、つい怒鳴ってしまう、子どものしつけってどうすればいいの？　そんな思いを抱えている方への親と子のコミュニケーションを学ぶプログラムです。</p>
								</div>
							</div>
							<div class="actions-more-link">
								<a href="./activity/parenting">詳しくはこちら</a>
							</div>
						</div>

						<div class="actions-item">
							<div class="actions-item-contents">
								<a href="./info">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/main-seminar.png" alt="研修・セミナー">
								</a>
								<div class="actions-item-description">
									<strong>研修・セミナー</strong>
									<p>専門職・行政向け、里親家庭や養子縁組家庭向け、一般向けなど様々な研修・セミナーを実施しています。</p>
								</div>
							</div>
							<div class="actions-more-link">
								<a href="./info">詳しくはこちら</a>
							</div>
						</div>

					</div>

				</section>

			</article>
		</div>
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div>
<!-- /#content -->
<?php get_footer(); ?>
