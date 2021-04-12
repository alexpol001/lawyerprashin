<?php

namespace backend\controllers\setting;

use backend\controllers\AuthController;
use common\models\setting\Setting;
use Yii;

/**
 * SiteController
 */
class SiteController extends AuthController
{

    public function actionIndex()
    {
        $model = Setting::take();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Изменения успешно сохранены');
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }
}
