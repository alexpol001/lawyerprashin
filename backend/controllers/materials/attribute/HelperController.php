<?php
/**
 * Created by PhpStorm.
 * User: ALEXPOL
 * Date: 27.01.2019
 * Time: 13:35
 */

namespace backend\controllers\materials\attribute;


use backend\controllers\AuthController;
use common\models\materials\attribute\Attribute;
use common\models\materials\attribute\CategoryAttribute;
use common\models\materials\Category;
use Yii;
use yii\web\NotFoundHttpException;

class HelperController extends AuthController
{
    /**
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionAdd()
    {
        if (Yii::$app->request->post() && Yii::$app->request->isAjax) {
            $this->setViewPath(Yii::getAlias('@backend/widgets/views/attribute'));
            $post = Yii::$app->request->post();
            return $this->renderAjax('tr', [
                'attribute' => Attribute::findOne($post['attribute_id']),
                'attribute_num' => $post['attribute_num'],
                'simple' => $post['simple'],
            ]);
        }
        throw new NotFoundHttpException();
    }

    /**
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionChange()
    {
        $this->setViewPath(Yii::getAlias('@backend/widgets/views/attribute'));
        if (Yii::$app->request->post() && Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            return $this->renderAjax('index', [
                'attribute_list' => Category::findOne($post['id'])->getAttributesByGroupWithoutInherit(),
                'simple' => $post['simple'],
            ]);
        }
        throw new NotFoundHttpException();
    }

}