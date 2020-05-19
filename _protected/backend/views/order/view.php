<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Order */

$this->title = 'Detail Order #'.$idOrder;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="detail-order-view">

                <h1><?= Html::encode($this->title) ?></h1>

		        <?= \fedemotta\datatables\DataTables::widget([
			        'dataProvider' => $model,
			        //'filterModel' => $searchModel,
			        'columns' => [
				        ['class' => 'yii\grid\SerialColumn','header' => 'No'],
				        'id_order',
                        [
                                'attribute'=>'id_produk',
                                'format' => 'raw',
                                'value'=> function($model){
		                            $produk = \common\models\Produk::findOne($model->id_produk);
		                            $value = $produk->nama_produk;
		                            return $value;
                                }
                        ],

			        ],
		        ]); ?>

            </div>

