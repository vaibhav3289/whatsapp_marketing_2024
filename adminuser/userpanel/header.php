<?php 
include"phpfiles/connect.php";

session_start();
error_reporting(0);
if($_SESSION['user']!=true)
	header('Location:index.php');
	
	
 $smssetting = array("sms_setting.php", "custome_sms.php", "server_start.php", "pending_sms.php", "sms_history.php", "send_birth_sms.php",'whatsapp.php','wp_server.php','wp_custome.php','wp_queue_page.php','csv.php','whatsappmsgsetting.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WHATSAPP MARKETING</title>

<link rel="stylesheet" href="<?php echo $path;?>plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
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
<li class="nav-item"><a class="nav-link <?php if($curUrl=="group_detail.php" or $curUrl=="group_form.php" or $curUrl=="update_group.php") echo 'active'; ?>" href="<?php echo $path; ?>group_detail.php"><i class="nav-icon fa fa-users"></i>&nbsp;
<p> Whatsapp Group </p>  </a></li>
<li class="nav-item"><a class="nav-link <?php if($curUrl=="contact_detail.php" or $curUrl=="contact_form.php" or $curUrl=="update_contact.php") echo 'active'; ?>" href="<?php echo $path; ?>contact_detail.php"><i class="nav-icon fas fa-phone"></i>&nbsp;
<p> Contact </p>  </a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo $path; ?>whatsapp.php"><i class="nav-icon fas fa-cogs fa-lg"></i>&nbsp;
<p> WhatsApp Setting </p>  </a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo $path; ?>wp_server.php" target="_blank"><i class="far fa-circle nav-icon"></i>&nbsp;
<p>WhatsApp Server Start</p>  </a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo $path; ?>wp_queue_page.php"> <i class="far fa-circle nav-icon"></i>&nbsp;
<p>WhatsApp Queue </p>  </a></li>
<li class="nav-item"> 
<a href="change_password.php" style="color:#FFFFFF; text-decoration:none;" class="nav-link">
<p>
<i class="nav-icon fas fa-solid fa-key"></i>
Change Password
</p>
</a>
</li>
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
