<?php
namespace backend\controllers;

use backend\models\Movies;
use backend\models\News;
use common\models\User;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
* Site controller
*/
class SiteController extends Controller
{
  /**
   * @inheritdoc
   */
  public function behaviors()
  {
    return [
      'access' => [
        'class' => AccessControl::className(),
        'rules' => [
          [
            'actions' => ['login', 'error'],
            'allow' => true,
          ],
          [
            'actions' => ['logout', 'index'],
            'allow' => true,
            'roles' => ['@'],
          ],
        ],
      ],
      'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
          'logout' => ['post'],
        ],
      ],
    ];
  }

  /**
   * @inheritdoc
   */
  public function actions()
  {
    return [
      'error' => [
        'class' => 'yii\web\ErrorAction',
      ],
    ];
  }

  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionIndex()
  {
  	$articles_count = News::find()->count('id');
  	$movies_count = Movies::find()->count('id');
  	$users_count = User::find()->count('id');
    return $this->render('index', [
    	'articles' => $articles_count,
	    'movies' => $movies_count,
	    'users' => $users_count,
    ]);
  }

  /**
   * Login action.
   *
   * @return string
   */
  public function actionLogin()
  {
	  if (!Yii::$app->user->isGuest) {
		  return $this->goHome();
	  }
	  $this->layout = 'login';

	  $model = new LoginForm();
    if ($model->load(Yii::$app->request->post()) && $model->login()) {
      return $this->goBack();
    } else {
      return $this->render('login', [
        'model' => $model,
      ]);
    }
  }

  /**
   * Logout action.
   *
   * @return string
   */
  public function actionLogout()
  {
    Yii::$app->user->logout();

    return $this->goHome();
  }
}
