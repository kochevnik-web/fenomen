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
			</section><!-- #process -->
			<?php } ?>
	
			<section id="result" class="blue_bg color-white">
				<div class="container">
					<h3 class="text-center mb-5">
						Результат занятий по программе Феномен Progress
					</h3>
					<div class="row">
						<div class="col-md-8 offset-md-4 col-lg-6 offset-lg-6">
							<div class="result_text">
								<h4 class="mb-3 color">В шахматах:</h4>
								<ul class="list-unstyled color-white mb-5 corona-list">
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Усиленная подготовка к соревнованиям</div></li>
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Углубленное изучение шахматных дебютов</div></li>
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Подготовка будущего чемпиона</div>
									</li>
								</ul>
								<h4 class="mb-3 color">Интеллектуальные способности:</h4>
								<ul class="list-unstyled color-white mb-5 corona-list">
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Аналитическое и неординарное мышление</div></li>
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Учимся мыслить схемами и планами</div></li>
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Развитие воображения</div>
									</li>
								</ul>
								<h4 class="mb-3 color">В школе:</h4>
								<ul class="list-unstyled color-white mb-5 corona-list">
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Хорошая память</div></li>
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Умение думать и рассуждать</div></li>
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Подготовка для будущего чемпиона</div>
									</li>
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Усидчивость</div>
									</li>
								</ul>
								<h4 class="mb-3 color">Жизнь в социуме:</h4>
								<ul class="list-unstyled color-white mb-5 corona-list">
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Учимся побеждать и принимать поражения, находить выходы из самых тяжелых ситуаций</div></li>
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Учимся сравнивать и выбирать</div></li>
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Соревновательный дух</div>
									</li>
									<li class="d-flex">
										<div class="icon"></div>
										<div class="w-100">Вырабатываем навык руководителя</div>
									</li>
								</ul>
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
