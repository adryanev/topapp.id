<?php
/**
 * Created by PhpStorm.
 * User: Adryan Eka Vandra
 * Date: 4/13/2018
 * Time: 9:19 PM
 */

use yii\helpers\Html;

$this->title = 'Cart';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="faq-style-one faq-page">
    <div class="thm-container">
        <div class="row">
            <?php if (empty($cart)): ?>
                <?= 'Tidak ada item' ?>
            <?php else: ?>

            <?php foreach ($cart
            as $key => $qty): ?>
            <div class="col-md-12">
                <div class="single-faq-style-one">
                    <?php
                    $dataItem = \common\models\Produk::findOne($key);
                    ?>
                    <h3>                                        <?= $dataItem->nama_produk ?>
                    </h3>

                    <?= Html::a('<i class="fa fa-trash"></i>', ['cart/remove-cart', 'id' => $dataItem->id_produk]) ?>


                </div>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= Html::a('<i class="fa fa-arrow-left"></i> Lanjutkan Belanja', ['produk/software'], ['class' => 'btn btn-success']) ?>
            </div>
            <div class="col-md-6 text-right">

                <?= Html::a('<i class="fa fa-credit-card"></i> Checkout', ['cart/checkout'], ['class' => empty($cart) ? 'btn btn-primary btn-disabled' : 'btn btn-primary', 'disabled' => empty($cart) ? true : false, 'style' => empty($cart) ? 'display:none' : '']) ?>
            </div>



        </div>

</section>

