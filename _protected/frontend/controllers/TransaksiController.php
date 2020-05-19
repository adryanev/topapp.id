<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 02/03/19
 * Time: 18:21
 */

namespace frontend\controllers;


use common\models\DetailOrder;
use common\models\Order;
use yii\filters\AccessControl;
use yii\web\Controller;

class TransaksiController extends Controller
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
                        'actions' => ['index','view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
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
        ];
    }

    public function actionIndex(){

        $allTransaction = Order::find()->where(['id_user'=>\Yii::$app->user->identity->getId()]);
        $transaksiPending = $allTransaction->where(['status'=>'false'])->all();
        $transaksiSukses = $allTransaction->where(['status'=>'true'])->all();

        return $this->render('index',[
            'transaksiPending'=>$transaksiPending,
            'transaksiSukses'=>$transaksiSukses,

        ]);


    }


    public function actionView($id){
        $order = Order::findOne($id);
        $detailOrder = DetailOrder::find()->where(['id_order'=>$order->id_order])->all();
        return $this->render('view',['order'=>$order,'detailOrder'=>$detailOrder]);
    }
}