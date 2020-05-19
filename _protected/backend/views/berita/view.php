<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Berita */

$this->title = $model->judul_berita;
$this->params['breadcrumbs'][] = ['label' => 'Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
if(Yii::$app->session->hasFlash('success'))
{
    Yii::$app->session->getFlash('success');
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="berita-view">

                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>

                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id_berita], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id_berita], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
                <?php
                yii\bootstrap\Modal::begin(['id' =>'modal']);
                yii\bootstrap\Modal::end();
                ?>
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id_berita',
                        'judul_berita',
                        'inti_berita',

                        ['attribute'=>'isi_berita',
                            'format'=>'raw',
                            'value'=>function($model){
                                $a = \yii\helpers\HtmlPurifier::process($model->isi_berita);
                                return $a;
                            }],
                        [
                            'attribute'=>'gambar_berita',
                            'format'=>['image',['height'=>75, 'width'=>75]],
                            'value'=> Yii::getAlias('@imgBackend/berita/'.$model->gambar_berita)
                        ],
                        'penerbitBerita.nama',
                        'created_at:datetime',
                        'updated_at:datetime'
                    ],
                ]) ?>

            </div>
        </div>

    </div><!-- end col -->
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="berita-view">
                    <h3 class="m-t-0 m-b-30"><?= Html::encode($this->title) ?> </h3>
                        <div class="alert alert-primary">
                            <p><span class="pull-left">Tags : <?= $model->tagLinks ?></span>
                            <span class="pull-right">Oleh: <?=\backend\models\Admin::findOne(['id'=>$model->penerbit_berita])->nama?> </span></p>
                        </div>

                    <br>
                   <div class="container">
                       <?=Html::img(Yii::getAlias('@imgBackend/berita/'.$model->gambar_berita),['width'=>'75%','height'=>'75%','alt'=>'Gambar Berita'])?>
                   </div>
                    <div class="clearfix"></div>
                    <br>
                    <hr>
                    <?= $model->isi_berita ?>
                    <br>
                    <hr>
                    <div class="alert alert-primary">
                        <p><span class="pull-left">Dibuat Tanggal : <?= $model->created_at ?></span>
                            <span class="pull-right">Diperbarui Tanggal : <?= $model->updated_at ?></span></p>
                    </div>

                </div>


        </div>

    </div><!-- end col -->
</div>
