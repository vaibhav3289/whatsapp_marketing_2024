<?php

include"header.php"; 
$date=date('Y-m-d');
 //echo"select o.sdate,o.ldate,o.rate,o.p_id,b.party_name,b.bill_no,b.city,b.total,b.deposite,b.other from border o,booking b where b.b_id=o.b_id and o.sdate='$date' and b.status='P'";
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
   
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">  
              <div class="inner">
        <h3>&nbsp;
              <?php 
 list($id)=mysqli_fetch_array(mysqli_query($link,"SELECT  count(*) FROM `user`"));
        if($id!=""){
              echo $id;
            }else{
              echo 0;
            }
        ?></h3>
                <p> Total User </p>
              </div>
              <!--<div class="icon">
               <i class="ion ion-person-add"></i>
              </div>-->
              <a href="<?php echo $path; ?>view_user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
                 <div class="col-lg-3 col-6">
            <!-- general form elements -->
               <!-- small box -->
             <div class="small-box bg-danger">
              <div class="inner">
              <h3>&nbsp;
             <?php list($id)=mysqli_fetch_array(mysqli_query($link,"SELECT count(*) FROM `sms` where hdate ='".$date."'"));
            if($id!=""){
              echo $id;
            }else{
              echo 0;
            }
        ?></h3>

                <p>Total Group Message</p>
              </div>
             <!-- <div class="icon">
                <i class="ion ion-bag"></i>
              </div>-->
              <a href="<?php echo $path; ?>wp_send_msg_rpt.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>
                <div class="col-lg-3 col-6">
            <!-- general form elements -->
               <!-- small box -->
             <div class="small-box bg-warning">
              <div class="inner">
              <h3>&nbsp;2
            </h3>

                <p>Payment Report</p>
              </div>
             <!-- <div class="icon">
                <i class="ion ion-bag"></i>
              </div>-->
              <a href="<?php echo $path; ?>pay_report.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            
          </div>
          <div class="col-lg-3 col-6">
            <!-- general form elements -->
               <!-- small box -->
             <div class="small-box bg-primary">
              <div class="inner">
              <h3>&nbsp;2
             </h3>

                <p>Pending Payment Report</p>
              </div>
             <!-- <div class="icon">
                <i class="ion ion-bag"></i>
              </div>-->
              <a href="<?php echo $path; ?>pending_pay_report.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            
          </div>
              
    <!--                 <div class="row">
      <div class="col-sm-12">
       <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Hotel Booking Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
             
            </div>
      </div>
    </div>
             --> 
          
         </section>
    <!-- /.content -->
  </div>



 <?php
             if(date('m')<=3)
             {
              $sdate=(date('Y')-1).'-04-01';
              $edate=date('Y').'-03-31';
              $year=array((date('Y')-1).'-04',(date('Y')-1).'-05',(date('Y')-1).'-06',(date('Y')-1).'-07',(date('Y')-1).'-08',(date('Y')-1).'-09',(date('Y')-1).'-10',(date('Y')-1).'-11',(date('Y')-1).'12',date('Y').'-01',date('Y').'-02',date('Y').'-03');
             }
             else
             {
               $sdate=date('Y-04-01');
                $edate=(date('Y')+1).'-03-'.'31';
               $year=array(date('Y').'-04',date('Y').'-05',date('Y').'-06',date('Y').'-07',date('Y').'-08',date('Y').'-09',date('Y').'-10',date('Y').'-11',date('Y').'12',(date('Y')+1).'-01',(date('Y')+1).'-02',(date('Y')+1).'-03');
             }
           
           $booking=array();
           $income=array();
           foreach($year as $val)
           {
            //echo "SELECT  count(*) FROM `booking` where `bdate` like '$val%'";
            list($book)=mysqli_fetch_array(mysqli_query($link,"SELECT  count(*) FROM `booking` where `date` like '$val%'"));

            list($inc1)=mysqli_fetch_array(mysqli_query($link,"select sum(rs) from `payment_history` where date like '$val%' and `credit_debit`='1'"));
            

            
            array_push($income,($inc1)); 
            array_push($booking,($book));
           }          
           $inc=implode(",",$income);
           $booking=implode(",",$booking);
       
          

include "footer.php";

?>
<script>

  var areaChartData = {

    labels  : [ 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar'],

    datasets: [

    {

      label               : 'Booking',

      backgroundColor     : 'rgba(60,141,188,0.9)',

      borderColor         : 'rgba(60,141,188,0.8)',

      pointRadius          : false,

      pointColor          : '#3b8bba',

      pointStrokeColor    : 'rgba(60,141,188,1)',

      pointHighlightFill  : '#fff',

      pointHighlightStroke: 'rgba(60,141,188,1)',

      data                :[<?php echo $booking; ?>]

    },

    {

      label               : 'Income',

      backgroundColor     : 'rgba(210, 214, 222, 1)',

      borderColor         : 'rgba(210, 214, 222, 1)',

      pointRadius         : false,

      pointColor          : 'rgba(210, 214, 222, 1)',

      pointStrokeColor    : '#c1c7d1',

      pointHighlightFill  : '#fff',

      pointHighlightStroke: 'rgba(220,220,220,1)',

      data                : [<?php echo $inc; ?>]

    },

    ]

  }

  var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')

  var stackedBarChartData = jQuery.extend(true, {}, areaChartData)

   var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

  new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })

</script>
