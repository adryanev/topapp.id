<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tag */

$this->title = 'Update Tag';
$this->params['breadcrumbs'][] = ['label' => 'Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="tag-update">

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>

    </div><!-- end col -->
</div>

