<?php

namespace frontend\controllers;

use yii\rest\ActiveController;

class BaseApiController extends ActiveController
{
    /**
     * @var array
     */
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function checkAccess($action, $model=null, $params=[]) {
        return true;
    }

    /**
     * @return array
     */
    public function behaviors() {
        return [
            'contentNegotiator' => [
                'class' => \yii\filters\ContentNegotiator::class,
                'formatParam' => '_format',
                'formats' => [
                    'application/json' => \yii\web\Response::FORMAT_JSON,
                    'xml' => \yii\web\Response::FORMAT_XML
                ],
            ],
        ];
    }
}
