<?php

namespace backend\controllers;

use common\models\Tag;
use common\models\TagBerita;
use Yii;
use common\models\Berita;
use common\models\BeritaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * BeritaController implements the CRUD actions for Berita model.
 */
class BeritaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['create','view','delete' ,'index','update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Lists all Berita models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BeritaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Berita model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Berita model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Berita();
        $data = Yii::$app->request->post();
        $model->gambar_berita = UploadedFile::getInstance($model,'gambar_berita');
        if($model->gambar_berita !=NULL) $data['Berita']['gambar_berita'] = $model->gambar_berita;

        if ($model->load($data)) {
            if ($model->gambar_berita != NULL){
                $model->gambar_berita->saveAs(Yii::getAlias('@webroot'). '/images/berita/'. $model->gambar_berita->baseName. '.'. $model->gambar_berita->extension);

            }
            else{
                $model->gambar_berita = NULL;
            }
            $model->inti_berita = $_POST['Berita']['inti_berita'];
            $model->penerbit_berita = Yii::$app->user->id;
            $model->save();
            Yii::$app->session->setFlash('success','Berita berhasil dibuat.');
            return $this->redirect(['berita/index']);
        }

        return $this->render('create', [
            'model' => $model,

        ]);
    }

    /**
     * Updates an existing Berita model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $gambar_sekarang = $model->gambar_berita;
        $data = Yii::$app->request->post();

        if ($model->load($data)) {
            $gambar = UploadedFile::getInstance($model,'gambar_berita');
            if(isset($gambar)){
                $gambar->saveAs(Yii::getAlias('@webroot'). '/images/berita/'. $gambar->baseName. '.'. $gambar->extension);
                $model->gambar_berita = $gambar->baseName . '.' . $gambar->extension;
            }
            else{
                $model->gambar_berita = $gambar_sekarang;
            }
            $model->inti_berita = $_POST['Berita']['inti_berita'];
            $model->save();
            Yii::$app->session->setFlash('success','Berita berhasil diperbarui.');
            return $this->redirect(['view', 'id' => $model->id_berita]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Berita model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Berita model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Berita the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Berita::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public static function actionTagList(){
        return Tag::find()->all();
    }
}
