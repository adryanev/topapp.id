<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tag_produk".
 *
 * @property int $id_produk
 * @property int $id_tag
 *
 * @property Produk $produk
 * @property Tag $tag
 */
class TagProduk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag_produk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_produk', 'id_tag'], 'integer'],
            [['id_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::className(), 'targetAttribute' => ['id_produk' => 'id_produk']],
            [['id_tag'], 'exist', 'skipOnError' => true, 'targetClass' => Tag::className(), 'targetAttribute' => ['id_tag' => 'id_tag']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_produk' => 'Id Produk',
            'id_tag' => 'Id Tag',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduk()
    {
        return $this->hasOne(Produk::className(), ['id_produk' => 'id_produk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tag::className(), ['id_tag' => 'id_tag']);
    }
}
