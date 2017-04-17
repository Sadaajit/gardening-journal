<header class="banner">
  <div id="header-image">
    <img src=<?php echo get_template_directory_uri(); ?>/dist/images/IPRMockLogoB.jpg>
</div>
  <h1 class="header-title">Institute for Planetary Renewal</h1>
  <nav class="">

    <div class="container">

    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu( array( 
         'theme_location' => 'primary_navigation',
         'menu_class' => 'nav navbar-nav',
         'container'=> false,
         'walker' => new bs4navwalker()
         ));
      endif;
    ?>  
      
    </div>

  </nav>

</header>