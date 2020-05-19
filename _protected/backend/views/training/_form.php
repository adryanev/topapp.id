<?php

use dosamigos\tinymce\TinyMce;
use kartik\file\FileInput;
use sjaakp\taggable\TagEditor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Training */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="training-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_training')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'editorTags')->widget(TagEditor::className(), [
        'tagEditorOptions' => [
            'autocomplete' => [
                'source' => Url::toRoute(['tag/suggest'])
            ],

        ]
    ]) ?>
    <?= $form->field($model, 'deskripsi')->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'foto')->widget(FileInput::className(),[
        'options'=>['accept'=>'image/*','multiple'=>false],
        'pluginOptions' => [
            'initialPreview'=> isset($model->foto)? Yii::getAlias('@imgBackend/training/'.$model->foto): false,
            'initialPreviewAsData'=>true,
            'initialCaption'=>$model->foto,
            'initialPreviewConfig' => [
                ['caption' => $model->foto],
            ],
            'overwriteInitial'=>true,
            'showUpload'=>false,

        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success waves-effect waves-light']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
