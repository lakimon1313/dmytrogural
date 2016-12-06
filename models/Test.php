<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\components\MyBehavior;

class Test extends ActiveRecord {

    public function behaviors()
    {
        $field = Test::find()->asArray()->one();

        return [
            'MyBehavior' => [
                'class' => MyBehavior::className(),
                'fieldData' => $field['body'],
            ]
        ];
    }

    public static function tableName()
    {
        return '{{post}}';
    }

    public function getPosts()
    {
        $posts = Test::find()->asArray()->all();

        return $posts;
    }
}
