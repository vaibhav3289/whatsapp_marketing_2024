<?php include"header.php";

/*if( $_GET['to']==''){ echo $gtdate=date('Y-m-d'); } else { echo $gtdate=$_GET['to'];}
if( $_GET['from']==''){ echo $gfdate=date('Y-m-d'); } else { echo $gfdate=$_GET['from'];}*/

 ?>
 
  
<div class="content-wrapper" >
   <section class="content-header"> 
     <div class="row mb-2">
      <div class="col-sm-6 col-xs-6">
   <strong>Pending Payment Report</strong>
 </div>
     </div>   
</section>

<section class="content">
  <div class="card card-default">

    <div class="card-body overflow-auto">
     
      <form method="post" action="" id="smsid">
           <input type="hidden" id="gefinal" name="gefinal" value="" />
      <table class="table table-sm table-striped table-bordered table-hover" id="example1">
        <thead>
          <tr>
            <th>Sr.No</th>
           <?php /*?> <th>Date</th><?php */?>
           
            <th>User Name</th>
            <th>Mobile No</th>
            <th>subscription Expiry </th>
           </tr>
        </thead>
        <tbody>
			 <?php
            $i=1;	
						$date=date('Y-m-d');		
     
           $sql="SELECT * FROM `user` WHERE `end_date`< '".$date."' and status='NO'";
 
           $res=mysqli_query($link,$sql);
          while($row=mysqli_fetch_array($res)) {

                //list($user,$mobile)=mysqli_fetch_array(mysqli_query($link,"SELECT `name`,`mobile` FROM `user` WHERE `u_id`='$row[u_id]' "));
            ?>
          <tr >
             
            <td><?php echo $i;?></td>
            
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
           <td><?php echo date('d-m-Y',strtotime($row['end_date'])); ?></td> 
          
     
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