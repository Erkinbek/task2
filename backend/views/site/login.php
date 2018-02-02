<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

	  <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
      <div class="form-group has-feedback">
	      <?=
          $form->field($model, 'username')
            ->textInput(['autofocus' => true, 'placeholder' => 'Username'])
            ->label(false)
        ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
	      <?=
          $form->field($model, 'password')
            ->passwordInput(['placeholder' => 'Password'])
            ->label(false)
        ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
    <div class="form-group has-feedback">
	    <?= $form->field($model, 'rememberMe')->checkbox() ?>
    </div>
	  <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
	  <?php ActiveForm::end(); ?>
  </div>
  <!-- /.login-box-body -->
</div>
