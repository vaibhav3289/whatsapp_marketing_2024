<?php
include "connect_write.php";
$emid=encryptor('decrypt',mysqli_real_escape_string($link,$_GET['id']));

list($gevac)=mysqli_fetch_array(mysqli_query($link,"select count(1) from child_vaccine_list where v_id='".$emid."' "));
if($gegrp > 0)
{
$_SESSION['error']='Please Delete Children Data Of This Vaccine';
mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

}else{

  $sql="DELETE FROM `vaccine` WHERE id='".$emid."'";



mysqli_query($link,$sql);  

 if(mysqli_affected_rows($link)>0)
 {
	 
$_SESSION['success']="Vaccine Detail Record Delete Successfully.";
} 
else 
{
	
    $_SESSION['err_token']="Vaccine Detail Record Delete Problems.Try Again!....";
}

}
	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);?>
