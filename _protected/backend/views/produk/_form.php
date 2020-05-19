<?php

use kartik\file\FileInput;
use kartik\select2\Select2;
use dosamigos\tinymce\TinyMce;
use sjaakp\taggable\TagEditor;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use common\models\Kategori;


/* @var $this yii\web\View */
/* @var $produk common\models\Produk */
/* @var $detail_produk common\models\DetailProduk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-form">

    <?php \yii\bootstrap\Modal::begin()?>
    <?php \yii\bootstrap\Modal::end()?>
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($produk, 'nama_produk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($produk, 'kategori_produk')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Kategori::find()->all(),'id_kategori','nama_kategori'),
        'options' => ['placeholder' => 'Pilih Kategori'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>

    <?= $form->field($produk, 'developer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($produk, 'deskripsi_produk')->widget(TinyMce::className(), [
        'options' => ['rows' => 8 ],
        'language' => 'en',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <?= $form->field($produk, 'fitur_produk')->widget(TinyMce::className(), [
        'options' => ['rows' => 8 ],
        'language' => 'en',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <?= $form->field($produk, 'spesifikasi')->widget(TinyMce::className(), [
        'options' => ['rows' => 8 ],
        'language' => 'en',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <?= $form->field($produk, 'demo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($produk, 'video')->textInput(['maxlength' => true]) ?>




        <?= $form->field($produk, 'manual_book')->widget(FileInput::className(),[
            'options'=>['accept'=>'*','multiple'=>false],
            'pluginOptions' => [
                'initialPreview'=> $produk->manual_book != null? Yii::getAlias('@uploadBackend/manual/'.$produk->manual_book) : false,
                'initialPreviewConfig' =>[
                       [ 'caption'=>$produk->manual_book,
                 'type' =>'pdf']
                ],
                'initialCaption'=>$produk->manual_book,
                'previewFileType' => 'any',
                'initialPreviewAsData'=>true,
                'overwriteInitial'=>true,
                'showUpload'=>false,


            ],
        ]) ; ?>

    <?= $form->field($produk, 'rancangan')->widget(FileInput::className(),[
        'options'=>['accept'=>'*','multiple'=>false],
        'pluginOptions' => [
            'initialPreview'=>$produk->rancangan != null? Yii::getAlias('@uploadBackend/rancangan/'.$produk->rancangan): false,
            'initialPreviewConfig' =>[
                ['caption'=>$produk->rancangan,
                    'type'=>'pdf']
            ],
            'initialCaption'=>$produk->rancangan,
            'previewFileType' => 'any',
            'overwriteInitial'=>true,
            'initialPreviewAsData'=>true,

            'showUpload'=>false,

        ],
    ]) ;?>

    <?= $form->field($produk, 'gambar')->widget(FileInput::className(),[
        'options'=>['accept'=>'image/*','multiple'=>false],
        'pluginOptions' => [
            'initialPreview'=> isset($produk->gambar)? Yii::getAlias('@imgBackend/produk/').$produk->gambar: false,
            'initialPreviewAsData'=>true,
            'initialCaption'=>$produk->gambar,
            'initialPreviewConfig' => [
                ['caption' => $produk->gambar],
            ],
            'overwriteInitial'=>true,
            'showUpload'=>false,

        ],
    ]) ?>




    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
