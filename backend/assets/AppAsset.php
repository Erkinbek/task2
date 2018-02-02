<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
* Main backend application asset bundle.
*/
class AppAsset extends AssetBundle
{
  public $basePath = '@webroot';
  public $baseUrl = '@web';
  public $css = [
  	'dist/bootstrap/dist/css/bootstrap.min.css',
	  'dist/font-awesome/css/font-awesome.min.css',
	  'dist/Ionicons/css/ionicons.min.css',
	  'dist/css/AdminLTE.min.css',
	  'dist/iCheck/square/blue.css',
	  'dist/css/skins/_all-skins.min.css',
	  'css/site.css',
	  'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
  ];
  public $js = [
  	'dist/jquery/dist/jquery.min.js',
	  'dist/bootstrap/dist/js/bootstrap.min.js',
	  'dist/iCheck/icheck.min.js',
	  'dist/js/adminlte.min.js',
  ];
  public $depends = [];
}
