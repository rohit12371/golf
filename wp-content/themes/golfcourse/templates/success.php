<?php

/*
 * Template Name: Success
 */		
$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);

$myPost = array();
foreach ($raw_post_array as $keyval) {
	$keyval = explode ('=', $keyval);
	if (count($keyval) == 2)
		$myPost[$keyval[0]] = urldecode($keyval[1]);
}
// Read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';
if(function_exists('get_magic_quotes_gpc')) {
	$get_magic_quotes_exists = true;
}
foreach ($myPost as $key => $value) {
	if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
		$value = urlencode(stripslashes($value));
	} else {
		$value = urlencode($value);
	}
	$req .= "&$key=$value";
}

/*
 * Post IPN data back to PayPal to validate the IPN data is genuine
 * Without this step anyone can fake IPN data
 */
$paypalURL = "https://www.sandbox.paypal.com";
$ch = curl_init($paypalURL);
if ($ch == FALSE) {
	return FALSE;
}

curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSLVERSION, 6);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);

// Set TCP timeout to 30 seconds
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close', 'User-Agent: company-name'));
$res = curl_exec($ch);
/*
 * Inspect IPN validation result and act accordingly
 * Split response headers and payload, a better way for strcmp
 */ 
$tokens = explode("\r\n\r\n", trim($res));
$res = trim(end($tokens));

//print_r($res);
   global $wpdb; 
  
	                   $query=$wpdb->get_row("SELECT MAX(ID) AS LABELMAX FROM golf_users");
                $user_id = $query->LABELMAX; 

   
				$six_digit_random_number = mt_rand(100000, 999999);
				
				$payment=get_user_meta( $user_id, '_cardtype', true );
				
				//echo $payment; exit;
				
				if($payment=='99')
				{
					$item_name_golf='Gold Card';
				}else {
					$item_name_golf='Platinum Card';
				}

	//Payment data
	$payment_date = date('Y-m-d');
	$txn_id = $_POST['txn_id'];
	$item_name = $_POST['item_name'];
	$payment_gross = $_POST['payment_gross'];
	$payment_status = $_POST['payment_status'];
		
	$result = $wpdb->insert('golf_payment', array(
    'txn_id' => $six_digit_random_number,
	'user_id'=> $user_id, //get_current_user_id()
    'item_name' => $item_name_golf,
	'payment_gross' =>$payment,
    'payment_status' => 'sucess',
    ));
	
	
	
	 $array_input=array(
     'user_status'=>'1'
     );
    $result=$wpdb->update("golf_users",$array_input,array('ID'=>$user_id));
	
	
	
  
	?>
<div class="well-lg">
  <h1>Your Transaction Has Been Successful <br/>
    <span>S.E.A Golf Courses</span></h1>
</div>

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


<script>
  window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "<?php echo site_url('');?>";

    }, 2000);
</script>