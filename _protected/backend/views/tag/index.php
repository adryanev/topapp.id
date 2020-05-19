<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TagSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tag';
$this->params['breadcrumbs'][] = $this->title;
if(Yii::$app->session->hasFlash('success'))
{
   Yii::$app->session->getFlash('success');
}
?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>


                        <?php Pjax::begin(); ?>
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <p>
                            <?= Html::a('Create Tag', ['create'], ['class' => 'btn btn-success']) ?>
                        </p>

                        <?= \fedemotta\datatables\DataTables::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn','header' => 'No'],

                                //'id_tag',
                                'nama_tag',
                                'count',
                                'created_at:datetime',
                                'updated_at:datetime',

                                ['class' => 'yii\grid\ActionColumn','header' => 'Aksi'],
                            ],
                            'clientOptions' => [
                                'responsive'=>true,
                                'info'=>true,

                            ],

                        ]); ?>
                        <?php Pjax::end(); ?>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->

