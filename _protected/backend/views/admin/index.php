<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\AdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>


            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


            <?= \fedemotta\datatables\DataTables::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn','header' => 'No'],

                    //'id',
                    'username',
                    'email:email',
                    'nama',
                    //'password_hash',
                    //'password_reset_token',
                    //'auth_key',
                    //'avatar',
                    //'tempat_lahir',
                    //'tanggal_lahir',
                    //'alamat',
                    'status',
                    //'created_at',
                    //'updated_at',
                ],
            ]); ?>
            <?php Pjax::end(); ?>
        </div>
    </div><!-- end col -->

</div>


