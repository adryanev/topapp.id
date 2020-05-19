<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 01/03/19
 * Time: 12:02
 */

namespace frontend\controllers;


use common\models\Berita;
use common\models\Tag;
use common\models\TagBerita;
use common\models\TagTraining;
use yii\web\Controller;

class TagController extends Controller
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
        $tag = Tag::findOne($id);
        $model = TagBerita::find()->where(['id_tag'=>$id])->all();
        $modelTraining = TagTraining::find()->where(['id_tag'=>$id])->all();
        return $this->render(
            'tag-item',
            ['model'=>$model,
                'modelTraining'=>$modelTraining,
                'tag'=>$tag]);
    }
}