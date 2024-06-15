<?php 
include "header.php"; 


	if($_SESSION['date']=="")
{
 $_SESSION['date']=date('Y-m-d');
}

?>

   
      <div class="content-wrapper">
      <section class="content  mt-2">
      <div class="container-fluid">
      <div class="card" >
      <div class="card-header">
      <i class="fas fa-arrows-alt"></i> <strong>&nbsp;WhatsApp Setting</strong>
      </div>
      <div class="card-body">
      
      <?php
      if(isset($_SESSION['msg']) && $_SESSION['msg']!="")
      {
      $_SESSION['msg']=explode('|',$_SESSION['msg']);
      ?>
      <div class="alert alert-<?php print $_SESSION['msg'][0]; ?>"> <strong>
      <?php if($_SESSION['msg'][0]=='danger')echo 'Error'; else echo ucfirst($_SESSION['msg'][0]); ?>! </strong>
      <button class="close" data-dismiss="alert">×</button>
      <?php echo  $_SESSION['msg'][1]; ?></div>
      <?php } 
      unset($_SESSION['msg']);
      list($url,$instance,$token)=mysqli_fetch_array(mysqli_query($link,"select `wp_url`,`wp_instance`,`wp_token` from sms_setting where sms_id=1"));
      ?>
      <form   method="post" action="<?php echo $path; ?>phpfiles/wp_setting.php">
      <div class="row mt-1">
      <div class="form-group col-sm-1 col-xs-6"><strong>Url :</strong></div>
      <div class="form-group col-sm-8 col-xs-6">
      <a href="https://app.gctsoft.in/" target="_blank" > <i class="fas fa-link"></i> WhatsApp Login</a>
      </div>
      </div>
<?php /*?> <div class="row mt-1">
      <div class="form-group col-sm-1 col-xs-6"><strong>Group Name :</strong></div>
      <div class="form-group col-sm-3 col-xs-6">
            
                    <select class="form-control form-control-sm select2" id="g_id" name="g_id" onchange="getbl(this.value);" >
                   <option value>Select</option>
<?php
$qry=mysqli_query($link,"select * from groupwm order by g_id ASC");
while($qrow=mysqli_fetch_array($qry)){
	
?>
<option value="<?php echo $qrow['g_id']; ?>"><?php echo $qrow['g_name']; ?></option>

<?php } ?>
</select>
                  
          </div>
          </div>
           <div class="row mt-1">
      <div class="form-group col-sm-1 col-xs-6"><strong>Mobile Number :</strong></div>
      <div class="form-group col-sm-3 col-xs-6">
           
             <input  type="text" name="mobile" class="form-control form-control-sm" placeholder="Enter Mobile Number"  onkeyup="javascript:this.value=this.value.replace(/[^0-9^.]/g, '');" maxlength="10" autocomplete="off"required />
            </div>
          </div>
<?php */?>      
      
      <div class="row mt-1">
      <div class="form-group col-sm-1 col-xs-6"><strong>Instance Id :</strong></div>
      <div class="form-group col-sm-3 col-xs-6">
      <input name="wp_id" id="wp_id" class="form-control form-control-sm" value="<?php echo $instance_id; ?>" />
      </div>
      </div>
      <div class="row mt-1">
                <div class="form-group col-sm-1 col-xs-6"><strong>Token :</strong></div>
                <div class="form-group col-sm-3 col-xs-6">
                  <input name="token" id="token" class="form-control form-control-sm" value="<?php echo $access_token; ?>" />
                </div>
              </div>
              
       <?php /*?>   <div class="row mt-1">
      <div class="form-group col-sm-1 col-xs-6"><strong>Date :</strong></div>
      <div class="form-group col-sm-3 col-xs-6">
													<input type="text" id="date" name="loan_date" class="form-control form-control-sm datetimepicker-input" data-target="#reservationdate" tabindex="1" value="<?php echo date('d-m-Y',strtotime($_SESSION['date']));?>" onblur="currentdate(this.value)"/>
                                                    </div>
                                                    </div><?php */?>
              
              <div class="row mt-1">
                <div class="col-md-1 "></div>
               <div class="col-sm-2"><button type="submit" class="btn btn-success btn-sm "><i class="fa fa-save fa-sm"></i>&nbsp; Save</button></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  </div>
  </div>
  </section>
  </div>
  
 

<?php include"footer.php"; ?>
