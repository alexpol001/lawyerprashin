<?php

use kartik\widgets\Select2;
use mihaildev\elfinder\InputFile;
use yii\bootstrap\Tabs;
use yii\helpers\Html;

/* @var $this yii\web\View */

/* @var $attribute_list $array */

/* @var $simple int */

?>

<?
$items = [
    [
        'label' => 'Добавить',
        'content' => $this->render('table', [
            'attribute_list' => [],
            'simple' => $simple,
        ]),
        'active' => true
    ]
];
$countAttributes = 0;
foreach ($attribute_list as $key => $attributes) {
    array_push($items, [
        'label' => $key,
        'content' => $this->render('table', [
            'attribute_list' => $attributes,
            'attribute_num' => $countAttributes,
            'simple' => $simple,
        ]),
    ]);
    $countAttributes = count($attributes);
}
echo Tabs::widget([
    'id' => 'tabs_inner_attribute',
    'items' => $items
]);
?>

