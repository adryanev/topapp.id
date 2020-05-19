<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;

$this->title = 'Daftar';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="inner-banner">
    <div class="thm-container">
        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'class'=>'breadcumb'
            ]
        ) ?>

        <h3><?=$this->title?></h3>
    </div><!-- /.thm-container -->
</div><!-- /.inner-banner -->


<section class="contact-style-one bg-style-one">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="site-signup center">
                    <h1><?= Html::encode($this->title) ?></h1>

                    <p>Silahkan isi form berikut untuk mendaftar:</p>

                    <div class="row center">
                        <div class="col-lg-12">
                            <?php $form = ActiveForm::begin(['id' => 'form-signup','options'=>['class'=>'contact-form']]); ?>

                            <?= $form->field($model, 'nama')->textInput(['autofocus' => true]) ?>
                            <?= $form->field($model, 'username')->textInput() ?>


                            <?= $form->field($model, 'email') ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>
                            <?= $form->field($model,'instansi')->textInput()?>
                            <?=$form->field($model,'job')->textInput()?>

                            <div class="form-group">
                                <?= Html::submitButton('Daftar', ['name' => 'signup-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.contact-style-one -->


