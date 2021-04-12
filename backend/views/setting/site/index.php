<?php

use yii\bootstrap\Tabs;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\models\setting\Setting */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Управление сайтом';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-update">

    <div class="site-form">

        <?php $form = ActiveForm::begin(); ?>

        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php
        echo Tabs::widget([
            'id' => 'tabs',
            'items' => [
                [
                    'label' => 'Основное',
                    'content' => $this->render('main', [
                        'form' => $form,
                        'model' => $model,
                    ]),
                    'active' => true
                ],
                [
                    'label' => 'Почта',
                    'content' => $this->render('mail', [
                        'form' => $form,
                        'model' => $model->mail,
                    ]),
                ]
            ]
        ]);
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>
