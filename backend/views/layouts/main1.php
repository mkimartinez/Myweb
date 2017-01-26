<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
 
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
           <a href="www.gmail.com" class="dropdown-toggle" data-toggle="dropdown">
             <i class="fa fa-envelope-o"></i>
             <span class="label label-success">4</span>
           </a>
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
             <li>
               <!-- inner menu: contains the actual data -->

             </li>
           </ul>
         </li>
         <!-- User Account: style can be found in dropdown.less -->
       <li class="">

           <?= Html::beginForm(['/site/logout'], 'post')
           . Html::submitButton(
               'Logout',
               ['class' => 'btn bg-orange btn-flat']
           )
           . Html::endForm() ?>
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
       <li>
         <a href="pages/widgets.html">
           <i class="fa fa-dashboard"></i> <span>Dashboard</span>
         </a>
       </li>
       <li class="treeview">
         <a href="#">
           <i class="fa fa-bar-chart"></i>
           <span>Personal Info</span>
           <span class="pull-right-container">
             <span class="label label-primary pull-right">4</span>
           </span>
         </a>
         <ul class="treeview-menu">
            <li><?=Html::a('projects',['/projects/index'],['class'=>'fa fa-circle-o'])?></li>
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
           <li><?=Html::a('Certs and awards',['/album/index'],['class'=>'fa fa-circle-o'])?></li>
            <li><?=Html::a('My CV',['/album/index'],['class'=>'fa fa-circle-o'])?></li>
         </ul>
       </li>

       <li><?=Html::a('My Calender',['calendar/index'],['class'=>'  fa-circle'])?></li>
       <li><?=Html::a('My Blog',['/blog/index'],['class'=>'  fa-circle'])?></li>

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
