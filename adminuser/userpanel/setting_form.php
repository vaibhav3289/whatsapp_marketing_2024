<?php
include "header.php";



    ?>
    <link rel="stylesheet" href="<?php echo $path; ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path.'dist/css/toggle.css'; ?>">
    
    <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Setting</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    


<section class="content">

    <div class="card">
        <div class="card-body py-2">
          <?php
          if(isset($_SESSION['msg']) && $_SESSION['msg']!="")
          {
            $_SESSION['msg']=explode('|',$_SESSION['msg']);
            ?>
            <div class="alert alert-<?php print $_SESSION['msg'][0]; ?>"><strong>
                <?php echo ucfirst($_SESSION['msg'][0]); ?>! </strong>
                <button class="close" data-dismiss="alert">×</button>
                <?php echo  $_SESSION['msg'][1]; ?></div>
                <?php 
                unset($_SESSION['msg']);
            } 
            list($url,$instance,$token,$newwhat)=mysqli_fetch_array(mysqli_query($link,"select `wp_url`,`wp_instance`,`wp_token`,`whatsapp` from sms_setting where sms_id=1"));
            ?>
            <form   method="post" action="phpfiles/wp_setting.php">
                <div class="row">
                 <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> User Name</label>
                    <select class="form-control form-control-sm select2" id="u_id" name="u_id" onchange="getbl(this.value);" >
                   <option value>Select</option>
<?php
$qry=mysqli_query($link,"select * from user order by u_id ASC");
while($qrow=mysqli_fetch_array($qry)){
	
?>
<option value="<?php echo $qrow['u_id']; ?>"><?php echo $qrow['name']; ?></option>

<?php } ?>
</select>
                  
          </div>
          
          
             <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label">Mobile Number</label>
            <div  class="input-group">
             <input  type="text" name="mobile" class="form-control form-control-sm" placeholder="Enter Mobile Number"  onkeyup="javascript:this.value=this.value.replace(/[^0-9^.]/g, '');" maxlength="10" autocomplete="off"required />
            </div>
          </div>
            
                 <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> Instance Id</label>
            <div  class="input-group">
                 <input name="wp_id" id="wp_id" class="form-control form-control-sm" value="<?php echo $instance_id; ?>" />
            </div>
          </div>
          
          
                  <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> access_token</label>
            <div  class="input-group">
              <input name="access_token" id="access_token" class="form-control form-control-sm" value="<?php echo $access_token; ?>" />
            </div>
          </div>
                 <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label">Date</label>
            <div  class="input-group">
              <input type="date" name="date" id="date" class="form-control form-control-sm"  />
            </div>
        
            
          </div> <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> </label>
            <div  class="input-group">
              <button type="submit" class="btn btn-success btn-sm "><i class="fa fa-save fa-sm"></i>&nbsp; Save</button>
            </div>
          </div>
         
             
            
          <div class="row">
           
  
     
          </div>
</form>
</div>
</div>



          
       </section>
       </div>
      
       <script>
          function cngwpstatus()
          {
             if(document.getElementById('whatsapp').checked==true)
             {
                var url="<?php echo $path; ?>phpfiles/changemsgtype/W";
            }
            else
            {
                var url="<?php echo $path; ?>phpfiles/changemsgtype/S";
            }

            $.ajax({
                url:url,
                data:{},
                success: function(res){
                  res=res.split('|');
                  $(function() {
                    var Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000
                  });
                    Toast.fire({ icon: res[0], title: res[1] });
                });
              }
          });
        }
    </script>
    <script src="<?php echo $path; ?>plugins/sweetalert2/sweetalert2.min.js"></script>
  
<?php include "footer.php"; ?>