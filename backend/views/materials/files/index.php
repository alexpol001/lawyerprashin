<?php

/* @var $this yii\web\View */
/* @var $file_manager string */

$this->title = 'Файловый менеджер';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="files-index">
    <iframe src="<?=Yii::getAlias('@web'.$file_manager)?>" width="100%" height="100%">
        Ваш браузер не поддерживает плавающие фреймы!
    </iframe>
</div>
