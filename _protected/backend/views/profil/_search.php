<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProfilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_profil') ?>

    <?= $form->field($model, 'foto_profil') ?>

    <?= $form->field($model, 'isi_profil') ?>

    <?= $form->field($model, 'nama_app') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'hp') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'update_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
