<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $post_id
 * @property string $post_title
 * @property string $post_description
 * @property string $post_date
 * @property integer $userid
 *
 * @property CpoOfficers $user
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_title', 'post_description', 'post_date', 'userid'], 'required'],
            [['post_description'], 'string'],
            [['post_date'], 'date'],
            [['userid'], 'integer'],
            [['post_title'], 'string', 'max' => 140]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_title' => 'Post Title',
            'post_description' => 'Post Description',
            'post_date' => 'Post Date',
            'userid' => 'Userid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(CpoOfficers::className(), ['userid' => 'userid']);
    }
}
