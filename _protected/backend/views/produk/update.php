<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $produk common\models\Produk */
/* @var $detail_produk common\models\DetailProduk */

$this->title = 'Update Produk';
$this->params['breadcrumbs'][] = ['label' => 'Produk', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $produk->id_produk, 'url' => ['view', 'id' => $produk->id_produk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="produk-update">

                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>

                <?= $this->render('_form', [
                    'produk' => $produk,
                ]) ?>

            </div>
        </div>

    </div><!-- end col -->
</div>

