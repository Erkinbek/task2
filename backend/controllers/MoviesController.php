<?php

namespace backend\controllers;

use Yii;
use backend\models\Movies;
use backend\models\MoviesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
* MoviesController implements the CRUD actions for Movies model.
*/
class MoviesController extends Controller
{
  /**
   * Lists all Movies models.
   * @return mixed
   */
  public function actionIndex()
  {
    $searchModel = new MoviesSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    return $this->render('index', [
      'searchModel' => $searchModel,
      'dataProvider' => $dataProvider,
    ]);
  }

  /**
   * Displays a single Movies model.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionView($id)
  {
    return $this->render('view', [
      'model' => $this->findModel($id),
    ]);
  }

  /**
   * Creates a new Movies model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   * @return mixed
   */
  public function actionCreate()
  {
    $model = new Movies();

    if ($model->load(Yii::$app->request->post())) {
    	$model->poster = UploadedFile::getInstance($model, 'poster');
    	$model->poster = $model->upload();
    	$model->added = time();
	    $model->save();
      return $this->redirect(['view', 'id' => $model->id]);
    }

    return $this->render('create', [
      'model' => $model,
    ]);
  }

  /**
   * Updates an existing Movies model.
   * If update is successful, the browser will be redirected to the 'view' page.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionUpdate($id)
  {
    $model = $this->findModel($id);

    if ($model->load(Yii::$app->request->post())) {
	    $model->poster = UploadedFile::getInstance($model, 'poster');
	    $model->poster = $model->upload();
	    $model->save();
      return $this->redirect(['view', 'id' => $model->id]);
    }

    return $this->render('update', [
      'model' => $model,
    ]);
  }

  /**
   * Deletes an existing Movies model.
   * If deletion is successful, the browser will be redirected to the 'index' page.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionDelete($id)
  {
    $model = $this->findModel($id);
    if ($model->poster != '') {
    	unlink(Yii::getAlias('@frontend') . '/web/uploads/posters/' . $model->poster);
    }
    $model->delete();

    return $this->redirect(['index']);
  }

  /**
   * Finds the Movies model based on its primary key value.
   * If the model is not found, a 404 HTTP exception will be thrown.
   * @param integer $id
   * @return Movies the loaded model
   * @throws NotFoundHttpException if the model cannot be found
   */
  protected function findModel($id)
  {
    if (($model = Movies::findOne($id)) !== null) {
      return $model;
    }

    throw new NotFoundHttpException('The requested page does not exist.');
  }
}
