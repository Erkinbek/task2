<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Movies controller
    </h1>
		<?php
		echo Breadcrumbs::widget([
			'itemTemplate' => "<li><i>{link}</i></li>",
			'links' => $this->params['breadcrumbs'],
		]);
		?>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
	      <?php Pjax::begin(); ?>
	      <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
		      <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
	      <?= GridView::widget([
		      'dataProvider' => $dataProvider,
		      'filterModel' => $searchModel,
		      'columns' => [
			      ['class' => 'yii\grid\SerialColumn'],

//			      'id',
			      'title',
			      'img',
//			      'body:ntext',
			      'added',
			      //'views',

			      ['class' => 'yii\grid\ActionColumn'],
		      ],
	      ]); ?>
	      <?php Pjax::end(); ?>
      </div>
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>