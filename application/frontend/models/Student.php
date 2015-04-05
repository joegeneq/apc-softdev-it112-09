<?php

namespace frontend\models;

use Yii;
use common\models\User;
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
 * @property string $student_pic
 *
 * @property User $user
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $image;

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
            [['id', 'user_id', 'username', 'firstname', 'lastname', 'student_id', 'contact_num', 'course', 'email', 'address'], 'required'],
            [['id', 'user_id', 'term'], 'integer'],
            [['address'], 'string'],
            ['image', 'file'],
            [['username', 'email','student_pic'], 'string', 'max' => 255],
            [['firstname', 'lastname', 'course'], 'string', 'max' => 100],
            [['student_id', 'contact_num'], 'string', 'max' => 15],
            [['intern_year'], 'string', 'max' => 25],
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
            'internship' => 'Internship',
            'intern_year' => 'School Year',
            'term' => 'Term',
            'image' => 'Profile Picture',
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
