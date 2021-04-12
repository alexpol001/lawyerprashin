<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \common\models\materials\attribute\Attribute */

$this->title = 'Атрибуты';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="attribute-update">

    <h2><?= Html::encode(end($this->params['breadcrumbs'])) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
