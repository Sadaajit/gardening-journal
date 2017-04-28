<?php get_template_part('partials/head'); ?>
<html>
<body <?php body_class(); ?>>
  <?php get_template_part('partials/header'); ?>
  
<main class="container">
  <div class="row">

  <?php
    while (have_posts()) : the_post();
  ?>

  <div class="row">
    <div class="col-sm-12">
      <div class="home-page-content content">
        <h1 class="home-page-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        
        <?php the_content(); ?>

        <div class="container">

          <div class="info-box">
          <div class="info-box-inner">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pexels-photo-sunbeams.jpg">
          
            <div class="pagecontent">
              <a href="http://gardening-journal.dev/a-vision-for-a-new-civilization/"><h2>The Vision</h2></a>         
              <p>To Create Paradise on Earth We Need to Change Our Ideas About Our Physical Surroundings, Community Life, Education, Economics, Healthcare, and Government.</p>                     
              <button class="fp-button"><a class="txt-color" href="http://gardening-journal.dev/a-vision-for-a-new-civilization/">Read More</a>
            </div>
          </div>
          </div>

            <div class="info-box">
              <div class="info-box-inner">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/unsplash-industrial.jpg">
          
                <div class="pagecontent">
                  <a href="http://gardening-journal.dev/future-choices/"><h2>The Future</h2></a>             
                  <h4>The Problem </h4>
                  <p>Why We Must Design a New Civilization.</p> 
                  <h4>The Future </h4>
                  <p>We Have a Choice to Create and Restore or to Destroy and Degenerate Our World</p> 
                    
                  <button class="fp-button"><a class="txt-color" href="http://gardening-journal.dev/future-choices/">Read More</a>
                </div>
            </div> 
            </div> 

            <div class="info-box">
            <div class="info-box-inner">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/images/dome-home.jpg">
          
              <div class="pagecontent">
                <a href="http://gardening-journal.dev/sustainable-technology/"><h2>Sustainable Technologies</h2></a>             
                  <h4>Ultra Low-Cost Construction</h4> 
                  <p>To Solve the World Housing Shortage.</p>
                  <h4>Life Support Technologies</h4>
                  <p>To Provide Abundant Food, Energy, and Natural Waste Recyling.</p>
                  <h4>Energy Technologies</h4> 
                  <p>To Provide Electrical Energy for the Home.</p> 
                  
                <button class="fp-button"><a class="txt-color" href="http://gardening-journal.dev/sustainable-technology/">Read More</a>
              </div>
           </div> 
           </div> 

          <div class="info-box">
            <div class="info-box-inner">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pexels-love.jpg">
          
            <div class="pagecontent">
              <a href="http://gardening-journal.dev/community/"><h2>Community</h2></a>             
              <h4>Education </h4>
              <p>New Designs for Education.</p>
              <h4>Community Information Networks</h4>
              <p>Making Communities Work.</p>
              <h4>Economics</h4>
              <p>New Spiritual Planetary Economics.</p>
              <h4>Sustainable Communities </h4>
              <p>How to Create Sustainable Communities</p> 
                
              <button class="fp-button"><a class="txt-color" href="http://gardening-journal.dev/community/">Read More</a>
            </div>
          </div> 
          </div> 

          <div class="info-box">
            <div class="info-box-inner">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/unsplash-salad.jpg">
          
              <div class="pagecontent">
                <a href="http://gardening-journal.dev/wellbeing-body-mind-spirit/"><h2>Wellbeing</h2></a>             
                <h4>Food </h4>
                <p>How Will We Be Fed?</p>
                <h4>Vegetarianism</h4> 
                <p>Why Vegetarian?</p>
                <h4>Vibrant Health</h4>
                <p>Natural Ways to Create and Maintain Physical, Mental, and Emotional Health.</p>
                      
                <button class="fp-button"><a class="txt-color" href="http://gardening-journal.dev/wellbeing-body-mind-spirit/">Read More</a>
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



