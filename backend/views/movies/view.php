<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Movies */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Movies', 'url' => ['index']];
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
	      <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
	      <?= Html::a('Delete', ['delete', 'id' => $model->id], [
		      'class' => 'btn btn-danger',
		      'data' => [
			      'confirm' => 'Are you sure you want to delete this item?',
			      'method' => 'post',
		      ],
	      ]) ?>
	      <?= DetailView::widget([
		      'model' => $model,
		      'attributes' => [
			      'id',
			      'title',
			      'country',
			      'actors:ntext',
			      [
				      'attribute'=>'poster',
				      'value'=> Yii::getAlias('@frontend') . '/web/uploads/posters/' . $model->poster,
				      'format' => ['image',['width'=>'100','height'=>'200']],
			      ],
			      'description:ntext',
			      [
				      'attribute'=>'added',
				      'value'=> date("d.m.Y", $model->added),
			      ],
			      'views',
		      ],
	      ]) ?>
      </div>
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>