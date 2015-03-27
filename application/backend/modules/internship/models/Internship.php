<?php

namespace backend\modules\internship\models;

use Yii;

/**
 * This is the model class for table "internship".
 *
 * @property integer $id
 * @property integer $student_id
 * @property string $start_date
 * @property string $end_date
 * @property integer $iprofessor_id
 * @property integer $company_id
 *
 * @property Student $student
 * @property Iprofessor $iprofessor
 * @property IndustryPartners $company
 * @property StudentJournal[] $studentJournals
 */
class Internship extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'internship';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'start_date', 'end_date', 'iprofessor_id', 'company_id'], 'required'],
            [['student_id', 'iprofessor_id', 'company_id'], 'integer'],
            [['start_date', 'end_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'iprofessor_id' => 'Iprofessor ID',
            'company_id' => 'Company ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIprofessor()
    {
        return $this->hasOne(Iprofessor::className(), ['id' => 'iprofessor_id']);
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
    public function getStudentJournals()
    {
        return $this->hasMany(StudentJournal::className(), ['intership_id' => 'id']);
    }
}
