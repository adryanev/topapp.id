<?php

namespace common\models;

use sjaakp\taggable\TagBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property string $nama_tag
 * @property int $count

 * @property string $created_at
 * @property string $updated_at
 *
 * @property TagBerita[] $tagBeritas
 * @property TagProduk[] $tagProduks
 */
class Tag extends \yii\db\ActiveRecord
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag';
    }

    public function behaviors()
    {
        return [

                TimestampBehavior::className(),

            'tag'=>[
                'class' => TagBehavior::className(),
                'junctionTable' => ['tag_berita'],
                'nameAttribute' => 'nama_tag',
                'tagKeyColumn' => 'id_tag',
                'modelClass'=>Berita::class

            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['count','created_at', 'updated_at'], 'safe'],
            [['nama_tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_tag' => 'Nama Tag',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagBeritas()
    {
        return $this->hasMany(TagBerita::className(), ['id_tag' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagProduks()
    {
        return $this->hasMany(TagProduk::className(), ['id_tag' => 'id']);
    }

    public function getBeritas(){
        return $this->hasMany(Berita::className(),['id_berita'=>'id_berita'])
            ->viaTable('tag_berita',['id_tag'=>'id']);
    }

}
