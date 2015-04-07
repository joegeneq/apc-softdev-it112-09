<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use common\models\User;
/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $posts_title
 * @property string $posts_body
 * @property string $post_attachment
 * @property integer $author
 * @property integer $author_role
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $post_type
 *
 * @property User $author0
 */
class Posts extends \yii\db\ActiveRecord
{
    public $file;
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
            [['posts_title', 'posts_body', 'author', 'author_role', 'post_type'], 'required'],
            [['posts_body'], 'string'],
            [['file'],'file'],
            [['author', 'author_role', 'created_at', 'updated_at'], 'integer'],
            [['posts_title', 'post_attachment'], 'string', 'max' => 255],
            [['post_type'], 'string', 'max' => 25]
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
            'file' => 'Post Attachment',
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
