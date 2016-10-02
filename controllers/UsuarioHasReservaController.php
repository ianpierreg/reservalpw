<?php

namespace app\controllers;

use Yii;
use app\models\UsuarioHasReserva;
use app\models\UsuarioHasReservaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsuarioHasReservaController implements the CRUD actions for UsuarioHasReserva model.
 */
class UsuarioHasReservaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all UsuarioHasReserva models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsuarioHasReservaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UsuarioHasReserva model.
     * @param integer $usuario_id
     * @param integer $reserva_id
     * @return mixed
     */
    public function actionView($usuario_id, $reserva_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($usuario_id, $reserva_id),
        ]);
    }

    /**
     * Creates a new UsuarioHasReserva model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UsuarioHasReserva();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'usuario_id' => $model->usuario_id, 'reserva_id' => $model->reserva_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UsuarioHasReserva model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $usuario_id
     * @param integer $reserva_id
     * @return mixed
     */
    public function actionUpdate($usuario_id, $reserva_id)
    {
        $model = $this->findModel($usuario_id, $reserva_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'usuario_id' => $model->usuario_id, 'reserva_id' => $model->reserva_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing UsuarioHasReserva model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $usuario_id
     * @param integer $reserva_id
     * @return mixed
     */
    public function actionDelete($usuario_id, $reserva_id)
    {
        $this->findModel($usuario_id, $reserva_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UsuarioHasReserva model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $usuario_id
     * @param integer $reserva_id
     * @return UsuarioHasReserva the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($usuario_id, $reserva_id)
    {
        if (($model = UsuarioHasReserva::findOne(['usuario_id' => $usuario_id, 'reserva_id' => $reserva_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
