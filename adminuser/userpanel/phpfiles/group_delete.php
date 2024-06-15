

<?php

include "connect_write.php";


	$emid=encryptor('decrypt',mysqli_real_escape_string($link,$_GET['id']));

  $sql="DELETE FROM `vaccine_group` WHERE id='".$emid."'";



mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Group  Detail Record Delete Successfully.";
} 
else 
{
	
    $_SESSION['group']="Group  Detail Record Delete Problems.Try Again!....";
}


	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>
