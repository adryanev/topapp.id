<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 26/02/19
 * Time: 21:03
 */

$profil = \common\models\Profil::findOne(1);
?>


<div class="footer-top">
    <div class="thm-container clearfix">
        <div class="logo pull-left">
            <?= \yii\helpers\Html::img(Yii::getAlias('@imgBackend/profil/'.$profil->foto_profil), ['alt' => 'TopApp.id', 'height' => '25%', 'width' => '25%']) ?>
        </div><!-- /.logo pull-left -->
        <div class="social pull-right">
            <a href="#" class="fab fa-twitter"></a><!--
            --><a href="#" class="fab fa-facebook-f"></a><!--
            --><a href="#" class="fab fa-instagram"></a><!--
            --><a href="#" class="fab fa-google-plus-g"></a>
                 <a href="#" class="fab fa-whatsapp"></a>
        </div><!-- /.social pull-right -->
    </div><!-- /.thm-container clearfix -->
</div><!-- /.footer-top -->
<div class="footer-bottom text-center">
    <div class="thm-container">
        <p>&copy; copyright <?=\Carbon\Carbon::now()->format('Y')?> by TopApp.id</p>
    </div><!-- /.thm-container -->
</div><!-- /.footer-bottom -->

<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>
            </span>
        </div>
    </div>
</div>

<div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>
