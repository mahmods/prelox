<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    if (pll_current_language() == "ar") {
        wp_enqueue_style('sage/main.css', asset_path('styles/main-rtl.css'), false, null);
        wp_enqueue_script('sage/main.js', asset_path('scripts/main-rtl.js'), ['jquery'], null, true);
    } else {
        wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
        wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);
    }
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary'
    ] + $config);
    register_sidebar([
        'name'          => __('Footer', 'sage'),
        'id'            => 'sidebar-footer'
    ] + $config);
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });
});

// Register Custom Post Type
add_action( 'init', 'App\custom_post_testimonials', 0 );

// Register Custom Post Type
function custom_post_testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'mahacode' ),
		'singular_name'         => _x( 'Testimony', 'Post Type Singular Name', 'mahacode' ),
		'menu_name'             => __( 'Testimonials', 'mahacode' ),
		'name_admin_bar'        => __( 'Testimonials', 'mahacode' ),
		'archives'              => __( 'Testimonials', 'mahacode' ),
		'attributes'            => __( 'Testimony Attributes', 'mahacode' ),
		'parent_item_colon'     => __( 'Parent Testimony:', 'mahacode' ),
		'all_items'             => __( 'All Testimonials', 'mahacode' ),
		'add_new_item'          => __( 'Add New Testimony', 'mahacode' ),
		'add_new'               => __( 'Add New', 'mahacode' ),
		'new_item'              => __( 'New Testimony', 'mahacode' ),
		'edit_item'             => __( 'Edit Testimony', 'mahacode' ),
		'update_item'           => __( 'Update Testimony', 'mahacode' ),
		'view_item'             => __( 'View Testimony', 'mahacode' ),
		'view_items'            => __( 'View Testimonials', 'mahacode' ),
		'search_items'          => __( 'Search Testimony', 'mahacode' ),
		'not_found'             => __( 'Not found', 'mahacode' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'mahacode' ),
		'featured_image'        => __( 'Featured Image', 'mahacode' ),
		'set_featured_image'    => __( 'Set featured image', 'mahacode' ),
		'remove_featured_image' => __( 'Remove featured image', 'mahacode' ),
		'use_featured_image'    => __( 'Use as featured image', 'mahacode' ),
		'insert_into_item'      => __( 'Insert into Testimony', 'mahacode' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimony', 'mahacode' ),
		'items_list'            => __( 'Testimonials list', 'mahacode' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'mahacode' ),
		'filter_items_list'     => __( 'Filter Testimonials list', 'mahacode' ),
	);
	$args = array(
		'label'                 => __( 'Testimony', 'mahacode' ),
		'description'           => __( 'Testimonials Post Type', 'mahacode' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'testimonials', $args );

}