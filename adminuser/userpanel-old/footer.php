<footer class="main-footer">

<div class="float-right d-none d-sm-block">
   <?php  $_SESSION['user_type']['user'];?>(<?php if($_SESSION['user_type']['u_type']=='M')
		{
			echo 'Multi User';	
		}
		else
		{ 
			echo ' Single User ';
		}?>)
     
    </div>
  <strong>Copyright &copy; <a href="http://greencircletechnology.com/">GREEN CIRCLE TECHNOLOGY</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 2.0
  </div>
</footer>
<script src="<?php echo $path;?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $path;?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="<?php echo $path; ?>plugins/jquery/jquery.min.js"></script>
<script src="<?php echo $path; ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $path;?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo $path;?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $path;?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $path;?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $path;?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $path;?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $path;?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $path;?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $path;?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $path;?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $path;?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $path;?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $path;?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- ChartJS -->
<script src="<?php echo $path;?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $path;?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo $path;?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo $path;?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $path;?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $path;?>plugins/moment/moment.min.js"></script>
<script src="<?php echo $path;?>plugins/daterangepicker/daterangepicker.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $path;?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $path;?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $path;?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $path;?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $path;?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": false,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  }); 
//Date range picker
$('#reservationdate').datetimepicker({
  format: 'DD-MM-YYYY'
});
$('#reservationdate2').datetimepicker({
  format: 'DD-MM-YYYY'

});

	//Initialize Select2 Elements
  $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  </script>

</body>
</html>