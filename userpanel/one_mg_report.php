<?php include"header.php";

if( $_GET['to']==''){ echo $gtdate=date('Y-m-d'); } else { echo $gtdate=$_GET['to'];}
if( $_GET['from']==''){ echo $gfdate=date('Y-m-d'); } else { echo $gfdate=$_GET['from'];}

 ?>
 
  <script>
  function selectall(box)
{
	var All=document.getElementsByName('sms[]');
	for(i=0;i<All.length;i++)
	{
		All[i].checked=box.checked;
	}
}
function del_sms(val)
{
	document.getElementById('gefinal').value=val;
		if(confirm("Do You Want To Delete Selected Send Message?")==true)
       {
		   document.getElementById("smsid").action='<?php echo $path;?>phpfiles/del_sm_send_data.php';
         document.getElementById("smsid").submit();
       }
      else{
	      return false;
	  }
}
</script>
<div class="content-wrapper" >
   <section class="content-header"> 
     <div class="row mb-2">
      <div class="col-sm-6 col-xs-6">
   <strong>Single Message Report</strong>
 </div>
     <div class="col-sm-6 col-xs-6 float-right">
        <ol class="breadcrumb float-right">
            
            <a class="btn btn-info btn-sm" href="<?php echo $path;?>one_msg.php" ><i class="fa fa-plus"></i>&nbsp;&nbsp;Single Message </a>
        </ol>
      </div> </div>   
</section>

<section class="content">
  <div class="card card-default">
  	<div class="card-header">
    	<form name="form1" method="get" action="#" class="form-horizontal">
        <div class="row">
          <div class="form-group col-sm-2 col-xs-6">
            <label for="text1" class="control-label">From </label>
            <div>
              <input class="form-control form-control-sm"  name="to" id="dp1"  type="date" value="<?php if( $_GET['to']==''){ echo date('Y-m-d'); } else { echo $_GET['to'];} ?>" placeholder="DD-MM-YYYY" />
            </div>
          </div>
          <div class="form-group col-sm-2 col-xs-6">
            <label for="text1" class="control-label"> To</label>
            <div>
              <input class="form-control form-control-sm"  name="from" id="dp2"  type="date" value="<?php if($_GET['from']==''){echo date('Y-m-d'); } else { echo $_GET['from'];}  ?>" placeholder="DD-MM-YYYY"  />
            </div>
          </div>
          
          <div class="form-group col-sm-4">
            <label for="text1" class="control-label d-xs-none">&nbsp;</label>
            <div>
              <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-search"></i> Search </button>
            
            <?php if($_GET['to']!='') {?>
              <input type="button" name="Submit" value="Delete Selected" onClick="del_sms('1');" class="btn btn-sm btn-danger"> &nbsp; <?php }?>
            <?php /*?> <button type="button" class="btn btn-primary btn-sm" onClick="print_rpt('<?php echo $_GET['to']; ?>','<?php echo $_GET['from']; ?>','P');"><i class="fas fa-print"></i> Print </button>
             <button type="button" class="btn btn-warning btn-sm" onClick="print_rpt('<?php echo $_GET['to']; ?>','<?php echo $_GET['from']; ?>','E');"><i class="fas fa-table"></i> Excel </button><?php */?>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="card-body overflow-auto">
     
      <form method="post" action="" id="smsid">
           <input type="hidden" id="gefinal" name="gefinal" value="" />
      <table class="table table-sm table-striped table-bordered table-hover" id="example1">
        <thead>
          <tr><th><input name="sms_all" type="checkbox" class="style1" onclick="selectall(this)" value=""/></th>
            <th>Sr.No</th>
           <?php /*?> <th>Date</th><?php */?>
            <th>Group Name</th>
            <th>Mobile No</th>
            <th>Message</th>
            <th>Status</th>
            <th>Send Time</th>
           </tr>
        </thead>
        <tbody>
			 <?php
            $i=1;	
								
           
       $sql="select * from `message` where date_format(`send_time`,'%Y-%m-%d')>='$gtdate' and date_format(`send_time`,'%Y-%m-%d')<='$gfdate'";
     
       $res=mysqli_query($link,$sql);
          while($row=mysqli_fetch_array($res)) {

                list($user)=mysqli_fetch_array(mysqli_query($link,"SELECT `name` FROM `user` WHERE `u_id`='$row[u_id]' "));
            ?>
          <tr >
             <td align="left"><input type="checkbox" name="sms[]" value="<?php echo $row['id']; ?>"></td>
            <td><?php echo $i;?></td>
            <?php /*?><td ><?php echo date('d-m-Y',strtotime($row['date'])); ?></td><?php */?>
            <td><?php echo $user; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['msg_text']; ?></td>
            <td><?php if($row['status']=='s') { echo "Send"; } else {  echo "Pending"; }?></td>
            <td><?php echo date('d-m-Y h:i:s A',strtotime($row['send_time'])); ?></td>
          
           
          </tr>
          <?php  $i++;} ?>
        </tbody>
      </table>
      </form>
    </div>
  </div>
</section>
   </div>
    <?php include"footer.php"; ?>