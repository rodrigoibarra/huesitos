<?php
//jQuery Insert From Google
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
 }
  remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
  remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
  add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
  add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
  function my_theme_wrapper_start() {
    echo '<section id="main">';
  }
  function my_theme_wrapper_end() {
    echo '</section>';
  }
  add_theme_support( 'woocommerce' );?>
