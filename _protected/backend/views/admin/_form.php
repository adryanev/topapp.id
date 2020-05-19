<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">

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



	<?= $form->field($model, 'avatar')->widget(FileInput::className(),[
		'options'=>['accept'=>'image/*','multiple'=>false],
		'pluginOptions' => [
			'initialPreview'=> isset($model->avatar)?Yii::$app->urlManager->getBaseUrl().'/images/avatar/'.$model->avatar: false,
			'initialPreviewAsData'=>true,
			'initialCaption'=>isset($model->avatar)? $model->avatar : false,
			'initialPreviewConfig' => [
				['caption' => $model->avatar],
			],
			'overwriteInitial'=>true,
			'showUpload'=>false,

		],
	]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
