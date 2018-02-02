<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

  <div class="body-content">

	  <?php $i = 0; foreach ($movies as $movie): $i++; ?>
      <div class="<?= ($i%4==0) ? 'row' : '' ?>">
        <div class="col-md-3">
          <h5><?= $movie->title ?></h5>
          <p><?= Html::img('@web/uploads/posters/' . $movie->poster, ['height' => '300px']) ?></p>
          <p><?= Html::a('Подробно', ['site/movie', 'id' => $movie->id], ['class' => 'btn btn-default']) ?></p>
        </div>
      </div>
	  <?php endforeach; ?>

  </div>
</div>
