<?php

namespace backend\controllers;

use backend\models\UserManager;
use Yii;
use common\models\User;
use common\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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



    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $avatar = Yii::$app->db->createCommand("select * from user where id = $id")->queryAll();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'avatar' => $avatar,
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();
        $data = Yii::$app->request->post();
        if ($model->load($data)) {
            $model->setPassword($model->password_hash);
            $model->generateAuthKey();
            $dataGambar = UploadedFile::getInstance($model,'avatar');
            if ($dataGambar != null){
            	$model->avatar = $dataGambar->getBaseName().'.'.$dataGambar->getExtension();
                $dataGambar->saveAs(Yii::getAlias('@webroot'). '/images/avatar/'.$dataGambar->getBaseName(). '.'. $dataGambar->getExtension());
            }
            $model->job = $_POST['User']['job'];
            $model->instansi = $_POST['User']['instansi'];
            if($model->save(false)){
                Yii::$app->session->setFlash('success','Pengguna berhasil ditambahkan.');
                return $this->redirect('index');
            }


        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $data = Yii::$app->request->post();
        $gambar_sekarang = $model->avatar;
        $currentPassword = $model->password_hash;
        if ($model->load($data)) {
        	$dataPass = Yii::$app->request->post('User')['password_hash'];
            $gambar = UploadedFile::getInstance($model,'avatar');
            if(isset($gambar)){
                $gambar->saveAs(Yii::getAlias('@webroot'). '/images/avatar/'. $gambar->baseName. '.'. $gambar->extension);
                $model->avatar = $gambar->baseName . '.' . $gambar->extension;
            }
            else{
                $model->avatar = $gambar_sekarang;
            }
            $model->job = $_POST['User']['job'];
            $model->instansi = $_POST['User']['instansi'];
            if($currentPassword != $dataPass){
            	$model->password_hash = Yii::$app->security->generatePasswordHash($dataPass);
            }else{
            	$model->password_hash = $currentPassword;
            }
            if ($model->save(false)){
                Yii::$app->session->setFlash('success','Pengguna berhasil diperbarui.');
                return $this->redirect(['view', 'id' => $model->id]);
            }

        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
