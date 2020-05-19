<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tag */

$this->title = $model->nama_tag;
$this->params['breadcrumbs'][] = ['label' => 'Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
if(Yii::$app->session->hasFlash('success')){
    Yii::$app->session->getFlash('success');
}
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>

            <div class="tag-view">

                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Apakah anda yakin menghapus item ini?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                       // 'id_tag',
                        'nama_tag',
                        'count',
                        'created_at:datetime',
                        'updated_at:datetime',
                    ],
                ]) ?>

            </div>

        </div>
    </div><!-- end col -->

</div>

