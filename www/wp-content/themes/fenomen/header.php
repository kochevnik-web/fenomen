<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fenomen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="color-white position-fixed w-100">
		<div class="top_header py-3">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="select_city">
							<div class="select_city_title">
								Выберите город:
							</div>
							<span class="select_city_move cursor-pointer color arrow-down position-relative font-weight-bold">Новосибирск, м. Заельцовская</span>
						</div>
					</div>
					<div class="col-md-3">
					
					</div>
					<div class="col-md-3">
					
					</div>
					<div class="col-md-3">
					
					</div>
				</div>
			</div>
		</div>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$fenomen_description = get_bloginfo( 'description', 'display' );
			if ( $fenomen_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $fenomen_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fenomen' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<section id="intro">
		<div class="container">
			<div class="row">

			</div>
		</div>
	</section>

	<div id="content" class="site-content">