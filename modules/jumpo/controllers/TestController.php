<?php

namespace app\modules\jumpo\controllers;

use app\modules\jumpo\models\Supplier;
use Yii;

class TestController extends BaseWithoutSignedInController
{
    public function actionIndex()
    {
        $searchModel = new Supplier();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            't_status_dropdown' => [
                'ok' => 'ok', 'hold' => 'hold'
            ]
        ]);
    }


}

