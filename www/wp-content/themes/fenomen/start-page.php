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

            <?php if ( (bool)get_post_meta( $post->ID, 'book_title', true ) ) { ?>
            <section id="book" class="white_bg position-relative">
                <div class="container">
                    <h3 class="text-center mb-0 mb-md-5"><?= get_post_meta( $post->ID, 'book_title', true ); ?></h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="book_elem position-relative d-flex d-xl-block mt-5 mt-xl-0">
                                <div id="book_elem_1" class="mb-4 mb-md-5 mb-lg-0">
                                    <div class="number">01</div>
                                    <h3 class="color-blue"><?= get_post_meta( $post->ID, 'book_slogan_1', true ); ?></h3>
                                </div>
                                <div id="book_elem_2" class="mb-4 mb-md-5 mb-lg-0">
                                    <div class="number">02</div>
                                    <h3 class="color-blue"><?= get_post_meta( $post->ID, 'book_slogan_2', true ); ?></h3>
                                </div>
                                <div id="book_elem_3" class="mb-4 mb-md-5 mb-lg-0">
                                    <div class="number">03</div>
                                    <h3 class="color-blue"><?= get_post_meta( $post->ID, 'book_slogan_3', true ); ?></h3>
                                    <div>Более 200 уроков</div>
                                </div>
                                <div id="book_elem_4" class="mb-4 mb-md-5 mb-lg-0">
                                    <div class="number">04</div>
                                    <h3 class="color-blue"><?= get_post_meta( $post->ID, 'book_slogan_4', true ); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>

            <?php if ( (bool)get_post_meta( $post->ID, 'form_titile', true ) ) { ?>
                <section id="main_form" class="form gray_bg">
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

            <?php if ( (bool)get_post_meta( $post->ID, 'fenomen_help_title', true ) ) { ?>
            <section id="thoughts" class="white_bg">
                <div class="container">
                    <h3 class="text-center mb-5"><?= get_post_meta( $post->ID, 'fenomen_help_title', true ); ?></h3>
                    <div class="row justify-content-center">
                        <?php if ( get_post_meta( $post->ID, 'fenomen_help', true ) > 0 ) { ?>
                            <?php for ( $f = 0; $f < get_post_meta( $post->ID, 'fenomen_help', true ); $f++) { ?>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                                    <div class="thoughts-item">
                                        <img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'fenomen_help_' . $f . '_img', true ), 'full' ); ?>" alt="<?= get_post_meta( $post->ID, 'fenomen_help_' . $f . '_name', true ); ?>" class="w-100 mb-3">
                                        <h5 class="font-weight-bold mb-2"><?= get_post_meta( $post->ID, 'fenomen_help_' . $f . '_name', true ); ?></h5>
                                        <p><?= get_post_meta( $post->ID, 'fenomen_help_' . $f . '_text', true ); ?></p>
                                    </div>
                                </div>
                        <?php }} ?>
                    </div>
                </div>
            </section>
            <?php } ?>

            <?php if ( (bool)get_post_meta( $post->ID, 'tale_title', true ) ) { ?>
            <section id="tale" class="blue_bg">
                <div class="container">
                    <h3 class="text-center color-white mb-5"><?= get_post_meta( $post->ID, 'tale_title', true ); ?></h3>
                    <?php
                        $tale = get_post_meta( $post->ID, 'tale', true );
                        if ( $tale > 0 ) {
                    ?>
                    <div class="tale_wrap d-flex">
                        <?php for ( $fi = 0; $fi < $tale; $fi++ ) { ?>
                        <?php if ( get_post_meta( $post->ID, 'tale_' . $fi . '_type', true ) == 'text' ) { ?>
                        <div class="tale_item tale_text">
                            <div class="front_more_item_content">
                                <h4 class="mb-3"><?= get_post_meta( $post->ID, 'tale_' . $fi . '_name', true ); ?></h4>
                                <?= get_post_meta( $post->ID, 'tale_' . $fi . '_text', true ); ?>
                            </div>
                        </div>
                        <?php } else { ?>
                        <div class="tale_item tale_img">
                            <img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'tale_' . $fi . '_img', true ), 'full' ); ?>" alt="" class="w-100">
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <?php } ?>

            <section id="contacts_section" class="color-white position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div id="map" class="overflow-hidden"></div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="mb-2 mb-lg-4"><?= get_option( 'options_fenomen_contacts_title' ); ?></h3>
                            <div class="contact_info_wrap mb-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact_info py-3">
                                            <div class="title mb-1">Номер телефона:</div>
                                            <div class="format mb-1"><?= get_option( 'options_header_fenomen_phone' ); ?></div>
                                            <a href="tel:<?= get_option( 'options_header_fenomen_phone' ); ?>">позвонить нам</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact_info py-3">
                                            <div class="title mb-1">Электронная почта:</div>
                                            <div class="format mb-1"><?= get_option( 'options_fenomen_email' ); ?></div>
                                            <a href="mailto:<?= get_option( 'options_fenomen_email' ); ?>">написать нам</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_info_wrap mb-4">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="contact_info pb-3">
                                            <div class="title">Адрес школы:</div>
                                            <div class="format"><?= get_option( 'options_fenomen_adress' ); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="title mr-2">Мы в соцсетях:</div>
                                <a href="<?= get_option( 'options_fenomen_facebook' ); ?>" class="contacts_link"><i class="fab fa-facebook"></i></a>
                                <a href="<?= get_option( 'options_fenomen_instagram' ); ?>" class="contacts_link"><i class="fab fa-instagram"></i></a>
                                <a href="<?= get_option( 'options_fenomen_vk' ); ?>" class="contacts_link"><i class="fab fa-vk"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    ymaps.ready(function () {
                        var myMap = new ymaps.Map('map', {
                                center: [55.055847, 82.898080],
                                zoom: 16
                            });

                            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {}, {
                                // Опции.
                                // Необходимо указать данный тип макета.
                                iconLayout: 'default#image',
                                // Своё изображение иконки метки.
                                iconImageHref: '<?= get_template_directory_uri() . '/img/marker.svg' ?>',
                                // Размеры метки.
                                iconImageSize: [101, 101],
                                // Смещение левого верхнего угла иконки относительно
                                // её "ножки" (точки привязки).
                                iconImageOffset: [-50, -100]
                            });

                        myMap.geoObjects.add(myPlacemark);
                    });
                </script>
            </section><!-- #map -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
