<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\profil */

$this->title = 'Create Profil';
$this->params['breadcrumbs'][] = ['label' => 'Profil', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="profil-create">

                <h4 class="header-title m-t-0 m-b-30"><?= Html::encode($this->title) ?></h4>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>
