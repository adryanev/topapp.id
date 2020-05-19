<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 28/02/19
 * Time: 22:56
 */

namespace frontend\controllers;


use common\models\Berita;
use common\models\Tag;
use yii\web\Controller;

class BeritaController extends Controller
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
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = Berita::find()->orderBy('created_at DESC')->limit(6)->all();
      return $this->render('index',['model'=>$model]);
    }
    public function actionSemuaBerita()
    {
        $model = Berita::find()->orderBy('created_at DESC')->all();
        return $this->render('allberita',[
            'model'=>$model
        ]);
    }
    public function actionView($id)
    {
        $berita = Berita::findOne(['id_berita'=>$id]);
        $latestBerita = Berita::find()->orderBy('created_at DESC')-> limit(3)->all();
        $recentPost = Tag::find()->where(['count'=> '>0'])->orderBy('count')->limit(8)->all();
        return $this->render('berita',[
            'berita'=>$berita,
            'latestBerita'=>$latestBerita,
            'recentPost'=>$recentPost
        ]);
    }
}