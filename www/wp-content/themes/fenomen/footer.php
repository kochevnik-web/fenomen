<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fenomen
 */

?>

	</div><!-- #content -->

	<footer class="color-white">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo inline-block mr-lg-5" rel="home">
						<img src="<?= get_template_directory_uri() . '/img/logo.svg' ?>" alt="<?php bloginfo( 'name' ); ?>">
					</a>
				</div>
				<div class="col-md-5">
					<ul class="footer_menu list-unstyled m-0 d-flex">
						<li><a href="#">Главная</a></li>
						<li><a href="#">Онлайн-школа</a></li>
						<li><a href="#">Мероприятия</a></li>
						<li><a href="#">Программы</a></li>
						<li><a href="#">Вопросы и ответы</a></li>
						<li><a href="#">Блог</a></li>
					</ul>
				</div>
				<div class="col-md-5">
					<div class="footer_item">
						<a href="#" class="btn btn-primary">Открыть школу</a>
					</div>
					<div class="footer_item">
						<a href="#">Политика конфиденциальности</a>
					</div>
					<div class="footer_item">
						<a href="<?= get_option( 'options_fenomen_facebook' ); ?>"><i class="fab fa-facebook"></i></a>
						<a href="<?= get_option( 'options_fenomen_instagram' ); ?>"><i class="fab fa-instagram"></i></a>
						<a href="<?= get_option( 'options_fenomen_vk' ); ?>"><i class="fab fa-vk"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
