
<header id="header" class="header default">
<!--=================================
 mega menu -->
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 xs-mb-10">
        <div class="topbar-call text-center text-md-left">
          <ul>
            <li><i class="fa fa-envelope-o theme-color"></i> gethelp@webster.com</li>
             <li><i class="fa fa-phone"></i> <a href="tel:+7042791249"> <span>+(704) 279-1249 </span> </a> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="topbar-social text-center text-md-right">
          <ul>
            <li><a href="#"><span class="ti-facebook"></span></a></li>
            <li><a href="#"><span class="ti-instagram"></span></a></li>
            <li><a href="#"><span class="ti-google"></span></a></li>
            <li><a href="#"><span class="ti-twitter"></span></a></li>
          </ul>
        </div>
      </div>
     </div>
  </div>
</div>
<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                <a href="<?php echo site_url();?>"><img id="logo_img" src="<?php echo $image[0]; ?>" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
          <?php
              wp_nav_menu( array(
                  'menu'              => 'Header',
                  'theme_location'    => 'Header',
                  'depth'             => 2,
                  'menu_class'        => 'menu-links',
                  'menu_id'           => 'mobile-demo',
                  'walker'  => new wp_bootstrap_navwalker()
              ));
          ?>
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>
