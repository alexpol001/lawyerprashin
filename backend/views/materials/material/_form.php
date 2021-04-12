<?php

use dosamigos\tinymce\TinyMce;
use yii\bootstrap\Tabs;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Material */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= \backend\widgets\FormWidget::widget(['copyable' => true]) ?>

    <?php
    echo Tabs::widget([
        'id' => 'tabs',
        'items' => [
            [
                'label' => 'Материал',
                'content' => $this->render('primary_form', [
                    'form' => $form,
                    'model' => $model,
                ]),
                'active' => true
            ],
            [
                'label' => 'Связи',
                'content' => $this->render('link', [
                    'form' => $form,
                    'model' => $model,
                ]),
            ],
            [
                'label' => 'Атрибуты',
                'content' => $this->render('attribute', [
                    'form' => $form,
                    'model' => $model,
                ]),
                'options' => ['class' => 'attribute_tab']
            ]
        ]
    ]);
    ?>

    <?php ActiveForm::end(); ?>

</div>
