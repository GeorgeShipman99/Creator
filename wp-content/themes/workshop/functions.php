<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
if( function_exists('acf_add_options_page') ) {
 	
 	// add parent
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'redirect' 		=> false
	));
} 

function register_my_menus() {
  register_nav_menus(
    array(
    'header-menu' => __( 'Header' ),
    'footer-one' => __( 'Footer Menu 1' ),
    'footer-two' => __( 'Footer Menu 2' ),
    'footer-three' => __( 'Footer Menu 3' ),
    )  
  );
}

add_action( 'init', 'register_my_menus' );
function register_my_widgets() {
    register_sidebar( array(
        'name' => __( 'Footer 1'),
        'id' => 'footer-one',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer 2'),
        'id' => 'footer-two',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer 3'),
        'id' => 'footer-three',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer 4'),
        'id' => 'footer-four',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
    register_sidebar( array(
      'name'          => 'Shop Sidebar',
      'id'            => 'shop_sidebar',
      'before_widget' => '<div class="element">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
      'name'          => 'Shop Sidebar (Mob)',
      'id'            => 'shop_sidebar_mob',
      'before_widget' => '<div class="element">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'register_my_widgets' );



// Register Styles & Scripts 
function my_add_scripts() {
    wp_enqueue_script( 'flickity.pkgd.min.js', get_template_directory_uri() . '/assets/js/flickity.pkgd.min.js', array(), '1.0.0', true );  
    wp_enqueue_script( 'jquery.flexslider-min.js', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'header2.js', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
    wp_enqueue_script( 'flickity-init.js', get_template_directory_uri() . '/assets/js/flickity-init.js', array(), '1.0.0', true );
    wp_enqueue_script( 'flexslider-init.js', get_template_directory_uri() . '/assets/js/flexslider-init.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_add_scripts' );


// Deregister Styles & Scripts
function remove_scripts_styles_head() {}
add_action('wp_head', 'remove_scripts_styles_head');

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate( &$scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.2.1' );
    }
}

// EXCERPT LENGTH
function custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'excerpt_more' );

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}




// EVENTS POST TYPE //

add_action( 'init', 'create_event_postype' );
function create_event_postype() {

register_post_type( 'Events', array(
  'labels' => array(
    'name' => 'Gigs & Events',
    'singular_name' => 'Event',
   ),
  'menu_icon' => 'dashicons-heart',
  'capability_type' => 'post',
  'public' => true,
  'can_export' => true,
  'description' => 'Gigs and Events taking place at Gwydir Street',
  'public' => true,
  'supports' => array( 'title', 'editor', 'custom-fields', 'excerpt','thumbnail' ),
  'rewrite' => array('slug' => 'events')
));
}

function create_event_taxonomy() {
$labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Categories' ),
    'popular_items' => __( 'Popular Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Category' ),
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'separate_items_with_commas' => __( 'Separate categories with commas' ),
    'add_or_remove_items' => __( 'Add or remove categories' ),
    'choose_from_most_used' => __( 'Choose from the most used categories' ),
);

register_taxonomy('eventcategory','events', array(
    'label' => __('Event Category'),
    'labels' => $labels,
    'hierarchical' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'event-category' ),
));
}
 
add_action( 'init', 'create_event_taxonomy', 0 );

// Add button class to next/prev post link
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="button"';
}



//GLOBAL WOOCOMMERCE //

function add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'add_woocommerce_support' );
add_action( 'after_setup_theme', 'yourtheme_setup' );
 
function yourtheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

//  Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
  function loop_columns() {
    return 3; // 3 products per row
  }
}

// Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
function new_loop_shop_per_page( $cols ) {
  $cols = 12;
  return $cols;
}

// Remove Sidebar Single Product
add_action( 'wp', 'remove_sidebar_product_pages' );
function remove_sidebar_product_pages() {
    if ( is_product() ) {
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
    }
}

// Cart - Basket Text
function woo_custom_change_cart_string($translated_text, $text, $domain) {
  $translated_text = str_replace("basket", "bag", $translated_text);
  $translated_text = str_replace("Basket", "Bag", $translated_text);
  $translated_text = str_replace("View Basket", "View Bag", $translated_text);
return $translated_text;
}
add_filter('gettext', 'woo_custom_change_cart_string', 100, 3);
add_filter('ngettext', 'woo_custom_change_cart_string', 100, 3);
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );  // 2.1 +
function woo_custom_single_add_to_cart_text() {
  return __( 'Add to Bag', 'woocommerce' );
}

//Remove 'Product Description'
add_filter( 'woocommerce_product_description_heading', '__return_false' );
add_filter( 'woocommerce_product_additional_information_heading', '__return_false' );

// Rename Product Tabs
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {
  $tabs['description']['title'] = __( 'Info' );   // Rename the description tab
  $tabs['reviews']['title'] = __( 'Reviews' );        // Rename the reviews tab
  $tabs['additional_information']['title'] = __( 'More' );  // Rename the additional information tab
  return $tabs;
}

// Remove '...has been added to your bag' Message
add_filter( 'wc_add_to_cart_message_html', '__return_null' );

// Unset WoCommerce Styles
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] );    // Remove the gloss
    unset( $enqueue_styles['woocommerce-layout'] );     // Remove the layout
    unset( $enqueue_styles['woocommerce-smallscreen'] );    // Remove the smallscreen optimisation
    return $enqueue_styles;
}
add_filter( 'woocommerce_enqueue_styles', '__return_false' );



