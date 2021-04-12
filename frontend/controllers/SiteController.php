<?php

namespace frontend\controllers;

use common\models\materials\Category;
use common\models\materials\Material;
use common\models\setting\Setting;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\OnlineOrderForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $fullscreen = false;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'common\components\NumericCaptcha',
                'width' => '80',
                'height' => '34',
                'testLimit' => '1',
                'padding' => '5',
                'foreColor' => 0x000000,
                'backColor' => 0xfcf320,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @param int $send
     * @return mixed
     */
    public function actionIndex($send = 0)
    {
        $this->fullContent();
        $orderModel = new OnlineOrderForm();
        if ($orderModel->load(Yii::$app->request->post()) && $orderModel->sendEmail(Setting::take()->mail->username)) {
            $this->redirect(['/', 'send' => 1]);
        }
        if ($send) {
            Yii::$app->session->setFlash('onlineOrderFormSubmitted');
        }
        return $this->render('index', [
            'model' => Category::findOne(33),
            'orderModel' => $orderModel,
        ]);
    }

    public function actionError() {
        $this->redirect(['/']);
    }

    protected function fullContent()
    {
        $this->fullscreen = true;
    }
}
