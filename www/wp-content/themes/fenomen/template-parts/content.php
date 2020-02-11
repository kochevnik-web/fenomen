<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fenomen
 */

?>

<div class="col-md-4">
	<article id="post-<?php the_ID(); ?>">
		<a href="<?php the_permalink(); ?>" class="post-list-item d-block">
		<?php the_post_thumbnail( '274x140', array( 'class' => 'w-100 mb-3' ) ); ?>
			<div class="post-list-item-data d-flex mb-1 justify-content-between">
				<span>Рубрика: Новости</span>
				<span>24.11.2013</span>
			</div>
			<div class="post-list-item-title mb-1 color-blue font-weight-bold"><?php the_title(); ?></div>
			<p>7 и 8 декабря в Болгарии прошел первый тренинг по ментальной арифметике...</p>
		</a>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
