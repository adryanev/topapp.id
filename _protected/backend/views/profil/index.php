<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProfilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profils';
$this->params['breadcrumbs'][] = $this->title;
if(Yii::$app->session->hasFlash('success'))
{
    Yii::$app->session->getFlash('success');
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="profil-index">

                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                <?php pjax::begin(); ?>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


                <?php
                yii\bootstrap\Modal::begin(['id' =>'modal']);
                yii\bootstrap\Modal::end();
                ?>
                <?= \fedemotta\datatables\DataTables::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id_profil',
                        [
                            'attribute'=>'foto_profil',
                            'format'=>['image',['height'=>80,'width'=>80]],
                            'value'=> function($model) {
                                return Yii::getAlias('@imgBackend/profil/'.$model->foto_profil);
                            }
                        ],
//                        'isi_profil:ntext',
                        'nama_app',
                        'alamat:ntext',
                        'email',
                        'hp',
                        'created_at:datetime',
                        'updated_at:datetime',

                        ['class' => 'yii\grid\ActionColumn','header' => 'Aksi',
                            'template'=>'{view} {update}'],
                    ],
                ]); ?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>
