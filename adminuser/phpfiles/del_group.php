<?php
include "connect_write.php";
$emid=encryptor('decrypt',mysqli_real_escape_string($link,$_GET['id']));

list($gegrp)=mysqli_fetch_array(mysqli_query($link,"select count(1) from vaccine where g_id='".$emid."' "));
if($gegrp > 0)
{
$_SESSION['error']='Please Delete Vaccine Data Of This Group';
mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

}
else{

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
}

	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>
