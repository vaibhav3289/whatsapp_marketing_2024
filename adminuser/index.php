<?php 
error_reporting(0);
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WHATSAAP MARKETING</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $path;?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">

  <div class="card">
    <div class="card-body login-card-body">
        <div class="login-logo"> <a href=""><h5><b>WHATSAAP MARKETING</b></h5></a> </div>

      <form action="<?php echo $path; ?>phpfiles/index_exe.php" method="post">
      <?php 
            if(isset($_SESSION['success']) && $_SESSION['success']!="")
            {
                ?>
                <div class="alert alert-success"> <strong>Success! </strong>
                    <button class="close" data-dismiss="alert">×</button>
                    <?php print $_SESSION['success']; ?></div>
                    <?php
                }
                if(isset($_SESSION['err']) && $_SESSION['err']!="")
                {
                    ?>
                    <div class="alert alert-danger">
                        <button class="close" data-dismiss="alert">×</button>
                        <strong>Error! </strong> <?php print $_SESSION['err']; ?></div>
                        <?php 
                    }
                    unset($_SESSION['success']);
                    unset($_SESSION['err']); ?>
        <div class="input-group mb-3">
        <input type="text" name="username" class="form-control" placeholder="Enter Username" >
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Enter Password" >
         
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php /*?><div class="input-group mb-3">
          <input type="password" name="login_key" id="login_key" class="form-control" placeholder="Key"  autocomplete="off" required value="<?php echo $_COOKIE["KEY"];?>">
          <div class="input-group-append">
            <div class="input-group-text"> <span class="fas fa-key"></span> </div>
          </div>
        </div><?php */?>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember"  name="remeber" data-role="none"  >
              <label for="remember"> &nbsp;Remember Me </label>
            </div>
          </div>
          
          <!-- /.col -->
          
      <?php /*?>    <div class="col-4"> <a href="<?php echo $path.'DAYBOOK.apk'; ?>">
            <button type="button" class="btn btn-success btn-block "><i class="fa fa-download"></i> APPS</button>
            </a> </div><?php */?>
          <div class="col-12 mt-1">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          
          <!-- /.col --> 
          
        </div>
      </form>

     
      <!-- /.social-auth-links -->

      
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $path;?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $path;?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $path;?>dist/js/adminlte.min.js"></script>
</body>
</html>
  <?php mysqli_close($link); ?>