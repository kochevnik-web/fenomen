<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fenomen
 */
	$catId = get_post_meta( $post->ID, '_yoast_wpseo_primary_category', true );
	$cat   = get_category( $catId );

?>

<div class="col-md-6 col-lg-4 mb-4">
	<article id="post-<?php the_ID(); ?>" class="d-flex h-100">
		<a href="<?php the_permalink(); ?>" class="post-list-item d-block position-relative">
		<?php the_post_thumbnail( '274x140', array( 'class' => 'w-100 mb-3' ) ); ?>
			<div class="post-list-item-data d-flex mb-1 justify-content-between">
				<span>Рубрика: <?= $cat->name; ?></span>
				<span><?php the_date( 'd.m.Y' ); ?></span>
			</div>
			<div class="post-list-item-title mb-1 color-blue font-weight-bold"><?php the_title(); ?></div>
			<?php the_excerpt(); ?>
		</a>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
