<?php
include"header.php";

 ?>
 
 <script>
function del_product(id)
{
 document.getElementById('delbtn').innerHTML=
  '<button class="btn btn-sm btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-sm btn-danger" onClick=document.location.href="phpfiles/product_del.php/'+id+'">Confirm</button>'
}

</script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
           <div class="col-sm-6 col-xs-3">
            <strong>User </strong>
          </div>
          <div class="col-sm-6 col-xs-3">
          <ol class="breadcrumb float-right">
              
               <li class="breadcrumb-item"><a class="btn btn-sm btn-info " href="user_form.php" ><i class="fa fa-plus"></i>&nbsp;User</a></li>   &nbsp;

            
            </ol>
</div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
       
             <div class="card">
          
              <!-- /.card-header -->
               <?php
               if(isset($_SESSION['success']) && $_SESSION['success']!="")
{
?>
                          <div class="alert alert-success">
                  <strong>Success! </strong> 
                    
                  <?php print $_SESSION['success']; ?></div>
                          <?php
}
if(isset($_SESSION['error']) && $_SESSION['error']!="")
{
?>
                        <div class="alert alert-danger">
                    
                    
                  <strong>Error! </strong> <?php print $_SESSION['error']; ?></div>
                   <?php 
}
unset($_SESSION['success']);
unset($_SESSION['error']); ?>

<!-- function declaration end -->

              <!-- form start -->
         
                <div class="card-body overflow-auto">
                <table id="example1" class="table table-bordered table-striped table-sm-responsive">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Start_Date</th>
                    <th>End_Date</th>
                    <th>Action</th>
                   
                    </tr>
                    </thead>
                    <tbody>
                   <?php
				  $i=1;
                      $sql="SELECT * FROM `user`";
                      $res=mysqli_query($link,$sql);
                      while($row=mysqli_fetch_array($res)) {
                      
                        ?>
                        <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['mobile'];?> &nbsp;&nbsp; <a href="https://api.whatsapp.com//send?phone=91<?php echo $row['mobile']; ?>&text=Hi"
        class="badge bg-success" target="_blank"><i class="fab fa-whatsapp"></i></a> &nbsp; <a href="tel:<?php echo $row['mobile']; ?>"
         class="badge bg-primary" target="_blank"><i class="fas fa-phone-alt"></i></a>
                        </td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['pass'];?></td>
                        <td><?php echo $row['status'];?></td>
                        
                        <td><?php if($row['start_date']!='0000-00-00'){ echo date('d-m-Y',strtotime($row['start_date'])); }?></td>
                         <td><?php if($row['end_date']!='0000-00-00'){ echo date('d-m-Y',strtotime($row['end_date'])); }?></td>
                      
                          
       
                          <td><a href="update_user.php?id=<?php echo $row['u_id'];?>"class="btn btn-sm btn-primary" title="Edit"><i class="far fa-edit"></i></a>&nbsp;
                          <a href='phpfiles/delete_user.php?id=<?php echo $row['u_id'];?>'class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                          </tr>
                        <?php }?>
                </tbody>
              </table>
         
    </section>
  </div>
   <div class="col-md-12">
      <div class="modal fade" id="buttonedModal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <strong class="modal-title" id="H1"> Delete Product ?</strong>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"> Do you want to delete this Product ? </div>
            <div class="modal-footer" id="delbtn">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  
<?php
include"footer.php"; ?>




