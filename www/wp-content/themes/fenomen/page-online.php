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
							<div class="col-lg-8 offset-lg-2 mb-2 mb-md-5">
								<h1 class="color-white text-center mb-5"><?php echo get_post_meta( $post->ID, 'intro_title', true ); ?></h1>
                                <div class="row">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <div class="intro_online text-center">
                                            <img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'intro_img_1', true ), 'full' ); ?>" alt="<?= get_post_meta( $post->ID, 'intro_title_1', true ); ?>" class="mb-3">
                                            <h5 class="font-weight-bold mb-2"><?= get_post_meta( $post->ID, 'intro_title_1', true ); ?></h5>
                                            <p class="mb-3"><?= get_post_meta( $post->ID, 'intro_text_1', true ); ?></p>
                                            <a href="" class="btn btn-primary btn-yellow">Оставить заявку</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="intro_online text-center">
                                            <img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'intro_img_2', true ), 'full' ); ?>" alt="<?= get_post_meta( $post->ID, 'intro_title_2', true ); ?>" class="mb-3">
                                            <h5 class="font-weight-bold mb-2"><?= get_post_meta( $post->ID, 'intro_title_2', true ); ?></h5>
                                            <p class="mb-3"><?= get_post_meta( $post->ID, 'intro_text_2', true ); ?></p>
                                            <a href="" class="btn btn-primary btn-yellow">Оставить заявку</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</section><!-- #intro -->
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
                            <h2 class="mb-2 pt-3 pt-lg-5"><?= get_post_meta( $post->ID, 'front_words_title', true ); ?></h2>
							<a href="#" class="btn btn-primary btn-yellow mb-5 mb-lg-0">Хочу пробный урок</a>
						</div>
					</div>
				</div>
			</div>
        </section>
        
        <section id="turnirs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center font-weight-bold">Участвуй в турнирах с другими учениками школы</h2>
                        <div class="sub_title text-center mb-5">
                            Школы открыты уже в <span class="color-blue">20 городах России</span>, и с нами играют ученики со всего мира
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="turnirs_item">
                            <a href="" class="display-block" data-fancybox="">
                                <img src="" alt="">
                            </a>
                            <h4>Игры в онлайне</h4>
                            <p>Играй в шахматы в клубе Феномен</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
