<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategoris';
$this->params['breadcrumbs'][] = $this->title;

if(Yii::$app->session->hasFlash('success'))
{
    Yii::$app->session->getFlash('success');
}
?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <div class="kategori-index">

                        <?php
                        yii\bootstrap\Modal::begin(['id' =>'modal']);
                        yii\bootstrap\Modal::end();
                        ?>

                         <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                        <?php Pjax::begin(); ?>

                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <p>
                            <?= Html::a('Create Kategori', ['create'], ['class' => 'btn btn-success']) ?>
                        </p>

                        <?= \fedemotta\datatables\DataTables::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn','header'=> 'No'],

                                'id_kategori',
                                'nama_kategori',
                                'created_at:datetime',
                                'updated_at:datetime',

                                ['class' => 'yii\grid\ActionColumn','header'=>'Aksi'],
                            ],
                        ]); ?>
                        <?php Pjax::end(); ?>

                    </div>
                </div>
            </div>
        </div>
