<!DOCTYPE>
<html <?php language_attributes();?>>
<head>
<title>S.E.A Golf Courses</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
<style>

.navbar .navbar-nav > li > a, .navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li.active > a, .navbar .navbar-nav > li.active > a:hover, .navbar .navbar-nav > li.active > a:focus, .navbar .navbar-nav > li.th-accent
{
	    font-size: 16px !important;
}

.nav>li>a
{
	    padding: 12px 12px;
}

.navbar-nav
{
	      top: 30px;
}
</style>


</head>
<body <?php body_class('pace-done'); ?>>
<div class="header navbar-fixed-top">
  <div class="container">
    <div class="col-md-2"> <a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-1.png" style="margin-top:25px;" /></a> </div>
    <div class="col-md-10"> 
	<?php if(is_user_logged_in()){ ?>
	 <a href="<?php echo wp_logout_url(site_url()); ?>" class="btncourse">Logout</a>
	<?php } ?>
	<a href="#" class="btncourse">Stay Connected</a>  
	<a href="<?php echo site_url('book-a-tee-time'); ?>" class=" btncourse" style="color:#fff;">BOOK A TEE TIME</a>
      <nav id="myNavbar" class="navbar navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#"></a> </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php 
			   $args=array(
				'theme_location'=>'primary',  
				'container' => 'ul',
				'menu_class' => 'nav navbar-nav',
			   );
			   wp_nav_menu( $args);     
            ?>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
