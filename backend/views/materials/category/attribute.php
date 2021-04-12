<?php

use backend\widgets\AttributeWidget;
/* @var $model \common\models\materials\Category */

/* @var $form yii\widgets\ActiveForm */
?>

<?= AttributeWidget::widget([
    'attribute_list' => $model->getAttributesByGroup(),
]); ?>