<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => "{items}",
        'columns' => [
            [
                'attribute' => 'username',
                'value' => function ($data) {
                    return Html::a(Html::encode($data->username), Url::to(['update', 'id' => $data->id]));
                },
                'format' => 'html'
            ],
        ],
    ]); ?>
</div>
