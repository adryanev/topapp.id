<?php

use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\kategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-form">

    <?php \yii\bootstrap\Modal::begin()?>
    <?php \yii\bootstrap\Modal::end()?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kategori')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Save':'Perbarui', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
