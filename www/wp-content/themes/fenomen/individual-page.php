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

		<?php if ( (bool)get_post_meta( $post->ID, 'tale_title', true ) ) { ?>
		<section id="tale" class="blue_bg position-relative">
			<div class="container">
				<h3 class="text-center color-white mb-5"><?= get_post_meta( $post->ID, 'tale_title', true ); ?></h3>
				<?php
					$tale = get_post_meta( $post->ID, 'tale', true );
					if ( $tale > 0 ) {
				?>
				<div class="tale_wrap d-flex mb-5">
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
				<div class="text-center">
					<a href="#" class="btn btn-primary btn-yellow">Записаться на бесплатное занятие</a>
				</div>
			</div>
		</section><!-- #tale -->
		<?php } ?>
		
		<?php if ( (bool)get_post_meta( $post->ID, 'prog_title', true ) ) { ?>
		<section id="programm" class="white_bg">
			<div class="container">
				<h3 class="text-center mb-5"><?= get_post_meta( $post->ID, 'prog_title', true ); ?></h3>
				<div class="row">
					<div class="col-md-8 offset-md-4 col-lg-6 offset-lg-6">
						<div class="programm_item mb-5">
							<?= get_post_meta( $post->ID, 'prog_text_1', true ); ?>
						</div>
						<div class="programm_item mb-5">
							<?= get_post_meta( $post->ID, 'prog_text_2', true ); ?>
						</div>
						<div class="text-center mb-4">
							<a href="#" class="btn btn-primary btn-yellow">Узнать стоимость и расписание занятий</a>
						</div>
						<div class="sub_title text-center">
							<?= get_post_meta( $post->ID, 'prog_sub_title', true ); ?>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #programm -->
		<?php } ?>

		<?php if ( (bool)get_post_meta( $post->ID, 'carousel_title', true ) ) { ?>
		<section id="slider" class="blue_bg">
			<div class="container">
				<h3 class="text-center color-white mb-5"><?= get_post_meta( $post->ID, 'carousel_title', true ); ?></h3>
				<?php if (  get_post_meta( $post->ID, 'carousel', true ) > 0 ) { ?>
				<div class="owl-carousel owl-carousel-teacher">
					<?php for ( $car = 0; $car < get_post_meta( $post->ID, 'carousel', true ); $car++ ) { ?>
					<div class="item text-center">
						<img src="<?= wp_get_attachment_image_url( get_post_meta( $post->ID, 'carousel_' . $car . '_img', true ), 'medium' ); ?>" alt="<?= get_post_meta( $post->ID, 'carousel_' . $car . '_name', true ); ?>">
						<h4><?= get_post_meta( $post->ID, 'carousel_' . $car . '_name', true ); ?></h4>
						<div class="subtitle color-blue"><?= get_post_meta( $post->ID, 'carousel_' . $car . '_titul', true ); ?></div>
						<div class="my-3">
							<span class="text"><?= get_post_meta( $post->ID, 'carousel_' . $car . '_opit', true ); ?></span>
						</div>
						<div class="mb-4">
							<span class="desc"><?= get_post_meta( $post->ID, 'carousel_' . $car . '_count', true ); ?></span>
						</div>
						<a href="#" class="btn btn-primary">Задать вопрос тренеру</a>
					</div><!-- #item -->
					<?php } ?>
				</div>
			</div>
			<?php } ?>
		</section><!-- #slider -->
		<?php } ?>

		<?php if ( (bool)get_post_meta( $post->ID, 'reviews_title', true ) ) { ?>
		<section id="reviews" class="gray_bg">
			<div class="container">
				<h3 class="mb-5 text-center"><?= get_post_meta( $post->ID, 'reviews_title', true ); ?></h3>
				<div class="row mb-4">
					<?php
						$reviews_arr_1 = array();
						$reviews_arr_2 = array();
						$reviews_count = get_post_meta( $post->ID, 'fenomen_reviews', true );

						for ( $r = 0; $r < $reviews_count; $r++ ) {
							$review_name  = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_name', true );
							$review_type  = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_type', true );
							$review_text  = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_text', true );
							$review_link  = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_link', true );
							$review_img   = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_img', true );
							$review_child = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_child', true );
							$review_hide  = get_post_meta( $post->ID, 'fenomen_reviews_' . $r . '_hide', true );

							if ( $r%2 ) {
								$reviews_arr_2[$r] = array(
									'name'  => $review_name,
									'type'  => $review_type,
									'text'  => $review_text,
									'link'  => $review_link,
									'img'   => $review_img,
									'child' => $review_child,
									'hide'  => $review_hide,
								);
							} else {
								$reviews_arr_1[$r] = array(
									'name'  => $review_name,
									'type'  => $review_type,
									'text'  => $review_text,
									'link'  => $review_link,
									'img'   => $review_img,
									'child' => $review_child,
									'hide'  => $review_hide,
								);
							}
						}
					?>

					<?php if ( count( $reviews_arr_1 ) > 0 ) { ?>
						<div class="col-md-6">
							<?php foreach ( $reviews_arr_1 as $rew_item ) { ?>
								<?php if ( (bool) $rew_item['name'] ) { ?>
									<?php if ( $rew_item['type'] == 'text' ) { ?>
										<div class="reviews_item reviews_item_text<?php echo (bool)$rew_item['hide'] ? ' review_hide' : ''; ?>">
											<div class="reviews_item_wrap">
												<div class="reviews_item_text_img text-center text-lg-left mb-3 mb-lg-0">
													<img src="<?= wp_get_attachment_image_url( $rew_item['img'], 'thumbnail' ); ?>" alt="Отзыв о Fenomen">
												</div>
												<div class="reviews_item_text_content">
													<div class="title">
													<?= $rew_item['name']; ?>
													</div>
													<div class="subtitle mb-2">
													<?= $rew_item['child']; ?>
													</div>
													<p  class="m-0">
													<?= $rew_item['text']; ?>
													</p>
												</div>
											</div>
										</div><!-- #review -->
									<?php } else { ?>
										<div class="reviews_item reviews_item_video<?php echo (bool)$rew_item['hide'] ? ' review_hide' : ''; ?>">
											<a href="<?= $rew_item['link']; ?>" data-fancybox class="d-block color-white position-relative overflow-hidden">
												<img src="<?= wp_get_attachment_image_url( $rew_item['img'], 'full' ); ?>" alt="" class="w-100">
												<div class="play position-absolute text-center">
													<img src="<?= get_template_directory_uri() . '/img/front_video_play.svg'; ?>" alt="Отзыв о Fenomen">
												</div>
												<div class="title position-absolute text-right">
													<div class="title_1"><?= $rew_item['name']; ?></div>
													<div class="title_2"><?= $rew_item['child']; ?></div>
												</div>
											</a>
										</div><!-- #review -->
							<?php } } } ?>
						</div>
					<?php } ?>
					<?php if ( count( $reviews_arr_2 ) > 0 ) { ?>
						<div class="col-md-6" id="rev_column">
							<?php foreach ( $reviews_arr_2 as $rew_item ) { ?>
								<?php if ( (bool) $rew_item['name'] ) { ?>
									<?php if ( $rew_item['type'] == 'text' ) { ?>
										<div class="reviews_item reviews_item_text<?php echo (bool)$rew_item['hide'] ? ' review_hide' : ''; ?>">
											<div class="reviews_item_wrap">
												<div class="reviews_item_text_img text-center text-lg-left mb-3 mb-lg-0">
													<img src="<?= wp_get_attachment_image_url( $rew_item['img'], 'thumbnail' ); ?>" alt="Отзыв о Fenomen">
												</div>
												<div class="reviews_item_text_content">
													<div class="title">
													<?= $rew_item['name']; ?>
													</div>
													<div class="subtitle mb-2">
													<?= $rew_item['child']; ?>
													</div>
													<p  class="m-0">
													<?= $rew_item['text']; ?>
													</p>
												</div>
											</div>
										</div><!-- #review -->
									<?php } else { ?>
										<div class="reviews_item reviews_item_video<?php echo (bool)$rew_item['hide'] ? ' review_hide' : ''; ?>">
											<a href="<?= $rew_item['link']; ?>" data-fancybox class="d-block color-white position-relative overflow-hidden">
												<img src="<?= wp_get_attachment_image_url( $rew_item['img'], 'full' ); ?>" alt="" class="w-100">
												<div class="play position-absolute text-center">
													<img src="<?= get_template_directory_uri() . '/img/front_video_play.svg'; ?>" alt="Отзыв о Fenomen">
												</div>
												<div class="title position-absolute text-right">
													<div class="title_1"><?= $rew_item['name']; ?></div>
													<div class="title_2"><?= $rew_item['child']; ?></div>
												</div>
											</a>
										</div><!-- #review -->
							<?php } } } ?>
						</div>
					<?php } ?>

				</div>
				<div class="text-center"><button class="btn btn-primary btn-blue hover_amime" id="reviews_btn">Загрузить еще отзывы</button></div>
			</div>
		</section><!-- #reviews -->
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

	</div><!-- #primary -->

<?php

get_footer();
