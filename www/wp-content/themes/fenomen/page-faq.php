<?php
/*
Template Name: Вопросы и ответы
Template Post Type: page
*/
/*
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fenomen FAQ page
 */

	get_header();
	
	global $post;
?>

	<div id="primary" class="content-area ">
		<main id="main" class="site-main">
            <section id="faq">
				<div class="container">
					<div class="row mb-4">
						<div class="col-lg-6">
							<h1 class="font-weight-bold"><?= $post->post_title; ?></h1>
						</div>
						<div class="col-lg-6">
							<div class="faq_buttons text-lg-right">
								<a href="" class="btn btn-primary btn-yellow-border mr-3 mb-3 mb-md-0" data-toggle="modal" data-target="#allForm">Задать вопрос</a>
								<a href="" class="btn btn-primary btn-yellow mb-3 mb-md-0" data-toggle="modal" data-target="#allForm">Записаться на бесплатное занятие</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-9">
						<h4 class="color-blue mb-4 font-weight-bold"><?= get_post_meta( $post->ID, 'title_1', true ); ?></h4>

						<?php if ( get_post_meta( $post->ID, 'block_1', true ) > 0 ) { ?>
							<div class="ans">
								<?php for ( $i = 0; $i < get_post_meta( $post->ID, 'block_1', true ); $i++ ) { ?>
									<div class="ans_ans arrow-down" data-ans="<?= '1_' . $i; ?>"><?= get_post_meta( $post->ID, 'block_1_' . $i . '_ans', true ); ?></div>
									<div class="ans_qvest" data-q="<?= '1_' . $i; ?>">
										<?= get_post_meta( $post->ID, 'block_1_' . $i . '_q', true ); ?>
									</div>
								<?php } ?>
							</div>
						<?php } ?>

						<h4 class="color-blue mb-4 font-weight-bold"><?= get_post_meta( $post->ID, 'title_2', true ); ?></h4>
						<?php if ( get_post_meta( $post->ID, 'block_2', true ) > 0 ) { ?>
							<div class="ans">
								<?php for ( $i = 0; $i < get_post_meta( $post->ID, 'block_2', true ); $i++ ) { ?>
									<div class="ans_ans arrow-down" data-ans="<?= '2_' . $i; ?>"><?= get_post_meta( $post->ID, 'block_2_' . $i . '_ans', true ); ?></div>
									<div class="ans_qvest" data-q="<?= '2_' . $i; ?>">
										<?= get_post_meta( $post->ID, 'block_2_' . $i . '_q', true ); ?>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
						</div>
						<div class="col-lg-3">
							<div class="faq_sidebar mb-4">
								<?= $post->post_content; ?>
							<div class="subscrabe mb-4">

							</div>
						</div>
					</div>

				</div>
			</section>
			<?php if ( (bool)get_post_meta($post->ID, 'form_title', true ) ) { ?>
			<section id="faq_form">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-md-12">
							<h2 class="text-center font-weight-bold"><?= get_post_meta($post->ID, 'form_title', true ); ?></h2>
							<div class="sub_title text-center mb-4">
								<?= get_post_meta($post->ID, 'form_subtitle', true ); ?>
							</div>
							<?php echo do_shortcode( get_post_meta($post->ID, 'form', true ) ); ?>
						</div>
					</div>
				</div>
			</section>
			<?php } ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
