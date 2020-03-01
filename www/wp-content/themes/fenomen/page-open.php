<?php
/*
Template Name: Открыть школу
Template Post Type: page
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
							<div class="col-lg-7 mb-2 mb-md-5">
								<h1 class="color-white text-center text-lg-left"><?php echo get_post_meta( $post->ID, 'main_tittle', true ); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</section><!-- #intro -->
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
							<?php for ( $i = 1; $i <=5; $i++ ) { ?>
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
		</section><!-- #front_more -->
        <?php } ?>
        
		<section id="front_words">
			<div class="container">
				<div class="front_words_wrap">
					<div class="row flex-clgr">
						<div class="col-lg-6">
                            <a href="<?= get_post_meta( $post->ID, 'front_video_link', true ); ?>" class="front_video_img d-flex align-items-center justify-content-center cursor-pointer mb-5 mb-md-0" data-fancybox="">
								<span class="front_video_play hover_amime">
									<div class="front_video_play_wrap">
										<img src="<?= get_template_directory_uri() . '/img/front_video_play.svg' ?>" alt="">
									</div>
								</span>
							</a>
						</div>
						<div class="col-lg-6 text-center text-lg-left">
                            <h2 class="color-white mb-2 pt-3 pt-lg-5"><?= get_post_meta( $post->ID, 'front_words_title', true ); ?></h2>
                            <p class="color-white mb-4"><?= get_post_meta( $post->ID, 'front_words_title_2', true ); ?></p>
							<a href="#" class="btn btn-primary btn-yellow mb-5 mb-lg-0">Организовать класс</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php

get_footer();
