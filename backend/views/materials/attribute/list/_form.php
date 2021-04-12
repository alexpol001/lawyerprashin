<?php

use dosamigos\tinymce\TinyMce;
use kartik\widgets\Select2;
use yii\bootstrap\Tabs;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\models\materials\attribute\Attribute */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attribute-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= \backend\widgets\FormWidget::widget(['copyable' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'group_id')->widget(Select2::classname(), [
        'data' => \common\models\materials\attribute\Attribute::getSelectParents(),
        'options' => ['placeholder' => 'Выберите группу...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'type')->widget(Select2::classname(), [
        'data' => \common\models\materials\attribute\Attribute::getTypes(),
        'options' => ['placeholder' => 'Выберите тип...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'sort')->textInput(['placeholder' => 0]) ?>

    <?php ActiveForm::end(); ?>

</div>
