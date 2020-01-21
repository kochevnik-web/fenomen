<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fenomen
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section id="intro">
			<div class="container">
				<div class="intro_bg">
					<div class="row">
						<div class="col-md-8 mb-2 mb-md-5">
							<h1 class="color-white"><?php  echo get_post_meta( $post->ID, 'main_tittle', true ); ?></h1>
						</div>
					</div>
					<div class="row">
						<div class="intro_small_title color-white col-12 mb-3 mt-3 mt-mf-5">Выберите подходящую программу для вашего ребенка:</div>
						<div class="col-md-4 mb-4 mb-md-0">
							<div class="intro_item text-center">
								<img src="<?= get_template_directory_uri() . '/img/rocket.png' ?>" alt="" class="intro_item_img mb-3">
								<div class="intro_item_content">
									<div class="h4">Феномен Start</div>
									<p class="mb-4">Программа для детей от 5 лет и тех,
кто только начинает изучать
шахматы. Данная программа вызовет
интерес к игре у ребенка</p>
								</div>
								<a href="#" class="btn btn-primary intro_item_btn">Подробнее о программе</a>
							</div>
						</div>
						<div class="col-md-4 mb-4 mb-md-0">
							<div class="intro_item text-center">
								<img src="<?= get_template_directory_uri() . '/img/rocket.png' ?>" alt="" class="intro_item_img mb-3">
								<div class="intro_item_content">
									<div class="h4">Феномен Start</div>
									<p class="mb-4">Программа для детей от 5 лет и тех,
кто только начинает изучать
шахматы. Данная программа вызовет
интерес к игре у ребенка</p>
								</div>
								<a href="#" class="btn btn-primary intro_item_btn">Подробнее о программе</a>
							</div>
						</div>
						<div class="col-md-4 mb-4 mb-md-0">
							<div class="intro_item text-center">
								<img src="<?= get_template_directory_uri() . '/img/rocket.png' ?>" alt="" class="intro_item_img mb-3">
								<div class="intro_item_content">
									<div class="h4">Феномен Start</div>
									<p class="mb-4">Программа для детей от 5 лет и тех,
кто только начинает изучать
шахматы. Данная программа вызовет
интерес к игре у ребенка</p>
								</div>
								<a href="#" class="btn btn-primary intro_item_btn">Подробнее о программе</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
