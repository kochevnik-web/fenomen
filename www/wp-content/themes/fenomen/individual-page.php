<?php
/*
Template Name: Страница Individual
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

		</main><!-- #main -->

		<?php if ( (bool)get_post_meta( $post->ID, 'format_title', true ) ) { ?>
		<section id="format" class="white_bg">
			<div class="container">
				<h3 class="text-center mb-5"><?= get_post_meta( $post->ID, 'format_title', true ); ?></h3>
				<?php if ( get_post_meta( $post->ID, 'format', true ) > 0 ) { ?>
				<div class="row justify-content-center">
					<?php for ( $fo = 0; $fo < get_post_meta( $post->ID, 'format', true ); $fo++ ) { ?>
					<div class="col-lg-4 mb-4 mb-lg-0 col-md-6">
						<div class="format_item text-center">
							<img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'format_' . $fo . '_img', true ), 'full' ); ?>" alt="<?= get_post_meta( $post->ID, 'format_' . $fo . '_name', true ); ?>" class="w-100 mb-3">
							<h5 class="mb-3 color-blue font-weight-bold"><?= get_post_meta( $post->ID, 'format_' . $fo . '_name', true ); ?></h5>
							<div class="title font-weight-bold">Где проходят занятия:</div>
							<p class="mb-3"><?= get_post_meta( $post->ID, 'format_' . $fo . '_p', true ); ?></p>
							<a href="" class="btn btn-primary btn-yellow">Записаться на занятие</a>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
		</section><!-- #format -->
		<?php } ?>

	</div><!-- #primary -->

<?php

get_footer();
