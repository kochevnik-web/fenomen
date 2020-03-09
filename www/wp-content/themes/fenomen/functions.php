<?php
/**
 * fenomen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fenomen
 */

	function filialData() {
		$arr = array();
		if ( isset( $_GET ) && isset( $_GET['filial'] ) ) {
			$filial = get_post( $_GET['filial'] );
			$arr['name'] = $filial->post_title;
			$arr['adres'] = get_post_meta( $filial->ID, 'filial_adres', true );
			$arr['phone'] = get_post_meta( $filial->ID, 'filial_phone', true );
			$arr['email'] = get_post_meta( $filial->ID, 'filial_email', true );
			$arr['insta'] = get_post_meta( $filial->ID, 'filial_insta', true );
			$arr['vk'] = get_post_meta( $filial->ID, 'filial_vk', true );
			$arr['fb'] = get_post_meta( $filial->ID, 'filial_fb', true );
			$arr['cords'] = get_post_meta( $filial->ID, 'filial_cords', true );
			$arr['carousel'] = get_field( 'carousel', $_GET['filial'] );
			return $arr;
		}
		return false;
	}

	/**
	 * Вспомогательная функция вывода данных на экран для проверки
	 */
	function dump( $var ) {
		echo '<pre style="color: #c3c3c3; background-color: #282923;">';
		print_r( $var );
		echo '</pre>';
	}

	require_once get_template_directory() . '/inc/custom-fields.php';

if ( ! function_exists( 'fenomen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fenomen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fenomen, use a find and replace
		 * to change 'fenomen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fenomen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( '274x140', 274, 140, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu'   => esc_html__( 'Главное меню', 'fenomen' ),
			'footer-menu' => esc_html__( 'Меню в подвале', 'fenomen' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fenomen_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fenomen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fenomen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fenomen_content_width', 640 );
}
add_action( 'after_setup_theme', 'fenomen_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fenomen_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Сайтбар', 'fenomen' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Область сайтбара', 'fenomen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fenomen_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fenomen_scripts() {

	if ( is_post_type_archive( 'event' ) ) {
		wp_enqueue_script( 'jquery-ui-datepicker' );
		wp_enqueue_style( 'jqueryui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css', false, null );
		wp_localize_script( 'jquery', 'eventDates', array( 
			'dataNow' => wp_date( "d/m/Y" ),
			'ajaxurl' => admin_url('admin-ajax.php'),
		) );
	}

	wp_localize_script( 'jquery', 'fenomenData', array( 
		'realEmail' => filialData() ? filialData()['email'] : get_option( 'options_fenomen_email' )
	) );
	
	wp_enqueue_style( 'fenomen-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/css/hamburgers.min.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'fenomen', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'fenomen-media', get_template_directory_uri() . '/css/media.css' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'mikeinput', get_template_directory_uri() . '/js/mikeinput.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'fenomen', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'fenomen_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Удаление старых редакций
 */
function src_flush_revisions () {

	global $wpdb;
	$limit     = 100;
	$timeLimit = 60;

	if ( isset( $timeLimit ) ) {
		$revision_ids = $wpdb->get_col( $wpdb->prepare( "SELECT `ID` FROM $wpdb->posts WHERE (`post_type` = 'revision') AND `post_date_gmt` < DATE_SUB(NOW(), INTERVAL '$timeLimit' DAY) LIMIT %d", $limit ) );

		foreach ( $revision_ids as $revision_id ) {
			wp_delete_post_revision( $revision_id );
		}

	
	}

}

add_action( 'admin_init', 'src_flush_revisions' );

function pagination() {
	global $wp_query;

	$big = 999999999; // уникальное число для замены

	$args = array(
		'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		'format'    => '',
		'current'   => max( 1, get_query_var( 'paged' ) ),
		'total'     => $wp_query->max_num_pages,
		'prev_text' => __( '&#8249;' ),
		'next_text' => __( '&#8250;' ),
		'mid_size'  => 0,
	);
	$result = paginate_links( $args );

	// удаляем добавку к пагинации для первой страницы
	$result = preg_replace( '~/page/1/?([\'"])~', '\1', $result );

	return $result;
}

add_filter( 'get_the_archive_title', function( $title ) {
	return str_replace( array ( 'Рубрика: ', 'Архивы: ' ), '', $title );
});

add_filter( 'excerpt_length', function(){
	return 10;
} );

add_action( 'init', 'add_post_type_event' );
function add_post_type_event() {
	register_post_type( 'event', array(
		'labels'             => array(
			'name'               => 'Турниры', // Основное название типа записи
			'singular_name'      => 'Турнир', // отдельное название записи типа Book
			'add_new'            => 'Добавить турнир',
			'add_new_item'       => 'Добавить новый турнир',
			'edit_item'          => 'Редактировать турнир',
			'new_item'           => 'Новый турнир',
			'view_item'          => 'Посмотреть турнир',
			'search_items'       => 'Найти турнир',
			'not_found'          => 'Турниров не найдено',
			'not_found_in_trash' => 'В корзине турниров не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Турниры'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_icon'          => 'dashicons-pressthis',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','editor','thumbnail','excerpt', 'revisions' ),
	) );
}

add_action( 'pre_get_posts', 'change_qauery_event' );
function change_qauery_event( $query ){
	if ( $query->is_main_query() && !is_admin() && $query->is_post_type_archive( 'event' ) ) {
		$query->set( 'posts_per_page', 9 );
	}
}

add_action( 'wp_ajax_fenomen_event_sort_date', 'fenomen_event_sort_date' );
add_action( 'wp_ajax_nopriv_fenomen_event_sort_date', 'fenomen_event_sort_date' );
function fenomen_event_sort_date() {
	$post  = $_POST;
	if( !$post['from'] || !$post['to'] ) wp_die( 'error' );

	$from = date( 'Y-m-d', strtotime( $post['from'] ) ) . ' 00:00:00';
	$to   = date( 'Y-m-d', strtotime( $post['to'] ) ) . ' 23:59:59';
	
	$posts = get_posts(array(
		'post_type'      => 'event',
		'posts_per_page' => -1,
		'meta_query' => array(
			array(
				'key'       => 'event_date',
				'value'     => array( $from, $to ),
				'compare'   => 'BETWEEN',
				'meta_type' => 'DATETIME'
			)
		),
	));

	if ( !count( $posts) ) wp_die( 'error' );

	foreach ( $posts as $post ) {
			$link      = get_permalink( $post->ID );
			$title     = $post->post_title;
			$eventDate = get_field( 'event_date', $post->ID );
			$date      = wp_date( 'j F, Время: H:i', strtotime( $eventDate ) );
			$loc       = get_field( 'event_location', $post->ID );
			$marker    = get_template_directory_uri() . '/img/event_marker.svg';
			$url       = get_the_post_thumbnail( $post->ID, '274x140', array( 'class' => 'w-100 mb-3' ) );
			$html .= '<div class="col-md-6 col-lg-4 mb-4">
				<article id="post-' . $post->ID . '" class="d-flex h-100">
					<a href="' . $link . '" class="post-list-item d-block position-relative w-100">' . $url . '
						<div class="post-list-item-title mb-3 color-blue font-weight-bold text-center">' . $title . '</div>
						<div class="text-center mb-3">
							<span class="event_date">' . $date . '</span>
						</div>
						<div class="d-flex event_location">
							<div class="icon mr-2"><img src="' . $marker . '" alt=""></div>
							<div class="div">' . $loc . '</div>
						</div>
					</a>
				</article><!-- #post-<?php the_ID(); ?> -->
			</div>';
	}

	echo $html;

	wp_die();
}

add_action( 'init', 'add_post_type_filial' );
function add_post_type_filial() {
	register_post_type( 'filial', array(
		'labels'             => array(
			'name'               => 'Филиалы', // Основное название типа записи
			'singular_name'      => 'Филиал', // отдельное название записи типа Book
			'add_new'            => 'Добавить филиал',
			'add_new_item'       => 'Добавить новый филиал',
			'edit_item'          => 'Редактировать филиал',
			'new_item'           => 'Новый филиал',
			'view_item'          => 'Посмотреть филиал',
			'search_items'       => 'Найти филиал',
			'not_found'          => 'Филиалов не найдено',
			'not_found_in_trash' => 'В корзине филиалов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Филиалы'

		  ),
		'public'             => true,
		'publicly_queryable' => false,
		'exclude_from_search' => true,
		'show_in_nav_menus'  => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'menu_icon'          => 'dashicons-location-alt',
		'supports'           => array( 'title','editor', 'revisions' ),
	) );
}

add_filter( 'pre_post_link', 'filter_function_name_filial', 10, 3 );
function filter_function_name_filial( $permalink, $post, $leavename ){
	if ( isset( $_GET ) && isset( $_GET['filial'] ) ) {
		return $permalink . '?filial=' . $_GET['filial'];
	}

	return $permalink;
}
add_filter( 'page_link', 'filter_function_page_filial', 10, 3 );
function filter_function_page_filial( $permalink, $post, $leavename ){
	if ( isset( $_GET ) && isset( $_GET['filial'] ) ) {
		return $permalink . '?filial=' . $_GET['filial'];
	}

	return $permalink;
}


