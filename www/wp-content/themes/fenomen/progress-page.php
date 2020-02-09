<?php
/*
Template Name: Страница Progress
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
								<?php echo get_post_meta( $post->ID, 'intro_sub_title', true ); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-ms-12">
								<div id="form" class="position-relative">
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
							</div>
						</div>

					</div>
				</div>
			</section><!-- #intro -->
			<?php } ?>

			<?php if ( (bool)get_post_meta( $post->ID, 'process_title', true ) ) { ?>
			<section white_bg" id="process">
				<div class="container">
					<h3 class="text-center">
						<?= get_post_meta( $post->ID, 'process_title', true ); ?>
					</h3>
					<div class="row pt-4 mb-5 align-items-center">
						<div class="col-md-6">
							<div class="process_img position-relative">
								<img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'process_img_1', true ), 'full' ); ?>" alt="<?= get_post_meta( $post->ID, 'process_title_1', true ); ?>" class="w-100 mb-2 mb-md-0">
								<div class="number position-absolute d-flex number1">
									<span class="d-block text-center">01</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="process_text">
								<div class="d-flex align-items-center mb-3">
									<div class="icon mr-4"><img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'process_icon_1', true ), 'full' ); ?>" alt="icon"></div>
									<h4><?= get_post_meta( $post->ID, 'process_title_1', true ); ?></h4>
								</div>
								<?= get_post_meta( $post->ID, 'process_text_1', true ); ?>
							</div>
						</div>
					</div>
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-6">
							<div class="process_img position-relative">
								<img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'process_img_2', true ), 'full' ); ?>" alt="<?= get_post_meta( $post->ID, 'process_title_2', true ); ?>" class="w-100 mb-2 mb-md-0">
								<div class="number position-absolute d-flex number2">
									<span class="d-block text-center">02</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="process_text">
								<div class="d-flex align-items-center mb-3">
									<div class="icon mr-4"><img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'process_icon_2', true ), 'full' ); ?>" alt=""></div>
									<h4><?= get_post_meta( $post->ID, 'process_title_2', true ); ?></h4>
								</div>
								<?= get_post_meta( $post->ID, 'process_text_2', true ); ?>
							</div>
						</div>
					</div>
				</div>
			</dection><!-- #process -- >
			<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
