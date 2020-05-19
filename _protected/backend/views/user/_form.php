<?php

use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php \yii\bootstrap\Modal::begin()?>
    <?php \yii\bootstrap\Modal::end()?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput() ?>

    <?= $form->field($model, 'username')->textInput() ?>

    <?= $form->field($model, 'password_hash')->passwordInput()->label('Password') ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'tempat_lahir')->textInput() ?>
    <?= $form->field($model, 'tanggal_lahir')->widget(\kartik\date\DatePicker::className(),[
            'convertFormat' => true,
        'type'=>\kartik\date\DatePicker::TYPE_INPUT,
        'pluginOptions' => [
                'format'=>'yyyy-MM-dd'
        ]]) ?>
    <?= $form->field($model, 'alamat')->textarea(['cols'=>6]) ?>

    <?= $form->field($model, 'job')->textInput() ?>

    <?= $form->field($model, 'instansi')->textInput() ?>


    <?= $form->field($model, 'avatar')->widget(FileInput::className(),[
        'options'=>['accept'=>'image/*','multiple'=>false],
        'pluginOptions' => [
            'initialPreview'=> isset($model->avatar)? Yii::$app->urlManager->getBaseUrl().'images/avatar/'.$model->avatar: false,
            'initialPreviewAsData'=>true,
            'initialCaption'=>$model->avatar,
            'initialPreviewConfig' => [
                ['caption' => $model->avatar],
            ],
            'overwriteInitial'=>true,
            'showUpload'=>false,

        ],
    ]) ?>

    <?php
        if(!$model->isNewRecord){
            $id = [
                ['id'=>0,'nama'=>'Tidak Aktif'],
                ['id'=>10,'nama'=>'Aktif']
            ];
            $data = \yii\helpers\ArrayHelper::map($id,'id','nama');
            echo $form->field($model, 'status')->widget(Select2::className(),[
                'data' =>$data

            ]);
        }
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Save':'Perbarui', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
