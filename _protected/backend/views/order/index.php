<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
if (Yii::$app->session->hasFlash('success')) {
    Yii::$app->session->getFlash('success');
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="order-index">

                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>

                <?= \fedemotta\datatables\DataTables::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id_order',
                        'id_user',
                        'date_order:datetime',
                        'status',

                        ['class' => 'yii\grid\ActionColumn', 'header' => 'Aksi',
                            'template' => '{view} {verifikasi}',
                            'urlCreator' => function ($action, $model, $key, $index) {
                                if ($action === 'view') {
                                    $url = Url::toRoute(['order/view', 'id' => $model->id_order]);
                                    return $url;
                                }
                                if ($action === 'verifikasi') {
                                    $url = Url::toRoute(['order/verifikasi', 'id' => $model->id_order]);
                                    return $url;
                                }
                            },

                            'buttons' => [
                                'view' => function ($url, $model) {
                                    return Html::a('<i class="fa fa-eye"></i>', $url, ['class' => 'btn btn-primary btn-xs']);
                                },
                                'verifikasi' => function ($url, $model) {

                                    if ($model->status == 'false') return Html::a('<i class="fa fa-check"></i>', $url, ['class' => 'btn btn-success btn-xs','data-method'=>'POST']);
                                    else {
                                        return '';
                                    }
                                }

                            ]],
                    ],
                ]); ?>
            </div>
