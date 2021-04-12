<?php

namespace backend\controllers\materials;

use backend\controllers\AuthController;
use kartik\grid\EditableColumnAction;
use Yii;
use common\models\materials\Category;
use common\models\search\materials\Category as CategorySearch;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends AuthController
{
    public function actions()
    {
        return ArrayHelper::merge(parent::actions(), [
            'edit' => [                                       // identifier for your editable column action
                'class' => EditableColumnAction::className(),     // action class name
                'modelClass' => Category::className(),                // the model for the record being edited
                'scenario' => Category::SCENARIO_EDIT,
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
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
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
        $model = new Category();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Категория успешно сохранёна');
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
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Категория успешно сохранёна');
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
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
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
