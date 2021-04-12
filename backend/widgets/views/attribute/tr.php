<?php

use kartik\color\ColorInput;
use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use dominus77\iconpicker\IconPicker;

/* @var $this yii\web\View */

/* @var $attribute \common\models\materials\attribute\Attribute */

/* @var $model \common\models\materials\attribute\CategoryAttribute|\common\models\materials\attribute\MaterialAttribute */

/* @var $attribute_num int */

/* @var $simple bool */
?>
<tr>
    <?
    if (!$attribute) {
        $attribute = $model->attribute0;
    }
    ?>
    <td>
        <?= $attribute->title ?>
        <?= Html::hiddenInput("attribute_id[$attribute_num]", $attribute->id) ?>
    </td>
    <td>
        <?
        $valueField = "attribute_value[$attribute_num]";
        switch ($attribute->type) {
            case 1:
                $valueField = Html::textarea($valueField, $model ? $model->value : '', ['class' => 'attribute-html']);
                break;
            case 2:
                $valueField = Html::textarea($valueField, $model ? $model->value : '', ['class' => 'form-control']);
                break;
            case 3:
                $valueField = InputFile::widget([
                    'language' => 'ru',
                    'controller' => 'elfinder',
                    'template' => '<div class="input-group elfinder">{input}<span class="input-group-btn">{button}</span></div>',
                    'options' => ['class' => 'form-control', 'id' => 'input-file-'.$attribute_num],
                    'buttonName' => 'Выбрать файл',
                    'buttonOptions' => ['class' => 'btn btn-primary'],
                    'name' => $valueField,
                    'value' => $model ? $model->value : ''
                ]);
                break;
            case 4:
                $valueField = ColorInput::widget([
                    'options' => ['id' => 'input-color-'.$attribute_num, 'class' => 'input-color', 'placeholder' => 'Выберите цвет ...'],
                    'name' => $valueField,
                    'value' => $model ? $model->value : ''
                ]);
                break;
            case 5:
                $valueField = IconPicker::widget([
                    'options' => ['class' => 'form-control', 'id' => 'input-icon-fa'.$attribute_num],
                    'name' => $valueField,
                    'value' => $model ? $model->value : ''
                ]);
                break;
            default:
                $valueField = Html::textInput($valueField, $model ? $model->value : '', ['class' => 'form-control']);
                break;
        }
        ?>
        <?= $valueField ?>
    </td>
    <? if (!$simple) : ?>
        <td class="inherit"><?= Html::checkbox("attribute_inherit[$attribute_num]", $model->inherit) ?></td>
    <? endif; ?>
    <td>
        <?=
        Html::a('<i class="fa fa-minus"></i>', ['#delete'], [
            'class' => 'btn btn-danger delete',
            'title' => Yii::t('app', 'Удалить'),
        ]);
        ?>
    </td>
</tr>
