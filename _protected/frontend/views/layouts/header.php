<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 26/02/19
 * Time: 20:57
 */

use yii\helpers\Html;

$profil = \common\models\Profil::findOne(1);
?>


<header class="header header-home-one">
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="thm-container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target=".main-navigation" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </button>

                <a class="navbar-brand" href="<?= Yii::$app->getHomeUrl() ?>">
                    <!--Yii::getAlias('@imgBackend/topbanner.jpg') -->
                    <?= \yii\helpers\Html::img(Yii::getAlias('@imgBackend/profil/' . $profil->foto_profil), ['alt' => 'TopApp.id', 'height' => '25%', 'width' => '25%']) ?>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">

                <ul class="nav navbar-nav navigation-box">
                    <li>
                        <a href="#">Produk</a>
                        <ul class="sub-menu">
                            <li>
                                <?= \yii\helpers\Html::a('Software', ['produk/software']) ?>

                            </li>
                            <li>
                                <?= \yii\helpers\Html::a('Training', ['produk/training']) ?>

                            </li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li>

                        <?= \yii\helpers\Html::a('Tentang Kami', ['site/profil']) ?>
                    </li>

                    <li>
                        <a href="#">Blog</a>
                        <ul class="sub-menu right-align">
                            <li>
                                <?= \yii\helpers\Html::a('Berita', ['berita/index']) ?>

                            </li>
                            <li>
                                <?= \yii\helpers\Html::a('Kegiatan Kami', ['kegiatan/index']) ?>
                            </li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li>
                        <?= \yii\helpers\Html::a('Kontak', ['site/contact']) ?>

                    </li>
                    <li>
                        <?= \yii\helpers\Html::a('Panduan', ['site/how-to']) ?>
                    </li>
                    <li>
                        <?= \yii\helpers\Html::a(Yii::$app->getUser()->getIsGuest() ? 'Login' : Yii::$app->getUser()->getIdentity()->nama, ['site/login']) ?>
                        <?php if (!Yii::$app->getUser()->getIsGuest()) : ?>
                            <ul class="sub-menu">
                                <li>
                                    <?= \yii\helpers\Html::a('Profil', ['user/view']) ?>
                                </li>
                                <li>
                                    <?= \yii\helpers\Html::a('Cart', ['cart/index']) ?>
                                </li>
                                <li>
                                    <?= \yii\helpers\Html::a('Transaksi', ['transaksi/index']) ?>
                                </li>
                                <li>  <?= Html::a(
                                        'Sign out',
                                        ['/site/logout'],
                                        ['data-method' => 'post']
                                    ) ?></li>

                            </ul><!-- /.sub-menu -->
                        <?php endif; ?>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header><!-- /.header -->

