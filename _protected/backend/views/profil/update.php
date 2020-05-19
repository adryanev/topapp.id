<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\profil */

$this->title = 'Update Profil: '.$model->nama_app;
$this->params['breadcrumbs'][] = ['label' => 'Profil', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_app, 'url' => ['view', 'id' => $model->id_profil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="profil-update">

            <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
            </div>
        </div>
    </div>
</div>
