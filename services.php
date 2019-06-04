<?php 
/**
* Template Name: Services Page
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
<div class="container">
 <div class="row justify-content-center">
   <div class="col-lg-8">
       <div class="text-center">
        <h2 class="mb-30"><?php echo get_field('title_mot_directrice');?></h2>
        <?php echo get_field('mot_de_la_directrice');?>
      </div>
    </div>
 </div>
 <div class="divider pt-60"></div>
</div>
</section>


<section class="white-bg page-section-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
       <div class="section-title text-center">
            <h2 class="title-effect"><?php echo get_field('titre_presentation_des_services');?></h2>
          </div>
      </div>
    </div>
    <div class="row">
    	  <div class="col-md-4 xs-mb-40">
          <div class="feature-box h-100">
            <div class="feature-box-content">
            <i class="fa fa-paint-brush blue"></i>
            <h4>Unique &amp; Clean</h4>
            <p>It's always nice to browse some nice and clean websites. It is a good way to get inspiration for future projects.</p>
            </div>
            <a href="#">Lire la suite</a>
            <div class="feature-box-img" style="background-image: url('images/about/01.jpg');"></div>
            <span class="feature-border"></span>
          </div>
        </div>
        <div class="col-md-4 xs-mb-40">
          <div class="feature-box h-100 active">
            <div class="feature-box-content">
            <i class="fa fa-arrows"></i>
            <h4>Flexible Layout</h4>
            <p>Responsive and Flexible layout. This allows the web page to stretch and contract relative to the user's screen.</p>
            </div>
            <a href="#">Lire la suite</a>
            <div class="feature-box-img" style="background-image: url('images/about/02.jpg');"></div>
            <span class="feature-border"></span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box h-100">
            <div class="feature-box-content">
            <i class="fa fa-heart"></i>
            <h4>Trendy Design</h4>
            <p>Modern designed and developed websites using the latest techniques such as HTML5, CSS3 jQuery and PHP.</p>
            </div>
            <a href="#">Lire la suite</a>
            <div class="feature-box-img" style="background-image: url('images/about/03.jpg');"></div>
            <span class="feature-border"></span>
          </div>
        </div>
    </div>
     <div class="divider pt-50"></div>
  </div>
</section>

<section class="white-bg page-section-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
       <div class="section-title text-center">
            <h2 class="title-effect"><?php echo get_field('titre_presentation_du_personnel');?></h2>
          </div>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6 sm-mb-30">
           <div class="team team-hover">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="images/team/01.jpg" alt=""> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5><a href="team-single.html">Martin Smith</a></h5>
                     <span>CEO</span>
                </div>
                <div class="team-contact">
                  <span class="call"> +(704) 279-1249</span>
                  <span class="email"> <i class="fa fa-envelope-o"></i> letstalk@webster.com</span>
                </div>
               </div>
           </div>
          </div>
          <div class="col-lg-3 col-sm-6 sm-mb-30">
           <div class="team team-hover">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="images/team/02.jpg" alt=""> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5><a href="team-single.html">Paul Flavius</a></h5>
                     <span>Design</span>
                </div>
                <div class="team-contact">
                  <span class="call"> +(704) 279-1249</span>
                  <span class="email"> <i class="fa fa-envelope-o"></i> letstalk@webster.com</span>
                </div>
               </div>
           </div>
          </div>
          <div class="col-lg-3 col-sm-6 xs-mb-30">
           <div class="team team-hover">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="images/team/06.jpg" alt=""> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5><a href="team-single.html">Anne Smith</a></h5>
                     <span>Community</span>
                </div>
                <div class="team-contact">
                  <span class="call"> +(704) 279-1249</span>
                  <span class="email"> <i class="fa fa-envelope-o"></i> letstalk@webster.com</span>
                </div>
               </div>
           </div>
          </div>  
          <div class="col-lg-3 col-sm-6">
           <div class="team team-hover">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="images/team/04.jpg" alt=""> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5><a href="team-single.html">Sara Lisbon</a></h5>
                     <span>Graphic Designer</span>
                </div>
                <div class="team-contact">
                  <span class="call"> +(704) 279-1249</span>
                  <span class="email"> <i class="fa fa-envelope-o"></i> letstalk@webster.com</span>
                </div>
               </div>
           </div>
          </div>
       </div>
       <br>
       <div class="row">
	      <div class="col-lg-12">
	       <div class="section-title text-center">
	            <a class="button xs-mb-10 " href="<?php echo site_url();?>">Voire plus <i class="fa fa-plus"></i></a>
	          </div>
	      </div>
	    </div>
     <div class="divider pt-50"></div>
  </div>
</section>


<section class="white-bg page-section-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
       <div class="section-title text-center">
            <h2 class="title-effect"><?php echo get_field('titre_organigramme_du_bureau');?></h2>
          </div>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6 sm-mb-30">
           <div class="team team-hover">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="images/team/01.jpg" alt=""> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5><a href="team-single.html">Martin Smith</a></h5>
                     <span>CEO</span>
                </div>
                <div class="team-contact">
                  <span class="call"> +(704) 279-1249</span>
                  <span class="email"> <i class="fa fa-envelope-o"></i> letstalk@webster.com</span>
                </div>
               </div>
           </div>
          </div>
          <div class="col-lg-3 col-sm-6 sm-mb-30">
           <div class="team team-hover">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="images/team/02.jpg" alt=""> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5><a href="team-single.html">Paul Flavius</a></h5>
                     <span>Design</span>
                </div>
                <div class="team-contact">
                  <span class="call"> +(704) 279-1249</span>
                  <span class="email"> <i class="fa fa-envelope-o"></i> letstalk@webster.com</span>
                </div>
               </div>
           </div>
          </div>
          <div class="col-lg-3 col-sm-6 xs-mb-30">
           <div class="team team-hover">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="images/team/06.jpg" alt=""> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5><a href="team-single.html">Anne Smith</a></h5>
                     <span>Community</span>
                </div>
                <div class="team-contact">
                  <span class="call"> +(704) 279-1249</span>
                  <span class="email"> <i class="fa fa-envelope-o"></i> letstalk@webster.com</span>
                </div>
               </div>
           </div>
          </div>  
          <div class="col-lg-3 col-sm-6">
           <div class="team team-hover">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="images/team/04.jpg" alt=""> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5><a href="team-single.html">Sara Lisbon</a></h5>
                     <span>Graphic Designer</span>
                </div>
                <div class="team-contact">
                  <span class="call"> +(704) 279-1249</span>
                  <span class="email"> <i class="fa fa-envelope-o"></i> letstalk@webster.com</span>
                </div>
               </div>
           </div>
          </div>
       </div>
       <br>
       <div class="row">
	      <div class="col-lg-12">
	       <div class="section-title text-center">
	            <a class="button xs-mb-10 " href="<?php echo site_url();?>">Voire plus <i class="fa fa-plus"></i></a>
	          </div>
	      </div>
	    </div>
     <div class="divider pt-50"></div>
  </div>
</section>
<section class="action-box theme-bg full-width">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="action-box-text">
          <h3><?php echo get_field('titre_espace_telechargement');?></h3>
          <p><?php echo get_field('espace_telechargement_contenue');?></p>
        </div>
        <div class="action-box-button">
          <a class="button button-border white" href="#"><span>Téléchargement</span><i class="fa fa-download"></i></a> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>