<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "<span class='glyphicon glyphicon-user form-control-feedback'></span>{input}"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "<span class='glyphicon glyphicon-lock form-control-feedback'></span>{input}"
];
?>


<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="text-center">
        <a href="/admin/" class="logo"><span>TOPAPP<span>.ID</span></span></a>
        <h5 class="text-muted m-t-0 font-600">Admin Backend.</h5>
    </div>
    <div class="m-t-40 card-box">
        <div class="panel-body">
            <h1><?= Html::encode($this->title) ?></h1>


                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form
                        ->field($model, 'username', $fieldOptions1)
                        ->label(false)
                        ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

                    <?= $form
                        ->field($model, 'password', $fieldOptions2)
                        ->label(false)
                        ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class'=>['btn btn-primary btn-bordred col-xs-12'], 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>


        </div>
    </div>
    <!-- end card-box-->
</div>
<!-- end wrapper page -->



<script>
    var resizefunc = [];
</script>
<div class="site-login">

</div>
