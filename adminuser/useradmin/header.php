<?php

include"connect.php";
if($_SESSION['userid']!=true)
header('location:../index.php');
//header("Location:".path.'index.php');

$arrCurUrl = explode("/",$_SERVER['PHP_SELF']);
$curUrl = $arrCurUrl[count($arrCurUrl) - 1];
//print_r($_SESSION);


  $favorite = array("acc_favorite.php");
$hospital=array('hospital_detail.php','hospital_form.php','update_category.php');
$hospital=array('doctor_detail.php','doctor_form.php','update_doctor.php');
$children=array('children_detail.php','children_form.php','update_children.php');
$vaccinegroup=array('group_detail.php','group_form.php','update_group.php');
$vaccine=array('vaccine_detail.php','vaccine_form.php','update_vaccine.php');
$wpsend = array('sms_setting.php','wp_server.php','wp_send_msg_rpt.php','wp_pending_msg.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WHATSAPP MARKETING</title>

  <!-- Google Font: Source Sans Pro -->
<?php /*?> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<?php */?>  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
<?php /*?>  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<?php */?>  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $path;?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo $path;?>dist/css/style.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/daterangepicker/daterangepicker.css">
  
  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $path;?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $path;?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/summernote/summernote-bs4.min.css">
  <script src="<?php echo $path;?>plugins/jquery/jquery.min.js"></script>
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo $path; ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo $path; ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo $path; ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  
  
  <!-- Theme style -->
</head> 

<body class="hold-transition sidebar-mini text-xs layout-fixed text-sm ">

  <div class="wrapper">
 <script>
 
  $( document ).ready(function() {
    $("div#divLoading").removeClass('show');
    $("#spin_load").removeClass('fa fa-spinner fa-spin');
});
  </script>

<script>
function change_date(date)
{
	
	$.ajax({
		
		type: 'POST',
		data: {date:date},
		url:"<?php echo $path;?>changedate",
		success:function(data)
		 	{
				alert(data);
				location.reload();
			}
		});
		

}
</script>
<script>
 function set_db(val)
 {

	 // alert(val)

  $.ajax({
    url:"<?php echo $path;?>selectyear",
    type:"GET",
    data:{val:val},
    success: function(data)
    {
					//alert(data)
					location.reload();
				}
      })
}

</script>     


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
          
  </ul>
  </nav>

      
      
      <div class="modal fade" id="deletbookmark">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="height: 50px;">
               <strong><b>Delete Bookmarks</b></strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>      
           </div>
           <form action="<?php echo $path;?>phpfiles/deletebookmarks" method="post">
            <input type="hidden"  name="url" value="<?php echo $favr_url[1]; ?>">
            <div class="modal-body" style="height:40px;">
             <p>Do you want to delete this Record?</p>
            </div><br>
            <div class="modal-footer">
              <a data-dismiss="modal" class="btn btn-default btn-sm" href="#">Cancel</a>
              <button type="submit" class="btn btn-primary btn-sm" style="color:#FFFFFF;">Confirm</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link" onClick="chng_module('PLANT')"> <img src="<?php echo $path; ?>dist/img/NEW_LOGO.png" alt="DayBook" class="brand-image img-circle elevation-3"
        style="opacity: .8"> <b class="brand-text font-weight-light"><B>WHATSAPP MARKETING</B></b> </a> 

        <!-- Sidebar -->
        <div class="sidebar">

          <nav class="mt-2">
           
         <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">
         
      <?php /*?><li class="nav-item has-treeview"><a href="<?php echo $path; ?>favouriteurl" class="nav-link <?php if (in_array($curUrl, $favorite)) echo "active"; ?> ">  <i class="nav-icon fa fa-star" style="color:violet;"></i>
            <p>Favorite Menu</p>
          </a> </li><?php */?>
 <?php
      //if($_SESSION['admin']==1 ) {
        ?>
            <?php /*?> <li class="nav-item">
              <a href="<?php echo $path;?>home" class="nav-link <?php if($curUrl=="day_home.php") echo 'active'; ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>&nbsp;
                <p> Dashboard </p>
              </a>            
            </li>
            <?php */?>
            
            
             <?php /*?>      <li class="nav-item"><a class="nav-link <?php if($curUrl=="view_user.php" or $curUrl=="user_form.php" or $curUrl=="update_user.php") echo 'active'; ?>" href="<?php echo $path; ?>view_user.php"><i class="nav-icon fa fa-user"></i>&nbsp;
                <p> User </p>  </a></li>
   <?php */?>
         
                
                 <li class="nav-item"><a class="nav-link <?php if($curUrl=="group_detail.php" or $curUrl=="group_form.php" or $curUrl=="update_group.php") echo 'active'; ?>" href="<?php echo $path; ?>group_detail.php"><i class="nav-icon fa fa-users"></i>&nbsp;
                <p> Whatsapp Group </p>  </a></li>
                
                
                   <li class="nav-item"><a class="nav-link <?php if($curUrl=="contact_detail.php" or $curUrl=="contact_form.php" or $curUrl=="update_contact.php") echo 'active'; ?>" href="<?php echo $path; ?>contact_detail.php"><i class="nav-icon fas fa-phone"></i>&nbsp;
                <p> Contact </p>  </a></li>
                
                
                 <li class="nav-item"><a class="nav-link <?php if($curUrl=="setting_detail.php" or $curUrl=="setting_form.php" or $curUrl=="update_setting.php") echo 'active'; ?>" href="<?php echo $path; ?>setting_form.php"><i class="nav-icon fas fa-cogs fa-lg"></i>&nbsp;
                <p> Setting </p>  </a></li>
                
               
               
  
          <?php /*?>  <li class="nav-item">
            <a href="<?php echo $path;?>smssetting" class="nav-link">
              <i class="nav-icon fab fa-whatsapp"></i>
              <p>
       WhatsApp Configuration
              </p>
            </a>
            </li><?php */?> 
            <?php /*?>
                      <li class="nav-item"><a class="nav-link <?php if($curUrl=="due_vaccine_report.php" ) echo 'active'; ?>" href="<?php echo $path; ?>due_vaccine_report.php"><i class="nav-icon fas fa-file"></i>&nbsp;
                <p> Due Vaccine Report </p>  </a></li>
            <li class="nav-item"><a class="nav-link <?php if($curUrl=="given_vaccine.php" ) echo 'active'; ?>" href="<?php echo $path; ?>given_vaccine.php"><i class="nav-icon fas fa-file"></i>&nbsp;
                <p> Given Vaccine Report </p>  </a></li>
             <li class="nav-item"><a class="nav-link <?php if($curUrl=="advance_vaccine.php" ) echo 'active'; ?>" href="<?php echo $path; ?>advance_vaccine.php"><i class="nav-icon fas fa-file"></i>&nbsp;
                <p> Advance Vaccine Report </p>  </a></li><?php */?>
                
   <?php /*?>         
    <li class="nav-item  <?php if (in_array($curUrl, $wpsend)) echo 'menu-open'; ?>"> <a href="sms_setting.php" class="nav-link <?php if (in_array($curUrl, $wpsend)) echo 'active'; ?>"> <i class="nav-icon fab fa-whatsapp"></i>
              <p> Whatsapp Message <i class="fas fa-angle-left right"></i> </p>
            </a>
            <ul class="nav nav-treeview">
              
                <li class="nav-item"> <a href="<?php echo $path; ?>sms_setting.php" class="nav-link <?php if ($curUrl == 'sms_setting.php')  echo 'active';  ?>">   <i class="nav-icon fas fa-cogs fa-lg"></i>
                    <p>  WhatsApp Configuration</p>
                  </a></li><?php */?>
              <?php
			//  list($url,$instance,$token,$wstatusn)=mysqli_fetch_array(mysqli_query($link,"select `wp_url`,`wp_instance`,`wp_token`,whatsapp from sms_setting where sms_id=1"));
			 
		//	 if($wstatusn=='Y'){
			  ?>
                 <?php /*?>  <li class="nav-item"><a href="<?php echo $path; ?>wp_server.php" class="nav-link <?php if ($curUrl == "wp_server.php") { echo 'active'; } ?>" target="_blank"> <i class="nav-icon  fas fa-server fa-lg"></i>
              <p>Server Start </p>
            </a></li>  
            
             <?php  //}?>
             
                  <li class="nav-item"><a class="nav-link <?php if($curUrl=="wp_send_msg_rpt.php" ) echo 'active'; ?>" href="<?php echo $path; ?>wp_send_msg_rpt.php"><i class="nav-icon fas fa-file"></i>&nbsp;
                <p> Message Report </p>  </a></li>
            
              <li class="nav-item"><a class="nav-link <?php if($curUrl=="wp_pending_msg.php" ) echo 'active'; ?>" href="<?php echo $path; ?>wp_pending_msg.php"><i class="nav-icon fas fa-file"></i>&nbsp;
                <p> Pending Message Report </p>  </a></li>
                  </ul></li><?php */?>
         
            
                 
            
             
            
      <li class="nav-item">
        <a href="<?php echo $path;?>logout.php" class="nav-link">
         <i class="nav-icon fas fa-sign-out-alt"></i><p>Logout</p>
        </a>
      </li>

    </ul>
    <?php //} ?>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->

<!-- /.content-wrapper -->
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<div class="col-md-12">
      <div class="modal fade" id="bookmodal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header p-2">
              <h5 class="modal-title" id="H1">Favorite Menu</h5>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>            
            <form action="<?php echo $path;?>phpfiles/boolmark" method="post">
            <input type="hidden" name="url" value="<?php echo $fav_url[2].''.$fav_url[3]; ?>" readonly>
            
                <div class="modal-body p-2">                 
                <input type="hidden" id="fav_icon"/>
                <input type="text" id="book_name" name="book_name" autocomplete="off" placeholder="Enter Bookmarks Name" class="form-control"/>
                </div>
                <div class="modal-footer p-1" id="shwbtn">
                  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success btn-sm">Save Page</button>
                </div>
            </form>           
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-12">
      <div class="modal fade" id="bookmarkdelete" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="H1"> Delete Bookmarks Page</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
          
            <form action="<?php echo $path;?>phpfiles/delboolmark" method="post">
            
            <input type="hidden" name="url" id="url" value="<?php echo $fav_url[2].''.$fav_url[3]; ?>" readonly>
            <div class="modal-body"> Do you want to Remove this Bookmarks page? </div>
            <div class="modal-footer" id="shwbtn">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">Remove </button>
            </div>
           </form>
           
          </div>
        </div>
      </div>
   
</body>
</html>
