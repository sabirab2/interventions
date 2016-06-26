<?php

namespace app\controllers;

use app\models\Actions;
use app\models\Observations;
use app\models\Taches;
use Yii;
use app\models\Interventions;
use app\models\InterventionsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;

/**
 * InterventionsController implements the CRUD actions for Interventions model.
 */
class InterventionsController extends Controller
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
     * Lists all Interventions models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InterventionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Interventions model.
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
     * Creates a new Interventions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Interventions();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            // save actions
            $actions = Yii::$app->request->post('Actions',array());
            foreach($actions as $action){
                $actionModel = new Actions();
                $actionModel->text = $action;
                $actionModel->intervention_id = $model->id;

                $actionModel->save();
            }
            // save Taches
            $taches = Yii::$app->request->post('Taches',array());
            foreach($taches as $tache){
                $tacheModel = new Taches();
                $tacheModel->text = $tache;
                $tacheModel->intervention_id = $model->id;
                $tacheModel->save();
            }
            // save Observations
            $observations = Yii::$app->request->post('Observations',array());
            foreach($observations as $observation){
                $observationModel = new Observations();
                $observationModel->text = $observation;
                $observationModel->intervention_id = $model->id;
                $observationModel->save();
            }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Interventions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            Actions::deleteAll('intervention_id = '.$model->id);
            Taches::deleteAll('intervention_id = '.$model->id);
            Observations::deleteAll('intervention_id = '.$model->id);

            // save actions
            $actions = Yii::$app->request->post('Actions',array());
            foreach($actions as $action){
                $actionModel = new Actions();
                $actionModel->text = $action;
                $actionModel->intervention_id = $model->id;

                $actionModel->save();
            }
            // save Taches
            $taches = Yii::$app->request->post('Taches',array());
            foreach($taches as $tache){
                $tacheModel = new Taches();
                $tacheModel->text = $tache;
                $tacheModel->intervention_id = $model->id;
                $tacheModel->save();
            }
            // save Observations
            $observations = Yii::$app->request->post('Observations',array());
            foreach($observations as $observation){
                $observationModel = new Observations();
                $observationModel->text = $observation;
                $observationModel->intervention_id = $model->id;
                $observationModel->save();
            }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Interventions model.
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
     * Finds the Interventions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Interventions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Interventions::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSavePdf($id) {
        $model = $this->findModel($id);
        // get your HTML raw content without any layouts or scripts
        $content = $this->renderPartial('_pdfView',
            [
                'model' => $model,
            ]
        );
        $pdf = Yii::$app->pdf;
        $pdf->content = $content;

        // return the pdf output as per the destination setting
        return $pdf->render();
    }
}
