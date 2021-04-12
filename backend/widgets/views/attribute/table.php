<?php

use kartik\widgets\Select2;
use yii\bootstrap\Tabs;
use yii\helpers\Html;

/* @var $this yii\web\View */

/* @var $attribute_list $array */

/* @var $attribute_num int */

/* @var $simple bool */
?>

<table class="attribute-table table-striped table-bordered table-hover<?= empty($attribute_list) ? ' add-table' : '' ?>">
    <thead>
    <tr>
        <th>Атрибут</th>
        <th>Значение</th>
        <? if (!$simple) : ?>
            <th class="inherit">Наследовать</th>
        <? endif ?>
        <th></th>
    </tr>
    </thead>
    <tbody class="attributes">
    <? foreach ($attribute_list as $key => $item) : ?>
        <?= $this->render('tr', [
            'model' => $item,
            'attribute_num' => $attribute_num,
            'simple' => $simple,
        ])
        ?>
        <? $attribute_num++ ?>
    <? endforeach; ?>
    </tbody>
    <? if (empty($attribute_list)) : ?>
        <tfoot>
        <tr>
            <td colspan="<?= $simple ? '2' : '3'?>">
                <?=
                Select2::widget([
                    'name' => 'select_attribute',
                    'data' => \common\models\materials\attribute\Attribute::getSelectAll(),
                    'options' => [
                        'id' => 'select_attribute_add',
                        'placeholder' => 'Выберите атрибут...',
                    ],
                    'pluginOptions' => ['allowClear' => true],
                ]);
                ?>
            </td>
            <td>
                <?=
                Html::a('<i class="fa fa-plus"></i>', ['#add'], [
                    'class' => 'btn btn-success add',
                    'title' => Yii::t('app', 'Добавить'),
                ]);
                ?>
            </td>
        </tr>
        </tfoot>
    <? endif; ?>
</table>