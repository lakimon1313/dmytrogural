<?php

namespace app\models;

use app\components\MyBehavior;
use yii\base\Model;

class Test extends Model {

    public function behaviors()
    {
        return [
            'MyBehavior' => [
                'class' => MyBehavior::className(),
            ]
        ];
    }

}
