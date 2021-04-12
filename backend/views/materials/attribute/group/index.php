<?php

use backend\widgets\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel \common\models\search\materials\attribute\AttributeGroup */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Группы атрибутов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attribute-group-index">
    <?
    $columns = [
        ['class' => 'kartik\grid\CheckboxColumn'],
        [
            'attribute' => 'title',
            'value' => function ($data) {
                return Html::a(Html::encode($data->title), Url::to(['update', 'id' => $data->id]));
            },
            'format' => 'html'
        ],
        [
            'class' => 'kartik\grid\EditableColumn',
            'attribute' => 'sort',
            'editableOptions' => [
                'header' => 'Порядок сортировки',
                'inputType' => \kartik\editable\Editable::INPUT_SPIN,
                'options' => [
                    'pluginOptions' => ['min' => -1000000, 'max' => 1000000],
                ],
                'formOptions' => ['action' => ['edit']],
            ],
            'format' => ['decimal', 0],
        ],
    ]
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $columns,
        'title' => 'Группы атрибутов',
    ]); ?>
</div>
