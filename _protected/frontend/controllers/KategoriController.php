<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 02/03/19
 * Time: 11:24
 */

namespace frontend\controllers;


use common\models\DetailProduk;
use common\models\Kategori;
use common\models\Produk;
use yii\web\Controller;

class KategoriController extends Controller
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

    public function actionView($id)
    {
        $kategori = Kategori::findOne($id);
        $model = Produk::find()->where(['kategori_produk' => $id])->all();


        return $this->render('view', [
            'model' => $model,
            'kategori'=>$kategori
        ]);
    }
}