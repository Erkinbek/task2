<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 align="center">
      <?= Html::encode($this->title) ?>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-body">


        <div class="alert alert-danger">
		      <?= nl2br(Html::encode($message)) ?>
        </div>

        <p>
          The above error occurred while the Web server was processing your request.
        </p>
        <p>
          Please contact us if you think this is a server error. Thank you.
        </p>
      </div>
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->