<?php get_header(); ?>
  <section class="posts cf">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_post(); ?>
    <?php endwhile; endif; ?>
  </section>
  <aside>
    	<?php get_sidebar(); ?>
  </aside>
<?php get_footer(); ?>
