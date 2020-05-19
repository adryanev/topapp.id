<?php
/**
 * Created by PhpStorm.
 * User: Adryan Eka Vandra
 * Date: 4/14/2018
 * Time: 10:55 AM
 */

$profil = \common\models\Profil::findOne(1);
?>

<section class="faq-style-one faq-page">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-faq-style-one">
                    <i class="fa fa-question"></i>
                    <h3 class="text-capitalize">Pembelian anda berhasil</h3>
                    <p class="text-dark">Anda telah berhasil melakukan pembelian, Silahkan Chat Admin melalui Whatsapp: <?=$profil->hp?> dengan format (TRANSAKSI#<?=Yii::$app->user->getId()?>#<?=$idOrder?>)</p>
                   <!-- /.single-faq-style-one -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.col-md-4 -->
    </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.faq-style-one -->

