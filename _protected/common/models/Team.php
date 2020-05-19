<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $nama_lengkap
 * @property string $jabatan
 * @property string $foto
 * @property int $created_at
 * @property int $updated_at
 * @property string $facebook_link
 * @property string $github_link
 * @property string $twitter_link
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['nama_lengkap'], 'string', 'max' => 50],
            [['jabatan', 'foto', 'facebook_link', 'github_link', 'twitter_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_lengkap' => 'Nama Lengkap',
            'jabatan' => 'Jabatan',
            'foto' => 'Foto',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'facebook_link' => 'Facebook Link',
            'github_link' => 'Github Link',
            'twitter_link' => 'Twitter Link',
        ];
    }
}
