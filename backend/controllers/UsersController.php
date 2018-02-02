<?php
/**
 * Created by PhpStorm.
 * User: Erkin Pardayev
 * Date: 02.02.2018
 * Time: 11:24
 */

namespace backend\controllers;

use common\models\User;
use yii\filters\AccessControl;
use yii\web\Controller;

class UsersController extends Controller
{
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'actions' => ['index'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
		];
	}

	public function actionIndex()
	{
		$users = User::find()->all();
		return $this->render('index', [
			'users' => $users,
		]);
	}
}