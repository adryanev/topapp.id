<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 01/03/19
 * Time: 20:38
 */

namespace frontend\controllers;


use common\models\DetailProduk;
use common\models\Produk;
use common\models\Training;
use yii\filters\AccessControl;

use yii\web\Controller;

class ProdukController extends Controller
{

    /**
     * @inheritdoc
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['software', 'training'],
//                'rules' => [
//                        'allow' => true,
//                        'roles' => [
//                            '?'
//                        ],
//                ],
//            ],
//        ];
//    }

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

    public function actionTraining(){

        $model = Training::find()->all();

        return $this->render('training',['model'=>$model]);
    }

    public function actionSoftware(){

        $model = Produk::find()->all();
        return $this->render('software',['model'=>$model]);
    }
}