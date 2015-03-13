<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $student_id
 * @property string $contactnum
 * @property string $course
 * @property string $email
 * @property string $address
 * @property string $section
 * @property integer $user_id
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
            [['id', 'firstname', 'lastname', 'student_id', 'contactnum', 'course', 'email', 'address', 'section', 'user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['address'], 'string'],
            [['firstname', 'lastname', 'email'], 'string', 'max' => 255],
            [['student_id', 'contactnum', 'section'], 'string', 'max' => 15],
            [['course'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'student_id' => 'Student ID',
            'contactnum' => 'Contactnum',
            'course' => 'Course',
            'email' => 'Email',
            'address' => 'Address',
            'section' => 'Section',
            'user_id' => 'User ID',
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
