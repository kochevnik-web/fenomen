<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fenomen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=82e46475-fc43-4f35-84b3-583493552821&lang=ru_RU" type="text/javascript"></script>
	<script src="https://kit.fontawesome.com/8cec9744ca.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="color-white w-100">
		<div class="top_header py-3">
			<div class="container container-big">
				<div class="row align-items-center">
					<div class="col-md-6 col-xl-3 mb-2 mb-xl-0 d-none d-md-block">
						<div class="select_city">
							<div class="select_city_title">
								Выберите город:
							</div>
							<button class="select_city_move cursor-pointer color arrow-down font-weight-bold hover_amime" data-toggle="modal" data-target="#selectCity"><?= filialData() ? filialData()['name'] : get_option( 'options_fenomen_short_adress' ); ?></button>
						</div>
					</div>
					<div class="col-md-6 col-xl-4 mb-2 mb-md-0">
						<div class="select_city_map_header d-flex align-items-center justify-content-end justify-content-xl-start">
							<div class="select_city_map_header-marker mr-3">
								<img src="<?= get_template_directory_uri() . '/img/marker_header.svg' ?>" alt="Смотреть на карте">
							</div>
							<div class="select_city_map_header-text">
								<p>Адрес школы: <a href="#contacts_section" class="color cursor-pointer font-weight-bold select_city_map_header-link hover_amime">Смотреть на карте</a></p>
								<p><?= filialData() ? filialData()['adres'] : get_option( 'options_fenomen_adress' ); ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3 text-center text-md-left text-xl-right mb-2 mb-md-0">
						<button class="btn_header_phone btn btn-prymery hover_amime font-weight-bold" data-toggle="modal" data-target="#allForm">Записаться на бесплатный урок</button>
					</div>
					<div class="col-md-6 col-xl-2">
						<div class="header_phone_number font-weight-bold text-center text-md-right">
							<?= filialData() ? filialData()['phone'] : get_option( 'options_header_fenomen_phone' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom_header py-2">
			<div class="container container-big">
				<div class="row">
					<div class="col-12 d-flex align-items-center justify-content-between">
						<div class="d-block d-lg-none">
							<div class="hamburger hamburger-1 hamburger--spin">
								<div class="hamburger-box">
									<div class="hamburger-inner"></div>
								</div>
							</div>
						</div>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo inline-block mr-lg-5" rel="home">
							<img src="<?= get_template_directory_uri() . '/img/logo.svg' ?>" alt="<?php bloginfo( 'name' ); ?>">
						</a>
						<div id="site-nav" class="flex-grow-1">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'menu_id'        => 'primary-menu',
									'fallback_cb'    => '',
									'menu_class'     => 'fenomen_main_menu list-unstyled m-0 d-flex justify-content-between flex-column flex-lg-row align-items-center'
								) );
							?>
							<div class="d-block d-lg-none">
								<div class="hamburger hamburger-2 hamburger--spin is-active position-fixed">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</div>
							</div>
						</div>
						<?php do_action( 'fenomen_action_after_main_nav' ); ?>
					</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
