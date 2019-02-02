<?php 
get_header();

?>
<div class="page-section <?php echo post_class(); ?>">
<div class="container-fluid no-padding heading-bg-container">
  <div class="row-fluid">
    <?php if( have_posts() ) :  ?>
    <?php while( have_posts() ) : the_post(); ?>
    <div class="container">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="title new-title">
          <?php the_title(); ?>
        </h1>
      </div>
      <?php if( has_post_thumbnail() ) {?>
      <div class="row content-sec">
        <div class="col-md-7 col-sm-7 col-xs-12 content">
          <?php the_content(); ?>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12 thum-img">
          <?php $imgUrl = wp_get_attachment_url( get_post_thumbnail_id(get_the_id()) ); ?>
          <img src="<?php echo $imgUrl;?>" heiht="100" width="100%"/> </div>
      </div>
      <?php } else{ ?>
      <div class="col-md-12 col-sm-12 col-xs-12 content-full">
        <?php the_content(); ?>
      </div>
      <?php } ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php

get_footer();

?>
