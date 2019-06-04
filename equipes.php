<?php 
/**
* Template Name: Equipes Page
*
* @package WordPress
* @subpackage Visite virtuelle
* @since Visite virtuelle
*/
get_header();
?>
<section class="page-title center bg-overlay-black-50 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo get_field('header_image')?>);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1 class="text-black"><?php echo the_title();?></h1>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i> <?php echo bloginfo('title'); ?></a> <i class="fa fa-angle-double-right"></i></li>
          <li><a href="#"><?php echo the_title();?></a></li>
       </ul>
     </div>
     </div>
  </div>
</section>
<section class="white-bg page-section-ptb">
 <div class="container-fluid">  
  <div class="row">
    <div class="col-lg-12">
      <div class="section-title text-center">
        <h2 class="title-effect"><?php echo get_field('header_titre');?></h2>
        <p><?php echo get_field('header_sous_titre');?></p>
      </div>
    </div>
  </div>
  <div class="row">  
      <?php 
          $args = array(
              'posts_per_page'    => -1,
              'post_type'     => 'equipes',
              'post_status' => 'publish',
              'orderby' => 'ID',
          );
          $equipes = new WP_Query( $args );
          if( $equipes->have_posts() ):
          while( $equipes->have_posts() ) : $equipes->the_post();
        ?>
        <div class="grid-item col-md-4">
              <div class="team">
                  <div class="team-photo">
                    <img class="img-fluid mx-auto" src="<?php echo the_post_thumbnail_url(); ?>"> 
                  </div>    
                  <div class="team-description"> 
                    <div class="team-info"> 
                         <h5> <a href="team-single.html" class="text-white"><?php echo the_title();?></a></h5>
                         <span class="text-white"><?php echo get_field('poste_de_la_personne');?></span>
                          <!-- <?php
                              $chaine = substr(get_the_content(), 0, 100);
                              $last_space = strrpos($chaine, " ");
                              $chaine = substr($chaine, 0, $last_space);
                              echo $chaine;
                          ?> -->
                    </div>
                   </div>
               </div> 
         </div>
        <?php endwhile; ?>
        <?php endif; ?>
 </div>
</div>
</section>
<?php get_footer(); ?>