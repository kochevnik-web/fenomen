<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fenomen
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( (bool)get_post_meta( $post->ID, 'main_tittle', true ) ) { ?>
		<section id="intro">
			<div class="container">
				<div class="intro_bg">
					<div class="row">
						<div class="col-md-8 mb-2 mb-md-5">
							<h1 class="color-white"><?php echo get_post_meta( $post->ID, 'main_tittle', true ); ?></h1>
						</div>
					</div>
					<div class="row">
						<div class="intro_small_title color-white col-12 mb-3 mt-3 mt-mf-5"><?php echo get_post_meta( $post->ID, 'intro_sub_title', true ); ?></div>
						<?php for ( $i = 1; $i <=3; $i++ ) { ?>
						<div class="col-md-4 mb-4 mb-md-0">
							<?php if ( (bool)get_post_meta( $post->ID, 'intro_prog_name_' . $i, true ) ) { ?>
							<div class="intro_item text-center">
								<img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'intro_prog_img_' . $i, true ) ); ?>" alt="" class="intro_item_img mb-3">
								<div class="intro_item_content">
									<div class="h4"><?php echo get_post_meta( $post->ID, 'intro_prog_name_' . $i, true ); ?></div>
									<p class="mb-4"><?php echo get_post_meta( $post->ID, 'intro_prog_desc_' . $i, true ); ?></p>
								</div>
								<a href="<?php echo get_post_meta( $post->ID, 'intro_prog_link_' . $i, true ); ?>" class="btn btn-primary intro_item_btn">Подробнее о программе</a>
							</div>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>

		<?php if ( (bool)get_post_meta( $post->ID, 'form_titile', true ) ) { ?>
		<section id="main_form" class="form">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center">
							<?php echo get_post_meta( $post->ID, 'form_titile', true ); ?>
						</h3>
						<div class="sub_title text-center col-md-10 offset-md-1 mb-4 mb-md-5">
							<?php echo get_post_meta( $post->ID, 'form_subtitle', true ); ?>
						</div>
					</div>
				</div>
				<?php
					if ( (bool)get_post_meta( $post->ID, 'form_shortcode', true ) ) {
						echo do_shortcode( get_post_meta( $post->ID, 'form_shortcode', true ) );
					}
				?>
			</div>
		</section>
		<?php } ?>

		<?php if ( (bool)get_post_meta( $post->ID, 'front_video_title', true ) ) { ?>
		<section id="main_video">
			<div class="container">
				<div class="main_video_wrap position-relative">
					<div class="row main_video_flex">
						<div class="col-12 mb-4">
							<h3 class="color-white text-center"><?= get_post_meta( $post->ID, 'front_video_title', true ); ?></h3>
						</div>
						<div class="col-md-6 mb-4 mb-md-0">
							<a href="<?= get_post_meta( $post->ID, 'front_video_link', true ); ?>" class="front_video_img d-flex align-items-center justify-content-center cursor-pointer" data-fancybox>
								<span class="front_video_play hover_amime">
									<div class="front_video_play_wrap">
										<img src="<?= get_template_directory_uri() . '/img/front_video_play.svg' ?>" alt="">
									</div>
								</span>
							</a>
						</div>
						<div class="col-md-6">
							<div class="video_list h-100 d-flex justify-content-between flex-column">
								<div>
									<?= get_post_meta( $post->ID, 'front_video_content', true ); ?>
								</div>
								<div class="text-md-left text-center">
									<a href="#" class="btn btn-primary btn-yellow">
										Записаться на бесплатное занятие
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>

		<?php if ( (bool)get_post_meta( $post->ID, 'front_more_title', true ) ) { ?>
		<section id="front_more" class="gray_bg">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="mb-5 text-center">
							<?php echo get_post_meta( $post->ID, 'front_more_title', true ); ?>
						</h3>
						<div class="front_more_wrap">
							<?php for ( $i = 1; $i <=3; $i++ ) { ?>
								<?php $more_class = $i%2 ? '' : ' flex-row-reverse'; ?>
								<div class="front_more_item white_bg overflow-hidden">
									<div class="row<?= $more_class; ?>">
										<div class="col-md-6">
											<div class="front_more_item_content">
												<h4 class="mb-3 text-center text-md-left">
													<?= get_post_meta( $post->ID, 'front_more_title_' . $i, true ); ?>
												</h4>
												<?= get_post_meta( $post->ID, 'front_more_content_' . $i, true ); ?>
											</div>
										</div>
										<div class="col-md-6">
											<img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'front_more_img_' . $i, true ), 'full' ); ?>" class="w-100" alt="<?= get_post_meta( $post->ID, 'front_more_title_' . $i, true ); ?>">
										</div>
									</div>
								</div><!--# front_more_item -->
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>

		<section id="front_words">
			<div class="container">
				<div class="front_words_wrap">
					<div class="row flex-clgr">
						<div class="col-lg-6">
							<img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'front_words_img', true ), 'full' ); ?>" alt="<?= get_post_meta( $post->ID, 'front_words_title', true ); ?>" class="w-100">
						</div>
						<div class="col-lg-6 text-center text-lg-left">
							<h2 class="color-white text-uppercase mb-5 pt-3 pt-lg-5"><?= get_post_meta( $post->ID, 'front_words_title', true ); ?></h2>
							<a href="#" class="btn btn-primary btn-yellow mb-5 mb-lg-0">Записаться на бесплатное занятие</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php if ( (bool)get_post_meta( $post->ID, 'front_welcome_title', true ) ) { ?>
		<section id="front_welcome" class="white_bg">
			<div class="container">
				<h3 class="text-center"><?= get_post_meta( $post->ID, 'front_welcome_title', true ); ?></h3>
				<div class="sub_title text-center mb-5"><?= get_post_meta( $post->ID, 'front_welcome_subtitle', true ); ?></div>
			</div>
			<div class="container custom_container">
				<div class="row custom_row">
					<?php
						$front_wel_blocks_count = get_post_meta( $post->ID, 'front_welcome_blocks', true );
						if ( (bool)$front_wel_blocks_count ) {
							for ( $i = 0; $i < $front_wel_blocks_count; $i++ ) {
								$front_wel_blocks_width = (bool)get_post_meta( $post->ID, 'front_welcome_blocks_' . $i . '_width', true ) ? get_post_meta( $post->ID, 'front_welcome_blocks_' . $i . '_width', true ) : 100;
								$front_wel_blocks_style = (bool)get_post_meta( $post->ID, 'front_welcome_blocks_' . $i . '_back', true ) ? trim( get_post_meta( $post->ID, 'front_welcome_blocks_' . $i . '_back', true ) ) : 'center center';
					?>
						<div class="front_wel_item_wrap" style="width: <?= $front_wel_blocks_width; ?>%">
							<div class="front_wel_item" style="background: url(<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'front_welcome_blocks_' . $i . '_img', true ), 'full' ); ?>)no-repeat <?= $front_wel_blocks_style; ?>/cover">

							</div>
						</div>
					<?php } } ?>
					</div>
				</div>
			</div>
		</section><!-- #front_welcome -->
		<?php } ?>

		<?php if ( (bool)get_post_meta( $post->ID, 'reviews_title', true ) ) { ?>
		<section id="reviews" class="gray_bg">
			<div class="container">
				<h3 class="mb-5 text-center"><?= get_post_meta( $post->ID, 'reviews_title', true ); ?></h3>
				<div class="row mb-4">
					<?php
						$reviews_arr_1 = array();
						$reviews_arr_2 = array();
						$reviews_count = get_post_meta( $post->ID, 'fenomen_reviews', true );

						for ( $r = 0; $r < $reviews_count; $r++ ) {
							$review_name  = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_name', true );
							$review_type  = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_type', true );
							$review_text  = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_text', true );
							$review_link  = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_link', true );
							$review_img   = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_img', true );
							$review_child = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_child', true );

							if ( $r%2 ) {
								$reviews_arr_2[$r] = array(
									'name'  => $review_name,
									'type'  => $review_type,
									'text'  => $review_text,
									'link'  => $review_link,
									'img'   => $review_img,
									'child' => $review_child,
								);
							} else {
								$reviews_arr_1[$r] = array(
									'name'  => $review_name,
									'type'  => $review_type,
									'text'  => $review_text,
									'link'  => $review_link,
									'img'   => $review_img,
									'child' => $review_child,
								);
							}
						}
					?>

					<?php if ( count( $reviews_arr_1 ) > 0 ) { ?>
						<div class="col-md-6">
							<?php foreach ( $reviews_arr_1 as $rew_item ) { ?>
								<?php if ( (bool) $rew_item['name'] ) { ?>
									<?php if ( $rew_item['type'] == 'text' ) { ?>
										<div class="reviews_item reviews_item_text">
											<div class="reviews_item_text_img text-center text-lg-left mb-3 mb-lg-0">
												<img src="<?= wp_get_attachment_image_url( $rew_item['img'], 'thumbnail' ); ?>" alt="Отзыв о Fenomen">
											</div>
											<div class="reviews_item_text_content">
												<div class="title">
												<?= $rew_item['name']; ?>
												</div>
												<div class="subtitle mb-2">
												<?= $rew_item['child']; ?>
												</div>
												<p  class="m-0">
												<?= $rew_item['text']; ?>
												</p>
											</div>
										</div><!-- #review -->
									<?php } else { ?>
										<div class="reviews_item reviews_item_video">
											<a href="<?= $rew_item['link']; ?>" data-fancybox class="d-block color-white position-relative overflow-hidden">
												<img src="<?= wp_get_attachment_image_url( $rew_item['img'], 'full' ); ?>" alt="" class="w-100">
												<div class="play position-absolute text-center">
													<img src="<?= get_template_directory_uri() . '/img/front_video_play.svg'; ?>" alt="Отзыв о Fenomen">
												</div>
												<div class="title position-absolute text-right">
													<div class="title_1"><?= $rew_item['name']; ?></div>
													<div class="title_2"><?= $rew_item['child']; ?></div>
												</div>
											</a>
										</div><!-- #review -->
							<?php } } } ?>
						</div>
					<?php } ?>
					<?php if ( count( $reviews_arr_2 ) > 0 ) { ?>
						<div class="col-md-6">
							<?php foreach ( $reviews_arr_2 as $rew_item ) { ?>
								<?php if ( (bool) $rew_item['name'] ) { ?>
									<?php if ( $rew_item['type'] == 'text' ) { ?>
										<div class="reviews_item reviews_item_text">
											<div class="reviews_item_text_img text-center text-lg-left mb-3 mb-lg-0">
												<img src="<?= wp_get_attachment_image_url( $rew_item['img'], 'thumbnail' ); ?>" alt="Отзыв о Fenomen">
											</div>
											<div class="reviews_item_text_content">
												<div class="title">
												<?= $rew_item['name']; ?>
												</div>
												<div class="subtitle mb-2">
												<?= $rew_item['child']; ?>
												</div>
												<p  class="m-0">
												<?= $rew_item['text']; ?>
												</p>
											</div>
										</div><!-- #review -->
									<?php } else { ?>
										<div class="reviews_item reviews_item_video">
											<a href="<?= $rew_item['link']; ?>" data-fancybox class="d-block color-white position-relative overflow-hidden">
												<img src="<?= wp_get_attachment_image_url( $rew_item['img'], 'full' ); ?>" alt="" class="w-100">
												<div class="play position-absolute text-center">
													<img src="<?= get_template_directory_uri() . '/img/front_video_play.svg'; ?>" alt="Отзыв о Fenomen">
												</div>
												<div class="title position-absolute text-right">
													<div class="title_1"><?= $rew_item['name']; ?></div>
													<div class="title_2"><?= $rew_item['child']; ?></div>
												</div>
											</a>
										</div><!-- #review -->
							<?php } } } ?>
						</div>
					<?php } ?>

				</div>
				<div class="text-center"><button class="btn btn-primary btn-blue hover_amime">Загрузить еще отзывы</button></div>
			</div>
		</section><!-- #reviews -->
		<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
