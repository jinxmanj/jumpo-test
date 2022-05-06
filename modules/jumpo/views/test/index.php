<?php

use yii\grid\CheckboxColumn;
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Jumpo Code Challenge';
try {
    echo GridView::widget([
        'dataProvider' => $dataProvider,//数据提供器
        'filterModel' => $searchModel,//搜索功能
        'columns' => [//列数据
            ['class' => SerialColumn::class],//显示行号
            ['class' => CheckboxColumn::class],
            'id',
            'code',
            'name',
            [
                'attribute' => 't_status',
                'label' => 'T_STATUS',
                'value' => static function ($model) {
                    return $model->getTStatus();
                },
                'filter' => Html::activeDropDownList($searchModel, 't_status', $t_status_dropdown, ['class' => 'form-control', 'prompt' => 'Select T_STATUS']),
            ],
        ]
    ]);
} catch (Exception $e) {
}

