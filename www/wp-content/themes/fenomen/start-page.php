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

            <section id="start_list" class="white_bg">
                <div class="container">
                    <h3 class="text-center mb-5">Чему научится Ваш ребенок?</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="start_list_item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?= get_template_directory_uri() . '/img/start_list_1.png' ?>" alt="" class="w-100 pr-lg-4">
                                    </div>
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <div class="pl-lg-4">
                                            <h4 class="color-blue mb-3 mb-lg-5">Сформирует логическое и аналитическое мышление</h4>
                                            <p>Способность учиться складывается прежде всего из любознательности, жажды исследований, «прокачанности»                  критического мышления. Имеется в виду умение работать с информацией: анализировать, сомневаться в недоказанном,         сравнивать разные точки зрения, делать выводы, «глубоко копать», выбирать оптимальный способ решения.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- #start_list_item -->
                        </div>
                    </div>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
