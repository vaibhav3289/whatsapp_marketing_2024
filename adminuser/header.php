<?php

include"connect.php";
if($_SESSION['userid']!=true)
header('location:../index.php');
//header("Location:".path.'index.php');

$arrCurUrl = explode("/",$_SERVER['PHP_SELF']);
$curUrl = $arrCurUrl[count($arrCurUrl) - 1];
//print_r($_SESSION);


  $favorite = array("acc_favorite.php");


$admin=array('group_detail.php','wp_send_msg_rpt.php','update_group.php');

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
  <ul class="navbar-nav ml-auto">
         <li class="nav-item float-right ">
          <?php  list($cname) = mysqli_fetch_array(mysqli_query($link, "select name from user where u_id='" .$_SESSION['user'] . "'")); ?>
        <span ><b>Welcome To</b> <strong style="color:#F00;">Admin</strong> </h5>

      </span>
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
              <li class="nav-item"><a class="nav-link <?php if($curUrl=="main.php")  echo 'active'; ?>" href="<?php echo $path; ?>main.php"><i class="nav-icon fas fa-tachometer-alt" style="color: #cb471a;"></i> &nbsp;
                <p> Dashboard </p>  </a></li>
            
                   <li class="nav-item"><a class="nav-link <?php if($curUrl=="view_user.php" or $curUrl=="user_form.php" or $curUrl=="update_user.php") echo 'active'; ?>" href="<?php echo $path; ?>view_user.php"><i class="nav-icon fa fa-user" style="color: #2fbfc1;"></i>&nbsp;
                <p> User </p>  </a></li>
   
               <li class="nav-item"><a class="nav-link <?php if($curUrl=="wp_send_msg_rpt.php")  echo 'active'; ?>" href="<?php echo $path; ?>wp_send_msg_rpt.php"><i class="nav-icon fa fa-users" style="color: #d38236;"></i>&nbsp;
                <p> Group Message Report </p>  </a></li>

                <li class="nav-item"><a class="nav-link <?php if($curUrl=="one_mg_report.php")  echo 'active'; ?>" href="<?php echo $path; ?>one_mg_report.php"><i class="nav-icon fa fa-user"  style="color: #f04747;"></i>&nbsp;
                <p> Single Message Report </p>  </a></li>
                  <li class="nav-item"><a class="nav-link <?php if($curUrl=="pay_report.php") echo 'active'; ?>" href="<?php echo $path; ?>pay_report.php"><i class="nav-icon fa fa-rupee-sign" style="color: #cfb826;"></i>&nbsp;
                <p>Payment Report </p>  </a></li>
                <li class="nav-item"><a class="nav-link <?php if($curUrl=="pending_pay_report.php") echo 'active'; ?>" href="<?php echo $path; ?>pending_pay_report.php"><i class="nav-icon fa fa-hourglass-end"></i>&nbsp;
                <p>Pending Payment Report </p>  </a></li>
                <li  class="nav-item"><a class="nav-link <?php if($curUrl=='change_password.php') echo 'active'; ?>" href="<?php echo $path; ?>change_password.php"class="nav-link" ><i class="nav-icon fas fa-solid fa-key" style="color: #29bcc7;"></i>&nbsp;&nbsp;Change Password </a>
               
                
      <li class="nav-item">
        <a href="<?php echo $path;?>logout.php" class="nav-link">
         <i class="nav-icon fas fa-sign-out-alt" style="color: #1dd787;"></i><p>Logout</p>
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
