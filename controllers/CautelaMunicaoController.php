<?php

namespace app\controllers;

use app\models\Municao;
use Yii;
use app\models\CautelaMunicao;
use app\models\CautelaMunicaoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CautelaMunicaoController implements the CRUD actions for CautelaMunicao model.
 */
class CautelaMunicaoController extends MainController
{

    /**
     * Lists all CautelaMunicao models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CautelaMunicaoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CautelaMunicao model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CautelaMunicao model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CautelaMunicao();

        if ($model->load(Yii::$app->request->post())) {
            $model->data_inicio = Yii::$app->formatter->asDate($model->data_inicio);
            $model->data_fim = Yii::$app->formatter->asDate($model->data_fim);
            $model->usuario_id = Yii::$app->user->id;
            $model->quantidade = count(Yii::$app->request->post('municoes'));

            if($model->save()) {
                foreach (Yii::$app->request->post('municoes') as $id) {
                    $municao = Municao::findOne($id);
                    $municao->status = 1;
                    $municao->cautela_municao_id = $model->id;
                    $municao->update();
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Updates an existing CautelaMunicao model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (count(Yii::$app->request->post('municoes')) != 0) {
            $model->quantidade -= count(Yii::$app->request->post('municoes'));
            if($model->save()) {
                foreach (Yii::$app->request->post('municoes') as $idMunicao) {
                    $municao = Municao::findOne($idMunicao);
                    $municao->status = 0;
                    $municao->cautela_municao_id = null;
                    $municao->update();
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CautelaMunicao model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        Municao::deleteAll(['cautela_municao_id' => $id]);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CautelaMunicao model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CautelaMunicao the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CautelaMunicao::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
