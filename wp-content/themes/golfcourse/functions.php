<?php
function my_theme_menus(){
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
	));
	add_theme_support('post-thumbnails');
    }
add_action('after_setup_theme','my_theme_menus');
show_admin_bar(false);
/*****************************************************************************************/
/*****************************************************************************************/
/*This Function Use For Creating Golf Course*/
function customCreateGolfCourse() {
    $args = array(
        'label' => 'GolfCourse',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'golfcourse-reviews'),
        'query_var' => true,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array(
            'title',
            'editor',
            'page-attributes',)
        );
    register_post_type( 'golfcourse-reviews', $args );
}
add_action( 'init', 'customCreateGolfCourse' );
/*****************************************************************************************/
/*****************************************************************************************/
function add_golfcourse_meta_boxes() {
	add_meta_box("cafe_contact_meta", "Please Enter Course Information & Facilities", "add_contact_details_golfcourse_meta_box", "golfcourse-reviews", "normal", "low");
}
function add_contact_details_golfcourse_meta_box()
{
	global $post;
	$custom = get_post_custom( $post->ID );
	?>
<style>
.width99 {width:99%;}
</style>
<p>
  <label>Golf Course Name:</label>
  <br />
  <input type="text" name="golfcourse_name" class="width99" value="<?= @$custom["golfcourse_name"][0] ?>">
</p>
<p>
  <label>Location:</label>
  <br />
  <input type="text" name="location" class="width99" value="<?= @$custom["location"][0] ?>">
</p>
<p>
  <label>Golf Course Holes:</label>
  <br />
  <input type="text" name="golf_course_hole" class="width99" value="<?= @$custom["golf_course_hole"][0] ?>">
</p>
<p>
  <label>Golf Course Par:</label>
  <br />
  <input type="text" name="golf_course_par" class="width99" value="<?= @$custom["golf_course_par"][0] ?>">
</p>
<p>
  <label>Golf Course Length:</label>
  <br />
  <input type="text" name="golf_course_length" class="width99" value="<?= @$custom["golf_course_length"][0] ?>">
</p>
<p>
  <label>Golf Course Designer:</label>
  <br />
  <input type="text" name="golf_course_designer" class="width99" value="<?= @$custom["golf_course_designer"][0] ?>">
</p>
<p>
  <label>Golf Course Website Url:</label>
  <br />
  <input type="text" name="golf_website_url" class="width99" value="<?= @$custom["golf_website_url"][0] ?>">
</p>
<p>
  <label>
  <input type="checkbox" name="golf_academy" class="width99" value="1" <?php if($custom["golf_academy"][0]==1){ echo "checked"; } ?>>Golf Academy &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_rental" class="width99" value="1" <?php if($custom["golf_rental"][0]==1){ echo "checked"; } ?>>Club Rental &nbsp; </label>
  <label>
  <input type="checkbox" name="golf_driving_range" class="width99" value="1" <?php if($custom["golf_driving_range"][0]==1){ echo "checked"; } ?>>Driving Range &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_carts" class="width99" value="1" <?php if($custom["golf_carts"][0]==1){ echo "checked"; } ?>>Golf Carts &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_dining" class="width99" value="1" <?php if($custom["golf_dining"][0]==1){ echo "checked"; } ?>>Dining &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_accommodation" class="width99" value="1" <?php if($custom["golf_accommodation"][0]==1){ echo "checked"; } ?>>Accommodation &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_pga_instructor" class="width99" value="1" <?php if($custom["golf_pga_instructor"][0]==1){ echo "checked"; } ?>>PGA Instructor &nbsp;</label>
  <label>
  <input type="checkbox" name="golf_pro_shop" class="width99" value="1" <?php if($custom["golf_pro_shop"][0]==1){ echo "checked"; } ?>>Pro Shop &nbsp;</label>
</p>
<p>
  <label>Facebook Url:</label>
  <br />
  <input type="text" name="facebook_url" class="width99" value="<?= @$custom["facebook_url"][0] ?>">
</p>
<p>
  <label>Youtube Url:</label>
  <br />
  <input type="text" name="youtube_url" class="width99" value="<?= @$custom["youtube_url"][0] ?>">
</p>
<p>
  <label>Twitter Url:</label>
  <br />
  <input type="text" name="twitter_url" class="width99" value="<?= @$custom["twitter_url"][0] ?>">
</p>
<p>
  <label>Instagram Url:</label>
  <br />
  <input type="text" name="instagram_url" class="width99" value="<?= @$custom["instagram_url"][0] ?>">
</p>
<?php
}
/**
 * Save custom field data when creating/updating posts
 */
function save_golfcourse_custom_fields(){
  global $post;
  if($post)
  {
    update_post_meta($post->ID, "golfcourse_name", @$_POST["golfcourse_name"]);
	update_post_meta($post->ID, "location", @$_POST["location"]);
	update_post_meta($post->ID, "golf_course_hole", @$_POST["golf_course_hole"]);
	update_post_meta($post->ID, "golf_course_par", @$_POST["golf_course_par"]);
	update_post_meta($post->ID, "golf_course_length", @$_POST["golf_course_length"]);
	update_post_meta($post->ID, "golf_course_designer", @$_POST["golf_course_designer"]);
	update_post_meta($post->ID, "golf_website_url", @$_POST["golf_website_url"]);
	/**Golfcourse Facilities**/
	update_post_meta($post->ID, "golf_academy", @$_POST["golf_academy"]);
	update_post_meta($post->ID, "golf_rental", @$_POST["golf_rental"]);
	update_post_meta($post->ID, "golf_driving_range", @$_POST["golf_driving_range"]);
	update_post_meta($post->ID, "golf_carts", @$_POST["golf_carts"]);
	update_post_meta($post->ID, "golf_dining", @$_POST["golf_dining"]);
	update_post_meta($post->ID, "golf_accommodation", @$_POST["golf_accommodation"]);
	update_post_meta($post->ID, "golf_pga_instructor", @$_POST["golf_pga_instructor"]);
	update_post_meta($post->ID, "golf_pro_shop", @$_POST["golf_pro_shop"]);
	/**Golfcourse Social Media Links**/
	update_post_meta($post->ID, "facebook_url", @$_POST["facebook_url"]);
	update_post_meta($post->ID, "youtube_url", @$_POST["youtube_url"]);
	update_post_meta($post->ID, "twitter_url", @$_POST["twitter_url"]);
	update_post_meta($post->ID, "instagram_url", @$_POST["instagram_url"]);
  }
}
add_action( 'admin_init', 'add_golfcourse_meta_boxes' );
add_action( 'save_post', 'save_golfcourse_custom_fields' );
add_post_type_support('golfcourse-reviews', 'thumbnail');
/*****************************************************************************************/
/*****************************************Register User******************************/
/*****************************************************************************************/
add_action('wp_ajax_registerUser', 'registerUser');
add_action('wp_ajax_nopriv_registerUser', 'registerUser');
function registerUser(){
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email1'];
 $phone = $_POST['phone'];
 $heimatclub = $_POST['heimatclub'];
 $handicap= $_POST['handicap'];
 $amount=$_POST['amount'];
 $username="SEA-".implode('-',str_split(rand(100000000,999999999),3));
 $to='erhamender@gmail.com';
 $from=$_POST['email1'];
 $subject="New Registartion Has Been Successfully Done In SEA Golf Course Website".date("d-M-Y h:i:s");
$message.="<p><strong>Firstname:</strong> ".$firstname."</p>";
$message.="<p><strong>Lastname:</strong> ".$lastname."</p>";
$message.="<p><strong>Email-Id:</strong> ".$email1."</p>";
$message.="<p><strong>Phone:</strong> ".$phone."</p>";
$message.="<p><strong>Card Type:</strong> ".$amount."</p>";
$message.="<p><strong>Username:</strong> ".$username."</p>";
$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$firstname.' '.$lastname.'<'.$email.'>';
 if(strcmp($amount,"199")==0){
   $credit=12;
 }elseif(strcmp($amount,"99")==0){
   $credit=5;
 }
 $password = $_POST['password'];
 $userdata = array(
	 'user_login'    =>  $username,
	 'first_name' =>  $firstname,
	 'last_name' =>  $lastname,
	 'user_email' =>  $email,
	 'user_pass'   =>  $password,
	 'display_name' => $name.' '.$lastname
 );
  $user_id = wp_insert_user( $userdata ) ;
  if( is_wp_error($user_id) ){
	echo $user_id->get_error_message();
  }else{
  update_user_meta($user_id, '_phone', $phone); 
  update_user_meta($user_id, '_heimatclub', $heimatclub); 
  update_user_meta($user_id, '_handicap', $handicap); 
  update_user_meta($user_id, '_cardtype', $amount); 
  update_user_meta($user_id, '_credit', $credit); 
  wp_mail($to,$subject,$message,$headers,'');
  echo 'true';  
 } 
die;
}
/******************************************************************************/
/******************************************************************************/
add_action('wp_ajax_loginUser', 'loginUser');
add_action('wp_ajax_nopriv_loginUser', 'loginUser');
function loginUser(){
    extract($_POST); 
    $resp['status'] = false;
    $creds['user_login'] = $username;
	$creds['user_password'] = $password;
	$creds['remember'] = 0;
	$user = wp_signon( $creds, false );
	if ( is_wp_error($user) ){
		$resp['message'] = $user->get_error_message();
    }
    else{
        $userID = $user->ID;
        wp_set_current_user( $userID, $user_login );
        wp_set_auth_cookie( $userID, true, false );
        do_action( 'wp_login', $username );
        $resp['status'] = true;
        $resp['message'] ='Successfull! now redirecting...';
        $resp['url'] = site_url('/user-panel');
    }
   $resp=json_encode($resp);
    echo $resp;
    die;
}
/******************************************************************************/
/******************************************************************************/
add_action('wp_ajax_booking_club', 'booking_club');
add_action('wp_ajax_nopriv_booking_club', 'booking_club');
function booking_club(){
    global $wpdb;
	extract($_POST);
	$result = $wpdb->insert('golf_daily_booking', array(
    'user_id' => $user_id,
	'first_name'=>$first_name,
	'last_name'=>$last_name,
    'email' => $email,
    'phone' => $phone, 
	'club_you_want_to_play' =>$club_you_want_to_play,
    'date_of_booking' => $date_of_booking,
	'members_playing' => $members_playing,
    'guests_playing' => $guests_playing,
	'preferred_tee_time' => $preferred_tee_time,
  ));
$to='erhamender@gmail.com';
$from=$_POST['email'];
$subject="New Golfcouse Booking Has Been Successfully Done In SEA Golf Course Website".date("d-M-Y h:i:s");
$message.="<p><strong>Firstname:</strong> ".$first_name."</p>";
$message.="<p><strong>Lastname:</strong> ".$last_name."</p>";
$message.="<p><strong>Email-Id:</strong> ".$email."</p>";
$message.="<p><strong>Phone:</strong> ".$phone."</p>";
$message.="<p><strong>Club you want to play:</strong> ".get_the_title($club_you_want_to_play)."</p>";
$message.="<p><strong>Date of Booking:</strong> ".$date_of_booking."</p>";
$message.="<p><strong>Guests Playing:</strong> ".$guests_playing."</p>";
$message.="<p><strong>Members Playing:</strong> ".$members_playing."</p>";
$message.="<p><strong>Preferred tee time:</strong> ".$preferred_tee_time."</p>";
$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From:'.$first_name.' '.$last_name.'<'.$email.'>';  
  if( is_wp_error($result) ){
	echo $result->get_error_message();
  }else{
	update_user_meta($user_id, '_credit', $credit);
	wp_mail($to,$subject,$message,$headers,'');
	echo 'true'; 
  } 
  die;
}
/******************************************************************************/
/******************************************************************************/
add_action('wp_ajax_logout_now', 'logout_now');
add_action('wp_ajax_nopriv_logout_now', 'logout_now');
function logout_now(){
  wp_logout();  
  die();
}
/******************************************************************************/
/******************************************************************************/
add_action( 'admin_menu', 'golfcourseBooking' );
function golfcourseBooking()
{
  add_menu_page(
        'GolfClub Bookings',     
        'GolfClub Bookings',    
        'manage_options',   
        'Location',    
        'golfcourseBooking_render', 
		'dashicons-location-alt',
		25
        );
}
function golfcourseBooking_render()
{   
 include(get_template_directory() . '/list-of-club-bookings.php');
}
/******************************************************************************/
/******************************************************************************/