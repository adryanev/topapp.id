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

$this->title = $model->nama_training;
$this->params['breadcrumbs'][] = ['label' => 'Produk', 'url' => ['produk/training']];
$this->params['breadcrumbs'][] = $this->title;
?>




<section class="blog-details-page">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-8">
                <div class="single-blog-details-content">
                    <div class="featured-img-box">
                        <?= Html::img(Yii::getAlias('@imgBackend/training/'.$model->foto),['alt'=>'Gambar Training','height'=>434, 'width'=>770])?>
                        <div class="date-box">
                            <?=Html::encode(\Carbon\Carbon::createFromTimestampUTC($model->created_at)->format('d M')) ?>
                        </div><!-- /.date-box -->
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <h3><?=$this->title?></h3>
                        <div class="meta-info">
                            <a href="#"><?=$admin->nama?></a>
                            <span class="sep">-</span>
                            <?=$model->tagLinks?>
                        </div><!-- /.meta-info -->
                        <?=$model->deskripsi?>
                    </div><!-- /.text-box -->
                    <div class="author-box clearfix">
                        <div class="img-box">
                            <?= Html::img(Yii::getAlias('@imgBackend/avatar/'.$admin->avatar),['alt'=>'Gambar Penerbit Berita'])?>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <h3><?=$admin->nama?></h3>
                            <p>Pengelola Situs TopApp.id</p>
                        </div><!-- /.text-box -->
                    </div><!-- /.author-box -->

                </div><!-- /.single-blog-details-content -->
            </div><!-- /.col-md-8 -->
            <div class="col-md-4">
                <div class="sidebar sidebar-right">
                    <div class="single-sidebar recent-post-sidebar">
                        <div class="title">
                            <h3>Pelatihan Terbaru</h3>
                        </div><!-- /.title -->
                        <?php foreach ($latestTraining as $item):?>
                            <div class="single-recent-post">
                                <div class="img-box">
                                    <?= Html::img(Yii::getAlias('@imgBackend/training/'.$item->foto),['alt'=>'gambar training',
                                        'height'=>59, 'width'=>59])?>
                                </div><!-- /.img-box -->
                                <div class="text-box">
                                    <?=Html::a('<h4>'.$item->nama_training.'</h4>',\yii\helpers\Url::to(['training/view','id'=>$item->id]))?>
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


