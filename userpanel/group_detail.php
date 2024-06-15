<?php include "header.php"; 


?>


<script>
function setsrno(id,val){
	
	
$('#getsr_'+id).load('<?php echo $path; ?>phpfiles/upgrpsr/'+id+'/'+val);
}

</script>

<div class="content-wrapper" >
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 col-xs-3">
            <strong>WhatsApp Group Detail </strong>
          </div>
          <div class="col-sm-6  col-xs-9">
            <ol class="breadcrumb float-right">
            
               <li class="breadcrumb-item"><a class="btn btn-sm btn-info " href="group_form.php" accesskey="<?php echo $s['add_new']; ?>"><i class="fa fa-plus"></i>&nbsp; Add Group</a></li>   &nbsp;
            
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="card card-info">
        <div class="card-body">
          
            <?php
        if(isset($_SESSION['success']) && $_SESSION['success']!="")
        {
          ?>
            <div class="alert alert-success alert-success" >
              <button class="close" data-dismiss="alert">&times;</button>
              <strong>Success!</strong> <?php echo $_SESSION['success']; ?> </div>
            <?php 
          }

		  
		  
         if(isset($_SESSION['group']) && $_SESSION['group']!="")
        {
          ?>
            <div class="alert alert-error alert-danger" >
              <button class="close" data-dismiss="alert">&times;</button>
              <strong>Error!</strong> <?php echo $_SESSION['group']; ?> </div>
            <?php 
          }
         
		   if(isset($_SESSION['err_token']) && $_SESSION['err_token']!="")
        {
          ?>
            <div class="alert alert-error alert-danger" >
              <button class="close" data-dismiss="alert">&times;</button>
              <strong>Error!</strong> <?php echo $_SESSION['err_token']; ?> </div>
            <?php 
          }
		  unset($_SESSION['success']);
		  unset($_SESSION['group']);
          unset($_SESSION['err_token']);
          ?>
            <div class="table table-sm-responsive overflow-auto" >
              <table class="table table-sm table-striped table-bordered table-hover" id="example1" >
                <thead>
                  <tr>
                    <th>No</th>
                   
                    <th>Group Name</th>              
                    <th>Action</th>                    
                  </tr>
                </thead>
                <tbody>
                  <?php
				  $i=1;
                      $sql="SELECT * FROM `groupwm` where `u_id`='".$_SESSION['user']."'";
                      
                      $res=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($res)) {
						
                      
					    ?>
                        <tr>
                        <td><?php echo $i++; ?></td>
                         
                         
                          <td><?php echo $row['g_name'];?></td>
       
                          <td><a href="update_group.php?id=<?php echo $row['g_id'];?>"class="btn btn-sm btn-primary" title="Edit"><i class="far fa-edit"></i></a>&nbsp;
                         <a href='phpfiles/delete_group.php?id=<?php echo $row['g_id'];?>'class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                          </tr>
                        <?php }?>
                </tbody>
              </table>
            
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="col-md-12">
      <div class="modal fade" id="buttonedModal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <strong class="modal-title" id="H1"> Delete Vaccine Group ?</strong>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"> Do you want to delete this record? </div>
            <div class="modal-footer" id="delbtn">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <?php include"footer.php"; ?>