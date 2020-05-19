<?php
/**
 * Created by PhpStorm.
 * User: Adryan Eka Vandra
 * Date: 4/13/2018
 * Time: 9:19 PM
 */

use yii\helpers\Html;

$this->title = 'Transaksi';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="faq-style-one faq-page">
    <div class="thm-container">
        <div class="row">
            <div class="title"><h3>Transaksi Pending</h3></div>

            <?php if (empty($transaksiPending)): ?>
                <?= 'Tidak ada item' ?>
            <?php else: ?>

                <?php foreach ($transaksiPending as $transaksi): ?>

                <?php $detailOrder = \common\models\DetailOrder::find()->where(['id_order'=>$transaksi->id_order])->all(); ?>
                    <div class="col-md-12">
                        <div class="single-faq-style-one">
                            <i class="fas fa-list"></i>
                            <?=Html::a('<h3>Transaksi #'.$transaksi->id_order.'</h3>',\yii\helpers\Url::to(['transaksi/view','id'=>$transaksi->id_order]))?>

                            <ol>

                                <?php foreach ($detailOrder as $detail):  ?>
                                    <li><?=$detail->produk->nama_produk?></li>
                                <?php endforeach;?>
                            </ol>


                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="row">
            <div class="title"><h3>Transaksi Sukses</h3></div>

            <?php if (empty($transaksiSukses)): ?>
                <?= 'Tidak ada item' ?>
            <?php else: ?>

                <?php foreach ($transaksiSukses as $transaksi): ?>

                    <?php $detailOrder = \common\models\DetailOrder::find()->where(['id_order'=>$transaksi->id_order])->all(); ?>
                    <div class="col-md-12">
                        <div class="single-faq-style-one">
                            <i class="fas fa-list"></i>
                            <?=Html::a('<h3>Transaksi #'.$transaksi->id_order.'</h3>',\yii\helpers\Url::to(['transaksi/view','id'=>$transaksi->id_order]))?>

                            <ol>

                                <?php foreach ($detailOrder as $detail):  ?>
                                    <li><?=$detail->produk->nama_produk?></li>
                                <?php endforeach;?>
                            </ol>


                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
</section>

