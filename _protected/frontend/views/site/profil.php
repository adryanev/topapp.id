<?php
use backend\models\Berita;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/**
 * Created by PhpStorm.
 * User: mazayarizda
 * Date: 05/04/2018
 * Time: 17:02
 */

$this->title = 'Profil';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="blog-details-page">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-blog-details-content">
                    <div class="featured-img-box">
                        <?= Html::img(Yii::getAlias('@imgBackend/profil/'.$model->foto_profil),['alt'=>'Gambar profil','height'=>600, 'width'=>770])?>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <?=$model->isi_profil?>
                    </div><!-- /.text-box -->

                </div><!-- /.single-blog-details-content -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.blog-details-page -->
<section class="team-style-one team-page">
    <div class="thm-container">

        <div class="title"><h3>Anggota Tim</h3></div>
        <div class="row">
            <?php foreach ($team as $member):?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team-style-one">
                    <h3><?=$member->nama_lengkap?></h3>
                    <p><?=$member->jabatan?></p>
                    <div class="social">
                        <?=Html::a('',$member->facebook_link,['class'=>'fab fa-facebook'])?>
                        <?=Html::a('',$member->github_link,['class'=>'fab fa-github'])?>
                        <?=Html::a('',$member->twitter_link,['class'=>'fab fa-twitter'])?>
                    </div><!-- /.social -->
                    <?=Html::img(Yii::getAlias('@imgBackend/team/'.$member->foto),['height'=>161,'width'=>161])?>
                </div><!-- /.single-team-style-one -->
            </div><!-- /.col-md-3 col-sm-6 col-xs-12 -->

            <?php endforeach;?>

        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.team-style-one -->


