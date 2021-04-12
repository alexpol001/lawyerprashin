<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Material */

$this->title = 'Менеджер материалов';
$this->params['breadcrumbs'][] = ['label' => 'Менеджер материалов', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Изменить материал';
?>
<div class="material-update">

    <h2><?= Html::encode('Изменить материал') ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
