<?php
include "connect_write.php";

list($custid,$nvfid,$genrdate)=mysqli_fetch_array(mysqli_query($link,"SELECT `c_id`,v_id,rdate FROM `child_vaccine_list` WHERE id='".mysqli_real_escape_string($link,$_GET['id'])."'" ));

list($getdob)=mysqli_fetch_array(mysqli_query($link,"SELECT `dob` FROM `children` WHERE id='".$custid."'" ));

  mysqli_query($link,"UPDATE `child_vaccine_list` SET given_date='',status='N',take_time='',remarks='',updated='NOW()' where id='".mysqli_real_escape_string($link,$_GET['id'])."'");


list($gngid,$finmaxdate)=mysqli_fetch_array(mysqli_query($link,"select g_id,max(rdate) from `child_vaccine_list` where  c_id='".$custid."' and status='Y' and take_status='Y' " ));

if($finmaxdate=='') {
	
$datefinal=$getdob;
}else
{$datefinal=date('Y-m-d', strtotime($finmaxdate. ' + 30 day'));}

if($gngid==''){
	//echo "select DISTINCT(g_id) from `child_vaccine_list` where  c_id='".$custid."' and status='N' order by id ASC";
	
	$geqry=mysqli_query($link,"select DISTINCT(g_id) from `child_vaccine_list` where  c_id='".$custid."' and status='N' and take_status='Y' order by id ASC");
	while($getr=mysqli_fetch_array($geqry))
{ 

list($cntgrp)=mysqli_fetch_array(mysqli_query($link,"select day from `vaccine_group` where  id='".$getr['g_id']."' " ));

$fifixdate=date('Y-m-d', strtotime($getdob. ' + '.$cntgrp.' day'));


list($fetchdate)=mysqli_fetch_array(mysqli_query($link,"select rdate from `child_vaccine_list` where  c_id='".$custid."' and status='N' and g_id='".$getr['g_id']."' and take_status='Y' limit 1 " ));


$start_date = strtotime($fifixdate);
  $end_date = strtotime($datefinal);

  $getnew=($end_date - $start_date)/60/60/24;

if($getnew>=0 )
{
	if($gngid==''){
		
		
	$datglast=date('Y-m-d', strtotime($getdob. ' + '.$cntgrp.' day'));
	}
	else
	{$datglast=date('Y-m-d', strtotime($fetchdate. ' + '.$getnew.' day'));
	}
	
		
	
	mysqli_query($link,"UPDATE `child_vaccine_list` SET rdate='".$datglast."' where c_id='".$custid."' and  g_id='".$getr['g_id']."' and status='N' and take_status='Y' ");
}
else
{
	
	mysqli_query($link,"UPDATE `child_vaccine_list` SET rdate='".$fifixdate."' where c_id='".$custid."' and  g_id='".$getr['g_id']."' and status='N' and take_status='Y' ");
}

}

	
	
}else
{
	
	
	
	//echo "select DISTINCT(g_id) from `child_vaccine_list` where  c_id='".$custid."' and status='N' and g_id!='".$gngid."' order by id ASC";
//$geqry=mysqli_query($link,"select DISTINCT(g_id) from `child_vaccine_list` where  c_id='".$custid."' and status='N' and g_id!='".$gngid."' order by id ASC");
list($gechkarra)=mysqli_fetch_array(mysqli_query($link,"select GROUP_CONCAT(DISTINCT(id)) from `vaccine` where  dep!=''"));
$gechkarra=explode(',',$gechkarra);
if(in_array($nvfid,$gechkarra)){
	
	
		list($fgenewdata)=mysqli_fetch_array(mysqli_query($link,"select up_day from `vaccine` where  id='".$nvfid."'"));

	
	
$geqry1=mysqli_query($link,"select DISTINCT(g_id) from `child_vaccine_list` where  c_id='".$custid."' and status='N' and v_id >13 and take_status='Y'   order by id ASC");

while($getr1=mysqli_fetch_array($geqry1))
{ 
$garrnew=explode(',',$fgenewdata);



if($garrnew[0]!='') {

$fetch_f1=date('Y-m-d', strtotime($genrdate. ' + 30 day'));


mysqli_query($link,"UPDATE `child_vaccine_list` SET rdate='".$fetch_f1."' where c_id='".$custid."' and  v_id='".$garrnew[0]."' and status='N' and take_status='Y' ");
}
if($garrnew[1]!='') {
$fetch_f2=date('Y-m-d', strtotime($fetch_f1. ' + 30 day'));

mysqli_query($link,"UPDATE `child_vaccine_list` SET rdate='".$fetch_f2."' where c_id='".$custid."' and  v_id='".$garrnew[1]."' and status='N' and take_status='Y' ");
}

list($fetchdate2)=mysqli_fetch_array(mysqli_query($link,"select rdate from `child_vaccine_list` where  c_id='".$custid."' and status='N' and g_id='".$getr1['g_id']."' and take_status='Y' limit 1 " ));
list($fmaxdate)=mysqli_fetch_array(mysqli_query($link,"select max(given_date) from `child_vaccine_list` where  c_id='".$custid."' and status='Y'  and take_status='Y' limit 1 " ));

 $datefinal2=date('Y-m-d', strtotime($fmaxdate. ' + 30 day'));

$start_date1 = strtotime($fetchdate2);
  $end_date1 = strtotime($datefinal2);
 
   $getnew1=($end_date1 - $start_date1)/60/60/24;

if($getnew1>=0 )
{
	
	$datlast1=date('Y-m-d', strtotime($fetchdate2. ' + '.$getnew1.' day'));
	
	
	mysqli_query($link,"UPDATE `child_vaccine_list` SET rdate='".$datlast1."' where c_id='".$custid."' and  g_id='".$getr1['g_id']."' and status='N' and take_status='Y' ");
}
}





}else
{	$geqry=mysqli_query($link,"select DISTINCT(g_id) from `child_vaccine_list` where  c_id='".$custid."' and status='N' and g_id!='".$gngid."' and take_status='Y' order by id ASC");
	while($getr=mysqli_fetch_array($geqry))
{ 

list($cntgrp)=mysqli_fetch_array(mysqli_query($link,"select day from `vaccine_group` where  id='".$getr['g_id']."' " ));

$fifixdate=date('Y-m-d', strtotime($getdob. ' + '.$cntgrp.' day'));


list($fetchdate)=mysqli_fetch_array(mysqli_query($link,"select rdate from `child_vaccine_list` where  c_id='".$custid."' and status='N' and g_id='".$getr['g_id']."' and take_status='Y' limit 1 " ));


$start_date = strtotime($fifixdate);
  $end_date = strtotime($datefinal);

  $getnew=($end_date - $start_date)/60/60/24;

if($getnew>=0 )
{
	if($gngid==''){
		
		
	$datglast=date('Y-m-d', strtotime($getdob. ' + '.$cntgrp.' day'));
	}
	else
	{$datglast=date('Y-m-d', strtotime($fetchdate. ' + '.$getnew.' day'));
	}
	
		
	
	mysqli_query($link,"UPDATE `child_vaccine_list` SET rdate='".$datglast."' where c_id='".$custid."' and  g_id='".$getr['g_id']."' and status='N' and take_status='Y' ");
}
else
{
	
	mysqli_query($link,"UPDATE `child_vaccine_list` SET rdate='".$fifixdate."' where c_id='".$custid."' and  g_id='".$getr['g_id']."' and status='N' and take_status='Y' ");
}

}
}
}



	mysqli_close($link);
header('Location:'.$_SERVER['HTTP_REFERER']);

   
    
   
 ?>
