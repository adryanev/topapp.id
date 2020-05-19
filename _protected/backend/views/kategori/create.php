<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\kategori */

$this->title = 'Create Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Kategori', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="kategori-create">

            <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

            </div>
        </div>
    </div>
</div>
