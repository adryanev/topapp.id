<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 26/02/19
 * Time: 20:40
 */

/* @var $this \yii\web\View */
/* @var $content string */

\frontend\assets\BinmpAsset::register($this);

use yii\helpers\Html; ?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8" />
    <title><?= Html::encode($this->title)?></title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="<?=Yii::getAlias('@imgFrontend/logo.png')?>">

    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Top aplikasi" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120235453-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-120235453-1');
    </script>
    <?= Html::csrfMetaTags() ?>

    <?php $this->head() ?>

</head>

<body>
<?php $this->beginBody() ?>
<div class="preloader"><div class="spinner"></div></div> <!-- /.preloader -->

<?= $this->render('header') ?>
<?= $content ?>
<?= $this->render('footer')?>

<?php $this->endBody()?>

</body>
</html>
<?php $this->endPage() ?>
