<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
if(Yii::$app->session->hasFlash('success'))
{
    Yii::$app->session->getFlash('success');
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="user-index">

                <?php
                yii\bootstrap\Modal::begin(['id' =>'modal']);
                yii\bootstrap\Modal::end();
                ?>
                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>
                <?php Pjax::begin(); ?>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?= \fedemotta\datatables\DataTables::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn','header' => 'No'],

                       // 'id',
                        'username',
                        'email:email',
                        'nama',
                       // 'password_hash',
                        //'password_reset_token',
                        //'auth_key',
                        [
                            'attribute'=>'avatar',
                            'format'=>['image',['height'=>50, 'width'=>'50']],
                            'value'=> function($model){
                                return  $model->avatar !== null? Yii::getAlias('@imgBackend/user/'.$model->avatar) : null;
                            }

                        ],
                        //'tempat_lahir',
                        //'tanggal_lahir',
                        //'alamat',
                        //'job',
                        //'instansi',
                        //'status',
                        //'created_at',
                        //'updated_at',

                        ['class' => 'yii\grid\ActionColumn','header' => 'Aksi'],
                    ],
                ]); ?>
                <?php Pjax::end(); ?>
            </div>
        </div>

    </div><!-- end col -->
</div>

