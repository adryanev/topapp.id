<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
$this->context->layout = '404';
$this->title = $name;
?>
<div class="site-error">

    <div class="col-md-7 col-sm-6 col-xs-12">
        <h3> <?= nl2br(Html::encode($message)) ?></h3>
        <?= Html::a('Kembali',Yii::$app->getHomeUrl(),['class'=>'error-btn'])?>
    </div><!-- /.col-md-7 -->
    <div class="col-md-5 col-sm-6 col-xs-12">
        <?=Html::img(Yii::getAlias('@web/img/404-man.png'),['alt'=>'Gambar 404'])?>
    </div><!-- /.col-md-5 -->

</div>
