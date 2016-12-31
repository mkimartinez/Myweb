<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\bootstrap\Dropdown;

DashboardAsset::register($this);
$this->registerCss(" small {
    display: inline;
    font-size: 1em;
    text-align: center;
    text-shadow: 0 0 5px #00c6ff;
}
");
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
   <meta charset="<?= Yii::$app->charset ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?= Html::csrfMetaTags() ?>
   <title><?= Html::encode($this->title) ?></title>
   <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">
     <header class="main-header">
   <!-- Logo -->
   <a href="index2.html" class="logo">
     <!-- mini logo for sidebar mini 50x50 pixels -->
     <span class="logo-mini"><b>A</b>LT</span>
     <!-- logo for regular state and mobile devices -->
     <span class="logo-lg"><b>MY</b>web</span>
   </a>
   <!-- Header Navbar: style can be found in header.less -->
   <nav class="navbar navbar-static-top">
     <!-- Sidebar toggle button-->
     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
       <span class="sr-only">Toggle navigation</span>
     </a>

     <div class="navbar-custom-menu">
       <ul class="nav navbar-nav">

         <!-- Messages: style can be found in dropdown.less-->


         <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/img/shexing.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="img/shexing .jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
         <!-- Notifications: style can be found in dropdown.less -->
         <li class="dropdown notifications-menu">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <i class="fa fa-bell-o"></i>
             <span class="label label-warning">10</span>
           </a>
         </li>
         <!-- Tasks: style can be found in dropdown.less -->
         <li class="dropdown tasks-menu">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <i class="fa fa-flag-o"></i>
             <span class="label label-danger">9</span>
           </a>
           <ul class="dropdown-menu">
             <li class="header">You have 9 tasks</li>
           </ul>
         </li>
                   


         <!-- <li class="dropdown messages-menu">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-envelope-o"></i><b class="caret"></b></a>
          
          <?php
          echo Dropdown::widget([

          'items' => [
              ['label' => 'Gmail Inbox', 'url' => 'www.gmail.com'],
              ['label' => 'DropdownB', 'url' => '#'],
              ['label' => 'DropdownA', 'url' => '/'],
              ['label' => 'DropdownB', 'url' => '#'],
              ['label' => 'DropdownA', 'url' => '/'],
              ['label' => 'DropdownB', 'url' => '#'],
              ['label' => 'DropdownA', 'url' => '/'],
              ['label' =>Yii::$app->user->identity->username, 'url' => '#'],

          ],
          ]);
          ?>
         </li>  -->

    <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/shexing.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Martinez</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/shexing.jpg" class="img-circle" alt="User Image">

                <p>
                  Martinez Mki- Web Developer
                  <small>Member since Nov. 2015</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <?= Html::beginForm(['/site/logout'], 'post')
           . Html::submitButton(
               'Logout',
               ['class' => 'btn bg-orange btn-flat']
           )
           . Html::endForm() ?>
                </div>
              </li>
            </ul>
          </li>
 
       </ul>
     </div>
   </nav>
 </header>
 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
       <div class="pull-left image">
         <img src="img/shexing.jpg" class="img-circle" alt="User Image">
       </div>
       <div class="pull-left info">
         <p><?php
         if (!Yii::$app->user->isGuest) {
           echo Yii::$app->user->identity->username;
        }?>
         </p>
         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       </div>
     </div>
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">   
 <li><?=Html::a('Dashbord',['/site/index'],['class'=>'fa fa-dashboard'])?> </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-bar-chart"></i>
           <span>Personal Info</span>
           <span class="pull-right-container">
             <span class="label label-primary pull-right">4</span>
           </span>
         </a>
         <ul class="treeview-menu">
            <li><?=Html::a('Expenditures',['/expenditures/index'],['class'=>'fa fa-circle-o'])?></li>
      <li><?=Html::a('Incomes',['income/index'],['class'=>'fa fa-circle-o'])?></li>
             <li><?=Html::a('Debts',['/debts/index'],['class'=>'fa fa-circle-o'])?></li>
         </ul>
       </li>

       <li>
         <a href="pages/widgets.html">
           <i class="fa fa-plus"></i> <span>Plans</span>
           <span class="pull-right-container">
             <small class="label pull-right bg-green">new</small>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><?=Html::a('General',['/album/index'],['class'=>'fa fa-circle-o'])?></li>
           <li><?=Html::a('Daily plans',['/album/index'],['class'=>'fa fa-circle-o'])?></li>
           <li><?=Html::a('Longterm Plans',['/album/index'],['class'=>'fa fa-circle-o'])?></li>
          <li><?=Html::a('Appointments',['/album/index'],['class'=>'fa fa-circle-o'])?></li>
         </ul>
       </li>

       <li class="treeview">
         <a href="#">
           <i class="fa fa-cogs"></i>
           <span>Settings</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
          <li><?=Html::a('Language',['/site/todo'],['class'=>'fa fa-circle-o'])?></li>
           <li><?=Html::a('Modules',['/album/index'],['class'=>'fa fa-circle-o'])?></li>
          <li><?=Html::a('Components',['/album/index'],['class'=>'fa fa-circle-o'])?></li>
         </ul>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa  fa-users"></i>
           <span>Confidentials Docs</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><?=Html::a('Bank information',['bank/index'],['class'=>'fa fa-circle-o'])?></li>
           <li><?=Html::a('Project profits',['/album/index'],['class'=>'fa fa-circle-o'])?></li>
           <li><?=Html::a('Project Evaluations',['/album/index'],['class'=>'fa fa-circle-o'])?></li>
           <li><?=Html::a('Certs and awards',['/certs/index'],['class'=>'fa fa-circle-o'])?></li>
            <li><?=Html::a('My CV',['/album/index'],['class'=>'fa fa-circle-o'])?></li>
         </ul>
       </li>

<li class="treeview">
         <a href="#">
           <i class="fa  fa-users"></i>
           <span>My Projects</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><?=Html::a('Chicken project',['chicken/index'],['class'=>'fa fa-circle-o'])?></li>
           <li><?=Html::a('House Project',['/house/index'],['class'=>'fa fa-circle-o'])?></li>
           <li><?=Html::a('Electronic shop project',['/electronis/index'],['class'=>'fa fa-circle-o'])?></li>
         </ul>
       </li>
       <li><?=Html::a('My Calender',['calendar/index'],['class'=>'fa fa-calendar'])?></li>
       <li><?=Html::a('My Gallery',['site/gallery'],['class'=>'fa fa-calendar'])?></li>
       <li><?=Html::a('My Blog',['/blog/index'],['class'=>'fa fa-newspaper-o'])?></li>

     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>

   <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
    <div class="row">

      
     <h1 class="lead">
       Dashboard
       <small><?php echo date("Y/ m /j ");?></small>

       <?php
      // date_default_timezone_set(" ");
     echo date("h:i:sa");
     ?>
     </h1>
    </div>

<!--          <p>
    <script>document.write("<em>" + new Date() + "</em>"); </script>
</p> --> 
<script>
(function () {

  var clockElement = document.getElementById( "clock" );

  function updateClock ( clock ) {
    clock.innerHTML = new Date().toLocaleTimeString();
  }

  setInterval(function () {
      updateClock( clockElement );
  }, 1000);

}());
?>
</script>
        <?= Breadcrumbs::widget([
           'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
       ]) ?>
       <?= Alert::widget() ?>
   </section>
   <section class="content">
     <?= $content ?>
   </section>

   </div>
</div>

<footer class="footer">
   <div class="container">
       <p class="pull-left">&copy; Mkiwebs<?= date('Y') ?></p>
   </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
