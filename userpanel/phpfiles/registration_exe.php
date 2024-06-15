<?php
include "connect.php";

$image=$_FILES['image']['name'];

//$sdate=date('Y-m-d');

//$edate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($sdate)) . " + 1 year"));


$path="../admin/uplode/".$image;
move_uploaded_file($_FILES['image']['tmp_name'],$path);

$sql="INSERT INTO `comapny`(`name`, `cat_id`, `owner_name`, `address`, `email`, `mobile`, `product`, `description`,`b_image`, `memrship_sdate`,`memrship_edate`, `approval`, `status`, `password`) VALUES ('$_POST[name]','$_POST[category]','$_POST[owner]','$_POST[address]','$_POST[email]','$_POST[mobile]','$_POST[product]','$_POST[desc]','$image','','','N','N','$_POST[password]')";
mysqli_query($link,$sql);
$id = mysqli_insert_id($link);
mysqli_query($link,"INSERT INTO `payment`(`u_id`, `amount`, `date_time`, `p_date`) VALUES('$id')");

$_SESSION['reg']="Registration Successfully.Wait For admin Confirmation";
header('location:../registration.php')
?>