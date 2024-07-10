<?php get_header(); ?>
<!-- Header -->

  <div id="fullpage">
    <?php if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
    <div class="content-fluid p-0 m-0">
      <div class="row p-0 m-0">
        <div class="col-sm-12 p-0 m-0">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <?php endwhile; else : endif; ?>
  </div>
  
<!-- Footer -->
<?php get_footer(); ?>