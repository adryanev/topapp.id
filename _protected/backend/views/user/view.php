<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="user-view">

                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                <?php
                yii\bootstrap\Modal::begin(['id' =>'modal']);
                yii\bootstrap\Modal::end();
                ?>
                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'username',
                        'email:email',
                        'nama',
                        'password_hash',
                        'password_reset_token',
                        'auth_key',
                        [
                            'attribute'=>'avatar',
                            'format'=>['image',['width'=>50,'height'=>50]],
                            'value'=> $model->avatar !== null? Yii::getAlias('@imgBackend/user/'.$model->avatar) : null
                        ],
                        'tempat_lahir',
                        'tanggal_lahir:date',
                        'alamat',
                        'job',
                        'instansi',
                        ['attribute'=>'status',
                            'value'=> $model->status === 10? 'Aktif':'Tidak Aktif'],
                        'created_at:datetime',
                        'updated_at:datetime',
                    ],
                ]) ?>

            </div>
        </div>

    </div><!-- end col -->
</div>
