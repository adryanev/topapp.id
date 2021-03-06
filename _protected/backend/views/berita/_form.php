<?php

use dosamigos\tinymce\TinyMce;
use kartik\file\FileInput;
use sjaakp\taggable\TagEditor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Berita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-form">

    <?php \yii\bootstrap\Modal::begin()?>
    <?php \yii\bootstrap\Modal::end()?>
    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'judul_berita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inti_berita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'editorTags')->widget(TagEditor::className(), [
        'tagEditorOptions' => [
            'autocomplete' => [
                'source' => Url::toRoute(['tag/suggest'])
            ],

        ]
    ]) ?>
    <?= $form->field($model, 'isi_berita')->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'gambar_berita')->widget(FileInput::className(),[
        'options'=>['accept'=>'image/*','multiple'=>false],
        'pluginOptions' => [
            'initialPreview'=> isset($model->gambar_berita)? Yii::getAlias('@imgBackend/berita/').$model->gambar_berita: false,
            'initialPreviewAsData'=>true,
            'initialCaption'=>$model->gambar_berita,
            'initialPreviewConfig' => [
                ['caption' => $model->gambar_berita],
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
