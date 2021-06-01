<?
if ( ! function_exists( 'rgb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rgb_setup() {
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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-primary' => esc_html__( 'Primary', 'rgb' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
  }
endif;
add_action( 'after_setup_theme', 'rgb_setup' );

/**
 * Enqueue scripts and styles.
 */
function rgb_scripts() {
	wp_enqueue_style( 'rgb-style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'rgb-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.css' );

	wp_enqueue_script( 'rgb-lazy', 'https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.3.1/lazyload.min.js', array(), false, true );
	wp_enqueue_script( 'rgb-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js', array(), false, true );
	wp_enqueue_script( 'rgb-script', get_template_directory_uri() . '/js/index.js', array(), false, true );
	
	wp_enqueue_script( 'rgb-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', array('rgb-script'), false, true );
	wp_enqueue_script( 'rgb-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js', array('rgb-script', 'rgb-gsap'), false, true );
	wp_enqueue_script( 'rgb-animations', get_template_directory_uri() . '/js/animations.js', array('rgb-script'), false, true );
}
add_action( 'wp_enqueue_scripts', 'rgb_scripts' );