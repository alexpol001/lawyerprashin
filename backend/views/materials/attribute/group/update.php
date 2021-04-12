<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \common\models\materials\attribute\AttributeGroup */

$this->title = 'Группы атрибутов';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="attribute-group-update">

    <h2><?= Html::encode(end($this->params['breadcrumbs'])) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
