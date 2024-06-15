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
            <h4>WhatsApp Configuration</h4>
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
            <form   method="post" action="<?php echo $path; ?>phpfiles/wpsetting">
                <div class="row">
                
                <div class="form-group col-sm-2 col-xs-6">
            <label for="text1" class="control-label"> Url</label>
            <div  class="input-group">
                <a href="https://app.gctsoft.in/" target="_blank" > <i class="fas fa-link"></i> WhatsApp Login</a>
            </div>
          </div>
                
           
                
                
                 <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> Instance Id</label>
            <div  class="input-group">
                 <input name="wp_id" id="wp_id" class="form-control form-control-sm" value="<?php echo $instance; ?>" />
            </div>
          </div>
          
          
                  <div class="form-group col-sm-3 col-xs-6">
            <label for="text1" class="control-label"> Token</label>
            <div  class="input-group">
              <input name="token" id="token" class="form-control form-control-sm" value="<?php echo $token; ?>" />
            </div>
          </div>
                
               
                  <div class="form-group col-sm-2 col-xs-6">
            <label for="text1" class="control-label"> Send Message</label>
            <div  class="input-group">
            <input type="radio" name="whatsapp" value="Y" checked <?php if($newwhat=='Y') { echo "checked"; }?> />
              <strong>&nbsp;Yes&nbsp; </strong>&nbsp;&nbsp;
              <input type="radio" name="whatsapp"  value="N" <?php if($newwhat=='N') { echo "checked"; }?> >
              <strong>&nbsp;No&nbsp; </strong>
            </div>
          </div> <div class="form-group col-sm-1 col-xs-6">
            <label for="text1" class="control-label"> </label>
            <div  class="input-group">
              <button type="submit" class="btn btn-success btn-sm "><i class="fa fa-save fa-sm"></i>&nbsp; Save</button>
            </div>
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