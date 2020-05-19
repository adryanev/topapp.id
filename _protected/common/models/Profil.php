<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "profil".
 *
 * @property int $id_profil
 * @property string $foto_profil
 * @property string $isi_profil
 * @property string $nama_app
 * @property string $alamat
 * @property string $email
 * @property string $hp
 * @property string $created_at
 * @property string $updated_at
 */
class Profil extends \yii\db\ActiveRecord
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
        return 'profil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isi_profil', 'nama_app', 'alamat', 'email', 'hp'], 'required'],
            [['isi_profil', 'alamat'], 'string'],
            [['created_at', 'update_at','foto_profil'], 'safe'],
            [['foto_profil', 'email'], 'string', 'max' => 255],
            [['nama_app'], 'string', 'max' => 100],
            [['hp'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_profil' => 'Id Profil',
            'foto_profil' => 'Foto Profil',
            'isi_profil' => 'Isi Profil',
            'nama_app' => 'Nama App',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'hp' => 'Hp',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
        ];
    }
}
