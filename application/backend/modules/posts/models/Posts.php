<?php

namespace backend\modules\posts\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $posts_title
 * @property string $posts_body
 * @property integer $author
 * @property integer $created_at
 * @property integer $post_type
 *
 * @property User $author0
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
            [['posts_title', 'posts_body', 'author', 'created_at', 'post_type'], 'required'],
            [['posts_body'], 'string'],
            [['author', 'created_at', 'post_type'], 'integer'],
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
            'posts_title' => 'Posts Title',
            'posts_body' => 'Posts Body',
            'author' => 'Author',
            'created_at' => 'Created At',
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
