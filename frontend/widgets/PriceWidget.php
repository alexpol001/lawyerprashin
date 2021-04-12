<?php

namespace frontend\widgets;

use common\models\materials\Material;
use common\models\setting\Setting;
use frontend\models\OnlineOrderForm;
use Yii;
use yii\base\Widget;

class PriceWidget extends Widget
{

    public function run()
    {
        $model = Material::findOne(60);
        return $this->render('price/index', [
            'model' => $model,
        ]);
    }

}