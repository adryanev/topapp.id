<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 02/03/19
 * Time: 12:20
 */

namespace frontend\controllers;


use common\models\TagBerita;
use yii\web\Controller;

class KegiatanController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex(){

        $model = TagBerita::find()->where(['id_tag'=>21])->all();

        return $this->render('index',['model'=>$model]);

    }

    public function actionView(){

    }
}