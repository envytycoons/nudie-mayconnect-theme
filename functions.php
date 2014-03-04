<?php 
// the main menu
function nudie_menu(){
  wp_nav_menu(
    array(
      'theme_location'  => 'main-menu',
      'menu'            => 'main-menu',
      'container'       => false,
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'main-menu',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul>%3$s</ul>',
      'depth'           => 0,
      'walker'          => ''
    ));
  } 

function register_nudie_menu() {
  register_nav_menus(array( // Using array to specify more menus if needed
    'main-menu' => __('Main Menu', 'nudie_mayconnect_theme'), // Main Navigation
    // 'sidebar-menu' => __('Sidebar Menu', 'nudie_mayconnect_theme'), // Sidebar Navigation
    // 'extra-menu' => __('Extra Menu', 'nudie_mayconnect_theme') // Extra Navigation if needed (duplicate as many as you need!)
  ));
}
add_action( 'init', 'register_nudie_menu' );
?>