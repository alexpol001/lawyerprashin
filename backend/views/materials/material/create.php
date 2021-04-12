<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Material */

$this->title = 'Менеджер материалов';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Создать метериал';
?>
<div class="material-create">

    <h2><?= Html::encode('Создать метериал') ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
