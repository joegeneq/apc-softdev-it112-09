<?php

namespace backend\models\modules\management\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $student_id
 * @property string $contactnum
 * @property string $course
 * @property string $e-mail_address
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
            [['id', 'first_name', 'last_name', 'student_id', 'contactnum', 'course', 'e-mail_address', 'address', 'section', 'user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['first_name', 'last_name', 'e-mail_address', 'address'], 'string', 'max' => 255],
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
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'student_id' => 'Student ID',
            'contactnum' => 'Contactnum',
            'course' => 'Course',
            'e-mail_address' => 'E Mail Address',
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
