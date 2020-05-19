<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TrainingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="training-search">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title"><?= Html::encode($this->title) ?></h4>

                    <div class="row">
                        <div class="col-md-12">
                            <?php $form = ActiveForm::begin([
                            'action' => ['index'],
                            'method' => 'get',
                                                        ]); ?>

                                <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama_training') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'foto') ?>

    <?= $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

                            <div class="form-group">
                                <?= Html::submitButton('Search', ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                                <?= Html::resetButton('Reset', ['class' => 'btn btn-default waves-effect waves-light']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
