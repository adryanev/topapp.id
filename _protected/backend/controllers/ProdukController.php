<?php

namespace backend\controllers;

use common\models\DetailProduk;
use common\models\Tag;
use Yii;
use common\models\Produk;
use common\models\ProdukSearch;
use yii\base\Model;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * ProdukController implements the CRUD actions for Produk model.
 */
class ProdukController extends Controller
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
                        'actions' => ['create', 'view', 'delete', 'index', 'update'],
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
     * Lists all Produk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProdukSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Produk model.
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
     * Creates a new Produk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $produk = new Produk();
        if ($produk->load(Yii::$app->request->post())){
        $produk->added_by = Yii::$app->user->getId();
        $produk->status = 10;

        $fileManual = UploadedFile::getInstance($produk, 'manual_book');
        if (!empty($fileManual) || isset($fileManual)) {
            $fileName = $fileManual->getBaseName() . '.' . $fileManual->getExtension();
            $produk->manual_book = $fileName;
            $fileManual->saveAs(Yii::getAlias('@webroot/upload/manual/' . $fileName));
        }

        $fileRancangan = UploadedFile::getInstance($produk, 'rancangan');
        if (isset($fileRancangan) || !empty($fileRancangan)) {
            $fileName = $fileRancangan->getBaseName() . '.' . $fileRancangan->getExtension();
            $produk->rancangan = $fileName;
            $fileRancangan->saveAs(Yii::getAlias('@webroot/upload/rancangan/' . $fileName));
        }

        $fileGambar = UploadedFile::getInstance($produk, 'gambar');
        if (isset($fileGambar) || !empty($fileGambar)) {
            $fileName = $fileGambar->getBaseName() . '.' . $fileGambar->getExtension();
            $produk->gambar = $fileGambar;
            $fileGambar->saveAs(Yii::getAlias('@webroot/images/produk' . $fileName));
        }

        if ($produk->video != null && isset($produk->video)) {
            $video = null;
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $produk->video, $video);
            $produk->video = $video[1];
        }

        $produk->save(false);
        Yii::$app->session->setFlash('success', 'Berhasil Menambahkan Produk.');
        return $this->redirect(['produk/index']);
    }

        return $this->render('create', [
            'produk' => $produk,
        ]);
    }

    /**
     * Updates an existing Produk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $produk = $this->findModel($id);

        $currentManual = $produk->manual_book;
        $currentRancangan = $produk->rancangan;
        $currentGambar = $produk->gambar;

        if ($produk->load(Yii::$app->request->post())) {

            $dataManual = UploadedFile::getInstance($produk, 'manual_book');
            $dataRancangan = UploadedFile::getInstance($produk, 'rancangan');
            $dataGambar = UploadedFile::getInstance($produk, 'gambar');


            if (!empty($dataManual) || isset($dataManual)) {
                $fileName = $dataManual->getBaseName() . '.' . $dataManual->getExtension();
                $produk->manual_book = $fileName;
                $dataManual->saveAs(Yii::getAlias('@webroot/upload/manual/' . $fileName));

            } else {
                $produk->manual_book = $currentManual;
            }


            if (isset($dataRancangan) || !empty($dataRancangan)) {
                $fileName = $dataRancangan->getBaseName() . '.' . $dataRancangan->getExtension();
                $produk->rancangan = $fileName;
                $dataRancangan->saveAs(Yii::getAlias('@webroot/upload/rancangan/' . $fileName));
            } else {
                $produk->rancangan = $currentRancangan;
            }

            if (isset($dataGambar) || !empty($dataGambar)) {
                $fileName = $dataGambar->getBaseName() . '.' . $dataGambar->getExtension();
                $produk->gambar = $fileName;
                $dataGambar->saveAs(Yii::getAlias('@webroot/images/produk/'.$fileName));

            }else {

                $produk->gambar = $currentGambar;
            }

                if ($produk->video != null && strlen($produk->video) > 11) {
                    $video = null;
                    preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $produk->video, $video);
                    $produk->video = $video[1];
                }


                $produk->save(false);
                Yii::$app->session->setFlash('success', 'Berhasil Memperbarui Produk.');
                return $this->redirect(['view', 'id' => $produk->id_produk]);


            }

        return $this->render('update', [
            'produk' => $produk,
        ]);
    }

    /**
     * Deletes an existing Produk model.
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
     * Finds the Produk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Produk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Produk::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
