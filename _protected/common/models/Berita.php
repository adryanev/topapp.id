<?php

namespace common\models;

use backend\models\Admin;
use sjaakp\taggable\TaggableBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "berita".
 *
 * @property int $id_berita
 * @property string $judul_berita
 * @property string $isi_berita
 * @property string $gambar_berita
 * @property int $penerbit_berita
 *
 * @property Admin $penerbitBerita
 * @property TagBerita[] $tagBeritas
 */
class Berita extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'berita';
    }

    public function behaviors()
    {
        return [

                TimestampBehavior::className(),
            'taggable'=>[
                'class'=> TaggableBehavior::className(),
                'tagClass' => Tag::className(),
                'junctionTable' => 'tag_berita',
                'nameAttribute' => 'nama_tag',
                'modelKeyColumn' => 'id_berita',
                'tagKeyColumn' => 'id_tag',
            ]
        ] ;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul_berita'], 'required'],
            [['isi_berita'], 'string'],
            [['penerbit_berita'], 'integer'],
            [['editorTags'], 'safe'],
            [['judul_berita'], 'string', 'max' => 255],
            [['gambar_berita'], 'file','skipOnEmpty' => true],
            [['penerbit_berita'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['penerbit_berita' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'judul_berita' => 'Judul Berita',
            'editorTags'=>'Tag',
            'isi_berita' => 'Isi Berita',
            'gambar_berita' => 'Gambar Berita',
            'penerbit_berita' => 'Penerbit Berita',
            'created_at' => 'Tanggal Dibuat',
            'updated_at'=> 'Terakhir Diperbarui'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenerbitBerita()
    {
        return $this->hasOne(Admin::className(), ['id' => 'penerbit_berita']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagBeritas()
    {
        return $this->hasMany(TagBerita::className(), ['id_berita' => 'id_berita']);
    }
}
