<?php

namespace app\modules\api\v1\controllers;

use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\filters\auth\HttpBearerAuth;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use app\models\News;

class NewsController extends ActiveController
{
    public $modelClass = 'app\models\News';
    
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = ['class' => HttpBearerAuth::className(),];
        return $behaviors;
    }
    
    public function verbs()
    {
        return [
            'list' => ['GET', 'HEAD'],
			'index' => ['GET', 'HEAD'],
            'view' => ['GET'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
        ];
    }
    
    public function actions()
    {
        return parent::actions();;
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionList()
    {
        return new ActiveDataProvider([
            'query' => News::find(),
        ]);
    }
}
