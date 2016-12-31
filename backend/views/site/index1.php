<?php
// use namespace sizeg\jqplot;
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
 
 <?php 

$current_time = urlEncode(date("Y-m-d")."T".date("H:i:s")."Z"); 

?> 
<?php 

/** 
 * Just add this in your page where you 
 * want the date/time to appear 
 * 
 * For more configuration options look 
 * in the PHP manual at http://uk2.php.net/date 
 */ 

// Displays in the format Saturday, November 22, 2003 11.38 
echo date("l, F d, Y h:i" ,time()); 

?> 