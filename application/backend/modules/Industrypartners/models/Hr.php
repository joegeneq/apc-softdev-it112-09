<?php

namespace backend\modules\Industrypartners\models;

use Yii;

/**
 * This is the model class for table "Partner_HR".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $contact_num
 * @property integer $company_id
 *
 * @property User $user
 * @property IndustryPartners $company
 */
class Hr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Partner_HR';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'username', 'firstname', 'lastname', 'email', 'contact_num', 'company_id'], 'required'],
            [['user_id', 'company_id'], 'integer'],
            [['username', 'email'], 'string', 'max' => 255],
            [['firstname', 'lastname'], 'string', 'max' => 100],
            [['contact_num'], 'string', 'max' => 15]
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
            'contact_num' => 'Contact Num',
            'company_id' => 'Company ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(IndustryPartners::className(), ['id' => 'company_id']);
    }
}
