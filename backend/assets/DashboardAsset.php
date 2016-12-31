<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{


   public $sourcePath = '@vendor/almasaeed2010';
    public $css = [
    'adminlte/dist/css/AdminLTE.min.css',
   //'adminlte/bootstrap/css/bootstrap.min.css',
    '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
    '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
    'adminlte/dist/css/skins/_all-skins.min.css',
/*    'adminlte/plugins/timepicker/bootstrap-timepicker.min.css',
    'adminlte/plugins/iCheck/flat/blue.css',
    'adminlte/plugins/daterangepicker/daterangepicker.css',
      'adminlte/plugins/datepicker/datepicker3.css',
      'adminlte/plugins/select2/select2.min.css',
      '//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css',
      'adminlte/plugins/morris/morris.css',*/
      

    ];
    public $js = [
    //Remove this as its same as bootstrap framework
     //'adminlte/bootstrap/js/bootstrap.min.js',
      'adminlte/plugins/iCheck/icheck.min.js',
      'adminlte/plugins/slimScroll/jquery.slimscroll.min.js',
      'adminlte/dist/js/app.min.js',
    //'//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js' ,
    //'//code.highcharts.com/highcharts.js',
 


    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
