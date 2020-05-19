<?php

use yii\widgets\Breadcrumbs;

?>

<div class="inner-banner">
    <div class="thm-container">
        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>

        <h3><?=$this->title?></h3>
    </div><!-- /.thm-container -->
</div><!-- /.inner-banner -->