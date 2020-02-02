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
				<div class="col-md-3 col-xl-2 mb-3 mb-xl-0 text-center text-md-left">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo inline-block mr-lg-5" rel="home">
						<img src="<?= get_template_directory_uri() . '/img/logo.svg' ?>" alt="<?php bloginfo( 'name' ); ?>">
					</a>
				</div>
				<div class="col-md-9 col-xl-5">
					<ul class="footer_menu list-unstyled m-0 d-flex text-center text-md-right text-xl-left">
						<li><a href="#">Главная</a></li>
						<li><a href="#">Онлайн-школа</a></li>
						<li><a href="#">Мероприятия</a></li>
						<li><a href="#">Программы</a></li>
						<li><a href="#">Вопросы и ответы</a></li>
						<li><a href="#">Блог</a></li>
					</ul>
				</div>
				<div class="col-xl-5 d-block d-md-flex align-items-center text-center">
					<div class="footer_item mb-4 mb-md-0 text-center text-md-left">
						<a href="http://dev.fenomen.loc/privacy-policy/" class="btn btn-primary btn-white-border">Открыть школу</a>
					</div>
					<div class="footer_item text-center text-xl-left">
						<a href="#" class="politic">Политика конфиденциальности</a>
					</div>
					<div class="footer_item text-center text-md-right">
						<a href="<?= get_option( 'options_fenomen_facebook' ); ?>" class="contacts_link"><i class="fab fa-facebook"></i></a>
						<a href="<?= get_option( 'options_fenomen_instagram' ); ?>" class="contacts_link"><i class="fab fa-instagram"></i></a>
						<a href="<?= get_option( 'options_fenomen_vk' ); ?>" class="contacts_link"><i class="fab fa-vk"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
