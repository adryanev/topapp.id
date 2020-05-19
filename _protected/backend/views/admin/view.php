<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Admin */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

            <h2 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h2>

            <div class="admin-view">
                <?php
                yii\bootstrap\Modal::begin(['id' =>'modal']);
                yii\bootstrap\Modal::end();
                ?>

                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
                            'format'=>'raw',
                            'value'=> function($model) {
                                $modal = '
                                    <button class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#photo-' . $model->id . '"><img src="/admin/images/avatar/' . $model->avatar . '" width="30px" height="30px"></button>
                                    
                                    <div id="photo-' . $model->id . '" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="#modal-' . $model->id . '" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="modal-' . $model->id . '">' . $model->username . '</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <img class="center-block" src="/admin/images/avatar/' . $model->avatar . '"  width="75%" height="75%"/>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                </div>
                                            </div><!— /.modal-content —>
                                        </div><!— /.modal-dialog —>
                                    </div><!— /.modal —>
                                ';
                                return $modal;
                            }
                        ],
                        'tempat_lahir',
                        'tanggal_lahir:date',
                        'alamat',
                        'status',
                        'created_at',
                        'updated_at',
                    ],
                ]) ?>

            </div>

        </div>
    </div><!-- end col -->

</div>

