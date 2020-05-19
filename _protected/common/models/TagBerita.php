<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tag_berita".
 *
 * @property int $id_berita
 * @property int $id_tag
 *
 * @property Berita $berita
 * @property Tag $tag
 */
class TagBerita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag_berita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_berita', 'id_tag'], 'integer'],
            [['id_berita'], 'exist', 'skipOnError' => true, 'targetClass' => Berita::className(), 'targetAttribute' => ['id_berita' => 'id_berita']],
            [['id_tag'], 'exist', 'skipOnError' => true, 'targetClass' => Tag::className(), 'targetAttribute' => ['id_tag' => 'id_tag']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'id_tag' => 'Id Tag',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBerita()
    {
        return $this->hasOne(Berita::className(), ['id_berita' => 'id_berita']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tag::className(), ['id_tag' => 'id_tag']);
    }
}
