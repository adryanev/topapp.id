<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\kategori */

$this->title = $model->id_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="kategori-view">

            <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                <?php
                yii\bootstrap\Modal::begin(['id' =>'modal']);
                yii\bootstrap\Modal::end();
                ?>

                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id_kategori], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id_kategori], [
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
            'id_kategori',
            'nama_kategori',
            'created_at',
            'updated_at',
        ],
    ]) ?>

            </div>
        </div>
    </div>
</div>