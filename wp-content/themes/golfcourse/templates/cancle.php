<?php 
/*
Template Name: Cancel
*/
?>
<div class="well-lg">
  <h1>Your Transaction Has Been Canceled <br/>
    <span>S.E.A Golf Courses</span></h1>
</div>
<?php echo wp_redirect(site_url()); ?>
<style type="text/css">
.well-lg h1{
      background:#001541 !important;
	  padding:20px 20px 20px 20px;
	  width:600px;
	  color:#fff;
	  text-align:center;
	  margin:220px auto;
	  box-shadow:1px 1px 1px 1px #000;
}
span{ 
      font-size:19px;
}
</style>