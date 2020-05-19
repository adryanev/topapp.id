<?php
namespace frontend\models;

use yii\base\Model;
use backend\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $nama;
    public $email;
    public $password;
    public $instansi;
    public $job;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama',], 'required'],
            [[ 'nama'], 'string', 'max' => 255],

            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            [['instansi','job'],'required'],
            [['instansi','job'],'string'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->nama = $this->nama;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->instansi = $this->instansi;
        $user->job = $this->job;
        
        return $user->save() ? $user : null;
    }
}
