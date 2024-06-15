<?php include"header.php"; 
$advdate=array();
$latedate=array();
list($cnthospital)=mysqli_fetch_array(mysqli_query($link,"SELECT count(`id`) FROM `hospital`"));
list($cntdoctor)=mysqli_fetch_array(mysqli_query($link,"SELECT count(`id`) FROM `doctor`"));
list($cntchild)=mysqli_fetch_array(mysqli_query($link,"SELECT count(`id`) FROM `children`"));
list($cntvaccine)=mysqli_fetch_array(mysqli_query($link,"SELECT count(`id`) FROM `vaccine`"));
$date_atwo=date('Y-m-d',strtotime('- 1 days '.date('d-m-Y')));
$date_ltwo=date('Y-m-d',strtotime('+ 2 days '.date('d-m-Y')));
$date_lone=date('Y-m-d',strtotime('+ 1 days '.date('d-m-Y')));
array_push($latedate,$date_atwo);
$getlated=implode("','",$latedate);
array_push($advdate,$date_lone);
array_push($advdate,$date_ltwo);
$getdvances=implode("','",$advdate);

list($dicustomer)=mysqli_fetch_array(mysqli_query($link,"select GROUP_CONCAT(DISTINCT(c_id)) from `child_vaccine_list` where   status='N' and  take_status='Y' and rdate IN ('$getdvances') order by id ASC"));

list($diclate)=mysqli_fetch_array(mysqli_query($link,"select GROUP_CONCAT(DISTINCT(c_id)) from `child_vaccine_list` where   status='N' and  take_status='Y' and rdate IN ('$getlated') order by id ASC"));
$gqryn=mysqli_query($link,"select DISTINCT(g_id),c_id from `child_vaccine_list` where   status='N' and   c_id IN ('$dicustomer') and  take_status='Y'  and rdate IN ('$getdvances')  ");

while($qrow=mysqli_fetch_array($gqryn))
{
	
	
	list($getgrpname,$gegrpans)=mysqli_fetch_array(mysqli_query($link,"select grp_msg,comp from `vaccine_group` where   id='".$qrow['g_id']."'"));
		list($gdatenew)=mysqli_fetch_array(mysqli_query($link,"select rdate from `child_vaccine_list` where   g_id='".$qrow['g_id']."' and c_id='".$qrow['c_id']."'  and  take_status='Y'  limit 1"));
	list($cmob,$cname,$hid)=mysqli_fetch_array(mysqli_query($link,"select c_number,c_name,h_id from `children` where   id='".$qrow['c_id']."'"));
	list($hname,$haddress,$hnumber)=mysqli_fetch_array(mysqli_query($link,"select h_name,h_address,h_number from `hospital` where   id='".$hid."'"));

 	$getfmsg="આપના બાળક ".$cname." ને આપવાની થતી ".$getgrpname." રસી તારીખ ".date('d-m-Y',strtotime($gdatenew))." રોજ અપાવી જવી.  \n *સરનામું  :* ".$hname." , ".$haddress." ".$hnumber;

$fndate=date('Y-m-d');

list($gcntview)=mysqli_fetch_array(mysqli_query($link,"select count(1) from `sms` where   hdate='".$fndate."' and c_id='".$qrow['c_id']."' and g_id='".$qrow['g_id']."' and type='Advance Vaccine' and mobile='".$cmob."'"));
if($gcntview=='0' and $gegrpans=='Y'){
	mysqli_query($link,"INSERT INTO `sms`(`sms`, `c_id`,`g_id`,`mobile`, `status`, `timestamp`, `type`,`hdate`) VALUES ('".$getfmsg."','".$qrow['c_id']."','".$qrow['g_id']."','".$cmob."','N',NOW(),'Advance Vaccine','".$fndate."')");
}
}


$gqryn1=mysqli_query($link,"select DISTINCT(g_id),c_id from `child_vaccine_list` where   status='N'  and  take_status='Y'  and    c_id IN ('$diclate') and rdate IN ('$getlated')  ");

while($qrow1=mysqli_fetch_array($gqryn1))
{
	
	
	list($getgrp1,$g1ans)=mysqli_fetch_array(mysqli_query($link,"select grp_msg,comp from `vaccine_group` where   id='".$qrow1['g_id']."'"));
		list($gdat1)=mysqli_fetch_array(mysqli_query($link,"select rdate from `child_vaccine_list` where   g_id='".$qrow1['g_id']."' and c_id='".$qrow1['c_id']."'  and  take_status='Y'  limit 1"));
	list($cmob1,$cname1,$hid1)=mysqli_fetch_array(mysqli_query($link,"select c_number,c_name,h_id from `children` where   id='".$qrow1['c_id']."'"));
	list($hname1,$haddress1,$hnumber1)=mysqli_fetch_array(mysqli_query($link,"select h_name,h_address,h_number from `hospital` where   id='".$hid1."'"));

 	$get1fmsg="આપના બાળક ".$cname1." ને આપવાની થતી ".$getgrp1." રસી તારીખ ".date('d-m-Y',strtotime($gdat1))." રોજ અપાવી જવી.   \n *સરનામું  :* ".$hname1." , ".$haddress1." ".$hnumber1;

$fn1date=date('Y-m-d');

list($gcnqtview)=mysqli_fetch_array(mysqli_query($link,"select count(1) from `sms` where   hdate='".$fn1date."' and c_id='".$qrow1['c_id']."' and g_id='".$qrow1['g_id']."' and type='Late Vaccine' and mobile='".$cmob."'"));
if($gcnqtview=='0' and $g1ans=='Y'){
	mysqli_query($link,"INSERT INTO `sms`(`sms`, `c_id`,`g_id`,`mobile`, `status`, `timestamp`, `type`,`hdate`) VALUES ('".$get1fmsg."','".$qrow1['c_id']."','".$qrow1['g_id']."','".$cmob1."','N',NOW(),'Late Vaccine','".$fn1date."')");
}
}

?>
 <div class="content-wrapper" >
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 col-xs-3">
            <strong>Dashboard</strong>
          </div>
          <div class="col-sm-6  col-xs-9">
            <ol class="breadcrumb float-right">
            
              <?php /*?> <li class="breadcrumb-item"><a class="btn btn-sm btn-info " href="<?php echo $path;?>newform" accesskey="<?php echo $s['add_new']; ?>"><i class="fa fa-plus"></i>&nbsp;Add Hospital</a></li>   &nbsp;<?php */?>
            
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
     <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      
      
      
      
      
      
      
      
      
      
           
          <div class="col-lg-3 col-6" >
        <!-- small box --> <a class="quick-btn" href="<?php echo $path; ?>hospitaldetail">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>&nbsp;   <?php echo $cnthospital; ?>         

            </h3>

            <p>&nbsp;Total Hospital   <br />&nbsp;</p>
          </div>
          
          <a  href="<?php echo $path; ?>hospitaldetail" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>

        </div> 
      </a> </div>
      
      <div class="col-lg-3 col-6" >
        <!-- small box --> <a class="quick-btn" href="<?php echo $path; ?>doctordetail">
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>&nbsp;   <?php echo $cntdoctor; ?>         

            </h3>

            <p>&nbsp;Total Doctor    <br />&nbsp;</p>
          </div>
          
          <a  href="<?php echo $path; ?>doctordetail" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>

        </div> 
      </a> </div>
      
      
      <div class="col-lg-3 col-6" >
        <!-- small box --> <a class="quick-btn" href="<?php echo $path; ?>childrendetail">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>&nbsp;   <?php echo $cntchild; ?>         

            </h3>

            <p>&nbsp;Total Children    <br />&nbsp;</p>
          </div>
          
          <a  href="<?php echo $path; ?>childrendetail" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>

        </div> 
      </a> </div>
      
      
      <div class="col-lg-3 col-6" >
        <!-- small box --> <a class="quick-btn" href="<?php echo $path; ?>vaccinedetail">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>&nbsp;   <?php echo $cntvaccine; ?>         

            </h3>

            <p>&nbsp;Total Vaccine    <br />&nbsp;</p>
          </div>
          
          <a  href="<?php echo $path; ?>vaccinedetail" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>

        </div> 
      </a> </div>
      
      
          </div>
       
      </div>
    </section>
    
    </div>
    <?php include"footer.php"; ?>