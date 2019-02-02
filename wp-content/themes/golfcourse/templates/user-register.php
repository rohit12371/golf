<?php
/*
 * Template Name: Registers
*/
?>
<?php get_header(); ?>
<div class="container-fluid" style="background: linear-gradient(
 rgba(20, 20, 20, 0.4),
 rgba(20, 20, 20, 0.4)
 ),center url(<?php echo get_template_directory_uri();?>/assets/img/6.jpg); padding: 20px 0;
color: #fff; min-height:270px; text-align: center; width:100%; background-size: cover;">
  <h1 style="margin-top: 147px; color: #fff!important; font-size: 47px; font-family: 'Fjalla One', sans-serif!important;">Create your account here...</h1>
</div>
<div class="container">
  <div class="row spacer">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 page-content">
        <div class="inner-box category-content">
          <div class="row">
            <div class="col-sm-12">
              <form  action="https://www.sandbox.paypal.com" id="signupForm" class="form-horizontal" method="post">
			  
			  
	  <input type="hidden" name="cmd" value="_xclick">
      <input type="hidden" name="business" value="er.rahulverma01@gmail.com">
      <input type="hidden" name="currency_code" value="USD">
      <input type="hidden" name="item_name"  class="item_name" id="item_name">
	  <input type="hidden" name="item_number" value="1">
      <input type="hidden" name="return" value="<?php the_permalink(get_page_by_path('success-2')->ID ); ?>">
      <input type="hidden" name="notify_url" value="<?php the_permalink( get_page_by_path('success-2')->ID ); ?>">
      <input type="hidden" name="cancel_return" value="<?php the_permalink( get_page_by_path('cancel-2')->ID ); ?>">
	  <input type="hidden" name="amount" value="900.00">
    
			  
			  
			  
                <fieldset>
                <div class="form-group">
                  <label class="col-md-4 control-label">First Name <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="firstname" placeholder="First Name" class="form-control input-md required" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Last Name <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="lastname" placeholder="Last Name" class="form-control input-md required" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Phone Number <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="phone" placeholder="Phone Number" class="form-control input-md required" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-md-4 control-label">Email <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input type="text" class="form-control required" name="email1" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Heimatclub <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="heimatclub" placeholder="Heimatclub " class="form-control input-md required" type="text" value="">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-md-4 control-label">Membership Card Type <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <select name="amount" class="form-control">
					  <option value="199">Platinum Crad</option>
					  <option value="99">Gold Crad</option>
					</select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Handicap <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input name="handicap" placeholder="Handicap" class="form-control input-md required" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-md-4 control-label">Password <sup class="text-danger"><strong>*</strong></sup></label>
                  <div class="col-md-6">
                    <input type="password" class="form-control required" id="inputPassword3" placeholder="Password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-8 col-md-offset-2">
                    <div style="clear:both"></div>
                    <button class="btn btn-default btn-lg btn-block" type="submit">Register</button>
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
  <!-- /.container -->
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
.btn-default:hover{ top-bottom:120px; background:#000; color:#FFFFFF; border-radius:52px;}
.btn-default:focus{ top-bottom:120px; background:#000; color:#FFFFFF;}
</style>
<script type="text/javascript">
  (function($){
    $("#signupForm").submit(function(){
     
            var f = 1 ;
      $("#signupForm input.required").each(function(){
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
      var formdata = $(this).serialize()+'&action=registerUser';
      $.post( '<?php echo admin_url("admin-ajax.php"); ?>', formdata, function(resp){
        resp = $.trim(resp);
        if(resp=='true'){
          $("#contact-msg").html('<strong>Thank you!</strong> Your registration has been submitted now.').removeClass('alert alert-danger').addClass('alert alert-success').show(500);
          $("#signupForm")[0].reset();
        }
        else{
          $("#contact-msg").html('<strong>ERROR</strong> Please Check Your Email-Id & Password'+resp).removeClass('alert alert-success').addClass('alert alert-danger').show(500);
        }
      });
    }
    });
  })(jQuery);
    </script>
<?php get_footer(); ?>
