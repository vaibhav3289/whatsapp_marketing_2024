<?php 
include"phpfiles/connect.php";

session_start();
error_reporting(0);
if($_SESSION['user']!=true)
	header('Location:index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport"  content="width=device-width, initial-scale=1">
  <title>Bussiness_Directory</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo $path; ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $path;?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/summernote/summernote-bs4.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $path;?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $path;?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <style>
    .cart-scroll-heigth{
      max-height: 700px;
      overflow-y: auto;
    }
    @media(max-width:730px) {
      .d-xs-none {
        display: none!important
      }
      .col-xs {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
      }
      .col-xs-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
      }
      .col-xs-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
      }
      .col-xs-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
      }
      .col-xs-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
      }
      .col-xs-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
      }
      .col-xs-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
      }
      .col-xs-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
      }
      .col-xs-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
      }
      .col-xs-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
      }
      .col-xs-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
      }
      .col-xs-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
      }
      .col-xs-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
      }
    }

  </style>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <script src="<?php echo $path;?>plugins/jquery/jquery.min.js"></script>
 
<div class="wrapper" >

  <!-- Preloader -->
 

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
     <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
      
    </ul>
 <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto d-xs-none">
      <!-- Navbar Search -->
     

     <!-- MESSAGES SECTION -->
                    
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                    
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                    
                    <!-- END ALERTS SECTION -->

                    <!--ADMIN SETTINGS SECTIONS -->
                      <li class="dropdown"></li>
    
 <?php /*?>  <font color="#0000FF"> <strong>Contact Us :</strong></font> <i class="icon an an-phone"></i> <strong>+91 9662525931 </strong>
                        <font color="#0000FF"> <strong>  Email :</strong> </font> <strong>harishreefoods@gmail.com</strong>
                   </li><?php */?>
   
  </nav>

</div>


  <!-- /.navbar -->
   

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
     <img src="assets/images/logo1.png" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Bussiness_Directory</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php /*?>  <li class="nav-item" >
            <a href="<?php echo $path;?>" class="nav-link">
             <p>
                <i class="nav-icon fas fa-tachometer-alt"></i>
                Dashboard
             </p>
            </a>
          </li><?php */?>
      <li class="nav-item">
            <a href="group_detail.php" style="color:#FFFFFF; text-decoration:none;" class="nav-link">
             
              <p>
               <i class="nav-icon fas fa-home"></i>
               Whatsapp Group
              </p>
            </a>
            </li>
           
             <li class="nav-item">
            <a href="profile.php" style="color:#FFFFFF; text-decoration:none;" class="nav-link">
             
              <p>
               <i class="nav-icon fas fa-user"></i>
                Profile
              </p>
            </a>
            </li>
                
                  <li class="nav-item">
           <a href="job_post.php" style="color:#FFFFFF; text-decoration:none;" class="nav-link" >
              
              <p>
             <i class="nav-icon fas fa-address-card"></i>
                Job 
              </p>
            </a>
            </li>
                
              <li class="nav-item">
          <a href="job_report.php" style="color:#FFFFFF; text-decoration:none;" class="nav-link">
             
               <p>
               <i class="nav-icon fas fa-file"></i>
                Job Report
              </p>
            </a>
            </li>
              
              <li class="nav-item">
          <a href="contact_owner.php" style="color:#FFFFFF; text-decoration:none;" class="nav-link">
            
               <p>
               <i class="nav-icon fas fa-phone"></i>
              
               Contact Owner
              </p>
            </a>
            </li>
             <li class="nav-item">
         <a href="photo_gallary.php" style="color:#FFFFFF; text-decoration:none;" class="nav-link">
            
               <p>
               <i class="nav-icon fas fa-film"></i>
                
               Photo Gallary
              </p>
            </a>
            </li>
            
              <li class="nav-item"> 
            <a href="change_password.php" style="color:#FFFFFF; text-decoration:none;" class="nav-link">
             
              <p>
              <i class="nav-icon fas fa-solid fa-key"></i>
                Change Password
              </p>
            </a>
            </li>
            
              <li class="nav-item">
            <a href="logout.php" style="color:#FFFFFF; text-decoration:none;" class="nav-link">
              
              <p>
              <i class="nav-icon fas fa-power-off"></i>
                Logout
              </p>
            </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  

  
<div id="content"> 