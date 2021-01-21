<?php

namespace app\modules\api\v1;

/**
 * api-v1 module definition class
 */
class Api extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\api\v1\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
		\Yii::$app->user->enableSession = false;
    }
}
