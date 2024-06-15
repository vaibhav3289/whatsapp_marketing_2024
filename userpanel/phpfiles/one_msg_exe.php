<?php
include "connect.php";

$id= $_POST['cid'];
$mobile= $_POST['mobile'];
$wpmsg=$_POST['msg'];
$time = date(' h:i:s a', time()); 
$date=date('Y-m-d');
$sql="INSERT INTO `message`(`u_id`,`msg_text`,`send_time`,`status`) VALUES ('$id','$wpmsg','NOW()','Pending','$date')";

mysqli_query($link,$sql);
	$id=mysqli_insert_id($link);

	if(mysqli_affected_rows($link)>0)
	{
			//mysqli_query($link,"insert into `payment_history`(`b_id`,`status`,`rs`,`date`,`pay_type`,`credit_debit`) values('$id','P','$deposite','".date('Y-m-d',strtotime($_POST['bdate']))."','$paytype','1')");
		
			list($wpurl,$instance,$token,$wpstatus)=mysqli_fetch_array(mysqli_query($link,"SELECT `wp_url`,`wp_instance`,`wp_token`,`whatsapp` FROM `sms_setting` WHERE sms_id='1'"));

            //echo $wpstatus;exit;
	if($wpstatus=='Y')
			{
				if(trim($instance)!='' && trim($token)!='')
				{					 
//echo $wpmsg;exit;     
	        
					if(trim($instance)!='' && trim($token)!='')
					if(strlen($mobile)==10) $getagname='91'.$mobile;
					$url1=str_replace('[number]',$getagname,$wpurl);
					$url1=str_replace('[msg]',urlencode($wpmsg),$url1);
					$url1=str_replace('[inst]',$instance,$url1);
					$url1=str_replace('[token]',$token,$url1);
					
			        $output = file_get_contents($url1);
					$output=json_decode($output,'true');
					
					

					if($output['status']=="success")
					{
						mysqli_query($link,"UPDATE `message` SET `status`='Done',`send_time`='".$time."'  WHERE m_id='".$id."'");
						
						$_SESSION['success']="Message Send Successfully";
						 header('Location:'.$_SERVER['HTTP_REFERER']);
					}else{

                       $_SESSION['error']="Message Not Sended ! ";
                        header('Location:'.$_SERVER['HTTP_REFERER']);
					}
				}
			}

}
		?>