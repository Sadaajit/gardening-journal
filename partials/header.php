 <header class="banner">
 <div class="container">
 <div class="row">
   <div class="col">
      <div id="header-image">
       <img src="<?php echo get_template_directory_uri(); ?>/dist/images/IPRMockLogoSmall.jpg">
      </div>
   </div>
 
    <div class="col">
    <nav class="">

        

        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu( array( 
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav nav-tabs',
            'container'=> 'ul',
            'walker' => new bs4navwalker()
            ));
          endif;
        ?>  
          

        <?php get_search_form(); ?>

      </nav>
      </div>
</div>
</div>
  



</header>