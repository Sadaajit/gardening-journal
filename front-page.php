<?php get_template_part('partials/head'); ?>
<html>
<body <?php body_class(); ?>>
   <?php get_template_part('partials/header'); ?>
  
<main class="container">
  <div class="box">
  <p>This is a box.</p>
              </div>

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
<div class="box">
          <?php the_content(); ?>

              
   <!--<div class="container fadeInLeft">

            <div class="fourbox ">-->
              
              <div class="thumbbx">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pexels-photo-sunbeams.jpg"></div>
                <div class="pagecontent">
                <a href="http://gardening-journal.dev/future-choices/"><h3>The Future</h3></a>             
                <h6>The Problem </h6>
                <p>Why We Must Design a New Civilization.</p> 
                <h6>The Future </h6>
                <p>We Have a Choice to Create and Restore or to Destroy and Degenerate Our World</p> 
                    <a class="pagemore" href="http://gardening-journal.dev/future-choices/">Read More</a>
              </div>      
            </div>
          </div>

          <div class="clear"></div>

        </div>
      </div>
    </div>
    <?php
      endwhile; 
    ?>
    <div class="box">
  <p>This is a box.</p>
              </div>
    </main>
    <?php get_template_part('partials/footer'); ?>
  </body>
</html>



