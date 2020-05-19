<?php
/**
 * Created by PhpStorm.
 * User: Adryan Eka Vandra
 * Date: 4/13/2018
 * Time: 9:19 PM
 */

use yii\helpers\Html;

$this->title = 'Transaksi #'.$order->id_order;
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="faq-style-one faq-page">
    <div class="thm-container">
        <div class="row">
            <div class="title"><h3>Produk</h3></div>

                <?php foreach ($detailOrder as $item): ?>

                    <div class="col-md-12">
                        <div class="single-faq-style-one">
                            <i class="fas fa-list"></i>
                            <h3><?= $item->produk->nama_produk ?></h3>
                            <?php if($order->status === 'true'):?>
                            <div class="row">
                                <div class="col-md-3">
                                    <?=Html::a('Rancangan',Yii::getAlias('@uploadBackend/rancangan/'.$item->produk->rancangan),['class'=>'col-md-12 btn btn-success'])?>

                                </div>
                                <div class="col-md-3">
                                    <?=Html::a('Panduan',Yii::getAlias('@uploadBackend/manual/'.$item->produk->rancangan),['class'=>'col-md-12 btn btn-info'])?>

                                </div>
                                <div class="col-md-3">
                                    <?=Html::a('Demo',$item->produk->demo,['class'=>'col-md-12 btn btn-warning'])?>

                                </div>
                            </div>
                            <?php endif;?>

                        </div>
                    </div>
                <?php endforeach; ?>
        </div>

</section>

