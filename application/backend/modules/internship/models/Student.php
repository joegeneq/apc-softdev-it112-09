<?php

namespace backend\modules\internship\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $student_id
 * @property string $contact_num
 * @property string $course
 * @property string $email
 * @property string $address
 *
 * @property User $user
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'username', 'firstname', 'lastname', 'student_id', 'contact_num', 'course', 'email', 'address'], 'required'],
            [['user_id'], 'integer'],
            [['address'], 'string'],
            [['username', 'email'], 'string', 'max' => 255],
            [['firstname', 'lastname', 'course'], 'string', 'max' => 100],
            [['student_id', 'contact_num'], 'string', 'max' => 15]
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
            'student_id' => 'Student ID',
            'contact_num' => 'Contact Num',
            'course' => 'Course',
            'email' => 'Email',
            'address' => 'Address',
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
