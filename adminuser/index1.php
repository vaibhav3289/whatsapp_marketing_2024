<?php
session_start();
error_reporting(0);
$path="//".$_SERVER['HTTP_HOST']."/vaccine/";
date_default_timezone_set('Asia/Kolkata');
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>VACCINE</title>

<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->

<link rel="stylesheet" href="<?php echo $path;  ?>plugins/fontawesome-free/css/all.min.css">

<!-- Ionicons -->

<link rel="stylesheet" href="<?php echo $path;  ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<!-- Theme style -->

<link rel="stylesheet" href="<?php echo $path;  ?>dist/css/adminlte.min.css">

<!-- Toastr -->

<link rel="stylesheet" href="<?php echo $path;  ?>plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box"> 
   <div class="card">
    <div class="card-body login-card-body">
      <div class="login-logo"> <a href=""><b>VACCINE</b></a> </div>
      <form action="<?php echo $path;?>phpfiles/checklogin" class="form-signin" method="post">
        <div class="input-group mb-3">
          <input type="text" placeholder="Username" name="user" autofocus class="form-control form-control-sm" required  value="<?php echo $_COOKIE["USER"];?>"/>
          <div class="input-group-append">
            <div class="input-group-text"> <span class="fas fa-user"></span> </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" placeholder="Password" name="pass" class="form-control form-control-sm" required  value="<?php echo $_COOKIE["PASS"];?>"/>
          <div class="input-group-append">
            <div class="input-group-text"> <span class="fas fa-lock"></span> </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" placeholder="Login Key" name="login_key" class="form-control form-control-sm" required  value="<?php echo $_COOKIE["KEY"];?>" />
          <div class="input-group-append">
            <div class="input-group-text"> <span class="fas fa-key"></span> </div>
          </div>
        </div>
        <div class="form-group"> &nbsp;
          <input type="checkbox" id="remember"  name="remeber" data-role="none" value="Y" <?php if($_COOKIE['REM']!="") echo"checked"; ?> >
          <label for="remember"> &nbsp;Remember Me </label>
        </div>
        <div class="row">
          <div class="col-8"> </div>
          
          <!-- /.col -->
          
          <div class="col-4"> <a href="">
            <button type="button" class="btn btn-success btn-block  btn-sm"><i class="fa fa-download"></i> APPS</button>
            </a> </div>
          <div class="col-12 mt-1">
            <button type="submit" class="btn btn-primary btn-block btn-sm">Sign In</button>
          </div>          
        </div>
      </form>
    </div>
  </div>
</div>
<script src="<?php echo $path;  ?>plugins/jquery/jquery.min.js"></script> 
<script src="<?php echo $path;  ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?php echo $path;  ?>dist/js/adminlte.min.js"></script> 
<script src="<?php echo $path;  ?>plugins/toastr/toastr.min.js"></script> 
<script>

<?php if(isset($_SESSION['err']) and $_SESSION['err']!=''){?>
	toastr.error('<?php echo $_SESSION['err']; ?>');
<?php 	unset($_SESSION['err']);  }?>
</script>
</body>
</html>
