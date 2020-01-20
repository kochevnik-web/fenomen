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
						<div class="col-md-8">
							<h1 class="color-white"><?php  echo get_post_meta( $post->ID, 'main_tittle', true ); ?></h1>
						</div>
					</div>
					<div class="row">
	
					</div>
				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
