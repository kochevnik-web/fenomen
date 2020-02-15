<?php
/*
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fenomen archive blog page
 */

    $paged = get_query_var('paged') ?: 1;

    get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
                <h1 class="text-center mb-4 font-weight-bold">Новости и статьи</h1>
                <?php
                    $categories = get_categories( array(
                        'taxonomy'     => 'category',
                        'type'         => 'post',
                        'orderby'      => 'ID',
                        'hide_empty'   => 1,
                    ) );

                    if ( count( $categories ) > 0 ) {
                ?>

                <div class="d-flex justify-content-center mb-4">
                    <ul class="p0 m0 d-flex list-unstyled align-items-center blog-category-menu">
                        <?php foreach ( $categories as $cat ) { ?>
                            <li><a href="<?= get_category_link( $cat->term_id ); ?>"><?= $cat->name; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>

                <?php } ?>

                <div class="row mb-4">
                <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content' );

                    endwhile; // End of the loop.

                ?>
                </div>
                <?php if ( pagination() ) { ?>
                    <div class="row mb-5">
                        <div class="pagination justify-content-center w-100">
                            <?php echo pagination(); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
