<?php
/*
Template Name: Страница Start
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
            </section>
            <?php } ?>

            <?php if ( (bool)get_post_meta( $post->ID, 'start_list_title', true ) ) { ?>
            <section id="start_list" class="white_bg">
                <div class="container">
                    <h3 class="text-center mb-5"><?= get_post_meta( $post->ID, 'start_list_title', true ); ?></h3>
                    <div class="row">
                        <div class="col-12">
                            <?php
                                if ( get_post_meta( $post->ID, 'start_list', true ) > 0 ) {
                                    for ( $i = 0; $i < get_post_meta( $post->ID, 'start_list', true ); $i++ ) {
                                        $start_list_class_1 = $i%2 ? ' flex-row-reverse' : '';
                                        $start_list_class_2 = $i%2 ? 'pl-lg-4' : 'pr-lg-4';
                                        $start_list_class_3 = $i%2 ? 'pr-lg-4' : 'pl-lg-4';
                            ?>
                            <div class="start_list_item">
                                <div class="row<?= $start_list_class_1; ?>">
                                    <div class="col-md-6 mb-3 mb-md-0 <?= $start_list_class_2; ?>">
                                        <img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'start_list_' . $i . '_img', true ), 'full' ); ?>" alt="<?= get_post_meta( $post->ID, 'start_list_' . $i . '_name', true ); ?>" class="w-100">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="<?= $start_list_class_3; ?>">
                                            <h4 class="color-blue mb-3 mb-lg-5"><?= get_post_meta( $post->ID, 'start_list_' . $i . '_name', true ); ?></h4>
                                            <p><?= get_post_meta( $post->ID, 'start_list_' . $i . '_text', true ); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- #start_list_item -->
                            <?php } } ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
