<?php

/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>
     <!-- Small boxes (Stat box) -->
     <div class="row">
       <div class="col-lg-3 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-aqua">
           <div class="inner">
             <h3>150</h3>

             <p>Followers</p>
           </div>
           <div class="icon">
             <i class="ion ion-bag"></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
       <div class="col-lg-3 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-green">
           <div class="inner">
             <h3>53<sup style="font-size: 20px">%</sup></h3>

             <p>Comments</p>
           </div>
           <div class="icon">
             <i class="ion ion-stats-bars"></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
       <div class="col-lg-3 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-yellow">
           <div class="inner">
             <h3>44</h3>

             <p>Likes</p>
           </div>
           <div class="icon">
             <i class="ion ion-person-add"></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
       <div class="col-lg-3 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-red">
           <div class="inner">
             <h3>65</h3>

             <p>Unique Visitors</p>
           </div>
           <div class="icon">
             <i class="ion ion-pie-graph"></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
     </div>

     <div class="row">

         <!-- Custom Tabs (Pulled to the right) -->
         <div class="nav-tabs-custom">
           <ul class="nav nav-tabs pull-left">
             <li class="active"><a href="#tab_1-1" data-toggle="tab">Workers</a></li>
             <li><a href="#tab_2-2" data-toggle="tab">New Disciples</a></li>
             <li><a href="#tab_3-2" data-toggle="tab">Camp</a></li>
             <li><a href="#tab_4-2" data-toggle="tab">300 Disciples</a></li>
           </ul>

           <div class="tab-content">
           <div class="tab-pane active" id="tab_1-1">

           <div class="box box-primary">
           <div class="box-header">

  </div><!-- tab_1-1 -->
             <!-- /.tab-pane -->
             <div class="tab-pane" id="tab_2-2">

             </div>
             <!-- /.tab-pane -->
             <div class="tab-pane" id="tab_3-2">

             </div>
              <!-- /.tab-pane -->
             <div class="tab-pane" id="tab_4-2">

             </div>
             <!-- /.tab-pane -->
           </div>
           <!-- /.tab-content -->
         </div>
         <!-- nav-tabs-custom -->
       </div>
    </div>
</pre>
<script src="RGraph/libraries/RGraph.common.core.js"></script>
<script src="RGraph/libraries/RGraph.bar.js"></script>
<script>
 $(function () {
   //Initialize Select2 Elements
   $(".select2").select2();

   //Datemask dd/mm/yyyy
   $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
   //Datemask2 mm/dd/yyyy
   $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
   //Money Euro
   $("[data-mask]").inputmask();

   //Date range picker
   $('#reservation').daterangepicker();
   //Date range picker with time picker
   $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
   //Date range as a button
   $('#daterange-btn').daterangepicker(
       {
         ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
         },
         startDate: moment().subtract(29, 'days'),
         endDate: moment()
       },
       function (start, end) {
         $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
       }
   );

   //Date picker
   $('#datepicker').datepicker({
     autoclose: true
   });

   //iCheck for checkbox and radio inputs
   $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
     checkboxClass: 'icheckbox_minimal-blue',
     radioClass: 'iradio_minimal-blue'
   });
   //Red color scheme for iCheck
   $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
     checkboxClass: 'icheckbox_minimal-red',
     radioClass: 'iradio_minimal-red'
   });
   //Flat red color scheme for iCheck
   $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
     checkboxClass: 'icheckbox_flat-green',
     radioClass: 'iradio_flat-green'
   });

   //Colorpicker
   $(".my-colorpicker1").colorpicker();
   //color picker with addon
   $(".my-colorpicker2").colorpicker();

   //Timepicker
   $(".timepicker").timepicker({
     showInputs: false
   });
 });
</script>
