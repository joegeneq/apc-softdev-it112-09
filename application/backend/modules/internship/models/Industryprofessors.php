<?php

namespace backend\modules\internship\models;

use Yii;
use backend\modules\Industrypartners\models\IndustryPartners;

/**
 * This is the model class for table "iprofessor".
 *
 * @property integer $id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $contact_num
 * @property integer $company_id
 * @property integer $user_id
 *
 * @property IndustryPartners $company
 * @property User $user
 */
class Industryprofessors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'iprofessor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'firstname', 'lastname', 'email', 'contact_num', 'company_id', 'user_id'], 'required'],
            [['company_id', 'user_id'], 'integer'],
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
            'username' => 'Username',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'contact_num' => 'Contact Num',
            'company_id' => 'Company ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(IndustryPartners::className(), ['id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
