<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProdukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_produk') ?>

    <?= $form->field($model, 'nama_produk') ?>

    <?= $form->field($model, 'developer') ?>

    <?= $form->field($model, 'deskripsi_produk') ?>

    <?= $form->field($model, 'fitur_produk') ?>

    <?php // echo $form->field($model, 'spesifikasi') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'video') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'added_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
