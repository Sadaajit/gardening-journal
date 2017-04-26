<?php get_template_part('partials/head'); ?>
<html>
<body <?php body_class(); ?>>
   <?php get_template_part('partials/header'); ?>
  
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

          <div class="container">

              <div class="info-box">
              <div class="info-box-inner">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pexels-photo-sunbeams.jpg">
              
                <div class="pagecontent">
                  <a href="http://gardening-journal.dev/a-vision-for-a-new-civilization/"><h3>The Vision</h3></a>         
                  <p>To create Paradise on Earth we need to change our ideas about our physical surroundings, community life, education, economics, healthcare, and government.</p>                     
                  <a class="pagemore" href="http://gardening-journal.dev/a-vision-for-a-new-civilization/">Read More</a>
                </div>
                </div>
                </div>

                <div class="info-box">
                  <div class="info-box-inner">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/unsplash-industrial.jpg">
              
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

              <div class="info-box">
                <div class="info-box-inner">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/dome-home.jpg">
              
                <div class="pagecontent">
                  <a href="http://gardening-journal.dev/sustainable-technology/"><h3>Sustainable Technologies</h3></a>             
                    <h6>Ultra Low-Cost Construction</h6> 
                    <p>To solve the world housing shortage.</p>
                    <h6>Life Support Technologies</h6>
                    <p>To provide abundant food, energy,and natural waste recyling.</p>
                    <h6>Energy Technologies</h6> 
                    <p>To provide electrical energy for the home.</p> 
                    
                  <a class="pagemore" href="http://gardening-journal.dev/sustainable-technology/">Read More</a>
                </div>
              </div> 
              </div> 

              <div class="info-box">
                <div class="info-box-inner">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pexels-love.jpg">
              
                <div class="pagecontent">
                  <a href="http://gardening-journal.dev/community/"><h3>Community</h3></a>             
                  <h6>Education </h6>
                  <p>New designs for education.</p>
                  <h6>Community Information Networks</h6>
                  <p>Making communities work.</p>
                  <h6>Economics</h6>
                  <p>New spiritual planetary economics.</p>
                  <h6>Sustainable Communities </h6>
                  <p>How to create sustainable communities?</p> 
                    
                  <a class="pagemore" href="http://gardening-journal.dev/community/">Read More</a>
                </div>
              </div> 
              </div> 

              <div class="info-box">
                <div class="info-box-inner">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/unsplash-salad.jpg">
              
                  <div class="pagecontent">
                    <a href="http://gardening-journal.dev/wellbeing-body-mind-spirit/"><h3>Wellbeing</h3></a>             
                    <h6>Food </h6>
                    <p>How will we be fed?</p>
                    <h6>Vegetarianism</h6> 
                    <p>Why Vegetarian?</p>
                    <h6>Vibrant Health</h6>>
                    <p>Natural ways to create and maintain physical, mental, and emotional health.</p>
                          
                    <a class="pagemore" href="http://gardening-journal.dev/wellbeing-body-mind-spirit/">Read More</a>
                    </div>
                  </div> 
                   </div>   
            </div>    
          </div>
        </div>
    </div>
   

    <?php endwhile; ?>

</main>

    <?php get_template_part('partials/footer'); ?>
  </body>
</html>



