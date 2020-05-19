<?php
namespace frontend\controllers;

use backend\models\Admin;
use Carbon\Carbon;
use common\models\Berita;
use common\models\DetailProduk;
use common\models\Kategori;
use common\models\Produk;
use common\models\Order;
use common\models\Profil;
use common\models\Tag;
use common\models\TagBerita;
use common\models\Team;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout='main-landing';
        $produk = Produk::find()->where(['status'=>10])->orderBy('created_at DESC')->limit(6)->all();
        $berita = Berita::find()->orderBy('created_at DESC')->limit(6)->all();
        $team = Team::find()->all();
        return $this->render('index', [
            'product'=>$produk,
            'berita'=>$berita,
            'team'=>$team
        ]);
    }


    public function actionProfil()
    {
        $model = Profil::findOne(1);
        $admin = Admin::find(['nama','avatar'])->where(['id'=>1])->one();
        $team = Team::find()->all();

        return $this->render('profil',['model'=>$model,'admin'=>$admin,'team'=>$team]);
    }

    public function actionContact()
    {
    	$profil = Profil::findOne(1);
        return $this->render( 'contact',[ 'profil' =>$profil]);
    }

    public function actionKategori($id)
    {
        $kategoris =Kategori::find()->all();
        if($id != 0){
              $kat = Kategori::findOne(['id_kategori'=>$id]);
        
        $produks = Produk::find()->where(['kategori_produk'=>$id,'status'=>10])->all();
        }
        else{
            $produks = Produk::find()->where(['status'=>10])->all();
            $kat = null;
        }
      


        return $this->render('kategori',['kat'=>$kat,'kategoris'=>$kategoris,'produks'=>$produks]);
    }



    public function actionHowTo()
    {
        return $this->render('howto');
    }



    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $this->layout='main-login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }



    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $this->layout = 'main-login';
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                    return $this->goHome();
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
