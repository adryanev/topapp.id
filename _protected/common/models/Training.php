<?php

namespace common\models;

use sjaakp\taggable\TaggableBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "training".
 *
 * @property int $id
 * @property string $nama_training
 * @property string $deskripsi
 * @property string $foto
 * @property int $created_at
 * @property int $updated_at
 *
 * @property TagTraining[] $tagTrainings
 */
class Training extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
            ],
            'taggable'=>[
                'class'=> TaggableBehavior::className(),
                'tagClass' => Tag::className(),
                'junctionTable' => 'tag_training',
                'nameAttribute' => 'nama_tag',
                'modelKeyAttribute' => 'id_training',
                'tagKeyAttribute' => 'id_tag',
            ]
        ] ;
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'training';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_training'], 'required'],
            [['deskripsi'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['nama_training', 'foto'], 'string', 'max' => 255],
            [['editorTags'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_training' => 'Nama Training',
            'deskripsi' => 'Deskripsi',
            'foto' => 'Foto',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagTrainings()
    {
        return $this->hasMany(TagTraining::className(), ['id_training' => 'id']);
    }
}
