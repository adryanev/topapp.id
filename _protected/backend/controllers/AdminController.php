<?php

namespace backend\controllers;

use Yii;
use backend\models\Admin;
use backend\models\AdminSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * AdminController implements the CRUD actions for Admin model.
 */
class AdminController extends Controller
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
     * Displays a single Admin model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView()
    {
        $id = Yii::$app->user->getId();
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    /**
     * Updates an existing Admin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate()
    {
        $id = Yii::$app->user->getId();
        $model = $this->findModel($id);
        $data = Yii::$app->request->post();
        $gambar_sekarang = $model->avatar;
        $currentPass = $model->password_hash;
        $currentTempatLahir = $model->tempat_lahir;
        $currentTanggalLahir = $model->tanggal_lahir;
        $currentAlamat = $model->alamat;
        if ($model->load($data)) {
        	$pass = Yii::$app->request->post('Admin')['password_hash'];
            $gambar = UploadedFile::getInstance($model,'avatar');
            if($gambar!=null){
                $gambar->saveAs(Yii::getAlias('@webroot').'/images/avatar/'. $gambar->baseName. '.'. $gambar->extension);
                $model->avatar = $gambar->baseName . '.' . $gambar->extension;
            }
            else{
                $model->avatar = $gambar_sekarang;
            }


            if($currentPass != $pass){
            	$model->password_hash = Yii::$app->security->generatePasswordHash($pass);
            }else{
            	$model->password_hash = $currentPass;
            }

            $model->save(false);
                Yii::$app->session->setFlash('success','Admin berhasil diperbarui.');
                return $this->redirect(['view', 'id' => $model->id]);


        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    /**
     * Finds the Admin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Admin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Admin::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
