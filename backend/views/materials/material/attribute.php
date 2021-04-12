<?php

use backend\widgets\AttributeWidget;
/* @var $model \common\models\materials\Material */

/* @var $form yii\widgets\ActiveForm */
?>

<?= AttributeWidget::widget([
    'attribute_list' => $model->getAttributesByGroup(),
    'simple' => 1,
]); ?>