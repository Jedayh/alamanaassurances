<!--=================================
 banner -->
 
 <section class="rev-slider">
  <div id="rev_slider_267_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="webster-slider-1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
  <div id="rev_slider_267_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
<ul>  <!-- SLIDE  -->
  <?php if ( have_rows('configuration') ) : 
      $i = 1;
      $index = 755;
      while ( have_rows('configuration') ) : the_row(); 
        $image_slider  = get_sub_field('image_slider');
        $url = get_sub_field('url');
        $premiere_description = get_sub_field('premiere_description');
        $seconde_description = get_sub_field('seconde_description');
  ?>
    <li data-index="rs-<?php echo $index ?>" data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"  data-thumb="<?php echo $image_slider;?>"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    <!-- MAIN IMAGE -->
        <img src="<?php echo $image_slider;?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
    <!-- LAYERS -->

    <!-- LAYER NR. 1 -->
    <div class="tp-caption   tp-resizeme" 
          id="slide-<?php echo $index ?>-layer-<?php echo $i ?> " 
          data-x="68" 
          data-y="center" data-voffset="-30" 
          data-width="['auto']"
          data-height="['auto']"

          data-type="text" 
          data-responsive_offset="on" 

          data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
          data-textAlign="['left','left','left','left']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"
          style="z-index: 5; white-space: nowrap; font-size: 40px; line-height: 40px; font-weight: 200; color: rgba(255,255,255,1); font-family:Montserrat ;"><?php echo $seconde_description;?></div>

    <!-- LAYER NR. 2 -->
    <div class="tp-caption   tp-resizeme  rev-color" id="slide-<?php echo $index ?>-layer-2" 
          data-x="right" data-hoffset="60" 
          data-y="center" data-voffset="-57" 
          data-width="['auto']"
          data-height="['auto']"
          data-type="text" 
          data-responsive_offset="on" 
          data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
          data-textAlign="['left','left','left','left']"
          data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]"
          data-paddingbottom="[0,0,0,0]"
          data-paddingleft="[0,0,0,0]"
          style="z-index: 6; white-space: nowrap; font-size: 50px; line-height: 30px; font-weight: 600; color: #84ba3f; font-family:Dosis;"><?php echo $premiere_description; ?> </div>

    <!-- LAYER NR. 8 -->
    <a class="tp-caption rev-btn  tp-resizeme  rev-button" href="<?php echo $url;?>" target="_self" id="slide-<?php echo $index ?>-layer-15" 
            data-x="center" data-hoffset="" 
            data-y="center" data-voffset="160" 
            data-width="['auto']"
            data-height="['auto']"

            data-type="button" 
            data-actions=''
            data-responsive_offset="on" 

            data-frames='[{"delay":6000,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,0,0);bs:solid;bw:0 0 0 0;"}]'
            data-textAlign="['inherit','inherit','inherit','inherit']"
            data-paddingtop="[12,12,12,12]"
            data-paddingright="[35,35,35,35]"
            data-paddingbottom="[12,12,12,12]"
            data-paddingleft="[35,35,35,35]"

            style="z-index: 17; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 600; color: rgba(255,255,255,1); font-family:Montserrat ;text-transform:uppercase;background-color:rgb(132,186,63);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">En savoir plus</a>
  </li>

  <?php 
    $i += 1;
    $index += 1;
    endwhile; endif; ?>
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
</div>   
</section>

<!--=================================
 banner -->