<?php

namespace frontend\controllers;

use Yii;
use common\models\User;
use common\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{

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
     * Displays a single User model.
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
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate()
    {
    	$id = Yii::$app->user->getId();
        $model = $this->findModel($id);

        $currentAvatar = $model->avatar;
        $currentPassword = $model->password_hash;
        if ($model->load(Yii::$app->request->post())) {
			$pass = Yii::$app->request->post('User')['password_hash'];

        	$dataAvatar = UploadedFile::getInstance($model,'avatar');
        	if($dataAvatar !=null){
        		$model->avatar = $dataAvatar->getBaseName() . '.'.$dataAvatar->getExtension();
        		$dataAvatar->saveAs(
			        Yii::getAlias('@webroot').'/admin/images/avatar/'.$dataAvatar->getBaseName().'.'.$dataAvatar->getExtension()
		        );
	        }else{
        		$model->avatar = $currentAvatar;
	        }

	        if($pass != $currentPassword){
        		$model->password_hash = Yii::$app->security->generatePasswordHash($pass);
	        }else{
        		$model->password_hash = $currentPassword;
        	}
	        $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
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
