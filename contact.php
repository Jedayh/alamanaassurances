<?php 
/**
* Template Name: Contact Page
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

<section class="theme-bg contact-2 clearfix o-hidden">
   <div class="container-fluid pos-r">
    <div class="row">
    <div class="col-lg-6 map-side g-map map-right" id="map" data-type="black">
    </div>
   </div>
  </div>
  <div class="container">
  <div class="row">
      <div class="col-lg-5"> 
      <div class="contact-3-info page-section-ptb text-white">
       <div class="clearfix">
           <h2 class="text-white">Nos informations</h2>
           <div class="text-white"><?php echo get_field('petit_mot');?></div>

           <ul class="addresss-info list-unstyled"> 
            <li><i class="ti-map-alt"></i> <p>BP: <?php echo get_field('bp')?></p> </li>
            <li><i class="ti-mobile"></i>Téléphone: <?php echo get_field('phone')?></li>
            <li><i class="ti-email"></i>Email: <?php echo get_field('email')?></li>
          </ul>
          <!-- <div class="social-icons social-border rounded color-hover mt-50">
                <ul>
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i> </a></li>
                  <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
                  <li class="social-behance"><a href="#"><i class="fa fa-behance"></i> </a></li>
                  <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                </ul>
             </div> -->
            </div>          
         </div>
      </div>
     </div>
    </div>
</section>
<section class="page-section-ptb contact-2">
  <div class="container">
  <div class="row justify-content-center text-center mb-50">
  <div class="col-md-8">
      <div class="section-title">  
       <h2 class="title-effect">Contactez nous</h2>
       </div>
   </div>
   </div>
  <div class="row">
  <div class="col-lg-12">
    <div id="formmessage">Success/Error Message Goes Here</div>
     <form id="contactform" role="form" method="post" action="http://themes.potenzaglobalsolutions.com/html/webster-responsive-multi-purpose-html5-template/php/contact-form.php">
      <div class="contact-form clearfix">
        <div class="section-field">
          <input id="name" type="text" placeholder="Name*" class="form-control" name="name">
         </div> 
         <div class="section-field">
            <input type="email" placeholder="Email*" class="form-control" name="email">
          </div>
         <div class="section-field">
            <input type="text" placeholder="Phone*" class="form-control" name="phone">
          </div>
         <div class="section-field textarea">
           <textarea class="input-message form-control" placeholder="Comment*" rows="7" name="message"></textarea>
          </div>
		    <!-- Google reCaptch-->
			<!-- <div class="g-recaptcha section-field clearfix" data-sitekey="6LfNmS0UAAAAAO_ZVFQoQmkGPMlQXmKgVbizHFoq"></div> -->
			<div class="section-field submit-button">
				<input type="hidden" name="action" value="sendEmail">
			   <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Envoyez </span> <i class="fa fa-paper-plane"></i></button>
		   </div>
          </div> 
        </form>
       <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-02.svg" alt=""></div>
      </div>
     </div>
    </div>
</section>
<section class="theme-bg contact-2 clearfix o-hidden">
  	<div class="row">
  		<img src="<?php echo get_field('map')?>" class="map-imgs">
     </div>
</section>
<?php get_footer(); ?>