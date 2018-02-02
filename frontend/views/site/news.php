<?php
/**
 * Created by PhpStorm.
 * User: Erkin Pardayev
 * Date: 01.02.2018
 * Time: 21:32
 */

use yii\helpers\Html;

?>

<div class="body-content">

	<div class="row">
		<?php foreach ($news as $item): ?>
		<div class="col-lg-4">
			<h2><?= $item->title ?></h2>

			<p><?= Html::img('@web/uploads/news/' . $item->img) ?></p>

			<p><?= substr($item->body, 0, 150) ?></p>
			<p><?= date("d.m.Y", $item->added) ?> Views: <?= $item->views ? $item->views : '0'?></p>
			<p><?= Html::a('Подробно', ['read', 'id' => $item->id], ['class' => 'btn btn-primary']) ?></p>
		</div>
		<?php endforeach; ?>
	</div>

</div>