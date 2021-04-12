<?php

namespace frontend\widgets;

use common\models\materials\Material;
use common\models\setting\Setting;
use frontend\models\OnlineOrderForm;
use Yii;
use yii\base\Widget;

class AboutWidget extends Widget
{

    public function run()
    {
        $model = Material::findOne(61);
        return $this->render('about/index', [
            'model' => $model,
        ]);
    }

}