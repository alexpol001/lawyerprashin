<?php
    /* @var $model \common\models\setting\Setting */
    /* @var $form yii\widgets\ActiveForm */
?>

<?= $form->field($model, 'title')->textInput(['placeholder' => true, 'value' => $model->title]) ?>

<?= $form->field($model, 'description')->textarea(['placeholder' => true, 'value' => $model->description]) ?>

<?//= $form->field($model, 'keywords')->textarea(['placeholder' => true, 'value' => $model->keywords]) ?>
