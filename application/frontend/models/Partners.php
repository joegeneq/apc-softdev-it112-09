<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "industry_partners".
 *
 * @property integer $id
 * @property string $company_name
  * @property string $company_logo
 * @property string $company_address
 * @property string $company_contactnum
 * @property string $company_description
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            'compnay_logo' => 'Company Logo',
        ];
    }
}
