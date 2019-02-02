<?php
/*
 * Template Name: Book-A-Tee-Time
*/
?>
<?php get_header(); ?>
<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">BOOK A TEE TIME...</h1>
</div>
<div class="container">
  <div class="row spacer">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 page-content">
        <div class="inner-box category-content">
          <div class="row">
            <div class="col-sm-12">
              <form id="bookATeeTimeForm" class="form-horizontal" method="post">
                <?php 
		         $currentUserId=get_current_user_id();
		         $userData=get_userdata($currentUserId);
		        ?>
                <?php if($userData->_credit==0 && !empty($currentUserId)){ ?>
                <p class="alert alert-default"><i class="fa fa-info-circle fa-2x"></i> Member Card Credit Has Been Finished Now. Zero Credit In Your Card</p>
                <?php } ?>
                <input type="hidden" name="user_id" value="<?php echo get_current_user_id(); ?>" />
                <input type="hidden" name="credit" value="<?php $credit=$userData->_credit;
				 if($credit>0){ echo $credit-1;}else{ echo "0";}
				 ?>" />
                <fieldset>
                <div style="border-bottom:1px solid #ccc; margin-bottom:12px;">
                  <label class="label label-default"> User Personal Information</label>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">First Name <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="first_name" id="first_name" placeholder="First Name" class="form-control input-md" type="text" value="<?php echo $userData->first_name; ?>" disabled="disabled">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Last Name <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="last_name" id="last_name" placeholder="Last Name" class="form-control input-md" type="text" value="<?php echo $userData->last_name; ?>" disabled="disabled">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-md-4 control-label">Email <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $userData->user_email; ?>" disabled="disabled">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Phone <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="phone" id="phone" placeholder="Phone Number" class="form-control input-md" type="text" value="<?php echo $userData->_phone; ?>" disabled="disabled">
                  </div>
                </div>
                <div style="border-bottom:1px solid #ccc; margin-bottom:12px;">
                  <label class="label label-default">User Booking Information</label>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Club you want to play <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <select name="club_you_want_to_play" id="club_you_want_to_play" class="form-control input-md required">
                      <option value="">Club you want to play</option>
                      <?php 
				     $args=array(
				     "post_type" =>"golfcourse-reviews",
				     "numberposts"=>1000,
				     "orderby"=>"date",
				     "order"=>"DESC");
				     $golfCoursePost=get_posts($args);
				     foreach($golfCoursePost as $golfCoursePost){
	                ?>
                      <option value="<?php echo $golfCoursePost->ID; ?>"><?php echo $golfCoursePost->post_title; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Date <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="date_of_booking" id="date_of_booking" placeholder="Date" class="form-control input-md required" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">No. of Members Playing <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <select name="members_playing" id="members_playing" class="form-control input-md required">
                      <option value="">No. of Members Playing</option>
                      <option value="1" data-index="0">1</option>
                      <option value="2" data-index="1">2</option>
                      <option value="3" data-index="2">3</option>
                      <option value="4" data-index="3">4</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">No. of Guests Playing <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <select name="guests_playing" id="guests_playing" class="form-control input-md required">
                      <option value="">No. of Guests Playing</option>
                      <option value="0" data-index="0">1</option>
                      <option value="1" data-index="1">2</option>
                      <option value="2" data-index="2">3</option>
                      <option value="3" data-index="3">4</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Preferred Tee Time <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <select class="form-control" name="preferred_tee_time" id="preferred_tee_time">
                      <option value="" data-index="0">Preferred Tee Time</option>
                      <option value="Before 8am" data-index="0">Before 8am</option>
                      <option value="8am-9am" data-index="1">8am-9am</option>
                      <option value="9am-10am" data-index="2">9am-10am</option>
                      <option value="10am-11am" data-index="3">10am-11am</option>
                      <option value="11am-12pm" data-index="4">11am-12pm</option>
                      <option value="12pm-1pm" data-index="5">12pm-1pm</option>
                      <option value="1pm-2pm" data-index="6">1pm-2pm</option>
                      <option value="2pm-3pm" data-index="7">2pm-3pm</option>
                      <option value="3pm-4pm" data-index="8">3pm-4pm</option>
                      <option value="After 4pm" data-index="9">After 4pm</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-8 col-md-offset-2">
                    <div style="clear:both"></div>
                    <button class="btn btn-default btn-lg btn-block" type="submit" <?php if($userData->_credit==0 || !empty($currentUserId)){ ?> disabled="disabled" <?php } ?>>BOOK A TEE TIME</button>
                    <h2 style="font-family: 'Fjalla One', sans-serif; text-align:center; cursor:pointer;" onclick="window.location.href='<?php echo site_url('login'); ?>'">Please Login For Book A Tee Time</h2>
                  </div>
                </div>
                <div style="display:none;" id="contact-msg"></div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
.page-content{ margin-top:50px;}
body{ background:#fff;}
.title-2 {
    border-bottom: 1px solid #e6e6e6;
    font-size: 18px;
    margin-bottom: 20px;
    text-transform: uppercase;
}
.form-control {
    background-color: #fff;
    background-image: none;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555;
    display: block;
    font-size: 12px;
    height: 43px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
.sectiondetials{position: relative; left: 27px;top: 3px; font-weight: 500; font-family: Poppins, Helvetica, Arial, sans-serif;}
.countryBox{ text-align:center;}
.countryBox span{ color:#FFFFFF; font-size:41px;}
.countryBox a{ color:#FFFFFF; float:right;}
.portfolio-box li { background: #333; border:7px solid #fff!important; position: relative;  -webkit-backface-visibility: hidden;}
.portfolio-box .portfolio-box-in { left: 0; top:90%; z-index: 1; width: 100%;
visibility: visible; min-height: 150px; margin-top: -75px; text-align: center; position: absolute; font-family: "Open Sans", Arial, sans-serif;}
.portfolio-box .portfolio-box-in p, .portfolio-box .portfolio-box-in h5 {color: #fff;
visibility: visible;text-shadow:1px 1px 1px #000;}
.navbar {background-color: #000; margin-bottom: 0;}
.navbar .navbar-nav > li > a, .navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li.active > a, .navbar .navbar-nav > li.active > a:hover, .navbar .navbar-nav > li.active > a:focus, .navbar .navbar-nav > li.th-accent {font-family: Poppins, Helvetica, Arial, sans-serif;font-size: 15px;font-weight: 500;text-transform: uppercase;color: #fff;}
.th-upper-footer {background: #000;color:#fff!important;}
.th-upper-footer h1.widget-title, .th-upper-footer h2.widget-title, .th-upper-footer h3.widget-title, .th-upper-footer h4.widget-title, .th-upper-footer h5.widget-title, .th-upper-footer h6.widget-title, .th-upper-footer a:hover {color: #fff;}
.th-upper-footer p, .th-upper-footer a, .th-upper-footer ul li, .th-upper-footer ol li, .th-upper-footer .soc-widget i {color: #fff;}
.th-lower-footer {padding-top: 0px!important;background: #000;}
.th-lower-footer p, .th-lower-footer a, .th-lower-footer ul li, .th-lower-footer ol li, .th-lower-footer .soc-widget i {color: #fff;}
.headhesive--clone {background-color: #000 !important;}
.headhesive--clone .navbar-nav > li > a {color: #ffffff !important;}
.btn-default{ top-bottom:120px; background:#000; color:#FFFFFF; margin-bottom:20px;}
.btn-default:default{ top-bottom:120px; background:#000; color:#FFFFFF; margin-bottom:20px;}
.btn-default:hover{ top-bottom:120px; background:#000; color:#FFFFFF; margin-bottom:20px;}
.btn-default:focus{ top-bottom:120px; background:#000; color:#FFFFFF; margin-bottom:20px;}
.btn-default:hover{ top-bottom:120px; background:#000; color:#FFFFFF; border-radius:52px;}
.btn-default:focus{ top-bottom:120px; background:#000; color:#FFFFFF;}
.alert-default{ background:#ccc; font-family: 'Fjalla One', sans-serif;}
</style>
<script type="text/javascript">
  (function($){
    $("#bookATeeTimeForm").submit(function(e){
      e.preventDefault();
            var f = 1 ;
      $("#bookATeeTimeForm input.required").each(function(){
        var va = $(this).val();
        if( va == '' || typeof(va) == 'undefined' || va == null ){
          f = 0;
          if( $(this).next('label.error').length == 0 ){
            var lbl = '<label class="error alert-danger">This field is required</label>';
            $(this).after(lbl);
          }
        }
      });
     if( f == 1 ){   
      var formdata = $(this).serialize()+'&action=booking_club&first_name='+$("#first_name").val()+'&last_name='+$("#last_name").val()+'&email='+$("#email").val()+'&phone='+$("#phone").val();
      $.post( '<?php echo admin_url("admin-ajax.php"); ?>', formdata, function(resp){
        resp = $.trim(resp);
        if(resp=='true'){
          $("#contact-msg").html('<strong>Thank you!</strong> Your booking process of club has been submitted now.').removeClass('alert alert-danger').addClass('alert alert-success').show(500);
          $("#bookATeeTimeForm")[0].reset();
		  setInterval(function(){ location.reload(); }, 3000);
        }
        else{
          $("#contact-msg").html('<strong>ERROR</strong> Your booking process of club has been stopped now.'+resp).removeClass('alert alert-success').addClass('alert alert-danger').show(500);
        }
      });
    }
    });
  })(jQuery);
    </script>
<?php get_footer(); ?>
