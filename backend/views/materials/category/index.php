<?php

use yii\helpers\Html;
use backend\widgets\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel \common\models\search\materials\Category */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Менеджер категорий';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">
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
            'attribute' => 'parent',
            'filter' => \common\models\materials\Material::getSelectParents(),
            'filterType' => GridView::FILTER_SELECT2,
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions' => ['placeholder' => 'Поиск по категориям'],
            'format' => 'raw',
            'vAlign' => 'middle',
            'width' => '33%',
            'value' => function ($data) {
                return \common\models\materials\Category::getTitle($data->parent);
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
        ],
    ]
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $columns,
    ]); ?>
</div>
