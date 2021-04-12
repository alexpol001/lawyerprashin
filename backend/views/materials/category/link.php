<?php
/* @var $model \common\models\materials\Category */
/* @var $copy_model \common\models\materials\Category */

/* @var $form yii\widgets\ActiveForm */

use kartik\widgets\Select2; ?>

<?= $form->field($model, 'parent')->widget(Select2::classname(), [
    'data' => $model->getSelectParent(),
    'options' => ['class' => 'attribute_change', 'placeholder' => 'Выберите группу...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]) ?>
