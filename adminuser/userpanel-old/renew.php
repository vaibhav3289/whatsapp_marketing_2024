<?php

$path="//".$_SERVER['HTTP_HOST']."/vaccine/";
date_default_timezone_set('Asia/Kolkata');
include "phpfiles/connect.php";
$link1=mysqli_connect('localhost','root','Ra3DcjwM7Sdt93hn','greendvc_package') or die('error');
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Vaccine</title>

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
		var pr=amt[1];
		
		
		//document.getElementById('payment_id').innerHTML=amt[0];
		//document.getElementById('ss1').value=pr;
		document.getElementById('plan_id').value=plan_id;
		document.getElementById('ss1').innerHTML=pr;
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
		var pr1=amt1[1];
		
		//document.getElementById('payment_id').innerHTML=amt[0];
		
		document.getElementById('plan_id1').value=plan_id1;
		document.getElementById('m1').value=pr1;
		document.getElementById('mm1').innerHTML=pr1;
		//alert(document.getElementById('s_u1').value=pr);
		
		
		
   }
   
   
   
   
</script>
<br/>
 
 <h3 class="text-center"><span class="text">Renew Your Package !!.</span>
                </br>
               
                <?php  $iuserid=$_SESSION['userid'];?>
                <?php  $username=$_SESSION['user_type']['name'];?>
                <?php  $useradress=$_SESSION['user_type']['address'];?>
                <?php  $mobile=$_SESSION['user_type']['contact'];?>
               
 </h3>
<hr>

<div class="container">
<div class="row">
	<div class="col-md-2"></div>
    <div class="col-md-4">
    
    <form name="form1" action="<?php echo $path; ?>packagepayment" method="post">
    	 <div class="card card-default">
              <div class="card-header">
             
                <div class="login-logo"> <a href=""><b>Single</b>User</a> </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <div class="login-logo">
                
               <span>
               <h3 class="text-success"><span id="ss1">Select Plan</span></h3>
               <span><h5>Month</h5></span></div>
                <hr>
                
                  <div class="form-group col-sm-12">
                  
								<label for="text1" class="control-label">Select Month</label>
								<div id="" class="input-group">
                                <input type="hidden" name="price_p" id="suser"/>
                                <input type="hidden" name="id_s" id="plan_id"/>
                                
                               
                                
                                
							    <input type="hidden" name="s_user"  value="s_user"/>
                                
									<select name="s_month" onchange="singleuserplan(this.value);"  class="form-control">
										<option value="">--Select Month--</option>
                                        <?php 
									   $sql="select * from plan_package";
										$res=mysqli_query($link1,$sql);
										while($row=mysqli_fetch_array($res))
										{
											?>
                                       <option value="<?php echo $row['id'];?>,<?php echo $row['s_user'];?>" ><?php echo $row['month'];?></option>
                                            <?php
										}
										?>
                                        </select>
								</div>
							</div>
                  
                <hr>

                
			<div class="row"> 
            <div class="col-6 mt-1">
                 <input type="submit" name="S_USER" value="Buy Now" class="btn btn-block btn-success btn-lg"/>
               </div>
            <div class="col-6 mt-1">
               <button type="button" class="btn btn-block btn-default btn-lg" onclick="window.location.href='<?php echo $path; ?><?php if($_SESSION['reming_day']<=0){?>logout'<?php } else
			   
			   { ?>favoriteurl'<?php } ?>">Back </button>
               </div>
             
            </div>
              
              </div>
               
             
            </div>
           <form> 
    </div>




    
     <!-- /.card-body------------------------------------------------------------------------------------------------->
    <div class="col-md-4">
    
    
    <form name="form2"  action="<?php echo $path; ?>packagepayment" method="post">
     <div class="card card-default">
              <div class="card-header">
                <div class="login-logo"> <a href=""><b>Multi</b>User</a> </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <div class="login-logo">
                
                <h3 class="text-success"><span id="mm1">Select Plan</span></h3>
               <span><h5>Month</h5></span></div>
                <hr>
              
                   <div class="form-group col-sm-12">
                  
                   
								<label for="text1" class="control-label">Select Month</label>
								<div id="" class="input-group">
                                
                                <input type="hidden" name="price_m" id="m1"/>
                                 <input type="hidden" name="id_m" id="plan_id1"/>
                                 <input type="hidden" name="m_user"  value="m_user"/>
                                 
                                 
                                 
     
									<select name="month" onchange="selplanprice1(this.value);"  class="form-control">
										<option value="">--Select Month--</option>
                                        <?php 
									   $sql="select * from plan_package";
										$res=mysqli_query($link1,$sql);
										while($row=mysqli_fetch_array($res))
										{
											?>
                                       <option value="<?php echo $row['id'];?>,<?php echo $row['m_user'];?>" ><?php echo $row['month'];?></option>
                                            <?php
										}
										?>
                                        </select>
							</div>
							</div>
                  
                <hr>

                

              <div class="row"> 
            <div class="col-6 mt-1">
            	
               <input type="submit" value="Buy Now"  name="M_USER" class="btn btn-block btn-success btn-lg"/>
               </div>
            <div class="col-6 mt-1">
               <button type="button" class="btn btn-block btn-default btn-lg" onclick="window.location.href='<?php echo $path; ?><?php if($_SESSION['reming_day']<=0){?>logout'<?php } else
			   
			   { ?>favoriteurl'<?php } ?>">Back </button>
               </div>
             
            </div>
                
              </div>
               
              <!-- /.card-body -->
            </div>
            </form>
    </div>
    <div class="col-md-2"></div>
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
  <div class="float d-none d-sm-block">
      <b style="margin-left:10px">Version</b> 1.2
    </div>
    <strong style="margin-left:10px;margin-bottom:10px">Powered by: <a href="http://www.greencircletechnology.com">Green Circle Technology</a></strong>
</div>
</div>
<script src="<?php echo $path;  ?>plugins/jquery/jquery.min.js"></script> 
<script src="<?php echo $path;  ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?php echo $path;  ?>dist/js/adminlte.min.js"></script> 
<script src="<?php echo $path;  ?>plugins/toastr/toastr.min.js"></script> 
</script>
</body>
</html>
