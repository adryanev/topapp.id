<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tag_training".
 *
 * @property int $id_training
 * @property int $id_tag
 * @property int $ord
 *
 * @property Training $training
 */
class TagTraining extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tag_training';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_training', 'id_tag', 'ord'], 'integer'],
            [['id_training'], 'exist', 'skipOnError' => true, 'targetClass' => Training::className(), 'targetAttribute' => ['id_training' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_training' => 'Id Training',
            'id_tag' => 'Id Tag',
            'ord' => 'Ord',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTraining()
    {
        return $this->hasOne(Training::className(), ['id' => 'id_training']);
    }
}
