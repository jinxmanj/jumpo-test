<?php

namespace app\modules\jumpo\controllers;

use Yii;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;

class BaseWithoutSignedInController extends Controller
{

    const API_STATUS_SUCCESS = 200;
    const API_STATUS_NETWORK_REQUEST_ERROR = 600;
    const API_STATUS_DATABASE_ERROR = 700;
    const API_STATUS_LOGIC_ERROR = 800;
    const API_STATUS_SYSTEM_ERROR = 900;
	/**
	 * @param $action
	 *
	 * @return bool
     * @throws BadRequestHttpException
	 */
	public function beforeAction($action): bool
    {
//		Yii::$app->response->format = Response::FORMAT_JSON;
		return parent::beforeAction($action);
	}
}
