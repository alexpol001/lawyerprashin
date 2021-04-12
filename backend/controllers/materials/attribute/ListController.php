<?php

namespace backend\controllers\materials\attribute;

use backend\controllers\AuthController;
use common\models\materials\attribute\Attribute;
use common\models\materials\attribute\AttributeGroup;
use kartik\grid\EditableColumnAction;
use Yii;
use common\models\search\materials\attribute\Attribute as AttributeSearch;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;

/**
 * MaterialController implements the CRUD actions for Material model.
 */
class ListController extends AuthController
{
    public function actions()
    {
        return ArrayHelper::merge(parent::actions(), [
            'edit' => [                                       // identifier for your editable column action
                'class' => EditableColumnAction::className(),     // action class name
                'modelClass' => Attribute::className(),                // the model for the record being edited
                'outputValue' => function ($model, $attribute, $key, $index) {
                    return $model->$attribute;      // return any custom output value if desired
                },
                'outputMessage' => function($model, $attribute, $key, $index) {
                    return '';                                // any custom error to return after model save
                },
                'showModelErrors' => true,                        // show model validation errors after save
                'errorOptions' => ['header' => ''],                // error summary HTML options
//                 'postOnly' => true,
//                 'ajaxOnly' => true,
//                 'findModel' => function($id, $action) {},
//                 'checkAccess' => function($action, $model) {}
            ]
        ]);
    }
    /**
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AttributeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * @param null $copy_id
     * @return bool|string|\yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionCreate($copy_id = null)
    {
        $model = new Attribute();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Атрибут успешно сохранен');
            return $this->checkSubmitType(Yii::$app->request->post(), $model);
        }
        if ($copy_id) {
            $model = $this->findModel($copy_id);
            $model->title .= ' - Копия';
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }


    /**
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Атрибут успешно сохранен');
            return $this->checkSubmitType(Yii::$app->request->post(), $model);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * @param $id
     * @throws NotFoundHttpException
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function delete($id)
    {
        $this->findModel($id)->delete();
    }

    /**
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionMultiDelete()
    {
        if($keyList = Yii::$app->request->post('keyList'))
        {
            $arrKey = explode(',', $keyList);
            foreach ($arrKey as $item) {
                $this->delete($item);
            }
        }
        return $this->redirect(['index']);
    }


    /**
     * @param $id
     * @return Attribute|null
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = Attribute::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function checkSubmitType($post, $model)
    {
        if (isset($post['save'])) {
            return $this->redirect(['update', 'id' => $model->id]);
        }
        if (isset($post['save-close'])) {
            return $this->redirect(['index']);
        }
        if (isset($post['save-create'])) {
            return $this->redirect(['create']);
        }
        if (isset($post['save-copy'])) {
            return $this->redirect(['create', 'copy_id' => $model->id]);
        }
        return false;
    }
}
