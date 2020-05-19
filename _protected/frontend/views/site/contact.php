<?php
/**
 * Created by PhpStorm.
 * User: mazayarizda
 * Date: 01/03/2018
 * Time: 12:32
 */
/* @var $this \yii\web\View */

$this->title = 'Kontak';
$this->params['breadcrumbs'][] = $this->title;
\frontend\assets\MapAsset::register($this);
?>
<!-- /banner_bottom_agile_info -->
<section class="contact-style-one">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="contact-infos">
                    <div class="single-contact-info">
                        <?=\yii\helpers\Html::img(Yii::getAlias('@imgBackend/profil/'.$profil->foto_profil))?>
                    </div>

                </div>

            </div><!-- /.col-md-7 -->
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="contact-infos">
                    <div class="title">
                        <h3>Ada Pertanyaan? Silahkan kontak kami.</h3>
                    </div><!-- /.title -->
                    <div class="single-contact-info">
                        <h4>Email <span><i class="fas fa-envelope"></i></span></h4>
                        <p><?=$profil->email?></p>
                    </div>
                    <div class="single-contact-info">
                        <h4>Alamat <span><i class="fas fa-map-marker"></i></span></h4>
                        <p><?=$profil->alamat?></p>
                    </div>
                    <div class="single-contact-info">
                        <h4>Nomor Telepon <span><i class="fas fa-phone"></i></span></h4>
                        <p><?=$profil->hp?></p>
                    </div>
                    <div class="single-contact-info">
                        <h4>WhatsApp <span><i class="fab fa-whatsapp"></i></span> </h4>
                        <p><?=$profil->hp?></p>
                    </div>
                </div><!-- /.contact-infos -->
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.contact-style-one -->

<div
        class="google-map"
        id="contact-google-map"
        data-map-lat="0.4673939"
        data-map-lng="101.3559124"
        data-icon-path="<?=Yii::getAlias('@imgFrontend/map-marker.png')?>"
        data-map-title="Pekanbaru, Riau, Indonesia"
        data-map-zoom="16"
        data-markers='{
            "marker-1": [0.467595, 101.356150, "<h4>Kantor Utama</h4><p>TopApp.id</p>"]        }'>

</div>


