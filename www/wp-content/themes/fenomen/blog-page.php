<?php
/*
 Template Name: Страница Блога
 Template Post Type: page

 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fenomen
 */

    $paged = get_query_var('paged') ?: 1;

    get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
                <h1 class="text-center mb-4 font-weight-bold">Новости и статьи</h1>
                <div class="d-flex justify-content-center mb-4">
                    <ul class="p0 m0 d-flex list-unstyled align-items-center blog-category-menu">
                        <li><a href="">Новости</a></li>
                        <li><a href="">Бизнес</a></li>
                        <li><a href="">Воспитание детей</a></li>
                        <li><a href="">Видео-уроки</a></li>
                        <li><a href="">Шахматы</a></li>
                    </ul>
                </div>
                <div class="row mb-5">
                <?php
                    $query = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'paged' => $paged,

                    ) );
                    while ( $query->have_posts() ) :
                        $query->the_post();

                        get_template_part( 'template-parts/content' );

                    endwhile; // End of the loop.
                    wp_reset_postdata();
                ?>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
