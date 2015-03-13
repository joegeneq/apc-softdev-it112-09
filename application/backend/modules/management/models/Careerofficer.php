<?php

namespace backend\modules\management\models;

use Yii;

/**
 * This is the model class for table "cpofficer".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 *
 * @property User $user
 */
class Careerofficer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cpofficer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'username', 'firstname', 'lastname', 'email'], 'required'],
            [['user_id'], 'integer'],
            [['username', 'email'], 'string', 'max' => 255],
            [['firstname', 'lastname'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'username' => 'Username',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
