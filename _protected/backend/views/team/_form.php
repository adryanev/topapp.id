<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Team */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'facebook_link')->textInput() ?>
    <?= $form->field($model, 'github_link')->textInput() ?>
    <?= $form->field($model, 'twitter_link')->textInput() ?>

    <?= $form->field($model, 'foto')->widget(\kartik\file\FileInput::className(),[
            'pluginOptions'=>[
                'initialPreview'=> isset($model->foto)? Yii::$app->urlManager->getBaseUrl().'/images/team/'.$model->foto: false,
                'initialPreviewAsData'=>true,
                'initialCaption'=>$model->foto,
                'initialPreviewConfig' => [
                    ['caption' => $model->foto],
                ],
                'overwriteInitial'=>true,
                'showUpload'=>false,
            ]
    ]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success waves-effect waves-light']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
