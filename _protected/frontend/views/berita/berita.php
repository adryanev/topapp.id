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

$this->title = $berita->judul_berita;
$this->params['breadcrumbs'][] = ['label' => 'Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>




<section class="blog-details-page">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-8">
                <div class="single-blog-details-content">
                    <div class="featured-img-box">
                        <?= Html::img(Yii::getAlias('@imgBackend/berita/'.$berita->gambar_berita),['alt'=>'Gambar Berita','height'=>434, 'width'=>770])?>
                        <div class="date-box">
                            <?=Html::encode(\Carbon\Carbon::createFromTimestampUTC($berita->created_at)->format('d M')) ?>
                        </div><!-- /.date-box -->
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <h3><?=$this->title?></h3>
                        <div class="meta-info">
                            <a href="#"><?=$berita->penerbitBerita->nama?></a>
                            <span class="sep">-</span>
                            <?=$berita->tagLinks?>
                        </div><!-- /.meta-info -->
                        <?=$berita->isi_berita?>
                    </div><!-- /.text-box -->
                    <div class="author-box clearfix">
                        <div class="img-box">
                            <?= Html::img(Yii::getAlias('@imgBackend/avatar/'.$berita->penerbitBerita->avatar),['alt'=>'Gambar Penerbit Berita'])?>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <h3><?=$berita->penerbitBerita->nama?></h3>
                            <p>Pengelola Situs TopApp.id</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.author-box -->

                </div><!-- /.single-blog-details-content -->
            </div><!-- /.col-md-8 -->
            <div class="col-md-4">
                <div class="sidebar sidebar-right">
                    <div class="single-sidebar recent-post-sidebar">
                        <div class="title">
                            <h3>Berita Terbaru</h3>
                        </div><!-- /.title -->
                        <?php foreach ($latestBerita as $item):?>
                            <div class="single-recent-post">
                                <div class="img-box">
                                    <?= Html::img(Yii::getAlias('@imgBackend/berita/'.$item->gambar_berita),['alt'=>'gambar berita',
                                        'height'=>59, 'width'=>59])?>
                                </div><!-- /.img-box -->
                                <div class="text-box">
                                    <?=Html::a('<h4>'.$item->judul_berita.'</h4>',\yii\helpers\Url::to(['berita/view','id'=>$item->id_berita]))?>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-recent-post -->


                        <?php endforeach;?>


                                            </div><!-- /.single-sidebar recent-post-sidebar -->
                    <div class="single-sidebar categories-sidebar">
                        <div class="title">
                            <h3>Terbitan terbaru</h3>
                        </div><!-- /.title -->
                        <ul class="tags-lists">
                            <?php foreach ($recentPost as $tag): ?>
                            <li><?= Html::a($tag->nama_tag,\yii\helpers\Url::to(['tag/view','id'=>$tag->id
                                ])) ?></li>
                            <?php endforeach; ?>

                        </ul><!-- /.tags-lists -->
                    </div><!-- /.single-sidebar tags-sidebar -->
                </div><!-- /.sidebar sidebar-right -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.blog-details-page -->


