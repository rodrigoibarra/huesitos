<?php
    /*
    Template Name: Gatos
    */
define('WP_USE_THEMES', false);  get_header(); ?>
<?php include("assets/includes/header-site.php"); ?>
<section class="wrap">
  <section class="grid-productos">
    <nav class="nav">
    <h3><?php _e( 'Product Categories', 'woothemes' ) ?></h3>
      <ul>
      <?php wp_list_categories( 'taxonomy=product_cat&pad_counts=1&title_li=' ); ?>
      </ul>
    </nav>
    <?php woocommerce_content(); ?>
  </section>
</section>
<?php get_footer(); ?>
