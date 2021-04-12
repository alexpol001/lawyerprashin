<?php

use backend\widgets\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel \common\models\search\materials\attribute\Attribute */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Атрибуты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attribute-index">
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
            'attribute' => 'group_id',
            'filter' => \common\models\materials\attribute\Attribute::getSelectParents(),
            'filterType' => GridView::FILTER_SELECT2,
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Поиск по группе'],
            'format' => 'raw',
            'vAlign' => 'middle',
            'value' => function ($data) {
                return \common\models\materials\attribute\AttributeGroup::getTitle($data->group_id);
            },
        ],
        [
            'attribute' => 'type',
            'filter' => \common\models\materials\attribute\Attribute::getTypes(),
            'filterType' => GridView::FILTER_SELECT2,
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Поиск по типу'],
            'format' => 'raw',
            'vAlign' => 'middle',
            'value' => function ($data) {
                return \common\models\materials\attribute\Attribute::getTypeTitle($data->type);
            },
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
        'title' => 'Список атрибутов',
    ]); ?>
</div>
