<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ProdukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produk';
$this->params['breadcrumbs'][] = $this->title;
if(Yii::$app->session->hasFlash('success'))
{
    Yii::$app->session->getFlash('success');
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="produk-index">

                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Create Produk', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?= \fedemotta\datatables\DataTables::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn','header' => 'No'],

                       // 'id_produk',
                        'nama_produk',
                        'developer',
                        //'deskripsi_produk:ntext',
                        //'fitur_produk',
                        //'spesifikasi',
                        //'video',
                        //'status',
                        //'added_by',
                        //'created_at',
                        //'updated_at',

                        ['class' => 'yii\grid\ActionColumn','header' => 'Aksi'],
                    ],
                ]); ?>
            </div>
        </div>

    </div><!-- end col -->
</div>

