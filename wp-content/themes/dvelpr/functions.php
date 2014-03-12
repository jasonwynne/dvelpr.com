<?php
if ( function_exists( 'add_theme_support' ) ):
  add_theme_support( 'menus' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
endif;

if ( function_exists('register_sidebars') ):
  register_sidebar(array(
    'name'=>'Sidebar',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>'
  ));
endif;

add_editor_style( 'editor-style.css' );

// Get the id of a page by its slug
function get_page_id($page_name){
  global $wpdb;
  $page_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
  return $page_name;
}

// register external jquery library with wordpress & exclude from admin panel
function my_init_method() {
  if (is_admin() == false ):
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
    wp_enqueue_script( 'jquery' );
  endif;
}    
add_action('init', 'my_init_method');

// add first and last to menu item list 
function add_first_and_last($output) {
  $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
  $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
  return $output;
}
add_filter('wp_nav_menu', 'add_first_and_last');



// start a session and store the user role as a session variable
function get_user_role () {
    global $current_user, $wpdb;
    $role = $wpdb->prefix . 'capabilities';
    $current_user->role = array_keys($current_user->$role);
    $ncaps = count($current_user->role);
    $role = $current_user->role[$ncaps - 1];
  
    return $role;
}


/*************************************************
 * Hide the WP-Admin from Non Admins
 ************************************************/
add_action('init', 'block_admin_dashboard');
function block_admin_dashboard() {
    if ( is_admin() && !current_user_can('administrator')) {
        wp_redirect(get_bloginfo('url'));
    }
}

/*************************************************
 * adds read more to the excerpt when getting the excerpt from the content
 ************************************************/
function new_excerpt_more($more) {
       global $post;
	return ' <a class="read-more-link" href="'. get_permalink($post->ID) . '">... Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*************************************************
 * the return of the excerpt length
 ************************************************/
function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

?>