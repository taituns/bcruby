<?php get_header(); ?>
<!-- Header -->

  <div id="fullpage">
    <?php if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
      <div class="intro">
        <?php the_content(); ?>
      </div>
    <?php endwhile; else : endif; ?>
  
<!-- Footer -->
<?php get_footer(); ?>