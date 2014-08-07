<?php get_header(); ?>
  <?php include("assets/includes/header-home.php"); ?>
  <section class="wrap">
    <div class="favoritos">
      <h2>Las marcas favoritas de nuestras mascotas</h2>
      <img class="brand" src="<?php bloginfo('template_url'); ?>/assets/build/img/nupec.png" />
      <img class="brand" src="<?php bloginfo('template_url'); ?>/assets/build/img/eukanuba.jpg" />
      <img class="brand" src="<?php bloginfo('template_url'); ?>/assets/build/img/purina.jpg" />
      <img class="brand" src="<?php bloginfo('template_url'); ?>/assets/build/img/royal-canin.jpg" />
      <img class="brand" src="<?php bloginfo('template_url'); ?>/assets/build/img/hills.png" />
    </div>

    <section id="recent">
      <h1>Recently Added</h1>
      <ul>
        <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <li class="span3">
                <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
                    <h3><?php the_title(); ?></h3>
                      <span class="price"><?php echo $product->get_price_html(); ?></span>
                </a>
                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
              </li>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
      </ul>
    </section>

  </section>



<?php get_footer(); ?>
