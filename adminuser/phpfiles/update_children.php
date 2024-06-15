<?php

include "connect_write.php";

		$emid=encryptor('decrypt',$_POST['id']);
$token=hash_hmac('sha256','/updatechildren',$_SESSION['token']);

$flag=0;
 $gettoken=mysqli_real_escape_string($link,$_POST['token']);


if(hash_equals($token,$gettoken))
{

	
   $sql="UPDATE `children` SET `h_id`='".mysqli_real_escape_string($link,trim($_POST['h_id']))."',`d_id`='".mysqli_real_escape_string($link,trim($_POST['d_id']))."',`c_name`='".mysqli_real_escape_string($link,trim($_POST['c_name']))."',`f_name`='".mysqli_real_escape_string($link,trim($_POST['f_name']))."',`b_place`='".mysqli_real_escape_string($link,trim($_POST['b_place']))."',`city`='".mysqli_real_escape_string($link,trim($_POST['city']))."',`address`='".mysqli_real_escape_string($link,trim($_POST['address']))."',`f_occupation`='".mysqli_real_escape_string($link,trim($_POST['f_occupation']))."',`c_number`='".mysqli_real_escape_string($link,trim($_POST['c_number']))."',`gender`='".mysqli_real_escape_string($link,trim($_POST['gender']))."'  WHERE id='".$emid."' ";
  
  


mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Children  Detail Record Updated Successfully.";
} 
else 
{
	
    $_SESSION['error']="Children  Detail Record Update Problems.Try Again!....";
}
 }

else
{
	$_SESSION['error']="Something went wrong.. Please Try Again!!";
}
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>