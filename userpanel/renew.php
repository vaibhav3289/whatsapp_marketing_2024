<?php
session_start();
error_reporting(0);
$path="//".$_SERVER['HTTP_HOST']."/whatsapp_marketing/userpanel/";
date_default_timezone_set('Asia/Kolkata');
$link=mysqli_connect('localhost','root','','whatsapp_marketing') or die('error');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Whatsapp Marketing</title>

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

<body style="background-color:#e9ecef">
<script language="javascript" src="<?php echo $path; ?>ajax.js"></script> 
<script>
	function singleuserplan(id)
	{    
		
		var amt=id.split(",");
		var plan_id=amt[0];
		if(id=='') { var pr="Select Plan"; } else { var pr=amt[1]; }
		
		
		
		//document.getElementById('payment_id').innerHTML=amt[0];
		//document.getElementById('ss1').value=pr;
		document.getElementById('plan_id').value=plan_id;
		document.getElementById('ss1').innerHTML="Rs. "+pr+" <small>per</small>";
		document.getElementById('suser').value=pr;
		//document.getElementById('ss1').value=pr;
		//alert(document.getElementById('s_u1').value=pr);
   }
   
   
   
</script> 
<script>
	function selplanprice1(id)
	{    
		//alert(id)
		
		var amt1=id.split(",");
		var plan_id1=amt1[0];
		if(amt1[0]=='') { var pr1="Select Plan"; } else { var pr1=amt1[1]; }
		
		//document.getElementById('payment_id').innerHTML=amt[0];
		
		document.getElementById('plan_id1').value=plan_id1;
		document.getElementById('m1').value=pr1;
		document.getElementById('mm1').innerHTML="Rs. "+pr1+" <small>per</small>";
		//alert(document.getElementById('s_u1').value=pr);
		
		
		
   }
   
   

   
</script> 
<?php list($name)=mysqli_fetch_array(mysqli_query($link,"select name from user where u_id='".$_SESSION['user']."'")); ?>
<br/>
<h3 class="text-center"><span class="text">Dear <b style="color: #f96f34;"> <?php echo strtoupper($name); ?></b> <br /> Select Your Package !!.</span> </br>

</h3>
<hr>
<div class="container">
  <div class="row">
   
    <div class="col-md-3">
    <form name="form1" action="<?php echo $path; ?>upi/txnProcess.php" method="post">
      <input type="hidden" name="limit" value="1">
      <input type="hidden" name="month" value="1">
       <input type="hidden" name="user" value="<?php echo $_GET['id'];?>">
    <div class="card card-default">
      <div class="card-header">
        <div class="login-logo"> <a href=""><b>Select </b>Plan</a> </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="login-logo">
          <h3 class="text-success"><span id="ss1">Standard</span></h3>
          <h2 style="color:red">₹1</h2>
          <h5>1 Month</h5>
           
        </div>
        <hr>
     <p style="font-size: 14px;">500 Message Per Month</p>
     <p style="font-size: 14px;">Group Extractor</p>
     <p style="font-size: 14px;">Single Message</p>
      <p >&nbsp;</p>
        <hr>
        <div class="row">
          <div class="col-6 mt-1">
            <input type="submit" name="S_USER" value="Buy Now" class="btn btn-block btn-success btn-lg"/>
          </div>
          <div class="col-6 mt-1">
              <button type="button" class="btn btn-block btn-default btn-lg" onclick="history.back()">Back </button>
            </div>
        </div>
      </div>
    </div>
    </form>
    </div>
    
   
    <div class="col-md-3">
    <form name="form2"  action="<?php echo $path; ?>upi/txnProcess.php" method="post">
      <input type="hidden" name="limit" value="399">
      <input type="hidden" name="month" value="3">
      <input type="hidden" name="user" value="<?php echo $_GET['id'];?>">
      <div class="card card-default">
        <div class="card-header">
          <div class="login-logo"> <a href=""><b>Select</b>Plan</a> </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="login-logo">
            <h3 class="text-success"><span id="mm1">Unlimited</span></h3>
            <span>
            <h2 style="color:red">₹399</h2>
            <h5>3 Month</h5>
            </span></div>
          <hr>
     <p style="font-size: 14px;">500 Message Per Month</p>
     <p style="font-size: 14px;">Group Extractor</p>
     <p style="font-size: 14px;">Single Message</p>
     <p style="font-size: 14px;">Multiple Group Support</p>
          <hr>
          <div class="row">
            <div class="col-6 mt-1">
              <input type="submit" value="Buy Now"  name="M_USER" class="btn btn-block btn-success btn-lg"/>
            </div>
            <div class="col-6 mt-1">
              <button type="button" class="btn btn-block btn-default btn-lg" onclick="history.back()">Back </button>
            </div>
          </div>
        </div>
        
        <!-- /.card-body --> 
      </div>
    </form>
  </div>
   <div class="col-md-3">
    <form name="form2"  action="<?php echo $path; ?>upi/txnProcess.php" method="post">
      <input type="hidden" name="limit" value="499">
      <input type="hidden" name="month" value="6">
      <input type="hidden" name="user" value="<?php echo $_GET['id'];?>">
      <div class="card card-default">
        <div class="card-header">
          <div class="login-logo"> <a href=""><b>Select</b>Plan</a> </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="login-logo">
            <h3 class="text-success"><span id="mm1">Premium</span></h3>
            <span>
            <h2 style="color:red">₹499</h2>
            <h5>6 Month</h5>
            </span></div>
          <hr>
     <p style="font-size: 14px;">500 Message Per Month</p>
     <p style="font-size: 14px;">Group Extractor</p>
     <p style="font-size: 14px;">Single Message</p>
      <p style="font-size: 14px;">Multiple Group Support</p>
          <hr>
          <div class="row">
            <div class="col-6 mt-1">
              <input type="submit" value="Buy Now"  name="M_USER" class="btn btn-block btn-success btn-lg"/>
            </div>
            <div class="col-6 mt-1">
              <button type="button" class="btn btn-block btn-default btn-lg" onclick="history.back()">Back </button>
            </div>
          </div>
        </div>

        
        <!-- /.card-body --> 
      </div>

    </form>
  </div>
   <div class="col-md-3">
    <form name="form2"  action="<?php echo $path; ?>upi/txnProcess.php" method="post">
      <input type="hidden" name="limit" value="799">
       <input type="hidden" name="month" value="12">
      <input type="hidden" name="user" value="<?php echo $_GET['id'];?>">
      <div class="card card-default">
        <div class="card-header">
          <div class="login-logo"> <a href=""><b>Select</b>Plan</a> </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="login-logo">
            <h3 class="text-success"><span id="mm1">Advanced</span></h3>
            <span>
            <h2 style="color:red">₹799</h2>
            <h5>12 Month</h5>
            </span></div>
          <hr>
    <p style="font-size: 14px;">500 Message Per Month</p>
     <p style="font-size: 14px;">Group Extractor</p>
     <p style="font-size: 14px;">Single Message</p>
      <p style="font-size: 14px;">Multiple Group Support</p>
          <hr>
          <div class="row">
            <div class="col-6 mt-1">
              <input type="submit" value="Buy Now"  name="M_USER" class="btn btn-block btn-success btn-lg"/>
            </div>
            <div class="col-6 mt-1">
              <button type="button" class="btn btn-block btn-default btn-lg" onclick="history.back()">Back </button>
            </div>
          </div>
        </div>
        
        <!-- /.card-body --> 
      </div>
    </form>
  </div>
 
</div>
</div>
<style>
.footer
{
	position:fixed;	
	left:0;
	bottom:0;
	width:100%;
	background-color:#CCC;
	color:#FFF;
	text-align:left;
	border-top: 1px solid #dee2e6;
	margin-top:100px;
}

</style>
<div class="container">
  <div class="footer">
    
    <strong style="margin-left:10px;margin-bottom:10px">Powered by: <a href="http://www.greencircletechnology.com">Green Circle Technology</a></strong> </div>
</div>
<script src="<?php echo $path;  ?>plugins/jquery/jquery.min.js"></script> 
<script src="<?php echo $path;  ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?php echo $path;  ?>dist/js/adminlte.min.js"></script> 
<script src="<?php echo $path;  ?>plugins/toastr/toastr.min.js"></script> 
</script>
</body>
</html>
