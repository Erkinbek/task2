<?php
/**
 * Created by PhpStorm.
 * User: Erkin Pardayev
 * Date: 01.02.2018
 * Time: 17:03
 */

use yii\helpers\Html;

$this->title = '';
?>

<div class="site-index">

	<div class="body-content">
		<table class="table table-responsive">
			<tr>
				<td>Title</td>
				<td><h2><?= $movie->title ?></h2></td>
				<td rowspan="6"><?= Html::img('@web/uploads/posters/' . $movie->poster) ?></td>
			</tr>
			<tr>
				<td>Country</td>
				<td><?= $movie->country ?></td>
			</tr>
			<tr>
				<td>Actors</td>
				<td><?= $movie->actors ?></td>
			</tr>
			<tr>
				<td>Added</td>
				<td><?= date("d.m.Y", $movie->added) ?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><?= $movie->description ?></td>
			</tr>
			<tr>
				<td>Views</td>
				<td><?= $movie->views ?></td>
			</tr>
		</table>
	</div>
</div>


