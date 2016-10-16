<?php

namespace app\controllers;

use Yii;
use app\models\Militar;
use app\models\MilitarSearch;
use app\controllers\MainController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MilitarController implements the CRUD actions for Militar model.
 */
class MilitarController extends MainController
{


    /**
     * Lists all Militar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MilitarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Militar model.
     * @param integer $id
     * @return mixed
     */

    private function getPostos ()
    {
        return [1 => 'Soldado', 2 => 'Tafeiro de 1ª Classe', 3 => 'Tafeiro de 2ª Classe', 4 => 'Tafeiro Mor', 5 => 'Cabo',
            6 => '3º Sargento', 7 => '2º Sargento', 8 => '1º Sargento', 9 => 'Subtenente', 10 => 'Aspirante a Oficial',
            11 => '2º Tenente', 12 => '1º Tenente', 13 => 'Capitão', 14 => 'Major', 15 => '2º Tenente-Coronel', 16 => 'Coronel',
            17 => 'General de Brigada', 18 => 'General de Divisão', 19 => 'General de Exército', 20 => 'Marechal'];
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Militar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Militar();
        $postos = $this->getPostos();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'postos' => $postos,
            ]);
        }
    }

    /**
     * Updates an existing Militar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Militar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Militar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Militar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Militar::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
