<?php

include "connect_write.php";

		$id=$_GET['id'];

	
   $sql="UPDATE `doctor` SET `d_name`='".mysqli_real_escape_string($link,trim($_POST['d_name']))."',`d_number`='".mysqli_real_escape_string($link,trim($_POST['d_number']))."',`bod`='".mysqli_real_escape_string($link,trim($_POST['bod']))."',`gender`='".mysqli_real_escape_string($link,trim($_POST['gender']))."',`email`='".mysqli_real_escape_string($link,trim($_POST['email']))."',`address`='".mysqli_real_escape_string($link,trim($_POST['address']))."',`qualification`='".mysqli_real_escape_string($link,trim($_POST['qualification']))."',`h_id`='".mysqli_real_escape_string($link,trim($_POST['h_id']))."'  WHERE id='$id' ";
  
  


mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Doctor  Detail Record Updated Successfully.";
} 
else 
{
	
    $_SESSION['error']="Doctor  Detail Record Update Problems.Try Again!....";
}

	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>