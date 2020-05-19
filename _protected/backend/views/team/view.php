<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Team */

$this->title = $model->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'Team', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$imagePath = Yii::getAlias('@imgBackend/team/');
?>
<div class="team-view">

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-content">
                    <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                                <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger waves-effect waves-light',
                                'data' => [
                                'confirm' => 'Anda yakin untuk menghapus item ini?',
                                'method' => 'post',
                                ],
                                ]) ?>
                            </p>

                            <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                        'id',
            'nama_lengkap',
            'jabatan',
                                [
                                    'attribute'=>'foto',
                                    'format'=>'raw',
                                    'value'=> function($model) {
                                        $modal = Html::img(Yii::getAlias('@imgBackend/team/'.$model->foto),['width'=>200,'height'=>200]);




                                        return $modal;
                                    }
                                ],
                                'facebook_link',
                                'github_link',
                                'twitter_link',
            'created_at:datetime',
            'updated_at:datetime',

                            ],
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
