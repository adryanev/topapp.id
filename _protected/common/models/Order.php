<?php

namespace common\models;

use Carbon\Carbon;
use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id_order
 * @property int $id_user
 * @property string $date_order
 * @property string $status
 *
 * @property DetailOrder[] $detailOrders
 * @property User $user
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user'], 'integer'],
            [['date_order', 'status'], 'required'],
            [['date_order'], 'safe'],
            [['status'], 'string', 'max' => 50],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_order' => 'Id Order',
            'id_user' => 'Id User',
            'date_order' => 'Date Order',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailOrders()
    {
        return $this->hasMany(DetailOrder::className(), ['id_order' => 'id_order']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    public static function createOrder(){
    	$model = new Order();
    	$model->id_user = Yii::$app->user->identity->getId();
    	$model->date_order = Carbon::now()->timestamp;
    	$model->status = 'false';

    	return $model->save(false)? $model->id_order: null;
    }
}
