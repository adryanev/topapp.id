<?php
/**
 * Created by PhpStorm.
 * User: mazayarizda
 * Date: 04/04/2018
 * Time: 20:15
 */
use common\models\Berita;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


$this->title = 'Tag '.$tag->nama_tag;
$this->params['breadcrumbs'][] = $this->title;
?>


<section class="blog-style-one">
    <div class="thm-container">
        <div class="row">

            <?php foreach ($model as $tag_berita):?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog-style-one">
                        <div class="img-box">
                            <?= Html::img(Yii::getAlias('@imgBackend/berita/'.$tag_berita->berita->gambar_berita),['alt'=>'Gambar Berita','height'=>244, 'width'=>370])?>
                            <?=Html::a('+',\yii\helpers\Url::to(['berita/view','id'=>$tag_berita->berita->id_berita]),['class'=>'read-more'])?>
                            <div class="date-box">
                                <?=Html::encode(\Carbon\Carbon::createFromTimestampUTC($tag_berita->berita->created_at)->format('d M')
                                )?>
                            </div><!-- /.date-box -->
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <?=Html::a('<h3>'.$tag_berita->berita->judul_berita.'</h3>',\yii\helpers\Url::to(['berita/view','id'=>$tag_berita->berita->id_berita]))?>
                            <p><?=$tag_berita->berita->inti_berita?></p>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-blog-style-one -->
                </div><!-- /.col-md-4 -->
            <?php endforeach;?>
            <?php foreach ($modelTraining as $tag_training):?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog-style-one">
                        <div class="img-box">
                            <?= Html::img(Yii::getAlias('@imgBackend/training/'.$tag_training->training->foto),['alt'=>'Gambar training','height'=>244, 'width'=>370])?>
                            <?=Html::a('+',\yii\helpers\Url::to(['training/view','id'=>$tag_training->training->id]),['class'=>'read-more'])?>
                            <div class="date-box">
                                <?=Html::encode(\Carbon\Carbon::createFromTimestampUTC($tag_training->training->created_at)->format('d M')
                                )?>
                            </div><!-- /.date-box -->
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <?=Html::a('<h3>'.$tag_training->training->nama_training.'</h3>',\yii\helpers\Url::to(['training/view','id'=>$tag_training->training->id]))?>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-blog-style-one -->
                </div><!-- /.col-md-4 -->
            <?php endforeach;?>

        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.blog-style-one -->



