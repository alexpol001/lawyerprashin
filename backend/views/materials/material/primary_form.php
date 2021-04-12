<?php
    /* @var $model \common\models\materials\Material */
    /* @var $form yii\widgets\ActiveForm */

use dosamigos\tinymce\TinyMce; ?>

<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'text')->widget(TinyMce::className()) ?>

<?//= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

