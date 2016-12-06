<?php

namespace app\controllers;

use app\models\Test;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class TestController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $model = new Test();
        if (Yii::$app->request->isAjax) {
            $request = Yii::$app->request;

            $id = $request->post('operation-number');
            if ($id == 1) {
                $result = $model->cutString();
            } elseif ($id == 2) {
                $result = $model->upperString();
            } else {
                $result = $model->boldString();
            }

            echo $result;
        } else {
            return $this->render('index', [
                'route' => \Yii::$app->getUrlManager()->createUrl('test/index'),
            ]);
        }
    }

    public function actionPosts() {
        $model = new Test();
        $posts = $model->getPosts();

        return $this->render('posts', [
            'posts' => $posts,
        ]);
    }

}
