<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "detail_order".
 *
 * @property int $id_detail_order
 * @property int $id_produk
 * @property int $id_order
 *
 * @property Order $order
 * @property Produk $produk
 */
class DetailOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detail_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_produk', 'id_order'], 'integer'],
            [['id_order'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['id_order' => 'id_order']],
            [['id_produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::className(), 'targetAttribute' => ['id_produk' => 'id_produk']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_detail_order' => 'Id Detail Order',
            'id_produk' => 'Nama Produk',
            'id_order' => 'Id Order',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id_order' => 'id_order']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduk()
    {
        return $this->hasOne(Produk::className(), ['id_produk' => 'id_produk']);
    }


}
