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

		<section id="front_more" class="gray_bg">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="mb-5 text-center">
							Почему именно шахматная школа Феномен?
						</h3>
						<div class="front_more_wrap">
							<div class="front_more_item white_bg overflow-hidden mb-4">
								<div class="row">
									<div class="col-md-6">
										<div class="front_more_item_content">
											<h4 class="mb-3">Опытные преподаватели</h4>
											<ul class="m-0 mb-3 list-unstyled">
												<li class="d-flex">
													<div class="icon"> </div>
													<div>опыт преподавателей нашей школы от 5 лет</div>
												</li>
												<li class="d-flex">
													<div class="icon"> </div>
													<div>знают как интересно и познавательно преподнести информацию</div>
												</li>
												<li class="d-flex">
													<div class="icon"> </div>
													<div>найдут подход к вашему ребенку</div>
												</li>
											</ul>
											<blockquote>Мы подобрали команду профессиональных преподавателей, которым бы вы доверили своих детей</blockquote>
										</div>
									</div>
									<div class="col-md-6">
										<img src="<?= get_template_directory_uri() . '/img/front_more_1.png'; ?>" class="w-100">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
