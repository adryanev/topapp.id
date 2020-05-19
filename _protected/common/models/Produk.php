<?php

namespace common\models;

use backend\models\Admin;
use common\models\Kategori;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "produk".
 *
 * @property int $id_produk
 * @property string $nama_produk
 * @property int $kategori_produk
 * @property string $developer
 * @property string $deskripsi_produk
 * @property string $fitur_produk
 * @property string $spesifikasi
 * @property string $video
 * @property string $demo
 * @property string $manual_book
 * @property string $rancangan
 * @property int $status
 * @property int $added_by
 * @property string $created_at
 * @property string $updated_at
 * @property string $gambar
 * @property DetailOrder[] $detailOrders
 * @property Admin $addedBy
 * @property Kategori $kategoriProduk
 * @property TagProduk[] $tagProduks
 */
class Produk extends \yii\db\ActiveRecord
{
	const STATUS_DELETED = 0;
	const STATUS_ACTIVE = 10;

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
        return 'produk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_produk', 'developer'], 'required'],
            [['kategori_produk', 'status', 'added_by'], 'integer'],
            [['deskripsi_produk','fitur_produk', 'spesifikasi','gambar'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_produk', 'developer', 'video', 'demo', 'manual_book','gambar', 'rancangan'], 'string', 'max' => 255],
            [['added_by'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['added_by' => 'id']],
            [['kategori_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['kategori_produk' => 'id_kategori']],
	        ['status', 'default', 'value' => self::STATUS_ACTIVE],
	        ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_produk' => 'Id Produk',
            'nama_produk' => 'Nama Produk',
            'kategori_produk' => 'Kategori Produk',
            'developer' => 'Developer',
            'deskripsi_produk' => 'Deskripsi Produk',
            'fitur_produk' => 'Fitur Produk',
            'spesifikasi' => 'Spesifikasi',
            'video' => 'Video',
            'demo' => 'Demo',
            'manual_book' => 'Manual Book',
            'rancangan' => 'Rancangan',
            'status' => 'Status',
            'added_by' => 'Added By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'gambar'=> 'Gambar'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailOrders()
    {
        return $this->hasMany(DetailOrder::className(), ['id_produk' => 'id_produk']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddedBy()
    {
        return $this->hasOne(Admin::className(), ['id' => 'added_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriProduk()
    {
        return $this->hasOne(Kategori::className(), ['id_kategori' => 'kategori_produk']);
    }

}
