<?php /**
 * MoonsPortfolio's functions and definitions
 *
 * @package Moon's Portfolio
 * @since Moon's Portfolio 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */

if ( ! function_exists( 'moonsportfolio_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function moonsportfolio_setup() {

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'moonsportfolio', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'moonsportfolio' ),
			'secondary' => __( 'Secondary Menu', 'moonsportfolio' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // moonsportfolio_setup

add_action( 'after_setup_theme', 'moonsportfolio_setup' );

function moonsportfolio_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'moonsportfolio_custom_logo_setup' );

function adicionar_meu_script() {
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'adicionar_meu_script');

function registrar_sidebar_personalizada() {
    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'description' => 'Esta é a área de widgets personalizada.',
    ));

	register_sidebar(array(
        'name' => 'Home Sidebar',
        'id' => 'home-sidebar',
        'description' => 'Esta é a área de widgets personalizada.',
    ));
}
add_action('widgets_init', 'registrar_sidebar_personalizada');

// Função para exibir a navegação de página com paginate_links
function custom_pagination() {
    global $wp_query; // Esta função usa a consulta global do WordPress

    // Certifique-se de que existem mais de uma página antes de exibir a navegação
    if ($wp_query->max_num_pages > 1) {
        echo '<div class="pagination">';
        echo paginate_links(array(
            'total' => $wp_query->max_num_pages,
        ));
        echo '</div>';
    }
}