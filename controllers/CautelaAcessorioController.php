<?php

namespace app\controllers;

use app\models\Acessorio;
use Yii;
use app\models\CautelaAcessorio;
use app\models\CautelaAcessorioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CautelaAcessorioController implements the CRUD actions for CautelaAcessorio model.
 */
class CautelaAcessorioController extends MainController
{


    /**
     * Lists all CautelaAcessorio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CautelaAcessorioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CautelaAcessorio model.
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
     * Creates a new CautelaAcessorio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CautelaAcessorio();

        if ($model->load(Yii::$app->request->post())) {
            $model->data_inicio = Yii::$app->formatter->asDate($model->data_inicio);
            $model->data_fim = Yii::$app->formatter->asDate($model->data_fim);
            $model->usuario_id = Yii::$app->user->id;
            $model->quantidade = count(Yii::$app->request->post('acessorios'));

            if($model->save()) {
                foreach (Yii::$app->request->post('acessorios') as $id) {
                    $acessorio = Acessorio::findOne($id);
                    $acessorio->status = 1;
                    $acessorio->cautela_acessorio_id = $model->id;
                    $acessorio->update();
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
     * Updates an existing CautelaAcessorio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->data_fim = Yii::$app->formatter->asDate($model->data_fim);
            $model->quantidade = count(Yii::$app->request->post('acessorios'));

            if($model->save()) {
                foreach (Yii::$app->request->post('acessorios') as $idAcessorios) {
                    $acessorio = Acessorio::findOne($idAcessorios);
                    $acessorio->status = 0;
                    $acessorio->cautela_acessorio_id = null;
                    $acessorio->update();
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
     * Deletes an existing CautelaAcessorio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        Acessorio::updateAll(['status' => 0, 'cautela_acessorio_id' => null], 'cautela_acessorio_id = '.$id);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    
    

    /**
     * Finds the CautelaAcessorio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CautelaAcessorio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CautelaAcessorio::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
