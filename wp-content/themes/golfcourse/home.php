<?php get_header(); ?>
<div class="container-fluid spacer0">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:610px; text-align: center; width:100%; background-size: cover;">
       <h1 class="heading-title">S.E.A BEST GOLF COURSE DESIGN <span class="h6 heading-title-sub"> With All Facilities And Amenities </span>
		 <a href="<?php echo site_url('registration'); ?>" class=" btncourse-1">Registered Now</a> <a href="<?php echo site_url('login'); ?>" class=" btncourse-1" style="color:#fff;">Login Now</a>
		</h1>
      </div>
      <div class="item" style="background: linear-gradient(rgba(20, 20, 20, 0.4),rgba(20, 20, 20, 0.4)),center url(<?php echo get_template_directory_uri();?>/assets/img/4.jpg);background-color: #000000; padding: 20px 0; color: #fff; min-height:610px;text-align: center; width:100%; background-size: cover;">
       <h1 class="heading-title">S.E.A BEST GOLF COURSE DESIGN <span class="h6 heading-title-sub"> With All Facilities And Amenities </span>
		 <a href="<?php echo site_url('registration'); ?>" class=" btncourse-1">Registered Now</a> <a href="<?php echo site_url('login'); ?>" class=" btncourse-1" style="color:#fff;">Login Now</a>
		</h1>
      </div>
      <div class="item" style="background: linear-gradient(rgba(20, 20, 20, 0.4),rgba(20, 20, 20, 0.4)),center url(<?php echo get_template_directory_uri();?>/assets/img/5.jpg); background-color: #000000;padding: 20px 0; color: #fff;
min-height:610px; text-align: center; width:100%; background-size: cover;">
       <h1 class="heading-title">S.E.A BEST GOLF COURSE DESIGN <span class="h6 heading-title-sub"> With All Facilities And Amenities </span>
		 <a href="<?php echo site_url('registration'); ?>" class=" btncourse-1">Registered Now</a> <a href="<?php echo site_url('login'); ?>" class=" btncourse-1" style="color:#fff;">Login Now</a>
		</h1>
     </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a> </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 spacer0">
      <h1 class="text-center heading">S.E.A Golfcourses</h1>
      <ul class="list-inline portfolio-box">
        <?php 
		$args=array(
		 "post_type" =>"golfcourse-reviews",
	     "numberposts"=>1000,
	     "orderby"=>"date",
	     "order"=>"DESC");
	     $golfCoursePost=get_posts($args);
		 foreach($golfCoursePost as $golfCoursePost){
	     ?>
        <li class="text-center" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($golfCoursePost->ID),'single-post-thumbnail' ); echo $image[0]; ?>);
    background-color: #000000;
    padding: 20px 0;
    color: #fff;
    min-height:260px;
    text-align: center; width:100%; background-size: cover;"><a href="<?php echo site_url('golf-course-details/?golfcourseId='.$golfCoursePost->ID) ?>">
          <div class="portfolio-box-in">
            <h1><?php echo $golfCoursePost->post_title; ?> <span class="h6" style="display:block; position:relative; top:-7px; font-family: 'Fjalla One', sans-serif!important;"><?php echo $golfCoursePost->location;  ?></span> </h1>
          </div>
          </a> </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
<?php get_footer(); ?>
