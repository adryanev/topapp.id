<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\BeritaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Berita';
$this->params['breadcrumbs'][] = $this->title;
if(Yii::$app->session->hasFlash('success'))
    {
        Yii::$app->session->getFlash('success');
    }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="berita-index">

                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                <?php Pjax::begin(); ?>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Create Berita', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?php
                yii\bootstrap\Modal::begin(['id' =>'modal']);
                yii\bootstrap\Modal::end();
                ?>
                <?= \fedemotta\datatables\DataTables::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn','header' => 'No'],

                        //'id_berita',
                        'judul_berita',
                        'inti_berita',
                        //'isi_berita:ntext',
                        [
                            'attribute'=>'gambar_berita',
                            'format'=>['image',['height'=>50, 'width'=>'50']],
                            'value'=> function($model){
                    return Yii::getAlias('@imgBackend/berita/'.$model->gambar_berita);
                            }

                        ],
                        //'penerbit_berita',
                        'created_at:datetime',

                        ['class' => 'yii\grid\ActionColumn','header' => 'Aksi'],
                    ],
                ]); ?>
                <?php Pjax::end(); ?>
            </div>
        </div>

    </div><!-- end col -->
</div>
