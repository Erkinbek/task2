<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MoviesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movies';
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
		  'itemTemplate' => "<li><i>{link}</i></li>\n",
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
			<?php Pjax::begin(); ?>
      <div class="box-body">
	      <?= Html::a('Create Movies', ['create'], ['class' => 'btn btn-success']) ?>
	      <?= GridView::widget([
					'dataProvider' => $dataProvider,
					'filterModel' => $searchModel,
					'columns' => [
						['class' => 'yii\grid\SerialColumn'],

						'title',
						'country',
//						'actors:ntext',
						//'description:ntext',
						[
						  'attribute' => 'added',
              'value' => function($model){
	              return date("d.m.Y", $model->added);
              }
            ],
						'views',

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
