<?php
// Funções para limpar o header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_post_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wo_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
function wpassist_remove_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

// Habilitar menus
add_theme_support('menus');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'MenuTopo' ),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

function custom_excerpt2($length){
  global $post;
  $content = strip_tags($post->post_content);

  $content = (mb_strlen($content) > $length) ? mb_substr($content,0,($length - 3), 'utf8' ).'...' : $content;

  return $content;
}

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
?>
