<?php
/**
 * Created by PhpStorm.
 * User: mazayarizda
 * Date: 04/04/2018
 * Time: 20:15
 */
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


$this->title = 'Semua Berita';
$this->params['breadcrumbs'][] = $this->title;
?>


<section class="blog-style-one">
    <div class="thm-container">
        <div class="row">

            <?php foreach ($model as $berita):?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-blog-style-one">
                    <div class="img-box">
                        <?= Html::img(Yii::getAlias('@imgBackend/berita/'.$berita->gambar_berita),['alt'=>'Gambar Berita','height'=>244, 'width'=>370])?>
                       <?=Html::a('+',\yii\helpers\Url::to(['berita/view','id'=>$berita->id_berita]),['class'=>'read-more'])?>
                        <div class="date-box">
                            <?=Html::encode(\Carbon\Carbon::createFromTimestampUTC($berita->created_at)->format('d M')
                            )?>
                        </div><!-- /.date-box -->
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <?=Html::a('<h3>'.$berita->judul_berita.'</h3>',\yii\helpers\Url::to(['berita/view','id'=>$berita->id_berita]))?>
                        <p><?=$berita->inti_berita?></p>
                    </div><!-- /.text-box -->
                </div><!-- /.single-blog-style-one -->
            </div><!-- /.col-md-4 -->
            <?php endforeach;?>
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.blog-style-one -->



