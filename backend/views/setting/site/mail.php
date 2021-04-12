<?php
/* @var $model \common\models\setting\Mail */
/* @var $form yii\widgets\ActiveForm */

use kartik\widgets\Select2; ?>

<?= $form->field($model, 'protocol')->widget(Select2::classname(), [
    'data' => $model->getProtocols(),
    'options' => ['class' => 'attribute_change', 'placeholder' => true],
]) ?>

<?= $form->field($model, 'host')->textInput(['placeholder' => true, 'value' => $model->host]) ?>

<?= $form->field($model, 'username')->textInput(['placeholder' => true, 'value' => $model->username]) ?>

<?= $form->field($model, 'password')->textInput(['placeholder' => true, 'value' => $model->password]) ?>

<?= $form->field($model, 'port')->textInput(['placeholder' => true, 'value' => $model->port]) ?>

<?= $form->field($model, 'encryption')->textInput(['placeholder' => true, 'value' => $model->encryption]) ?>
