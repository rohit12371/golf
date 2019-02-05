<?php 
 /** Template Name: Download-Card*/
require_once ABSPATH ."wp-content/themes/golfcourse/dompdf/dompdf_config.inc.php";
$currentUserId=get_current_user_id();
$userData=get_userdata($currentUserId);
$dompdf = new DOMPDF();
$link=ABSPATH."theme/golfcourse/assets/css/bootstrap.min.css";
$imglink=ABSPATH."wp-content/themes/golfcourse/assets/img/S.E.A.platinCARD_2019_druck1.jpg";
$html.='<link href="'.$link.'" rel="stylesheet" type="text/css" />';
$html.='<div class="container">';
$html.='<div class="row spacer">';
$html.='<div class="container" style="margin:50px 80px 40px;">';
$html.='<div class="row">';
$html.='<div class="col-md-12 userdata">';
$html.='<img src="'.$imglink.'" style="margin-bottom:-88px;">';
//$html.='<br/>';
$html.="<span style='font-size:62px;  font-family: 'Fjalla One', sans-serif!important;'>".$userData->user_login."</span></div><div class='text-center'></div></div></div></div></div></div>";
$dompdf->load_html($html);
$dompdf->set_paper('A4');
$dompdf->render();
$dompdf->stream("card.pdf",array("Attachment" => false));
?>
<link href="<?php echo $link; ?>" rel="stylesheet" type="text/css" />
