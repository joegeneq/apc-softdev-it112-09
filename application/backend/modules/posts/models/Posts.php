<?php

namespace backend\modules\posts\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $posts_title
 * @property string $posts_body
 * @property integer $author
 * @property integer $author_role
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $post_type
 *
 * @property User $author0
 */
class posts extends \yii\db\ActiveRecord
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
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['posts_title', 'posts_body', 'author', 'author_role', 'created_at', 'updated_at', 'post_type'], 'required'],
            [['posts_body'], 'string'],
            [['author', 'author_role', 'created_at', 'updated_at', 'post_type'], 'integer'],
            [['posts_title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'posts_title' => 'Title',
            'posts_body' => 'Content',
            'author' => 'Author',
            'author_role' => 'Author Role',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'post_type' => 'Post Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(User::className(), ['id' => 'author']);
    }
}
