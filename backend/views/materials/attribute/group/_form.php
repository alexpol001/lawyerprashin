<?php

use dosamigos\tinymce\TinyMce;
use yii\bootstrap\Tabs;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\models\materials\attribute\AttributeGroup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attribute-group-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= \backend\widgets\FormWidget::widget(['copyable' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput(['placeholder' => 0]) ?>

    <?php ActiveForm::end(); ?>

</div>
