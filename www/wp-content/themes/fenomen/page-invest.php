<?php
/*
Template Name: Инвестирование
Template Post Type: page
*/

    get_header();
?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( (bool)get_post_meta( $post->ID, 'main_title', true ) ) { ?>
			<section id="intro">
				<div class="container">
					<div class="intro_bg">
						<div class="row">
							<div class="col-lg-7 mb-2 mb-md-5 text-center text-lg-left">
                                <h1 class="color-white text-center text-lg-left mb-5"><?php echo get_post_meta( $post->ID, 'main_title', true ); ?></h1>
                                <div class="color-white mb-3"><?php echo get_post_meta( $post->ID, 'sub_title', true ); ?></div>
								<a href="" class="btn btn-primary btn-yellow">Получить предложение</a>
							</div>
						</div>
					</div>
				</div>
			</section><!-- #intro -->
        <?php } ?>     

		</main><!-- #main -->

	</div><!-- #primary -->

<?php

get_footer();
