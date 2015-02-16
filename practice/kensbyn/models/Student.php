<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property string $student_num
 * @property string $lastname
 * @property string $firstname
 * @property string $initial
 * @property string $email
 * @property string $password_hash
 * @property integer $enrolled
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
            [['enrolled'], 'integer'],
            [['student_num'], 'string', 'max' => 12],
            [['lastname', 'firstname'], 'string', 'max' => 30],
            [['initial'], 'string', 'max' => 5],
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
            'student_num' => 'Student Number',
            'lastname' => 'Last Name',
            'firstname' => 'First Nameame',
            'initial' => 'Middle Initial',
            'email' => 'Email Address',
            'password_hash' => 'Password',
            'enrolled' => 'Enrolled',
        ];
    }
}
