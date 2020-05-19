<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\kategori */

$this->title = 'Update Kategori : '. $model->nama_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategori, 'url' => ['view', 'id' => $model->id_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="kategori-update">

                  <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>
