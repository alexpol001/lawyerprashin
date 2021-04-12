<?php

/* @var $this yii\web\View */
/* @var $model array */

?>
<? if ($model['name']) : ?>
    Имя: <?= $model['name'] ?>,
<? endif; ?>

Телефон: <?= $model['phone'] ?>,

<? if ($model['body']) : ?>
    Сообщение: <?= $model['body'] ?>
<? endif; ?>


