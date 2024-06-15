<?php include"header.php";

if( $_GET['to']==''){  $gtdate=date('Y-m-d'); } else {  $gtdate=$_GET['to'];}
if( $_GET['from']==''){  $gfdate=date('Y-m-d'); } else {  $gfdate=$_GET['from'];}

 ?>
 <script>
 function check_date(val){
		var today = new Date();
	var date = new Date(val);
   
   var today_date=today.getTime();
  var take_date=date.getTime();
	var Difference_In_Time=take_date-today_date;
	
	 var  Difference_In_Days = 
    Math.round(Difference_In_Time / (1000 * 3600 * 24));
	
	
	
	if(Difference_In_Days<(-1))
	{    alert("Please Select Current date or Greater then Current Date");
		document.getElementById('dp1').value="";
	}
   		
}


</script>

 <script>
 function check_date2(val){
		var today = new Date();
	var date = new Date(val);
   
   var today_date=today.getTime();
  var take_date=date.getTime();
	var Difference_In_Time=take_date-today_date;
	
	 var  Difference_In_Days = 
    Math.round(Difference_In_Time / (1000 * 3600 * 24));
	
	
	
	if(Difference_In_Days<(-1))
	{    alert("Please Select Current date or Greater then Current Date");
		document.getElementById('dp2').value="";
	}
   		
}


</script>

<script>

function print_rpt(to,from,type)
{
	window.open("<?php echo $path;?>priadvvaccine/"+to+"/"+from+"/"+type,'_blank');
}

</script>
<div class="content-wrapper" >
   <section class="content-header"> 
   <strong>Advance Vaccine Report</strong>    
</section>

<section class="content">
  <div class="card card-default">
  	<div class="card-header">
    	<form name="form1" method="get" action="#" class="form-horizontal">
        <div class="row">
          <div class="form-group col-sm-2 col-xs-6">
            <label for="text1" class="control-label">From </label>
            <div>
              <input class="form-control form-control-sm"  name="to" id="dp1"  type="date" value="<?php if( $_GET['to']==''){ echo date('Y-m-d'); } else { echo $_GET['to'];} ?>" placeholder="DD-MM-YYYY"  onblur="check_date(this.value);" required="required" />
            </div>
          </div>
          <div class="form-group col-sm-2 col-xs-6">
            <label for="text1" class="control-label"> To</label>
            <div>
              <input class="form-control form-control-sm"  name="from" id="dp2"  type="date" value="<?php if($_GET['from']==''){echo date('Y-m-d'); } else { echo $_GET['from'];}  ?>" placeholder="DD-MM-YYYY" onblur="check_date2(this.value);" required="required" />
            </div>
          </div>
          
          <div class="form-group col-sm-4">
            <label for="text1" class="control-label d-xs-none">&nbsp;</label>
            <div>
              <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-search"></i> Search </button>
           <?php if($_GET['to']!='') {?>  <button type="button" class="btn btn-primary btn-sm" onClick="print_rpt('<?php echo $_GET['to']; ?>','<?php echo $_GET['from']; ?>','P');"><i class="fas fa-print"></i> Print </button>
             <button type="button" class="btn btn-warning btn-sm" onClick="print_rpt('<?php echo $_GET['to']; ?>','<?php echo $_GET['from']; ?>','E');" ><i class="fas fa-table"></i> Excel </button><?php }?>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="card-body overflow-auto">
     
     
      <table class="table table-sm table-striped table-bordered table-hover" id="example1">
        <thead>
          <tr>
            <th>Sr.No</th>
           <?php /*?> <th>Date</th><?php */?>
            
            <th>Group Name</th>
            <th>Vaccine Name</th>
            <th>Child Name</th>
            <th>Mobile No</th>
                <th>Vaccine Date</th>
            
           </tr>
        </thead>
        <tbody>
			 <?php
            $i=1;							
           
                $sql="select * from `child_vaccine_list` where  rdate>='$gtdate' and rdate<='$gfdate' and status='N'  and  take_status='Y'  ";
          
            $res=mysqli_query($link,$sql);
            while($row=mysqli_fetch_array($res)) {
                list($getchildname,$gchmob)=mysqli_fetch_array(mysqli_query($link,"select c_name,c_number from children where id='$row[c_id]' "));
				  list($vaccinegrp)=mysqli_fetch_array(mysqli_query($link,"select v_group from vaccine_group where id='$row[g_id]' "));
				    list($vacname)=mysqli_fetch_array(mysqli_query($link,"select ve_name from vaccine where id='$row[v_id]' "));
            ?>
          <tr class="odd gradeX">
            <td><?php echo $i;?></td>
            
            <td><?php echo $vaccinegrp; ?></td>
            <td><?php echo $vacname; ?></td>
            <?php /*?><td ><?php echo date('d-m-Y',strtotime($row['date'])); ?></td><?php */?>
            <td><?php echo $getchildname; ?></td>
            <td><?php echo $gchmob; ?></td>
            <td><?php echo date('d-m-Y',strtotime($row['rdate'])); ?></td>
           
          
           
          </tr>
          <?php  $i++;} ?>
        </tbody>
      </table>
     
    </div>
  </div>
</section>
   </div>
    <?php include"footer.php"; ?>