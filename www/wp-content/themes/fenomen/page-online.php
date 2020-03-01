<?php
/*
Template Name: Онлайн школа
Template Post Type: page
*/

    get_header();
?>

    <div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( (bool)get_post_meta( $post->ID, 'intro_title', true ) ) { ?>
			<section id="intro">
				<div class="container">
					<div class="intro_bg">
						<div class="row">
							<div class="col-md-8 offset-md-2 mb-2 mb-md-5">
								<h1 class="color-white text-center"><?php echo get_post_meta( $post->ID, 'intro_title', true ); ?></h1>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="intro_online">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="intro_online">
                                        
                                    </div>
                                </div>
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
