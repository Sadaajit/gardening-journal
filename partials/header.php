 <nav class="">

    <div class="container">

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
      
    </div>

  </nav>

<header class="banner">
  <div id="header-image">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/IPRMockLogoB.jpg">
</div>

</header>