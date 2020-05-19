<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;

$this->title = 'Login';
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
            <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="site-login">

                    <h4>Silahkan login untuk melihat detail produk.</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php $form = ActiveForm::begin(['id' => 'login-form','options'=>['class'=>'contact-form']]); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <div style="color:#999;margin:1em 0">
                               Jika kamu lupa password, kamu bisa <?= Html::a('reset.', ['site/request-password-reset']) ?>.
                            </div>


                            <div style="color:#999;margin:1em 0">
                                Tidak punya akun? <?= Html::a('Daftar disini', ['site/signup']) ?>.
                            </div>

                            <div class="form-group">
                                <?= Html::submitButton('Login', ['name' => 'login-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.contact-style-one -->






