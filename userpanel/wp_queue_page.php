<?php include "header.php";
//include"sms_sub_manu.php";

 /*?>$user_right=mysqli_fetch_array(mysqli_query($link,"SELECT `deletes`, `views`, `downloads` FROM `user_rights` WHERE `uid`='".mysqli_real_escape_string($link,$_SESSION['login']['id'])."' and `pagename`='que_whatsapp'"));
<?php */
//if($user_right['views']==1){

if(!isset($_GET['type']))
{
	$_GET['type']='pending';
}


//mysqli_query($link,"select h_id from history_log where h_id='$_SESSION[h_id]' and operation='View WhatsAPP Queue SMS '");			
//if(mysqli_affected_rows($link)!='1') {
//mysqli_query($link,"INSERT INTO `history_log`(`h_id`, `time`, `operation`,`tab_name`,`url`) VALUES ('$_SESSION[h_id]','$time_stamp','View WhatsAPP Queue SMS','SMS','sms/wpqueuefile')"); //}	


list($count)=mysqli_fetch_array(mysqli_query($link,"select count(*) from `sms` where sms_status='pending'"));

$sql="SELECT * FROM `sms` WHERE `sms_status`='".mysqli_real_escape_string($link,trim($_GET['type']))."'";
$result=mysqli_query($link,$sql);
?>
<!-- Main content -->
<script>
function selectall(box)
{
	var All=document.getElementsByName('sms[]');
	for(i=0;i<All.length;i++)
	{
		All[i].checked=box.checked;
	}
}
function csv()
{
	window.location.href = "csv.php";
}
function del_sms(val)
{
	document.getElementById('gefinal').value=val;
		if(confirm("Do you want to Delete SMS?")==true)
       {
		   document.getElementById("smsid").action='phpfiles/del_sms.php';
         document.getElementById("smsid").submit();
       }
      else{
	      return false;
	  }
}
function emp_sms(val){
 if(confirm("Do you want to Empty SMS?")==true)
     {
		 document.getElementById('gefinal').value=val;
//        location.href="<?php echo $cpath;?>phpfiles/schdelsms";
  document.getElementById("smsid").action='phpfiles/del_sms.php';
         document.getElementById("smsid").submit();
     }
     else{
	    return false;
	 }

}

</script>
<div class="content-wrapper">
<section class="content  mt-1">
  <div class="container-fluid">
    <form method="post" action="phpfiles/del_sms.php" id="smsid">
    <input type="hidden" id="gefinal" name="gefinal" value="" />
      <div class="card">
        <div class="card-header">
           <i class="fas fa-arrows-alt"></i><strong> WhatsApp (Queue Report) </strong>
          <div class="float-right col-sm-10 col-xs-12">
          <!-- <?php //if($user_right['downloads']==1){ ?>
            <input type="button" name="cvsfile" value="Download CSV File " onclick="csv();" class="btn btn-sm btn-info"/>
            <?php //} ?> -->
            <?php //if($user_right['deletes']==1){ ?>
            <input type="button" name="Submit" value="Delete Selected"  onClick="del_sms(1);" class="btn btn-sm btn-danger">
            <input type="button" name="Submit" value="Make Empty Queue" onclick="emp_sms(0);" class="btn btn-sm btn-primary">
            <?php //} ?>
            <span class="badge badge-success">Total Pending : <?php echo $count; ?></span> <br /></div>
            <div class="row float-left pt-3" >
            	<div class="form-group col-sm-3 col-xs-3 text-left"><strong>Type :</strong></div>
                <div class="form-group col-sm-8 col-xs-8">
                    <select class="form-control form-control-sm " name="rtype" id="rtype">
                    	<option value="pending" <?php if($_GET['type']=='pending') echo "selected"; ?>>Pending</option>
                    	<option value="done" <?php if($_GET['type']=='done') echo "selected"; ?>>Sent</option>
                    </select>
                </div>
                <div class="form-group col-sm-1 col-xs-1"><button class="btn btn-sm btn-success" type="button" onClick="getqueue();">View</button></div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body overflow-auto">
        	
        
          <table class="table table-sm table-bordered table-striped table-hover" id="example1">
            <thead>
              <tr class="bg-secondary">
                <th><input name="sms_all" type="checkbox" class="style1" onclick="selectall(this)" value=""/></th>
                <th>Message</th>
                <th>Mobile</th>
                <th>Expected Time</th>
              </tr>
            </thead>
            <tbody>
              <?php
			$i=0;
			while($row=mysqli_fetch_array($result)) {
			?>
              <tr class="row<?php echo ($i%2)+1; ?>">
                <td align="center"><input type="checkbox" name="sms[]" value="<?php echo $row['id']; ?>"></td>
                <td><?php echo $row['sms']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo date('d-m-Y H:i:s',strtotime($row['timestamp'])); ?></td>
              </tr>
              <?php $i++;  } ?>
              <!-- <tr>
                <td colspan="8" align="center" valign="center">No Record Available</td>
            </tr> -->
            </tbody>
          </table>
        </div>
        <!-- /.card-body --> 
      </div>
      <!-- /.card -->
    </form>
  </div></section></div>
  <!-- /.container-fluid --> 
</section>
<script>
function getqueue()
{
	var val=document.getElementById('rtype').value;
	location.href='wp_queue_page.php?type='+val;
}
</script>


<?php //} ?>
<?php include"footer.php"; ?>
