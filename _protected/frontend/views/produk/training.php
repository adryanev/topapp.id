<?php
/**
 * Created by PhpStorm.
 * User: mazayarizda
 * Date: 04/04/2018
 * Time: 20:15
 */
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


$this->title = 'Training';
$this->params['breadcrumbs'][] = $this->title;
?>


<section class="blog-style-one">
    <div class="thm-container">
        <div class="row">

            <?php foreach ($model as $training):?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog-style-one">
                        <div class="img-box">
                            <?= Html::img(Yii::getAlias('@imgBackend/training/'.$training->foto),['alt'=>'Gambar Training','height'=>244, 'width'=>370])?>
                            <?=Html::a('+',\yii\helpers\Url::to(['training/view','id'=>$training->id]),['class'=>'read-more'])?>
                            <div class="date-box">
                                <?=Html::encode(\Carbon\Carbon::createFromTimestampUTC($training->created_at)->format('d M')
                                )?>
                            </div><!-- /.date-box -->
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <?=Html::a('<h3>'.$training->nama_training.'</h3>',\yii\helpers\Url::to(['training/view','id'=>$training->id]))?>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-blog-style-one -->
                </div><!-- /.col-md-4 -->
            <?php endforeach;?>
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.blog-style-one -->



