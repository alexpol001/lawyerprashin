<?php

namespace backend\controllers\materials;

use backend\controllers\AuthController;

/**
 * Files controller
 */
class FilesController extends AuthController
{
    public function actionIndex() {
        return $this->render('index', [
            'file_manager' => '/plugins/responsivefilemanager/filemanager/dialog.php?type=0&akey='.md5('admin_lawyerprashin_yii2'),
        ]);
    }
}