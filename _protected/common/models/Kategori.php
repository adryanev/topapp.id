<?php

namespace common\models;

use common\models\Produk;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "kategori".
 *
 * @property int $id_kategori
 * @property string $nama_kategori
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Produk[] $produks
 */
class Kategori extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return
            [
                TimestampBehavior::className(),

            ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kategori', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_kategori'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'nama_kategori' => 'Nama Kategori',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduks()
    {
        return $this->hasMany(Produk::className(), ['kategori_produk' => 'id_kategori']);
    }
}
