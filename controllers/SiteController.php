<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\EmployerSearch;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    public function actionIndex()
    {
        $model = new EmployerSearch;
        $params = Yii::$app->request->get();
        $provider = $model->search($params?$params:array());
        return $this->render('index', [
          'provider' => $provider,
          'model' => $model,
        ]);
    }
    

}
