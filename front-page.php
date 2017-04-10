<?php get_template_part('partials/head'); ?>
<html>
  <body <?php body_class(); ?>>
    <?php get_template_part('partials/header'); ?>
    <div class="temp-banner"></div>
    <main class="container">

    <?php
      while (have_posts()) : the_post();
    ?>

        <div class="row">
          <div class="col-sm-12">
            <div class="home-page-content content">
              <h1 class="home-page-title">
              <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a>
              </h1>
              <?php the_content(); ?>
            </div>

          </div>
        </div>

    <?php
      endwhile; 
    ?>
    </main>


    <?php get_template_part('partials/footer'); ?>

  </body>
</html>