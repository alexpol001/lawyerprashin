<?php

namespace frontend\widgets;

use common\models\setting\Setting;
use frontend\models\OnlineOrderForm;
use Yii;
use yii\base\Widget;

class OnlineOrderWidget extends Widget
{

    public function run()
    {
        $model = new OnlineOrderForm();
        $post = Yii::$app->request->post();
        if ($model->load($post) && $model->sendEmail(Setting::take()->mail->username)) {
            Yii::$app->session->setFlash('onlineOrderFormSubmitted');
        }
        return $this->render('onlineOrder/index', [
            'model' => $model,
        ]);
    }

}