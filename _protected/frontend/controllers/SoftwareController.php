<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 02/03/19
 * Time: 10:26
 */

namespace frontend\controllers;


use common\models\Kategori;
use common\models\Produk;
use common\models\Tag;
use yii\web\Controller;

class SoftwareController extends Controller
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

    public function actionView($id){

        $sofware = Produk::findOne($id);
        $latestProduk = Produk::find()->orderBy('created_at DESC')->limit(3)->all();
        $kategori = Kategori::find()->all();
        $recentPost = Tag::find()->where(['count'=> '>0'])->orderBy('count')->limit(8)->all();

        return $this->render('view',[
            'software'=>$sofware,
            'latestProduk'=>$latestProduk,
            'kategori'=>$kategori,
            'recentPost'=>$recentPost
        ]);
    }
}