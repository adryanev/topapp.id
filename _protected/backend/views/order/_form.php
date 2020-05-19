<?php
use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php \yii\bootstrap\Modal::begin()?>
    <?php \yii\bootstrap\Modal::end()?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_produk')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'date_order')->widget(\kartik\date\DatePicker::className(),[
        'convertFormat' => true,
        'type'=>\kartik\date\DatePicker::TYPE_INPUT,
        'pluginOptions' => [
            'format'=>'yyyy-MM-dd'
        ]]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Save':'Perbarui', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
