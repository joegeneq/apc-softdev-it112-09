<?php

namespace backend\modules\Industrypartners\models;

use Yii;

/**
 * This is the model class for table "industry_partners".
 *
 * @property integer $id
 * @property string $company_name
 * @property string $company_address
 * @property string $company_contactnum
 * @property string $company_description
 * @property string $company_logo
 *
 * @property Iprofessor[] $iprofessors
 */
class IndustryPartners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'industry_partners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name', 'company_address', 'company_contactnum', 'company_description'], 'required'],
            [['company_description'], 'string'],
            [['file'], 'file'], 
            [['company_name'], 'string', 'max' => 50],
            [['company_address', 'company_logo'], 'string', 'max' => 255],
            [['company_contactnum'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'company_address' => 'Company Address',
            'company_contactnum' => 'Company Contactnum',
            'company_description' => 'Company Description',
            'file' => 'Company Logo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIprofessors()
    {
        return $this->hasMany(Iprofessor::className(), ['company_id' => 'id']);
    }
}
