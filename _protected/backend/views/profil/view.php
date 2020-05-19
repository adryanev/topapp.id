<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\profil */

$this->title = $model->nama_app;
$this->params['breadcrumbs'][] = ['label' => 'Profil', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
if(Yii::$app->session->hasFlash('success'))
{
    Yii::$app->session->getFlash('success');
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="profil-view">

                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>

                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id_profil], ['class' => 'btn btn-primary']) ?>
                </p>
                <?php
                yii\bootstrap\Modal::begin(['id' =>'modal']);
                yii\bootstrap\Modal::end();
                ?>
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id_profil',
                        [
                            'attribute'=>'foto_profil',
                            'format'=>['image',['height'=>80,'width'=>80]],
                            'value'=> function($model) {
                                return Yii::getAlias('@imgBackend/profil/'.$model->foto_profil);
                            }
                        ],
                        [
                                'attribute'=>'isi_profil',
                            'format'=>'raw',
                            'value'=>function($model){
                                $a = \yii\helpers\HtmlPurifier::process($model->isi_profil);
                                return $a;
                            }
                        ],
                        'nama_app',
                        'alamat:ntext',
                        'email',
                        'hp',
                        'created_at:datetime',
                        'updated_at:datetime',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>
