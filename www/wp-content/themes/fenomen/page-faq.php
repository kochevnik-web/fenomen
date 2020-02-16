<?php
/*
Template Name: Вопросы и ответы
Template Post Type: page
*/
/*
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fenomen category page
 */

    $paged = get_query_var('paged') ?: 1;

    get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container">    

                <div class="row mb-4">
					<div class="col-12">
						<?php
							while ( have_posts() ) :
								the_post();
								?>
								<h1 class="font-weight-bold mb-4"><?php the_title(); ?></h1>
								<div id="mb-4">
									<?php the_content(); ?>
								</div>
								<?php
							endwhile; // End of the loop.
						?>
					</div>
				</div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
