<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cpo_officers".
 *
 * @property string $userid
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password_hash
 */
class CpoOfficers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cpo_officers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'required'],
            [['firstname', 'lastname'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 50],
            [['password_hash'], 'string', 'max' => 70]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'password_hash' => 'Password Hash',
        ];
    }
}
