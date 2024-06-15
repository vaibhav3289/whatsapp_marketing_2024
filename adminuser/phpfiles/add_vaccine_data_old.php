<?php

include "connect_write.php";

 $emid=encryptor('decrypt',$_POST['childid']);
list($gcid)=mysqli_fetch_array(mysqli_query($link,"select g_id from `child_vaccine_list` where  c_id='".$emid."' and  v_id='".$_POST['vnewid']."' " ));


list($gvnname,$vnewbene,$gnidnew)=mysqli_fetch_array(mysqli_query($link,"select ve_name,vac_benefit,g_id from `vaccine` where id='".$_POST['vnewid']."' " ));

list($gcname,$gcustnum)=mysqli_fetch_array(mysqli_query($link,"select c_name,c_number from `children` where  id='".$emid."'" ));

mysqli_query($link,"UPDATE `child_vaccine_list` SET given_date='".mysqli_real_escape_string($link,$_POST['vdate'])."',status='Y',take_time=NOW(),remarks='".mysqli_real_escape_string($link,$_POST['vremark'])."' where c_id='".$emid."' and  v_id='".mysqli_real_escape_string($link,$_POST['vnewid'])."'");


list($url,$instance,$token,$wstatusn)=mysqli_fetch_array(mysqli_query($link,"select `wp_url`,`wp_instance`,`wp_token`,whatsapp from sms_setting where sms_id=1"));

$getfemsg="આપના બાળક ".$gcname." ની ".$gvnname." રસી તારીખ ".date('d-m-Y',strtotime($_POST['vdate']))." રોજ અપાઈ ગઈ છે. \n *રસીના ફાયદા :* \n ".$vnewbene;
	if($wstatusn=='Y')
			{
				if(trim($instance)!='' && trim($token)!='')
				{
					
					  if(strlen($gcustnum)==10)
            {
                $gcust1num='91'.$gcustnum;
            
            $mobileNumber = $gcust1num;

            $message = urlencode($getfemsg);
            $url1=str_replace('[number]',$mobileNumber,$url);
            $url1=str_replace('[msg]',$message,$url1);
            $url1=str_replace('[inst]',$instance,$url1);
              $url1=str_replace('[token]',$token,$url1);
					
					
  			$output = file_get_contents($url1);

		$output=json_decode($output,'true');
			//   if($output['status']=="success")
            //{
			//	mysqli_query($link,"INSERT INTO `sms`(`sms`, `c_id`,`g_id`,`mobile`, `status`, `timestamp`, `type`,`hdate`,`senttime`) VALUES ('".$message."','".$emid."','".$gnidnew."','".$gcustnum."','Y',NOW(),'Give Vaccine','".$_POST['vdate']."',NOW())");
		//	}
			
			
			}}}


list($gechkarra)=mysqli_fetch_array(mysqli_query($link,"select GROUP_CONCAT(DISTINCT(id)) from `vaccine` where  dep!=''"));
 $datefinal=date('Y-m-d', strtotime($_POST['vdate']. ' + 30 day'));

//if(in_array($_POST['vnewid'],$gechkarra)){
	
//	list($fdepende)=mysqli_fetch_array(mysqli_query($link,"select dep from `vaccine` where  id='".$getr['g_id']."'"));

	//	mysqli_query($link,"UPDATE `child_vaccine_list` SET rdate='".$datefinal."' where c_id='".$emid."' and  g_id='".$getr['g_id']."' and status='N' and v_id IN ('$fdepende')");
//}
//else{
	
	
$gechkarra=explode(',',$gechkarra);
if(in_array($_POST['vnewid'],$gechkarra)){
		list($fdepende)=mysqli_fetch_array(mysqli_query($link,"select dep from `vaccine` where  id='".$_POST['vnewid']."'"));

	
	
$geqry=mysqli_query($link,"select DISTINCT(g_id) from `child_vaccine_list` where  c_id='".$emid."' and status='N' and v_id NOT IN ($fdepende)  and g_id  order by id ASC");
}else
{
	
	$geqry=mysqli_query($link,"select DISTINCT(g_id) from `child_vaccine_list` where  c_id='".$emid."' and status='N' and g_id!='".$gcid."'  and g_id  order by id ASC");
}





while($getr=mysqli_fetch_array($geqry))
{ 
list($fetchdate)=mysqli_fetch_array(mysqli_query($link,"select rdate from `child_vaccine_list` where  c_id='".$emid."' and status='N' and g_id='".$getr['g_id']."' limit 1 " ));


$start_date = strtotime($fetchdate);
  $end_date = strtotime($datefinal);
 
 $getnew=($end_date - $start_date)/60/60/24;
if($getnew>=0 )
{
	
	$datlast=date('Y-m-d', strtotime($fetchdate. ' + '.$getnew.' day'));
	
	
	mysqli_query($link,"UPDATE `child_vaccine_list` SET rdate='".$datlast."' where c_id='".$emid."' and  g_id='".$getr['g_id']."' and status='N' ");
}
}

//}

	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>