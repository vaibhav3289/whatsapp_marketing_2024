<?php

include "connect_write.php";

 $emid=encryptor('decrypt',$_GET['id']);
list($gcid)=mysqli_fetch_array(mysqli_query($link,"select g_id from `child_vaccine_list` where  c_id='".$emid."' and  v_id='".$_POST['v_id']."' and take_status='Y'" ));


list($gvnname,$vnewbene,$gnidnew)=mysqli_fetch_array(mysqli_query($link,"select ve_name,vac_benefit,g_id from `vaccine` where id='".$_POST['v_id']."' " ));

list($gcname,$gcustnum)=mysqli_fetch_array(mysqli_query($link,"select c_name,c_number from `children` where  id='".$emid."'" ));


	
		list($fgenewdata)=mysqli_fetch_array(mysqli_query($link,"select up_day from `vaccine` where  id='".$_GET['v_id']."'"));

	
	
$geqry1=mysqli_query($link,"select * from `child_vaccine_list` where  c_id='".$emid."' and status='N' and v_id='".$_GET['v_id']."' and take_status='Y'");

while($getr1=mysqli_fetch_array($geqry1))
{ 

list($feupday)=mysqli_fetch_array(mysqli_query($link,"select up_day from `vaccine` where  id='".$_GET['v_id']."'" ));
if($feupday!='')
{
	mysqli_query($link,"UPDATE `child_vaccine_list` SET take_status='N' where c_id='".$emid."' and  v_id='".$_GET['v_id']."' and status='N'  ");
	
	$garrnew=explode(',',$fgenewdata);
if($garrnew[0]!='') {
mysqli_query($link,"UPDATE `child_vaccine_list` SET take_status='N' where c_id='".$emid."' and  v_id='".$garrnew[0]."' and status='N'  ");
}
if($garrnew[1]!='') {


mysqli_query($link,"UPDATE `child_vaccine_list` SET take_status='N' where c_id='".$emid."' and  v_id='".$garrnew[1]."' and status='N' ");
}
	
}
else
{
	mysqli_query($link,"UPDATE `child_vaccine_list` SET take_status='N' where c_id='".$emid."' and  v_id='".$_GET['v_id']."' and status='N' ");

}

}




//}

	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>