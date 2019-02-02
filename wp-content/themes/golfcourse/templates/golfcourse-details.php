<?php
/*
 * Template Name: Golfcourse-Details
 * 
*/
?>
<?php get_header(); ?>
<div class="container-fluid" style="padding:0px; margin:0px;">
  <div class="row-fluid" style="padding:0px; margin:0px;">
    <div class="col-md-12 col-centered" style="padding:0px; margin:0px;">
      <div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
        <div class="carousel-inner">
          <?php 
		     if(!empty($_GET['golfcourseId'])){
		     $golfcourseId=$_GET['golfcourseId'];
		     $golfcourseImages=$dynamic_featured_image->get_featured_images($golfcourseId);
		     for($i=0;$i<sizeof($golfcourseImages);++$i){
		   ?>
          <div class="item <?php if($i==1){ ?> active <?php } ?>">
            <div class="carousel-col" style="padding:0px; margin:0px;">
              <div class="block red img-responsive"> <img src="<?php echo $golfcourseImages[$i]['full']; ?>" /> </div>
            </div>
          </div>
          <?php	 
		    }
		   }
		 ?>
        </div>
        <!-- Controls -->
        <div class="left carousel-control"> <a href="#carousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> </div>
        <div class="right carousel-control"> <a href="#carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <?php 
	     if(!empty($_GET['golfcourseId'])){
		 $golfcourseId=$_GET['golfcourseId'];
	     $golfCoursePost=get_post($golfcourseId);
	  ?>
    <div class="col-md-12 spacer">
      <h3><?php echo $golfCoursePost->post_title; ?>
        <div class="pull-right"> <a href="#" class="btn btn-default" style="min-width:299px;">Go To Golfcourse Home</a> <span style="display:block; position:relative; top:-18px"><a href="#" class="btn btn-default">Booking With Golfcourse</a></span></div>
      </h3>
      <h5><strong><?php echo $golfCoursePost->location; ?></strong></h5>
      <p class="col-md-8"><?php echo $golfCoursePost->post_content; ?></p>
    </div>
    <div class="col-md-4">
      <h5 class="bars"><strong>Course Information</strong> </h5>
    </div>
    <div class="col-md-8">
      <h5 class="bars"><strong>Facilities</strong> </h5>
    </div>
    <div class="col-md-4">
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/holes.webp" /></strong> <span class="sectiondetials"><?php echo $golfCoursePost->golf_course_hole."Holes"; ?></span></p>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/par.webp" /></strong> <span class="sectiondetials">Par: <?php echo $golfCoursePost->golf_course_par; ?></span></p>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/length.webp" /></strong> <span class="sectiondetials">Length: <?php echo $golfCoursePost->golf_course_length."Yards"; ?></span></p>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/designer.webp" /></strong> <span class="sectiondetials">Designer: <?php echo $golfCoursePost->golf_course_designer."Holes"; ?></span></p>
    </div>
    <div class="col-md-4">
      <?php if($golfCoursePost->golf_academy==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/golfacademy.webp" /></strong> <span class="sectiondetials">Golf Academy</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_rental==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/clubrental.webp" /></strong> <span class="sectiondetials"> Club Rental</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_driving_range==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/drivingrange.webp" /></strong> <span class="sectiondetials"> Driving Range</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_carts==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/golfcarts.webp" /></strong> <span class="sectiondetials"> Golf Carts</span></p>
      <?php } ?>
    </div>
    <div class="col-md-4">
      <?php if($golfCoursePost->golf_dining==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dining.webp" /></strong> <span class="sectiondetials">Dining</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_accommodation==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/accommodation.webp" /></strong> <span class="sectiondetials">Accommodation</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_pga_instructor==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/PGAInstructor.webp" /></strong> <span class="sectiondetials">PGA Instructor</span></p>
      <?php } ?>
      <?php if($golfCoursePost->golf_pro_shop==1){?>
      <p><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ProShop.webp" /></strong> <span class="sectiondetials">Pro Shop</span></p>
      <?php } ?>
    </div>
    <div class="spacer">&nbsp;</div>
    <div class="col-md-12 text-center"> <a href="<?php if(!empty($golfCoursePost->golf_website_url)){ echo $golfCoursePost->golf_website_url; }else{ echo "#"; } ?>" class="btn btn-default" target="_blank">Visit To Golfcourse Website</a>
      <ul class="list-inline">
        <li><a href="<?php if(!empty($golfCoursePost->facebook_url)){ echo $golfCoursePost->facebook_url; }else{ echo "#"; } ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.webp" /></a></li>
        <li><a href="<?php if(!empty($golfCoursePost->youtube_url)){ echo $golfCoursePost->youtube_url; }else{ echo "#"; } ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.webp" /></a></li>
        <li><a href="<?php if(!empty($golfCoursePost->twitter_url)){ echo $golfCoursePost->twitter_url; }else{ echo "#"; } ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.webp" /></a></li>
        <li><a href="<?php if(!empty($golfCoursePost->instagram_url)){ echo $golfCoursePost->instagram_url; }else{ echo "#"; } ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instragram.webp" /></a></li>
      </ul>
    </div>
    <?php } ?>
  </div>
</div>
<style type="text/css">
body{ background:#fff;}
.navbar-static-top {
    border-bottom: 2px solid #fff!important;
}
.navbar {
    background-color: #2f2c2c;
    margin-bottom:0px;
}
.sectiondetials{position: relative; left: 27px;top: 3px; font-weight: 500; font-family: Poppins, Helvetica, Arial, sans-serif;}
.countryBox{ text-align:center;}
.countryBox span{ color:#FFFFFF; font-size:41px;}
.countryBox a{ color:#FFFFFF; float:right;}
.portfolio-box li { background: #333; border-right: 1px solid #fff;  border-bottom: 1px solid #fff; position: relative;  -webkit-backface-visibility: hidden;}
.portfolio-box .portfolio-box-in { left: 0; top:90%; z-index: 1; width: 100%;
visibility: visible; min-height: 150px; margin-top: -75px; text-align: center; position: absolute; font-family: "Open Sans", Arial, sans-serif;}
.portfolio-box .portfolio-box-in p, .portfolio-box .portfolio-box-in h5 {color: #fff;
visibility: visible;text-shadow:1px 1px 1px #000;}
.navbar .navbar-nav > li > a, .navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li.active > a, .navbar .navbar-nav > li.active > a:hover, .navbar .navbar-nav > li.active > a:focus, .navbar .navbar-nav > li.th-accent {font-family: Poppins, Helvetica, Arial, sans-serif;font-size: 15px;font-weight: 500;text-transform: uppercase;color: #fff;}
.th-upper-footer {background: #000;color:#fff!important;}
.th-upper-footer h1.widget-title, .th-upper-footer h2.widget-title, .th-upper-footer h3.widget-title, .th-upper-footer h4.widget-title, .th-upper-footer h5.widget-title, .th-upper-footer h6.widget-title, .th-upper-footer a:hover {color: #fff;}
.th-upper-footer p, .th-upper-footer a, .th-upper-footer ul li, .th-upper-footer ol li, .th-upper-footer .soc-widget i {color: #fff;}
.th-lower-footer {padding-top: 0px!important;background: #000;}
.th-lower-footer p, .th-lower-footer a, .th-lower-footer ul li, .th-lower-footer ol li, .th-lower-footer .soc-widget i {color: #fff;}
.headhesive--clone {background-color: #000 !important;}
.headhesive--clone .navbar-nav > li > a {color: #ffffff !important;}
.btn-default{ top-bottom:120px; background:#000; color:#FFFFFF; margin-bottom:20px;}
.btn-default:hover{ top-bottom:120px; background:#000; color:#FFFFFF; border-radius:52px;}
.btn-default:focus{ top-bottom:120px; background:#000; color:#FFFFFF;}
/**********************************************/
.col-centered{ float: none; margin: 0 auto;}
.carousel-control { width: 8%; width: 0px;}
.carousel-control.left,.carousel-control.right{ margin-right: 40px; margin-left: 32px; background-image: none; opacity: 1;}
.carousel-control > a > span {color: white; font-size: 29px !important;}
.carousel-col { position: relative; min-height: 1px; padding: 5px; float: left;}
.active > div { display:none; }
.active > div:first-child { display:block; }
/*xs*/
@media (max-width: 767px) {
.carousel-inner .active.left { left: -50%; }
.carousel-inner .active.right { left: 50%; }
.carousel-inner .next{ left:  50%; }
.carousel-inner .prev{ left: -50%; }
.carousel-col{ width: 50%; }
.active > div:first-child + div { display:block; }
}
/*sm*/
@media (min-width: 768px) and (max-width: 991px) {
.carousel-inner .active.left { left: -50%; }
.carousel-inner .active.right { left: 50%; }
.carousel-inner .next        { left:  50%; }
.carousel-inner .prev		     { left: -50%; }
.carousel-col                { width: 50%; }
.active > div:first-child + div { display:block; }
}
/*md*/
@media (min-width: 992px) and (max-width: 1199px) {
.carousel-inner .active.left { left: -33%; }
.carousel-inner .active.right { left: 33%; }
.carousel-inner .next{ left:  33%; }
.carousel-inner .prev{ left: -33%; }
.carousel-col{ width: 33%; }
.active > div:first-child + div { display:block; }
.active > div:first-child + div + div { display:block; }
}
/*lg*/
@media (min-width: 1200px) {
.carousel-inner .active.left { left: -25%; }
.carousel-inner .active.right{ left:  25%; }
.carousel-inner .next{ left:  25%; }
.carousel-inner .prev{ left: -25%; }
.carousel-col { width: 25%; }
.active > div:first-child + div { display:block; }
.active > div:first-child + div + div { display:block; }
.active > div:first-child + div + div + div { display:block; }
}
.carousel-col img{ width:348px!important; height:337px!important;;}
</style>
<script type="text/javascript">
jQuery('.carousel[data-type="multi"] .item').each(function() {
	var next = jQuery(this).next();
	if (!next.length) {
		next =jQuery(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo(jQuery(this));
	for (var i = 0; i < 2; i++) {
		next = next.next();
		if (!next.length) {
			next = jQuery(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo(jQuery(this));
	}
});
</script>
<?php get_footer(); ?>
