<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 01/03/19
 * Time: 21:12
 */

namespace frontend\controllers;


use backend\models\Admin;
use common\models\Tag;
use common\models\Training;
use yii\web\Controller;

class TrainingController extends Controller
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
        $model  = Training::findOne($id);
        $latestTraining = Training::find()->orderBy('created_at DESC')->limit(3)->all();
        $recentPost = Tag::find()->where(['count'=> '>0'])->orderBy('count')->limit(8)->all();
        $admin = Admin::find(['nama','avatar'])->where(['id'=>1])->one();

        return $this->render('view',
            ['model'=>$model,
                'latestTraining'=>$latestTraining,
                'recentPost'=>$recentPost,
                'admin'=>$admin]
        );
    }

}