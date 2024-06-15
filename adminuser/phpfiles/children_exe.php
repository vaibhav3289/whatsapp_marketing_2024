<?php

include "connect_write.php";

		
$token=hash_hmac('sha256','/addchildrentoken',$_SESSION['token']);

 $gettoken=$_POST['token'];
$date=0;
if(hash_equals($token,$gettoken))
{
	

     $sql="INSERT INTO `children`(`h_id`,`d_id`,`c_name`,`f_name`,`dob`,`b_place`,`city`,`address`,`f_occupation`,`c_number`,`gender`) VALUES ('".mysqli_real_escape_string($link,$_POST['h_id'])."','".mysqli_real_escape_string($link,$_POST['d_id'])."','".mysqli_real_escape_string($link,$_POST['c_name'])."','".mysqli_real_escape_string($link,$_POST['f_name'])."','".mysqli_real_escape_string($link,$_POST['dob'])."','".mysqli_real_escape_string($link,$_POST['b_place'])."','".mysqli_real_escape_string($link,$_POST['city'])."','".mysqli_real_escape_string($link,$_POST['address'])."','".mysqli_real_escape_string($link,$_POST['f_occupation'])."','".mysqli_real_escape_string($link,$_POST['c_number'])."','".mysqli_real_escape_string($link,$_POST['gender'])."')";

 
$date=$_POST['dob'];
mysqli_query($link,$sql);  
$ginsid=mysqli_insert_id($link);
 if(mysqli_affected_rows($link)>0)
 {
	 
	 if($_POST['gender']=='M')
	 {
		 $gdata="gender IN ('B','M')";
	 }
	 
	 
	 if($_POST['gender']=='F')
	 {
		 		 $gdata="gender IN ('B','F')";
	 }
	 
	 $gnfetv=0;
   $gidn=0;
$h=1;
  $qry1=mysqli_query($link,"select v.id,vg.day,v.g_id from vaccine v,vaccine_group vg where v.g_id=vg.id  and $gdata  order by vg.sr_no,v.sr_no,v.id ASC  ");
  while($row1=mysqli_fetch_array($qry1))
  {
	    $gnfetv=$row1['day']." days";
	//echo   date_add($date,date_interval_create_from_date_string("45 days"));
	$datefinal=date('Y-m-d', strtotime($date. ' + '.$row1['day'].' day'));
	  
	//$gnewupdate=date_format($date,"Y-m-d");
	
//echo "INSERT INTO `child_vaccine_list`(`c_id`, `v_id`, `rdate`, `given_date`) VALUES ('".$ginsid."','".$row1['id']."','".$datefinal."','".$b."')";
//echo '<br>';

mysqli_query($link,"INSERT INTO `child_vaccine_list`(`c_id`,`g_id`,`v_id`, `rdate`, `given_date`) VALUES ('".$ginsid."','".$row1['g_id']."','".$row1['id']."','".$datefinal."','".$b."')");


  } 
   
  
$_SESSION['success']="Children Record Save Successfully.";
} 
else 
{
	
    $_SESSION['error']="Children Record Save Problems.Try Again!....";
}
 }

else
{
	$_SESSION['error']="Something went wrong.. Please Try Again!!";
}
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>