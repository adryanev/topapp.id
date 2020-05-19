<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Admin */

$this->title = 'Update Admin';
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="admin-update">

                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>

    </div><!-- end col -->
</div>

