<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $article->title;
?>
<div class="site-error">
  <h1><?= Html::encode($this->title) ?></h1>
  <h5>
    Added: <?= date("d.m.Y", $article->added) ?>
    Vieved: <?= $article->views ?>
  </h5>
  <p><?= Html::img('@web/uploads/news/' . $article->img) ?></p>
  <p style="text-align: justify"><?= $article->body ?></p>
</div>