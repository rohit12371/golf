<div id="content">
  <h1 class="bg-white content-heading border-bottom">List Of Golfcourse Bookings</h1>
  <div class="innerAll spacing-x2">
     <div class="col-md-12">
      <table class="table table-bordered table-striped" id="example1">
        <div style="display:none;" id="delete-msg"></div>
        <thead>
          <tr align="center">
            <th scope="col" id="Sr No" class="manage-column" width="50px">Sr No.</th>
            <th scope="col" id="First Name" class="manage-column">First Name</th>
            <th scope="col" id="Last Name" class="manage-column" width="100px">Last Name</th>
            <th scope="col" id="Email" class="manage-column" width="50px">Email</th>
            <th scope="col" id="Phone Number" class="manage-column">Phone Number</th>
            <th scope="col" id="Club You Want To Play" class="manage-column" width="100px">Club You Want To Play</th>
            <th scope="col" id="Date of booking" class="manage-column" width="50px">Date of booking</th>
            <th scope="col" id="Members Playing" class="manage-column">Members Playing</th>
            <th scope="col" id="Guests Playing" class="manage-column" width="100px">Guests Playing</th>
            <th scope="col" id="brand" class="manage-column">Preferred Tee Time</th>
          </tr>
        </thead>
        <tbody id="the-list">
          <?php
			  $sr_no=0;
              global $wpdb;
              $allgolfbookings = $wpdb->get_results("SELECT * FROM golf_daily_booking");
              foreach($allgolfbookings as $allgolfbookings):
              ?>
             <tr id="post-1" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-uncategorized" align="center">
            <td class="manage-column"><?php echo ++$sr_no; ?></td>
            <td class="tags column-tags manage-column"><?php echo $allgolfbookings->first_name; ?></td>
            <td class="tags column-tags manage-column"><?php echo $allgolfbookings->last_name; ?></td>
            <td class="tags column-tags manage-column"><?php echo $allgolfbookings->email; ?></td>
            <td class="tags column-tags manage-column"><?php echo $allgolfbookings->phone; ?></td>
            <td class="tags column-tags manage-column"><?php echo get_the_title($allgolfbookings->club_you_want_to_play); ?></td>
            <td class="tags column-tags manage-column"><?php echo $allgolfbookings->date_of_booking; ?></td>
            <td class="tags column-tags manage-column"><?php echo $allgolfbookings->members_playing; ?></td>
            <td class="tags column-tags manage-column"><?php echo $allgolfbookings->guests_playing; ?></td>
            <td class="tags column-tags manage-column"><?php echo $allgolfbookings->preferred_tee_time; ?></td>
          </tr>
          <?php endforeach;  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript">
   jQuery('#frmBrand').submit(function(e){
	e.preventDefault();
	var formData = new FormData(jQuery('#frmBrand')[0]);
	formData.append('action','create_brand');
	jQuery.ajax({
	  url:"<?php  echo admin_url("admin-ajax.php"); ?>",
	  type:"POST",
	  data:formData,
	  cache: false,
      contentType: false,
      processData: false,
	  success:function(reponse){
	    alert(reponse);
		location.reload();
	  }
	});
   });
</script>
<style type="text/css">
.manage-column{
      text-align:center!important;
}
.img-circle {
    border-radius:50%!important;
}
.img-thumbnail {
    display: inline-block;
    max-width: 100%;
    height: auto;
    padding: 4px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
</style>
<style type="text/css">
 body{background:#f1f1f1!important; }
</style>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/jquery-2.2.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/datatables/dataTables.tableTools.js" type="text/javascript"></script>
<script type="text/javascript">
 $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
